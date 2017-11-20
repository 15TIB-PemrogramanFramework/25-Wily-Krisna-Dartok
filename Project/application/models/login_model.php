<?php 

	class login_model extends CI_Model
	{
		public $customer = 'customer';
		public $supplier = 'supplier';
		public $admin	 = 'admin';

		function __construct()
		{
			parent::__construct();
		}
		function cek_login_customer($username,$password)
		{
			$this->db->where('un_customer',$username);
			$this->db->where('ps_customer',$password);
			return $this->db->get($this->customer)->row();
		}
		function cek_login_supplier($username,$password)
		{
			$this->db->where('un_supplier',$username);
			$this->db->where('pw_supplier',$password);
			return $this->db->get($this->supplier)->row();
		}
		function cek_login_admin($username,$password)
		{
			$this->db->where('un',$username);
			$this->db->where('pw',$password);
			return $this->db->get($this->admin)->row();
		}

	}
?>
