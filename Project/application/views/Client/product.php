<?php $this->load->view('Client/menu');?>

<div class="container">

  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Product</strong>
    </h2>
    <hr class="divider">

      <div class="row">
    <?php foreach ($data_product as $key => $row) { ?>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card h-100">
            <center><?php $encoded_image = base64_encode($row->gambar); echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:300px;height:300px;">';?></center>
            <div class="card-body text-center">
              <h4 class="card-title m-0"><?php echo $row->nama;?>
              </h4>
              <h4 class="card-title m-0">Rp. <?php echo $row->harga; ?></h4>
              <?php echo anchor(site_url('pesanan/tambah_pesanan/'.$row->id_product),
                '<i class="fa fa-shopping-cart" aria-hidden="true"> Pesan</i>',
                'class="btn btn-warning"');?>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>
  </div>

</div>
<!-- /.container -->
<?php $this->load->view('Client/footer');?>
