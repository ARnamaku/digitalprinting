<a href="?page=paket&action=tambah" class="btn btn-primary" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data</a>

<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 Data Paket
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama paket</th>
											<th>Harga</th>
											<th>Deskripsi</th>
											<th>Gambar</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										<?php

											$sql = mysqli_query($koneksi,"select * from paket");
											$i = 1;
											while ($data = mysqli_fetch_array($sql)) {
											
										?>

										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $data ["nama_paket"];?></td>
											<td><?php echo $data ["harga"];?></td>
											<td><?php echo $data ["isi"];?></td>
											<td><img src="image/<?php echo $data['gambar'] ?>" width="100"></td>
											
											<td>
												<a href="?page=paket&action=ubah&id=<?php echo $data['id_paket']; ?>" class="btn btn-info"><i class="fa fa-wrench" aria-hidden="true"></i> Ubah</a>
												<a onclick="return confirm('yakin ingin menghapus ?')" href="?page=paket&action=hapus&id=<?php echo $data['id_paket']; ?>"><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></a>
            

											</td>
										</tr>

										<?php    } ?>
									</tbody>

									</div>
							</div>
						</div>
					</div>
	</div>										
										   