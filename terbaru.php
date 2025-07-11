<?php include 'sidebar.php'; ?>
<!-- isinya -->
<br>
<h1 class="h3 mb-0">
    Info Terbaru
    <button class="btn btn-info btn-sm border-0 float-right" type="button" data-toggle="modal" data-target="#TambahProduk">Tambah Info</button>
</h1>
<hr>
<table class="table table-striped table-sm table-bordered dt-responsive nowrap" id="table" width="100%">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $data_barang = mysqli_query($conn, "SELECT * FROM info ORDER BY idproduk ASC");
        while ($d = mysqli_fetch_array($data_barang)) {
        ?>
            <tr class="text-center">
                <td class="align-middle"><?php echo $no++; ?></td>
                <td class="align-middle"><img src="images/info/<?= $d['gambar']; ?>" width="100"></td>
                <td class="align-middle text-left"><?php echo $d['nama_produk']; ?></td>
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
                                    <label class="samll">Gambar Sebelumnya :</label> <br>
                                    <img src="images/info/<?= $d['gambar']; ?>" width="100"> <br> <br>
                                    <label class="samll">Ganti :</label> <br>
                                    <input type="file" name="Tambah_gambar" class="form-control">
                                    <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i><br>
                                </div>

                                <div class="form-group">
                                    <label class="samll">Deskripsi :</label>
                                    <textarea rows="4" cols="50" name="Edit_nama_produk" value="<?php echo $d['nama_produk']; ?>" class="form-control" required></textarea>
                                    
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
    // $gambar = htmlspecialchars($_POST['Tambah_gambar']);
    $nama_produk = htmlspecialchars($_POST['Tambah_nama_produk']);
    $harga_jual = htmlspecialchars($_POST['Tambah_Harga_Jual']);



    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    } else {
        $gambar1 = upload();
    }

    $cekkode = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM info WHERE gambar='$gambar'"));
    if ($cekkode > 0) {
        echo '<script>alert("Maaf! kode produk sudah ada");history.go(-1);</script>';
    } else {
        $InputProduk = mysqli_query($conn, "INSERT INTO info (gambar,nama_produk)
     values ('$gambar','$nama_produk')");
        if ($InputProduk) {
            echo '<script>history.go(-1);</script>';
        } else {
            echo '<script>alert("Gagal Menambahkan Data");history.go(-1);</script>';
        }
    }
};
if (isset($_POST['SimpanEdit'])) {
    $idproduk1 = htmlspecialchars($_POST['idproduk']);
    // $gambar1 = htmlspecialchars($_FILES['Tambah_gambar']['name']);
    $nama_produk1 = htmlspecialchars($_POST['Edit_nama_produk']);
    $gambarLama =  htmlspecialchars($_POST['gambarLama']);
    if ($_FILES['Tambah_gambar']['error'] === 4) {
        $gambar1 = $gambarLama;
    } else {
        $gambar1 = upload();
    }

    $CariProduk = mysqli_query($conn, "SELECT * FROM info WHERE gambar='$gambar1' and idproduk!='$idproduk1'");
    $HasilData = mysqli_num_rows($CariProduk);

    if ($HasilData > 0) {
        echo '<script>alert("Maaf! kode produk sudah ada");history.go(-1);</script>';
    } else {
        $cekDataUpdate =  mysqli_query($conn, "UPDATE info SET 
        gambar='$gambar1',nama_produk='$nama_produk1'
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

    move_uploaded_file($tmpName, 'images/info/' . $namaFileBaru);
    return $namaFileBaru;
}

if (!empty($_GET['hapus'])) {
    $idproduk1 = $_GET['hapus'];
    $hapus_data = mysqli_query($conn, "DELETE FROM info WHERE idproduk='$idproduk1'");
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

          

            <form method="post" enctype="multipart/form-data">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title text-white">Tambah Produk</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="samll">Gambar :</label>
                        <input type="file" name="Tambah_gambar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="samll">Deskripsi :</label>
                        <textarea rows="4" cols="50" name="Tambah_nama_produk" class="form-control" required></textarea>
                        
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