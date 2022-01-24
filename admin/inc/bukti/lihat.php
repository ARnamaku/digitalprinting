

     <div class="row">
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
               Data Transfer Pelanggan
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                  <th>No. Order</th>
                  <th>Tanggal</th>
                  <th>Nama Pelanggan</th>
                  <th>Bukti</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $sql = mysqli_query($koneksi,"select * from `order`,`bukti_tr`,`kustomer` where order.id_order=bukti_tr.id_order and 
                  kustomer.id_kustomer=order.id_kustomer order by bukti_tr.id_bukti desc");
                  while ($data = mysqli_fetch_array($sql)) {
                      ?> 
                      <tr>
                          <td><?php echo $data['id_order'] ?></td>
                          <td><?php echo $data['tanggal'] ?></td>
                          <td><?php echo $data['nama_lengkap'] ?></td>
                          <td><a href="../img/<?php echo $data['gambar_bukti'] ?>" target="_blank"><img src="../img/<?php echo $data['gambar_bukti'] ?>" width="100"></a></td>

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
    

                   
                       