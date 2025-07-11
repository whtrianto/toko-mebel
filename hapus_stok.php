<!-- catatan tok anu salah....
    <?php
require('config.php');
$id = $_GET['id'];
$query_get = mysqli_query($conn,"SELECT * from cart where id_cart = '$id'");
$get_data = mysqli_fetch_array($query_get);
$a = $get_data ['kode_produk'];
$b = $get_data ['qty'];
$get_pr = mysqli_query($conn,"SELECT * FROM produk where kode_produk = '$a'");
$data_pr = mysqli_fetch_array($get_pr);
$stok = $data_pr['stok'];
$total_stok = $stok - $b;
$query_up = mysqli_query($conn, "UPDATE produk SET stok = '$total_stok'");
if($query_up){
    $query = mysqli_query($conn, "DELETE FROM cart where id_cart = '$id'");
    header('location: laporan.php');
}
?> -->