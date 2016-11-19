<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" media ="screen">
	<script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Form Komentar</legend>

		<input type="hidden" name="id_admin" value="<?php echo $this->session->userdata('id_login'); ?>">
		<div class="form-group">
			<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>			
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>