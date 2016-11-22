<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" media ="screen">
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/style.css">
	<script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>

</head>
<body>
	<div class="login">
	<div class="container-fluid">
		<form action="<?php echo site_url('admin_login/processLogin'); ?>" method="POST" role="form">
			<div class="form-group">
				<input type="text" class="form-control" id="" placeholder="Username" name="username">
			</div>
			
			<div class="form-group">
				<input type="password" class="form-control" id="" placeholder="Password" name="password">
			</div>
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	</div>
</body>
</html>