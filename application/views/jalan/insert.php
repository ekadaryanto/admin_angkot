<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
	<div class="container-fluid">
	<form action="<?php echo site_url('jalan/prosesinsert') ?>" method="POST" role="form">
		<legend>Form title</legend>
		<input type="hidden" name="id_jalan">
		<div class="form-group">
			<label for="">Nama Jalan</label>
			<input type="text" class="form-control" id="" name="nama_jalan" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Id Angkot</label>
			<input type="text" class="form-control" id="" name="id_angkot" placeholder="Input field">
		</div>
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
<?php $this->load->view('footer'); ?>