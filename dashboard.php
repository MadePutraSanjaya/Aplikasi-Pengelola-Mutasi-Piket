<?php
    session_start();
    include "koneksi.php";
    
      if($_SESSION['status']!="login"){
        header("location: index.php");
      }

      $level = $_SESSION['level'];


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Mutasi Command Center</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="dist/img/korps.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><strong>SICATAT</strong> | MUTASI</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <?php
          if ($level == "admin") {
            ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="personil.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Personil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pj.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penanggung Jawab</p>
                </a>
              </li>
            </ul>
          </li>
           
          <li class="nav-header">TRANSAKSI</li>
          <li class="nav-item">
            <a href="trx_mutasijaga.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Mutasi Piket
              </p>
            </a>
          </li>
            
          <?php
            } else {
              ?>
               <li class="nav-header">TRANSAKSI</li>
          <li class="nav-item">
            <a href="trx_mutasijaga.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Mutasi Piket
              </p>
            </a>
          </li>
              <?php 
            }

            ?>  

          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
            <a href="laporan.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Laporan Mutasi Jaga</p>
            </a>
          </li>

          <li class="nav-header">KELUAR</li>
          <li class="nav-item">
            <a href="./action/logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
            <!-- <h5 class="mt-3">hello <?php echo $level;?></h5> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

              <?php
                $query = "SELECT COUNT(id_user) as total_user FROM tb_user WHERE status_user='1'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    $totalUser = $row['total_user'];
                } else {
                    $totalUser = 0;
                    echo "Error: " . mysqli_error($conn);
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Data User</span>
                <span class="info-box-number"><?php echo $totalUser; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-user-friends"></i></span>

              <?php
                $query = "SELECT COUNT(id_personil) as total_personil FROM tb_personil WHERE status_personil='1'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    $totalPersonil = $row['total_personil'];
                } else {
                    $totalPersonil = 0;
                    echo "Error: " . mysqli_error($conn);
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Data Personil</span>
                <span class="info-box-number"><?php echo $totalPersonil; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-boxes"></i></span>

               <?php
                $query = "SELECT COUNT(id_barang) as total_barang FROM tb_barang WHERE status_brg='1'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    $totalBarang = $row['total_barang'];
                } else {
                    $totalBarang = 0;
                    echo "Error: " . mysqli_error($conn);
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Data Barang</span>
                <span class="info-box-number"><?php echo $totalBarang; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          

          <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mutasi Piket Jaga</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            $query = mysqli_query($conn, "SELECT * from tb_mutasi_jaga WHERE status_mutasi='0'");
            $data_exists = false;

            while ($data = mysqli_fetch_assoc($query)) {
                $data_exists = true;
            ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Analisis</th>
                            <th>Evaluasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $data['id_mutasi_jaga']; ?></td>
                            <td><?php echo $data['tgl_mutasi']; ?></td>
                            <td><?php echo $data['analisis']; ?></td>
                            <td><?php echo $data['evaluasi']; ?></td>

                            <?php
                            if ($data['status_mutasi'] == 1) {
                                echo "<td>Selesai</td>";
                            } else {
                                echo "<td>Pending</td>";
                            }
                            ?>

                            <td>
                                <a href="detil_mutasijaga.php?id=<?php echo $data['id_mutasi_jaga']; ?>" type="button" class="btn btn-md btn-warning">Detil</a>
                            </td>
                        </tr>

                    <?php
                }
                    ?>
                    </tbody>
                </table>

                <?php
                if (!$data_exists) {
                    echo "<p style='text-align: center;'>Tidak Ada Data Mutasi</p>";
                }
                ?>
        </div>
    </div>
</div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
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
                                $sql=mysqli_query($conn,"SELECT * FROM tb_personil where id_personil NOT IN (SELECT id_personil FROM tb_user WHERE status_user='1') and status_personil <> '0'");
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
        <!-- End of Modal Tambah -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>&copy; 2023</strong> Putu Gede Putra Jaya
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
