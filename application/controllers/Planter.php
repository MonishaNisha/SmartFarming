<?php

Class Planter extends CI_Controller{

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	function pro(){
 					
					$this->load->view('Planter/planterpro');
					
 }
 function proupdate(){

		if($this->input->post('Update'))
		{		$emailid = $this->input->post('uemail');
				$data['fname']=$this->input->post('ufname');
				$data['lname']=$this->input->post('ulname');
				$data['aadhaar']=$this->input->post('uAadhaarNo');
				$data['ph']=$this->input->post('uph');
				$data['email']=$this->input->post('uemail');
				$this->load->model('Register_m');
				$status=$this->Register_m->pupdate($data);
				if($status==true){
					redirect(base_url() . 'Planter/pro');
				}
				else{
					echo 'Update Failed';
					
		}
		}
	}
 }