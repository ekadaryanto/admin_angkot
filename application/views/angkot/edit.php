<?php $this->load->view('header'); ?>

	<?php foreach ($sql as $key) { ?>
	<div id="page-wrapper">
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
			</form>
		</div>
	</div><!-- container-fluid -->
	</div><!-- page wrapper -->
	<?php } ?>

<?php $this->load->view('footer'); ?>