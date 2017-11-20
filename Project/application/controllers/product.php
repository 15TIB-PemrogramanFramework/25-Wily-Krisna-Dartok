<?php 

/**
* 
*/
class product extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('product_model');
		if(!$this->session->userdata('supplier') || $this->session->userdata('supplier') != true) //sessionnya namanya logined
		{
			redirect('/');
		}
	}
	function index()
	{
		$data['data_product']=$this->product_model->ambil_product();
		$this->load->view('Supplier/form_product',$data);
	}
	public function tambah()
	{
		$data=array(
			'action'	=>site_url('product/tambah_aksi'),
			'id_product'		=>set_value('id_product'),
			'nama'		=>set_value('nama'),
			'gambar'	=>set_value('gambar'),
			'jenis'		=>set_value('jenis'),
			'jumlah' 	=>set_value('jumlah'),
			'harga'		=>set_value('harga'),
			'button'	=>'Submit'
		);
		$this->load->view('Supplier/form_tambah',$data);
	}

	function tambah_aksi()
	{
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_product'=>$this->input->post('id_product'), //apa yang diinputkan
			'nama'		=>$this->input->post('nama'),
			'gambar'	=>$encoded_image,
			'jenis' 	=>$this->input->post('jenis'),
			'jumlah'	=>$this->input->post('jumlah'),
			'harga'		=>$this->input->post('harga'),
		);
		$this->product_model->tambah_data($data); 
		redirect(site_url('product'));
	}

	function edit($id_product){
		
		$product=$this->product_model->ambil_product_id($id_product);
		$data=array(
			'id_product'		=>set_value('$id_product', $product->id_product), //nama variable yang akan dikirim ke view
			'nama'		=>set_value('$nama', $product->nama), 
			'gambar'	=>set_value('$gambar', "data:image/jpeg;base64,'.base64_encode($product->gambar).'"),
			'jenis'		=>set_value('$jenis', $product->jenis),
			'jumlah'	=>set_value('$jumlah', $product->jumlah),
			'harga'		=>set_value('$harga', $product->harga),
			'action'	=>site_url('product/edit_aksi'),
			'button'	=>'Edit'
		);
		$this->load->view('Supplier/form_tambah',$data);
	}

	function edit_aksi(){
		$gambar	=$this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('gambar/'.$gambar)) );
		$data=array(
			'id_product'	=>$this->input->post('id_product'),
			'gambar'		=>$encoded_image,
			'nama'			=>$this->input->post('nama'),
			'jenis'			=>$this->input->post('jenis'),
			'jumlah'		=>$this->input->post('jumlah'),
			'harga'			=>$this->input->post('harga'),
		);
		$id_product=$this->input->post('id_product');
		$this->product_model->edit_product($id_product,$data);
		redirect(site_url('product'));
	}
	function delete($id_product)
	{
		$this->product_model->delete_product($id_product);
		redirect('product');
	}
}
?>