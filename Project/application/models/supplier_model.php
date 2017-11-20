<?php 
	class supplier_model extends CI_Model
	{
		public $supplier = 'supplier';
		public $id_supplier = 'id_supplier';
		public $nama_supplier = 'nama_supplier';
		public $company = 'company';
		public $un_supplier = 'un_supplier';
		public $pw_supplier = 'pw_supplier';
		public $email_supplier = 'email_supplier';
		public $nohp_supplier = 'nohp_supplier';

		function __construct()
		{
			parent::__construct();
		}
		function ambil_supplier_nama($un_supplier)
		{
			$this->db->where($this->un_supplier,$un_supplier);
			return $this->db->get($this->supplier)->result();
		}
		function ambil_data_supplier()
		{
			return $this->db->get($this->supplier)->result();
		}
		function delete_supplier($id_supplier)
		{
			$this->db->where('id_supplier',$id_supplier);
			$this->db->delete($this->supplier);
		}
		function ambil_supplier_id($id_supplier){
			$this->db->where($this->id_supplier,$id_supplier);
			return $this->db->get($this->supplier)->row();
		}
		function edit_supplier($id_supplier, $data){
			$this->db->where($this->id_supplier,$id_supplier);
			$this->db->update($this->supplier,$data);
		}
	}
 ?>