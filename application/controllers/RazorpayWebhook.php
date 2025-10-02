<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RazorpayWebhook extends CI_Controller {

    public function __construct()
    {
        date_default_timezone_set('Asia/Kolkata');
       parent:: __construct();
       error_reporting(0);
    }

	public function index() 
	{
 		$input = file_get_contents("php://input");
 		file_put_contents(FCPATH . 'razorpay_webhook_log.txt', date('Y-m-d H:i:s') . ' | ' . $input . PHP_EOL, FILE_APPEND);
 		$webhookSecret = 'HQ@62cvtmEWpFH7';
 		$signature = $_SERVER['HTTP_X_RAZORPAY_SIGNATURE'] ?? '';
 		$expected = hash_hmac('sha256', $input, $webhookSecret);
 		if (!hash_equals($expected, $signature)) {
 			http_response_code(400); echo 'Invalid signature'; return;
 		}
		$payload = json_decode($input, true);
		$event = $payload['event'];
		if ($event === 'payment.captured') {
		 	$payment = $payload['payload']['payment']['entity'];
		 	$notes = $payment['notes'];
		 	switch ($notes['specialType']) {
		 		case 'funnel': $this->handleFunnelPayment($notes, $payment); break;
		 		case 'searchbeforelogin' : $this->handleSearchBeforeLoginPayment($notes,$payment);break;
		 		case 'nonMissing' : $this->handleNonMissingPayment($notes,$payment);break;
		 	}
 			http_response_code(200); echo 'OK';
 		}
	}

	private function handleNonMissingPayment($notes,$payment)
	{
		$getLapataDetails = $this->db->query('select * from unknown_person where id='.$notes['unknownId'])->result_array();
        if($getLapataDetails[0]['aadharNumber'] != NULL)
        {
        	if($payment['amount'] == 0)
	        {
	            $this->db->where('uid',$notes['userId']);
	            $this->db->update('user',array('freeCreditUsed' => 1));
	        }
	        $getIfAlready = $this->db->query('select * from uploadtransactions where type="'.$notes['paymentType'].'" and isKyc=0 and userId='.$notes['userId'].' and idNumber="'.$notes['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'" order by Id desc')->result_array();
	        $getPackageDetails = $this->db->query('select * from packages where Id='.$notes['packageId'])->result_array();
	        if(count($getIfAlready) > 0)
	        {
	            $date=date_create(date('Y-m-d',strtotime($getIfAlready[0]['expiryDate'])));
	            date_add($date,date_interval_create_from_date_string($getPackageDetails[0]['validity']." days"));
	            $finaldate = date_format($date,"Y-m-d");
	            $update = $this->db->query('update unknown_person set isFromUpload = 0, dateCreated="'.date('Y-m-d H:i:s A').'",finalSubmitTime="'.date('Y-m-d H:i:s A').'",isFinalSubmitted=1, expiryDate="'.$finaldate.'" where userId='.$notes['userId'].' and isKyc=0 and aadharNumber="'.$notes['idNumber'].'" and id='.$notes['unknownId']);
	            $insertdata = array(
	                'userId' => $notes['userId'],
	                'type' => $notes['paymentType'],
	                'expiryDate' => $finaldate,
	                'dateCreated' => date('Y-m-d H:i:s A'),
	                'idNumber' => $notes['idNumber'],
	                'amount' => $payment['amount'],
	                'packageId' => $notes['packageId'],
					'isKyc' => 0,
					'razorpay_id' => $payment['id']
	            );
	        }else{
	            $update = $this->db->query('update unknown_person set isFromUpload = 0, dateCreated="'.date('Y-m-d H:i:s A').'",finalSubmitTime="'.date('Y-m-d H:i:s A').'",isFinalSubmitted=1, expiryDate="'.date('Y-m-d',strtotime('+'.($getPackageDetails[0]['validity']).' days')).'" where userId='.$notes['userId'].' and isKyc=0 and aadharNumber="'.$notes['idNumber'].'" and id='.$notes['unknownId']);
	            $insertdata = array(
	                'userId' => $notes['userId'],
	                'type' => $notes['paymentType'],
	                'idNumber' => $notes['idNumber'],
	                'expiryDate' => date('Y-m-d',strtotime('+'.($getPackageDetails[0]['validity']).' days')),
	                'dateCreated' => date('Y-m-d H:i:s A'),
	                'amount' => $payment['amount'],
	                'packageId' => $notes['packageId'],
					'isKyc' => 0,
					'razorpay_id' => $payment['id']
	            );
	        }
	        $this->db->insert('uploadtransactions', $insertdata);
	        $response['Id'] = $this->db->insert_id();
	        $vectorizerData = array(
	            'unknownId' => $notes['unknownId'],
	            'imageStatus' => 'Pending',
	            'uploadTime' => date('Y-m-d H:i:s A'),
	            'isUpload' => $notes['isUpload']
	        );
	        $this->db->insert('indexer',$vectorizerData);
	        echo json_encode($response);   
        }else{
        	if($payment['amount'] == 0)
	        {
	            $this->db->where('uid',$notes['userId']);
	            $this->db->update('nonKycUser',array('freeCreditUsed' => 1));
	        }
	        $getIfAlready = $this->db->query('select * from uploadWithoutTransactions where type="lapata" and isKyc=0 and userId='.$notes['userId'].' and idNumber="'.$notes['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'" order by Id desc')->result_array();
	        $getPackageDetails = $this->db->query('select * from packages where Id='.$notes['packageId'])->result_array();
	        if(count($getIfAlready) > 0)
	        {
	            $date=date_create(date('Y-m-d',strtotime($getIfAlready[0]['expiryDate'])));
	            date_add($date,date_interval_create_from_date_string($getPackageDetails[0]['validity']." days"));
	            $finaldate = date_format($date,"Y-m-d");
	            $update = $this->db->query('update unknown_person set isFromUpload = 0, isFinalSubmitted = 1,finalSubmitTime="'.date('Y-m-d H:i:s A').'",dateCreated="'.date('Y-m-d H:i:s A').'", expiryDate="'.$finaldate.'" where userId='.$notes['userId'].' and awsEventName !="Unknown" and isKyc=0 and Application_no="'.$notes['idNumber'].'"');
	            $insertdata = array(
	                'userId' => $notes['userId'],
	                'type' => $notes['paymentType'],
	                'expiryDate' => $finaldate,
	                'dateCreated' => date('Y-m-d H:i:s A'),
	                'idNumber' => $notes['idNumber'],
	                'amount' => $payment['amount'],
	                'packageId' => $notes['packageId'],
					'isKyc' => 0,
					'razorpay_id' => $payment['id']
	            );
	        }else{
	            $update = $this->db->query('update unknown_person set isFromUpload = 0, isFinalSubmitted = 1,finalSubmitTime="'.date('Y-m-d H:i:s A').'", dateCreated="'.date('Y-m-d H:i:s A').'", expiryDate="'.date('Y-m-d',strtotime('+'.($getPackageDetails[0]['validity']).' days')).'" where userId='.$notes['userId'].' and isKyc=0 and awsEventName !="Unknown" and Application_no="'.$notes['idNumber'].'"');
	            $insertdata = array(
	                'userId' => $notes['userId'],
	                'type' => $notes['paymentType'],
	                'idNumber' => $notes['idNumber'],
	                'expiryDate' => date('Y-m-d',strtotime('+'.($getPackageDetails[0]['validity']).' days')),
	                'dateCreated' => date('Y-m-d H:i:s A'),
	                'amount' => $payment['amount'],
	                'packageId' => $notes['packageId'],
					'isKyc' => 0,
					'razorpay_id' => $payment['id']
	            );
	        }
	        $this->db->insert('uploadWithoutTransactions', $insertdata);
	        $vectorizerData = array(
	            'unknownId' => $notes['unknownId'],
	            'imageStatus' => 'Pending',
	            'uploadTime' => date('Y-m-d H:i:s A'),
	            'isUpload' => $notes['isUpload']
	        );
	        $this->db->insert('indexer',$vectorizerData);
        }
	}

	private function handleSearchBeforeLoginPayment($notes,$payment)
	{
		$userId = $notes['userId'];
		$insertdata = array(
            'userId' => $userId,
            'isKyc' => $notes['isKyc'],
            'type' => 'unknown',
            'idNumber' => $notes['idNumber'],
            'dateCreated' => date('Y-m-d H:i:s A'),
            'amount' => 49,
        );
        $this->db->insert('unknownTransactions', $insertdata);
	}

	private function handleFunnelPayment($notes, $payment) {
	    $userId = $notes['userId'];
	    $duration = $notes['duration'];
	    $expiry = date('Y-m-d', strtotime("+".$duration));

	    $data = [
	        'userId' => $userId,
	        'dateCreated' => date('Y-m-d H:i:s A'),
	        'amount' => $payment['amount'] / 100,
	        'duration' => $duration,
	        'paymentType' => $notes['paymentType'],
	        'expiryDate' => $expiry,
	        'razorpay_id' => $payment['id']
	    ];

	    $exists = $this->db->get_where('funneltransactions', ['razorpay_id' => $payment['id']])->row();

	    if (!$exists) {
	        $this->db->insert('funneltransactions', $data);
	    }
	}

}

?>
