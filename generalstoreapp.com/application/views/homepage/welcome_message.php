<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Genral Store App</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"  crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body class="bg-grey">

<section class="mt-5">
	<div class="container">
		<div class="text-center bg-light p-5 br-15" style="max-width: 700px;margin-left: auto;margin-right: auto;">
			<h1>Welcome to General Store App</h1>
			<div class="row mt-5">
				<div class="col-sm-6">
					<div class="form-group">
						<a href="<?php echo site_url("user/login"); ?>" class="btn btn-theme">User Login</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<a href="<?php echo site_url("user/registration"); ?>" class="btn btn-theme">User Registration</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<a href="<?php echo site_url("vendor/login"); ?>" class="btn btn-theme">Vendor Login</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<a href="<?php echo site_url("vendor/registration"); ?>" class="btn btn-theme">Vendor Registration</a>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<a href="<?php echo site_url("vendor/list"); ?>" class="btn btn-theme">Vendor List</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>