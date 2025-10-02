<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {
	public function __construct()
    {
       parent:: __construct();
       error_reporting(0);
    }
    
    public function index(){
    	if($this->session->userdata('hotel_login') == 'yes'){
         $page_data['page_name'] = 'dashboard';
         $this->load->view('hotel/index', $page_data);
      } else {
        $page_data['title'] = 'Login';
        $page_data['control'] = 'hotel';
        $this->load->view('hotel/common/header',$page_data); 
        $this->load->view('hotel/login');
        $this->load->view('hotel/common/footer'); 
      }
    }
    
    function getMobileDetails()
    {
        if($_POST['type'] == 'gst')
        {
            $getIfAlready = $this->db->query('select * from hotel where gstNumber="'.$_POST['value'].'"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from hotel where username="'.$_POST['value'].'"')->result_array();
        }
        if(count($getIfAlready) > 0)
        {
            if($getIfAlready[0]['alternate_mobile1'] != NULL && $getIfAlready[0]['alternate_mobile2'] == NULL)
            {
                $response = array(
                    'status' => 'success',
                    'isAlternate' => true,
                    'isAlternate1' => true,
                    'isAlternate2' => false,
                    'data' => array(
                        'mobile1' => $getIfAlready[0]['registration_mobile'],
                        'mobile2' => $getIfAlready[0]['alternate_mobile1'],
                        'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                        'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile1'],'xxxxxx',0,7),
                    )
                );
                echo json_encode($response);
            }else if($getIfAlready[0]['alternate_mobile2'] != NULL && $getIfAlready[0]['alternate_mobile1'] == NULL)
            {
                $response = array(
                    'status' => 'success',
                    'isAlternate' => true,
                    'isAlternate1' => false,
                    'isAlternate2' => true,
                    'data' => array(
                        'mobile1' => $getIfAlready[0]['registration_mobile'],
                        'mobile2' => $getIfAlready[0]['alternate_mobile2'],
                        'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                        'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile2'],'xxxxxx',0,7)
                    )
                );
                echo json_encode($response);
            }else if($getIfAlready[0]['alternate_mobile2'] != NULL && $getIfAlready[0]['alternate_mobile1'] != NULL)
            {
                $response = array(
                    'status' => 'success',
                    'isAlternate' => true,
                    'isAlternate1' => true,
                    'isAlternate2' => true,
                    'data' => array(
                        'mobile1' => $getIfAlready[0]['registration_mobile'],
                        'mobile2' => $getIfAlready[0]['alternate_mobile1'],
                        'mobile3' => $getIfAlready[0]['alternate_mobile2'],
                        'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                        'vismobile2' => substr_replace($getIfAlready[0]['alternate_mobile1'],'xxxxxx',0,7),
                        'vismobile3' => substr_replace($getIfAlready[0]['alternate_mobile2'],'xxxxxx',0,7)
                    )
                );
                echo json_encode($response);
            }
            else{
                $response = array(
                    'status' => 'success',
                    'isAlternate' => false,
                    'data' => array(
                        'mobile1' => $getIfAlready[0]['registration_mobile'],
                        'vismobile1' => substr_replace($getIfAlready[0]['registration_mobile'],'xxxxxx',0,7),
                    )
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid Credentials'
            );
            echo json_encode($response);
        }
    }
    
    function sendLoginOtp()
    {
        if($_POST['type'] == 'gst')
        {
            $getIfAlready = $this->db->query('select * from hotel where gstNumber="'.$_POST['typeval'].'"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from hotel where username="'.$_POST['typeval'].'"')->result_array();
        }
        if(count($getIfAlready) > 0)
        {
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getIfAlready[0]['name'],$_POST['mobile'],$otp);
            // $otp = '1234';
            $update = $this->db->query('update hotel set otp='.$otp.' where hotel_id='.$getIfAlready[0]['hotel_id']);
            if($update)
            {
                $response = array(
                    'status' => 'success'
                );
            }else{
                $response = array(
                    'status' => 'error'
                );
            }
            echo json_encode($response);
        }
    }
    
    function checkInactiveFace()
    {
        $data = $_POST["photo"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageId = time().''.rand(0,10000);
        $newImagePath = 'upload/checkPerson/'.$imageId.'.'.$split1[1];
        
        file_put_contents($newImagePath, $data);
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $newImagePath;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = true;  
        $config['quality'] = '60%';  
        $config['width'] = 320;  
        $config['height'] = 240;  
        $config['new_image'] = $newImagePath;  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize(); 
        $this->load->library('Image_autorotate',$newImagePath);
        $this->image_lib->clear();
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $address = '';
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        $confidence = 0;
        $faceResponse = array();
        $userphoto = '';
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.pixnif.com/api/v1/refresh-event?awsEventName=shivaguptabcaAll',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
          ),
        ));
        $vectorResponse = json_decode(curl_exec($curl),true);
        curl_close($curl);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.pixnif.com/api/v1/search-image?awsEventName=All&imageId='.$imageId.'&imageUrl='.base_url().''.$newImagePath,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization: Bearer '.$this->getSettings('facematchtoken')
          ),
        ));
        
        $faceresponse = json_decode(curl_exec($curl),true);
        curl_close($curl);
        if(count($faceresponse) > 0)
        {
            if(count($faceresponse['output']) > 0)
            {
                $getGuestDetail = $this->db->query('select * from hotelEntry where Id='.$_POST['Id'])->result_array();
                $getUserDetail = $this->db->query('select * from user where uid='.$getGuestDetail[0]['personId'])->result_array();
                if(in_array($getUserDetail[0]['imageId'],$faceresponse['output']))
                {
                    $response['status']= 'success';
                    echo json_encode($response);
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Face Not Matched'
                    );
                    echo json_encode($response);        
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Face Not Matched'
                );
                echo json_encode($response);    
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Face Not Matched'
            );
            echo json_encode($response);       
        }
    }
    
    function checkInactiveEntry()
    {
        unset($_POST['_token']);
        $aadhar = $this->input->post('aadhar_id');
        $credential = array('aadhar_id' => $aadhar);
        $query = $this->db->get_where('user', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if($row->final_mobile_verification == 'success')
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Already Verified'
                );
                echo json_encode($response);
            }else
            {
                $ch = curl_init();
                $curlConfig = array(
                    CURLOPT_URL            => "http://142.93.222.228:8080/Uidverifywebsvcv1/VerifyEmailMobilelink",
                    CURLOPT_POST           => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/x-www-form-urlencoded'
                    ),
                    CURLOPT_POSTFIELDS     => 'method=emailnmobilev2&txn_id=94b5c5de-e94d-11ec-8fea-0242ac120002&uidnumber='.$_POST['aadhar_id'].'&consent=Y&clientid=SIVA_TEST&verificationCode=&mobileNumber='.$_POST['registration_mobile'],
                );
                curl_setopt_array($ch, $curlConfig);
                $result = json_decode(curl_exec($ch),true);
                if(isset($result['Succeeded']))
                {
                    if($result['Succeeded']['Uid_Details']['responseData']['status'] == 'Success')
                    {
                        if(!$result['Succeeded']['Uid_Details']['responseData']['otpSentSuccessfully'])
                        {
                            $curl = curl_init();
                            curl_setopt_array($curl, [
                              CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/boson/generate-otp",
                              CURLOPT_RETURNTRANSFER => true,
                              CURLOPT_ENCODING => "",
                              CURLOPT_MAXREDIRS => 10,
                              CURLOPT_TIMEOUT => 30,
                              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                              CURLOPT_CUSTOMREQUEST => "POST",
                              CURLOPT_POSTFIELDS => '{"aadhaar_number": '.$_POST['aadhar_id'].',  "consent": "Y"}',
                              CURLOPT_HTTPHEADER => [
                                "Content-Type: application/json",
                                "X-API-Key: ".$this->getSettings(),
                                "X-Auth-Type: API-Key"
                              ],
                            ]);

                            $response = json_decode(curl_exec($curl),true);
                            if($response['status'] == 200)
                            {
                                $this->db->where('uid',$row->uid);
                                $this->db->update('user',array('registration_mobile' => $_POST['registration_mobile']));
                                $_SESSION['aadharId'] = $_POST['aadhar_id'];
                                $_SESSION['mob'] = $_POST['registration_mobile'];
                                $_SESSION['transactionId'] = $response['data']['transaction_id'];
                                $response = array(
                                    'status' => 'success',
                                    'message' => $response['data']['message']
                                );
                                echo json_encode($response);
                            }else
                            {
                                $response = array(
                                    'status' => 'error',
                                    'message' => $response['error']['message']
                                );
                                echo json_encode($response);
                            }
                        }else{
                            $this->db->where('uid',$row->uid);
                            $this->db->update('user',array('registration_mobile' => $_POST['registration_mobile']));
                            $_SESSION['aadharId'] = $_POST['aadhar_id'];
                            $_SESSION['mob'] = $_POST['registration_mobile'];
                            $response = array(
                                'status' => 'success',
                                'message' => $result['Succeeded']['Uid_Details']['responseData']['message']
                            );
                            echo json_encode($response);
                        }
                    }else
                    {
                        $response = array(
                            'status' => 'failed',
                            'message' => $result['Succeeded']['Uid_Details']['responseData']['message']
                        );
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'failed',
                        'message' => $result['Failed']['ErrorMessage']
                    );
                    echo json_encode($response);
                }
                curl_close($ch);
            }
        } else {
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://142.93.222.228:8080/Uidverifywebsvcv1/VerifyEmailMobilelink',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => 'method=emailnmobilev2&txn_id=94b5c5de-e94d-11ec-8fea-0242ac120002&uidnumber='.$_POST['aadhar_id'].'&consent=Y&clientid=SIVA_TEST&verificationCode=&mobileNumber='.$_POST['registration_mobile'],
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            
            $result = json_decode(curl_exec($curl),true);
            if(isset($result['Succeeded']))
            {
                if($result['Succeeded']['Uid_Details']['responseData']['status'] == 'Success')
                {
                    if(!$result['Succeeded']['Uid_Details']['responseData']['otpSentSuccessfully'])
                    {
                        $curl = curl_init();
                        $postfields = json_encode(array(
                            'aadhaar_number' => $_POST['aadhar_id'],
                            'consent' => 'Y'
                        ));
                        curl_setopt_array($curl, [
                          CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/boson/generate-otp",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS => '{"aadhaar_number": '.$_POST['aadhar_id'].',  "consent": "Y"}',
                          CURLOPT_HTTPHEADER => [
                            "Content-Type: application/json",
                            "X-API-Key: ".$this->getSettings(),
                            "X-Auth-Type: API-Key"
                          ],
                        ]);

                        $response = json_decode(curl_exec($curl),true);
                        if($response['status'] == 200)
                        {
                            unset($_POST['consent']);
                            $insert = $this->db->insert('user',$_POST) ;
                            $_SESSION['aadharId'] = $_POST['aadhar_id'];
                            $_SESSION['mob'] = $_POST['registration_mobile'];
                            $_SESSION['transactionId'] = $response['data']['transaction_id'];
                            $response = array(
                                'status' => 'success',
                                'message' => $response['data']['message']
                            );
                            echo json_encode($response);
                        }else
                        {
                            $response = array(
                                'status' => 'error',
                                'message' => $response['error']['message']
                            );
                            echo json_encode($response);
                        }
                    }else{
                        unset($_POST['consent']);
                        $insert = $this->db->insert('user',$_POST) ;
                        $_SESSION['aadharId'] = $_POST['aadhar_id'];
                        $_SESSION['mob'] = $_POST['registration_mobile'];
                        $response = array(
                            'status' => 'success',
                            'message' => $result['Succeeded']['Uid_Details']['responseData']['message']
                        );
                        echo json_encode($response);
                    }
                }else
                {
                    $response = array(
                        'status' => 'failed',
                        'message' => $result['Succeeded']['Uid_Details']['responseData']['message']
                    );
                    echo json_encode($response);
                }
            }else{
                $response = array(
                    'status' => 'failed',
                    'message' => $result['Failed']['ErrorMessage']
                );
                echo json_encode($response);
            }
            curl_close($curl);
        }
    }
    
    public function getdistrict()
    {
        if(isset($_GET['id']))
        {
            $snm=$_GET['id'];
            $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
            $str='<option value="">Select District</option>';
            if(count($district)<=0)
            {
                $str='<option value="nod">No District found</option>';
            }
            foreach($district as $d)
            {
                $str.='<option value="'.$d['d_name'].'">'. $d['d_name'].'</option>';
            }
        }
        if(isset($_GET['cid']))
        {
            $snm=$_GET['cid'];
            $sid=$_GET['sid'];
            $state=$this->db->query("select * from states where name='$sid'")->result_array();
            $st_id=0;
            if(count($state)>0)
            {
                $st_id=$state[0]['id'];
            }
            $district=$this->db->query("select * from cities where state_id='$st_id'")->result_array();
            $str='<option value="">Select City</option>';
            if(count($district)<=0)
            {
                $str='<option value="nod">No City found</option>';
            }
            foreach($district as $d)
            {
                $str.='<option value="'.$d['city'].'">'. $d['city'].'</option>';
            }
        }
        echo $str;
    }
    
    function saveNonHolderPhoto()
    {
        $data = $_POST["photo"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        
        $newImagePath = 'upload/hotel/facematch/'.time().''.rand(0,10000).'.'.$split1[1];
        
        file_put_contents($newImagePath, $data);
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $newImagePath;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = true;  
        $config['quality'] = '60%';  
        $config['width'] = 320;  
        $config['height'] = 240;  
        $config['new_image'] = $newImagePath;  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize(); 
        $this->load->library('Image_autorotate',$newImagePath);
        $this->image_lib->clear();
        $this->db->where('Id',$_SESSION['guestId']);
        $this->db->update('hotelEntry',array('guestPhoto' => $newImagePath));
    }
    
    function checkNonEntry()
    {
        if($_POST['idType'] == 'aadhar')
        {
            $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and Idtype="'.$_POST['idType'].'" and IdNumber="'.$_POST['idNumber'].'"  and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
            OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
            OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            )')->result_array();   
        }else if($_POST['idType'] =='voter')
        {
            $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and Idtype="'.$_POST['idType'].'" and IdNumber="'.$_POST['idNumber'].'"  and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
            OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
            OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            OR checkOutDate BETWEEN "'.$_POST['nonCheckInDate'].'" AND "'.$_POST['checkOutDate'].'"
            )')->result_array();   
        }
        else if($_POST['idType'] =='pan')
        {
            $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and Idtype="'.$_POST['idType'].'" and IdNumber="'.$_POST['idNumber'].'"  and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
            OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
            OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            )')->result_array();   
        }else{
            $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and Idtype="'.$_POST['idType'].'" and IdNumber="'.$_POST['idNumber'].'"  and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
            OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
            OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            )')->result_array();   
        }
        if(count($getIfAlreadyBookingAvailable) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Booking Already Available'
            );
            echo json_encode($response);
            die();
        }else{
            $personName = '';
            $gender = '';
            $dob = '';
            $age = '';
            $idNumber = '';
            $state = '';
            $district = '';
            $city = '';
            $missingId = '';
            $isMissing = 0;
            $isAadharCorrect = 0;
            $isDobCorrect = 0;
            $isUserFound = 0;
            $userPhoto = '';
            $isWanted = 0;
            $isCriminal = 0;
            $wantedId = array();
            $criminalId = array();
            if($_POST['idType'] == 'aadhar')
            {
                $isDobCorrect = 1;
                $idNumber = $_POST['idNumber'];
                if(strlen($_POST['idNumber']) != 12)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Aadhar number must be 12 digit number'
                    );
                    echo json_encode($response);
                    return;
                }
                $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
                $userphoto = '';
                if(count($getIfPersonAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['idNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
                if(count($getMissingPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getCriminalPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getCriminalPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getWantedPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getWantedPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                if(!$isIdHolder)
                {
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/verify",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => '{"aadhaar_number": '.$_POST['idNumber'].',  "consent": "Y"}',
                      CURLOPT_HTTPHEADER => [
                        "Content-Type: application/json",
                        "X-API-Key: ".$this->getSettings(),
                        "X-Auth-Type: API-Key"
                      ],
                    ]);
                    
                    $response1 = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if($response1['status'] == 200)
                    {
                        if($response1['data']['code'] == 1018)
                        {    
                            $isAadharCorrect = 1;
                            $isUserFound = 1;
                            $gender = strtolower($response1['data']['aadhaar_data']['gender']);
                            $state = strtoupper($response1['data']['aadhaar_data']['state']);
                        }else{
                            $isAadharCorrect = 0;
                        }
                    }else{
                        $isAadharCorrect = 1;   
                    }   
                    $insertdata = array(
                        'Idtype' => $_POST['idType'],
                        'bookingId' => $_POST['bookingId'],
                        'IdNumber' => $idNumber,
                        'checkInDate' => $_POST['checkInDate'],
                        'checkOutDate' => $_POST['checkOutDate'],
                        'roomNumber' => $_POST['roomNumber'],
                        'hotelId' => $_SESSION['hotel_id'],
                        'isSaved' => 0,
                        'searchType' => 'nonHolder',
                        'gender' => $gender,
                        'state' => $state,
                    );
                    $insert = $this->db->insert('hotelEntry',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'gender' => strtolower($gender),
                                'state' => $state,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'id' => $this->db->insert_id(),
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'already'
                    );
                    echo json_encode($response);
                }
            }
            if($_POST['idType'] == 'dl')
            {
                $idNumber = $_POST['idNumber'];
                $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
                if(count($getIfAlready) > 0)
                {
                    $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
                }else{
                    $getIfPersonAvailable = array();
                }
                if(count($getIfPersonAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                $getMissingPerson = $this->db->query('select * from missingperson where missingdl="'.$_POST['idNumber'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
                if(count($getMissingPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getCriminalPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getCriminalPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getWantedPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getWantedPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                if(!$isIdHolder)
                {
                    $postdata = json_encode(array(
                        'driving_license_number' => $_POST['idNumber'],
                        'date_of_birth' => date('Y-m-d',strtotime($_POST['dob'])),
                        'consent' => 'Y'
                    ));
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.gridlines.io/dl-api/fetch",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => $postdata,
                      CURLOPT_HTTPHEADER => [
                        "Content-Type: application/json",
                        "X-API-Key: ".$this->getSettings(),
                        "X-Auth-Type: API-Key"
                      ],
                    ]);
                    
                    $response1 = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if($response1['status'] == 200)
                    {
                        $isAadharCorrect = 1;
                        if($response1['data']['code'] == 1000)
                        {
                            $isDobCorrect = 1;
                            $personName = $response1['data']['driving_license_data']['name'];
                            $dob = $response1['data']['driving_license_data']['date_of_birth'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($dob);
                            $age = ($from->diff($to)->y);
                            $state = $response1['data']['driving_license_data']['rto_details']['state'];
                            $userPhoto=base64_decode($response['data']['driving_license_data']['photo_base64']);
                            $insertdata = array(
                                'Idtype' => $_POST['idType'],
                                'bookingId' => $_POST['bookingId'],
                                'IdNumber' => $idNumber,
                                'checkInDate' => $_POST['checkInDate'],
                                'checkOutDate' => $_POST['checkOutDate'],
                                'roomNumber' => $_POST['roomNumber'],
                                'hotelId' => $_SESSION['hotel_id'],
                                'isSaved' => 0,
                                'searchType' => 'nonHolder',
                                'gender' => $gender,
                                'state' => $state,
                                'dob' => $dob,
                                'age' => $age,
                                'personName' => $personName
                            );
                            $insert = $this->db->insert('hotelEntry',$insertdata);
                            if($insert)
                            {
                                if($isAadharCorrect == 1)
                                {
                                    $response = array(
                                        'userPhoto' => $userPhoto,
                                        'status' => 'success',
                                        'personName' => $personName,
                                        'gender' => strtolower($gender),
                                        'age' => $age,
                                        'state' => $state,
                                        'district' => $district,
                                        'city' => $city,
                                        'dob' => $dob,
                                        'age' => $age,
                                        'isCriminal' => $isCriminal,
                                        'isWanted' => $isWanted,
                                        'isAadharCorrect' => $isAadharCorrect,
                                        'isDobCorrect' => $isDobCorrect,
                                        'isGenderCorrect' => 1,
                                        'message' => 'Person Found',
                                        'isMissing' => $isMissing,
                                        'isRegistered' => $isUserFound,
                                        'id' => $this->db->insert_id(),
                                    );
                                    $_SESSION['guestId'] = $this->db->insert_id();
                                    echo json_encode($response);
                                }else{
                                    $response = array(
                                        'status' => 'incorrect',
                                        'isAadharCorrect' => $isAadharCorrect,
                                        'isDobCorrect' => $isDobCorrect,
                                        'isGenderCorrect' => 1,
                                    );
                                    echo json_encode($response);   
                                }
                            }else{
                                $response = array(
                                    'status' => 'error',
                                    'message' => 'Something Went Wrong'
                                );
                                echo json_encode($response);
                            }
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => $response1['data']['message']
                            );
                            echo json_encode($finalresponse);
                            die();
                        }
                    }
                }else{
                    $response = array(
                        'status' => 'already'
                    );
                    echo json_encode($response);
                }
            }
            if($_POST['idType'] == 'voter')
            {
                $isDobCorrect = 1;
                $idNumber = $_POST['idNumber'];
                $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
                if(count($getIfAlready) > 0)
                {
                    $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
                }else{
                    $getIfPersonAvailable = array();
                }
                if(count($getIfPersonAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                $getMissingPerson = $this->db->query('select * from missingperson where missingvoter="'.$_POST['idNumber'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
                if(count($getMissingPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getCriminalPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getCriminalPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getWantedPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getWantedPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and voter_id="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
                if(count($getIfLapataAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                if(!$isIdHolder)
                {
                    $postdata = json_encode(array(
                        'voter_id' => $_POST['idNumber'],
                        'consent' => 'Y'
                    ));
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.gridlines.io/voter-api/boson/fetch",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => $postdata,
                      CURLOPT_HTTPHEADER => [
                        "Content-Type: application/json",
                        "X-API-Key: ".$this->getSettings(),
                        "X-Auth-Type: API-Key"
                      ],
                    ]);
                    
                    $response1 = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if($response1['status'] == 200)
                    {
                        if($response1['data']['code'] == 1000)
                        {    
                            $isAadharCorrect = 1;
                            $isUserFound = 1;
                            $personName = $response1['data']['voter_data']['name'];
                            $gender = strtolower($response1['data']['voter_data']['gender']);
                            $state = strtoupper($response1['data']['voter_data']['state']);
                            $district = strtoupper($response1['data']['voter_data']['district']);
                            $city = strtoupper($response1['data']['voter_data']['assembly_constituency_name']);
                            $age = $response1['data']['voter_data']['age'];
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => $response1['data']['message']
                            );
                            echo json_encode($finalresponse);
                            die();
                        }
                    }
                    $insertdata = array(
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'bookingId' => $_POST['bookingId'],
                        'wantedId'=> implode(',',$wantedId),
                        'criminalId' => implode(',',$criminalId),
                        'isCriminal' => $isCriminal,
                        'isWanted' => $isWanted,
                        'checkInDate' => $_POST['checkInDate'],
                        'checkOutDate' => $_POST['checkOutDate'],
                        'roomNumber' => $_POST['roomNumber'],
                        'hotelId' => $_SESSION['hotel_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => $missingId,
                        'isSaved' => 0,
                        'searchType' => 'nonHolder',
                        'gender' => $gender,
                        'state' => $state,
                        'district' => $district,
                        'city' => $city,
                        'dob' => $dob,
                        'age' => $age,
                        'personName' => $personName
                    );
                    $insert = $this->db->insert('hotelEntry',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'personName' => $personName,
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'state' => $state,
                                'district' => $district,
                                'city' => $city,
                                'dob' => $dob,
                                'age' => $age,
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'id' => $this->db->insert_id(),
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                            die();
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                        die();
                    }   
                }else{
                    $response = array(
                        'status' => 'already'
                    );
                    echo json_encode($response);
                }
            }
            if($_POST['idType'] == 'pan')
            {
                $isDobCorrect = 1;
                $idNumber = $_POST['idNumber'];
                if(count($getIfAlready) > 0)
                {
                    $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
                }else{
                    $getIfPersonAvailable = array();
                }
                $userphoto = '';
                if(count($getIfPersonAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                $getMissingPerson = $this->db->query('select * from missingperson where missingpan="'.$_POST['idNumber'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
                if(count($getMissingPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getCriminalPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getCriminalPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getWantedPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
                if(count($getWantedPerson) > 0)
                {
                    $isIdHolder = 1;
                }
                $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and PAN="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
                if(count($getIfLapataAvailable) > 0)
                {
                    $isIdHolder = 1;
                }
                if(!$isIdHolder)
                {
                    $curl = curl_init();
                    $postfields = json_encode(array(
                        'pan_number' => $_POST['idNumber'],
                        'consent' => 'Y'
                    ));
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.gridlines.io/pan-api/fetch",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => $postfields,
                      CURLOPT_HTTPHEADER => [
                        "Content-Type: application/json",
                        "X-API-Key: ".$this->getSettings(),
                        "X-Auth-Type: API-Key"
                      ],
                    ]);
                    
                    $response1 = json_decode(curl_exec($curl),true);
                    curl_close($curl);
                    if($response1['status'] == 200)
                    {
                        if($response1['data']['code'] == 1000)
                        {    
                            $isAadharCorrect = 1;
                            $isUserFound = 1;
                            $personName = $response1['data']['pan_data']['name'];
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => $response1['data']['message']
                            );
                            echo json_encode($finalresponse);
                            die();
                        }
                    }
                    $insertdata = array(
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'bookingId' => $_POST['bookingId'],
                        'wantedId'=> implode(',',$wantedId),
                        'criminalId' => implode(',',$criminalId),
                        'isCriminal' => $isCriminal,
                        'isWanted' => $isWanted,
                        'checkInDate' => $_POST['checkInDate'],
                        'checkOutDate' => $_POST['checkOutDate'],
                        'roomNumber' => $_POST['roomNumber'],
                        'hotelId' => $_SESSION['hotel_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => $missingId,
                        'isSaved' => 0,
                        'searchType' => 'nonHolder',
                        'gender' => $gender,
                        'state' => $state,
                        'district' => $district,
                        'city' => $city,
                        'dob' => $dob,
                        'age' => $age,
                        'personName' => $personName
                    );
                    $insert = $this->db->insert('hotelEntry',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'personName' => $personName,
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'state' => $state,
                                'district' => $district,
                                'city' => $city,
                                'dob' => $dob,
                                'age' => $age,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'id' => $this->db->insert_id(),
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else{
                            $response = array(
                                'status' => 'incorrect',
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                            );
                            echo json_encode($response);   
                        }
                    }else{
                        $response = array(
                            'status' => 'error',
                            'message' => 'Something Went Wrong'
                        );
                        echo json_encode($response);
                    }   
                }else{
                    $response = array(
                        'status' => 'already'
                    );
                    echo json_encode($response);
                }
            }
        }
    }
    
    function saveUnknownGuestPhoto()
    {
        $data = $_POST["photo"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        
        $newImagePath = 'upload/guestEntry/'.time().''.rand(0,10000).'.'.$split1[1];
        
        file_put_contents($newImagePath, $data);
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $newImagePath;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = true;  
        $config['quality'] = '60%';  
        $config['width'] = 320;  
        $config['height'] = 240;  
        $config['new_image'] = $newImagePath;  
        $this->load->library('image_lib', $config);  
        $this->image_lib->resize(); 
        $this->load->library('Image_autorotate',$newImagePath);
        $this->image_lib->clear();
        $insertdata = array(
            'hotelId' => $_SESSION['hotel_id'],
            'isSaved' => 0,
            'searchType' => 'nonHolder',
            'guestPhoto' => $newImagePath
        );
        $insert = $this->db->insert('hotelEntry',$insertdata);
        if($insert)
        {
            $_SESSION['guestId'] = $this->db->insert_id();   
        }
    }
    
    function checkOutGuestMember($id)
    {
        $update = $this->db->query('update hotelEntry set checkout_status="yes",checkOutDate="'.date('Y-m-d H:i:s').'" where Id='.$id);
    }
    
    function checkOutChildMember($id)
    {
        $update = $this->db->query('update childEntry set checkout_status="yes",checkOutDate="'.date('Y-m-d H:i:s').'" where Id='.$id);
    }
    
    function removeGuestMember($id)
    {
        $this->db->query('delete from hotelEntry where Id='.$id);
    }
    
    function removeGuestChild($id)
    {
        $this->db->query('delete from childEntry where Id='.$id);
    }
    
    function saveNonEntryGuest()
    {
        $getData = $this->db->query('select * from hotelEntry where Id='.$_SESSION['guestId'])->result_array();
        if($getData[0]['otp'] == $_POST['otp'])
        {
            $updatedata = array(
                'gender' => $_POST['gender'],
                'state' => $_POST['state'],
                'district' => $_POST['district'],
                'city' => $_POST['city'],
                'dob' => $_POST['dob'],
                'age' => $_POST['age'],
                'guestMobile' => $_POST['mobile'],
                'personName' => $_POST['personName'],
                'isSaved'=>1
            );
            $this->db->where('Id',$_SESSION['guestId']);
            $this->db->update('hotelEntry',$updatedata);
            $isMissing = 0;
            if($getData[0]['Idtype'] == 'aadhar')
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            }else if($getData[0]['Idtype'] == 'dl')
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingdl="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            }else if($getData[0]['Idtype'] == 'pan')
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingpan="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            }else if($getData[0]['Idtype'] == 'voter')
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingvoter="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isMissing = 1;
                foreach($getMissingPerson as $k=>$v)
                {
                    array_push($missingId,$v['Id']);
                    if($v['mobile1'] != NULL)
                    {
                        $split = explode(' ',$v['missingname']);
                        $name = $split[0].' is found active';
                        $username = substr($_SESSION['name'],0,3).''.rand(10,99);
                        // $msg = 'Dear complainant,%nThe current location of the missing person %nyou can contact- '.$_SESSION['loginmob'].'(HOTEL-'.$username.'). MANLRT';
                        $msg = 'Dear complainant,%nThe current location of your missing person '.$name.' is found active.%nFor complete details check your notifications bell icon.%n S. MANLRT';
                        $this->sendHotelOtp($v['mobile1'],$msg);
                        $insertdata = array(
                            'userId' => $v['userId'],
                            'type' => 'Hotel',
                            'status' => 'Active',
                            'dateCreated' => date('Y-m-d H:i:s'),
                            'message' => 'Missing person '.$name.' in '.$_SESSION['name'],
                            'foundPerson' => $v['Id'],
                            'personType' => 'missing',
                            'hotelId' => $_SESSION['hotel_id'],
                            'hotelEntryId' => $_SESSION['guestId']
                        );
                        $this->db->insert('Notification',$insertdata);
                    }
                }   
            }
            $response = array(
                'isMissing' => $isMissing,
                'gender' => $_POST['gender'],
                'state' => $_POST['state'],
                'district' => $_POST['district'],
                'city' => $_POST['city'],
                'dob' => $_POST['dob'],
                'age' => $_POST['age'].'- Years',
                'personName' => $_POST['personName'],
                'room' => $getData[0]['roomNumber'],
                'status' => 'success',
                'idType' => $getData[0]['Idtype'],
                'idNumber' => strtoupper($getData[0]['IdNumber']),
                'id' => $getData[0]['Id']
            );   
            echo json_encode($response);
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid OTP'
            );
            echo json_encode($response);
        }
    }
    
    function getGuestDetails($id)
    {
        $getData = $this->db->query('select * from hotelEntry where Id='.$id)->result_array();
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 0;
        $isVisible = 0;
        $age = '';
        $address = '';
        $isUserFound = 0;
        $isWanted = 0;
        $isCriminal = 0;
        $criminalId = '';
        $wantedId = '';
        $isLapata = 0;
        $missingId = 0;
        $isMissing = 0;
        $userphoto = '';
        if($getData[0]['personId'] != NULL)
        {
            $getPersonData = $this->db->query('select * from user where uid='.$getData[0]['personId'])->result_array();
            $aadhar = $getPersonData[0]['aadhar_id'];
            $personName = $getPersonData[0]['aadharname'];
            $gender = ucFirst(strtolower($getPersonData[0]['gender']));
            $from=new DateTime(date('Y-m-d'));
            $to   = new DateTime($getPersonData[0]['dob']);
            $age = ($from->diff($to)->y).'- Years';
            $address = $getPersonData[0]['city'].','.$getPersonData[0]['state'];
            $userphoto = (($getPersonData[0]['facematchphoto'] != NULL) ? base_url().''.$getPersonData[0]['facematchphoto'] : base_url().''.$getPersonData[0]['aadharphoto']);
            $isRegistered = 1;
            $isVisible = $getPersonData[0]['visibility'];
        }
        if($getData[0]['isMissing'] != 0)
        {
            $isVisible = 1;
            $getMissingPersonData = $this->db->query('select * from missingperson where Id='.$getData[0]['missingId'])->result_array();
            $aadhar = $getMissingPersonData[0]['missingaadhar'];
            $personName = $getMissingPersonData[0]['missingname'];
            $gender = strtolower($getMissingPersonData[0]['missinggender']);
            $from=new DateTime(date('Y-m-d'));
            $to   = new DateTime($getMissingPersonData[0]['missingdob']);
            $age = ($from->diff($to)->y).'- Years';
            $address = $getMissingPersonData[0]['fathercity'].','.$getMissingPersonData[0]['fatherstate'];
            if($userphoto == '' || $userphoto == base_url())
            {
                $userphoto = (($getMissingPersonData[0]['facematchphoto'] != NULL) ? base_url().''.$getMissingPersonData[0]['facematchphoto'] : '');      
            }
            $isMissing = 1;
            $missingId = $getData[0]['missingId'];
        }
        if($getData[0]['isLapata'] != 0)
        {
            $isVisible = 1;
            $getLapataPersonData = $this->db->query('select * from unknown_person where id in ('.$getData[0]['lapataId'].')')->result_array();
            $aadhar = $getLapataPersonData[0]['aadharNumber'];
            $personName = $getLapataPersonData[0]['person_name'];
            $gender = strtolower($getLapataPersonData[0]['Gender'] == 'boy' ? 'Male' : 'Female');
            $age = $getLapataPersonData[0]['Age'].' Years';
            if($getLapataPersonData[0]['city'] != '')
            {
                $address = $getLapataPersonData[0]['city'].','.$getLapataPersonData[0]['state'];   
            }
            if($userphoto == '' || $userphoto == base_url())
            {
                $userphoto = (($getLapataPersonData[0]['Photo'] != NULL) ? base_url().''.$getLapataPersonData[0]['Photo'] : '');   
            }
            $isMissing = 0;
            $missingId = 0;
            $isLapata = 1;
            $lapataId = $getData[0]['lapataId'];
        }
        if($getData[0]['isCriminal'] != 0)
        {
            $isVisible = 1;
            $getCriminalPersonData = $this->db->query('select * from criminals where Id in ('.$getData[0]['criminalId'].')')->result_array();
            $aadhar = $getCriminalPersonData[0]['aadharNumber'];
            if($getCriminalPersonData[0]['personName'] != NUll || $getCriminalPersonData[0]['personName'] != '')
            {
                $personName = $getCriminalPersonData[0]['personName'];
            }
            if($getCriminalPersonData[0]['gender'] != NUll || $getCriminalPersonData[0]['gender'] != '')
            {
                $gender = $getCriminalPersonData[0]['gender'];
            }
            if($getCriminalPersonData[0]['dob'] != NUll || $getCriminalPersonData[0]['dob'] != '')
            {
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getCriminalPersonData[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
            }
            if($getCriminalPersonData[0]['city'] != NUll || $getCriminalPersonData[0]['city'] != '')
            {
                $address = $getCriminalPersonData[0]['city'].','.$getCriminalPersonData[0]['state'];
            }
            $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getData[0]['criminalId'])->result_array();
            if($userphoto == '' || $userphoto == base_url())
            {
                $userphoto = ((count($getLatestPhotos) > 0) ? base_url().''.$getLatestPhotos[0]['photourl'] : base_url().''.$getCriminalPersonData[0]['photo']);   
            }
            $isCriminal = 1;
            $criminalId = $getData[0]['criminalId'];
        }
        if($getData[0]['isWanted'] != 0)
        {
            $isVisible = 1;
            $getCriminalPersonData = $this->db->query('select * from criminals where Id in ('.$getData[0]['wantedId'].')')->result_array();
            $aadhar = $getCriminalPersonData[0]['aadharNumber'];
            if($getCriminalPersonData[0]['personName'] != NUll || $getCriminalPersonData[0]['personName'] != '')
            {
                $personName = $getCriminalPersonData[0]['personName'];
            }
            if($getCriminalPersonData[0]['gender'] != NUll || $getCriminalPersonData[0]['gender'] != '')
            {
                $gender = $getCriminalPersonData[0]['gender'];
            }
            if($getCriminalPersonData[0]['dob'] != NUll || $getCriminalPersonData[0]['dob'] != '')
            {
                $from=new DateTime(date('Y-m-d'));
                $to   = new DateTime($getCriminalPersonData[0]['dob']);
                $age = ($from->diff($to)->y).'- Years';
            }
            if($getCriminalPersonData[0]['city'] != NUll || $getCriminalPersonData[0]['city'] != '')
            {
                $address = $getCriminalPersonData[0]['city'].','.$getCriminalPersonData[0]['state'];
            }
            $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getData[0]['wantedId'])->result_array();
            if($userphoto == '' || $userphoto == base_url())
            {
                $userphoto = ((count($getLatestPhotos) > 0) ? base_url().''.$getLatestPhotos[0]['photourl'] : base_url().''.$getCriminalPersonData[0]['photo']);   
            }
            $isWanted = 1;
            $wantedId = $getData[0]['wantedId'];
        }
        $response = array(
            'status' => 'success',
            'personName' => $personName,
            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
            'gender' => strtolower($gender),
            'age' => $age,
            'address' => $address,
            'missingId' => $missingId,
            'isMissing' => $isMissing,
            'criminalId' => $criminalId,
            'isCriminal' => $isCriminal,
            'wantedId' => $wantedId,
            'isWanted' => $isWanted,
            'isLapata' => $isLapata,
            'isVisible' => $isVisible,
            'lapataId' => $lapataId,
            'isVerified' => (($getData[0]['personId'] != NULL) ? 1 : 0),
            'isRegistered' => (($getData[0]['personId'] != NULL) ? 1 : 0),
            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
        );
        echo json_encode($response);
    }
    
    function wantedRecord($id)
    {
        $page_data['criminalDetail'] = array();
        $page_data['wantedDetail'] = $this->db->query('select * from criminals where Id In('.$id.')')->result_array();
        $page_data['control'] = 'user';
        $page_data['title'] = 'Wanted Records';
        $this->load->view('hotel/common/header',$page_data); 
        $this->load->view('hotel/wantedRecord');
        $this->load->view('hotel/common/footer');
    }
    
    function criminalRecord($id)
    {
        $page_data['checkDetail'] = $this->db->query('select * from hotelEntry where Id='.$id)->result_array();
        if($page_data['checkDetail'][0]['criminalId'] != NULL)
        {
            $page_data['criminalDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['criminalId'].')')->result_array();
        }else{
            $page_data['criminalDetail'] = array();
        }
        if($page_data['checkDetail'][0]['wantedId'] != NULL)
        {
            $page_data['wantedDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['wantedId'].')')->result_array();
        }else{
            $page_data['wantedDetail'] = array();
        }
        $page_data['control'] = 'hotel';
        $page_data['title'] = 'Criminal Records';
        $this->load->view('hotel/common/header',$page_data); 
        $this->load->view('hotel/criminalRecord');
        $this->load->view('hotel/common/footer');
    }
    
    function persondetail($id)
    {
        $page_data['checkDetail'] = $this->db->query('select * from hotelEntry where Id='.$id)->result_array();
        if($page_data['checkDetail'][0]['wantedId'] != NULL)
        {
            $page_data['wanted'] = $this->db->query('select * from criminals where Id in('.$page_data['checkDetail'][0]['wantedId'].')')->result_array();
        }else{
            if($page_data['checkDetail'][0]['isLapata'] == 1)
            {
                $page_data['unknownperson'] = $this->db->query('select * from unknown_person where id='.$page_data['checkDetail'][0]['lapataId'])->result_array();
            }else{
                if($page_data['checkDetail'][0]['Idtype'] == 'aadhar')
                {
                    $page_data['persondetail'] = $this->db->query('select * from user where aadhar_id="'.$page_data['checkDetail'][0]['IdNumber'].'"')->result_array();   
                }
                if($page_data['checkDetail'][0]['Idtype'] == 'pan')
                {
                    $getDetail = $this->db->query('select * from panlist where panNumber="'.$page_data['checkDetail'][0]['IdNumber'].'"')->result_array();
                    $page_data['persondetail'] = $this->db->query('select * from user where uid='.$getDetail[0]['userId'])->result_array();   
                }
                if($page_data['checkDetail'][0]['Idtype'] == 'voter')
                {
                    $getDetail = $this->db->query('select * from voterslist where voterNumber="'.$page_data['checkDetail'][0]['IdNumber'].'"')->result_array();
                    $page_data['persondetail'] = $this->db->query('select * from user where uid='.$getDetail[0]['userId'])->result_array();   
                }
                if($page_data['checkDetail'][0]['Idtype'] == 'dl')
                {
                    $getDetail = $this->db->query('select * from dllist where dlNumber="'.$page_data['checkDetail'][0]['IdNumber'].'"')->result_array();
                    $page_data['persondetail'] = $this->db->query('select * from user where uid='.$getDetail[0]['userId'])->result_array();   
                }
                $page_data['unknownperson'] = array();
            }
            $page_data['wanted'] = array();
        }   
        $page_data['control'] = 'hotel';
        $page_data['title'] = 'Person Detail';
        $this->load->view('hotel/common/header',$page_data); 
        $this->load->view('hotel/checkstep2');
        $this->load->view('hotel/common/footer'); 
    }
    
    function saveGuest()
    {
        $getData = $this->db->query('select * from hotelEntry where Id='.$_SESSION['guestId'])->result_array();
        if($getData[0]['otp'] == $_POST['otp'])
        {
            $this->db->query('update hotelEntry set guestMobile="'.$_POST['mobile'].'", isSaved=1 where Id='.$_SESSION['guestId']);
            $personName = '';
            $age = '-';
            $gender = '';
            $isMissing = 0;
            $isAvailable = 0;
            if($getData[0]['personId'] != NULL)
            {
                $getUserData = $this->db->query('select * from user where uid='.$getData[0]['personId'])->result_array();
                if(count($getUserData) > 0)
                {
                    $isAvailable = 1;
                    $personName = $getUserData[0]['aadharname'];
                    $gender = ucFirst(strtolower($getUserData[0]['gender']));
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getUserData[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
            }
            if($getData[0]['missingId'] != 0)
            {
                $getMissingPersonData = $this->db->query('select * from missingperson where Id='.$getData[0]['missingId'])->result_array();
                if(count($getMissingPersonData) > 0)
                {
                    if($getData[0]['Idtype'] == 'aadhar')
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'dl')
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingdl="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'pan')
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingpan="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'voter')
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingvoter="'.$getData[0]['IdNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAvailable = 1;
                        foreach($getMissingPerson as $k=>$v)
                        {
                            if($v['mobile1'] != NULL)
                            {
                                $split = explode(' ',$v['missingname']);
                                $name = $split[0];
                                $username = substr($_SESSION['name'],0,3).''.rand(10,99);
                                // $msg = 'Dear complainant,%nThe current location of the missing person %nyou can contact- '.$_SESSION['loginmob'].'(HOTEL-'.$username.'). MANLRT';
                                $msg = 'Dear complainant,%nThe current location of your missing person '.$name.' is found active.%nFor complete details check your notifications bell icon.%n S. MANLRT';
                                $this->sendHotelOtp($v['mobile1'],$msg);
                                $insertdata = array(
                                    'userId' => $v['userId'],
                                    'type' => 'Hotel',
                                    'status' => 'Active',
                                    'dateCreated' => date('Y-m-d H:i:s'),
                                    'message' => 'Missing person '.$name.' in '.$_SESSION['name'],
                                    'foundPerson' => $v['Id'],
                                    'personType' => 'missing',
                                    'hotelId' => $_SESSION['hotel_id'],
                                    'hotelEntryId' => $_SESSION['guestId']
                                );
                                $this->db->insert('Notification',$insertdata);
                            }
                        }   
                    }
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPersonData[0]['missingdob']);
                    if($age == '-')
                    {
                        $age = ($from->diff($to)->y).'- Years';   
                    }
                    if($personName == '')
                    {
                        $personName = $getMissingPersonData[0]['missingname'];   
                    }
                    if($gender == '')
                    {
                        $gender = ucFirst(strtolower($getMissingPersonData[0]['missinggender']));   
                    }
                    $isMissing = 1;
                }
            }
            if($getData[0]['criminalId'] != 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where Id='.$getData[0]['criminalId'])->result_array();
                if(count($getIfCriminalAvailable) > 0)
                {
                    $isAvailable = 1;
                    if($age == '-')
                    {
                        $age = ($getIfCriminalAvailable[0]['Age']).' Years';   
                    }
                    if($getIfCriminalAvailable[0]['personName'] != '')
                    {
                        $personName = $getIfCriminalAvailable[0]['personName'];   
                    }
                    if($getIfCriminalAvailable[0]['gender'] != '')
                    {
                        $gender = ucFirst(strtolower($getIfCriminalAvailable[0]['gender']));   
                    }
                    $isMissing = 1;
                }
            }
            if($getData[0]['wantedId'] != 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where Id='.$getData[0]['wantedId'])->result_array();
                if(count($getIfWantedAvailable) > 0)
                {
                    if($getData[0]['Idtype'] == 'aadhar')
                    {
                        $getWantedPerson = $this->db->query('select * from criminals where aadharNumber="'.$getData[0]['IdNumber'].'" and type="wanted" and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'dl')
                    {
                        $getWantedPerson = $this->db->query('select * from criminals where dlNumber="'.$getData[0]['IdNumber'].'" and type="wanted" and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'pan')
                    {
                        $getWantedPerson = $this->db->query('select * from criminals where panNumber="'.$getData[0]['IdNumber'].'" and type="wanted" and isFinalSubmitted=1')->result_array();
                    }else if($getData[0]['Idtype'] == 'voter')
                    {
                        $getWantedPerson = $this->db->query('select * from criminals where voterId="'.$getData[0]['IdNumber'].'" and type="wanted" and isFinalSubmitted=1')->result_array();
                    }
                    if(count($getWantedPerson) > 0)
                    {
                        $isAvailable = 1;
                        foreach($getWantedPerson as $k=>$v)
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            if($getPoliceDetail[0]['registration_mobile'] != NULL)
                            {
                                $split = explode(' ',$v['personName']);
                                $name = $split[0];
                                $username = substr($_SESSION['name'],0,3).''.rand(10,99);
                                // $msg = 'Dear complainant,%nThe current location of the missing person %nyou can contact- '.$_SESSION['loginmob'].'(HOTEL-'.$username.'). MANLRT';
                                $msg = 'Dear complainant,%nThe current location of your wanted person '.$name.' is found active.%nFor complete details check your notifications bell icon.%n S. MANLRT';
                                $this->sendHotelOtp($getPoliceDetail[0]['registration_mobile'],$msg);
                                $insertdata = array(
                                    'userId' => $v['policeThanaId'],
                                    'type' => 'Hotel',
                                    'status' => 'Active',
                                    'dateCreated' => date('Y-m-d H:i:s'),
                                    'message' => 'Wanted person '.$name.' in '.$_SESSION['name'],
                                    'foundPerson' => $v['Id'],
                                    'personType' => 'wanted',
                                    'hotelId' => $_SESSION['hotel_id'],
                                    'hotelEntryId' => $_SESSION['guestId']
                                );
                                $this->db->insert('Notification',$insertdata);
                            }
                        }   
                    }
                    $isAvailable = 1;
                    if($age == '-')
                    {
                        $age = ($getIfWantedAvailable[0]['Age']).' Years';   
                    }
                    if($getIfWantedAvailable[0]['personName'] != '')
                    {
                        $personName = $getIfWantedAvailable[0]['personName'];   
                    }
                    if($getIfWantedAvailable[0]['gender'] != '')
                    {
                        $gender = ucFirst(strtolower($getIfWantedAvailable[0]['gender']));   
                    }
                    $isMissing = 1;
                }
            }
            if($getData[0]['lapataId'] != '' || $getData[0]['lapataId'] != NULL || $getData[0]['lapataId'] != 0)
            {
                $getIfLapataAvailable = $this->db->query('select * from unknown_person where id in ('.$getData[0]['lapataId'].')')->result_array();
                if(count($getIfLapataAvailable) > 0)
                {
                    $isAvailable = 1;
                    if($age == '-')
                    {
                        $age = ($getIfLapataAvailable[0]['Age']).' Years';   
                    }
                    if($getIfLapataAvailable[0]['person_name'] != '')
                    {
                        $personName = $getIfLapataAvailable[0]['person_name'];   
                    }
                    if($getIfLapataAvailable[0]['Gender'] != '')
                    {
                        $gender = ucFirst(strtolower($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'));   
                    }
                    $isMissing = 1;
                }
            }
            if($personName == '')
            {
                $isAvailable = 0;
                $personName = $getData[0]['personName'];
                $gender = ucFirst(strtolower($getData[0]['gender']));
            }
            $response = array(
                'isAvailable' => $isAvailable,
                'isMissing' => $isMissing,
                'idType' => $getData[0]['Idtype'],
                'gender' => $gender,
                'age' => $age,
                'room' => $getData[0]['roomNumber'],
                'status' => 'success',
                'personName' => $personName,    
                'idNumber' => strtoupper($getData[0]['IdNumber']),
                'id' => $getData[0]['Id']
            );   
            echo json_encode($response);
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid OTP'
            );
            echo json_encode($response);
        }
    }
    
    function sendHotelOtp($mob,$msg)
    {
        $mob = '91'.$mob;
        try {
            $apiKey = urlencode("NTQ2MzRkNjU1NjMzNGE3NjM1NjkzNzMxNTMzODZiN2E=");
            $sender = urlencode('MANLRT');
            $message = rawurlencode($msg);
            $data = array('apikey' => $apiKey, 'numbers' => $mob, 'sender' => $sender, 'message' => $message);
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
        } catch (\Throwable $th) {
            throw $th;

        }
    }
    
    function checkEntryClone()
    {
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $address = '';
        $personId = 0;
        $missingId = array();
        $isUserFound = 0;
        $isMissing = 0;
        $isWanted = 0;
        $isCriminal = 0;
        $wantedId = array();
        $isLapata = 0;
        $lapataId = array();
        $criminalId = array();
        $isAadharCorrect = 0;
        $isGenderCorrect = 1;
        $isIdHolder = 0;
        $isDobCorrect = 1;
        $idNumber = '';
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['idNumber'];
            if(strlen($_POST['idNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    if(date('d-m-Y',strtotime($getIfPersonAvailable[0]['dob'])) != date('d-m-Y',strtotime($_POST['dob'])))
                    {
                        $isDobCorrect = 0;
                    }
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);   
                }
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['idNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isVisible = 1;
                    $isIdHolder = 1;
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        if(date('d-m-Y',strtotime($getMissingPerson[0]['missingdob'])) != date('d-m-Y',strtotime($_POST['dob'])))
                        {
                            $isDobCorrect = 0;
                        }
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }   
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    if(date('d-m-Y',strtotime($getCriminalPerson[0]['dob'])) != date('d-m-Y',strtotime($_POST['dob'])))
                    {
                        $isDobCorrect = 0;
                    }
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    if(date('d-m-Y',strtotime($getWantedPerson[0]['dob'])) != date('d-m-Y',strtotime($_POST['dob'])))
                    {
                        $isDobCorrect = 0;
                    }
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and aadharNumber="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($isDobCorrect)
            {
                $insertdata = array(
                    'Idtype' => $_POST['idType'],
                    'bookingId' => $_POST['bookingId'],
                    'IdNumber' => $idNumber,
                    'checkInDate' => $_POST['checkInDate'],
                    'checkOutDate' => $_POST['checkOutDate'],
                    'roomNumber' => $_POST['roomNumber'],
                    'hotelId' => $_SESSION['hotel_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId,
                    'isSaved' => 0,
                    'searchType' => 'holder',
                    'gender' => $gender,
                    'state' => $state,
                    'district' => $district,
                    'city' => $city,
                    'dob' => $_POST['dob'],
                    'age' => $age,
                    'wantedId'=> implode(',',$wantedId),
                    'criminalId' => implode(',',$criminalId),
                    'isCriminal' => $isCriminal,
                    'lapataId' => implode(',',$lapataId),
                    'isLapata' => $isLapata,
                    'isWanted' => $isWanted,
                    'personName' => $personName
                );
                $insert = $this->db->insert('hotelEntry',$insertdata);
                if($insert)
                {
                    $_SESSION['guestId'] = $this->db->insert_id();
                    if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                    {
                        if($isIdHolder)
                        {
                            if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                            {
                                $response = array(
                                    'isIdHolder' => $isIdHolder,
                                    'status' => 'success',
                                    'idNumber' => $idNumber,
                                    'personName' => $personName,
                                    'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                    'gender' => strtolower($gender),
                                    'age' => $age,
                                    'address' => $address,
                                    'isAadharCorrect' => $isAadharCorrect,
                                    'isDobCorrect' => $isDobCorrect,
                                    'isGenderCorrect' => $isGenderCorrect,
                                    'message' => 'Person Found',
                                    'isLapata' => $isLapata,
                                    'isMissing' => $isMissing,
                                    'isCriminal' => $isCriminal,
                                    'isWanted' => $isWanted,
                                    'isRegistered' => $isUserFound,
                                    'image' => $userphoto,
                                    'id' => $this->db->insert_id(),
                                    'type' => 'non',
                                    'isAlternate' => true,
                                    'isAlternate1' => true,
                                    'isAlternate2' => false,
                                    'data' => array(
                                        'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                        'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                        'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                        'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    )
                                );
                                echo json_encode($response);
                            }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                            {
                                $response = array(
                                    'isIdHolder' => $isIdHolder,
                                    'status' => 'success',
                                    'idNumber' => $idNumber,
                                    'personName' => $personName,
                                    'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                    'gender' => strtolower($gender),
                                    'age' => $age,
                                    'address' => $address,
                                    'isAadharCorrect' => $isAadharCorrect,
                                    'isDobCorrect' => $isDobCorrect,
                                    'isGenderCorrect' => $isGenderCorrect,
                                    'message' => 'Person Found',
                                    'isMissing' => $isMissing,
                                    'isCriminal' => $isCriminal,
                                    'isLapata' => $isLapata,
                                    'isWanted' => $isWanted,
                                    'isRegistered' => $isUserFound,
                                    'image' => $userphoto,
                                    'id' => $this->db->insert_id(),
                                    'type' => 'non',
                                    'isAlternate' => true,
                                    'isAlternate1' => false,
                                    'isAlternate2' => true,
                                    'data' => array(
                                        'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                        'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                        'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                        'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                    )
                                );
                                echo json_encode($response);
                            }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                            {
                                $response = array(
                                    'isIdHolder' => $isIdHolder,
                                    'status' => 'success',
                                    'idNumber' => $idNumber,
                                    'personName' => $personName,
                                    'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                    'gender' => strtolower($gender),
                                    'isLapata' => $isLapata,
                                    'age' => $age,
                                    'address' => $address,
                                    'isAadharCorrect' => $isAadharCorrect,
                                    'isDobCorrect' => $isDobCorrect,
                                    'isGenderCorrect' => $isGenderCorrect,
                                    'message' => 'Person Found',
                                    'isMissing' => $isMissing,
                                    'isCriminal' => $isCriminal,
                                    'isWanted' => $isWanted,
                                    'isRegistered' => $isUserFound,
                                    'image' => $userphoto,
                                    'id' => $this->db->insert_id(),
                                    'isAlternate' => true,
                                    'isAlternate1' => true,
                                    'type' => 'non',
                                    'isAlternate2' => true,
                                    'data' => array(
                                        'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                        'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                        'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                        'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                        'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                        'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                    )
                                );
                                echo json_encode($response);
                            }
                            else{
                                $response = array(
                                    'isIdHolder' => $isIdHolder,
                                    'status' => 'success',
                                    'idNumber' => $idNumber,
                                    'personName' => $personName,
                                    'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                    'gender' => strtolower($gender),
                                    'age' => $age,
                                    'address' => $address,
                                    'isAadharCorrect' => $isAadharCorrect,
                                    'isDobCorrect' => $isDobCorrect,
                                    'isLapata' => $isLapata,
                                    'isGenderCorrect' => $isGenderCorrect,
                                    'message' => 'Person Found',
                                    'type' => 'non',
                                    'isMissing' => $isMissing,
                                    'isCriminal' => $isCriminal,
                                    'isWanted' => $isWanted,
                                    'isRegistered' => $isUserFound,
                                    'image' => $userphoto,
                                    'id' => $this->db->insert_id(),
                                    'isAlternate' => false,
                                    'data' => array(
                                        'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                        'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    )
                                );
                                echo json_encode($response);
                            }
                        }else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isLapata' => $isLapata,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'isAlternate1' => false,
                                'isAlternate2' => false,
                                'type' => 'non',
                            );
                            echo json_encode($response);
                        }
                    }else{
                        $curl = curl_init();
                        curl_setopt_array($curl, [
                          CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/verify",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS => '{"aadhaar_number": '.$_POST['idNumber'].',  "consent": "Y"}',
                          CURLOPT_HTTPHEADER => [
                            "Content-Type: application/json",
                            "X-API-Key: ".$this->getSettings(),
                            "X-Auth-Type: API-Key"
                          ],
                        ]);
                        
                        $response1 = json_decode(curl_exec($curl),true);
                        curl_close($curl);
                        if($response1['status'] == 200)
                        {
                            if($response1['data']['code'] == 1018)
                            {    
                                $isAadharCorrect = 1;
                                $isUserFound = 1;
                                $gender = strtolower($response1['data']['aadhaar_data']['gender']);
                                $state = strtoupper($response1['data']['aadhaar_data']['state']);
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($_POST['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                            }
                        }
                        $updateData = array(
                            'gender' => $gender,
                            'state' => $state,
                            'age' => $age,
                            'dob' => $_POST['dob']
                        );
                        $this->db->where('Id',$_SESSION['guestId']);
                        $this->db->update('hotelEntry',$updateData);
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isLapata' => $isLapata,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isCriminal' => $isCriminal,
                            'isWanted' => $isWanted,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $_SESSION['guestId'],
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                            'type' => 'lite',
                        );
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and DL_no="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'bookingId' => $_POST['bookingId'],
                'IdNumber' => $idNumber,
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'isLapata' => $isLapata,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isLapata' => $isLapata,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isLapata' => $isLapata,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'isWanted' => $isWanted,
                            'isCriminal' => $isCriminal,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and voter_id="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'IdNumber' => $idNumber,
                'bookingId' => $_POST['bookingId'],
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isWanted' => $isWanted,
                            'isCriminal' => $isCriminal,
                            'isLapata' => $isLapata,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }  
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and PAN="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'IdNumber' => $idNumber,
                'bookingId' => $_POST['bookingId'],
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'isLapata' => $isLapata,
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }  
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function checkEntry()
    {
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $address = '';
        $personId = 0;
        $missingId = array();
        $isUserFound = 0;
        $isMissing = 0;
        $isWanted = 0;
        $isCriminal = 0;
        $wantedId = array();
        $isLapata = 0;
        $lapataId = array();
        $criminalId = array();
        $isAadharCorrect = 0;
        $isGenderCorrect = 1;
        $isIdHolder = 0;
        $isDobCorrect = 1;
        $idNumber = '';
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['idNumber'];
            if(strlen($_POST['idNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);   
                }
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['idNumber'].'" and isFound !=1 and isdeleted=0 and isFinalSubmitted=1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isVisible = 1;
                    $isIdHolder = 1;
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['idNumber'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }   
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where aadharNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and aadharNumber="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'bookingId' => $_POST['bookingId'],
                'IdNumber' => $idNumber,
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isLapata' => $isLapata,
                                'isMissing' => $isMissing,
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'isWanted' => $isWanted,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isLapata' => $isLapata,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isLapata' => $isLapata,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isCriminal' => $isCriminal,
                                'isWanted' => $isWanted,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isLapata' => $isLapata,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isCriminal' => $isCriminal,
                            'isWanted' => $isWanted,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from dllist where dlNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where dlNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and DL_no="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'bookingId' => $_POST['bookingId'],
                'IdNumber' => $idNumber,
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'isLapata' => $isLapata,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isLapata' => $isLapata,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isLapata' => $isLapata,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'isWanted' => $isWanted,
                            'isCriminal' => $isCriminal,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where voterId="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and voter_id="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'IdNumber' => $idNumber,
                'bookingId' => $_POST['bookingId'],
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isWanted' => $isWanted,
                            'isCriminal' => $isCriminal,
                            'isLapata' => $isLapata,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }  
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['idNumber'];
            $getIfAlready = $this->db->query('select * from panlist where panNumber="'.$idNumber.'"')->result_array();
            if(count($getIfAlready) > 0)
            {
                $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'])->result_array();   
            }else{
                $getIfPersonAvailable = array();
            }
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and personId='.$getIfPersonAvailable[0]['uid'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $isIdHolder = 1;
                    $personId = $getIfPersonAvailable[0]['uid'];
                    $isAadharCorrect = 1;
                    $isVisible = $getIfPersonAvailable[0]['visibility'];
                    $isVerified = 1;
                    $isUserFound = 1;
                    $personName = $getIfPersonAvailable[0]['aadharname'];
                    $gender = $getIfPersonAvailable[0]['gender'];
                    $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                    $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1 and isdeleted=0 and isFinalSubmitted=1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $getIfAlreadyBookingAvailable = $this->db->query('select * from hotelEntry where checkout_status="yes" and isSaved=1 and hotelId='.$_SESSION['hotel_id'].' and missingId='.$getMissingPerson[0]['Id'].' and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
                    OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
                    )')->result_array();
                if(count($getIfAlreadyBookingAvailable) > 0)
                {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Booking Already Available'
                    );
                    echo json_encode($response);
                    die();
                }else{
                    foreach($getMissingPerson as $k=>$v)
                    {
                        array_push($missingId,$v['Id']);
                    }
                    $isAadharCorrect = 1;
                    if($getMissingPerson[0]['missinggender'] != NULL)
                    {
                        $isIdHolder = 1;
                        $isMissing = 1;
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y).'- Years';
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                        }   
                    }else{
                        $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                        if(count($getFullDetail) > 0)
                        {
                            $isIdHolder = 0;
                            $isMissing = 1; 
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y).'- Years';
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                            }   
                        }else{
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                                $isIdHolder = 1;
                                $isMissing = 1; 
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }   
                            }
                        }
                    }
                }
            }
            $getCriminalPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="criminal" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getCriminalPerson) > 0)
            {
                foreach($getCriminalPerson as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
                if($getCriminalPerson[0]['personName'] != NUll || $getCriminalPerson[0]['personName'] != '')
                {
                    $personName = $getCriminalPerson[0]['personName'];
                }
                if($getCriminalPerson[0]['gender'] != NUll || $getCriminalPerson[0]['gender'] != '')
                {
                    $gender = $getCriminalPerson[0]['gender'];
                }
                if($getCriminalPerson[0]['dob'] != NUll || $getCriminalPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getCriminalPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getCriminalPerson[0]['city'] != NUll || $getCriminalPerson[0]['city'] != '')
                {
                    $address = $getCriminalPerson[0]['city'].','.$getCriminalPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getCriminalPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isCriminal = 1;
            }
            $getWantedPerson = $this->db->query('select * from criminals where panNumber="'.$_POST['idNumber'].'" and type="wanted" and status ="Active" and isFinalSubmitted=1')->result_array();
            if(count($getWantedPerson) > 0)
            {
                foreach($getWantedPerson as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
                if($getWantedPerson[0]['personName'] != NUll || $getWantedPerson[0]['personName'] != '')
                {
                    $personName = $getWantedPerson[0]['personName'];
                }
                if($getWantedPerson[0]['gender'] != NUll || $getWantedPerson[0]['gender'] != '')
                {
                    $gender = $getWantedPerson[0]['gender'];
                }
                if($getWantedPerson[0]['dob'] != NUll || $getWantedPerson[0]['dob'] != '')
                {
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getWantedPerson[0]['dob']);
                    $age = ($from->diff($to)->y).'- Years';
                }
                if($getWantedPerson[0]['city'] != NUll || $getWantedPerson[0]['city'] != '')
                {
                    $address = $getWantedPerson[0]['city'].','.$getWantedPerson[0]['state'];
                }
                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getWantedPerson[0]['Id'])->result_array();
                if($userphoto == (base_url().'assets/img/noimage.jpg') || $userphoto == '')
                {
                    $userphoto = base_url().''.((count($getLatestPhotos) > 0) ? $getLatestPhotos[0]['photourl'] : 'assets/img/noimage.jpg');   
                }
                $isAadharCorrect = 1;
                $isWanted = 1;
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and PAN="'.$_POST['idNumber'].'" and expiryDate >= "'.date('Y-m-d').'"')->result_array();
            if(count($getIfLapataAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isLapata = 1;
                $lapataId = $getIfLapataAvailable[0]['id'];
                $isMissing = 0;
                $missingId = 0;
                if(!$isUserFound)
                {
                    $isVerified = 0;
                    $personName = $getIfLapataAvailable[0]['person_name'];
                    $gender = ($getIfLapataAvailable[0]['Gender'] == 'boy' ? 'MALE' : 'FEMALE');
                    $aadhar = $getIfLapataAvailable[0]['aadharNumber'];
                    $age = ($getIfLapataAvailable[0]['Age']).'Years';
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            $insertdata = array(
                'Idtype' => $_POST['idType'],
                'IdNumber' => $idNumber,
                'bookingId' => $_POST['bookingId'],
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber'],
                'hotelId' => $_SESSION['hotel_id'],
                'isFound' => $isUserFound,
                'lapataId' => implode(',',$lapataId),
                'isLapata' => $isLapata,
                'isMissing' => $isMissing,
                'missingId' => implode(',',$missingId),
                'personId' => $personId,
                'isSaved' => 0,
                'searchType' => 'holder',
                'gender' => $gender,
                'state' => $state,
                'district' => $district,
                'city' => $city,
                'dob' => $dob,
                'age' => $age,
                'wantedId'=> implode(',',$wantedId),
                'criminalId' => implode(',',$criminalId),
                'isCriminal' => $isCriminal,
                'isWanted' => $isWanted,
                'personName' => $personName
            );
            $insert = $this->db->insert('hotelEntry',$insertdata);
            if($insert)
            {
                if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                {
                    if($isIdHolder)
                    {
                        if($getIfPersonAvailable[0]['alternate_mobile1'] != NULL && $getIfPersonAvailable[0]['alternate_mobile2'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'isLapata' => $isLapata,
                                'idNumber' => $idNumber,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] == NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isLapata' => $isLapata,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => false,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }else if($getIfPersonAvailable[0]['alternate_mobile2'] != NULL && $getIfPersonAvailable[0]['alternate_mobile1'] != NULL)
                        {
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'isLapata' => $isLapata,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => true,
                                'isAlternate1' => true,
                                'isAlternate2' => true,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'mobile2' => $getIfPersonAvailable[0]['alternate_mobile1'],
                                    'mobile3' => $getIfPersonAvailable[0]['alternate_mobile2'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                    'vismobile2' => substr_replace($getIfPersonAvailable[0]['alternate_mobile1'],'xxxxxx',0,7),
                                    'vismobile3' => substr_replace($getIfPersonAvailable[0]['alternate_mobile2'],'xxxxxx',0,7)
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                        else{
                            $response = array(
                                'isIdHolder' => $isIdHolder,
                                'status' => 'success',
                                'idNumber' => $idNumber,
                                'personName' => $personName,
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isMissing' => $isMissing,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto,
                                'id' => $this->db->insert_id(),
                                'isAlternate' => false,
                                'data' => array(
                                    'mobile1' => $getIfPersonAvailable[0]['registration_mobile'],
                                    'vismobile1' => substr_replace($getIfPersonAvailable[0]['registration_mobile'],'xxxxxx',0,7),
                                )
                            );
                            $_SESSION['guestId'] = $this->db->insert_id();
                            echo json_encode($response);
                        }
                    }else{
                        $response = array(
                            'isIdHolder' => $isIdHolder,
                            'status' => 'success',
                            'idNumber' => $idNumber,
                            'personName' => $personName,
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => $isDobCorrect,
                            'isGenderCorrect' => $isGenderCorrect,
                            'message' => 'Person Found',
                            'isMissing' => $isMissing,
                            'isRegistered' => $isUserFound,
                            'image' => $userphoto,
                            'id' => $this->db->insert_id(),
                            'isAlternate' => false,
                            'isAlternate1' => false,
                            'isAlternate2' => false,
                        );
                        $_SESSION['guestId'] = $this->db->insert_id();
                        echo json_encode($response);
                    }  
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
                        'isDobCorrect' => $isDobCorrect,
                        'isGenderCorrect' => $isGenderCorrect,
                    );
                    echo json_encode($response);   
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function saveChild()
    {
        $getIfAlreadyBookingAvailable = $this->db->query('select * from childEntry where checkout_status="yes" and hotelId='.$_SESSION['hotel_id'].' and childName="'.$_POST['name'].'" and childAge='.$_POST['age'].' and childGender="'.$_POST['gender'].'" and ("'.$_POST['checkInDate'].'" BETWEEN checkInDate AND checkOutDate
            OR "'.$_POST['checkOutDate'].'" BETWEEN checkInDate AND checkOutDate
            OR checkInDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            OR checkOutDate BETWEEN "'.$_POST['checkInDate'].'" AND "'.$_POST['checkOutDate'].'"
            )')->result_array();
        if(count($getIfAlreadyBookingAvailable) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Booking Already Available'
            );
            echo json_encode($response);
            die();
        }else{
            $insertData = array(
                'hotelId' => $_SESSION['hotel_id'],
                'childName' => $_POST['name'],
                'childAge' => $_POST['age'],
                'childGender' => $_POST['gender'],
                'bookingId'=>$_POST['bookingId'],
                'checkInDate' => $_POST['checkInDate'],
                'checkOutDate' => $_POST['checkOutDate'],
                'roomNumber' => $_POST['roomNumber']
            );
            $this->db->insert('childEntry',$insertData);
            $response = array(
                'roomNumber' => $_POST['roomNumber'],
                'status' => 'success',
                'personName' => $_POST['name'],
                'personAge' => $_POST['age'],
                'personGender' => $_POST['gender'],
                'id' => $this->db->insert_id()
            );
            echo json_encode($response);
            die();
        }   
    }
    
    function getGUIDnoHash($limit=20){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);

            return substr($c,0,$limit);
    }
    
    function add_entries_clone()
    {
        if($this->session->userdata('hotel_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['bookingId'] = $this->getGUIDnoHash(10);
            $page_data['page_name'] = 'hotelEntryClone';
            $this->load->view('hotel/index', $page_data);
        } else {
            redirect(base_url() . 'hotel', 'refresh');
        }
    }
    
    function add_entries()
    {
        if($this->session->userdata('hotel_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['bookingId'] = $this->getGUIDnoHash(10);
            $page_data['page_name'] = 'hotelEntry';
            $this->load->view('hotel/index', $page_data);
        } else {
            redirect(base_url() . 'hotel', 'refresh');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url() . 'hotel', 'refresh');
    }
    
    function sendProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from hotel where hotel_id="'.$_SESSION['hotel_id'].'"')->result_array();
        $getIfAlreadyOtherInAlternate1 = $this->db->query('select * from hotel where alternate_mobile1="'.$_POST['mobile'].'" and hotel_id='.$_SESSION['hotel_id'])->result_array();
        $getIfAlreadyOtherInAlternate2 = $this->db->query('select * from hotel where alternate_mobile2="'.$_POST['mobile'].'" and hotel_id='.$_SESSION['hotel_id'])->result_array();
        $getIfAlreadyOtherInRegistered = $this->db->query('select * from hotel where registration_mobile="'.$_POST['mobile'].'" and hotel_id='.$_SESSION['hotel_id'])->result_array();
        if(count($getIfAlreadyOtherInAlternate2) > 0 || count($getIfAlreadyOtherInAlternate1) > 0 || count($getIfAlreadyOtherInRegistered) > 0)
        {
            $response = array(
                'status' => 'username',
                'message' => 'Note- This number already exist in your profile.'
            );
            echo json_encode($response);
        }else{
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getPreviousDetail[0]['name'],$_POST['mobile'],$otp);
            $updatedata = array(
                'otp' => $otp
            );
            $this->db->where('hotel_id',$getPreviousDetail[0]['hotel_id']);
            $update = $this->db->update('hotel',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'OTP Sent Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function verifyProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from hotel where hotel_id="'.$_SESSION['hotel_id'].'"')->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            if($_POST['index'] == 2)
            {
                $updatedata = array(
                    'alternate_mobile2' => $_POST['mobile']
                );   
            }else if($_POST['index'] == 3)
            {
                $updatedata = array(
                    'alternate_mobile3' => $_POST['mobile']
                );   
            }
            else{
                $updatedata = array(
                    'alternate_mobile1' => $_POST['mobile']
                );
            }
            $this->db->where('hotel_id',$getPreviousDetail[0]['hotel_id']);
            $update = $this->db->update('hotel',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'New Mobile Number Added Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Otp Invalid'
            );
            echo json_encode($response);
        }
    }
    
    function step2($para = ''){
        if($para == '')
        {
            $page_data['title'] = 'Step2';
            $page_data['control'] = 'user';
            $this->load->view('hotel/common/header',$page_data); 
            $this->load->view('hotel/step2');
            $this->load->view('hotel/common/footer'); 
        }else{
            $getPreviousDetail = $this->db->query('select * from hotel where hotel_id="'.$_SESSION['hotel_id'].'"')->result_array();
            $updatedata = array(
                'nearbyThana' => $_POST['nearbyThana'],
                'username' => (($_POST['username'] != '') ? $_POST['username'] : NULL),
                'email' => (($_POST['email'] != '') ? $_POST['email'] : NULL),
                'final_mobile_verification' => (($_POST['username'] != '') ? 'success' : NULL),
            );
            $this->db->where('hotel_id',$getPreviousDetail[0]['hotel_id']);
            $update = $this->db->update('hotel',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Profile Updated Successfully'
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function deleteAlternateMobile()
    {
        $getDetail = $this->db->query('select * from hotel where hotel_id='.$_SESSION['hotel_id'])->result_array();
        if($getDetail[0]['otp'] == $_POST['otp'])
        {
            if($_POST['index'] == 2)
            {
                $update = $this->db->query('update hotel set alternate_mobile2=NULL where hotel_id='.$_SESSION['hotel_id']);   
            }else{
                $update = $this->db->query('update hotel set alternate_mobile1=NULL where hotel_id='.$_SESSION['hotel_id']);   
            }
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Alternate Mobile Number Deleted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
            }
            echo json_encode($response);   
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Invalid OTP'
            );
            echo json_encode($response);   
        }
    }
    
    function sendDeleteProfileOtp()
    {
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp($_SESSION['username'],$_POST['mobile'],$otp);
        $update = $this->db->query('update hotel set otp='.$otp.' where hotel_id='.$_SESSION['hotel_id']);
        if($update)
        {
            $response = array(
                'status' => 'success'
            );
        }else{
            $response = array(
                'status' => 'error'
            );
        }
        echo json_encode($response);   
    }
    
    function verifyHotelOTP()
    {
        $getPreviousDetail = $this->db->query('select * from hotel where hotel_id="'.$_SESSION['hotelNewId'].'"')->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            $updatedata = array(
                'final_mobile_verification' => 'success',
            );
            $this->db->where('hotel_id',$getPreviousDetail[0]['hotel_id']);
            $update = $this->db->update('hotel',$updatedata);
            if($update)
            {
                $this->session->set_userdata('loginmob',$getPreviousDetail[0]['registration_mobile']);
                $this->session->set_userdata('hotel_login', 'yes');
                $this->session->set_userdata('hotel_id', $getPreviousDetail[0]['hotel_id']);
                $this->session->set_userdata('gstNumber', $getPreviousDetail[0]['gstNumber']);
                $this->session->set_userdata('username', $getPreviousDetail[0]['username']);
                $this->session->set_userdata('name', $getPreviousDetail[0]['name']);
                $this->session->set_userdata('login_type', 'hotel');
                $response = array(
                    'status' => 'success',
                    'username' => $getPreviousDetail[0]['username']
                );
                echo json_encode($response);
            }else
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'OTP Invalid'
            );
            echo json_encode($response);
        }
    }
    
    function getSettings($name='gridlineKey')
    {
        $getSettings = $this->db->query('select * from settings where name="'.$name.'"')->result_array();
        return $getSettings[0]['value'];
    }
    
    function sendTextLocalOtp($username,$mob,$otp)
    {
        $message = 'Dear '.$username.', To verify your mobile number your OTP is '.$otp.'.%nMissing and Alert';
        $mob = '91'.$mob;
        try {
            $apiKey = urlencode("NTQ2MzRkNjU1NjMzNGE3NjM1NjkzNzMxNTMzODZiN2E=");
            $sender = urlencode('MANLRT');
            $message = rawurlencode($message);
            $data = array('apikey' => $apiKey, 'numbers' => $mob, 'sender' => $sender, 'message' => $message);
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
        } catch (\Throwable $th) {
            throw $th;

        }
    }
    
    function sendEntryOtp(){
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp($_POST['personName'],$_POST['mobile'],$otp);
        $update = $this->db->query('update hotelEntry set personName="'.$_POST['personName'].'", otp='.$otp.' where Id='.$_SESSION['guestId']);
        $finalResponse = array(
            'status' => 'success',
            'message' => 'OTP sent successfully'
        );
        echo json_encode($finalResponse);       
    }
    
    function resendRegisterOtp(){
        $getPreviousDetail = $this->db->query('select * from hotel where hotel_id='.$_SESSION['hotelNewId'])->result_array();
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp($getPreviousDetail[0]['name'],$getPreviousDetail[0]['registration_mobile'],$otp);
        $update = $this->db->query('update hotel set otp='.$otp.' where hotel_id='.$getPreviousDetail[0]['hotel_id']);
        $finalResponse = array(
            'status' => 'success',
            'message' => 'OTP sent successfully'
        );
        echo json_encode($finalResponse);       
    }
    
    function register($para1 =''){
        if($para1 == 'do_register'){
        unset($_POST['_token']);
        $gstNumber = $this->input->post('gstNumber');
        $credential = array('gstNumber' => $gstNumber,'registration_mobile' => $_POST['registration_mobile']);
        $query = $this->db->get_where('hotel', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if($row->final_mobile_verification == 'success')
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Already Verified'
                );
                echo json_encode($response);
            }else
            {
                $string = '0123456789';
                $string_shuffled = str_shuffle($string);
                $otp = substr($string_shuffled, 1, 4);
                $this->sendTextLocalOtp($row->name,$row->registration_mobile,$otp);
                $update = $this->db->query('update hotel set otp='.$otp.' where hotel_id='.$row->hotel_id);
                $_SESSION['hotelNewId'] = $row->hotel_id;
                $finalResponse = array(
                    'firmName' => $row->name,
                    'tradeName' => $row->tradeName,
                    'status' => 'success',
                    'message' => 'OTP sent successfully'
                );
                echo json_encode($finalResponse);          
            }
        } else {
            $curl = curl_init();
            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.gridlines.io/gstin-api/fetch-detailed",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => json_encode([
                'gstin' => $_POST['gstNumber'],
                'consent' => 'Y'
              ]),
              CURLOPT_HTTPHEADER => [
                 "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: ".$this->getSettings(),
                "X-Auth-Type: API-Key"
              ],
            ]);

            $response = json_decode(curl_exec($curl),true);
            if($response['status'] == 200)
            {
                if($response['data']['code'] == 1000)
                {
                    if(isset($response['data']['gstin_data']['status']))
                    {
                        if($response['data']['gstin_data']['status'] == 'Active')
                        {
                            if(isset($response['data']['gstin_data']['principal_address']['mobile']))
                            {
                                if($response['data']['gstin_data']['principal_address']['mobile'] == $_POST['registration_mobile'])
                                {
                                    $username = '';
                                    $maxId = 1;
                                    $getMaxId= $this->db->query('select max(hotel_id) as Id from hotel')->result_array();
                                    if($getMaxId[0]['Id'] != NULL)
                                    {
                                        $maxId= $getMaxId[0]['Id'] + 1;
                                    }
                                    if(isset($response['data']['gstin_data']['legal_name']))
                                    {
                                        $explode = explode(' ',$response['data']['gstin_data']['legal_name']);
                                        $username = strtolower($explode[0].''.$maxId);
                                    }
                                    $string = '0123456789';
                                    $string_shuffled = str_shuffle($string);
                                    $otp = substr($string_shuffled, 1, 4);
                                    $this->sendTextLocalOtp($response['data']['gstin_data']['legal_name'],$_POST['registration_mobile'],$otp);
                                    $insertData = array(
                                        'registration_mobile' => $_POST['registration_mobile'],
                                        'email' => (isset($response['data']['gstin_data']['principal_address']['email']) ? $response['data']['gstin_data']['principal_address']['email'] : NULL),
                                        'address' => (isset($response['data']['gstin_data']['principal_address']['address']) ? $response['data']['gstin_data']['principal_address']['address'] : NULL),
                                        'name' => (isset($response['data']['gstin_data']['legal_name']) ? $response['data']['gstin_data']['legal_name'] : NULL),
                                        'tradeName' => (isset($response['data']['gstin_data']['trade_name']) ? $response['data']['gstin_data']['trade_name'] : NULL),
                                        'gstStatus' => (isset($response['data']['gstin_data']['status']) ? $response['data']['gstin_data']['status'] : NULL),
                                        'panNumber' => (isset($response['data']['gstin_data']['pan']) ? $response['data']['gstin_data']['pan'] : NULL),
                                        'registrationDate' => (isset($response['data']['gstin_data']['date_of_registration']) ? $response['data']['gstin_data']['date_of_registration'] : NULL),
                                        'gstNumber' => $_POST['gstNumber'],
                                        'username' => $username,
                                        'otp' => $otp
                                    );
                                    $insert = $this->db->insert('hotel',$insertData) ;
                                    $_SESSION['hotelNewId'] = $maxId;
                                    $finalResponse = array(
                                        'firmName' => (isset($response['data']['gstin_data']['legal_name']) ? $response['data']['gstin_data']['legal_name'] : '-'),
                                        'tradeName' => (isset($response['data']['gstin_data']['trade_name']) ? $response['data']['gstin_data']['trade_name'] : '-'),
                                        'status' => 'success',
                                        'message' => 'OTP sent successfully'
                                    );
                                    echo json_encode($finalResponse);          
                                }else{
                                    $finalResponse = array(
                                        'status' => 'error',
                                        'message' => 'Mobile number not registered with GST Number'
                                    );
                                    echo json_encode($finalResponse);           
                                }
                            }else{
                                $finalResponse = array(
                                    'status' => 'error',
                                    'message' => 'Mobile number not registered with GST Number'
                                );
                                echo json_encode($finalResponse);  
                            }      
                        }else{
                            $finalResponse = array(
                                'status' => 'error',
                                'message' => 'GST Number is In-Active'
                            );
                            echo json_encode($finalResponse);
                        }
                    }
                }else{
                    $finalResponse = array(
                        'status' => 'error',
                        'message' => 'Please check GST Number'
                    );
                    echo json_encode($finalResponse);   
                }
            }else
            {
                $finalResponse = array(
                    'status' => 'error',
                    'message' => 'Please check GST Number'
                );
                echo json_encode($finalResponse);
            }
        }
      } else {
            $page_data['title'] = 'Register';
            $page_data['control'] = 'user';
            $this->load->view('hotel/common/header',$page_data); 
            $this->load->view('hotel/register');
            $this->load->view('hotel/common/footer'); 
        }
    }
    
    function view_entries()
    {
        if($para == '')
        {
            if($this->session->userdata('hotel_login') == 'yes'){
                $page_data['title'] = 'Entries';
                $page_data['entries'] = $this->db->query('select * from hotelEntry where isSaved=1')->result_array();
                $page_data['page_name'] = 'view_entries';
                $this->load->view('hotel/index', $page_data);
              } else {
                 redirect('hotel/login','refresh');
              }
        }else{
        }
    }
    
    function profile($para = '')
    {
        if($para == '')
        {
            if($this->session->userdata('hotel_login') == 'yes'){
                $page_data['title'] = 'Profile';
                $page_data['page_name'] = 'profile';
                $this->load->view('hotel/index', $page_data);
              } else {
                 redirect('hotel/login','refresh');
              }
        }else{
        }
    }

    public function login($para1 = ''){
        if($para1 == 'do_login'){
            if($_POST['type'] == 'gst')
            {
                $getDetail = $this->db->query('select * from hotel where gstNumber="'.$_POST['typeval'].'"')->result_array();
            }else{
                $getDetail = $this->db->query('select * from hotel where username="'.$_POST['typeval'].'"')->result_array();
            }
            if($getDetail[0]['otp'] == $_POST['otp'])
            {
                $this->session->set_userdata('loginmob',$_POST['mobile']);
                $this->session->set_userdata('user_login', 'yes');
                $this->session->set_userdata('hotel_login', 'yes');
                $this->session->set_userdata('hotel_id', $getDetail[0]['hotel_id']);
                $this->session->set_userdata('gstNumber', $getDetail[0]['gstNumber']);
                $this->session->set_userdata('username', $getDetail[0]['username']);
                $this->session->set_userdata('name', $getDetail[0]['name']);
                $this->session->set_userdata('login_type', 'hotel');
                $response = array(
                    'status' => 'success',
                    'message' => 'Login Successful',
                    'finalverification' => ($getDetail[0]['final_mobile_verification'] == 'success' ? 'success' : 'failed')
                );
                echo json_encode($response);
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Invalid Otp'
                );
                echo json_encode($response);
            }
        } else {
            $page_data['title'] = 'Login';
            $page_data['control'] = 'hotel';
            $this->load->view('hotel/common/header',$page_data); 
            $this->load->view('hotel/login');
            $this->load->view('hotel/common/footer'); 
        }
    }
}