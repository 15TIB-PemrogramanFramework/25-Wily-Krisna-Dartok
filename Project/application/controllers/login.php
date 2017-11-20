<?php 
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('customer_model');
		$this->load->model('supplier_model');
		$this->load->model('product_model');
		$this->load->model('admin_model');
	}
	function index()
	{
		if($this->session->userdata('customer') && $this->session->userdata('customer') == true)
		{
			redirect('login/home');
		}
		else if($this->session->userdata('supplier') && $this->session->userdata('supplier') == true)
		{
			redirect('login/supplier');
		}
		else if($this->session->userdata('admin') && $this->session->userdata('admin') == true)
		{
			redirect('login/admin');
		}
		if(!$this->input->post())
		{
			$this->load->view('login');
		}else
		{
			$cek_login_customer=$this->login_model->cek_login_customer(
				$this->input->post('username'),
				$this->input->post('password')
			);
			$cek_login_supplier=$this->login_model->cek_login_supplier(
				$this->input->post('username'),
				$this->input->post('password')
			);
			$cek_login_admin=$this->login_model->cek_login_admin(
				$this->input->post('username'),
				$this->input->post('password')
			);
			if(!empty($cek_login_customer))
			{
				$this->session->set_userdata('customer', true);
				$this->session->set_userdata('un_customer', $cek_login_customer->un_customer);
				redirect("login/home");
			}
			else if (!empty($cek_login_supplier))
			{
				$this->session->set_userdata('supplier', true);
				$this->session->set_userdata('un_supplier', $cek_login_supplier->un_supplier);
				redirect("login/supplier");
			}
			else if(!empty($cek_login_admin))
			{
				$this->session->set_userdata('admin', true);
				$this->session->set_userdata('un', $cek_login_admin->un);
				redirect("login/admin");
			}
			else 
			{
				$this->session->set_flashdata('gagal',' <div class="alert alert-danger"><strong>Gagal Login!</strong> Username dan Password Anda Salah.</div>');
				redirect("login");
			}
		}
	}
	function home()
	{
		if(!$this->session->userdata('customer') || $this->session->userdata('customer') != true)
		{
			redirect('login');
		}
		$data['data_customer']=$this->customer_model->ambil_customer_nama($this->session->userdata('un_customer'));
		$this->load->view('Client/profile', $data);
	}
	function supplier()
	{
		if(!$this->session->userdata('supplier') || $this->session->userdata('supplier') != true)
		{
			redirect('login');
		}
		$data['data_supplier']=$this->supplier_model->ambil_supplier_nama($this->session->userdata('un_supplier'));//untuk mengambil data supplier yang sedang aktif
		$data['data_product']=$this->product_model->ambil_product(); //untuk menampilkan semua product
		$this->load->view('Supplier/form_product', $data);
	}
	function admin()
	{
		if(!$this->session->userdata('admin') || $this->session->userdata('admin') != true)
		{
			redirect('login');
		}
		$data['data_admin']=$this->admin_model->ambil_admin_nama($this->session->userdata('un'));//untuk mengambil data admin yang sedang aktif
		$data['customer']=$this->customer_model->ambil_data_customer(); //untuk menampilkan semua data customer
		$this->load->view('Admin/customer_form', $data);
	}
	function logout()
	{
		$this->session->unset_userdata('customer');
		redirect("/");
	}
	function logout_supplier()
	{
		$this->session->unset_userdata('supplier');
		redirect("/");
	}
	function logout_admin()
	{
		$this->session->unset_userdata('admin');
		redirect("/");
	}
}
?>