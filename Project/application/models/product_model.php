<?php 

class product_model extends CI_Model
{
	public $product = 'product';
	public $id_product = 'id_product';
	public $nama = 'nama';
	public $jenis = 'jenis';
	public $jumlah = 'harga';
	public $gambar = 'gambar';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	function ambil_product()
	{
		$this->db->select('*');
		$this->db->order_by($this->id_product,$this->order);
		return $this->db->get($this->product)->result();
	}
	function delete_product($id_product)
	{
		$this->db->where('id_product',$id_product);
		$this->db->delete($this->product);
	}
	function tambah_data($data)
	{
		return $this->db->insert($this->product, $data);
	}
	function ambil_product_id($id_product){
		$this->db->where($this->id_product,$id_product);
		return $this->db->get($this->product)->row();
	}
	function edit_product($id_product, $data){
		$this->db->where($this->id_product,$id_product);
		$this->db->update($this->product,$data);
	}
}
?>