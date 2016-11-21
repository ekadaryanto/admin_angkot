<?php $this->load->view('header'); ?>
	
	<div id="page-wrapper">
		<div class="container-fluid">
			<a href="<?php echo site_url('terminal/insert'); ?>">
				<button type="button" class="btn btn-default btn-sm">
          			<span class="glyphicon glyphicon-plus"></span> Insert
        		</button>
			</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>nama_terminal</th>
							<th>jumlah_angkot</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($sql as $key) { ?>
					<tr>
						<td><?php echo $key->nama_terminal; ?></td>
						<td><?php echo $key->jumlah_angkot; ?></td>
					<td>
						<a href="<?php echo site_url('terminal/edit/')."$key->id_terminal"; ?>">
							<button type="button" class="btn btn-default btn-sm">
                  				<span class="glyphicon glyphicon-edit"></span> Edit
                			</button>
						</a>
						<a href="<?php echo site_url('terminal/delete/')."$key->id_terminal"; ?>">
							<button type="button" class="btn btn-default btn-sm">
                  				<span class="glyphicon glyphicon-remove"></span> Hapus
                			</button>
						</a>
					</td>
				</tr>
			<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
</div>
<?php $this->load->view('footer'); ?>