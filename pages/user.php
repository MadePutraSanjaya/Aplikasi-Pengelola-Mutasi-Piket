 <?php
    include "koneksi.php";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/user.css">
</head> 
<body>
   <div class="table-top">
    <p class="font-w-400 text-white">Data User</p>
    <h1 class="text-dark">
        User
    </h1>
   </div>

   <div class="table-top">
    <div class="table-action pt-3 d-flex justify-content-between">
        <div class="button-table">
          <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Tambah User</a>
        </div>

        <div class="search-bar mt-5">
            <input class="text-white font-w-6" type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-main mt-5">
        <h2 class="text-dark font-w-6">Manajemen Data User</h2>
   <table class="table  table-hover mt-4">
  <thead class="text-white">
    <tr>
      <th class=" font-w-5" scope="col">ID</th>
      <th class=" font-w-5" scope="col">Name</th>
      <th class=" font-w-5" scope="col">Username</th>
      <th class=" font-w-5" scope="col">Password</th>
      <th class=" font-w-5" scope="col">Roles</th>
      <th class=" font-w-5" scope="col">Status</th>
      <th class=" font-w-5" scope="col">Aksi</th>
    </tr>
  </thead>
        <tbody>
          <?php 
          $query = mysqli_query($conn,"SELECT id_user,tb_personil.nama_personil,username,password,level,status_user 
                    FROM tb_user,tb_personil
                    WHERE tb_user.id_personil=tb_personil.id_personil");
          while ($data = mysqli_fetch_assoc($query)) 
          {
          ?>
            <tr>
              <td><?php echo $data['id_user']; ?></td>
              <td><?php echo $data['nama_personil']; ?></td>
              <td><?php echo $data['username']; ?></td>
              <td><?php echo $data['password']; ?></td>
              <td><?php echo $data['level']; ?></td>
              
                <?php 
                  if ($data['status_user']==1){
                    echo "<td>Aktif</td>";
                  }else{
                    echo "<td>Tidak Aktif</td>";
                  }
                ?>
              
              <td>
                <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_user']; ?>">Edit</a>
              </td>
            </tr>
            <!-- Modal Edit User-->
            <div class="modal fade" id="myModal<?php echo $data['id_user']; ?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Update Data User</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/ubah.php" method="post">

                        <?php
                          $id = $data['id_user']; 
                          $query_edit = mysqli_query($conn,"SELECT tb_user.*, tb_personil.nama_personil FROM tb_user, tb_personil WHERE tb_user.id_personil=tb_personil.id_personil AND tb_user.id_user='$id'");
                          while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="action" value="updateUser">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">

                        <div class="form-group">
                          <label>Nama Personil</label>
                          <input type="text" name="nama_personil" class="form-control" value="<?php echo $row['nama_personil']; ?>" disabled>      
                        </div>

                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>Role</label>
                          <input type="text" name="level" class="form-control" value="<?php echo $row['level']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="status" class="form-control" value="<?php echo $row['status_user']; ?>">      
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
        <!-- Modal Tambah -->
        <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah data user</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/tambah.php" method="post">
                    <input type="hidden" name="action" value="createUser">

                        <div class="form-group">   
                          <label>Personil</label>
                          <select name="personil" id="personil" class="form-control">
                              <option disabled selected> Pilih Personil </option>
                              <?php 
                                $sql=mysqli_query($conn,"SELECT * FROM tb_personil where id_personil NOT IN (SELECT id_personil FROM tb_user) and status_personil <> '0'");
                                while ($data=mysqli_fetch_array($sql)) {
                              ?>
                                <option value="<?=$data['id_personil']?>"><?=$data['nama_personil']?></option> 
                              <?php
                                }
                              ?>
                          </select>
                          
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" value="">  
                          
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" value="">
                          
                          <label>Role</label>
                          <select name="level" id="level"  class="form-control">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                          </select>        
                        </div>
                        
                        <div class="modal-footer">  
                          <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>       
                      </form>
                  </div>
                </div>
                
              </div>
            </div>

   <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>