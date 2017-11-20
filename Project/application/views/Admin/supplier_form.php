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
			<li class="active">Table Supplier</li>
		</ol> 

	</div>
	<div id="page-inner">
		<div class="row">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Supplier</th>
						<th>Company</th>
						<th>Email</th>
						<th>Username</th>
						<th>Password</th>
						<th>No HP</th>
						<th>Edit</th>
						<th>Hapus</th>
					</tr>
				</thead>
					<?php foreach ($supplier as $key => $value){ ?>
				<tbody>

					<tr>
						<td><?php echo $value->id_supplier; ?></td>
						<td><?php echo $value->nama_supplier; ?></td>
						<td><?php echo $value->company ;?></td>
						<td><?php echo $value->email_supplier; ?></td>
						<td><?php echo $value->un_supplier ?></td>
						<td><?php echo $value->pw_supplier ?></td>
						<td><?php echo $value->nohp_supplier ?></td>
						<td><?php echo anchor(site_url('supplier/edit/'.$value->id_supplier),
								'<i class="fa fa-pencil" aria-hidden="true"></i>',
								'class="btn btn-warning"');?></td>
						<td>
							<?php  echo anchor(site_url('supplier/delete/'.$value->id_supplier),
								'<i class="fa fa-trash"></i>',
								'class="btn btn-danger"'); ?></td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
				</div>
				<?php 
				$this->load->view('Supplier/footer');
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#example').DataTable();
					} );
				</script>