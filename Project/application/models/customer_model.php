<?php 
class customer_model extends CI_Model
{
	public $customer = 'customer';
	public $id_customer = 'id_customer';
	public $un_customer = 'un_customer';
	public $fn_customer = 'fn_customer';
	public $ln_customer = 'ln_customer';
	public $email_customer = 'email_customer';
	public $ps_customer = 'ps_customer';
	public $alamat_customer = 'alamat_customer';
	public $nohp_customer = 'nohp_customer';

	function __construct()
	{
		parent::__construct();
	}
	function ambil_customer_nama($un_customer)
	{
		$this->db->where($this->un_customer,$un_customer);
		return $this->db->get($this->customer)->result();
	}
	function ambil_data_customer()
	{
		return $this->db->get($this->customer)->result();
	}
	function delete_customer($id_customer)
	{
		$this->db->where('id_customer',$id_customer);
		$this->db->delete($this->customer);
	}
	function ambil_customer_id($id_customer){
		$this->db->where($this->id_customer,$id_customer);
		return $this->db->get($this->customer)->row();
	}
	function ambil_customer_un($un_customer){
		$this->db->where($this->un_customer,$un_customer);
		return $this->db->get($this->customer)->row();
	}
	function edit_customer($id_customer, $data){
		$this->db->where($this->id_customer,$id_customer);
		$this->db->update($this->customer,$data);
	}
}
?>