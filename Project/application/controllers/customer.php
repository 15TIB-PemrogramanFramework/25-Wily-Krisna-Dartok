<?php
	/**
	* 
	*/
	class customer extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('customer_model');
			$this->load->model('product_model');
		}
		function index()
		{
			$data['customer']=$this->customer_model->ambil_data_customer();
			$this->load->view('Admin/customer_form',$data);	
		}
		function product()
		{
			$data['data_product']=$this->product_model->ambil_product();
			$this->load->view('Client/product',$data);
		}
		function edit($id_customer){

			$customer=$this->customer_model->ambil_customer_id($id_customer);
			$data=array(
			'id_customer'		=>set_value('$id_customer', $customer->id_customer),
			'un_customer'		=>set_value('$un_customer', $customer->un_customer),
			'fn_customer'		=>set_value('$fn_customer', $customer->fn_customer), 
			'ln_customer'		=>set_value('$ln_customer', $customer->ln_customer),
			'email_customer'	=>set_value('$email_customer', $customer->email_customer),
			'ps_customer'		=>set_value('$ps_customer', $customer->ps_customer),
			'alamat_customer'	=>set_value('$alamat_customer', $customer->alamat_customer),
			'nohp_customer'		=>set_value('nohp_customer', $customer->nohp_customer),
			'action'	=>site_url('customer/edit_aksi'),
			'button'	=>'Edit'
		);
			$this->load->view('Admin/edit_customer',$data);
		}

		function edit_aksi(){
			$data=array(
				'id_customer'	=>$this->input->post('id_customer'),
				'un_customer'	=>$this->input->post('un_customer'),
				'fn_customer'	=>$this->input->post('fn_customer'),
				'ln_customer'	=>$this->input->post('ln_customer'),
				'email_customer'=>$this->input->post('email_customer'),
				'ps_customer'	=>$this->input->post('ps_customer'),
				'alamat_customer'=>$this->input->post('alamat_customer'),
				'nohp_customer'	=>$this->input->post('nohp_customer'),
			);
			$id_customer=$this->input->post('id_customer');
			$this->customer_model->edit_customer($id_customer,$data);
			redirect(site_url('customer'));
		}
		function delete($id_customer)
		{
			$this->customer_model->delete_customer($id_customer);
			redirect('login/admin');
		}
	}
	?>