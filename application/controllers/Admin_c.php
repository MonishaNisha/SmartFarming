<?php

Class Admin_c extends CI_Controller{

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
	}
	function adhome()
	{
 		
		$this->load->view('Admin/admindashboard');
		/*http://localhost/SmartFarming/Admin_c/adhome*/
 	}
 }