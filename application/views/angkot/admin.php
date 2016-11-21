<?php $this->load->view('header'); ?>

  <div id="page-wrapper">
	<div class="container">
  <div class="container-fluid">
		<a href="<?php echo site_url('admin/insert'); ?>">
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-plus"></span> Insert
        </button>  
    </a>
  		<table class="table table-hover">
  			<thead>
  				<tr>
  					<th>Nama Angkot</th>
  					<th>Asal</th>
					<th>Tujuan</th>
					<th>Gambar</th>
					<th>Link</th>
					<th>Action</th>
  				</tr>
  			</thead>
  			<?php foreach ($sql as $key) { ?>
  			<tbody>
  				<tr>
  					<td><?php echo $key->nama_angkot; ?></td>
  					<td><?php echo $key->asal; ?></td>
  					<td><?php echo $key->tujuan; ?></td>
  					<td><img src="<?=base_url()?>assets/gambar/<?php echo $key->gambar; ?>" width="auto" height="100"></td>
  					<td>
              <a href="<?php echo $key->link;?>" target="_blank">
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-eye-open"></span> View
              </button>
              </a></td>
  					<td>
              <a href="<?php echo site_url('jalan/insert/').$key->id_angkot; ?>">
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-plus"></span> Add
                </button>
              </a>

              <a href="<?php echo site_url('admin/edit/').$key->id_angkot; ?>">
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
              </a> 

              <a href="<?php echo site_url('admin/delete/').$key->id_angkot; ?>">
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-remove"></span> Hapus
                </button>
              </a>
  					</td>
  				</tr>
  			</tbody>
  			<?php } ?>
  		</table>
      
	</div><!-- container fluid -->
  </div><!-- container -->
  </div><!-- page wrapper -->
  <?php $this->load->view('footer'); ?>