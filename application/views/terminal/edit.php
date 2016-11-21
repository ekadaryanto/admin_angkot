<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
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
</div>
<?php $this->load->view('footer'); ?>