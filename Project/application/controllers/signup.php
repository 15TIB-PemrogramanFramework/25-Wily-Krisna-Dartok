<?php 
class signup extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');
	}
	function index()
	{
		if(!$this->input->post())
		{
			$this->load->view('signup');
		}
		else
		{
			 $data=array(
				'un_customer'		=>$this->input->post('username'),
				'fn_customer'		=>$this->input->post('first_name'),
				'ln_customer'		=>$this->input->post('last_name'),
				'email_customer'	=>$this->input->post('email'),
				'ps_customer'		=>$this->input->post('password'),
				'alamat_customer'	=>$this->input->post('alamat'),
				'nohp_customer'		=>$this->input->post('no_hp'),
			);
			$this->signup_model->signup_customer($data);
			redirect('login');
		}
	}
}
?>