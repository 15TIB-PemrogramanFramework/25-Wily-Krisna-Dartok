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
			<li class="active">Table Customer</li>
		</ol> 

	</div>
	<div id="page-inner">


		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Alamat</th>
							<th>No HP</th>
							<th>Edit</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<?php foreach ($customer as $key => $value){ ?>
					<tbody>
						<tr>
							<td><?php echo $value->id_customer; ?></td>
							<td><?php echo $value->fn_customer; ?></td>
							<td><?php echo $value->ln_customer; ?></td>
							<td><?php echo $value->un_customer; ?></td>
							<td><?php echo $value->email_customer; ?></td>
							<td><?php echo $value->ps_customer; ?></td>
							<td><?php echo $value->alamat_customer; ?></td>
							<td><?php echo $value->nohp_customer; ?></td>
							<td><?php echo anchor(site_url('customer/edit/'.$value->id_customer),
								'<i class="fa fa-pencil" aria-hidden="true"></i>',
								'class="btn btn-warning"');?></td>
							<td>
								<?php  echo anchor(site_url('customer/delete/'.$value->id_customer),
									'<i class="fa fa-trash"></i>',
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