<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngo extends CI_Controller {
	public function __construct()
    {
       parent:: __construct();
       error_reporting(0);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url() . 'ngo', 'refresh');
    }
    
    public function index()
    {
        if($this->session->userdata('ngo_login') == 'yes'){
            $page_data['page_name'] = 'dashboard';
            $page_data['ngodetail'] =$this->db->query('select * from ngo')->result_array();
            $this->load->view('ngo/index', $page_data);
         } else {
            redirect(base_url().'ngo/login','refresh');
         }
    }
    
    function search_person_by_identity()
    {
        if($this->session->userdata('ngo_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'search_person_by_identity';
            $this->load->view('ngo/index', $page_data);
        }else 
        {
            redirect('ngo/login','refresh');
        }   
    }
    
    function completeFaceMatchResults()
    {
        if($this->session->userdata('ngo_login') == 'yes')
        {
            if(isset($_SESSION['searchFaceIdAfterLogin']))
            {
                $page_data['control'] = 'user';
                $page_data['title'] = 'Face Match Results';
                $page_data['page_name'] = 'completeFaceMatchResults';
                $this->load->view('ngo/index', $page_data); 
            }else{
                redirect('ngo/search_person_details?pn=7','refresh');
            }
        }else{
            redirect(base_url().'ngo','refresh');
        }
    }
    
    function addFaceSearch()
    {
        $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
        if($getFinalId[0]['Id'] != NULL)
        {
            $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
        }else{
            $_SESSION['searchFaceIdAfterLogin'] = 1;
        }
        $insertdata = array(
            'Id' => $_SESSION['searchFaceIdAfterLogin'],
            'userId' => $_SESSION['ngo_id']
        );
        $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
    }

    function searchPersonFace()
    {
        $data = $_POST["mainPhotoSelectedFacematch"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageId = time().''.rand(0,10000);
        $newImagePath = 'upload/searchFacePerson/'.$imageId.'.'.$split1[1];
        file_put_contents($newImagePath, $data);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.pixnif.com/api/v1/search-image?awsEventName=unknownV3&imageId='.$imageId.'&imageUrl='.base_url().''.$newImagePath,
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
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $isWanted = 0;
        $isCriminal = 0;
        $wantedId = array();
        $criminalId = array();
        $address = '';
        $userphoto = '';
        $personId = 0;
        $isLapata = 0;
        $missingId = 0;
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $isGenderCorrect = 1;
        $isDobCorrect = 1;
        $userId = array();
        $missingId = array();
        $lapataId = array();
        $wantedId = array();
        $criminalId = array();
        $finalcount = 0;
        curl_close($curl);
        if(count($faceresponse) > 0)
        {
            if(count($faceresponse['output']) > 0)
            {
                foreach($faceresponse['output'] as $k=>$v)
                {
                    $split = explode('_',$v);
                    if($split[0] == 'GEN')
                    {
                        $this->db->where('imageId',$v);
                        $user = $this->db->get('user')->result_array();
                        if(count($user) > 0)
                        {
                            foreach($user as $k1=>$v1)
                            {
                                array_push($userId,$v1['uid']);
                                $finalcount++;
                            }
                        }       
                    }
                    if($split[0] == 'Missing')
                    {
                        $this->db->where('imageId',$v);
                        $this->db->where('isFinalSubmitted',1);
                        $this->db->where('isFound',0);
                        $missingperson = $this->db->get('missingperson')->result_array();
                        if(count($missingperson) > 0)
                        {
                            foreach($missingperson as $k1=>$v1)
                            {
                                array_push($missingId,$v1['Id']);
                                $finalcount++;
                            }
                        }
                    }
                    if($split[0] == 'LAP')
                    {
                        $this->db->where('imageId',$v);
                        $this->db->where('expiryDate >=',date('Y-m-d h:i:s'));
                        $this->db->where('isFound',0);
                        $lapata = $this->db->get('unknown_person')->result_array();
                        if(count($lapata) > 0)
                        {
                            foreach($lapata as $k1=>$v1)
                            {
                                array_push($lapataId,$v1['id']);
                                $finalcount++;
                            }
                        }
                    }
                    if($split[0] == 'Wanted')
                    {
                        $this->db->where('imageId',$v);
                        $this->db->where('isFinalSubmitted',1);
                        $this->db->where('status','Active');
                        $wanted = $this->db->get('criminals')->result_array();
                        if(count($wanted) > 0)
                        {
                            foreach($wanted as $k1=>$v1)
                            {
                                array_push($wantedId,$v1['Id']);
                                $finalcount++;
                            }
                        }
                    }
                    if($split[0] == 'Criminal')
                    {
                        $this->db->where('imageId',$v);
                        $this->db->where('isFinalSubmitted',1);
                        $this->db->where('status','Active');
                        $criminal = $this->db->get('criminals')->result_array();
                        if(count($criminal) > 0)
                        {
                            foreach($criminal as $k1=>$v1)
                            {
                                array_push($criminalId,$v1['Id']);
                                $finalcount++;
                            }
                        }
                    }
                }
            }
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.pixnif.com/api/v1/search-image?awsEventName=Unknown&imageId='.$imageId.'&imageUrl='.base_url().''.$newImagePath,
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
        $unknownId = array();
        if(count($faceresponse['output']) > 0)
        {
            foreach($faceresponse['output'] as $k1=>$v1)
            {
                $this->db->where_in('imageId',$v1);
                $this->db->where('isFound',0);
                $getUnknownDetail = $this->db->get('unknown_person')->result_array();
                if(count($getUnknownDetail) > 0)
                {
                    foreach($getUnknownDetail as $k=>$v)
                    {
                        array_push($unknownId,$v['id']);
                        $finalcount++;
                    }
                }   
            }
        }
        if($finalcount > 0)
        {
            if(count($lapataId) > 0)
            {
                foreach($lapataId as $k=>$v)
                {
                    if($k == 0)
                    {
                        $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                        $notifyData = array(
                            'isLogin' => 1,
                            'ngoId' => $_SESSION['police_id'],
                            'dateCreated' => date('Y-m-d H:i:s'),
                            'mobileNumber' => $_SESSION['loginmob'],
                            'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                            'searchType' => 'Lapata',
                            'searchPhoto' => $newImagePath,
                            'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                            'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                        );
                        $insert = $this->db->insert('searchnotification',$notifyData);
                        if($getApplicationNumber[0]['uploaded_by'] == 'user')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - THANA -".$_SESSION['thanaName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else{
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }
                    }
                }
            }
            if(count($unknownId) > 0)
            {
                foreach($unknownId as $k=>$v)
                {
                    if($k == 0)
                    {
                        $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                        $notifyData = array(
                            'isLogin' => 1,
                            'ngoId' => $_SESSION['police_id'],
                            'dateCreated' => date('Y-m-d H:i:s'),
                            'mobileNumber' => $_SESSION['loginmob'],
                            'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                            'searchType' => 'Unknown',
                            'searchPhoto' => $newImagePath,
                            'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                            'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                        );
                        $insert = $this->db->insert('searchnotification',$notifyData);
                        if($getApplicationNumber[0]['uploaded_by'] == 'user')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                        {
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }else{
                            $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                            $query_res = $query->result_array();
                            
                            if(count($query_res) > 0)
                            {
                                foreach ($query_res as $query_res_data) {
                                    $registrationIds[] =$query_res_data['token'];
                                }
                                
                                $url ="https://fcm.googleapis.com/fcm/send";
                                $fields=array(
                                    "registration_ids"=>$registrationIds,
                                    'data' => array("msg"=>"Khoji"),
                                    'priority' => 'high',
                                    "click_action"=>base_url(),
                                    "notification"=>array(
                                        "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                        "title"=>"Khoji",
                                    )   
                                );
                                $headers=array(
                                    'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                    'Content-Type:application/json'
                                );
                                $ch=curl_init();
                                curl_setopt($ch,CURLOPT_URL,$url);
                                curl_setopt($ch,CURLOPT_POST,true);
                                curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                                curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                                curl_exec($ch);
                            }
                        }
                    }
                }
            }
            $insertdata = array(
                'matchedLapataIds' => implode(',',$lapataId),
                'matchedWantedIds' => implode(',',$wantedId),
                'matchedCriminalIds' => implode(',',$criminalId),
                'matchedMissingIds' => implode(',',$missingId),
                'matchedUserIds' => implode(',',$userId),
                'matchedUnknownIds' => implode(',',$unknownId),
                'mainPhoto' => $newImagePath
            );
            $this->db->where('Id',$_SESSION['searchFaceIdAfterLogin']);
            $update = $this->db->update('searchfacehistoryafterlogin',$insertdata);
            $response = array(
                'status' => 'success',
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
                'finalCount' => $finalcount
            );
            echo json_encode($response);     
        }else{
            $response = array(
                'status' => 'success',
                'finalCount' => $finalcount
            );
            echo json_encode($response);     
        }
    }
    
    function lapata_person_filter()
    {
        if($this->session->userdata('ngo_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('aadharNumber',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('Dl_no',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('PAN',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('voter_id',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'vehicle')
                        {
                            $this->db->where('vehicle_no',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('isFound',0);
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                    $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('Gender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('person_name',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('state',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('district',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('city',$_GET['cityForm']);
                    }
                    $this->db->where('uploaded_by','user');
                    $page_data['data']=$this->db->get('unknown_person')->result_array();
                    $finalId = array();
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'gold')
                        {
                            if(count($page_data['data']) > 0)
                            {
                                foreach($page_data['data'] as $k=>$v)
                                {
                                    $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$v['id'].' and goldHUID="'.$_GET['idNumber'].'"')->result_array();   
                                    if(count($getGoldDetails) > 0)
                                    {
                                        array_push($finalId,$v['id']);
                                    }
                                }
                            }
                            if(count($finalId) > 0)
                            {
                                $this->db->where_in('id',$finalId);
                                $page_data['data']=$this->db->get('unknown_person')->result_array();
                            }else{
                                $page_data['data']= array();
                            }
                        }
                    }
                    $finalId = array();
                    if(count($page_data['data']) > 0)
                    {
                        foreach($page_data['data'] as $k=>$v)
                        {
                            if($v['uploaded_by'] == 'user')
                            {
                                $twentyFourHourAgo= date('Y-m-d H:i:s');
                                $date1 = $twentyFourHourAgo;
                                $date2 = $v['expiryDate'];
                                
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                
                                $years = floor($diff / (365*60*60*24));
                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                if($days != 0 || $months != 0)
                                {
                                    array_push($finalId,$v['id']);
                                }
                            }else{
                                array_push($finalId,$v['id']);
                            }
                        }
                        if(count($finalId) > 0)
                        {
                            $this->db->where_in('id',$finalId);
                            // $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                            $page_data['data']=$this->db->get('unknown_person')->result_array();
                        }
                    }
                }else{
                    $page_data['data']= [];
                    $page_data['paginationCtrls'] = '';
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'lapataperson_data';
            $this->load->view('ngo/index', $page_data);  
        }else{
            redirect(base_url().'ngo/login','refresh');
        }
    }
    
    function editUnknownDetails()
    {
        if($this->session->userdata('ngo_login') == 'yes'){
            $page_data['page_name'] = 'editUnknownDetails';
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['data'] = $this->db->query('select * from unknown_person where Application_no="'.$_GET['id'].'"')->result_array();
            $page_data['gold'] = $this->db->query('select * from unknownPersonGold where unknownId='.$page_data['data'][0]['id'])->result_array();
            // $page_data['data'] = array();
            $this->load->view('ngo/index', $page_data);
        } else {
            redirect(base_url().'ngo/login','refresh');
        }
    }
    
    function manage_unknown_person()
    {
        if($this->session->userdata('ngo_login') == 'yes'){
            $page_data['page_name'] = 'manage_unknown_person';
            $page_data['data'] = $this->db->query('select * from unknown_person where ngoId='.$_SESSION['ngo_id'])->result_array();
            // $page_data['data'] = array();
            $this->load->view('ngo/index', $page_data);
        } else {
            redirect(base_url().'ngo/login','refresh');
        } 
    }
    
     public function search_all_page()
    {
         $page_data['page_name'] = 'search_all_page';
            $page_data['ngodetail'] =$this->db->query('select * from ngo')->result_array();
            $this->load->view('ngo/index', $page_data);
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
    
    function sendLoginOtp()
    {
        if($_POST['type'] == 'aadhar')
        {
            $getIfAlready = $this->db->query('select * from ngo where aadhar_id="'.$_POST['typeval'].'"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from ngo where username="'.$_POST['typeval'].'"')->result_array();
        }
        if(count($getIfAlready) > 0)
        {
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp($getIfAlready[0]['aadharname'],$_POST['mobile'],$otp);
            // $otp = '1234';
            $update = $this->db->query('update ngo set otp='.$otp.' where Id='.$getIfAlready[0]['Id']);
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

    function getMobileDetails()
    {
        if($_POST['type'] == 'aadhar')
        {
            $getIfAlready = $this->db->query('select * from ngo where aadhar_id="'.$_POST['value'].'"')->result_array();
        }else{
            $getIfAlready = $this->db->query('select * from ngo where username="'.$_POST['value'].'"')->result_array();
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
    
    public function login($para1 = '')
    {
         if($para1 == 'do_login'){
        if($_POST['type'] == 'aadhar')
        {
            $getDetail = $this->db->query('select * from ngo where aadhar_id="'.$_POST['typeval'].'"')->result_array();
        }else{
            $getDetail = $this->db->query('select * from ngo where username="'.$_POST['typeval'].'"')->result_array();
        }
        if($getDetail[0]['otp'] == $_POST['otp'])
        {
            if(isset($_SESSION['fcmtokenId']))
            $update = $this->db->query('update notification_tokens_tbl set userType="ngo", userId='.$getDetail[0]['Id'].' where Id='.$_SESSION['fcmtokenId']);
            $this->session->set_userdata('loginmob',$_POST['mobile']);
            $this->session->set_userdata('user_login', 'yes');
            $this->session->set_userdata('ngo_login', 'yes');
            $this->session->set_userdata('ngo_id', $getDetail[0]['Id']);
            $this->session->set_userdata('aadhar_id', $getDetail[0]['aadhar_id']);
            $this->session->set_userdata('username', $getDetail[0]['username']);
            $this->session->set_userdata('ngoName', $getDetail[0]['ngoName']);
            $this->session->set_userdata('aadharName', $getDetail[0]['aadharname']);
            $this->session->set_userdata('login_type', 'ngo');
            $response = array(
                'status' => 'success',
                'message' => 'Login Successful',
                'lasturl' => $_POST['basename'],
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
        $page_data['lasturl'] = basename($_SERVER['HTTP_REFERER']);
        $page_data['title'] = 'Login';
        $page_data['control'] = 'ngo';
        $this->load->view('ngo/common/header',$page_data); 
        $this->load->view('ngo/login');
        $this->load->view('ngo/common/footer'); 
      }
    }
    
    function getSettings($name='gridlineKey')
    {
        $getSettings = $this->db->query('select * from settings where name="'.$name.'"')->result_array();
        return $getSettings[0]['value'];
    }
    
    function verifyProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from ngo where Id="'.$_SESSION['ngo_id'].'"')->result_array();
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
            $this->db->where('Id',$getPreviousDetail[0]['Id']);
            $update = $this->db->update('ngo',$updatedata);
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
    
    function deleteAlternateMobile()
    {
        $getDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
        if($getDetail[0]['otp'] == $_POST['otp'])
        {
            if($_POST['index'] == 2)
            {
                $update = $this->db->query('update ngo set alternate_mobile2=NULL where Id='.$_SESSION['ngo_id']);   
            }else if($_POST['index'] == 3)
            {
                $update = $this->db->query('update ngo set alternate_mobile3=NULL where Id='.$_SESSION['ngo_id']);   
            }
            else{
                $update = $this->db->query('update ngo set alternate_mobile1=NULL where Id='.$_SESSION['ngo_id']);   
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
                'message' => 'Invalid Otp'
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
        $update = $this->db->query('update ngo set otp='.$otp.' where Id='.$_SESSION['ngo_id']);
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
    
    function sendProfileMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from ngo where Id="'.$_SESSION['ngo_id'].'"')->result_array();
        $getIfAlreadyOtherInAlternate1 = $this->db->query('select * from ngo where alternate_mobile1="'.$_POST['mobile'].'" and Id='.$_SESSION['ngo_id'])->result_array();
        $getIfAlreadyOtherInAlternate2 = $this->db->query('select * from ngo where alternate_mobile2="'.$_POST['mobile'].'" and Id='.$_SESSION['ngo_id'])->result_array();
        $getIfAlreadyOtherInRegistered = $this->db->query('select * from ngo where registration_mobile="'.$_POST['mobile'].'" and Id='.$_SESSION['ngo_id'])->result_array();
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
            $this->sendTextLocalOtp($getPreviousDetail[0]['username'],$_POST['mobile'],$otp);
            $updatedata = array(
                'otp' => $otp
            );
            $this->db->where('Id',$getPreviousDetail[0]['Id']);
            $update = $this->db->update('ngo',$updatedata);
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
    
    function profile($para = '')
    {
        if($para == '')
        {
            if($this->session->userdata('ngo_login') == 'yes'){
                $page_data['title'] = 'Profile';
                $page_data['page_name'] = 'profile';
                $this->load->view('ngo/index', $page_data);
              } else {
                 redirect('ngo/login','refresh');
              }
        }else{
        }
    }
    
    function addUnknownProfileContact()
    {
        $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
        {
            $response = array(
                'status' => 'username',
                'message' => 'Mobile number already added'
            );
            echo json_encode($response);
        }else{
            if($_POST['index'] == 2)
            {
                $updatedata = array(
                    'well2' => $_POST['mobile'],
                    'isProfileContact2' => 1,
                );   
            }else if($_POST['index'] == 3)
            {
                $updatedata = array(
                    'well3' => $_POST['mobile'],
                    'isProfileContact3' => 1,
                );   
            }
            else{
                $updatedata = array(
                    'well1' => $_POST['mobile'],
                    'isProfileContact1' => 1,
                );
            }
            $this->db->where('id',$getPreviousDetail[0]['id']);
            $update = $this->db->update('unknown_person',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'New Contact Added Successfully'
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
    
    function createNewAccount()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/boson/submit-otp",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => '{"otp": '.$_POST['otp'].'}',
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-API-Key: ".$this->getSettings(),
            "X-Auth-Type: API-Key",
            "X-Transaction-ID: ".$_SESSION['transactionId']
          ]
        ]);

        $response = JSON_decode(curl_exec($curl),true);
        if($response['status'] == 200)
        {
            if($response['data']['code'] == 1002)
            {
                $aadharphoto = '';
                if(isset($response['data']['aadhaar_data']['photo_base64']))
                {
                    $decoded=base64_decode($response['data']['aadhaar_data']['photo_base64']);
                    $aadharphoto = 'upload/aadhar/'.time().'.JPG';
                    file_put_contents($aadharphoto,$decoded);
                }
                $getPreviousDetail = $this->db->query('select * from ngo where aadhar_id="'.$_SESSION['aadharId'].'"')->result_array();
                $username = '';
                if(isset($response['data']['aadhaar_data']['name']))
                {
                    $explode = explode(' ',$response['data']['aadhaar_data']['name']);
                    $username = strtolower($explode[0].''.$getPreviousDetail[0]['Id']);
                }
                $updatedata = array(
                    'final_mobile_verification' => 'success',
                    'username' => (isset($response['data']['aadhaar_data']['name']) ? ($username) : NULL),
                    'dob' => (isset($response['data']['aadhaar_data']['date_of_birth']) ? $response['data']['aadhaar_data']['date_of_birth'] : NULL),
                    'gender' => (isset($response['data']['aadhaar_data']['gender']) ? $response['data']['aadhaar_data']['gender'] : NULL),
                    'mobile_hash' => (isset($response['data']['aadhaar_data']['mobile']) ? $response['data']['aadhaar_data']['mobile'] : NULL),
                    'aadharname' => (isset($response['data']['aadhaar_data']['name']) ? $response['data']['aadhaar_data']['name'] : NULL),
                    'careof' => (isset($response['data']['aadhaar_data']['care_of']) ? $response['data']['aadhaar_data']['care_of'] : NULL),
                    'country' => (isset($response['data']['aadhaar_data']['country']) ? $response['data']['aadhaar_data']['country'] : NULL),
                    'district' => (isset($response['data']['aadhaar_data']['district']) ? $response['data']['aadhaar_data']['district'] : NULL),
                    'landmark' => (isset($response['data']['aadhaar_data']['landmark']) ? $response['data']['aadhaar_data']['landmark'] : NULL),
                    'locality' => (isset($response['data']['aadhaar_data']['locality']) ? $response['data']['aadhaar_data']['locality'] : NULL),
                    'pincode' => (isset($response['data']['aadhaar_data']['pincode']) ? $response['data']['aadhaar_data']['pincode'] : NULL),
                    'state' => (isset($response['data']['aadhaar_data']['state']) ? $response['data']['aadhaar_data']['state'] : NULL),
                    'vtc' => (isset($response['data']['aadhaar_data']['vtc_name']) ? $response['data']['aadhaar_data']['vtc_name'] : NULL),
                    'aadharphoto' => $aadharphoto,
                    
                );
                $this->db->where('aadhar_id',$_SESSION['aadharId']);
                if($this->db->update('ngo',$updatedata))
                {
                    $getPreviousDetail = $this->db->query('select * from ngo where aadhar_id="'.$_SESSION['aadharId'].'"')->result_array();
                    $this->session->set_userdata('ngo_login', 'yes');
                    $this->session->set_userdata('loginmob',$getPreviousDetail[0]['registration_mobile']);
                    $this->session->set_userdata('user_id', $getPreviousDetail[0]['Id']);
                    $this->session->set_userdata('aadhar_id', $getPreviousDetail[0]['aadhar_id']);
                    $this->session->set_userdata('username', $getPreviousDetail[0]['username']);
                    $this->session->set_userdata('aadharName', $getPreviousDetail[0]['aadharname']);
                    $this->session->set_userdata('login_type', 'ngo');
                    $finalresponse = array(
                        'status' => 'success',
                        'aadharname' => $response['data']['aadhaar_data']['name'],
                        'username' => $username,
                    );
                }else{
                    $finalresponse = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                }
                echo json_encode($finalresponse);
            }else{
                $finalresponse = array(
                    'status' => 'error',
                    'message' => $response['data']['message'],
                );
                echo json_encode($finalresponse);
            }

        }else{
            $finalresponse = array(
                'status' => 'error',
                'message' => $response['error']['message'],
            );
            echo json_encode($finalresponse);
        }   
    }
    
    function resendRegisterOtp()
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
          CURLOPT_POSTFIELDS => '{"aadhaar_number": '.$_POST['aadharNumber'].',  "consent": "Y"}',
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-API-Key: ".$this->getSettings(),
            "X-Auth-Type: API-Key"
          ],
        ]);

        $response = json_decode(curl_exec($curl),true);
        if($response['status'] == 200)
        {
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
    }
    
    function register($para = '')
    {
        if($para == '')
        {
            $page_data['control'] = 'admin';
            $page_data['title'] = 'Register';
            $this->load->view('ngo/common/header', $page_data);
            $this->load->view('ngo/register');
            $this->load->view('ngo/common/footer', $page_data);   
        }else{
            unset($_POST['_token']);
            $aadhar = $this->input->post('aadhar_id');
            $credential = array('aadhar_id' => $aadhar,'final_mobile_verification'=>'success');
            $query = $this->db->get_where('ngo', $credential);
            if ($query->num_rows() > 0) {
                $finalresponse = array(
                    'status' => 'error',
                    'message' => 'Aadhar number already registered in our website'
                );
                echo json_encode($finalresponse);
            } else {
                $curl = curl_init();
                curl_setopt_array($curl, [
                  CURLOPT_URL => "https://api.gridlines.io/aadhaar-api/verify",
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
                
                $response1 = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if($response1['status'] == 200)
                {
                    if($response1['data']['code'] == 1018)
                    {
                        if(substr($response1['data']['aadhaar_data']['mobile'] , -3) == substr($_POST['registration_mobile'] , -3))
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
                
                            $response2 = json_decode(curl_exec($curl),true);
                            if($response2['status'] == 200)
                            {
                                unset($_POST['consent']);
                                $getIfAlready = $this->db->query('select * from ngo where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                                if(count($getIfAlready) > 0)
                                {
                                    $this->db->where('aadhar_id',$_POST['aadhar_id']);
                                    $update = $this->db->update('ngo',$_POST) ;
                                }else{
                                    $insert = $this->db->insert('ngo',$_POST) ;   
                                }
                                $_SESSION['aadharId'] = $_POST['aadhar_id'];
                                $_SESSION['mob'] = $_POST['registration_mobile'];
                                $_SESSION['transactionId'] = $response2['data']['transaction_id'];
                                $finalresponse = array(
                                    'status' => 'success',
                                    'message' => $response2['data']['message']
                                );
                                echo json_encode($finalresponse);
                            }else
                            {
                                $finalresponse = array(
                                    'status' => 'error',
                                    'message' => $response2['error']['message']
                                );
                                echo json_encode($finalresponse);
                            }
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'The Mobile number you have entered does not match with our records.'
                            );
                            echo json_encode($finalresponse);
                        }   
                    }else{
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => $response1['data']['message']
                        );
                        echo json_encode($finalresponse);
                    }
                }else{
                    $finalresponse = array(
                        'status' => 'error',
                        'message' => 'The upstream server of the government is slowed down, please try after some time.'
                    );
                    echo json_encode($finalresponse);
                }
            }
        }
    }
    
    public function upload_detail()
    {
        $page_data['pn'] = 1;
        if(isset($_GET['pn']))
        {
            $page_data['pn'] = $_GET['pn'];    
        }
         $page_data['page_name'] = 'upload_detail';
          $this->load->view('ngo/index', $page_data);
    }
    
    function compressImage($source, $destination, $quality) { 
        // Get image info 
        $imgInfo = getimagesize($source); 
        $mime = $imgInfo['mime']; 
         
        // Create a new image from file 
        switch($mime){ 
            case 'image/jpeg': 
                $image = imagecreatefromjpeg($source); 
                break; 
            case 'image/png': 
                $image = imagecreatefrompng($source); 
                break; 
            case 'image/gif': 
                $image = imagecreatefromgif($source); 
                break; 
            case 'image/webp':
                $image = imagecreatefromwebp($source);
                break;
            default: 
                $image = imagecreatefromjpeg($source); 
        } 
         
        // Save image 
        imagejpeg($image, $destination, $quality); 
         
        // Return compressed image 
        return $destination; 
    }
    
    function searchByImage()
    {
        $name = $_FILES["file"]["name"];
        $ext = end((explode(".", $name)));
        $imageId = time().''.rand(0,10000);
        $fileName = $imageId.'.'.$ext; 
        $imageUploadPath = 'upload/unknownfacematch/' . $fileName; 
        $imageTemp = $_FILES["file"]["tmp_name"]; 
        $compressedImage = $this->compressImage($imageTemp, $imageUploadPath, 75); 
        if($compressedImage != '')
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://api.pixnif.com/api/v1/search-image?awsEventName=Unknown&imageId='.$imageId.'&imageUrl='.base_url().''.$compressedImage,
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
                    $finalresponse = array(
                        'status' => 'success',
                        'finalId' => $faceresponse['output']
                    );
                    echo json_encode($finalresponse);
                }else{
                    $finalresponse = array(
                        'status' => 'error'
                    );
                    echo json_encode($finalresponse);
                }
            }else{
                $finalresponse = array(
                    'status' => 'error'
                );
                echo json_encode($finalresponse);    
            }
        }else{
            $finalresponse = array(
                'status' => 'error'
            );
            echo json_encode($finalresponse);
        }
        
    }
    
    function missing_person_filter()
    {
        if($this->session->userdata('ngo_login') == 'yes')
        {
            if(isset($_GET['pn']))
            {
                if($_GET['pn'] == 2)
                {
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('missingaadhar',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('missingdl',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('missingpan',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('missingvoter',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->like('missinggender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('missingname',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('fatherstate',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('fatherdistrict',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('fathercity',$_GET['cityForm']);
                    }
                    $page_data['data']=$this->db->get('missingperson')->result_array();
                    $rows = count($page_data['data']);
             
                	$page_rows = 100;
                 
                	$last = ceil($rows/$page_rows);
                 
                	if($last < 1){
                		$last = 1;
                	}
                 
                	$pagenum = 1;
                 
                	if(isset($_GET['pn'])){
                		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                	}
                 
                	if ($pagenum < 1) { 
                		$pagenum = 1; 
                	} 
                	else if ($pagenum > $last) { 
                		$pagenum = $last; 
                	}
                 
                	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                	$this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('missinggender',$_GET['genderForm']);
                    if($_GET['idNumber'] != '')
                    {
                        if($_GET['idType'] == 'aadhar')
                        {
                            $this->db->where('missingaadhar',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'dl')
                        {
                            $this->db->where('missingdl',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'pan')
                        {
                            $this->db->where('missingpan',$_GET['idNumber']);
                        }
                        if($_GET['idType'] == 'voter')
                        {
                            $this->db->where('missingvoter',$_GET['idNumber']);
                        }
                    }
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                	$this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                    $this->db->where('missinggender',$_GET['genderForm']);
                    if(($_GET['personFormName']) != '')
                    {
                        $this->db->like('missingname',$_GET['personFormName']);
                    }
                    if(($_GET['stateForm']) != '')
                    {
                        $this->db->where('fatherstate',$_GET['stateForm']);
                    }
                    if(($_GET['districtForm']) != '')
                    {
                        $this->db->where('fatherdistrict',$_GET['districtForm']);
                    }
                    if(($_GET['cityForm']) != '')
                    {
                        $this->db->where('fathercity',$_GET['cityForm']);
                    }
                    $this->db->where('isFinalSubmitted',1);
                    $page_data['data']=$this->db->get('missingperson')->result_array();
                // 	$page_data['data']=$this->db->query('select * from unknown_person '.$limit)->result_array();
                 
                	$page_data['paginationCtrls'] = '';
                 
                	if($last != 1){
                    	if ($pagenum > 1) {
                            $previous = $pagenum - 1;
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'ngo/missing_person_filter?pn='.$previous.'" class="btn btn-default mt-0 ms-3">Previous</a> &nbsp; &nbsp; ';
                     
                    		for($i = $pagenum-4; $i < $pagenum; $i++){
                    			if($i > 0){
                    		        $paginationCtrls .= '<a href="'.base_url().'ngo/missing_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    			}
                    	    }
                        }
                     
                    	$page_data['paginationCtrls'] .= ''.$pagenum.' &nbsp; ';
                     
                    	for($i = $pagenum+1; $i <= $last; $i++){
                    		$page_data['paginationCtrls'] .= '<a href="'.base_url().'ngo/missing_person_filter?pn='.$i.'" class="btn btn-default mt-0 ms-3">'.$i.'</a> &nbsp; ';
                    		if($i >= $pagenum+4){
                    			break;
                    		}
                    	}
                     
                        if ($pagenum != $last) {
                            $next = $pagenum + 1;
                            $page_data['paginationCtrls'] .= ' &nbsp; &nbsp; <a href="'.base_url().'ngo/missing_person_filter?pn='.$next.'" class="btn btn-default mt-0 ms-3">Next</a> ';
                        }
                	}   
                }else{
                    $page_data['data']= [];
                    $page_data['paginationCtrls'] = '';
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
        	$page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'missingperson_data';
            $this->load->view('ngo/index', $page_data);  
        }else{
            redirect(base_url().'ngo/login','refresh');
        }
    }
    
    function unknown_person_filter()
    {
        if(isset($_GET['pn']))
        {
            if($_GET['pn'] == 2)
            {
                if($_GET['idNumber'] != '')
                {
                    if($_GET['idType'] == 'aadhar')
                    {
                        $this->db->where('aadharNumber',$_GET['idNumber']);
                    }
                    if($_GET['idType'] == 'dl')
                    {
                        $this->db->where('Dl_no',$_GET['idNumber']);
                    }
                    if($_GET['idType'] == 'pan')
                    {
                        $this->db->where('PAN',$_GET['idNumber']);
                    }
                    if($_GET['idType'] == 'voter')
                    {
                        $this->db->where('voter_id',$_GET['idNumber']);
                    }
                    if($_GET['idType'] == 'vehicle')
                    {
                        $this->db->where('vehicle_no',$_GET['idNumber']);
                    }
                }
                $this->db->where('isFound',0);
                $this->db->where('uploaded_by !=','user');
                $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFormDate'])));
                $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFormDate'])));
                $this->db->where('Gender',$_GET['genderForm']);
                if(($_GET['personFormName']) != '')
                {
                    $this->db->like('person_name',$_GET['personFormName'],'after');
                }
                if(($_GET['stateForm']) != '')
                {
                    $this->db->where('state',$_GET['stateForm']);
                }
                if(($_GET['districtForm']) != '')
                {
                    $this->db->where('district',$_GET['districtForm']);
                }
                if(($_GET['cityForm']) != '')
                {
                    $this->db->where('city',$_GET['cityForm']);
                }
                $page_data['data']=$this->db->get('unknown_person')->result_array();
                $finalId = array();
                if($_GET['idNumber'] != '')
                {
                    if($_GET['idType'] == 'gold')
                    {
                        if(count($page_data['data']) > 0)
                        {
                            foreach($page_data['data'] as $k=>$v)
                            {
                                $getGoldDetails = $this->db->query('select * from unknownPersonGold where unknownId='.$v['id'].' and goldHUID="'.$_GET['idNumber'].'"')->result_array();   
                                if(count($getGoldDetails) > 0)
                                {
                                    array_push($finalId,$v['id']);
                                }
                            }
                        }
                        if(count($finalId) > 0)
                        {
                            $this->db->where_in('id',$finalId);
                            $page_data['data']=$this->db->get('unknown_person')->result_array();
                        }else{
                            $page_data['data']= array();
                        }
                    }
                }
            }else{
                $page_data['data']= [];
                $page_data['paginationCtrls'] = '';
            }
        }else{
            $page_data['data']= [];
            $page_data['paginationCtrls'] = '';
        }
        $page_data['pn'] = 1;
        if(isset($_GET['pn']))
        {
            $page_data['pn'] = $_GET['pn'];    
        }
        $page_data['page_name'] = 'unknownperson_data';
        $this->load->view('ngo/index', $page_data);  
    }
    
    public function getdistrict()
    {
          if(isset($_GET['id']))
          {
               $snm=$_GET['id'];
               $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
              // echo "<pre>";
              // print_r( $district);
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
              // echo "<pre>";
              // print_r( $district);
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
    
    function deleteUnknownPhoto($id)
    {
        if($_GET['id'])
        {
            $getOldData = $this->db->query('select * from unknownphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from unknownphotos where Id='.$id);
            }   
        }else{
            $getOldData = $this->db->query('select * from unknownphotos where Id='.$id)->result_array();
            if(count($getOldData) > 0)
            {
                foreach($getOldData as $k=>$v)
                {
                    unlink($v['photourl']);
                }
                $deleteold = $this->db->query('delete from unknownphotos where Id='.$id);
            }
        }
    }
    
    function uploadUnknownPhoto()
    {
        if(isset($_POST['id']))
        {
            $filename = $_FILES["file"]["name"];
            $ext = end((explode(".", $filename)));
            $filename = 'upload/unknown/'.time().''.rand(0,10000).'.'.$ext;
            move_uploaded_file($_FILES['file']['tmp_name'], $filename);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'unknownId' => $_POST['id']
                );
                $this->db->insert('unknownphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('unknownphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);     
        }else{
            $filename = $_FILES["file"]["name"];
            $ext = end((explode(".", $filename)));
            $filename = 'upload/unknown/'.time().''.rand(0,10000).'.'.$ext;
            move_uploaded_file($_FILES['file']['tmp_name'], $filename);
            if($_POST['isUploaded'] == 0)
            {
                $insertdata = array(
                    'photourl' => $filename,
                    'unknownId' => $_SESSION['unknownId']
                );
                $this->db->insert('unknownphotos',$insertdata);
            }else{
                $updatetdata = array(
                    'photourl' => $filename,
                );
                $this->db->where('Id',$_POST['isUploaded']);
                $this->db->update('unknownphotos',$updatetdata);
            }
            $response = array(
                'status' => 'success',
                'message' => 'Photo Uploaded Successfully'
            );
            echo json_encode($response);  
        }
    }
    
    function sendDeleteUnknownPersonOtp()
    {
        $getDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        $this->sendTextLocalOtp((($getDetail[0]['person_name'] != '') ? $getDetail[0]['person_name'] : $_POST['mobile']),$_POST['mobile'],$otp);
        $update = $this->db->query('update unknown_person set otp='.$otp.' where id='.$_SESSION['unknownId']);
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
    
    function verifyUnknownPersonMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
        if($_POST['otp'] == $getPreviousDetail[0]['otp'])
        {
            if($_POST['index'] == 2)
            {
                $updatedata = array(
                    'well2' => $_POST['mobile'],
                    'isProfileContact2' => 0,
                );   
            }else if($_POST['index'] == 3)
            {
                $updatedata = array(
                    'well3' => $_POST['mobile'],
                    'isProfileContact3' => 0,
                );   
            }
            else{
                $updatedata = array(
                    'well1' => $_POST['mobile'],
                    'isProfileContact1' => 0,
                );
            }
            $this->db->where('id',$getPreviousDetail[0]['id']);
            $update = $this->db->update('unknown_person',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'New Contact Added Successfully'
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
    
    function sendUnknownPersonMobileOtp()
    {
        $getPreviousDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee1 = $this->db->query('select * from unknown_person where well1="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee2 = $this->db->query('select * from unknown_person where well2="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        $getIfAlreadyOtherInNominee3 = $this->db->query('select * from unknown_person where well3="'.$_POST['mobile'].'" and id='.$_SESSION['unknownId'])->result_array();
        if(count($getIfAlreadyOtherInNominee1) > 0 || count($getIfAlreadyOtherInNominee2) > 0 || count($getIfAlreadyOtherInNominee3) > 0)
        {
            $response = array(
                'status' => 'username',
                'message' => 'Mobile number already added'
            );
            echo json_encode($response);
        }else{
            // $otp = '1234';
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);
            $this->sendTextLocalOtp((($getDetail[0]['person_name'] != '') ? $getDetail[0]['person_name'] : $_POST['mobile']),$_POST['mobile'],$otp);
            $updatedata = array(
                'otp' => $otp
            );
            $this->db->where('id',$getPreviousDetail[0]['id']);
            $update = $this->db->update('unknown_person',$updatedata);
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
    
    function deleteUnknownPersonMobile()
    {
        $getDetail = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
        if($_POST['setting'] == 1)
        {
            if($getDetail[0]['otp'] == $_POST['otp'])
            {
                if($_POST['index'] == 2)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['unknownId']);   
                }else if($_POST['index'] == 3)
                {
                    $update = $this->db->query('update unknown_person set isProfileContact3=0, well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['unknownId']);   
                }
                else{
                    $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['unknownId']);   
                }
                if($update)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Mobile Number Deleted Successfully'
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
        }else{
            if($_POST['index'] == 2)
            {
                $update = $this->db->query('update unknown_person set isProfileContact2=0,well2=NULL,wellrel2=NULL,otherrelationname2=NULL where id='.$_SESSION['unknownId']);   
            }else if($_POST['index'] == 3)
            {
                $update = $this->db->query('update unknown_person set isProfileContact3=0,well3=NULL,wellrel3=NULL,otherrelationname3=NULL where id='.$_SESSION['unknownId']);   
            }
            else{
                $update = $this->db->query('update unknown_person set isProfileContact1=0,well1=NULL,wellrel1=NULL,otherrelationname1=NULL where id='.$_SESSION['unknownId']);   
            }
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Mobile Number Deleted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
            }
            echo json_encode($response);   
        }
    }
    
    function generateApplicationNumber()
    {
        $getMaxId = $this->db->query('select max(id) as Id from unknown_person')->result_array();
        $id = 1;
        if($getMaxId[0]['Id'] != NULL)
        {
            $id = $getMaxId[0]['Id'] + 1;
        }
        $Appli_no='UNWTIKH'.sprintf("%03d", $id);
        $getIfAlready = $this->db->query('select * from unknown_person where Application_no="'.$Appli_no.'"')->result_array();
        if(count($getIfAlready) == 0)
        {
            return $Appli_no;
        }else{
            return $this->generateApplicationNumber();
        }
    }
    
    public function with()
    {
        if(isset($_POST['id']))
        {
            if($_POST['facematch'] != '')
            {
                $mainphoto1 = '';
                $mainphoto2 = '';
                $imageId1 = '';
                $imageId2 = '';
                if($_POST['facematch1'] != '')
                {
                    $data = $_POST["facematch1"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId1 = time().''.rand(0,10000);
                    $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                    file_put_contents($mainphoto1, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownV4",
                        "image_id" => $imageId1,
                        "image_url" => base_url().''.$mainphoto1
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                if($_POST['facematch2'] != '')
                {
                    $data = $_POST["facematch2"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId2 = time().''.rand(0,10000);
                    $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                    file_put_contents($mainphoto2, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownV4",
                        "image_id" => $imageId2,
                        "image_url" => base_url().''.$mainphoto2
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);   
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                $data = $_POST["facematch"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId = time().''.rand(0,10000);
                $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
                file_put_contents($mainphoto, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownV4",
                    "image_id" => $imageId,
                    "image_url" => base_url().''.$mainphoto
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                curl_close($curl);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] == 1)
                        {
                            $getOldDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
                            $insertdata = array(
                                'imageId' => $imageId,
                                'imageId1' => ($imageId1 != '' ? $imageId1 : $getOldDetail[0]['imageId1']),
                                'imageId2' => ($imageId2 != '' ? $imageId2 : $getOldDetail[0]['imageId2']),
                                'awsEventName' => 'Unknown',
                                'person_name' => $_POST['person_name'],
                                'aadharNumber' => $_POST['aadharNumber'],
                                'PAN' => $_POST['PAN'],
                                'Photo' => $mainphoto,
                                'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : $getOldDetail[0]['Photo1']),
                                'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : $getOldDetail[0]['Photo2']),
                                'DL_no' => $_POST['DL_no'],
                                'voter_id' => $_POST['voter_id'],
                                'Religion' => $_POST['Religion'],
                                'vehicle_no' => $_POST['vehicle_no'],
                                'state' => $_POST['state'],
                                'district' => $_POST['district'],
                                'city' => $_POST['city'],
                                'Age' => $_POST['Age'],
                                'Height' => $_POST['Height'],
                                'Mental_status' => $_POST['Mental'],
                                'Message' => $_POST['Message'],
                                'vehicle_no' => $_POST['vehicle_no'],
                            );
                            $this->db->where('id',$_POST['id']);
                            $in=$this->db->update('unknown_person',$insertdata);
                            if($in)
                            {
                                if($_POST['goldCount']  > 0)
                                {
                                    for($i=1;$i<=$_POST['goldCount'];$i++)
                                    {
                                        if(isset($_POST['oldId'.$i]))
                                        {
                                            $goldData = array(
                                                'unknownId' => $_POST['id'],
                                                'goldType' => $_POST['goldType'.$i],
                                                'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                            );
                                            $this->db->where('Id',$_POST['oldId'.$i]);
                                            $this->db->update('unknownPersonGold',$goldData);
                                        }else{
                                            $goldData = array(
                                                'unknownId' => $_POST['id'],
                                                'goldType' => $_POST['goldType'.$i],
                                                'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                            );
                                            $this->db->insert('unknownPersonGold',$goldData);   
                                        }
                                    }
                                }
                                $this->session->set_flashdata('success', 'Record Updated Successfully');
                                return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                            }
                            else
                            {
                                $this->session->set_flashdata('error', 'No Update Try Again.');
                                return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                            }
                        }else{
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                            }
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Please upload valid face match image');
                        return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                    }   
                }else{
                    $this->session->set_flashdata('error', 'Please upload valid face match image');
                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                }
            }else{
                $mainphoto1 = '';
                $mainphoto2 = '';
                $imageId1 = '';
                $imageId2 = '';
                if($_POST['facematch1'] != '')
                {
                    $data = $_POST["facematch1"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId1 = time().''.rand(0,10000);
                    $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                    file_put_contents($mainphoto1, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownV4",
                        "image_id" => $imageId1,
                        "image_url" => base_url().''.$mainphoto1
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                if($_POST['facematch2'] != '')
                {
                    $data = $_POST["facematch2"];
                    $image_array_1 = explode(";", $data);
                    $split1 = explode('data:image/',$image_array_1[0]);
                    $image_array_2 = explode(",", $image_array_1[1]);
                    $data = base64_decode($image_array_2[1]);
                    $imageId2 = time().''.rand(0,10000);
                    $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                    file_put_contents($mainphoto2, $data);
                    $curl = curl_init();
                    $postdata = json_encode(array(
                        "collection_id" => "shivaguptabcaunknownV4",
                        "image_id" => $imageId2,
                        "image_url" => base_url().''.$mainphoto2
                    ));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Bearer '.$this->getSettings('facematchtoken')
                        ),
                    ));
                    
                    $response = json_decode(curl_exec($curl),true);   
                    if(count($response) > 0)
                    {
                        if($response['statusCode'] == 200)
                        {
                            if($response['face_count'] != 1)
                            {
                                if($response['face_count'] > 1)
                                {
                                    $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }else{
                                    $this->session->set_flashdata('error', 'No face found in the image');   
                                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                                }
                            }
                        }
                    }
                }
                $getOldDetail = $this->db->query('select * from unknown_person where id='.$_POST['id'])->result_array();
                $insertdata = array(
                    'imageId1' => ($imageId1 != '' ? $imageId1 : $getOldDetail[0]['imageId1']),
                    'imageId2' => ($imageId2 != '' ? $imageId2 : $getOldDetail[0]['imageId2']),
                    'aadharNumber' => $_POST['aadharNumber'],
                    'PAN' => $_POST['PAN'],
                    'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : $getOldDetail[0]['Photo1']),
                    'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : $getOldDetail[0]['Photo2']),
                    'DL_no' => $_POST['DL_no'],
                    'voter_id' => $_POST['voter_id'],
                    'Religion' => $_POST['Religion'],
                    'person_name' => $_POST['person_name'],
                    'vehicle_no' => $_POST['vehicle_no'],
                    'state' => $_POST['state'],
                    'district' => $_POST['district'],
                    'city' => $_POST['city'],
                    'Age' => $_POST['Age'],
                    'Height' => $_POST['Height'],
                    'Mental_status' => $_POST['Mental'],
                    'Message' => $_POST['Message'],
                    'vehicle_no' => $_POST['vehicle_no'],
                );
                $this->db->where('id',$_POST['id']);
                $in=$this->db->update('unknown_person',$insertdata);
                if($in)
                {
                    if($_POST['goldCount']  > 0)
                    {
                        for($i=1;$i<=$_POST['goldCount'];$i++)
                        {
                            if(isset($_POST['oldId'.$i]))
                            {
                                $goldData = array(
                                    'unknownId' => $_POST['id'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->where('Id',$_POST['oldId'.$i]);
                                $this->db->update('unknownPersonGold',$goldData);
                            }else{
                                $goldData = array(
                                    'unknownId' => $_POST['id'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->insert('unknownPersonGold',$goldData);   
                            }
                        }
                    }
                    $this->session->set_flashdata('success', 'Record Updated Successfully');
                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                    
        
                }
                else
                {
                    $this->session->set_flashdata('error', 'No Update Try Again.');
                    return redirect( base_url().'ngo/editUnknownDetails?id='.$_POST['applicationNo']);
                }
            }
        }else{
            $mainphoto1 = '';
            $mainphoto2 = '';
            $imageId1 = '';
            $imageId2 = '';
            if($_POST['facematch1'] != '')
            {
                $data = $_POST["facematch1"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId1 = time().''.rand(0,10000);
                $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
                file_put_contents($mainphoto1, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownV4",
                    "image_id" => $imageId1,
                    "image_url" => base_url().''.$mainphoto1
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] != 1)
                        {
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'ngo/upload_detail');
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'ngo/upload_detail');
                            }
                        }
                    }
                }
            }
            if($_POST['facematch2'] != '')
            {
                $data = $_POST["facematch2"];
                $image_array_1 = explode(";", $data);
                $split1 = explode('data:image/',$image_array_1[0]);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageId2 = time().''.rand(0,10000);
                $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
                file_put_contents($mainphoto2, $data);
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcaunknownV4",
                    "image_id" => $imageId2,
                    "image_url" => base_url().''.$mainphoto2
                ));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Bearer '.$this->getSettings('facematchtoken')
                    ),
                ));
                
                $response = json_decode(curl_exec($curl),true);   
                if(count($response) > 0)
                {
                    if($response['statusCode'] == 200)
                    {
                        if($response['face_count'] != 1)
                        {
                            if($response['face_count'] > 1)
                            {
                                $this->session->set_flashdata('error', 'Multiple faces detected in image');
                                return redirect( base_url().'ngo/upload_detail');
                            }else{
                                $this->session->set_flashdata('error', 'No face found in the image');   
                                return redirect( base_url().'ngo/upload_detail');
                            }
                        }
                    }
                }
            }
            $data = $_POST["facematch"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId = time().''.rand(0,10000);
            $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
            file_put_contents($mainphoto, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownV4",
                "image_id" => $imageId,
                "image_url" => base_url().''.$mainphoto
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);
            curl_close($curl);
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] == 1)
                    {
                        $Appli_no= $this->generateApplicationNumber();
                        $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                        $insertdata = array(
                            'well1' => $profileDetail[0]['registration_mobile'],
                            'dateCreated' => date('Y-m-d H:i:s A'),
                            'imageId' => $imageId,
                            'imageId1' => ($imageId1 != '' ? $imageId1 : NULL),
                            'imageId2' => ($imageId2 != '' ? $imageId2 : NULL),
                            'awsEventName' => 'Unknown',
                            'aadharNumber' => $_POST['aadharNumber'],
                            'PAN' => $_POST['PAN'],
                            'DL_no' => $_POST['DL_no'],
                            'voter_id' => $_POST['voter_id'],
                            'person_name' => $_POST['person_name'],
                            'Religion' => $_POST['Religion'],
                            'vehicle_no' => $_POST['vehicle_no'],
                            'state' => $_POST['state'],
                            'district' => $_POST['district'],
                            'city' => $_POST['city'],
                            'Age' => $_POST['Age'],
                            'ngoId' => $_SESSION['ngo_id'],
                            'uploaded_by'=>'ngo',
                            'Height' => $_POST['Height'],
                            'Mental_status' => $_POST['Mental'],
                            'Message' => $_POST['Message'],
                            'vehicle_no' => $_POST['vehicle_no'],
                            'Photo' => $mainphoto,
                            'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : NULL),
                            'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : NULL),
                            'Application_no' =>  $Appli_no,
                            'Gender' => $_POST['Gender']
                        );
                        $in=$this->db->insert('unknown_person',$insertdata);
                        if($in)
                        {
                            $_SESSION['unknownId'] = $this->db->insert_id();
                            if($_POST['goldCount']  > 0)
                            {
                                for($i=1;$i<=$_POST['goldCount'];$i++)
                                {
                                    $goldData = array(
                                        'unknownId' => $_SESSION['unknownId'],
                                        'goldType' => $_POST['goldType'.$i],
                                        'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                    );
                                    $this->db->insert('unknownPersonGold',$goldData);
                                }
                            }
                            $this->session->set_flashdata('success', 'Record Successfully Saved.  - '. $Appli_no);
                            return redirect( base_url().'ngo/upload_detail?pn=2');
                            
                
                        }
                        else
                        {
                            $this->session->set_flashdata('error', 'No Insert Try Again.');
                            return redirect( base_url().'ngo/upload_detail');
                        }
                    }else{
                        if($response['face_count'] > 1)
                        {
                            $this->session->set_flashdata('error', 'Multiple faces detected in image');
                            return redirect( base_url().'ngo/upload_detail');
                        }else{
                            $this->session->set_flashdata('error', 'No face found in the image');   
                            return redirect( base_url().'ngo/upload_detail');
                        }
                    }
                }else{
                    $this->session->set_flashdata('error', 'Please upload valid face match image');
                    return redirect( base_url().'ngo/upload_detail');
                }   
            }else{
                $this->session->set_flashdata('error', 'Please upload valid face match image');
                return redirect( base_url().'ngo/upload_detail');
            }   
        }
    }
    
    function step2($para = ''){
        if($para == '')
        {
            $page_data['title'] = 'Step2';
            $page_data['control'] = 'ngo';
            $this->load->view('ngo/common/header',$page_data); 
            $this->load->view('ngo/step2');
            $this->load->view('ngo/common/footer'); 
        }else{
            $getPreviousDetail = $this->db->query('select * from ngo where Id="'.$_SESSION['ngo_id'].'"')->result_array();
            $updatedata = array(
                'username' => (($_POST['username'] != '') ? $_POST['username'] : NULL),
                'email_id' => (($_POST['email'] != '') ? $_POST['email'] : NULL),
            );
            $this->db->where('Id',$getPreviousDetail[0]['Id']);
            $update = $this->db->update('ngo',$updatedata);
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
    
    function finalUnknownSubmit()
    {
        $mainphoto1 = '';
        $mainphoto2 = '';
        $imageId1 = '';
        $imageId2 = '';
        if($_POST['facematch1'] != '')
        {
            $data = $_POST["facematch1"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId1 = time().''.rand(0,10000);
            $mainphoto1 = 'upload/unknownperson/'.$imageId1.'.'.$split1[1];
            file_put_contents($mainphoto1, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownV4",
                "image_id" => $imageId1,
                "image_url" => base_url().''.$mainphoto1
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);
            
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] != 1)
                    {
                        if($response['face_count'] > 1)
                        {
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'Multiple faces detected in image'
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'No face found in the image'
                            );
                            echo json_encode($finalresponse);
                        }
                    }
                }
            }
        }
        if($_POST['facematch2'] != '')
        {
            $data = $_POST["facematch2"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId2 = time().''.rand(0,10000);
            $mainphoto2 = 'upload/unknownperson/'.$imageId2.'.'.$split1[1];
            file_put_contents($mainphoto2, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcaunknownV4",
                "image_id" => $imageId2,
                "image_url" => base_url().''.$mainphoto2
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);   
            if(count($response) > 0)
            {
                if($response['statusCode'] == 200)
                {
                    if($response['face_count'] != 1)
                    {
                        if($response['face_count'] > 1)
                        {
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'Multiple faces detected in image'
                            );
                            echo json_encode($finalresponse);
                        }else{
                            $finalresponse = array(
                                'status' => 'error',
                                'message' => 'No face found in the image'
                            );
                            echo json_encode($finalresponse);
                        }
                    }
                }
            }
        }
        $data = $_POST["facematch"];
        $image_array_1 = explode(";", $data);
        $split1 = explode('data:image/',$image_array_1[0]);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageId = time().''.rand(0,10000);
        $mainphoto = 'upload/unknownperson/'.$imageId.'.'.$split1[1];
        file_put_contents($mainphoto, $data);
        $curl = curl_init();
        $postdata = json_encode(array(
            "collection_id" => "shivaguptabcaunknownV4",
            "image_id" => $imageId,
            "image_url" => base_url().''.$mainphoto
        ));
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dev-faceindexer-ygh-4uub5jkuwq-el.a.run.app',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$this->getSettings('facematchtoken')
            ),
        ));
        
        $response = json_decode(curl_exec($curl),true);
        curl_close($curl);
        if(count($response) > 0)
        {
            if($response['statusCode'] == 200)
            {
                if($response['face_count'] == 1)
                {
                    $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                    $Appli_no= $this->generateApplicationNumber();
                    $insertdata = array(
                        'well1' => $profileDetail[0]['registration_mobile'],
                        'imageId' => $imageId,
                        'imageId1' => ($imageId1 != '' ? $imageId1 : NULL),
                        'imageId2' => ($imageId2 != '' ? $imageId2 : NULL),
                        'awsEventName' => 'Unknown',
                        'aadharNumber' => $_POST['aadharNumber'],
                        'dateCreated' => date('Y-m-d H:i:s A'),
                        'PAN' => $_POST['PAN'],
                        'DL_no' => $_POST['DL_no'],
                        'voter_id' => $_POST['voter_id'],
                        'person_name' => $_POST['person_name'],
                        'Religion' => $_POST['Religion'],
                        'vehicle_no' => $_POST['vehicle_no'],
                        'state' => $_POST['state'],
                        'district' => $_POST['district'],
                        'city' => $_POST['city'],
                        'Age' => $_POST['Age'],
                        'ngoId' => $_SESSION['ngo_id'],
                        'uploaded_by'=>'ngo',
                        'Height' => $_POST['Height'],
                        'Mental_status' => $_POST['Mental'],
                        'Message' => $_POST['Message'],
                        'vehicle_no' => $_POST['vehicle_no'],
                        'Photo' => $mainphoto,
                        'Photo1' => ($mainphoto1 != '' ? $mainphoto1 : NULL),
                        'Photo2' => ($mainphoto2 != '' ? $mainphoto2 : NULL),
                        'Application_no' =>  $Appli_no,
                        'Gender' => $_POST['Gender']
                    );
                    $in=$this->db->insert('unknown_person',$insertdata);
                    if($in)
                    {
                        $_SESSION['unknownId'] = $this->db->insert_id();
                        $getPreviousData = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
                        $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                        $updateData = array(
                            'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                            'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                        );   
                        $this->db->where('id',$_SESSION['unknownId']);
                        $this->db->update('unknown_person',$updateData);
                        if($getPreviousData[0]['well2'] == NULL)
                        {
                            $updateData = array(
                                'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                                'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                            );   
                            $this->db->where('id',$_SESSION['unknownId']);
                            $this->db->update('unknown_person',$updateData);
                        }
                        if($getPreviousData[0]['well3'] == NULL){
                            $updateData = array(
                                'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                                'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                            );   
                            $this->db->where('id',$_SESSION['unknownId']);
                            $this->db->update('unknown_person',$updateData);
                        }
                        if($_POST['goldCount']  > 0)
                        {
                            for($i=1;$i<=$_POST['goldCount'];$i++)
                            {
                                $goldData = array(
                                    'unknownId' => $_SESSION['unknownId'],
                                    'goldType' => $_POST['goldType'.$i],
                                    'goldHUID' => $_POST['goldHUIDNumber'.$i]
                                );
                                $this->db->insert('unknownPersonGold',$goldData);
                            }
                        }
                        $finalresponse = array(
                            'status' => 'success',
                            'applicationNumber' => $Appli_no
                        );
                        echo json_encode($finalresponse);
                    }
                    else
                    {
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'No Insert Try Again.'
                        );
                        echo json_encode($finalresponse);
                    }
                }else{
                    if($response['face_count'] > 1)
                    {
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'Multiple faces detected in image'
                        );
                        echo json_encode($finalresponse);
                    }else{
                        $finalresponse = array(
                            'status' => 'error',
                            'message' => 'No face found in the image'
                        );
                        echo json_encode($finalresponse);
                    }
                }
            }else{
                $finalresponse = array(
                    'status' => 'error',
                    'message' => 'Please upload valid face match image'
                );
                echo json_encode($finalresponse);
            }   
        }else{
            $finalresponse = array(
                'status' => 'error',
                'message' => 'Please upload valid face match image'
            );
            echo json_encode($finalresponse);
        }
    }
    
    function updateContact()
    {
        if(isset($_GET['id']))
        {
            $getPreviousData = $this->db->query('select * from unknown_person where id='.$_GET['id'])->result_array();
            $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
            if($getPreviousData[0]['well1'] == NULL)
            {
                $updateData = array(
                    'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                    'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well2'] == NULL)
            {
                $updateData = array(
                    'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                    'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well3'] == NULL){
                $updateData = array(
                    'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                    'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_GET['id']);
                $this->db->update('unknown_person',$updateData);
            }
        }else{
            $getPreviousData = $this->db->query('select * from unknown_person where id='.$_SESSION['unknownId'])->result_array();
            $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
            if($getPreviousData[0]['well1'] == NULL)
            {
                $updateData = array(
                    'well1' => ($profileDetail[0]['alternate_mobile1'] != NULL ? $profileDetail[0]['alternate_mobile1'] : NULL),
                    'isProfileContact1' =>($profileDetail[0]['alternate_mobile1'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well2'] == NULL)
            {
                $updateData = array(
                    'well2' => ($profileDetail[0]['alternate_mobile2'] != NULL ? $profileDetail[0]['alternate_mobile2'] : NULL),
                    'isProfileContact2' =>($profileDetail[0]['alternate_mobile2'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }
            if($getPreviousData[0]['well3'] == NULL){
                $updateData = array(
                    'well3' => ($profileDetail[0]['alternate_mobile3'] != NULL ? $profileDetail[0]['alternate_mobile3'] : NULL),
                    'isProfileContact3' =>($profileDetail[0]['alternate_mobile3'] != NULL ? 1 : 0)
                );   
                $this->db->where('id',$_SESSION['unknownId']);
                $this->db->update('unknown_person',$updateData);
            }   
        }
    }
    
    function getGoldType()
    {
        echo json_encode($this->db->query('select * from goldType')->result_array());
    }
    
    // search vehicle
        function search_vehicle_details($para = '')
    {
        if($para == '')
        {
           
                
            if($this->session->userdata('user_login') == 'yes'){
                $page_data['pn'] = 1;
                if(isset($_GET['pn']))
                {
                    $page_data['pn'] = $_GET['pn'];    
                }
                $page_data['page_name'] = 'search_vehicle_details';
                $page_data['title'] = 'Search Vehicle Details';
                $this->load->view('ngo/index', $page_data);
            } else {
                redirect('ngo/login','refresh');
            } 
        }else
        {
            if($para == 'step1')
            {
                $getPreviousDetail = $this->db->query('select * from searchVehicle where Id='.$_SESSION['checkVehicleId'])->result_array();
                if($getPreviousDetail[0]['otp'] == $_POST['otp'])
                {
                    $updatedata = array(
                        'personMob' => $_POST['mobileNumber'],
                        'otp' => NULL
                    );
                    $this->db->where('Id',$_SESSION['checkVehicleId']);
                    $update = $this->db->update('searchVehicle',$updatedata);
                    $response['status'] = 'success';
                }else{
                    $response['status'] = 'error';
                    $response['message'] = 'Invalid OTP';
                }
                echo json_encode($response);
            }
            if($para == 'step2')
            {
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
                $isGenderCorrect = 0;
                $isAadharCorrect = 0;
                $isDobCorrect = 0;
                $_POST['dob'] = $_POST['date'].'-'.$_POST['month'].'-'.$_POST['year'];
                $idNumber = '';
                if($_POST['idType'] == 'aadhar')
                {
                    $idNumber = $_POST['aadhar_id'];
                    if(strlen($_POST['aadhar_id']) != 12)
                    {
                        $response = array(
                            'status' => 'error',
                            'message' => 'Aadhar number must be 12 digit number'
                        );
                        echo json_encode($response);
                        return;
                    }
                    $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'" and gender="'.$_POST['gender'].'" and dob="'.date('Y-m-d',strtotime($_POST['dob'])).'"')->result_array();
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
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
                    $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['aadhar_id'].'" and isFound != 1')->result_array();
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
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
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
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
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
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
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['aadhar_id'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => $isDobCorrect,
                                'isGenderCorrect' => $isGenderCorrect,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
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
                    $idNumber = $_POST['dlNumber'];
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
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
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
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
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
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
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
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['dlNumber'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($insert)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible' => $isVisible,
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
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
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
                    $idNumber = $_POST['voterId'];
                    $getIfAlready = $this->db->query('select * from voterslist where voterNumber="'.$idNumber.'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        $getIfPersonAvailable = $this->db->query('select * from user where uid='.$getIfAlready[0]['userId'].' and gender="'.$_POST['gender'].'" and dob="'.date('Y-m-d',strtotime($_POST['dob'])).'"')->result_array();   
                    }else{
                        $getIfPersonAvailable = array();
                    }
                    $userphoto = '';
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isUserFound = 1;
                        $isVerified = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
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
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
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
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
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
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['voterId'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible'=> $isVisible,
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
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
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
                    $idNumber = $_POST['panNumber'];
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
                        $isVisible = $getIfPersonAvailable[0]['visibility'];
                        $isUserFound = 1;
                        $isVerified = 1;
                        $personName = $getIfPersonAvailable[0]['aadharname'];
                        $gender = $getIfPersonAvailable[0]['gender'];
                        $aadhar = $getIfPersonAvailable[0]['aadhar_id'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfPersonAvailable[0]['dob']);
                        $age = ($from->diff($to)->y).'- Years';
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
                    }else{
                        $getMissingPerson = array();
                    }
                    if(count($getMissingPerson) > 0)
                    {
                        $isAadharCorrect = 1;
                        if($getMissingPerson[0]['missinggender'] != NULL)
                        {
                            if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getMissingPerson[0]['missinggender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getMissingPerson[0]['missingdob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
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
                                }
                            }
                        }else{
                            $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                            if(count($getFullDetail) > 0)
                            {
                                if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                }
                                if(strtolower($getFullDetail[0]['gender']) == strtolower($_POST['gender']))
                                {
                                    $isGenderCorrect = 1;
                                    if($getFullDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
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
                                    }
                                }   
                            }else{
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                                if(count($getUserDetail) > 0)
                                {
                                    if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                    {
                                        $isDobCorrect = 1;
                                    }
                                    if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                                    {
                                        $isGenderCorrect = 1;
                                        if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                        {
                                            $isDobCorrect = 1;
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
                    }else{
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();   
                        }else{
                            $getUserDetail = array();
                        }
                        if(count($getUserDetail) > 0)
                        {
                            $isAadharCorrect = 1;
                            if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                            {
                                $isDobCorrect = 1;
                            }
                            if(strtolower($getUserDetail[0]['gender']) == strtolower($_POST['gender']))
                            {
                                $isGenderCorrect = 1;
                                if($getUserDetail[0]['dob'] == date('Y-m-d',strtotime($_POST['dob'])))
                                {
                                    $isDobCorrect = 1;
                                    $isMissing = 0; 
                                    $personName = $getUserDetail[0]['aadharname'];
                                    $gender = $getUserDetail[0]['gender'];
                                    $aadhar = $getUserDetail[0]['aadhar_id'];
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getUserDetail[0]['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                    $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                    if(count($getIfPersonAvailable) == 0)
                                    {
                                        $userphoto = base_url().''.(($getUserDetail[0]['facematchphoto'] != NULL) ? $getUserDetail[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                    }   
                                }
                            }
                        }
                    }
                    $insertdata = array(
                        'isPersonFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'gender' => $_POST['gender'],
                        'dob' => date('Y-m-d',strtotime($_POST['dob'])),
                        'idNumber' => $_POST['panNumber'],
                        'idType' => $_POST['idType'],
                    );
                    $this->db->where('Id',$_SESSION['checkId']);
                    $update = $this->db->update('checkperson',$insertdata);
                    if($update)
                    {
                        if($isGenderCorrect == 1 && $isDobCorrect == 1 && $isAadharCorrect == 1)
                        {
                            $response = array(
                                'status' => 'success',
                                'isVisible' => $isVisible,
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
                                'isVerified' => $isVerified,
                                'image' => $userphoto
                            );
                            echo json_encode($response);   
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
        }
    }
    
    function checkVehicleIdAfterLogin()
    {
        $personName = '';
        $vehicleNumber = '';
        $city = '';
        $state = '';
        $isVerified = 'No';
        $isVisible = 0;
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        if($_POST['searchType'] == 'vehicleNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where rcNumber="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where rcNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
                $personName = $getMissingVehicle[0]['ownerName'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'vehicleNumber' => $vehicleNumber,
                        'city' => $city,
                        'state' => $state,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
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
        if($_POST['searchType'] == 'engineNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where engine_number="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where engineNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $personName = $getMissingVehicle[0]['ownerName'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'city' => $city,
                        'state' => $state,
                        'vehicleNumber' => $vehicleNumber,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
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
        if($_POST['searchType'] == 'chassisNumber')
        {
            $idNumber = $_POST['idNumber'];
            $getIfVehicleAvailable = $this->db->query('select * from vehicles where chassis_number="'.$_POST['idNumber'].'" and isdeleted!=1 and paymentStatus=1')->result_array();
            $userphoto = '';
            if(count($getIfVehicleAvailable) > 0)
            {
                $vehicleNumber = $getIfVehicleAvailable[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getIfVehicleAvailable[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isVisible = $getIfVehicleAvailable[0]['visibility'];
                $isVerified = 1;
                $isUserFound = 1;
                $personName = $getUserDetail[0]['aadharname'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $getMissingVehicle = $this->db->query('select * from missingvehicle where chasisNumber="'.$_POST['idNumber'].'" and isFound !=1')->result_array();
            if(count($getMissingVehicle) > 0)
            {
                $vehicleNumber = $getMissingVehicle[0]['rcNumber'];
                $getUserDetail = $this->db->query('select * from user where uid='.$getMissingVehicle[0]['userId'])->result_array();
                $isAadharCorrect = 1;
                $isMissing = 1;
                $personName = $getMissingVehicle[0]['ownerName'];
                $city = $getUserDetail[0]['vtc'];
                $state = $getUserDetail[0]['state'];
            }
            $insertdata = array(
                'personMob' => $_SESSION['loginmob'],
                'isRegistered' => 1,
                'isMissing' => $isMissing,
                'isPersonFound' => $isUserFound,
                'visibility' => $isVisible,
                'idNumber' => $_POST['idNumber'],
                'vehicleType' => $_POST['vehicleType'],
                'searchType' => $_POST['searchType'],
            );
            $insert = $this->db->insert('searchVehicle',$insertdata);
            if($insert)
            {
                if($isAadharCorrect == 1)
                {
                    $response = array(
                        'status' => 'success',
                        'personName' => $personName,
                        'vehicleNumber' => $vehicleNumber,
                        'city' => $city,
                        'state' => $state,
                        'isAadharCorrect' => $isAadharCorrect,
                        'message' => 'Vehicle Found',
                        'isVisible' => $isVisible,
                        'isMissing' => $isMissing,
                        'isVerified' => $isVerified,
                        'isRegistered' => $isUserFound,
                    );
                    echo json_encode($response);   
                    $_SESSION['vehicleLoggedInId'] = $this->db->insert_id();
                }else{
                    $response = array(
                        'status' => 'incorrect',
                        'isAadharCorrect' => $isAadharCorrect,
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
    
    function criminalRecordAfterLogin()
    {
        if($this->session->userdata('ngo_login') == 'yes')
        {
            if(isset($_SESSION['searchId']))
            {
                $page_data['checkDetail'] = $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                if($page_data['checkDetail'][0]['criminalIds'] != NULL)
                {
                    $page_data['criminalDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['criminalIds'].')')->result_array();
                }else{
                    $page_data['criminalDetail'] = array();
                }
                if($page_data['checkDetail'][0]['wantedIds'] != NULL)
                {
                    $page_data['wantedDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['wantedIds'].')')->result_array();
                }else{
                    $page_data['wantedDetail'] = array();
                }
                $page_data['control'] = 'user';
                $page_data['title'] = 'Criminal Records';
                $page_data['page_name'] = 'criminalRecord';
                $this->load->view('ngo/index', $page_data);
            }else{
                redirect($this->getSettings('noVehicleId'),'refresh');
            }
        }else{
            redirect(base_url().'ngo/login','refresh');
        }
    }
    
    function wantedRecordAfterLogin()
    {
        if($this->session->userdata('ngo_login') == 'yes')
        {
            if(isset($_SESSION['searchId']))
            {
                $page_data['checkDetail'] = $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                if($page_data['checkDetail'][0]['criminalIds'] != NULL)
                {
                    $page_data['criminalDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['criminalIds'].')')->result_array();
                }else{
                    $page_data['criminalDetail'] = array();
                }
                if($page_data['checkDetail'][0]['wantedIds'] != NULL)
                {
                    $page_data['wantedDetail'] = $this->db->query('select * from criminals where Id In('.$page_data['checkDetail'][0]['wantedIds'].')')->result_array();
                }else{
                    $page_data['wantedDetail'] = array();
                }
                $page_data['control'] = 'user';
                $page_data['title'] = 'Wanted Records';
                $page_data['page_name'] = 'wantedRecord';
                $this->load->view('ngo/index', $page_data);
            }else{
                redirect($this->getSettings('noVehicleId'),'refresh');
            }
        }else{
            redirect(base_url().'ngo/login','refresh');
        }
    }
    
    function checkPersonIdAfterLogin()
    {
        $personName = '';
        $gender = '';
        $aadhar = '';
        $gender = '';
        $isVerified = 'No';
        $isVisible = 0;
        $age = '';
        $isWanted = 0;
        $personId = '';
        $isCriminal = 0;
        $isLapata = 0;
        $address = '';
        $lapataId = 0;
        $wantedId = array();
        $criminalId = array();
        $isUserFound = 0;
        $isMissing = 0;
        $isAadharCorrect = 0;
        $idNumber = '';
        if($_POST['idType'] == 'aadhar')
        {
            $idNumber = $_POST['IdNumber'];
            if(strlen($_POST['IdNumber']) != 12)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Aadhar number must be 12 digit number'
                );
                echo json_encode($response);
                return;
            }
            $getIfPersonAvailable = $this->db->query('select * from user where aadhar_id="'.$_POST['IdNumber'].'"')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$_POST['IdNumber'].'" and isFinalSubmitted=1 and type="wanted" and status="Active" order by dateCreated desc')->result_array();
            if(count($getIfWantedAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isWanted = 1;
                $isVisible = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }   
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$_POST['IdNumber'].'" and isFinalSubmitted=1 and type="criminal" and status="Active" order by dateCreated desc')->result_array();
            if(count($getIfCriminalAvailable) > 0)
            {
                $isAadharCorrect = 1;
                $isVisible = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$_POST['IdNumber'].'" and isFound !=1 order by dateCreated desc')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : 'assets/img/noimage.jpg');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$_POST['IdNumber'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and aadharNumber="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'" order by dateCreated desc')->result_array();
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($personId != '')
            {
                $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                $query_res = $query->result_array();
                
                if(count($query_res) > 0)
                {
                    foreach ($query_res as $query_res_data) {
                        $registrationIds[] =$query_res_data['token'];
                    }
                    
                    $url ="https://fcm.googleapis.com/fcm/send";
                    $fields=array(
                        "registration_ids"=>$registrationIds,
                        'data' => array("msg"=>"Khoji"),
                        'priority' => 'high',
                        "click_action"=>base_url(),
                        "notification"=>array(
                            "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                            "title"=>"Khoji",
                        )   
                    );
                    $headers=array(
                        'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                        'Content-Type:application/json'
                    );
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_POST,true);
                    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                    curl_exec($ch);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and aadharNumber="'.$_POST['IdNumber'].'" order by dateCreated desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Lapata',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
        if($_POST['idType'] == 'dl')
        {
            $idNumber = $_POST['IdNumber'];
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and DL_no="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($personId != '')
            {
                $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                $query_res = $query->result_array();
                
                if(count($query_res) > 0)
                {
                    foreach ($query_res as $query_res_data) {
                        $registrationIds[] =$query_res_data['token'];
                    }
                    
                    $url ="https://fcm.googleapis.com/fcm/send";
                    $fields=array(
                        "registration_ids"=>$registrationIds,
                        'data' => array("msg"=>"Khoji"),
                        'priority' => 'high',
                        "click_action"=>base_url(),
                        "notification"=>array(
                            "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                            "title"=>"Khoji",
                        )   
                    );
                    $headers=array(
                        'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                        'Content-Type:application/json'
                    );
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_POST,true);
                    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                    curl_exec($ch);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and DL_no="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isUserFound' => $isUserFound,
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['police_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Unknown',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
        if($_POST['idType'] == 'voter')
        {
            $idNumber = $_POST['IdNumber'];
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and voter_id="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($personId != '')
            {
                $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                $query_res = $query->result_array();
                
                if(count($query_res) > 0)
                {
                    foreach ($query_res as $query_res_data) {
                        $registrationIds[] =$query_res_data['token'];
                    }
                    
                    $url ="https://fcm.googleapis.com/fcm/send";
                    $fields=array(
                        "registration_ids"=>$registrationIds,
                        'data' => array("msg"=>"Khoji"),
                        'priority' => 'high',
                        "click_action"=>base_url(),
                        "notification"=>array(
                            "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                            "title"=>"Khoji",
                        )   
                    );
                    $headers=array(
                        'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                        'Content-Type:application/json'
                    );
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_POST,true);
                    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                    curl_exec($ch);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where awsEventName !="All" and isFound=0 and voter_id="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'isUserFound' => $isUserFound,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'isUserFound' => $isUserFound,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['ngo_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'status' => 'success',
                            'isOnlyUser' => $isOnlyUser,
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
        if($_POST['idType'] == 'pan')
        {
            $idNumber = $_POST['IdNumber'];
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfWantedAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="wanted" and status="Active"')->result_array();   
            }else{
                $getIfWantedAvailable = array();
            }
            if(count($getIfWantedAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isWanted = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfWantedAvailable[0]['personName'];
                    $gender = $getIfWantedAvailable[0]['gender'];
                    $aadhar = $getIfWantedAvailable[0]['aadharNumber'];
                    if($getIfWantedAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfWantedAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfWantedAvailable[0]['state'] != '')
                    {
                        $address .= $getIfWantedAvailable[0]['state'];
                    }
                    if($getIfWantedAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['district'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['district'];
                        }
                    }
                    if($getIfWantedAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfWantedAvailable[0]['city'];
                        }else{
                            $address .= $getIfWantedAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfWantedAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfWantedAvailable[0]['photo']);   
                    }
                }
                foreach($getIfWantedAvailable as $k=>$v)
                {
                    array_push($wantedId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getIfCriminalAvailable = $this->db->query('select * from criminals where aadharNumber="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFinalSubmitted=1 and type="criminal" and status="Active"')->result_array();   
            }else{
                $getIfCriminalAvailable = array();
            }
            if(count($getIfCriminalAvailable) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                $isCriminal = 1;
                if($isUserFound != 1)
                {
                    $personName = $getIfCriminalAvailable[0]['personName'];
                    $gender = $getIfCriminalAvailable[0]['gender'];
                    $aadhar = $getIfCriminalAvailable[0]['aadharNumber'];
                    if($getIfCriminalAvailable[0]['dob'] != '0000-00-00')
                    {
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getIfCriminalAvailable[0]['dob']);
                        $age = ($from->diff($to)->y);
                    }else{
                        $age = '';
                    }
                    $address = '';
                    if($getIfCriminalAvailable[0]['state'] != '')
                    {
                        $address .= $getIfCriminalAvailable[0]['state'];
                    }
                    if($getIfCriminalAvailable[0]['district'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['district'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['district'];
                        }
                    }
                    if($getIfCriminalAvailable[0]['city'] != '')
                    {
                        if($address != '')
                        {
                            $address .= ' , '.$getIfCriminalAvailable[0]['city'];
                        }else{
                            $address .= $getIfCriminalAvailable[0]['city'];
                        }
                    }
                    $getPhotos = $this->db->query('select * from criminalphotos where crimeId='.$getIfCriminalAvailable[0]['Id'])->result_array();
                    if($userphoto == '' || $userphoto == base_url())
                    {
                        $userphoto = ((count($getPhotos) > 0) ? base_url().''.$getPhotos[0]['photourl'] : base_url().''.$getIfCriminalAvailable[0]['photo']);   
                    }
                }
                foreach($getIfCriminalAvailable as $k=>$v)
                {
                    array_push($criminalId,$v['Id']);
                }
            }
            if(count($getIfPersonAvailable) > 0)
            {
                $getMissingPerson = $this->db->query('select * from missingperson where missingaadhar="'.$getIfPersonAvailable[0]['aadhar_id'].'" and isFound != 1')->result_array();   
            }else{
                $getMissingPerson = array();
            }
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isAadharCorrect = 1;
                if($getMissingPerson[0]['missinggender'] != NULL)
                {
                    $isMissing = 1;
                    if($isUserFound != 1)
                    {
                        $personName = $getMissingPerson[0]['missingname'];
                        $gender = $getMissingPerson[0]['missinggender'];
                        $aadhar = $getMissingPerson[0]['missingaadhar'];
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingPerson[0]['missingdob']);
                        $age = ($from->diff($to)->y);
                        if(count($getIfPersonAvailable) > 0)
                        {
                            $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                        }else{
                            $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                        }
                        if(count($getIfPersonAvailable) == 0)
                        {
                            if($userphoto == '' || $userphoto == base_url())
                            {
                                $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                            }
                        }
                    }
                }else{
                    $getFullDetail = $this->db->query('select * from missingpersondetail where missingId='.$getMissingPerson[0]['Id'])->result_array();
                    if(count($getFullDetail) > 0)
                    {
                        $isMissing = 1; 
                        if($isUserFound != 1)
                        {
                            $personName = $getMissingPerson[0]['missingname'];
                            $gender = $getMissingPerson[0]['missinggender'];
                            $aadhar = $getMissingPerson[0]['missingaadhar'];
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPerson[0]['missingdob']);
                            $age = ($from->diff($to)->y);
                            if(count($getIfPersonAvailable) > 0)
                            {
                                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                            }else{
                                $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                            }
                            if(count($getIfPersonAvailable) == 0)
                            {
                                if($userphoto == '' || $userphoto == base_url())
                                {
                                    $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                }
                            }
                        }
                    }else{
                        $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getIfPersonAvailable[0]['aadhar_id'].'"')->result_array();
                        if(count($getUserDetail) > 0)
                        {
                            $isMissing = 1; 
                            if($isUserFound != 1)
                            {
                                $personName = $getUserDetail[0]['aadharname'];
                                $gender = $getUserDetail[0]['gender'];
                                $aadhar = $getUserDetail[0]['aadhar_id'];
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                                $age = ($from->diff($to)->y);
                                $address = $getUserDetail[0]['vtc'].','.$getUserDetail[0]['state'];
                                if(count($getIfPersonAvailable) == 0)
                                {
                                    if($userphoto == '' || $userphoto == base_url())
                                    {
                                        $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and PAN="'.$_POST['IdNumber'].'" and expiryDate >= "'.date('Y-m-d h:i:s').'"')->result_array();
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($personId != '')
            {
                $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                $query_res = $query->result_array();
                
                if(count($query_res) > 0)
                {
                    foreach ($query_res as $query_res_data) {
                        $registrationIds[] =$query_res_data['token'];
                    }
                    
                    $url ="https://fcm.googleapis.com/fcm/send";
                    $fields=array(
                        "registration_ids"=>$registrationIds,
                        'data' => array("msg"=>"Khoji"),
                        'priority' => 'high',
                        "click_action"=>base_url(),
                        "notification"=>array(
                            "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                            "title"=>"Khoji",
                        )   
                    );
                    $headers=array(
                        'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                        'Content-Type:application/json'
                    );
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_POST,true);
                    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                    curl_exec($ch);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where awsEventName !="All" and isFound=0 and PAN="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isUserFound' => $isUserFound,
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['ngo_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
        if($_POST['idType'] == 'gold')
        {
            $idNumber = $_POST['IdNumber'];
            if(strlen($_POST['IdNumber']) != 6)
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Gold HUID number must be of 6 characters'
                );
                echo json_encode($response);
                return;
            }
            $personCount = 1;
            $this->db->where('goldHUIDNumber1', $_POST['IdNumber']);
            $this->db->or_where('goldHUIDNumber2', $_POST['IdNumber']);
            $this->db->or_where('goldHUIDNumber3', $_POST['IdNumber']);
            $getIfPersonAvailable = $this->db->get('user')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                foreach($getIfPersonAvailable as $k=>$v)
                {
                    $personCount++;
                }
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where goldId="'.$_POST['IdNumber'].'" and isFound !=1 and isFinalSubmitted = 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isMissing = 1;
                if($isUserFound != 1)
                {
                    $personName = $getMissingPerson[0]['missingname'];
                    if($gender == '')
                    {
                        $gender = $getMissingPerson[0]['missinggender'];
                    }
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    if($age == '')
                    {
                        $age = ($from->diff($to)->y);
                    }
                    $missingId = $getMissingPerson[0]['Id'];
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        if($userphoto == '' || $userphoto == base_url())
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                        }
                    }
                }
            }
            $this->db->like('goldHUID',$_POST['IdNumber'],'both');
            $getIfAlready = $this->db->get('unknownPersonGold')->result_array();
            if(count($getIfAlready) > 0)
            {   
                $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by="user" and isFound=0 and id='.$getIfAlready[(count($getIfAlready) - 1)]['unknownId'].' and expiryDate >= "'.date('Y-m-d h:i:s').'" order by dateCreated desc')->result_array();
            }else{
                $getIfLapataAvailable = array();
            }
            if(count($getIfLapataAvailable) > 0)
            {
                $personCount = 1;
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownGold = $this->db->query('select * from unknownPersonGold where goldHUID ="'.$_POST['IdNumber'].'" order by Id desc')->result_array();
                if(count($getIfUnknownGold) > 0)
                {
                    $id = array();
                    foreach($getIfUnknownGold as $k=>$v)
                    {
                        $getIfUnknownAvailable = $this->db->query('select * from unknown_person where uploaded_by !="user" and isFound=0 and id='.$v['unknownId'].' order by id desc')->result_array();      
                        if(count($getIfUnknownAvailable) > 0)
                        {
                            array_push($id,$getIfUnknownAvailable[0]['id']);
                            break;
                        }
                    }
                    if(count($id) > 0)
                    {
                        $getIfUnknownAvailable = $this->db->query('select * from unknown_person where id='.$id[0])->result_array();      
                    }else{
                        $getIfUnknownAvailable = array();    
                    }
                }else{
                    $getIfUnknownAvailable = array();
                }
                if($personId != '')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'isUserFound' => $isUserFound,
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personCount' => $personCount,
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['ngo_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
        if($_POST['idType'] == 'vehicle')
        {
            $idNumber = $_POST['IdNumber'];
            $personCount = 1;
            $this->db->where('vehicleNumber1', $_POST['IdNumber']);
            $this->db->or_where('vehicleNumber2', $_POST['IdNumber']);
            $this->db->or_where('vehicleNumber3', $_POST['IdNumber']);
            $getIfPersonAvailable = $this->db->get('user')->result_array();
            $userphoto = '';
            if(count($getIfPersonAvailable) > 0)
            {
                foreach($getIfPersonAvailable as $k=>$v)
                {
                    $personCount++;
                }
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
                $age = ($from->diff($to)->y);
                $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                $userphoto = base_url().''.(($getIfPersonAvailable[0]['aadharphoto'] != NULL) ? $getIfPersonAvailable[0]['aadharphoto'] : $getIfPersonAvailable[0]['facematchphoto']);
            }
            $getMissingPerson = $this->db->query('select * from missingperson where vehicleNumber like "%'.$_POST['IdNumber'].'%" and isFound !=1 and isFinalSubmitted = 1')->result_array();
            if(count($getMissingPerson) > 0)
            {
                $isVisible = 1;
                $isMissing = 1;
                $missingId = $getMissingPerson[0]['Id'];
                if($isUserFound != 1)
                {
                    $personName = $getMissingPerson[0]['missingname'];
                    if($gender == '')
                    {
                        $gender = $getMissingPerson[0]['missinggender'];
                    }
                    $aadhar = $getMissingPerson[0]['missingaadhar'];
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPerson[0]['missingdob']);
                    if($age == '')
                    {
                        $age = ($from->diff($to)->y);
                    }
                    if(count($getIfPersonAvailable) > 0)
                    {
                        $address = $getIfPersonAvailable[0]['vtc'].','.$getIfPersonAvailable[0]['state'];
                    }else{
                        $address = $getMissingPerson[0]['fathercity'].','.$getMissingPerson[0]['fatherstate'];
                    }
                    if(count($getIfPersonAvailable) == 0)
                    {
                        if($userphoto == '' || $userphoto == base_url())
                        {
                            $userphoto = base_url().''.(($getMissingPerson[0]['facematchphoto'] != NULL) ? $getMissingPerson[0]['facematchphoto'] : '');
                        }
                    }
                }
            }
            $getIfLapataAvailable = $this->db->query('select * from unknown_person where uploaded_by = "user" and isFound=0 and vehicle_no like "%'.$_POST['IdNumber'].'%" and expiryDate >= "'.date('Y-m-d h:i:s').'" order by id desc')->result_array();   
            if(count($getIfLapataAvailable) > 0)
            {
                $personCount = 1;
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
                    $age = ($getIfLapataAvailable[0]['Age']);
                    $address = $getIfLapataAvailable[0]['city'].','.$getIfLapataAvailable[0]['state'];
                    $userphoto = base_url().''.(($getIfLapataAvailable[0]['Photo'] != NULL) ? $getIfLapataAvailable[0]['Photo'] : $userphoto);
                }
            }
            if($personId != '')
            {
                $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$personId);
                $query_res = $query->result_array();
                
                if(count($query_res) > 0)
                {
                    foreach ($query_res as $query_res_data) {
                        $registrationIds[] =$query_res_data['token'];
                    }
                    
                    $url ="https://fcm.googleapis.com/fcm/send";
                    $fields=array(
                        "registration_ids"=>$registrationIds,
                        'data' => array("msg"=>"Khoji"),
                        'priority' => 'high',
                        "click_action"=>base_url(),
                        "notification"=>array(
                            "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                            "title"=>"Khoji",
                        )   
                    );
                    $headers=array(
                        'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                        'Content-Type:application/json'
                    );
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_POST,true);
                    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                    curl_exec($ch);
                }
            }
            if($isLapata != 1)
            {
                $getIfUnknownAvailable = $this->db->query('select * from unknown_person where awsEventName !="All" and isFound=0 and vehicle_no="'.$_POST['IdNumber'].'" order by id desc')->result_array();
                if(count($getIfUnknownAvailable) > 0)
                {
                    $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$getIfUnknownAvailable[0]['id'])->result_array();
                    $notifyData = array(
                        'isLogin' => 1,
                        'ngoId' => $_SESSION['ngo_id'],
                        'dateCreated' => date('Y-m-d H:i:s'),
                        'mobileNumber' => $_SESSION['loginmob'],
                        'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                        'searchType' => 'Unknown',
                        'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                        'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                    );
                    $insert = $this->db->insert('searchnotification',$notifyData);
                    if($getApplicationNumber[0]['uploaded_by'] == 'user')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                    {
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }else{
                        $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                        $query_res = $query->result_array();
                        
                        if(count($query_res) > 0)
                        {
                            foreach ($query_res as $query_res_data) {
                                $registrationIds[] =$query_res_data['token'];
                            }
                            
                            $url ="https://fcm.googleapis.com/fcm/send";
                            $fields=array(
                                "registration_ids"=>$registrationIds,
                                'data' => array("msg"=>"Khoji"),
                                'priority' => 'high',
                                "click_action"=>base_url(),
                                "notification"=>array(
                                    "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                    "title"=>"Khoji",
                                )   
                            );
                            $headers=array(
                                'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                                'Content-Type:application/json'
                            );
                            $ch=curl_init();
                            curl_setopt($ch,CURLOPT_URL,$url);
                            curl_setopt($ch,CURLOPT_POST,true);
                            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                            curl_exec($ch);
                        }
                    }
                    if($isUserFound != 1)
                    {
                        if($getIfUnknownAvailable[0]['uploaded_by'] == 'police')
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$getIfUnknownAvailable[0]['policeId'])->result_array();
                            $finalresponse = array(
                                'isUserFound' => $isUserFound,
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'police',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getPoliceDetail[0]['thanaName'].' - '.$getPoliceDetail[0]['state'].', '.$getPoliceDetail[0]['district']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'id' => $getIfUnknownAvailable[0]['Application_no'],
                                'registration_mobile' => (($getPoliceDetail[0]['registration_mobile'] != NULL) ? $getPoliceDetail[0]['registration_mobile'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                            );   
                        }else{
                            $getNgoDetail = $this->db->query('select * from ngo where Id='.$getIfUnknownAvailable[0]['ngoId'])->result_array();
                            $finalresponse = array(
                                'status' => 'unknown',
                                'isLapata' => $isLapata,
                                'personName' => strtoupper($getIfUnknownAvailable[0]['person_name']),
                                'isUserFound' => $isUserFound,
                                'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                                'type' => 'ngo',
                                'date' => date('d-m-Y h:i A',strtotime($getIfUnknownAvailable[0]['dateCreated'])),
                                'address' => strtoupper($getNgoDetail[0]['ngoName'].' - '.$getNgoDetail[0]['ngoState'].', '.$getNgoDetail[0]['ngoDistrict'].', '.$getNgoDetail[0]['ngoCity']),
                                'photo' => base_url().''.$getIfUnknownAvailable[0]['Photo'],
                                'age' => $getIfUnknownAvailable[0]['Age'],
                                'gender' => ($getIfUnknownAvailable[0]['Gender'] == 'boy' ? 'Male' : 'Female'),
                                'registration_mobile' => (($getNgoDetail[0]['ngoRegistrationNumber'] != NULL) ? $getNgoDetail[0]['ngoRegistrationNumber'] : ''),
                                'mobile1' => (($getIfUnknownAvailable[0]['well1'] != NULL) ? $getIfUnknownAvailable[0]['well1'] : ''),
                                'mobile2' => (($getIfUnknownAvailable[0]['well2'] != NULL) ? $getIfUnknownAvailable[0]['well2'] : ''),
                                'mobile3' => (($getIfUnknownAvailable[0]['well3'] != NULL) ? $getIfUnknownAvailable[0]['well3'] : ''),
                                'id' => $getIfUnknownAvailable[0]['Application_no']
                            );   
                        }
                    }else{
                        $finalresponse = array(
                            'isUserFound' => $isUserFound,
                            'status' => 'unknown',
                            'isLapata' => $isLapata,
                            'personName' => strtoupper($personName),
                            'aadharNumber' => substr_replace((($getIfUnknownAvailable[0]['aadharNumber'] != '') ? $getIfUnknownAvailable[0]['aadharNumber'] : $aadhar),'xxxxxxxx',0,8),
                            'address' => strtoupper($address),
                            'photo' => ($userphoto != '' ? $userphoto : base_url().$getIfUnknownAvailable[0]['Photo']),
                            'age' => $age,
                            'gender' => strtolower($gender),
                            'id' => $getIfUnknownAvailable[0]['Application_no']
                        );
                    }
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    $_SESSION['searchId'] = $this->db->insert_id();
                    echo json_encode($finalresponse);
                }else{
                    $insertdata = array(
                        'lapataId' => $lapataId,
                        'isLapata' => $isLapata,
                        'wantedIds' => implode(',',$wantedId),
                        'criminalIds' => implode(',',$criminalId),
                        'Idtype' => $_POST['idType'],
                        'IdNumber' => $idNumber,
                        'userId' => $_SESSION['ngo_id'],
                        'isFound' => $isUserFound,
                        'isMissing' => $isMissing,
                        'missingId' => implode(',',$missingId),
                        'personId' => $personId
                    );
                    $insert = $this->db->insert('searchpersonhistory',$insertdata);
                    if($insert)
                    {
                        if($isAadharCorrect == 1)
                        {
                            $_SESSION['searchId'] = $this->db->insert_id();
                            $isOnlyUser = 0;
                            if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                            {
                                $isOnlyUser = 1;
                            }
                            $response = array(
                                'personCount' => $personCount,
                                'personId' => $personId,
                                'isOnlyUser' => $isOnlyUser,
                                'status' => 'success',
                                'personName' => $personName,
                                'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                                'gender' => strtolower($gender),
                                'isWanted' => $isWanted,
                                'isLapata' => $isLapata,
                                'isCriminal' => $isCriminal,
                                'age' => $age,
                                'address' => $address,
                                'isAadharCorrect' => $isAadharCorrect,
                                'isDobCorrect' => 1,
                                'isGenderCorrect' => 1,
                                'message' => 'Person Found',
                                'isVisible' => $isVisible,
                                'isMissing' => $isMissing,
                                'isVerified' => $isVerified,
                                'isRegistered' => $isUserFound,
                                'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                            );
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
                }   
            }else{
                $getApplicationNumber = $this->db->query('select * from unknown_person where id='.$lapataId)->result_array();
                $notifyData = array(
                    'isLogin' => 1,
                    'ngoId' => $_SESSION['ngo_id'],
                    'dateCreated' => date('Y-m-d H:i:s'),
                    'mobileNumber' => $_SESSION['loginmob'],
                    'searchedAppNumber' => $getApplicationNumber[0]['Application_no'],
                    'searchType' => 'Lapata',
                    'complainantUserType' => $getApplicationNumber[0]['uploaded_by'],
                    'complainantUserId' => ($getApplicationNumber[0]['uploaded_by'] == 'police' ? $getApplicationNumber[0]['policeId'] : ($getApplicationNumber[0]['uploaded_by'] == 'ngo' ? $getApplicationNumber[0]['ngoId'] : $getApplicationNumber[0]['userId']))
                );
                $insert = $this->db->insert('searchnotification',$notifyData);
                if($getApplicationNumber[0]['uploaded_by'] == 'user')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='user' and userId=".$getApplicationNumber[0]['userId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else if($getApplicationNumber[0]['uploaded_by'] == 'police')
                {
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='police' and userId=".$getApplicationNumber[0]['policeId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }else{
                    $query = $this->db->query("SELECT distinct token FROM `notification_tokens_tbl` where delete_status='N' and userType='ngo' and userId=".$getApplicationNumber[0]['ngoId']);
                    $query_res = $query->result_array();
                    
                    if(count($query_res) > 0)
                    {
                        foreach ($query_res as $query_res_data) {
                            $registrationIds[] =$query_res_data['token'];
                        }
                        
                        $url ="https://fcm.googleapis.com/fcm/send";
                        $fields=array(
                            "registration_ids"=>$registrationIds,
                            'data' => array("msg"=>"Khoji"),
                            'priority' => 'high',
                            "click_action"=>base_url(),
                            "notification"=>array(
                                "body"=>"MATCH FOUND ALERT !!- PLEASE CHECK YOUR NOTIFICATION - NGO -".$_SESSION['ngoName'].' has searched. Click here to check your notification.',
                                "title"=>"Khoji",
                            )   
                        );
                        $headers=array(
                            'Authorization: key=AAAAFB7cLw8:APA91bF4SJtLIBANjcdsYua_rJK0Zb4L4yTCC4POg1mOHYE-sY3g4ueG3nd-f3eS1U-YLtWzfML4tv8PPB8mLNMb9sc7udH9NAxpepkpGfUf21-HpMTmnzsjpWLNfXmaKc-HMcHKCaqp',
                            'Content-Type:application/json'
                        );
                        $ch=curl_init();
                        curl_setopt($ch,CURLOPT_URL,$url);
                        curl_setopt($ch,CURLOPT_POST,true);
                        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
                        curl_exec($ch);
                    }
                }
                $insertdata = array(
                    'lapataId' => $lapataId,
                    'isLapata' => $isLapata,
                    'wantedIds' => implode(',',$wantedId),
                    'criminalIds' => implode(',',$criminalId),
                    'Idtype' => $_POST['idType'],
                    'IdNumber' => $idNumber,
                    'userId' => $_SESSION['ngo_id'],
                    'isFound' => $isUserFound,
                    'isMissing' => $isMissing,
                    'missingId' => implode(',',$missingId),
                    'personId' => $personId
                );
                $insert = $this->db->insert('searchpersonhistory',$insertdata);
                if($insert)
                {
                    if($isAadharCorrect == 1)
                    {
                        $_SESSION['searchId'] = $this->db->insert_id();
                        $isOnlyUser = 0;
                        if(!$isWanted && !$isLapata && !$isCriminal && !$isMissing)
                        {
                            $isOnlyUser = 1;
                        }
                        $response = array(
                            'personId' => $personId,
                            'isOnlyUser' => $isOnlyUser,
                            'status' => 'success',
                            'personName' => $personName,
                            'aadhar' => substr_replace($aadhar,'xxxxxxxx',0,8),
                            'gender' => strtolower($gender),
                            'isWanted' => $isWanted,
                            'isLapata' => $isLapata,
                            'isCriminal' => $isCriminal,
                            'age' => $age,
                            'address' => $address,
                            'isAadharCorrect' => $isAadharCorrect,
                            'isDobCorrect' => 1,
                            'isGenderCorrect' => 1,
                            'message' => 'Person Found',
                            'isVisible' => $isVisible,
                            'isMissing' => $isMissing,
                            'isVerified' => $isVerified,
                            'isRegistered' => $isUserFound,
                            'image' => ($userphoto != '' ? $userphoto : base_url().'assets/img/noimage.jpg')
                        );
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
            }
        }
    }
    
     function search_person_details()
    {
      
        if($this->session->userdata('ngo_login') == 'yes'){
            $page_data['pn'] = 1;
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'search_person_details';
            $this->load->view('ngo/index', $page_data);
        }else 
        {
            redirect('ngo/login','refresh');
        }
    }

    
}