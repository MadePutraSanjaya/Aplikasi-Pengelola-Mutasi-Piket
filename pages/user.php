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
        USER
    </h1>
   </div>

   <div class="table-top">
    <div class="table-action pt-3 d-flex justify-content-between">
        <div class="button-table ">
          <a href="#" type="button" class="btn-md btn btn-red mt-5" data-toggle="modal" data-target="#myModal">TAMBAH USER</a>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/tambah.php" method="post">

                        <div class="form-group">
                          <label>ID</label>
                          <input type="text" name="id_user" class="form-control" value="">    
                          <label>ID Personil</label>
                          <input type="text" name="id_personil" class="form-control" value="">   
                        </div>
                        
                        <div class="modal-footer">  
                          <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>       
                      </form>
                  </div>
                </div>
                
              </div>
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
              <td><?php echo $data['status_user']; ?></td>
            </tr>

          <?php               
          } 
          ?>
        </tbody>
</table>
    </div>
   </div>
</body>
</html>