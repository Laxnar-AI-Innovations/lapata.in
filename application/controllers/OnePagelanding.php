
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OnePagelanding extends CI_Controller {
	public function __construct()
    {
       parent:: __construct();
       error_reporting(0);
    }
    
    public function index()
    {
    	
        $page_data['title'] = 'Khoji';
       $page_data['page_name'] = 'home';
       $this->load->view('other_landing_page/index', $page_data);

    }

    function mobileLogin()
    {
        $page_data['title'] = 'Face Match Results';
        $page_data['page_name'] = 'mobileLogin';
        $this->load->view('other_landing_page/index', $page_data);
    }

    function mobileFamilyLogin()
    {
        $page_data['title'] = 'Face Match Results';
        $page_data['page_name'] = 'mobileFamilyLogin';
        $this->load->view('other_landing_page/index', $page_data);
    }

    function newLanding()
    {
        $page_data['title'] = 'Face Match Results';
        $page_data['page_name'] = 'newLanding';
        $this->load->view('other_landing_page/index', $page_data);
    }

    function newFamilyLandingPage()
    {
        $page_data['title'] = 'Face Match Results';
        $page_data['page_name'] = 'newFamilyLandingPage';
        $this->load->view('other_landing_page/index', $page_data);
    }

     public function view_more()
    {
      
        $page_data['title'] = 'Khoji';
       $page_data['page_name'] = 'view_more';
       $this->load->view('other_landing_page/index', $page_data);

    }

   public function saveContactDetails()
    {
        $insertData = array(
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'contactNumber' => $_POST['number'],
            'contactingAs' => $_POST['contactAs'],
            'message' => $_POST['message']
        );
        $this->db->insert('queries',$insertData);
    }
}
    
