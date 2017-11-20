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
			<li class="active">Tambah Product</li>
		</ol> 

	</div>
	<div id="page-inner">

		<div class="row">
			
			<form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label style="margin-top: 30px">Nama Product</label>
					<input type="text" name="nama" value="<?php echo $nama;?>" placeholder="Id Nama" required>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" style="padding-bottom: 40px" class="form-control"  name="gambar" required>
				</div>
				<div>
					<label>Jenis</label>
					<input type="text" name="jenis" placeholder="Masukkan Jenis" value="<?php echo $jenis; ?>" required>
				</div>
				<div>
					<label>Jumlah</label>
					<input type="text" name="jumlah" placeholder="Masukkan Jumlah" value="<?php echo $jumlah; ?>" required>
				</div>
				<div>
					<label>Harga</label>
					<input type="text" name="harga" placeholder="Masukkan Harga" value="<?php echo $harga ?>" required>
				</div>
				<input type="hidden" name="id_product" value="<?php echo $id_product;?>">

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