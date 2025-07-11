<?php
    require('config.php');
    $sql    = "SELECT * FROM login";
    $query  = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($query)) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Produk | <?php echo $data["toko"]; ?>
    </title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/<?php echo $data["logo"]; ?>">
    <link rel="icon" href="assets/images/<?php echo $data["logo"]; ?>" type="image/ico">

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
<?php } ?>

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