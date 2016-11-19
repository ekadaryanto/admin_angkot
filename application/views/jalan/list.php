<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" media ="screen">
</head>
<body>
		<div class="container-fluid">
		<a href="<?php echo site_url('jalan/insert'); ?>"><button type="button" class="btn btn-default">insert</button></a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>nama_jalan</th>
						<th>id_angkot</th>
						<th>action	</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($sql as $key) { ?>
				<tr>
					<td><?php echo $key->nama_jalan; ?></td>
					<td><?php echo $key->id_angkot; ?></td>
					<td>
						<a href="<?php echo site_url('jalan/insert/')."$key->id_jalan"; ?>">add</a>
						<a href="<?php echo site_url('jalan/edit/')."$key->id_jalan"; ?>">edit</a>
						<a href="<?php echo site_url('jalan/delete/')."$key->id_jalan"; ?>">hapus</a>
					</td>
				</tr>
			<?php } ?>
				</tbody>
			</table>
		</div>
		</div>
</body>
</html>
<script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>