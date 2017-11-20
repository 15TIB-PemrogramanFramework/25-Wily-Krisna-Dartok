<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Catalog Online</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url()."index_assets/";?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url()."index_assets/";?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
  <link href="<?php echo base_url()."index_assets/";?>css/stylish-portfolio.css" rel="stylesheet">
  <!--2-->
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()."assets/";?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()."assets/";?>css/business-casual.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
        <i class="fa fa-times"></i>
      </a>
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#top">Catalog Online</a>
      </li>
      <li>
        <a class="js-scroll-trigger" href="#top">Home</a>
        <li>
          <a class="js-scroll-trigger" href="#portfolio">Product</a>
        </li>
      <?php
      if(!$this->session->userdata('supplier') && !$this->session->userdata('admin') && !$this->session->userdata('customer'))
      {
        echo anchor(site_url('login'),'<li>Login<a></a></li>');
        echo anchor(site_url('signup'),'<li>Sign Up<a></a></li>');
      }
      ?>
      <?php 
      if($this->session->userdata('customer'))
      {
        echo anchor(site_url('login/logout'),'<li>Log Out<a></a></li>');
      }
      else if($this->session->userdata('supplier'))
      {
        echo anchor(site_url('login/logout_supplier'),'<li>Log Out<a></a></li>');
      }
      else if($this->session->userdata('admin'))
      {
        echo anchor(site_url('login/logout_admin'),'<li>Log Out<a></a></li>');
      }
      ?>  
      </ul>
    </nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Catalog Online</h1>

      <?php $datestring = '%d - %m - %Y | %h:%i %a';
$time = time();
echo mdate($datestring, $time);?>
        <br>
        <a href="#portfolio" class="btn btn-dark btn-lg js-scroll-trigger">More</a>
      </div>
    </header>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="<?php echo base_url()."assets/";?>img/slide-1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Dress</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="<?php echo base_url()."assets/";?>img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Jas</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="<?php echo base_url()."assets/";?>img/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Jas</h3>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg">Welcome To</div>
          <h1 class="my-2">Catalog Online</h1>
          <div class="text-heading text-muted text-lg">By
            <strong>Wily Krisna D.</strong>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
              <br>
              <hr class="small">
              <p class="text-muted">Copyright &copy Powered By <a target="_blank" href="#">Wily Krisna Dartok</a> <?php echo date("Y"); ?></p>
            </div>
          </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
          <i class="fa fa-chevron-up fa-fw fa-1x"></i>
        </a>
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="<?php echo base_url()."index_assets/";?>vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url()."index_assets/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="<?php echo base_url()."index_assets/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="<?php echo base_url()."index_assets/";?>js/stylish-portfolio.js"></script>

    </body>

    </html>
