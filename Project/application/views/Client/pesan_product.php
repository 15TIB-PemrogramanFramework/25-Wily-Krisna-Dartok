<?php $this->load->view('Client/menu');?>

<div class="container">

  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Pesan Product</strong>
    </h2>
    <hr class="divider">
    
    <div class="row">
      
      <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
          <label style="margin-top: 30px">Nama Product</label><br>
          <input type="text" name="nama_product" value="<?php echo $nama_product;?>" placeholder="Nama Product" required>
        </div>
        <div class="form-group">
          <label>Nama Pemesan</label><br>
          <input type="text" name="nama_customer" placeholder="Nama Pemesan" required>
        </div>
        <div class="form-group">
          <label>Harga</label><br>
          <input type="text" name="harga" placeholder="Masukkan Harga" value="<?php echo $harga ?>" required>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo $button;?></button>
      </form>
    </div>

  </div>

</div>
<!-- /.container -->
<?php $this->load->view('Client/footer');?>
