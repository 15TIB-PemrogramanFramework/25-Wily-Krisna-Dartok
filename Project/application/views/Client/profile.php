<?php $this->load->view('Client/menu');?>
<div class="container">

  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      Home<strong> Profile</strong>
    </h2>
    <hr class="divider" >
    
    
    <div class="row">
      <?php foreach ($data_customer as $key => $row) {?>
      <div class="col-lg-8">

        <h5 class="mb-0">Nama :</h5>
        <div class="mb-4">
          <?php echo $row->fn_customer;?> <?php echo $row->ln_customer; ?></div>
          <h5 class="mb-0">Email:</h5>
          <div class="mb-4">
            <?php echo $row->email_customer;?>
          </div>
          <h5 class="mb-0">Address:</h5>
          <div class="mb-4">
            <?php echo $row->alamat_customer; ?>
          </div>
          <h5 class="mb">No. HP</h5>
          <div class="mb-4">
            <?php echo $row->nohp_customer; ?>
          </div>
          
        </div>
        <?php } ?>
      </div>

    </div>
    

    <?php $this->load->view('Client/footer');?>
