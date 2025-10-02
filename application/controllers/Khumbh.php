<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khumbh extends CI_Controller 
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Kolkata');
       parent:: __construct();
       error_reporting(0);
       
    }
    function generateApplicationNumber()
    {
        $getMaxId = $this->db->query('select max(id) as Id from unknown_person')->result_array();
        $id = 1;
        if($getMaxId[0]['Id'] != NULL)
        {
            $id = $getMaxId[0]['Id'] + 1;
        }
        $Appli_no='LPTIKH'.sprintf("%03d", $id);
        $getIfAlready = $this->db->query('select * from unknown_person where Application_no="'.$Appli_no.'"')->result_array();
        if(count($getIfAlready) == 0)
        {
            return $Appli_no;
        }else{
            return $this->generateApplicationNumber();
        }
    }

    function getMahakumbhCount()
    {
        echo count($this->db->query('select * from mahakumbhMember where viewStatus="new"')->result_array());
    }

    function getSettings($name='gridlineKey')
    {
        $getSettings = $this->db->query('select * from settings where name="'.$name.'"')->result_array();
        return $getSettings[0]['value'];
    }

    public function khumbh_entry()
    {
        if(count($_POST) > 0 && isset($_SESSION['landingMob']))
        {
            $well1 = $_SESSION['landingMob'];
            $data = $_POST["facematch1"];
            $image_array_1 = explode(";", $data);
            $split1 = explode('data:image/',$image_array_1[0]);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageId1 = 'LAP_'.time().''.rand(0,10000);
            $mainphoto1 = 'upload/lapataperson/nonkyc/'.$imageId1.'.'.$split1[1];
            file_put_contents($mainphoto1, $data);
            $curl = curl_init();
            $postdata = json_encode(array(
                "collection_id" => "shivaguptabcakhoji4",
                "image_id" => $imageId1,
                "image_url" => base_url().''.$mainphoto1
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://q2cxobpyo27e2k6c3nyxjioive0jnfnk.lambda-url.eu-central-1.on.aws/',
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
                    'Authorization: '.$this->getSettings('facematchtoken')
                ),
            ));
            
            $response = json_decode(curl_exec($curl),true);
            if(count($response) > 0)
            {
                if($response['status'] == 200)
                {
                    if($response['face_count'] != 1)
                    {
                        if($response['face_count'] > 1)
                        {
                            $response = array(
                                'status' => 'error',
                                'message' => 'Multiple faces detected in image'
                            );
                            echo json_encode($response);
                            die();
                        }else{
                            $response = array(
                                'status' => 'error',
                                'message' => 'No face found in the image'
                            );
                            echo json_encode($response);
                            die();
                        }
                    }
                    $insertdata = array(
                        'dob' => $_POST['dob']??null,
                        'well1' => $well1??null,
                        'well2' => NULL,
                        'well3' => NULL,
                        'imageId' => $imageId1??null,
                        'imageId1' => NULL,
                        'imageId2' => NULL,
                        'awsEventName' => 'All',
                        'aadharNumber' => NULL,
                        'PAN' => $_POST['PAN']??NULL,
                        'DL_no' => $_POST['DL_no']??NULL,
                        'voter_id' => $_POST['voter_id']??NULL,
                        'person_name' => $_POST['person_name']??NULL,
                        'Religion' => $_POST['Religion']??NULL,
                        'vehicle_no' => $_POST['vehicle_no']??NULL,
                        'state' => $_POST['state']??NULL,
                        'missingDate' => $_POST['dateCreated']??NULL,
                        'district' => $_POST['district']??NULL,
                        'city' => $_POST['city']??NULL,
                        'Age' => $_POST['age'],
                        'userId' => $_SESSION['user_id']??NULL,
                        'isKyc' => 0,
                        'dateCreated' => date('Y-m-d H:i:s A'),
                        'uploaded_by'=>'user',
                        'Height' => $_POST['Height']??NULL,
                        'Mental_status' => $_POST['Mental']??NULL,
                        'Message' => $_POST['Message']??NULL,
                        'vehicle_no' => $_POST['vehicle_no']??NULL,
                        'Photo' => $mainphoto1,
                        'Photo1' => NULL,
                        'isFinalSubmitted' => 1,
                        'Photo2' => NULL,
                        'Application_no' =>  $this->generateApplicationNumber(),
                        'expiryDate' => date('Y-m-d'),
                        'Gender' => 'Boy',
                        'isFree' => $isFree??NULL
                    );
                    $in=$this->db->insert('unknown_person',$insertdata);
                    if($in)
                    {
                        $_SESSION['unknownId'] = $unkwownId = $this->db->insert_id();
                        if($isFree)
                        {
                            $this->db->query('update nonKycUser set freeCreditUsed=1 where uid='.$_SESSION['user_id']);
                        }
                        $vectorizerData = array(
                            'unknownId' => $unkwownId,
                            'imageStatus' => 'Pending',
                            'uploadTime' => $insertdata['dateCreated'],
                            'isUpload' => 1
                        );
                        $this->db->insert('indexer',$vectorizerData);
                        // $this->session->set_flashdata('success', 'Kumbh Record Successfully Saved.  - '. $Appli_no);
                        $st='success';$mess='Kumbh Record Successfully Saved';
                        //return redirect( base_url().'NonKyc/lapata_login');
                    }
                    else
                    {
                        
                        $st='success';$mess='Kumbh Record Successfully Saved';
                    }
                    $this->db->query('update mahakumbhMember set viewStatus="old"');
                    $response = array(
                        'status' => $st,
                        'message' => $mess,                
                    );
                    echo json_encode($response);
                    die();
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Please upload valid face match image'
                    );
                    echo json_encode($response);
                    die();    
                }
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Please upload valid face match image'
                );
                echo json_encode($response);
                die();
            }
        }
        if(isset($_SESSION['landingMob']))
        {
            $page_data['pn'] = 1;
            unset($_SESSION['previous_url']);
            if(isset($_GET['pn']))
            {
                $page_data['pn'] = $_GET['pn'];    
            }
            $page_data['page_name'] = 'khumbh_entry';
           
            $this->load->view('nonkyc/index', $page_data);
            //die();
        }
        else
        {
            redirect(base_url().'login','refresh');
        }
        
    }
}