<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Catalog Online</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/materialize/css/materialize.min.css" media="screen,projection" />
	<!-- Bootstrap Styles-->
	<link href="<?php echo base_url();?>assets2/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- Morris Chart Styles-->
	<link href="<?php echo base_url();?>assets2/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="<?php echo base_url();?>assets2/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/js/Lightweight-Chart/cssCharts.css"> 

	<link rel="stylesheet" href="<?php echo base_url();?>assets2/datatables/dataTables.bootstrap.css"/>
	<style type="text/css">
	.dataTables_wrapper {
		min-height: 500px
	}

	.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 100%;
		margin-left: -50%;
		margin-top: -25px;
		padding-top: 20px;
		text-align: center;
		font-size: 1.2em;
		color:grey;
	}
</style>
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default top-navbar" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">insert_chart</i> <strong>Catalog Online</strong></a>
			</div>
			<ul class="nav navbar-top-links navbar-right"> 			
				<li><a class="dropdown-button waves-effect waves-dark" href="#" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i><b>
					<?php if($this->session->userdata('supplier')){  		//jika akun adalah akun supplier
							 echo $this->session->userdata('un_supplier'); 	//maka echo nama supplier yang aktif
					 } else if($this->session->userdata('admin')){ 			//jik akun adalah akun admin
						 	echo $this->session->userdata('un');	//maka echo nama admin
					 } ?>
				</b> <i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</nav>
		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a></li>

			<?php if($this->session->userdata('supplier')){ ?> <!--jika akun adalah akun supplier, maka untuk logout pake yang supplier-->
			<li><a href="<?php echo site_url('login/logout_supplier');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li> 
			<?php }else if($this->session->userdata('admin')){ ?> <!--jika akun adalah akun admin, maka untuk logout pake yang admin-->
			<li><a href="<?php echo site_url('login/logout_admin');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
			<?php } ?>

		</ul>
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<?php
					if($this->session->userdata('supplier'))
						{?>
							<li><a href="<?php echo site_url('login/supplier'); ?>"><i class="fa fa-list-ul"></i> Product</a></li>
							<li><a href="<?php echo site_url('product/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Product</a></li>
							<?php }
							else if($this->session->userdata('admin'))
								{ ?>
									<li><a href="<?php echo site_url('login/admin'); ?>"><i></i> Customer</a></li>
									<li><a href="<?php echo site_url('supplier'); ?>"><i></i> Supplier</a></li>
									<?php } ?>
								</ul>
							</div>
						</nav>
