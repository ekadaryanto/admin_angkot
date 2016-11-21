<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
	<div class="container-fluid">
	<form action="<?php echo site_url('jalan/prosesinsert') ?>" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<form action="" method="post">
		<input type="hidden" name="id_jalan">
		nama_jalan <input type="text" name="nama_jalan"><br>
		id_angkot <input type="text" name="id_angkot"><br>
		<input type="submit" value="add">
	</form>
	</div>
	</div>
<?php $this->load->view('footer'); ?>