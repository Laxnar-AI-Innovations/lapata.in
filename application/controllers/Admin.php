<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
       parent:: __construct();
       error_reporting(1);
    }
    
    function deleteAllotedPackage()
    {
        $this->db->query('delete from allotedPackages where Id='.$_POST['Id']);
    }

    function deleteAllotedMahakumbhPackage()
    {
        $this->db->query('delete from allotedmahakumbhpackages where Id='.$_POST['Id']);
    }

    function deleteAllotedSearchPackage()
    {
        $this->db->query('delete from allotedsearchpackages where Id='.$_POST['Id']);
    }

    public function deleteUnusedImages() {
        $images = $this->input->post('images');
        if (is_array($images)) {
            foreach ($images as $image) {
                $filePath = FCPATH . 'upload/searchFacePerson/' . $image;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    function searchImages()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'searchImages';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function limitSearchImages()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'limitSearchImages';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function dateSettings()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'dateSettings';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function getKhoyaPaya()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            if($_GET['startFromDate'] != '')
            {
                $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFromDate'])));
                $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFromDate'])));
            }
            $this->db->order_by('id','desc');
            $page_data['data'] = $this->db->get('mahakumbhSpecial')->result_array();
            $page_data['page_name'] = 'getKhoyaPaya';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function searchKhoyaPayaData()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            if($_GET['startFromDate'] != '')
            {
                $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFromDate'])));
                $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFromDate'])));
            }
            $this->db->where('mobileNumber !=',null);
            $this->db->where('matchedSpecialIds !=',null);
            $this->db->where('matchedSpecialIds !=','');
            $this->db->order_by('Id','desc');
            $page_data['data'] = $this->db->get('searchfacehistory')->result_array();
            if(count($page_data['data']) > 0)
            {
                foreach($page_data['data'] as $k=>$v)
                {
                    $finalIds = array();
                    $explode = array_unique(explode(',',$v['matchedSpecialIds']));
                    if(count($explode) > 0)
                    {
                        foreach($explode as $k1=>$v1)
                        {
                            $getDetail = $this->db->query('select * from mahakumbhSpecial where id='.$v1)->result_array();
                            if(count($getDetail) > 0)
                            {
                                array_push($finalIds,$v1);
                            }else{
                                unset($explode[$k1]);
                            }
                        }
                    }
                    if(count($finalIds) > 0)
                    {
                        $this->db->query('update searchfacehistory set matchedSpecialIds="'.implode(',',$finalIds).'" where Id='.$v['Id']);
                    }else{
                        $this->db->query('update searchfacehistory set matchedSpecialIds="'.implode(',',$explode).'" where Id='.$v['Id']);
                    }
                }
                if($_GET['startFromDate'] != '')
                {
                    $this->db->where('dateCreated >=',date('Y-m-d 00:00:00',strtotime($_GET['startFromDate'])));
                    $this->db->where('dateCreated <=',date('Y-m-d 23:59:59',strtotime($_GET['endFromDate'])));
                }
                $this->db->where('mobileNumber !=',null);
                $this->db->where('matchedSpecialIds !=',null);
                $this->db->where('matchedSpecialIds !=','');
                $this->db->order_by('Id','desc');
                $page_data['data'] = $this->db->get('searchfacehistory')->result_array();
            }
            $page_data['page_name'] = 'searchKhoyaPayaData';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function getPackageAccordingly()
    {
        if($_GET['type'] == 'Both')
        {
            $getPackages = $this->db->query('select * from packages where Id > 1 and type IN ("lapata","unknown")')->result_array();
            $html = '';
            foreach($getPackages as $k=>$v) 
            {
                $html .= '<input type="checkbox" name="packageName[]" id="'.$v['Id'].'" value="'.$v['Id'].'" class="form-check-input">
                                    <label for="'.$v['Id'].'" style="color:darkred!important;" class="me-3">'. $v['packageName'].' - '.strtoupper($v['type']).'</label>';
            }
            $html .= '<input type="checkbox" name="packageName[]" id="All" value="All" class="form-check-input">
                                    <label for="All" style="color:darkred!important;" class="me-1">All</label>';
            echo $html;
        }else{
            $getPackages = $this->db->query('select * from packages where Id > 1 and type="'.$_GET['type'].'"')->result_array();
            $html = '';
            foreach($getPackages as $k=>$v) 
            {
                $html .= '<input type="checkbox" name="packageName[]" id="'.$v['Id'].'" value="'.$v['Id'].'" class="form-check-input">
                                    <label for="'.$v['Id'].'" style="color:darkred!important;" class="me-1">'. $v['packageName'].'</label>';
            }
            $html .= '<input type="checkbox" name="packageName[]" id="All" value="All" class="form-check-input">
                                    <label for="All" style="color:darkred!important;" class="me-1">All</label>';
            echo $html;
        }
    }

    function deleteAllotedPersonalPackage()
    {
        $this->db->query('delete from allotedPersonalPackages where Id='.$_POST['Id']);
    }
    
    function updateFaqTypeStatus()
    {
        $updateParent = $this->db->query('update faqTypes set Status='.$_POST['status'].' where Id='.$_POST['Id']);
        $updateChildren = $this->db->query('update faq set status='.$_POST['status'].' where typeId='.$_POST['Id']);
    }
    
    function updateFaqStatus()
    {
        $updateChildren = $this->db->query('update faq set status='.$_POST['status'].' where Id='.$_POST['Id']);
    }
    
    function updateFaqTypes()
    {
        $updateParent = $this->db->query('update faqTypes set EnglishName="'.$_POST['typeEnglishName'].'", hindiName="'.$_POST['typeHindiName'].'" where Id='.$_POST['Id']);
    }
    
    function editFaqType($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['data'] = $this->db->query('select * from faqTypes where Id='.$id)->result_array();
            $page_data['page_name'] = 'editFaqType';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function create_faq_types()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_faq_types';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function create_faq()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_faq';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function manage_faqs()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'manage_faqs';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function savedData()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'savedData';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function search_history_filter()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'search_history_filter';
            if(isset($_GET['select_val']))
            {
                $this->db->select('*');
                $this->db->from('overallHistory');
                if($_GET['select_val'] == 'today')
                {
                    $this->db->where('dateCreated',date('Y-m-d'));
                }else if($_GET['select_val'] == 'yesterday')
                {
                    $this->db->where('dateCreated',date('Y-m-d',strtotime('-1 days')));
                }else{
                    $this->db->where('dateCreated >=', date('Y-m-d',strtotime('-14 days')));
                    $this->db->where('dateCreated <=', date('Y-m-d'));
                }
                $query = $this->db->get();
                $page_data['getOverallHistory'] = $query->result_array();
            }else{
                $page_data['getOverallHistory'] = array();
            }
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function all_complaints()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'all_complaints';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function postAllotPersonalPackage()
    {
        if($_POST['isKyc'] == 'Kyc')
        {
            if(count($_POST['kycusers']) > 0)
            {
                foreach($_POST['kycusers'] as $k1=>$v1)
                {
                    $getIfAlready = $this->db->query('select * from allotedPersonalPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        $response = array(
                            'status' => 'success',
                            'message' => 'Packages Alloted Successfully'
                        );
                    }else{
                        $insertData = array(
                            'userType' => $_POST['isKyc'],
                            'userId' => $v1,
                            'dateCreated' => date('Y-m-d',strtotime('+1 year'))
                        );
                        $this->db->insert('allotedPersonalPackages',$insertData);
                    }
                }
                $response = array(
                    'status' => 'success',
                    'message' => 'Packages Alloted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Select users to continue'
                );
            }
        }else{
            if(count($_POST['nonkycusers']) > 0)
            {
                foreach($_POST['nonkycusers'] as $k1=>$v1)
                {
                    $getIfAlready = $this->db->query('select * from allotedPersonalPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'"')->result_array();
                    if(count($getIfAlready) > 0)
                    {
                        
                    }else{
                        $insertData = array(
                            'userType' => $_POST['isKyc'],
                            'userId' => $v1,
                            'dateCreated' => date('Y-m-d',strtotime('+1 year'))
                        );
                        $this->db->insert('allotedPersonalPackages',$insertData);
                    }
                }
                $response = array(
                    'status' => 'success',
                    'message' => 'Packages Alloted Successfully'
                );
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'Select users to continue'
                );
            }
        }
        echo json_encode($response);
    }

    function postAllotSearchPackage()
    {
        if(isset($_POST['nonkycusers']))
        {
            $insertData = array();
            foreach($_POST['nonkycusers'] as $k1=>$v1)
            {
                $getIfAlreadyMissing = $this->db->query('select * from allotedsearchpackages where userId='.$v1)->result_array();
                if(count($getIfAlreadyMissing) == 0)
                {
                    array_push($insertData,array(
                        'userId' => $v1,
                    ));   
                }
            }
            if(count($insertData) > 0)
            {
                $this->db->insert_batch('allotedsearchpackages',$insertData);   
            }
            $response = array(
                'status' => 'success',
                'message' => 'Packages Alloted Successfully'
            );
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Select users to continue'
            );
        }
        echo json_encode($response);
    }

    function postAllotMahakumbhPackage()
    {
        if(isset($_POST['nonkycusers']))
        {
            $insertData = array();
            foreach($_POST['nonkycusers'] as $k1=>$v1)
            {
                $getIfAlreadyMissing = $this->db->query('select * from allotedmahakumbhpackages where userId='.$v1)->result_array();
                if(count($getIfAlreadyMissing) == 0)
                {
                    array_push($insertData,array(
                        'userId' => $v1,
                        'expiryDate' => date('Y-m-d',strtotime('+1 month'))
                    ));   
                }else{
                    $date=date_create(date('Y-m-d',strtotime($getIfAlreadyMissing[0]['expiryDate'])));
                    date_add($date,date_interval_create_from_date_string("1 month"));
                    $finaldate = date_format($date,"Y-m-d");
                    $this->db->where('Id',$getIfAlreadyMissing[0]['Id']);
                    $this->db->update('allotedmahakumbhpackages',array('expiryDate' => $finaldate));
                }
            }
            if(count($insertData) > 0)
            {
                $this->db->insert_batch('allotedmahakumbhpackages',$insertData);   
            }
            $response = array(
                'status' => 'success',
                'message' => 'Packages Alloted Successfully'
            );
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Select users to continue'
            );
        }
        echo json_encode($response);
    }
    
    function postAllotPackage()
    {
        if(!isset($_POST['packageName']))
        {
            $response = array(
                'status' => 'error',
                'message' => 'Please select at least one package name to continue'
            );
        }else{
            if($_POST['isKyc'] == 'Kyc')
            {
                if(count($_POST['kycusers']) > 0)
                {
                    if($_POST['complaintType'] == 'Both')
                    {
                        if(in_array('All',$_POST['packageName']))
                        {
                            $insertData = array();
                            foreach($_POST['kycusers'] as $k1=>$v1)
                            {
                                $getIfAlreadyMissing1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="8"')->result_array();
                                $getIfAlreadyMissing2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="9"')->result_array();
                                $getIfAlreadyMissing3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="10"')->result_array();
                                $getIfAlreadyUnknown1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="2"')->result_array();
                                $getIfAlreadyUnknown2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="3"')->result_array();
                                $getIfAlreadyUnknown3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="4"')->result_array();
                                if(count($getIfAlreadyMissing1) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 8,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyMissing2) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 9,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyMissing3) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 10,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown1) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 2,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown2) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 3,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown3) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 4,
                                        'userId' => $v1
                                    ));
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }else{
                            $insertData = array();
                            foreach($_POST['packageName'] as $k=>$v)
                            {
                                foreach($_POST['kycusers'] as $k1=>$v1)
                                {
                                    $getIfAlreadyMising = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId='.$v)->result_array();
                                    $getIfAlreadyUnknown = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId='.$v)->result_array();
                                    if(count($getIfAlreadyMising) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Missing',
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlreadyUnknown) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Unknown',
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }
                    }else{
                        if(in_array('All',$_POST['packageName']))
                        {
                            $insertData = array();
                            foreach($_POST['kycusers'] as $k1=>$v1)
                            {
                                if($_POST['complaintType'] == 'lapata')
                                {   
                                    $getIfAlready1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="8"')->result_array();
                                    $getIfAlready2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="9"')->result_array();
                                    $getIfAlready3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="10"')->result_array();
                                    if(count($getIfAlready1) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Missing",
                                            'packageId' => 8,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlready2) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Missing",
                                            'packageId' => 9,
                                            'userId' => $v1
                                        ));
                                    }
                                    if(count($getIfAlready3) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Missing",
                                            'packageId' => 10,
                                            'userId' => $v1
                                        ));
                                    }
                                }else{
                                    $getIfAlready1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="2"')->result_array();
                                    $getIfAlready2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="3"')->result_array();
                                    $getIfAlready3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="4"')->result_array();
                                    if(count($getIfAlready1) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Unknown",
                                            'packageId' => 2,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlready2) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Unknown",
                                            'packageId' => 3,
                                            'userId' => $v1
                                        ));
                                    }
                                    if(count($getIfAlready3) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => "Unknown",
                                            'packageId' => 4,
                                            'userId' => $v1
                                        ));
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }else{
                            $insertData = array();
                            foreach($_POST['packageName'] as $k=>$v)
                            {
                                foreach($_POST['kycusers'] as $k1=>$v1)
                                {
                                    $getIfAlready = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="'.$_POST['complaintType'].'" and packageId='.$v)->result_array();
                                    if(count($getIfAlready) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => ($_POST['complaintType'] == 'lapata' ? 'Missing' : 'Unknown'),
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Select users to continue'
                    );
                }
            }else{
                if(count($_POST['nonkycusers']) > 0)
                {
                    if($_POST['complaintType'] == 'Both')
                    {
                        if(in_array('All',$_POST['packageName']))
                        {
                            $insertData = array();
                            foreach($_POST['nonkycusers'] as $k1=>$v1)
                            {
                                $getIfAlreadyMissing1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="8"')->result_array();
                                $getIfAlreadyMissing2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="9"')->result_array();
                                $getIfAlreadyMissing3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="10"')->result_array();
                                $getIfAlreadyUnknown1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="2"')->result_array();
                                $getIfAlreadyUnknown2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="3"')->result_array();
                                $getIfAlreadyUnknown3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="4"')->result_array();
                                if(count($getIfAlreadyMissing1) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 8,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyMissing2) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 9,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyMissing3) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Missing',
                                        'packageId' => 10,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown1) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 2,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown2) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 3,
                                        'userId' => $v1
                                    ));
                                }
                                if(count($getIfAlreadyUnknown3) == 0)
                                {
                                    array_push($insertData,array(
                                        'userType' => $_POST['isKyc'],
                                        'complaintType' => 'Unknown',
                                        'packageId' => 4,
                                        'userId' => $v1
                                    ));
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }else{
                            $insertData = array();
                            foreach($_POST['packageName'] as $k=>$v)
                            {
                                foreach($_POST['nonkycusers'] as $k1=>$v1)
                                {
                                    $getIfAlreadyMissing = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId='.$v)->result_array();
                                    $getIfAlreadyUnknown = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId='.$v)->result_array();
                                    if(count($getIfAlreadyMissing) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Missing',
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlreadyUnknown) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Unknown',
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }
                    }else{
                        if(in_array('All',$_POST['packageName']))
                        {
                            $insertData = array();
                            foreach($_POST['nonkycusers'] as $k1=>$v1)
                            {
                                if($_POST['complaintType'] == 'lapata')
                                {
                                    $getIfAlready1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="8"')->result_array();
                                    $getIfAlready2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="9"')->result_array();
                                    $getIfAlready3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Missing" and packageId="10"')->result_array();
                                    if(count($getIfAlready1) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Missing',
                                            'packageId' => 8,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlready2) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Missing',
                                            'packageId' => 9,
                                            'userId' => $v1
                                        ));
                                    }
                                    if(count($getIfAlready3) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Missing',
                                            'packageId' => 10,
                                            'userId' => $v1
                                        ));
                                    }
                                }else{
                                    $getIfAlready1 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="2"')->result_array();
                                    $getIfAlready2 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="3"')->result_array();
                                    $getIfAlready3 = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="Unknown" and packageId="4"')->result_array();
                                    if(count($getIfAlready1) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Unknown',
                                            'packageId' => 2,
                                            'userId' => $v1
                                        ));   
                                    }
                                    if(count($getIfAlready2) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Unknown',
                                            'packageId' => 3,
                                            'userId' => $v1
                                        ));
                                    }
                                    if(count($getIfAlready3) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => 'Unknown',
                                            'packageId' => 4,
                                            'userId' => $v1
                                        ));
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }else{
                            $insertData = array();
                            foreach($_POST['packageName'] as $k=>$v)
                            {
                                foreach($_POST['nonkycusers'] as $k1=>$v1)
                                {
                                    $getIfAlready = $this->db->query('select * from allotedPackages where userId='.$v1.' and userType="'.$_POST['isKyc'].'" and complaintType="'.$_POST['complaintType'].'" and packageId='.$v)->result_array();
                                    if(count($getIfAlready) == 0)
                                    {
                                        array_push($insertData,array(
                                            'userType' => $_POST['isKyc'],
                                            'complaintType' => ($_POST['complaintType'] == 'lapata' ? 'Missing' : 'Unknown'),
                                            'packageId' => $v,
                                            'userId' => $v1
                                        ));   
                                    }
                                }
                            }
                            if(count($insertData) > 0)
                            {
                                $this->db->insert_batch('allotedPackages',$insertData);   
                            }
                            $response = array(
                                'status' => 'success',
                                'message' => 'Packages Alloted Successfully'
                            );
                        }
                    }
                }else{
                    $response = array(
                        'status' => 'error',
                        'message' => 'Select users to continue'
                    );
                }
            }   
        }
        echo json_encode($response);
    }
    
    function search_history()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'search_history';
            if(isset($_GET['from_date']))
            {
                $this->db->select('*');
                $this->db->from('overallHistory');
                $this->db->where('dateCreated >=', $_GET['from_date']);
                $this->db->where('dateCreated <=', $_GET['to_date']);
                $query = $this->db->get();
                $page_data['getOverallHistory'] = $query->result_array();
            }else{
                $page_data['getOverallHistory'] = array();
            }
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function viewSearchDetail($id)
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            $page_data['page_name'] = 'viewSearchDetail';
            $page_data['overallHistory'] = $this->db->query('select * from overallHistory where Id='.$id)->result_array();
            $this->load->view('back/index', $page_data);
        }else{
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function deleteFaqType()
    {
        $this->db->query('delete from faq where Id='.$_POST['Id']);
    }
    
    function deleteComplaint()
    {
        $getDetail = $this->db->query('select * from unknown_person where id='.$_POST['Id'])->result_array();
        unlink($getDetail[0]['Photo']);
        if($getDetail[0]['Photo1'] != NULL)
        unlink($getDetail[0]['Photo1']);
        if($getDetail[0]['Photo2'] != NULL)
        unlink($getDetail[0]['Photo2']);
        $this->db->query('delete from unknown_person where id='.$_POST['Id']);
    }

    function deleteCheckedAllotedPersonalPackages()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from allotedPersonalPackages where Id='.$_POST['Ids'][$i]);
        }
    }
    
    function deleteCheckedAllotedPackages()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from allotedPackages where Id='.$_POST['Ids'][$i]);
        }
    }

    function deleteCheckedAllotedSearchPackages()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from allotedsearchpackages where Id='.$_POST['Ids'][$i]);
        }
    }

    function deleteCheckedAllotedMahakumbhPackages()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from allotedmahakumbhpackages where Id='.$_POST['Ids'][$i]);
        }
    }
    
    function deleteCheckedComplaint()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $getDetail = $this->db->query('select * from unknown_person where id='.$_POST['Ids'][$i])->result_array();
            unlink($getDetail[0]['Photo']);
            if($getDetail[0]['Photo1'] != NULL)
            unlink($getDetail[0]['Photo1']);
            if($getDetail[0]['Photo2'] != NULL)
            unlink($getDetail[0]['Photo2']);
            $this->db->query('delete from unknown_person where id='.$_POST['Ids'][$i]);
        }
    }
    
    function deleteSearchHistory($id)
    {
        $this->db->query('delete from overallHistory where Id='.$id);
        return redirect(base_url().'admin/search_history','refresh');
    }
    
    public function index(){
    	if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'dashboard';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function manage_thana()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'manage_thana';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        } 
    }
    
    function create_state()
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'create_state';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function create_district()
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'create_district';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function create_thana()
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'create_thana';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function deleteAgeBand()
    {
        $this->db->query('delete from ageBands where Id='.$_POST['Id']);
    }
    
    function deleteState()
    {
        $this->db->query('delete from states where id='.$_POST['Id']);
    }
    
    function deleteDistrict()
    {
        $this->db->query('delete from district where id='.$_POST['Id']);
    }
    
    function deleteCheckedThana()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from police_thana where id='.$_POST['Ids'][$i]);
        }
    }
    
    function deleteCheckedHistory()
    {
        for($i=0;$i<count($_POST['Ids']);$i++)
        {
            $this->db->query('delete from overallHistory where Id='.$_POST['Ids'][$i]);
        }
    }
    
    function deleteThana()
    {
        $this->db->query('delete from police_thana where id='.$_POST['Id']);
    }
    
    function editThana($id)
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'editThana';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function editState($id)
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'editState';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function editDistrict($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'editDistrict';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        } 
    }
    
    function editageband($id)
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'editageband';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function getDistrict()
    {
        $getDistrict = $this->db->query('select * from district where st_name="'.$_POST['name'].'"')->result_array();
        echo json_encode($getDistrict);
    }
    
    function postAges()
    {
        $getIfAlready = $this->db->query('select * from ageBands where ageBand="'.$_POST['ageBands'].'"')->result_array();
        $explode = explode(',',$getIfAlready[0]['ages']);
        $finalArr = [];
        if(count($explode) > 0)
        {
            if(in_array($_POST['ages'],$explode))
            {
                $response = array(
                    'status' => 'error',
                    'message' => 'Age Already Added'
                );
                echo json_encode($response);
                die();
            }else{
                foreach($explode as $k=>$v)
                {
                    if($v != '')
                    array_push($finalArr,$v);   
                }
                array_push($finalArr,$_POST['ages']);
            }
        }
        $this->db->where('Id',$getIfAlready[0]['Id']);
        if(count($finalArr) == 1)
        {
            $this->db->update('ageBands',array('ages' => $finalArr[0]));
        }else{
            $this->db->update('ageBands',array('ages' => implode(',',$finalArr)));   
        }
        $response = array(
            'status' => 'success',
            'message' => 'Data inserted successfully'
        );
        echo json_encode($response);
    }
    
    function postAgeBands()
    {
        $getIfAlready = $this->db->query('select * from ageBands where ageBand="'.$_POST['ageBand'].'"')->result_array();
        if(count($getIfAlready) == 0)
        {
            $insert = $this->db->insert('ageBands',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }   
        }else{
            $response = array(
                'status' => 'error',
                'message' => 'Age Band Already Created'
            );
            echo json_encode($response);
        }
    }
    
    function postThana()
    {
        if(isset($_POST['id']))
        {
            $_POST['thana'] = strtoupper($_POST['thana']);
            $this->db->where('id',$_POST['id']);
            $update = $this->db->update('police_thana',$_POST);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }   
        }else{
            $convert = explode(',',$_POST['thanaName']);
            $isAvailable = 0;
            foreach($convert as $k=>$v)
            {
                $getIfAlready = $this->db->query('select * from police_thana where thana="'.$v.'"')->result_array();
                if(count($getIfAlready) == 0)
                {
                    $insertData = array(
                        'thana' => $v,
                        'state' => $_POST['state'],
                        'district' => $_POST['district']
                    );
                    $insert = $this->db->insert('police_thana',$insertData);
                }else{
                    $isAvailable = 1;
                    $insertData = array(
                        'thana' => $v,
                        'state' => $_POST['state'],
                        'district' => $_POST['district']
                    );
                    $insert = $this->db->insert('police_thana',$insertData);
                }   
            }
            if(!$isAvailable)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'warning',
                    'message' => 'Some of the data is already available. Kindly remove it.'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postDistrict()
    {
        if(isset($_POST['id']))
        {
            $_POST['d_name'] = strtoupper($_POST['d_name']);
            $this->db->where('id',$_POST['id']);
            $update = $this->db->update('district',$_POST);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }   
        }else{
            $convert = explode(',',$_POST['district']);
            $isAvailable = 0;
            foreach($convert as $k=>$v)
            {
                $getIfAlready = $this->db->query('select * from district where d_name="'.$v.'"')->result_array();
                if(count($getIfAlready) == 0)
                {
                    $insertData = array(
                        'd_name' => $v,
                        'st_name' => $_POST['state']
                    );
                    $insert = $this->db->insert('district',$insertData);
                }else{
                    $isAvailable = 1;
                    $insertData = array(
                        'd_name' => $v,
                        'st_name' => $_POST['state']
                    );
                    $insert = $this->db->insert('district',$insertData);
                }   
            }
            if(!$isAvailable)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'warning',
                    'message' => 'Some of the data is already available. Kindly remove it.'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postState()
    {
        if(isset($_POST['id']))
        {
            $_POST['name'] = strtoupper($_POST['name']);
            $this->db->where('id',$_POST['id']);
            $update = $this->db->update('states',$_POST);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }   
        }else{
            $getIfAlready = $this->db->query('select * from states where name="'.$_POST['name'].'"')->result_array();
            if(count($getIfAlready) == 0)
            {
                $_POST['name'] = strtoupper($_POST['name']);
                $insert = $this->db->insert('states',$_POST);
                if($insert)
                {
                    $response = array(
                        'status' => 'success',
                        'message' => 'Data inserted successfully'
                    );
                    echo json_encode($response);
                } else {
                    $response = array(
                        'status' => 'error',
                        'message' => 'Something Went Wrong'
                    );
                    echo json_encode($response);
                }   
            }else{
                $response = array(
                    'status' => 'error',
                    'message' => 'State Already Created'
                );
                echo json_encode($response);   
            }
        }
    }
    
    function create_age_bands()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_age_bands';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function vector_response()
    {
        if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'vector_response';
         $this->load->view('back/index', $page_data);
        } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
        } 
    }
    
    function sections(){
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'sections';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function updateDateSettings()
    {
        $data = array(
            array(
              'Id' => 39,
              'name' => 'funnelDateSetting' ,
              'value' => $_POST['FUNNEL']
            ),
            array(
              'Id' => 40 ,
              'name' => 'frontendDateSetting' ,
              'value' => $_POST['FRONTEND']
            ),
            array(
              'Id' => 41 ,
              'name' => 'lapataNonKycMissingDateSetting' ,
              'value' => $_POST['lapataNonKycMissingDate']
            ),
            array(
              'Id' => 42 ,
              'name' => 'lapataNonKycDOBSetting' ,
              'value' => $_POST['lapataNonKycDOB']
            ),
            );    
            
        $update = $this->db->update_batch('settings', $data, 'Id'); 
        if($update)
        {
            $response = array(
                'status' => 'success',
                'message' => 'Data updated successfully'
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Something Went Wrong'
            );
            echo json_encode($response);
        }   
    }
    
    function updateSettings()
    {
        $data = array(
            array(
              'Id' => 20 ,
              'name' => 'beforeLoginThreshold' ,
              'value' => $_POST['beforeLoginThreshold']
            ),
            array(
              'Id' => 21 ,
              'name' => 'afterLoginThreshold' ,
              'value' => $_POST['afterLoginThreshold']
            ),
            array(
              'Id' => 22 ,
              'name' => 'policeThreshold' ,
              'value' => $_POST['policeThreshold']
            ),
            array(
              'Id' => 31 ,
              'name' => 'ourFRTThreshold' ,
              'value' => $_POST['ourFRTThreshold']
            ),
            array(
              'Id' => 1 ,
              'name' => 'gridlineKey' ,
              'value' => $_POST['gridlineKey']
            ),
            array(
              'Id' => 36 ,
              'name' => 'mahakumbhFilter' ,
              'value' => $_POST['KPF']
            ),
            array(
              'Id' => 37 ,
              'name' => 'mahakumbhIdentity' ,
              'value' => $_POST['identity']
            ),
            array(
              'Id' => 35 ,
              'name' => 'mahakumbhSpecial' ,
              'value' => $_POST['khoyapaya']
            ),
            array(
              'Id' => 38 ,
              'name' => 'mahakumbhFamily' ,
              'value' => $_POST['family']
            ),
            );    
            
        $update = $this->db->update_batch('settings', $data, 'Id'); 
        if($update)
        {
            $response = array(
                'status' => 'success',
                'message' => 'Data updated successfully'
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Something Went Wrong'
            );
            echo json_encode($response);
        }   
    }
    
    function settings()
    {
       if($this->session->userdata('admin_login') == 'yes'){
         $page_data['page_name'] = 'settings';
         $this->load->view('back/index', $page_data);
      } else {
         $page_data['control'] = 'admin';
         $this->load->view('back/login');
      } 
    }
    
    function create_religion()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_religion';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function vehicle_documents()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'vehicle_documents';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function create_relations()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_relations';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function postVehicleDocs()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from vehicleDocuments where docName="'.$_POST['docName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Document Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insert = $this->db->insert('vehicleDocuments',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postReligion()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from religions where religionName="'.$_POST['religionName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Religion Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insert = $this->db->insert('religions',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postRelation()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from relations where relationName="'.$_POST['relationName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Relation Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insert = $this->db->insert('relations',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function updateRelation()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from relations where relationName="'.$_POST['relationName'].'" and Id !='.$_POST['Id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Relation Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'relationName' => $_POST['relationName']
            );
            $this->db->where('Id',$_POST['Id']);
            $update = $this->db->update('relations',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function updateReligion()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from religions where religionName="'.$_POST['religionName'].'" and Id !='.$_POST['Id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Religion Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'religionName' => $_POST['religionName']
            );
            $this->db->where('Id',$_POST['Id']);
            $update = $this->db->update('religions',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function updateVehicleDocuments()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from vehicleDocuments where docName="'.$_POST['docName'].'" and Id !='.$_POST['Id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Document Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'docName' => $_POST['docName']
            );
            $this->db->where('Id',$_POST['Id']);
            $update = $this->db->update('vehicleDocuments',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function editVehicleDocument($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['relation'] = $this->db->query('select * from vehicleDocuments where Id='.$id)->result_array();
            $page_data['page_name'] = 'editVehicleDocument';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function editReligion($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['relation'] = $this->db->query('select * from religions where Id='.$id)->result_array();
            $page_data['page_name'] = 'editReligion';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function editRelation($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['relation'] = $this->db->query('select * from relations where Id='.$id)->result_array();
            $page_data['page_name'] = 'editRelation';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function create_categories()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_categories';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function deleteSubCategory()
    {
        $updatedata = array(
            'isDeleted' => 1,
        );
        $this->db->where('Id',$_POST['Id']);
        $update = $this->db->update('subcategories',$updatedata);
        if($update)
        {
            $updatedata = array(
                'isDeleted' => 1,
            );
            $this->db->where('userSubCategory',$_POST['Id']);
            $this->db->update('userproperty',$updatedata);
            $response = array(
                'status' => 'success',
                'message' => 'sub category deleted successfully'
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Something Went Wrong'
            );
            echo json_encode($response);
        }   
    }
    
    function postSubCategory()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from subcategories where isDeleted=0 and englishSubCategoryName="'.$_POST['englishSubCategoryName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Sub Category Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insert = $this->db->insert('subcategories',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postCategory()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from categories where isDeleted=0 and englishCategoryName="'.$_POST['englishCategoryName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Category Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insert = $this->db->insert('categories',$_POST);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function deleteCategory()
    {
        $updatedata = array(
            'isDeleted' => 1,
        );
        $this->db->where('Id',$_POST['Id']);
        $update = $this->db->update('categories',$updatedata);
        if($update)
        {
            $updatedata = array(
                'isDeleted' => 1,
            );
            $this->db->where('userCategory',$_POST['Id']);
            $this->db->update('userproperty',$updatedata);
            $this->db->where('categoryId',$_POST['Id']);
            $this->db->update('subcategories',$updatedata);
            $response = array(
                'status' => 'success',
                'message' => 'category deleted successfully'
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Something Went Wrong'
            );
            echo json_encode($response);
        }
    }
    
    function updateCategory()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from categories where isDeleted=0 and englishCategoryName="'.$_POST['englishCategoryName'].'" and Id !='.$_POST['Id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Category Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'englishCategoryName' => $_POST['englishCategoryName'],
                'hindiCategoryName' => $_POST['hindiCategoryName']
            );
            $this->db->where('Id',$_POST['Id']);
            $update = $this->db->update('categories',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function editCategory($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['category'] = $this->db->query('select * from categories where Id='.$id)->result_array();
            $page_data['page_name'] = 'editCategory';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function editSubCategory($id)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['subcategory'] = $this->db->query('select * from subcategories where Id='.$id)->result_array();
            $page_data['page_name'] = 'editSubCategory';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function updateSubCategory()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from subcategories where isDeleted=0 and englishSubCategoryName="'.$_POST['englishSubCategoryName'].'" and Id !='.$_POST['Id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Sub Category Name Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'categoryId' => $_POST['categoryId'], 
                'englishSubCategoryName' => $_POST['englishSubCategoryName'],
                'hindiSubCategoryName' => $_POST['hindiSubCategoryName']
            );
            $this->db->where('Id',$_POST['Id']);
            $update = $this->db->update('subcategories',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }   
    }
    
    function manage_categories()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'manage_categories';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function manage_sub_categories()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'manage_sub_categories';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function create_sub_categories()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_sub_categories';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url() . 'admin', 'refresh');
    }

    public function login($para1 = ''){
      if($para1 == 'do_login'){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $credential = array('email' => $email, 'password' => sha1($password));
        $query = $this->db->get_where('admin', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('admin_login', 'yes');
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('login_type', 'admin');
            $response = array(
                'status' => 'success',
                'message' => 'Login Successful'
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Invalid Credentials !'
            );
            echo json_encode($response);
        }
      } else {
        $page_data['control'] = 'admin';
        $this->load->view('back/login');
      }
    }
    
    function create_faqs()
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = 'create_faqs';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function postFaqTypes()
    {
        $getIfAlready = $this->db->query('select * from faqTypes where EnglishName="'.$_POST['typeEnglishName'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Faq Type Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insertdata = array(
                'EnglishName' => $_POST['typeEnglishName'],
                'HindiName' => $_POST['typeHindiName'],
                'Status' => 1
            );
            $insert = $this->db->insert('faqTypes',$insertdata);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    
    function postfaq()
    {
        $_POST['faqEnglishQues'] = $this->input->post('faqEnglishQues',true);
        $_POST['faqEnglishQues'] = $this->db->escape($_POST['faqEnglishQues']);
        $_POST['faqEnglishAns'] = $this->input->post('faqEnglishAns',true);
        $_POST['faqEnglishAns'] = $this->db->escape($_POST['faqEnglishAns']);
        $_POST['faqHindiQues'] = $this->input->post('faqHindiQues',true);
        $_POST['faqHindiQues'] = $this->db->escape($_POST['faqHindiQues']);
        $_POST['faqHindiAns'] = $this->input->post('faqHindiAns',true);
        $_POST['faqHindiAns'] = $this->db->escape($_POST['faqHindiAns']);
        $getIfAlready = $this->db->query('select * from faq where typeId='.$_POST['typeId'].' and englishQuestion="'.$_POST['faqEnglishQues'].'" and englishAnswer="'.$_POST['faqEnglishAns'].'"')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Faq Question Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insertdata = array(
                'englishQuestion' => $_POST['faqEnglishQues'],
                'englishAnswer' => $_POST['faqEnglishAns'],
                'hindiQuestion' => $_POST['faqHindiQues'],
                'hindiAnswer' => $_POST['faqHindiAns'],
                'typeId' => $_POST['typeId'],
                'dateCreated' => date('Y-m-d H:i:s A'),
                'status' => 1
            );
            $insert = $this->db->insert('faq',$insertdata);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    function editFaq($id)
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            $page_data['faq'] = $this->db->query('select * from faq where id='.$id)->result_array();
            $page_data['page_name'] = 'editFaq';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    function updatefaq()
    {
        $_POST['faqEnglishQues'] = $this->input->post('faqEnglishQues',true);
        $_POST['faqEnglishQues'] = $this->db->escape($_POST['faqEnglishQues']);
        $_POST['faqEnglishAns'] = $this->input->post('faqEnglishAns',true);
        $_POST['faqEnglishAns'] = $this->db->escape($_POST['faqEnglishAns']);
        $_POST['faqHindiQues'] = $this->input->post('faqHindiQues',true);
        $_POST['faqHindiQues'] = $this->db->escape($_POST['faqHindiQues']);
        $_POST['faqHindiAns'] = $this->input->post('faqHindiAns',true);
        $_POST['faqHindiAns'] = $this->db->escape($_POST['faqHindiAns']);
        $getIfAlready = $this->db->query('select * from faq where englishQuestion="'.$_POST['faqEnglishQues'].'" and englishAnswer="'.$_POST['faqEnglishAns'].'" and Id !='.$_POST['id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Faq Question Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'englishQuestion' => $_POST['faqEnglishQues'],
                'englishAnswer' => $_POST['faqEnglishAns'],
                'hindiQuestion' => $_POST['faqHindiQues'],
                'hindiAnswer' => $_POST['faqHindiAns']
            );
            $this->db->where('Id',$_POST['id']);
            $update = $this->db->update('faq',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    function create_package()
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $package = $this->db->query('select * from package where id='.$id)->result_array();
                if(count($package))
                {
                    if($package[0]['status']==0)
                    {
                        $del=$this->db->query('Update  package set status=1 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package InActive Succesfully !');
                    }
                    else
                    {
                        $del=$this->db->query('Update   package set status=0 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package Active Succesfully !');
                    }
                    
                    
                    redirect("admin/create_package");
                }
            }
            $page_data['page_name'] = 'create_package';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function allot__mahakumbh_package()
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $package = $this->db->query('select * from package where id='.$id)->result_array();
                if(count($package))
                {
                    if($package[0]['status']==0)
                    {
                        $del=$this->db->query('Update  package set status=1 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package InActive Succesfully !');
                    }
                    else
                    {
                        $del=$this->db->query('Update   package set status=0 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package Active Succesfully !');
                    }
                    
                    
                    redirect("admin/allot__mahakumbh_package");
                }
            }
            $page_data['page_name'] = 'allot__mahakumbh_package';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function allot_personal_package()
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $package = $this->db->query('select * from package where id='.$id)->result_array();
                if(count($package))
                {
                    if($package[0]['status']==0)
                    {
                        $del=$this->db->query('Update  package set status=1 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package InActive Succesfully !');
                    }
                    else
                    {
                        $del=$this->db->query('Update   package set status=0 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package Active Succesfully !');
                    }
                    
                    
                    redirect("admin/allot_personal_package");
                }
            }
            $page_data['page_name'] = 'allot_personal_package';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }

    function allot_search_package()
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            $page_data['page_name'] = 'allot_search_package';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function allot_package()
    {
        if($this->session->userdata('admin_login') == 'yes')
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $package = $this->db->query('select * from package where id='.$id)->result_array();
                if(count($package))
                {
                    if($package[0]['status']==0)
                    {
                        $del=$this->db->query('Update  package set status=1 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package InActive Succesfully !');
                    }
                    else
                    {
                        $del=$this->db->query('Update   package set status=0 where id='.$id);
                        $this->session->set_flashdata('message_name', 'Package Active Succesfully !');
                    }
                    
                    
                    redirect("admin/allot_package");
                }
            }
            $page_data['page_name'] = 'allot_package';
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    
    function postpackage()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from package where package_name="'.$_POST['pkgname'].'" ')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Package  Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insertdata = array(
                'package_name' => $_POST['pkgname'],
                'amount' => $_POST['pkgamt'],
                'duration' => $_POST['pkgdur'],
                'duration_type' => $_POST['pkgdurtype'],
                'fetures' => $_POST['pkgfeture'],
                'packagefor' => $_POST['pkgfortype']
            );
            $insert = $this->db->insert('package',$insertdata);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }

    function create_guidence_video()
    {
        
        
        if($this->session->userdata('admin_login') == 'yes')
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $package = $this->db->query('select * from guidence_video where id='.$id)->result_array();
                if(count($package))
                {
                    $del=$this->db->query('Delete from  guidence_video  where id='.$id);
                    $this->session->set_flashdata('message_name', 'Guidence Video Delete Succesfully !');
                    
                    redirect("admin/create_guidence_video");
                }
            }
            if(isset($_GET['eid']))
            {
                $id=$_GET['eid'];
                $page_data['guide'] = $this->db->query('select * from guidence_video where id='.$id)->result_array();
                
            }
            $page_data['page_name'] = 'create_guidence_video';
            $this->load->view('back/index', $page_data);
        } 
        else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    function postguidencevideo()
    {
        
       
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from guidence_video where title="'.$_POST['title'].'" ')->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Guidence Title  Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $insertdata = array(
                'title' => $_POST['title'],
                'des' => $_POST['des'],
                'link' => $_POST['link']
                
            );
            $insert = $this->db->insert('guidence_video',$insertdata);
            if($insert)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    function update_guidence_video()
    {
        unset($_POST['_token']);
        $getIfAlready = $this->db->query('select * from guidence_video where title="'.$_POST['title'].'" and id !='.$_POST['id'])->result_array();
        if(count($getIfAlready) > 0)
        {
            $response = array(
                'status' => 'error',
                'message' => 'Guidence Title Already Exists'
            );
            echo json_encode($response);
        }else
        {
            $updatedata = array(
                'title' => $_POST['title'],
                'des' => $_POST['des'],
                'link' => $_POST['link']
            );
            $this->db->where('id',$_POST['id']);
            $update = $this->db->update('guidence_video',$updatedata);
            if($update)
            {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Something Went Wrong'
                );
                echo json_encode($response);
            }
        }
    }
    function missing_report($para)
    {
        if($this->session->userdata('admin_login') == 'yes'){
            $page_data['page_name'] = $para;
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    function missing_report_detail($para1,$para2)
    {
        // echo $para1;
        // echo "<pre>";
        // $u=$this->db->query("SELECT * FROM information_schema.tables WHERE TABLE_SCHEMA = 'missing' ")->result_array();

        // print_r($u);
        // die();
        if($this->session->userdata('admin_login') == 'yes'){

            $page_data['page_name'] = $para1;
            if($para1=="missing_report_vehicle_detail")
            {
                $page_data['id'] = $para2;
                $page_data['missingAlldetail'] = $this->db->query('select * from missingvehicle where id='.$para2)->result_array();
                $page_data['missingPhotos'] = $this->db->query('select * from missingvehiclephotos where missingId='.$para2)->result_array();
            }
            else
            {
                $page_data['id'] = $para2;
                $page_data['missingAlldetail'] = $this->db->query('select * from missingperson where id='.$para2)->result_array();
                $page_data['missingPhotos'] = $this->db->query('select * from missingpersonphotos where missingId='.$para2)->result_array();
                // print_r($page_data['missingPhotos']);
                // die();
            }

            
            $userid=$page_data['missingAlldetail'][0]['userId']??"0";
            $page_data['userdetail'] =$this->db->query('select * from user where uid='.$userid)->result_array();
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = 'admin';
            $this->load->view('back/login');
        }
    }
    function datatable()
    {
        $st=$_POST['startDate']??"2023-04-15";
        $ed=$_POST['endDate']??"2023-04-15";
        $getfaqs = $this->db->query("select * from missingperson where missingdate between '".$st."' AND '".$ed."'")->result_array();
        //echo "<pre>";
        //print_r($getfaqs);
        if(count($getfaqs)>0)
        {
            $response = array(
                'status' => 'success',
                'data' => $getfaqs
            );
        }
        else
        {
            $response = array(
                'status' => 'error',
                'data' => "no data"
            );
        }
       
        
        echo json_encode($response);
        die();
        
        
    }
    
}