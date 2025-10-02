<?php defined("BASEPATH") or exit("no direct script allowed");
class Project_model extends CI_Model{
	function __construct(){
	parent::__construct(); 
	$this->load->library('session');
	$this->load->library(array('form_validation','pagination','image_lib','user_agent'));
	    $this->load->helper(array('url','form','file'));
		$this->load->database();
		
	} 
}