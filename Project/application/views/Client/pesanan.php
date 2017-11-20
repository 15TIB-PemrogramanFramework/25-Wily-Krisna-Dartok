<?php $this->load->view('Client/menu');?>

<div class="container">

  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Pesanan</strong>
    </h2>
    <hr class="divider">

    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-12">
        <table id="example" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Product</th>
              <th>Nama Pemesan</th>
              <th>Harga</th>
              <th>Batal</th>
            </tr>
          </thead>
          <?php foreach ($pesanan as $key => $row) { ?>
          <tbody>
            <tr>
              <td><?php echo $row->nama_product;?></td>
              <td><?php echo $row->nama_customer; ?></td>
              <td><?php echo $row->harga; ?></td>
              <td><?php echo anchor(site_url('pesanan/delete/'.$row->nama_customer),
                '<i class="fa fa-remove" aria-hidden="true"></i>',
                'class="btn btn-danger"'); ?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

    </div>

  </div>
  <!-- /.container -->
  <?php $this->load->view('Client/footer');?>
