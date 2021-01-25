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
						<h1>Details of Email</h1> </div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right"> </ol>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</section>
		<div class="card">
			<!-- /.card-header -->
			<div class="card-body">
				<div class="emailbody"> <img src="<?php echo base_url();?>/images/EmailHeader.jpg" alt="EmailHeader">
					<?php foreach($view_user as $row){ ?>
						<h6 style="margin-left:270px;margin-top:15px;color:#7a1526;"><b><?php echo $row['firstName']; ?><b> &nbsp; <?php echo $row['lastName']; ?></h6>
						<?php }?>
							<br> <span>
			  <img src="<?php echo base_url();?>/images/PepsiGraphic.gif" style="height:160px;margin-left:145px;" alt="PepsiGraphic">
			 </span> <span>
			 <img src="<?php echo base_url();?>/images/Barcode.png" style="height:160px;margin-left:15px;" alt="Barcode">
			</span>
							<h5 style="margin-left:240px;margin-top:10px;color:#7a1526; font-weight:510;"> GUEST BARCODES<h5>
		<hr style="width:450px;margin-left:100px;background-color:#7a1526">
		
			</div>
			          <?php $this->load->model('data_model');
						 $id =$this->uri->segment(3);  
                        $user=$this->data_model->get_alldetails($id); 
					 for ($i = 1; $i <=$user; $i++){?>
					 <span style="margin-left:50px;">	
			  <img src="<?php echo base_url();?>/images/Barcode.png" style="margin-top:15px;height:160px;width:250px;" alt="Barcode">
		</span> &nbsp; <?php if($i==2 || $i==4 )
		{?> <br><?php  
		} }?>
				<hr style="width:450px;margin-left:100px;background-color:#7a1526">
			  <img src="<?php echo base_url();?>/images/EmailBody1.jpg" style="margin-left:15px;height:200px;width:600px;" alt="EmailBody1">
			  <img src="<?php echo base_url();?>/images/EmailBody2.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">
			  <img src="<?php echo base_url();?>/images/EmailBody3.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">
			  <img src="<?php echo base_url();?>/images/EmailBody4.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">

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

</body>
</html>