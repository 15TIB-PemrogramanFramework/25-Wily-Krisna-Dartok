<?php 
class admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->model('supplier_model');
	}
	function index()
	{

	}
}

?>
