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
	<div class="container-fluid">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<?php foreach ($sql as $key) { ?>
				<form action="<?php echo site_url('terminal/processEdit') ?>" method="POST" role="form">
					<legend>Form title</legend>
				
					<div class="form-group">
						<input type="hidden" name="id_terminal" class="form-control" id="" placeholder="Input field" value="<?php echo $key->id_terminal; ?>">
					</div>

					<div class="form-group">
						<label for="">Nama Terminal</label>
						<input type="text" name="nama_terminal" class="form-control" id="" placeholder="Input field" value="<?php echo $key->nama_terminal; ?>">
					</div>

					<div class="form-group">
						<label for="">Jumlah Angkot</label>
						<input type="text" name="jumlah_angkot" class="form-control" id="" placeholder="Input field" value="<?php echo $key->jumlah_angkot; ?>">
					</div>
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
	<?php } ?>	
		</div>
	</div>
</body>
</html>