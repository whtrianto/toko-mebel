<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Evas | Sprei & Selimut
    </title>
    <!-- Favicon -->
    <link rel="icon" href="faviconn.ico">
    <link rel="icon" href="faviconn.ico" type="image/ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet" />
    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/style2.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet" />

    <link rel="stylesheet" href="css1/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css1/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css1/bootstrap.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css1/flexslider.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css1/style.css">

    <!-- Modernizr JS -->
    <script src="js1/modernizr-2.6.2.min.js"></script>
</head>

<body style="background-color: #cacacad3; ">
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a href="index.php">
                        <?php
                            require('config.php');
                            $sql    = "SELECT * FROM login";
                            $query  = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <h1 class="m-0 text-secondary">
                                <?php echo $data["toko"]; ?>
                            </h1>
                        <?php } ?>
                        </a>
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

    <section id="pricing">
        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <h3 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
                    Pilihan Barang
                </h3>
                <h1 class="display-4 text-center mb-5">Sprei & Selimut</h1>
                <div class="row1">
                    <?php
                    require('config.php');
                    $sql    = "SELECT * FROM produk_sprei";
                    $query  = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-4 text-center animate-box">
                            <div class="product">
                                <div class="product-grid" style="background-image:url(images/sprei/<?php echo $data["gambar"]; ?>);">

                                </div>
                                <div class="menu-card">
                                    <h3 class="menu-card-title">- <?php echo $data["nama_produk"]; ?> -</h3> <br>
                                    <!-- <p class="menu-card-price text-dark">Rp. <?php echo number_format($data["harga_jual"], 0, ',', '.'); ?>,-</p> -->

                                    <p>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=628117977222&text=<?php echo $data["nama_produk"]; ?>%20dengan%20kode%20produk%20(<?php echo $data["kode_produk"]; ?>)%0AApakah%20masih%20ada?" class="icon btn btn-secondary btn-outline-primary py-2 px-4 text-white ">
                                            <i class="fas fa-shopping-cart "></i> Beli Sekarang
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

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="#">
                    <h1 class="text-secondary mb-3">
                        <span class="text-white">Toko</span>Evas
                    </h1>
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
            <div id="contact" class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Barang Lainnya:</h4>

                <p>
                    <a href="sofa.php" class="text-white">
                        <i class="fa fa-couch mr-2"></i>Sofa
                    </a>
                </p>
                <p>
                    <a href="baju.php" class="text-white">
                        <i class="fa fa-tshirt mr-2"></i>Pakaian
                    </a>
                </p>
                <p>
                    <a href="kasur.php" class="text-white">
                        <i class="fa fa-bed mr-2"></i>Kasur
                    </a>
                </p>
                <p>
                    <a href="rak-tv.php" class="text-white">
                        <i class="fa fa-tv mr-2"></i>Rak TV
                    </a>
                </p>
                <p>
                    <a href="meja.php" class="text-white">
                        <i class="fa fa-chair mr-2"></i>Kursi & Meja
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <br>
                <p>
                    <a href="lemari.php" class="text-white">
                        <i class="fa fa-toilet-portable mr-2"></i>Lemari Pakaian
                    </a>
                </p>
                <p>
                    <a href="lemari-dapur.php" class="text-white">
                        <i class="fa fa-boxes-packing mr-2"></i>Lemari Dapur
                    </a>
                </p>
                <p>
                    <a href="sprei.php" class="text-white">
                        <i class="fa fa-rug mr-2"></i>Sprei & Selimut
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
    <a href="#" class="btn btn-nm btn-secondary btn-outline-dark back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- jQuery -->
    <script src="js1/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js1/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js1/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js1/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js1/jquery.countTo.js"></script>
    <!-- Flexslider -->
    <script src="js1/jquery.flexslider-min.js"></script>
    <!-- Main -->
    <script src="js1/main.js"></script>

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