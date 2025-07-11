<?php include 'sidebar.php'; ?>
<!-- isinya -->
<br>
<h1 class="h3 mb-0">
    Data Produk Lemari
    <button class="btn btn-info btn-sm border-0 float-right" type="button" data-toggle="modal" data-target="#TambahProduk">Tambah Produk</button>
</h1>
<hr>
<table class="table table-striped table-sm table-bordered dt-responsive nowrap" id="table" width="100%">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Kode Produk</th>
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tgl Input</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $data_barang = mysqli_query($conn, "SELECT * FROM produk_lemari ORDER BY idproduk ASC");
        while ($d = mysqli_fetch_array($data_barang)) {
        ?>
            <tr class="text-center">
                <td class="align-middle"><?php echo $no++; ?></td>
                <td class="align-middle"><?php echo $d['kode_produk']; ?></td>
                <td class="align-middle"><img src="images/lemari/<?= $d['gambar']; ?>" width="100"></td>
                <td class="align-middle text-left"><?php echo $d['nama_produk']; ?></td>
                <td class="align-middle">Rp.<?php echo ribuan($d['harga_jual']); ?></td>
                <td class="align-middle"><?php echo $d['stok']; ?></td>
                <td class="align-middle"><?php echo $d['tgl_input']; ?></td>
                <td class="align-middle">
                    <button type="button" class="btn btn-warning btn-sm mr-1" data-toggle="modal" data-target="#EditProduk<?php echo $d['idproduk']; ?>">
                        <i class="fas fa-pencil-alt fa-xs mr-1"></i>Edit
                    </button>
                    <a class="btn btn-danger btn-sm" href="?hapus=<?php echo $d['idproduk']; ?>">
                        <i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus</a>
                </td>
            </tr>
            <!-- Modal Edit Produk -->
            <div class="modal fade" id="EditProduk<?php echo $d['idproduk']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idproduk" value="<?= $d['idproduk']; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $d['gambar']; ?>">
                            <div class="modal-header bg-purple">
                                <h5 class="modal-title text-white">Edit Produk</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="samll">Kode Produk :</label>
                                    <input type="text" name="Edit_Kode_Produk" value="<?php echo $d['kode_produk']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="samll">Gambar :</label> <br>
                                    <img src="images/lemari/<?= $d['gambar']; ?>" width="100"> <br>
                                    <input type="file" name="Tambah_gambar" class="form-control">
                                    <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i><br>
                                </div>

                                <div class="form-group">
                                    <label class="samll">Nama Produk :</label>
                                    <input type="text" name="Edit_nama_produk" value="<?php echo $d['nama_produk']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="samll">Harga Jual :</label>
                                    <input type="number" placeholder="0" name="Edit_Harga_Jual" min="0" value="<?php echo $d['harga_jual']; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="samll">Stok :</label>
                                    <input type="number" placeholder="0" name="Edit_Stok" min="0" value="<?php echo $d['stok']; ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success" name="SimpanEdit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end Modal Produk -->
        <?php } ?>
    </tbody>
