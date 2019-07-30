<div class="row container">
	<section class="content-header">
		<h1>Dashboard</h1>
		<br>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>petugas">
					<i class="fa fa-dashboard"></i> Dashboard</a>
			</li>
		</ol>
	</section>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo $reservation ?></h3>

				<p>Reservation</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="<?php echo base_url() ?>petugas/reservation" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3><?php echo $customer ?>
				</h3>

				<p>Customer</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="<?php echo base_url() ?>petugas/customer" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	
	<!-- ./col -->
	
	<!-- ./col -->
</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		
	</div>
	<!-- ./col -->
</div>
