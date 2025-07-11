<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require('config.php');
  $sql    = "SELECT * FROM login";
  $query  = mysqli_query($conn, $sql);
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <meta charset="utf-8" />
    <title><?php echo $data["toko"]; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link rel="icon" href="assets/images/<?php echo $data["logo"]; ?>">
    <link rel="icon" href="assets/images/<?php echo $data["logo"]; ?>" type="image/ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/style112.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet" />

  <?php } ?>
</head>

<body style="background-color: #cacacad3;">
  <!-- Topbar Start -->
  <div class="container-fluid bg-primary py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left text-lg-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-left">
            <a class="text-white pr-3" href="produk.php"><i class="fa fa-user"> Admin</i></a>
          </div>
        </div>
        <div class="col-md-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a class="text-white px-3" href="https://www.facebook.com/eva.priyanti.1023">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-white px-3" href="https://www.instagram.com/toko_evas/">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-white px-3" href="https://wa.me/+628117977222">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a class="text-white px-3" href="http://m.me/eva.priyanti.1023">
              <i class="fab fa-facebook-messenger"></i>
            </a>
            <a class="text-white px-3" href="mailto:evasinterior@gmail.com">
              <i class="fa fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
        <div class="navbar-brand">
          <?php
          require('config.php');
          $sql    = "SELECT * FROM login";
          $query  = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <h1 class="m-0 text-secondary">
              <span class="text-primary"><?php echo $data["toko"]; ?></span>
            </h1>
          <?php } ?>

          <h5 class="m-0 text-secondary">
            <span class="text-primary">TOKO MEBEL</span>
          </h5>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="#about" class="nav-item nav-link">Tentang Kami</a>
            <a href="#services" class="nav-item nav-link">Produk</a>
            <a href="#pricing" class="nav-item nav-link">Promosi</a>
            <a href="#contact" class="nav-item nav-link">Kontak</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/judul-2.png" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">
                Produk Berbagai Merk
              </h4>
              <h1 class="display-3 text-white mb-md-4">
                Kualitas Adalah Prioritas Kami
              </h1>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/judul-3.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">
                Kasur empuk & nyaman
              </h4>
              <h1 class="display-3 text-white mb-md-4">
                Berbagai Pilihan yang Terbaik
              </h1>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/judul-4.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">
                Harga Terjangkau
              </h4>
              <h1 class="display-3 text-white mb-md-4">
                Berbagai Pilihan Produk dengan Harga Terbaik
              </h1>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-secondary" style="width: 45px; height: 45px">
          <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
      </a>
      <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-secondary" style="width: 45px; height: 45px">
          <span class="carousel-control-next-icon mb-n2"></span>
        </div>
      </a>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Info kontak Start -->
  <div class="container-fluid contact-info mt-5 mb-4">
    <div class="container" style="padding: 0 30px">
      <div class="row">
        <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px">
          <div class="d-inline-flex text-left">
            <a href="#contact" class="m-0 text-white"><i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i></a>
            <div class="d-flex flex-column">
              <a href="#contact" class="m-0 text-white">
                <h5 class="text-white font-weight-medium">Lokasi Kami</h5>
              </a>
              <p class="m-0 text-white">Somawangi Rt.01 Rw.02</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px">
          <div class="d-inline-flex text-left">
            <a href="mailto:evasinterior@gmail.com" class="m-0 text-white"><i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i></a>
            <div class="d-flex flex-column">
              <a href="mailto:evasinterior@gmail.com" class="m-0 text-white">
                <h5 class="text-white font-weight-medium">Email</h5>
              </a>
              <p class="m-0 text-white">evasinterior@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px">
          <div class="d-inline-flex text-left">
            <a href="https://wa.me/+628117977222" class="m-0 text-white"><i class="fa fa-2x fa-phone text-white m-0 mr-3"></i></a>
            <div class="d-flex flex-column">
              <a href="https://wa.me/+628117977222" class="m-0 text-white">
                <h5 class="text-white font-weight-medium">Hubungi Kami</h5>
              </a>
              <p class="m-0 text-white">+62 8117 977 222</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Info kontak End -->

  <!-- Tentang Kami Start -->
  <section id="about">
    <div class="container-fluid py-5">
      <div class="container pt-0 pt-lg-4">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img class="img-fluid" src="img/about1.jpg" alt="" />
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
            <h6 class="text-secondary text-uppercase font-weight-medium mb-3">
              Tentang Kami
            </h6>
            <h1 class="mb-4">Kualitas Adalah Tujuan Kami</h1>
            <h5 class="font-weight-medium font-italic mb-4">
              Kami mengutamakan kualitas dan kepuasan pelanggan
            </h5>
            <p class="mb-2">
              Kami tidak pernah lelah untuk memberitahukan kinerja kami. Kami
              berfokus pada kualitas kerapian, kebersihan, dan keawetan barang.
              Hingga barang yang kami sajikan adalah barang yang terbaik. Desain produk yang kami
              jual selau update menyesuaikan dengan trend dan selera anda. Dan
              kami akan selalu mengedepankan Pelanggan.
            </p>
            <div class="row">
              <div class="col-sm-6 pt-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-check text-primary mr-2"></i>
                  <p class="text-secondary font-weight-medium m-0">
                    Kualitas Barang
                  </p>
                </div>
              </div>
              <div class="col-sm-6 pt-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-check text-primary mr-2"></i>
                  <p class="text-secondary font-weight-medium m-0">
                    Kirim Tepat Waktu
                  </p>
                </div>
              </div>
              <div class="col-sm-6 pt-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-check text-primary mr-2"></i>
                  <p class="text-secondary font-weight-medium m-0">
                    Dikerjakan Oleh Tenaga Professional
                  </p>
                </div>
              </div>
              <div class="col-sm-6 pt-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-check text-primary mr-2"></i>
                  <p class="text-secondary font-weight-medium m-0">
                    Harga Terbaik
                  </p>
                </div>
              </div>
              <div class="col-sm-6 pt-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-check text-primary mr-2"></i>
                  <p class="text-secondary font-weight-medium m-0">
                    100% Garansi Bila Barang Cacat
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang Kami End -->

  <!-- produk Start -->
  <section id="services">
    <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
          Layanan Kami
        </h6>
        <h1 class="display-4 text-center mb-5">Apa Yang Kami Tawarkan?</h1>
        <div class="row1">
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="sofa.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fa fa-3x fa-couch text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Sofa</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="kasur.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fas fa-3x fa-bed text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Kasur</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="lemari.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fas fa-3x fa-toilet-portable text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Lemari Pakaian</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="lemari-dapur.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fas fa-3x fa-boxes-packing text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Lemari Dapur</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="rak-tv.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fas fa-3x fa-tv text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Rak TV</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 pb-1">
            <a href="meja.php" class="text-white">
              <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px">
                <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px">
                  <i class="fas fa-3x fa-chair text-secondary"></i>
                </div>
                <h4 class="font-weight-bold m-0">Kursi & Meja</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- produk End -->

  <!-- Keunggulan Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
          <h6 class="text-secondary text-uppercase font-weight-medium mb-3">
            Keunggulan Kami
          </h6>
          <h1 class="mb-4">Mengapa Memilih Kami?</h1>
          <div class="d-flex align-items">
            <i class="fa fa-check text-primary mr-2"></i>
            <p>
              Bahan yang kami tawarkan adalah bahan-bahan dengan kualitas dan
              merk terbaik. Kami tidak pernah main-main dengan kualitas.
              Barang-barang yang kami jual akan tahan sampai bertaun-taun.
              <?php
              require('config.php');
              $sql    = "SELECT * FROM login";
              $query  = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <?php echo $data["toko"]; ?>

              <?php } ?> akan selalu senang hati melayani Anda saat berbelanja. </p>
          </div>
          <div class="d-flex align-items">
            <i class="fa fa-check text-primary mr-2"></i>
            <p>
              <?php
              require('config.php');
              $sql    = "SELECT * FROM login";
              $query  = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <?php echo $data["toko"]; ?>

              <?php } ?> memiliki beberaba cabang yang tersebar di area Mandiraja dan Klampok untuk memudahkan pelanggan memilih furniture secara langsung. </p>

          </div>
          <div class="d-flex align-items">
            <i class="fa fa-check text-primary mr-2"></i>
            <p>
              <?php
              require('config.php');
              $sql    = "SELECT * FROM login";
              $query  = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <?php echo $data["toko"]; ?>

              <?php } ?> juga melayani pembelian secara online melalui Whatsapp, Facebook dan Instagram untuk memilih produk furniture yang diinginkan.
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">30</h1>
              <h5 class="font-weight-bold">Tahun Berpengalaman</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">9</h1>
              <h5 class="font-weight-bold">Karyawan</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">3500</h1>
              <h5 class="font-weight-bold">Pelanggan Yang Puas</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">5450</h1>
              <h5 class="font-weight-bold">Stok Barang Yang Ditawarkan</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
            <i class="fa fa-5x fa-store text-white mb-5"></i>
            <h1 class="display-1 text-white mb-3">5+</h1>
            <h1 class="text-white m-0">Cabang</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Keunggulan End -->

  <!-- Proses Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
        Proses Transaksi
      </h6>
      <h1 class="display-4 text-center mb-5">Bagaimana Kami Bekerja?</h1>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">1</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Pesan Online/Offline</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">2</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">
              Pembayaran Via Rekening/COD
            </h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">3</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Pengantaran</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">4</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Barang Sampai</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Proses End -->

  <!-- Promo Plan Start -->
  <section id="pricing">
    <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
          Produk Sedang Diskon
        </h6>
        <h1 class="display-4 text-center mb-5"><i class="fa fa-bolt" style="color: #ffff00;"></i> Flash Sale <i class="fa fa-bolt" style="color: #ffff00;"></i></h1>
        <div class="row1">
          <?php
          require('config.php');
          $sql    = "SELECT * FROM produk";
          $query  = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($query)) {
            if ($data["stok"] < 1) continue;
          ?>
            <div class="col-md-4 text-center animate-box">
              <div class="product">
                <div class="product-grid" style="background-image:url(images/rekomen/<?php echo $data["gambar"]; ?>);">

                </div>
                <div class="menu-card">
                  <h3 class="menu-card-title"><?php echo $data["nama_produk"]; ?></h3> <br>
                  <h5 class="menu-card-price text-secondary"><s>
                      Rp. <?php echo number_format($data["harga_normal"], 0, ',', '.'); ?>,-</h5>
                  </s>
                  <h4 class="menu-card-price text-primary">Rp. <?php echo number_format($data["harga_jual"], 0, ',', '.'); ?>,-</h4>
                  <br>
                  <p>

                    <a target="_blank" href="https://api.whatsapp.com/send?phone=628117977222&text=Promo%20Produk%20<?php echo $data["nama_produk"]; ?>%20[<?php echo $data["kode_produk"]; ?>]%0Adengan%20harga%20normal%20Rp.%20<?php echo number_format($data["harga_normal"], 0, ',', '.'); ?>,-%0ASekarang%20diskon%20menjadi%20Rp.%20<?php echo number_format($data["harga_jual"], 0, ',', '.'); ?>,-%0AApakah%20masih%20tersedia?" class="icon btn btn-success btn-outline-primary py-2 px-4 text-white "><i class="fa fa-bolt" style="color: #ffff00;"></i> <i class="fab fa-whatsapp "></i> Beli Sekarang <i class="fa fa-bolt" style="color: #ffff00;"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Promo Plan End -->

  <!-- update Start -->
  <div class="container-fluid mt-5 pb-2">
    <div class="container">
      <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
        Info Terbaru
      </h6>
      <h1 class="display-4 text-center mb-5">Info Terbaru Dari Kami</h1>
      <div class="row1">
        <?php
        require('config.php');
        $sql    = "SELECT * FROM info";
        $query  = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($query)) {
        ?>

          <div class="col-lg-4 mb-2">
            <div class="shadow mb-4">
              <div class="position-relative">
                <img class="img-fluid w-100" src="images/info/<?php echo $data["gambar"]; ?>" alt="" />
              </div>
              <p class="m-0 p-4">
                <?php echo $data["nama_produk"]; ?>
              </p>
            </div>
          </div>
        <?php } ?>



      </div>
    </div>
  </div>
  <!-- update End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-white px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="#">
          <?php
          require('config.php');
          $sql    = "SELECT * FROM login";
          $query  = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <h1 class="text-secondary mb-3">
              <?php echo $data["toko"]; ?>
            </h1>
          <?php } ?>
        </a>
        <p>
          Toko dengan mengutamakan kualitas karena ditunjang oleh alat yang
          terbaik dan tenaga berpengalaman ahli dibidangnya.
        </p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="https://www.facebook.com/eva.priyanti.1023"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="https://www.instagram.com/toko_evas/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h4 class="text-white mb-4">Hubungi Kami</h4>
        <p>Silakan hubungi dan pesan sekarang juga.<br>Pilihlah barang berkualitas dan
          dijamin ori.</p>
        <a class="text-white" href="https://wa.me/628117977222">
          <p><i class="fab fa-whatsapp mr-2"></i>+62 8117 977 222</p>
        </a>
        <a class="text-white" href="http://m.me/eva.priyanti.1023">
          <p><i class="fab fa-facebook-messenger mr-2"></i>tokoevas</p>
        </a>
        <a class="text-white" href="mailto:evasinterior@gmail.com">
          <p><i class="fa fa-envelope mr-2"></i>evasinterior@gmail.com</p>
        </a>
      </div>
      <div id="contact" class="col-lg- col-md-6 mb-5">
        <?php
        require('config.php');
        $sql    = "SELECT * FROM login";
        $query  = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <h4 class="text-white mb-4">Cabang <?php echo $data["toko"]; ?></h4>
        <?php } ?>


        <p>
          <a href="https://goo.gl/maps/GF5GGahxrNEiG4zT7" class="text-white">
            <i class="fa fa-map-marker-alt mr-2"></i>Evas 1 (Outlet) depan Terminal Mandiraja, Mandiraja, Banjarnegara
          </a>
        </p>
        <p>
          <a href="https://goo.gl/maps/udeKErj48zUpuqVP7" class="text-white">
            <i class="fa fa-map-marker-alt mr-2"></i>Evas 2 (Outlet) depan SPBU Klampok, Komplek PJKA Klampok, Banjarnegara
          </a>
        </p>
        <p>
          <a href="https://goo.gl/maps/c9of2bfZKKEnf2Qb6" class="text-white">
            <i class="fa fa-map-marker-alt mr-2"></i>Evas 3 (Gudang) Somawangi RT 1 RW 2, Mandiraja, Banjarnegara
          </a>
        </p>
        <p>
          <a href="https://goo.gl/maps/FrAqniGEk2ypuuyC7" class="text-white">
            <i class="fa fa-map-marker-alt mr-2"></i>Evas 4 (Gudang) Somawangi RT 5 RW 3, Mandiraja, Banjarnegara
          </a>
        </p>
        <p>
          <a href="https://goo.gl/maps/Ec7qqdZBKe8wUTLW7" class="text-white">
            <i class="fa fa-map-marker-alt mr-2"></i>Evas 5 (Outlet) Somawangi RT 5 RW 3, Mandiraja, Banjarnegara
          </a>
        </p>
      </div>
      <p class="col-md-6 mb-4 text-white">
        Created by <i class="fa fa-shield-heart text-danger"></i>
        <a href="https://portofolio.wahyutri1771.repl.co/" class="text-white">Wahyu Trianto</a>
      </p>
    </div>
  </div>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-secondary btn-outline-dark back-to-top"><i class="fa fa-angle-double-up"></i></a>
  <!-- feather icon -->
  <script>
    feather.replace();
  </script>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>