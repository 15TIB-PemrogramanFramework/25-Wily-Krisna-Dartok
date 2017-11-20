<?php 

class supplier extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
	}
	function index()
	{
		$data['supplier']=$this->supplier_model->ambil_data_supplier();
		$this->load->view('Admin/supplier_form',$data);	
	}
	function edit($id_supplier)
	{	
		$supplier=$this->supplier_model->ambil_supplier_id($id_supplier);
		$data=array(
			'id_supplier'		=>set_value('$id_supplier', $supplier->id_supplier), //nama variable yang akan dikirim ke view
			'nama_supplier'		=>set_value('$nama_supplier', $supplier->nama_supplier), 
			'company'			=>set_value('$company', $supplier->company),
			'un_supplier'		=>set_value('$un_supplier', $supplier->un_supplier),
			'pw_supplier'		=>set_value('$pw_supplier', $supplier->pw_supplier),
			'email_supplier'	=>set_value('$email_supplier', $supplier->email_supplier),
			'nohp_supplier'		=>set_value('nohp_supplier', $supplier->nohp_supplier),
			'action'	=>site_url('supplier/edit_aksi'),
			'button'	=>'Edit'
		);
		$this->load->view('Admin/edit_supplier',$data);
	}

	function edit_aksi(){
		$data=array(
			'id_supplier'		=>$this->input->post('id_supplier'),
			'nama_supplier'		=>$this->input->post('nama_supplier'),
			'company'			=>$this->input->post('company'),
			'un_supplier'		=>$this->input->post('un_supplier'),
			'pw_supplier'		=>$this->input->post('pw_supplier'),
			'email_supplier'	=>$this->input->post('email_supplier'),
			'nohp_supplier'		=>$this->input->post('nohp_supplier'),
		);
		$id_supplier=$this->input->post('id_supplier');
		$this->supplier_model->edit_supplier($id_supplier,$data);
		redirect(site_url('supplier'));
	}
	function delete($id_supplier)
	{
		$this->supplier_model->delete_supplier($id_supplier);
		redirect('Admin/supplier_form');
	}
}
?>