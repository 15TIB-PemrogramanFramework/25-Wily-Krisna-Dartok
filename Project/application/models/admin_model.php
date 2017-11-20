<?php 
	class admin_model extends CI_Model
	{
		public $admin = 'admin';
		public $un = 'un';
		public $pw = 'pw';

		function __construct()
		{
			parent::__construct();
		}
		function ambil_admin_nama($un)
		{
			$this->db->where($this->un,$un);
			return $this->db->get($this->admin)->result();
		}
	}
 ?>