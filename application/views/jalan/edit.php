<?php $this->load->view('header'); ?>
	<div id="page-wrapper">
	<?php foreach ($sql as $key) { ?>
	<form action="<?php echo site_url('jalan/processEdit') ?>" method="post">
		<input type="hidden" name="id_jalan" value="<?php echo $key->id_jalan; ?>">
		nama_jalan <input type="text" name="nama_jalan" value="<?php echo $key->nama_jalan; ?>"><br>
		id_angkot <input type="text" name="id_angkot" value="<?php echo $key->id_angkot; ?>"><br>
		<input type="submit" value="edit">
	</form>
	<?php } ?>
	</div>
<?php $this->load->view('footer'); ?>