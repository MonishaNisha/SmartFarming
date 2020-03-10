<?php

Class RegisterOwner extends CI_Controller{

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('Register_m');
		$this->load->library('session');
	}
	function index()
	{
		$this->load->view('Register/home');
	}

	function logon()
	{
 		$this->load->view('layout/header');
		$this->load->view('Register/Ologin');
		$this->load->view('layout/footer');
 	}
 	function ohome()
 	{
 		
 		$this->load->view('LandLord/ownerhome');
 		
 	}
	function goreg()
	 {
 		$this->load->view('layout/header');
		$this->load->view('Register/index');
		$this->load->view('layout/footer');
	}
	function registration()
	{

		if($this->input->post('oRegister'))
		{
			$data['fname']=$this->input->post('ofname');
			$data['lname']=$this->input->post('olname');
			$data['aadhaar']=$this->input->post('oAadhaarNo');
			$data['ph']=$this->input->post('oph');
			$data['email']=$this->input->post('oemail');
			$data['pwd']=md5($this->input->post('opwd'));
			$this->load->model('Register_m');
			$status=$this->Register_m->insertowner($data);
			if($status==true){
				$this->load->view('layout/header');
				$this->load->view('Register/Ologin');
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
	function login_validation()
	{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('olog-email', 'Email Address', 'required');
			$this->form_validation->set_rules('olog-pwd', 'Password', 'required');
		if($this->form_validation->run() == TRUE)
		{
				$emailid = $this->input->post('olog-email');
				$pwd = $this->input->post('olog-pwd');
				$this->load->model('Register_m');
				if($this->Register_m->can_login($emailid, md5($pwd))){
					$session_data = array(
						'emailid' => $emailid
					);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'RegisterOwner/dashboard');
					}
					else
					{
						$this->session->set_flashdata('error','<h3>Invalid username or password</h3>');
						redirect(base_url() . 'RegisterOwner/registration');
					}
		}
		else
		{
				$this->logon();
		}
	}
	
	function dashboard(){
		if($this->session->userdata('emailid') != ''){

					/*echo '<h2>Welcome - '.$this->session->userdata('emailid').'</h2>';
					echo '<label><a href="'. base_url() . 'RegisterOwner/logout">Logout</a></label>';
					*/redirect(base_url() . 'RegisterOwner/ohome');
		}
		else
		{
			redirect(base_url() . 'RegisterOwner/logon');
		}
					
	}


	function logout(){
		$this->session->unset_userdata('emailid');
		redirect(base_url() . 'RegisterOwner/logon');
	}
	

	
}