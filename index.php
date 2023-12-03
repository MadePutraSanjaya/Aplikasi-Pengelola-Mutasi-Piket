<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
    integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <!-- Script -->
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/template.css">
    <title>Hello, world!</title>
  </head>
  <body>


    <div class="sidebar"  id="body-pd">
    <header class="header" id="header-pd" style="background: #F4F7FE !important">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="header_img">
        <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
      </div>
    </header>
    <div class="l-navbar bg-sidebar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo">
            <i class="bx bx-layer nav_logo-icon"></i>
            <span class="nav_logo-name">BBBootstrap</span>
          </a>
          <div class="nav_lis">
            <a href="index.php?pages=user" class="nav_link text-white color-active">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="index.php?pages=user" class="nav_link text-white">
              <i class="bx bx-user nav_icon"></i>
              <span class="nav_name">Users</span>
            </a>
            <a href="index.php?pages=personil" class="nav_link text-white">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Personil</span>
            </a>
            <a href="index.php?pages=barang" class="nav_link text-white">
              <i class="bx bx-bookmark nav_icon"></i>
              <span class="nav_name">Barang</span>
            </a>
            <a href="index.php?pages=mutasi-jaga" class="nav_link text-white">
              <i class="bx bx-folder nav_icon"></i>
              <span class="nav_name">Mutasi Jaga</span>
            </a>
            <a href="index.php?pages=mutasi-jaga-edit" class="nav_link text-white">
              <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
              <span class="nav_name">Mutasi Jaga Edit</span>
            </a>
          </div>
        </div>
        <a href="#" class="nav_link text-white">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">SignOut</span>
        </a>
      </nav>
    </div>

    <main>
      <div class="height-100 bg main">
          <?php
        if (isset($_GET['pages'])) {
            $pages = $_GET['pages'];
            switch ($pages) {
              case 'tentang':
                  include 'tentang.php';
                  break;
                case 'user':
                    include './pages/user.php';
                    break;
                case 'personil':
                    include './pages/personil.php';
                    break;
                case 'barang':
                    include './pages/barang.php';
                    break;
                    case 'mutasi-jaga':
                      include './pages/mutasi_jaga.php';
                      break;
                      case 'mutasi-jaga-edit':
                        include './pages/mutasi_jaga_detail.php';
                        break;
                default:
                    echo 'Halaman tidak ditemukan.';
            }
        } else {
            include 'te.php';
        }
        ?>
      </div>
    </main>


    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="./script/script.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
