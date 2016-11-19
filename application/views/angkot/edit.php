<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($sql as $key) { ?>

	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css">
    <script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<form action="<?php echo site_url('admin/processEdit') ?>" method="POST" role="form" enctype="multipart/form-data">
			<legend>Form title</legend>
			<input type="hidden" name="id_angkot" value="<?php echo $key->id_angkot; ?>">
			<div class="form-group">
				<label for="">nama_angkot</label>
				<input type="text" class="form-control" name="nama_angkot" value="<?php echo $key->nama_angkot; ?>">
			</div>

			<div>
				<label for="">asal</label>
				<input type="text" class="form-control" name="asal" placeholder="Input field" value="<?php echo $key->asal; ?>">
			</div>
			
			<div>
				<label for="">tujuan</label>
				<input type="text" class="form-control" name="tujuan" placeholder="Input field" value="<?php echo $key->tujuan; ?>">
			</div>
			
			<div>
				<label for="">gambar</label>
				<input type="file" name="upload" value="<?php echo $key->gambar; ?>">
			</div>
			
			<div>
				<label for="">link</label>
				<input type="text" class="form-control" name="link" placeholder="Input field" value="<?php echo $key->link; ?>">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</div>
</body>
</html>
	<?php } ?>
</body>
</html>