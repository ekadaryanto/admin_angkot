<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
	<form action="<?php site_url('kritiksaran/DoComment') ?>" method="post">
		<textarea name="" id="" cols="30" rows="10"></textarea>
		<input type="submit" value="Comment">	
	</form>
	</div>
<?php $this->load->view('footer'); ?>