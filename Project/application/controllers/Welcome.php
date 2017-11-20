<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function productClient(){
		$this->load->view('Client/product');
	}
	public function supplier(){
		$this->load->view('Admin/supplier_form');
	}
	public function tambah(){
		$this->load->view('Supplier/form_tambah');
	}
	public function admin(){
		$this->load->view('Admin/customer_form');
	}

}
