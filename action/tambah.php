<?php 

// user
    include('../koneksi.php');
if (isset($_POST['submit'])) {
  $user = $_POST['id_user'];
  $personil = $_POST['id_personil'];
  // $username = $_POST['username'];
  // $password = $_POST['password'];
  // $level = $_POST['level'];
  // $status = $_POST['status'];

  $query = "INSERT INTO tb_user (ID_USER,ID_PERSONIL) VALUES ('$user','$personil')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $_SESSION['success'] = "Data siswa berhasil ditambahkan.";
    header('Location: ../index.php?pages=user');
  } else {
    $_SESSION['error'] = "Data siswa gagal ditambahkan.";
    header('Location: ../index.php?pages=user');
  }
}


// personil


 ?>
