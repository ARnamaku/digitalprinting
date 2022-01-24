<a href="?page=tambahan&action=tambah&id=<?php echo $_GET[id] ?>" class="btn btn-primary" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data Paket Tambahan</a>

<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<?php 
							$sql = mysqli_query($koneksi,"select * from paket");
							$data = mysqli_fetch_array($sql);

							 ?>
							 Data Paket <?php echo $data['nama_paket'] ?>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Tambahan</th>
											<th>Harga</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										<?php

											$sql = mysqli_query($koneksi,"select * from tambahan where id_paket='$_GET[id]'");
											$i = 1;
											while ($data = mysqli_fetch_array($sql)) {
											
										?>

										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $data ["nama"];?></td>
											<td><?php echo $data ["hrg"];?></td>
											<td>
												<a href="?page=tambahan&action=ubah&id=<?php echo $data['id_tambahan']; ?>" class="btn btn-info"><i class="fa fa-wrench" aria-hidden="true"></i> Ubah</a>
												<a onclick="return confirm('yakin ingin menghapus ?')" href="?page=tambahan&action=hapus&id=<?php echo $data['id_tambahan']; ?>"><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></a>
            

											</td>
										</tr>

										<?php    } ?>
									</tbody>

									</div>
							</div>
						</div>
					</div>
	</div>										
										   