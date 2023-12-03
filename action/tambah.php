<?php 
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
}
 ?>
