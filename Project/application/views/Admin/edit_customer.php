<?php 
$this->load->view('Supplier/header');
?>

<div id="page-wrapper">
	<div class="header"> 
		<h1 class="page-header">
			Dashboard
		</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Edit Customer</li>
		</ol> 

	</div>
	<div id="page-inner">

		<div class="row">
			
			<form action="<?php echo $action;?>" method="post">
				<div class="for">
					<label>Username</label>
					<input type="text" name="un_customer" value="<?php echo $un_customer;?>" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label style="margin-top: 30px">Nama Depan</label>
					<input type="text" name="fn_customer" value="<?php echo $fn_customer;?>" placeholder="Nama Depan" required>
				</div>
				<div class="form-group">
					<label>Nama Belakang</label>
					<input type="text" name="ln_customer" value="<?php echo $ln_customer ?>" placeholder="Nama Balakang" required>
				</div>
				<div>
					<label>Email</label>
					<input type="text" name="email_customer" placeholder="Masukkan Email" value="<?php echo $email_customer; ?>" required>
				</div>
				<div>
					<label>Password</label>
					<input type="text" name="ps_customer" placeholder="Masukkan Password" value="<?php echo $ps_customer; ?>" required>
				</div>
				<div>
					<label>Alamat</label>
					<input type="text" name="alamat_customer" placeholder="Masukkan Alamat" value="<?php echo $alamat_customer; ?>" required>
				</div>
				<div>
					<label>No. Hp</label>
					<input type="text" name="nohp_customer" placeholder="Masukkan No HP" value="<?php echo $nohp_customer; ?>">
				</div>
				<input type="hidden" name="id_customer" value="<?php echo $id_customer;?>">

				<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
			</form>
		</div>
		<?php 
		$this->load->view('Supplier/footer');
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#example').DataTable();
			} );
		</script>