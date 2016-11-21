<?php $this->load->view('header'); ?>
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="col-md-12">
				<h3 align="center">Rute Jalan</h3>
			</div>
		<a href="<?php echo site_url('jalan/insert'); ?>"><button type="button" class="btn btn-default"><i class="fa fa-user-plus"></i> Insert</button></a>
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
	</div>
<?php $this->load->view('footer'); ?>