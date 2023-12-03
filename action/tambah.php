<?php 
include('../koneksi.php');

// user
    include('../koneksi.php');
if ($_POST['personil'] == NULL){
  header('Location: ../index.php?pages=user');
}else{
if (isset($_POST['submit'])) {
  $personil = $_POST['personil'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $query = "INSERT INTO tb_user (ID_PERSONIL,USERNAME,PASSWORD,LEVEL,STATUS_USER) 
            VALUES ('$personil','$username','$password','$level','1')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header('Location: ../index.php?pages=user');
  } else {
    header('Location: ../index.php?pages=user');
  }
}


// personil
if (isset($_POST['submitPersonil'])) {
  $id_personil = $_POST['id_personil'];
  $nama_personil = $_POST['nama_personil'];
  $pangkat_personil = $_POST['pangkat_personil'];
  $nrp_personil = $_POST['nrp_personil'];
  $status_personil = $_POST['status_personil'];

  $queryPersonil = "INSERT INTO tb_personil (ID_PERSONIL, NAMA_PERSONIL, PANGKAT_PERSONIL, NRP_PERSONIL	, STATUS_PERSONIL ) VALUES ('$id_personil','$nama_personil', '$pangkat_personil','$nrp_personil','$status_personil')";
  $result = mysqli_query($conn, $queryPersonil);

  if ($result) {
    $_SESSION['success'] = "Data siswa berhasil ditambahkan.";
    header('Location: ../index.php?pages=personil');
  } else {
    $_SESSION['error'] = "Data siswa gagal ditambahkan.";
  }
}

}
 ?>
