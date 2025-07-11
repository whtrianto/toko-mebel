<?php
include "config.php";
session_start();
if ($_SESSION['log'] != "login") {
  header("location:login.php");
}
function ribuan($nilai)
{
  return number_format($nilai, 0, ',', '.');
}
$uid = $_SESSION['userid'];
$DataLogin = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM login WHERE userid='$uid'"));
$username = $DataLogin['username'];
$toko = $DataLogin['toko'];
$alamat = $DataLogin['alamat'];
$telepon = $DataLogin['telepon'];
$logo = $DataLogin['logo'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | <?php echo $toko ?></title>
  <link rel="icon" class="border" href="assets/images/<?php echo $logo ?>">
  <link rel="icon" class="border" href="assets/images/<?php echo $logo ?>" type="image/ico">
  <link href="assets/css/stylecoba.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="assets/vendor/datatables/responsive.bootstrap4.min.css" rel="stylesheet">
  <style>
    .bg-coklat {
      background-color: #A43939;
    }

    .border {
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="page-wrapper chiller-theme">
    <a id="show-sidebar" class="btn btn-sm btn-dark border-0" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper btn-success">
      <div class="sidebar-content btn-dark ">
        <div class="sidebar-brand">
          <a href="./"><i class="fas fa-home mr-1"></i><?php echo $toko ?></a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header btn-primary">
          <div class="user-pic" style="height:70px;width:70px;">
            <img class="border bg-primary img-responsive img-rounded img-thumbnail" src="assets/images/<?php echo $logo ?>" alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name"><?php echo $username ?>
            </span>
            <span class="user-role">Admin</span>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <!-- sidebar-header  -->

        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li>
              <a href="produk.php">
                <i class="fas fa-dollar"></i>
                <span>Promosi Produk</span>
              </a>
            </li>
            <div class="dropdown show">
              <li>
                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-sitemap"></i>
                  Kategori Produk
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item bg-dark" href="produk-sofa.php">
                    <i class="fa fa-couch"></i>
                    <span>Sofa</span>
                  </a>
                  <a class="dropdown-item bg-dark" href="produk-kasur.php">
                    <i class="fas fa-bed"></i>
                    <span>Kasur</span>
                  </a>
                  <a class="dropdown-item bg-dark" href="produk-lemari.php">
                    <i class="fa fa-toilet-portable"></i>
                    <span>Lemari Pakaian</span>
                  </a>
                  <a class="dropdown-item bg-dark" href="produk-lemari-dapur.php">
                    <i class="fa fa-boxes-packing"></i>
                    <span>Lemari Dapur</span>
                  </a>
                  <a class="dropdown-item bg-dark" href="produk-rak-tv.php">
                    <i class="fa fa-tv"></i>
                    <span>Rak TV</span>
                  </a>
                  <a class="dropdown-item bg-dark" href="produk-meja.php">
                    <i class="fa fa-chair"></i>
                    <span>Kursi & Meja</span>
                  </a>
                </div>

              </li>
            </div>
            <li>
              <a href="transaksi.php">
                <i class="fas fa-tv"></i>
                <span>Transaksi</span>
              </a>
            </li>
            <li>
              <a href="laporan.php">
                <i class="fa fa-clipboard"></i>
                <span>Laporan</span>
              </a>
            </li>


            <li>
              <a href="terbaru.php">
                <i class="fa fa-circle-info"></i>
                <span>Info Terbaru</span>
              </a>
            </li>

            <li>
              <a href="pengaturan.php">
                <i class="fa fa-cog"></i>
                <span>Pengaturan</span>
              </a>
            </li>
            <li>
              <a href="#Exit" data-toggle="modal">
                <i class="fa fa-power-off"></i>
                <span>Keluar</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <div class="sidebar-footer">
        Wahyu Trianto - <a target="_blank" rel="noopener noreferrer" href="https://ump.ac.id">
          UMP</a>
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">

        <div class="d-block d-sm-block d-md-none d-lg-none py-2"></div>