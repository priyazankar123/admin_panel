<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | DataTables</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> </head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<!-- SEARCH FORM -->
			<!-- Right navbar links -->
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>DataTables</h1> </div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right"> </ol>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</section>
		<div class="card">
			<?php echo $this->session->flashdata('message'); ?>
				<div class="card-header">
					<h3 class="card-title">User Details</h3> <span id="look " style="margin-left:800px;">&nbsp;<button><a href="<?php echo base_url();?>/Admin_data/">Back</span></a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<?php if(isset($view_user)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Sr.No</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>ZipCode</th>
									<th>No of Guests</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; ?>
									<?php foreach($view_user as $row){
				   ?>
										<tr>
											<td>
												<?php echo ++$i; ?>
											</td>
											<td>
												<?php echo $row['firstName']; ?>
											</td>
											<td>
												<?php echo $row['lastName']; ?>
											</td>
											<td>
												<?php echo $row['email']; ?>
											</td>
											<td>
												<?php echo $row['zipCode']; ?>
											</td>
											<td>
												<?php echo $row['noOfGuests']; ?>
											</td>
											</td>
										</tr>
										<?php } }
			?>
											</tfoot>
						</table>
						<h5> Guest Details</h5>
						<?php if(isset($view_user)) { ?>
							<table id="example2" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; ?>
										<?php foreach($view_guest as $row){
				   ?>
											<tr>
												<td>
													<?php echo ++$i; ?>
												</td>
												<td>
													<?php echo $row['guestfirstName']; ?>
												</td>
												<td>
													<?php echo $row['guestlastName']; ?>
												</td>
												<td>
													<?php echo $row['guestemail']; ?>
												</td>
												</td>
											</tr>
											<?php } }
			?>
												</tfoot>
							</table>
				</div>
				<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<!-- jQuery -->
	<script src="<?php echo base_url();?>/assets/theme/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>/assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url();?>/assets/theme/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>/assets/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>/assets/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>/assets/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>/assets/theme/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url();?>/assets/theme/dist/js/demo.js"></script>
	<!-- page script -->
	<script>
	$(function() {
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
	$('#example1').dataTable({
		bFilter: false,
		bInfo: false,
		searching: true
	});
	</script>
</body>

</html>