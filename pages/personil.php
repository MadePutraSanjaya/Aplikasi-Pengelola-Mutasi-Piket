 <?php
    include "koneksi.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/personil.css">
</head> 
<body>
   <div class="table-top">
    <p class="font-w-400 text-white">Data Personil</p>
    <h1 class="text-dark">
        Personil
    </h1>
   </div>

   <div class="table-top">
    <div class="table-action pt-3 d-flex justify-content-between">
        <div class="button-table">
             <div class="button-table">
          <a href="#" type="button" class="btn-md btn btn-red mt-5" data-toggle="modal" data-target="#myModal">Tambah Personil</a>
        </div>

        <!-- Modal Tambah Personil -->
        <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Personil</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/tambah.php" method="post">
                    <input type="hidden" name="action" value="createPersonil">
                        <div class="form-group">
                          <label>ID Personil</label>
                          <input type="text" name="id_personil" class="form-control" value="">   

                          <label>Nama Personil</label>
                          <input type="text" name="nama_personil" class="form-control" value="">   

                          <label>Pangkat Personil</label>
                          <input type="text" name="pangkat_personil" class="form-control" value="">   
                           
                          <label>NRP Personil</label>
                          <input type="text" name="nrp_personil" class="form-control" value="">   

                          <label>Status Personil</label>
                          <select name="status_personil" id="status_personil" class="form-control">
                            <option value="Pilih Status" disabled selected>Pilih Status</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                          </select>
                        </div>
                        
                        <div class="modal-footer">  
                          <button type="submit" name="submit" class="btn btn-success">Simpan Data Personil</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>       
                      </form>
                  </div>
                </div>
                
              </div>
            </div>
        </div>

        <div class="search-bar mt-5">
            <input class="text-white font-w-6" type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-main mt-5">
        <h2 class="text-dark font-w-6">Manajemen Data Personil</h2>
   <table class="table  table-hover mt-4">
  <thead class="text-white">
    <tr>
      <th class=" font-w-5" scope="col">ID</th>
      <th class=" font-w-5" scope="col">Name Personil</th>
      <th class=" font-w-5" scope="col">Pangkat</th>
      <th class=" font-w-5" scope="col">NRP</th>
      <th class=" font-w-5" scope="col">Status</th>
      <th class=" font-w-5" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query = mysqli_query($conn,"SELECT * FROM tb_personil");
      while ($data = mysqli_fetch_assoc($query)) 
      {
      ?>
        <tr>
          <td><?php echo $data['id_personil']; ?></td>
          <td><?php echo $data['nama_personil']; ?></td>
          <td><?php echo $data['pangkat_personil']; ?></td>
          <td><?php echo $data['nrp_personil']; ?></td>
          <td><?php echo $data['status_personil']; ?></td>
          <td>
          <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_personil']; ?>">Edit</a>
          </td>
        </tr>

          <!-- Modal Edit User-->
          <div class="modal fade" id="myModal<?php echo $data['id_personil']; ?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Update Data User</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/ubah.php" method="post">

                        <?php
                          $id = $data['id_personil']; 
                          // $query_edit = mysqli_query($conn,"SELECT tb_user.*, tb_personil.nama_personil FROM tb_user, tb_personil WHERE tb_user.id_personil=tb_personil.id_personil AND tb_user.id_user='$id'");
                          $query_edit = mysqli_query($conn,"SELECT * FROM tb_personil WHERE id_personil = '$id'");
                          while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>

                        <input type="hidden" name="action" value="updatePersonil">
                        <input type="hidden" name="id_personil" value="<?php echo $row['id_personil']; ?>">

                        <div class="form-group">
                          <label>Nama Personil</label>
                          <input type="text" name="nama_personil" class="form-control" value="<?php echo $row['nama_personil']; ?>" disabled>      
                        </div>

                        <div class="form-group">
                          <label>Pangkat Personil</label>
                          <input type="text" name="pangkat_personil" class="form-control" value="<?php echo $row['pangkat_personil']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>NRP Personil</label>
                          <input type="text" name="nrp_personil" class="form-control" value="<?php echo $row['nrp_personil']; ?>">      
                        </div>

                          <div class="form-group">
                          <label>Status Personil</label>
                          <input type="text" name="status_personil" class="form-control" value="<?php echo $row['status_personil']; ?>">      
                        </div>

                        
                        <div class="modal-footer">  
                          <button type="submit" name="submit" class="btn btn-success">Simpan Perubahan Data</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>

                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
                
              </div>
            </div>


      <?php               
      } 
      ?>                
  </tbody>
</table>
    </div>
   </div>
</body>
</html>