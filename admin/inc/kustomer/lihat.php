

<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 Data Pelanggan
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
 		<tr>
 			<th>No.</th>
 			<th>Nama Pelanggan</th>
 			<th>Alamat</th>
 			<th>Telpon</th>
 			
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$no =1 ;
 		$sql = mysqli_query($koneksi,"select * from `order`,`kustomer` where kustomer.id_kustomer=order.id_kustomer");
 		while ($data = mysqli_fetch_array($sql)) {
 			?> 
 			<tr>
 			<td><?php echo $no++ ?></td>
 			<td><?php echo $data['nama_lengkap'] ?></td>
 			<td><?php echo $data['alamat'] ?></td>
 			<td><?php echo $data['no_hp'] ?></td>
 		</tr>
 			 <?php
 		}
 		 ?>
 		</tbody>
 	</table>

									</div>
							</div>
						</div>
					</div>
	</div>										
										   