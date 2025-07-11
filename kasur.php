<?php
include "topbar_produk.php";
?>

    <section id="pricing">
        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <h3 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
                    Pilihan Barang
                </h3>
                <h1 class="display-4 text-center mb-5">Kasur</h1>
                <div class="row1">
                    <?php
                    require('config.php');
                    $sql    = "SELECT * FROM produk_kasur";
                    $query  = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                        if ($data["stok"] < 1) continue;
                    ?>
                        <div class="col-md-4 text-center animate-box">
                            <div class="product">
                                <div class="product-grid" style="background-image:url(images/kasur/<?php echo $data["gambar"]; ?>);">

                                </div>
                                <div class="menu-card">
                                    <h3 class="menu-card-title"><?php echo $data["nama_produk"]; ?></h3> <br>
                                    <h4 class="menu-card-price text-primary">Rp. <?php echo number_format($data["harga_jual"], 0, ',', '.'); ?>,-</h4>

                                    <p>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+628117977222&text=<?php echo $data["nama_produk"]; ?>%20[<?php echo $data["kode_produk"]; ?>]%0ADengan%20harga%20Rp.%20<?php echo number_format($data["harga_jual"], 0, ',', '.'); ?>,-%0AApakah%20masih%20ada?" class="icon btn btn-success btn-outline-primary py-2 px-4 text-white ">
                                            <i class="fab fa-whatsapp"></i> Beli Sekarang
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

    <?php include 'footer-produk.php'; ?>