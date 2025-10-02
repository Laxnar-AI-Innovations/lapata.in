<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileDelete extends CI_Controller 
{
	public function __construct()
    {
       parent:: __construct();
       error_reporting(1);
    }
    public function check_and_delete_file()
    {
        $filePath=$_GET['file_name']??'no.jpeg';
        // Check if the file exists
        if (file_exists($filePath)) 
        {
            $st='success'; $mess='File deleted successfully.';
            unlink($filePath);            
            
        } 
        else 
        {
            $st='error'; $mess='File does not exists.';
        }
        $response = array(
            'status' => $st,
            'message' => $mess,
            'post_data' => $_GET??[]
        );
        echo json_encode($response);
   
    }
}
