<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
	<div class="container-fluid">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<form action="<?php echo site_url('terminal/prosesinsert') ?>" method="POST" role="form">
				<legend>Form title</legend>
			
				<div class="form-group">
					<input type="text" name="nama_terminal" class="form-control" id="" placeholder="Nama Terminal">
				</div>

				<div class="form-group">
					<input type="text" name="jumlah_angkot" class="form-control" id="" placeholder="Jumlah Angkot">
				</div>
				
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>	
		</div>
	</div>
	</div>
<?php $this->load->view('footer'); ?>