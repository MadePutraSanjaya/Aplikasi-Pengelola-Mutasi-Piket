<?php 
    // session_start();

    include('../koneksi.php');

// $query_kelas = "SELECT * FROM TB_USER";
// $result_kelas = mysqli_query($conn, $query_kelas);

if (isset($_POST['submit'])) {
  $user = $_POST['id_user'];
  $personal = $_POST['id_personal'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $status = $_POST['status'];

  $query = "INSERT INTO TB_USER (ID_USER, ID_PERSONIL, USERNAME, PASSWORD, LEVEL, STATUS_USER) VALUES ('$user', '$personal', '$username', '$password', '$level', '$status'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $_SESSION['success'] = "Data siswa berhasil ditambahkan.";
    header('Location: ');
  } else {
    $_SESSION['error'] = "Data siswa gagal ditambahkan.";
    header('Location: ../index.php?pages=user');
  }
} 

  // include_once('header.php');

  // if (!isset($_SESSION['username'])) {
  // header("Location: ../../../../../login.php");
  // exit;
  // }
 ?>

    <section>
		<h2>Tambah Data Siswa</h2><br>
		<form method="POST" action="">
			<label for="id_user">ID USER:</label><br>
			<input type="text" name="id_user" placeholder="Masukkan NISN Anda!" required><br><br>
			<label for="id_personal">ID Personal:</label><br>
			<input type="text" name="id_personal" placeholder="Masukkan NIS Anda!" required><br><br>
			<label for="username">Username:</label><br>
			<input type="text" name="username" placeholder="Masukkan nama Anda!" required><br><br>
      <label for="password">Password:</label><br>
			<input type="text" name="password" placeholder="Masukkan nama Anda!" required><br><br>
			
      <label for="level">Level:</label><br>
      <select name="level" id="level">
        <option value="pilih level" disabled>Pilih Level</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>

      <label for="status">Status User:</label><br>
      <select name="status" id="status">
        <option value="pilih status" disabled>Pilih Status</option>
        <option value="aktif">Aktif</option>
        <option value="non-aktif">Non Aktif</option>
      </select>
      <input type="submit" name="submit" value="Tambah">
      <!-- <a href="../../siswa.php"><button type="button">Batal</button></a> -->
    </form>

    
  </section>

<?php
    include_once('footer.php');
?>