</table>
<?php
if (isset($_POST['TambahProduk'])) {
    $kodeproduk = htmlspecialchars($_POST['Tambah_Kode_Produk']);
    // $gambar = htmlspecialchars($_POST['Tambah_gambar']);
    $nama_produk = htmlspecialchars($_POST['Tambah_nama_produk']);
    $harga_jual = htmlspecialchars($_POST['Tambah_Harga_Jual']);
    $stok = htmlspecialchars($_POST['Tambah_Stok']);



    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    } else {
        $gambar1 = upload();
    }

    $cekkode = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM produk_lemari WHERE kode_produk='$kodeproduk'"));
    if ($cekkode > 0) {
        echo '<script>alert("Maaf! kode produk sudah ada");history.go(-1);</script>';
    } else {
        $InputProduk = mysqli_query($conn, "INSERT INTO produk_lemari (kode_produk,gambar,nama_produk,harga_jual,stok)
     values ('$kodeproduk','$gambar','$nama_produk','$harga_jual','$stok')");
        if ($InputProduk) {
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert("Gagal Menambahkan Data");history.go(-1);</script>';
        }
    }
};
if (isset($_POST['SimpanEdit'])) {
    $idproduk1 = htmlspecialchars($_POST['idproduk']);
    $kodeproduk1 = htmlspecialchars($_POST['Edit_Kode_Produk']);
    // $gambar1 = htmlspecialchars($_FILES['Tambah_gambar']['name']);
    $nama_produk1 = htmlspecialchars($_POST['Edit_nama_produk']);
    $harga_jual1 = htmlspecialchars($_POST['Edit_Harga_Jual']);
    $stok1 = htmlspecialchars($_POST['Edit_Stok']);
    $gambarLama =  htmlspecialchars($_POST['gambarLama']);
    if ($_FILES['Tambah_gambar']['error'] === 4) {
        $gambar1 = $gambarLama;
    } else {
        $gambar1 = upload();
    }

    $CariProduk = mysqli_query($conn, "SELECT * FROM produk_lemari WHERE kode_produk='$kodeproduk1' and idproduk!='$idproduk1'");
    $HasilData = mysqli_num_rows($CariProduk);

    if ($HasilData > 0) {
        echo '<script>alert("Maaf! kode produk sudah ada");history.go(-1);</script>';
    } else {
        $cekDataUpdate =  mysqli_query($conn, "UPDATE produk_lemari SET kode_produk='$kodeproduk1',
        gambar='$gambar1',nama_produk='$nama_produk1',harga_jual='$harga_jual1',stok='$stok1'
         WHERE idproduk='$idproduk1'") or die(mysqli_connect_error());

        if ($cekDataUpdate) {
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert("Gagal Edit Data Produk");history.go(-1);</script>';
        }
    }
};

// fungsi gambar
function upload()
{
    $namaFile = $_FILES['Tambah_gambar']['name'];
    $ukuranFile = $_FILES['Tambah_gambar']['size'];
    $error = $_FILES['Tambah_gambar']['error'];
    $tmpName = $_FILES['Tambah_gambar']['tmp_name'];

    if ($error === 4) {
        echo " <script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }
    $ekstensiGmrValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGmr = explode('.', $namaFile);
    $ekstensiGmr = strtolower(end($ekstensiGmr));
    if (!in_array($ekstensiGmr, $ekstensiGmrValid)) {
        echo " <script>
            alert('Yang Anda upload bukan gambar!');
            </script>";
        die();
    }
    if ($ukuranFile > 1000000) {
        echo " <script>
            alert('Mohon maaf ukuran gambar terlalu besar, gambar yang direkomendasikan kurang dari 1MB!');
            </script>";
        die();
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGmr;

    move_uploaded_file($tmpName, 'images/lemari/' . $namaFileBaru);
    return $namaFileBaru;
}

if (!empty($_GET['hapus'])) {
    $idproduk1 = $_GET['hapus'];
    $hapus_data = mysqli_query($conn, "DELETE FROM produk_lemari WHERE idproduk='$idproduk1'");
    if ($hapus_data) {
        echo '<script>history.go(-1);</script>';
    } else {
        echo '<script>alert("Gagal Hapus Data Produk");history.go(-1);</script>';
    }
};
?>
<!-- Modal Tambah Produk -->
<div class="modal fade" id="TambahProduk" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">

            <?php
            // kode produk otomatis
            include "config.php";

            $sql = mysqli_query($conn, "select max(kode_produk) as maxID from produk_lemari");
            $data = mysqli_fetch_array($sql);

            $kode = $data['maxID'];

            $kode++;
            $kodejadi = sprintf("%03s", $kode);

            // kode produk otomatis end
            ?>

            <form method="post" enctype="multipart/form-data">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title text-white">Tambah Produk</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="samll">Kode Produk :</label>
                        <input type="text" name="Tambah_Kode_Produk" value="<?php echo $kodejadi; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label class="samll">Gambar Produk :</label>
                        <input type="file" name="Tambah_gambar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="samll">Nama Produk :</label>
                        <input type="text" name="Tambah_nama_produk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="samll">Harga Jual :</label>
                        <input type="number" placeholder="0" min="0" name="Tambah_Harga_Jual" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="samll">Stok :</label>
                        <input type="number" placeholder="0" min="0" name="Tambah_Stok" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="TambahProduk" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end Modal Produk -->

<!-- end isinya -->
<?php include 'footer.php'; ?>