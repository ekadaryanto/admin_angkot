<?php $this->load->view('header'); ?>

<div class="container">
	<div class="container-fluid">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			
			<form action="<?php echo site_url('terminal/prosesinsert') ?>" method="POST" role="form">
				<legend>Form title</legend>

				<div class="form-group">
					<input type="text" name="id_jalan" class="form-control">
				</div>
			
				<div class="form-group">
					<input type="text" name="nama_jalan" class="form-control" id="" placeholder="Nama Jalan">
				</div>

				<div class="form-group">
					<?php foreach ($sql as $key) { ?>
						<?php echo ""; ?><input type="text" name="id_angkot" class="form-control" value="<?php $key->id_angkot; ?>">
					<?php } ?>
				</div>
				
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>	
		</div>
	</div>
	</div>
</body>
</html>
<script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>