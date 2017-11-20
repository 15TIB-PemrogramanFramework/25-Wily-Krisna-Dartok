<?php 
	class pesanan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('customer_model');
			$this->load->model('pesanan_model');
			$this->load->model('product_model');
		}
		function index()
		{
			$data['pesanan']=$this->pesanan_model->ambil_data_pesanan($this->session->userdata('un_customer'));
			$this->load->view('Client/pesanan',$data);
		}
		function product()
		{
			$data['data_product']=$this->product_model->ambil_product();
			$this->load->view('Client/product',$data);
		}
		function tambah_pesanan($id_product)
		{
			$product = $this->product_model->ambil_product_id($id_product);
			$data=array(
				'action'		=>site_url('pesanan/tambah_aksi'),
				'nama_product'	=>set_value('$nama_product', $product->nama),
				'nama_customer'	=>set_value('nama_customer'),
				'harga'			=>set_value('$harga', $product->harga),
				'button'		=>'Pesan'
		);
		$this->load->view('Client/pesan_product',$data);
		}

		function tambah_aksi()
		{
			$data=array(//apa yang diinputkan
				'nama_product'	=>$this->input->post('nama_product'),
				'nama_customer' =>$this->input->post('nama_customer'),
				'harga'			=>$this->input->post('harga'),
			);
			$this->pesanan_model->tambah_pesanan($data); 
			redirect(site_url('pesanan'));
		}
		function delete($nama_customer)
		{
			$this->pesanan_model->delete($nama_customer);
			redirect('pesanan');
		}

	}
?> 