<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url() ?>assets/bootstrap/css/bootstrap.css">
    <script src="<?=base_url() ?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<form action="<?php echo site_url('admin/prosesinsert') ?>" method="POST" role="form" enctype="multipart/form-data">
			<legend>Form Insert</legend>
			<input type="hidden" name="id_angkot">
			<div class="form-group">
				<label for="">nama_angkot</label>
				<input type="text" class="form-control" name="nama_angkot" placeholder="Input field">
			</div>

			<div>
				<label for="">asal</label>
				<input type="text" class="form-control" name="asal" placeholder="Input field">
			</div>
			
			<div>
				<label for="">tujuan</label>
				<input type="text" class="form-control" name="tujuan" placeholder="Input field">
			</div>
			
			<div>
				<label for="">gambar</label>
				<input type="file" name="upload">
			</div>
			
			<div>
				<label for="">link</label>
				<input type="text" class="form-control" name="link" placeholder="Input field">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</form>
	</div>
</body>
</html>