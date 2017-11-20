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
			<li class="active">Table Product</li>
		</ol> 

	</div>
	<div id="page-inner">


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Product</th>
							<th>Gambar</th>
							<th>Jenis</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Edit</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<?php foreach ($data_product as $key => $row) { ?>
					<tbody>
						<tr>
							<td><?php echo $row->id_product;?></td>
							<td><?php echo $row->nama;?></td>
							<td><?php
							$encoded_image = base64_encode($row->gambar);
							echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:200px;height:180px;">';
					//echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'" style="width:200px; height:180px"/>'; 
							?></td>
							<td><?php echo $row->jenis; ?></td>
							<td><?php echo $row->jumlah; ?></td>
							<td><?php echo $row->harga; ?></td>
							<td><?php echo anchor(site_url('product/edit/'.$row->id_product),
								'<i class="fa fa-pencil" aria-hidden="true"></i>',
								'class="btn btn-warning"');?></td>
							<td><?php echo anchor(site_url('product/delete/'.$row->id_product),
								'<i class="fa fa-remove" aria-hidden="true"></i>',
								'class="btn btn-danger"'); ?></td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>
				</div>



				<?php 
				$this->load->view('Supplier/footer');
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#example').DataTable();
					} );
				</script>