<?php

Class RegisterPlanter extends CI_Controller{

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('Register_m');
		$this->load->library('session');
	}
	function logon(){
 					$this->load->view('layout/header');
					$this->load->view('Register/Plogin');
					$this->load->view('layout/footer');
 }
	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('plog-email', 'Email Address', 'required');
		$this->form_validation->set_rules('plog-pwd', 'Password', 'required');
		if($this->form_validation->run() == TRUE){
				$emailid = $this->input->post('plog-email');
				$pwd = $this->input->post('plog-pwd');

				$this->load->model('Register_m');
				
				
				$result=$this->Register_m->can_login1($emailid, md5($pwd));
				/*var_dump($result);*/
				if($this->Register_m->can_login1($emailid, md5($pwd))){
					$session_data = array(
						'emailid' => $emailid,
						
						'fname'=>$result->fname,
						'lname'=>$result->lname,
						'ph'=>$result->ph,
						'aadhaar'=>$result->aadhaar,

					);
					/*print_r($session_data);*/
				/*die();*/

					$this->session->set_userdata($session_data);
					redirect(base_url() . 'RegisterPlanter/dashboard');
					}
					else
					{
						$this->session->set_flashdata('error','Invalid username or password');
						redirect(base_url() . 'RegisterPlanter/registration');
					}
				}
		else
		{
			$this->logon();
		}
	}
	function pedit(){

		if($this->input->post('edit'))
		{
			$this->load->view('Planter/planteredit');
		}
	}
	function registration(){

		if($this->input->post('pRegister'))
		{
				$data['fname']=$this->input->post('pfname');
				$data['lname']=$this->input->post('plname');
				$data['aadhaar']=$this->input->post('pAadhaarNo');
				$data['ph']=$this->input->post('pph');
				$data['email']=$this->input->post('pemail');
				$data['pwd']=md5($this->input->post('ppwd'));
				$this->load->model('Register_m');
				$status=$this->Register_m->insertplanter($data);
				if($status==true){
					$this->load->view('layout/header');
					$this->load->view('Register/Plogin');
					$this->load->view('layout/footer');
				}
				else{
					echo 'Registration Failed';
				$this->load->view('layout/header');
				$this->load->view('Register/index');
				$this->load->view('layout/footer');
		}
		}
	}
	
	function phome()
 	{
 		
 		$this->load->view('Planter/planterhome');
 		
 	}
	function dashboard(){
		if($this->session->userdata('emailid') != ''){

					redirect(base_url() . 'RegisterPlanter/phome');
		}
		else
		{
			redirect(base_url() . 'RegisterPlanter/logon');
		}
					
	}

	function logout(){
		$this->session->unset_userdata('emailid');
		redirect(base_url() . 'RegisterPlanter/logon');
	}
}



	
	
