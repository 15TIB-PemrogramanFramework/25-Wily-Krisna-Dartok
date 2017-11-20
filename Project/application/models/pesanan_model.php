<?php 

	class pesanan_model extends CI_Model
	{
		public $pesanan = 'pesanan';
		function __construct()
		{
			parent::__construct();
		}
		function tambah_pesanan($data)
		{
			return $this->db->insert($this->pesanan,$data);
		}
		function ambil_data_pesanan($un_customer)
		{
			$this->db->where('nama_customer',$un_customer);
			return $this->db->get($this->pesanan)->result();
		}
		function delete($nama_customer)
		{
			$this->db->where('nama_customer',$nama_customer);
			$this->db->delete($this->pesanan);
		}
	}

 ?>