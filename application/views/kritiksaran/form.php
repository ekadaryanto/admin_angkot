<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
	<form action="" method="POST" role="form">
		<legend>Form Komentar</legend>

		<input type="hidden" name="id_admin" value="<?php echo $this->session->userdata('id_login'); ?>">
		<div class="form-group">
			<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>			
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
<?php $this->load->view('footer'); ?>