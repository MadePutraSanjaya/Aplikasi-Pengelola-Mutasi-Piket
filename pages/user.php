 <?php
    include "koneksi.php";
     $sql_query = "SELECT * FROM TB_USER";

       if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $user = $row['ID_USER'];
                                $personil = $row['ID_PERSONIL'];
                                $username = $row['USERNAME'];
                                $password = $row['PASSWORD'];
                                $level = $row['LEVEL'];
                                $status = $row['STATUS_USER'];
                            }
                          }
    
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
        <div class="button-table">
            <a class="btn btn-red mt-5" href="action/tambah.php">
                TAMBAH USER
            </a>
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
    <tr>
      <td><?php echo $user; ?></td>
      <td><?php echo $personil; ?></td>
      <td><?php echo $username; ?></td>
      <td><?php echo $password; ?></td>
      <td><?php echo $level; ?></td>
      <td><?php echo $status; ?></td>
      <td>
        <div class="button-aksi d-flex justify-content-between">
          <button>Edit</button>
          <button>Hapus</button>
        </div>
      </td>
    </tr>
    
    
  </tbody>
</table>
    </div>
   </div>
</body>
</html>