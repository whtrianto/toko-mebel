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
                <h4 class="text-white mb-4">Hubungi Kami:</h4>
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
                <!-- <p>
                    <a href="baju.php" class="text-white">
                        <i class="fa fa-tshirt mr-2"></i>Pakaian
                    </a>
                </p> -->
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
                <!-- <p>
                    <a href="sprei.php" class="text-white">
                        <i class="fa fa-rug mr-2"></i>Sprei & Selimut
                    </a>
                </p> -->
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