<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Dashboard</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"  crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body class="bg-grey">

<section class="mt-5">
	<div class="container">
		<div class="text-center bg-light p-5 br-15" style="max-width: 700px;margin-left: auto;margin-right: auto;">
			<div>
				<h2 class="mb-4">Welcome, <?php echo $name; ?></h2>
				<a href="<?php echo site_url('vendor/logout'); ?>" class="btn btn-theme">Logout</a>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>