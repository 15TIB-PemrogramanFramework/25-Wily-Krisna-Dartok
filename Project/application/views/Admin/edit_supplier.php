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
			<li class="active">Edit Supplier</li>
		</ol> 

	</div>
	<div id="page-inner">

		<div class="row">
			
			<form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="un_supplier" value="<?php echo $un_supplier; ?>" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama_supplier" value="<?php echo $nama_supplier;?>" placeholder="Nama" required>
				</div>
				<div class="form-group">
					<label>Company</label>
					<input type="text" name="company" value="<?php echo $company; ?>" placeholder="Company" required>
				</div>
				<div>
					<label>Email</label>
					<input type="text" name="email_supplier" placeholder="Masukkan Email" value="<?php echo $email_supplier; ?>" required>
				</div>
				<div>
					<label>Password</label>
					<input type="text" name="pw_supplier" placeholder="Masukkan Password" value="<?php echo $pw_supplier; ?>" required>
				</div>
				<div>
					<label>No. Hp</label>
					<input type="text" name="nohp_supplier" placeholder="Masukkan No HP" value="<?php echo $nohp_supplier; ?>" required>
				</div>
				<input type="hidden" name="id_supplier" value="<?php echo $id_supplier;?>">

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