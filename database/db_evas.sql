/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : tokoevas

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 09/01/2024 12:16:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `idcart` int NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `harga_modal` int NOT NULL,
  `qty` int NOT NULL,
  `subtotal` int NOT NULL,
  `toko` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcart`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 126 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES (4, '6593f26b0b950.jpg', 'Pengiriman furniture secara hati-hati dan teliti untuk memastikan pesanan sampai tujuan dalam kondisi baik.');
INSERT INTO `info` VALUES (5, '6593f1e59c7c7.jpg', 'Toko Evas bersedia mengirim pesanan sampai depan rumah Anda dengan senang hati.');
INSERT INTO `info` VALUES (6, '6593f33e5528f.jpg', 'Perputaran stock furniture cepat sehingga barang selalu up to date.');

-- ----------------------------
-- Table structure for inv
-- ----------------------------
DROP TABLE IF EXISTS `inv`;
CREATE TABLE `inv`  (
  `invid` int NOT NULL,
  `invoice` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_inv` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `pembayaran` int NOT NULL,
  `kembalian` int NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `toko` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of inv
-- ----------------------------
INSERT INTO `inv` VALUES (0, 'AD8124190601', '2024-01-08 19:06:27', 0, 0, 'proses', '');
INSERT INTO `inv` VALUES (0, 'AD8124194307', '2024-01-08 19:43:38', 0, 0, 'proses', '');
INSERT INTO `inv` VALUES (0, 'AD8124194544', '2024-01-08 19:45:41', 700000, 35000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124201746', '2024-01-08 20:19:23', 6000000, 593000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124202218', '2024-01-08 20:23:10', 1400000, 70000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124202523', '2024-01-08 20:26:00', 700000, 35000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124203126', '2024-01-08 20:32:33', 700000, 35000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124203532', '2024-01-08 20:35:13', 0, 0, 'proses', '');
INSERT INTO `inv` VALUES (0, 'AD8124203736', '2024-01-08 20:37:47', 300000, 11000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD8124211138', '2024-01-08 21:37:31', 3400000, 92000, 'selesai', '');
INSERT INTO `inv` VALUES (0, 'AD912400312', '2024-01-09 12:09:53', 2000000, 550000, 'selesai', '');

-- ----------------------------
-- Table structure for laporan
-- ----------------------------
DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan`  (
  `idlaporan` int NOT NULL,
  `invoice` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `harga_modal` int NOT NULL,
  `qty` int NOT NULL,
  `subtotal` int NOT NULL,
  `toko` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of laporan
-- ----------------------------
INSERT INTO `laporan` VALUES (0, 'AD8124194544', 'PM001', 'Lemari Olimpic 2 Pintu', 665000, 0, 1, 665000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124201746', 'PM002', 'Meja Kerja/Belajar Hitam Minimalis', 289000, 0, 1, 289000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124201746', 'PM003', 'SET Kasur Springbed Elite Serenity (160x200)', 2559000, 0, 2, 5118000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124202218', 'PM001', 'Lemari Olimpic 2 Pintu', 665000, 0, 2, 1330000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124202523', 'PM001', 'Lemari Olimpic 2 Pintu', 665000, 0, 1, 665000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124203126', 'PM001', 'Lemari Olimpic 2 Pintu', 665000, 0, 1, 665000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124203736', 'PM002', 'Meja Kerja/Belajar Hitam Minimalis', 289000, 0, 1, 289000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124211138', 'KS001', 'SET Kasur Springbed Elite Serenity (160x200)', 2559000, 0, 1, 2559000, '');
INSERT INTO `laporan` VALUES (0, 'AD8124211138', 'LP001', 'Lemari Olimpic 3 Pintu', 749000, 0, 1, 749000, '');
INSERT INTO `laporan` VALUES (0, 'AD912400312', 'LP007', 'Lemari pakaian Multifungsi / Rak Pakaian Portable / Lemari Kain-008 - Cokelat', 135000, 0, 1, 135000, '');
INSERT INTO `laporan` VALUES (0, 'AD912400312', 'KS002', 'Kasur Serenity Eternity by Elite Springbed (Mattress Only) - 100 x 200', 1315000, 0, 1, 1315000, '');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `toko` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'tokoevas', '$2y$10$dRmUE5xx..Qf14WaIrEtT.9VLYG78889boqyUTGoXMeQHx97kXnBW', 'Toko Evas', 'logo1.jpg');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_normal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (43, 'PM001', 'IMG-20230313-WA0002.jpg', 'Lemari Olimpic 2 Pintu', '700000', 665000, 1, '2024-01-08 15:19:41');
INSERT INTO `produk` VALUES (44, 'PM002', '649316673afc5.png', 'Meja Kerja/Belajar Hitam Minimalis', '350000', 289000, 5, '2024-01-08 15:20:12');
INSERT INTO `produk` VALUES (45, 'PM003', 'IMG-20230313-WA0000.jpg', 'SET Kasur Springbed Elite Serenity (160x200)', '2700000', 2559000, 1, '2024-01-08 15:19:45');
INSERT INTO `produk` VALUES (61, 'PM004', '6493169c55905.png', 'Meja Belajar Kecil Putih Minimalis', '240000', 179000, 4, '2024-01-08 15:19:56');



-- ----------------------------
-- Table structure for produk_kasur
-- ----------------------------
DROP TABLE IF EXISTS `produk_kasur`;
CREATE TABLE `produk_kasur`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_kasur
-- ----------------------------
INSERT INTO `produk_kasur` VALUES (45, 'KS001', '647cc6adb203d.jpg', 'SET Kasur Springbed Elite Serenity (160x200)', 2559000, 4, '2024-01-09 09:34:17');
INSERT INTO `produk_kasur` VALUES (46, 'KS002', '6593fcce0bcc3.png', 'Kasur Serenity Eternity by Elite Springbed (Mattress Only) - 100 x 200', 1315000, 2, '2024-01-09 09:03:02');
INSERT INTO `produk_kasur` VALUES (47, 'KS003', '6593fd6e70b74.png', 'Kasur Springbed Lady Americana® Viance Mattress Only ( Medium ) - 100x200', 6315000, 4, '2024-01-09 09:03:03');
INSERT INTO `produk_kasur` VALUES (48, 'KS004', '6593fe09a4ee8.png', 'Kasur Serenity Grand Legend by Elite Springbed (Mattress Only) - 100 X 200', 1090000, 3, '2024-01-09 09:03:04');
INSERT INTO `produk_kasur` VALUES (49, 'KS005', '6593fee76c008.png', 'Homedoki FoamLite/Kasur Busa Lantai - Single:100*200', 260000, 2, '2024-01-09 09:03:05');
INSERT INTO `produk_kasur` VALUES (50, 'KS006', '6593ff383caa9.png', 'Kasur Busa Zinus Anak Kos Mattress in a Box Gratis Ongkir - 120X200', 910000, 1, '2024-01-09 09:03:06');
INSERT INTO `produk_kasur` VALUES (51, 'KS007', '6593ffa355575.png', 'Mattress Topper TURU Skye 5 / 8cm Pelapis Penambah Tinggi Kasur, Empuk - 5cm, 90x200cm', 460000, 3, '2024-01-09 09:03:07');
INSERT INTO `produk_kasur` VALUES (52, 'KS008', '6594001cb2a01.png', 'Domi Studio Mattress - Kasur Pocket Spring Bed Motion Isolation - 90 x 200', 1400000, 3, '2024-01-09 09:03:13');

-- ----------------------------
-- Table structure for produk_lemari
-- ----------------------------
DROP TABLE IF EXISTS `produk_lemari`;
CREATE TABLE `produk_lemari`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_lemari
-- ----------------------------
INSERT INTO `produk_lemari` VALUES (37, 'LP001', '6415729470c9e.jpg', 'Lemari Olimpic 3 Pintu', 749000, 2, '2024-01-09 09:02:41');
INSERT INTO `produk_lemari` VALUES (38, 'LP002', '64186c2a27192.jpg', 'Lemari Olimpic 2 Pintu', 665000, 3, '2024-01-09 09:02:42');
INSERT INTO `produk_lemari` VALUES (39, 'LP003', '64186c4eed88e.jpg', 'Lemari Kaca Activ Hias Minimalis', 1299000, 4, '2024-01-09 09:02:44');
INSERT INTO `produk_lemari` VALUES (58, 'LP004', '65940571c2dc5.png', 'Angola Lemari Pakaian Plastik 4-5 Tingkat C70-C71 Lemari Baju / Mainan - 5Tingkat - Biru', 339000, 3, '2024-01-09 09:02:44');
INSERT INTO `produk_lemari` VALUES (59, 'LP005', '659405c33d05b.png', 'Angola Lemari Pakaian Plastik G15/G16 Laci Plastik Susun 5 / 6 Tingkat - 3Tingkat - 18CM', 119000, 5, '2024-01-09 09:02:46');
INSERT INTO `produk_lemari` VALUES (60, 'LP006', '65940610b00aa.png', 'Lemari Pakaian 2 Pintu - Cokelat Maple', 999000, 3, '2024-01-09 09:02:47');
INSERT INTO `produk_lemari` VALUES (61, 'LP007', '65940659873c6.png', 'Lemari pakaian Multifungsi / Rak Pakaian Portable / Lemari Kain-008 - Cokelat', 135000, 2, '2024-01-09 09:02:56');

-- ----------------------------
-- Table structure for produk_lemari_dapur
-- ----------------------------
DROP TABLE IF EXISTS `produk_lemari_dapur`;
CREATE TABLE `produk_lemari_dapur`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_lemari_dapur
-- ----------------------------
INSERT INTO `produk_lemari_dapur` VALUES (42, 'LD001', '6594086849fad.png', 'Kitchen set lemari dapur atas 3 pintu ALBA 120', 580000, 2, '2024-01-09 09:03:42');
INSERT INTO `produk_lemari_dapur` VALUES (43, 'LD002', '6594090dba524.png', 'Kitchen Set Denver Lemari Atas 3 Pintu', 865000, 3, '2024-01-09 09:03:42');
INSERT INTO `produk_lemari_dapur` VALUES (44, 'LD003', '6594097fa188b.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Atas Hidrolik', 822000, 4, '2024-01-09 09:03:43');
INSERT INTO `produk_lemari_dapur` VALUES (45, 'LD004', '659409aa32e37.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Atas 1PT 40cm', 556000, 3, '2024-01-09 09:03:44');
INSERT INTO `produk_lemari_dapur` VALUES (46, 'LD005', '659409cfd2778.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Atas 3PT 120cm', 799000, 3, '2024-01-09 09:03:47');
INSERT INTO `produk_lemari_dapur` VALUES (47, 'LD006', '65940a0247a60.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Bawah 3PT Laci', 999000, 2, '2024-01-09 09:03:48');
INSERT INTO `produk_lemari_dapur` VALUES (48, 'LD007', '65940a351f6fa.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Bawah 2PT Sudut', 979000, 4, '2024-01-09 09:03:49');
INSERT INTO `produk_lemari_dapur` VALUES (49, 'LD008', '65940a8a8d4b3.png', 'Kitchen Set IDEA DENVER Lemari Kabinet Dapur Kayu Minimalis - Atas 20cm 9020', 424000, 3, '2024-01-09 09:03:56');

-- ----------------------------
-- Table structure for produk_meja
-- ----------------------------
DROP TABLE IF EXISTS `produk_meja`;
CREATE TABLE `produk_meja`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_meja
-- ----------------------------
INSERT INTO `produk_meja` VALUES (37, 'KM001', '647cced784234.png', 'Meja Tamu Minimalis', 299000, 1, '2024-01-09 09:46:40');
INSERT INTO `produk_meja` VALUES (38, 'KM002', '647ccfba2b26e.png', 'Meja Kerja/Belajar Hitam Minimalis', 289000, 3, '2024-01-09 09:46:54');
INSERT INTO `produk_meja` VALUES (39, 'KM003', '647cd08350027.png', 'Meja Belajar Kecil Putih Minimalis', 179000, 2, '2024-01-09 09:46:55');
INSERT INTO `produk_meja` VALUES (40, 'KM004', '65940b4fda826.png', 'Kursi Bar INVITI PU5015', 420000, 2, '2024-01-09 09:46:56');
INSERT INTO `produk_meja` VALUES (41, 'KM005', '65940ba68952b.png', 'Kursi Kantor Indachi D 660 AL HDT Oscar', 2600000, 3, '2024-01-09 09:46:57');
INSERT INTO `produk_meja` VALUES (42, 'KM006', '65940c622355f.png', 'Meja makan marmer 6 kursi', 8500000, 4, '2024-01-09 09:46:58');
INSERT INTO `produk_meja` VALUES (43, 'KM007', '65940cb63032b.png', 'DAKOTA SERIES | Meja Makan Marmer 4 Kursi Minimalis - DARK GREY', 1675000, 1, '2024-01-09 09:46:59');
INSERT INTO `produk_meja` VALUES (44, 'KM008', '65940d068ff66.png', 'Informa - Lexon Set Meja Makan 4 Kursi - Cokelat Tua', 1355000, 2, '2024-01-09 09:47:08');

-- ----------------------------
-- Table structure for produk_rak_tv
-- ----------------------------
DROP TABLE IF EXISTS `produk_rak_tv`;
CREATE TABLE `produk_rak_tv`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_rak_tv
-- ----------------------------
INSERT INTO `produk_rak_tv` VALUES (71, 'RV001', '647ccdd132e9c.png', 'Toppan | Rak Tv Hias Modern', 899000, 3, '2024-01-09 09:02:02');
INSERT INTO `produk_rak_tv` VALUES (72, 'RV002', '659401237b5d4.png', 'Rak tv minimalis modern lemari tv Meja tv minimalis modern - 120x35x45, NATURAL', 1330000, 4, '2024-01-09 09:02:03');
INSERT INTO `produk_rak_tv` VALUES (73, 'RV003', '6594017be86ca.png', 'Rak Tv meja tv minimalis Rubik 02 Olympic - RUB 02 OLYMPIC', 150000, 3, '2024-01-09 09:02:04');
INSERT INTO `produk_rak_tv` VALUES (74, 'RV004', '659401ec35c14.png', 'RAK TV MEJA TV MINIMALIS RAK SERBAGUNA MEJA PRINTER MURAH - Cokelat', 101000, 5, '2024-01-09 09:02:06');
INSERT INTO `produk_rak_tv` VALUES (75, 'RV005', '6594024a7de36.png', 'Anya Living Meja TV / Rak TV Lucas - Mahogany', 359000, 6, '2024-01-09 09:02:07');
INSERT INTO `produk_rak_tv` VALUES (76, 'RV006', '6594029e95f34.png', 'Rak tv meja tv minimalis 32 inch - Hitam, 32 inch', 175000, 5, '2024-01-09 09:02:10');
INSERT INTO `produk_rak_tv` VALUES (77, 'RV007', '65940349bd506.png', 'Rak TV/Meja TV /Bufet TV minimalis/Meja AV 2020', 945000, 4, '2024-01-09 09:02:12');
INSERT INTO `produk_rak_tv` VALUES (78, 'RV008', '659403f3766bf.png', 'Rak TV SOHO - New York TV 1200', 1490000, 3, '2024-01-09 09:02:13');
INSERT INTO `produk_rak_tv` VALUES (79, 'RV009', '659404b1a4e6c.png', 'Dekoruma NAKA Rak Meja TV Kayu Minimalis Scandinavian / Lemari TV', 1790000, 5, '2024-01-09 09:02:14');
INSERT INTO `produk_rak_tv` VALUES (80, 'RV010', '6594051748013.png', 'meja tv / rak tv 505', 140000, 4, '2024-01-09 09:02:27');

-- ----------------------------
-- Table structure for produk_sofa
-- ----------------------------
DROP TABLE IF EXISTS `produk_sofa`;
CREATE TABLE `produk_sofa`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk_sofa
-- ----------------------------
INSERT INTO `produk_sofa` VALUES (52, 'SF001', '647c887c44ba7.png', 'Sofa Busa Minimalis Cutshall Round Arm Loveseat', 1299000, 3, '2024-01-09 09:04:21');
INSERT INTO `produk_sofa` VALUES (53, 'SF003', '647c88fca34a4.png', 'Sofa Sienna 2 Dudukan', 1500000, 2, '2024-01-09 09:04:21');
INSERT INTO `produk_sofa` VALUES (54, 'SF004', '647c8c7992197.png', 'Sofa Chesterfield Minimalis', 4600000, 3, '2024-01-09 09:04:22');
INSERT INTO `produk_sofa` VALUES (55, 'SF005', '647c8e5a2dbee.png', 'OKE Sofa | Sofa Ruang Tamu Minimalis', 1499000, 3, '2024-01-09 09:04:25');
INSERT INTO `produk_sofa` VALUES (56, 'SF006', '647c8f6a9405e.png', 'Offo Living | Sofa 2 Dudukan', 1600000, 4, '2024-01-09 09:04:26');
INSERT INTO `produk_sofa` VALUES (57, 'SF007', '647c9031e2b6a.png', 'Sofa Bed Reklening Storage Kasur', 4675000, 3, '2024-01-09 09:04:27');
INSERT INTO `produk_sofa` VALUES (58, 'SF008', '647c90c1ceff9.png', 'Sofabed Kasur Lipat Spond', 759000, 2, '2024-01-09 09:04:27');
INSERT INTO `produk_sofa` VALUES (59, 'SF009', '647c913b16127.png', 'Sofa 2 Seater | Marcella by Vassa Sofa', 2399000, 1, '2024-01-09 09:04:28');
INSERT INTO `produk_sofa` VALUES (60, 'SF010', '647c91c993f7c.png', 'Sofa Recliner 1 Seater', 2599000, 3, '2024-01-09 09:04:29');
INSERT INTO `produk_sofa` VALUES (61, 'SF011', '658fd86ac7435.png', 'Sofa Retro 1 Seater', 1650000, 2, '2024-01-09 09:04:30');
INSERT INTO `produk_sofa` VALUES (62, 'SF012', '658fd909328fc.png', 'Sofa Minimalis Modern', 1999000, 5, '2024-01-09 09:04:31');
INSERT INTO `produk_sofa` VALUES (63, 'SF013', '658fd9f9e3be5.png', 'Sofa Leter L Minimalis', 3999000, 3, '2024-01-09 09:04:32');
INSERT INTO `produk_sofa` VALUES (64, 'SF014', '658fda70348d4.png', 'Sofa Sudut Minimalis Terbaru', 2500000, 2, '2024-01-09 09:04:33');
INSERT INTO `produk_sofa` VALUES (65, 'SF015', '658fdafd3348f.png', 'Mulan Sofabed', 2265000, 2, '2024-01-09 09:04:34');
INSERT INTO `produk_sofa` VALUES (66, 'SF016', '658fdc9d05ebe.png', 'Odda Sofa Bed Minimalis Tempat Duduk Santai Elegan', 1725000, 3, '2024-01-09 09:04:35');
INSERT INTO `produk_sofa` VALUES (67, 'SF017', '658fe18ee9082.png', 'Bench Sofa Minimalis Bangku Stoll', 2000000, 3, '2024-01-09 09:04:48');
INSERT INTO `produk_sofa` VALUES (68, 'SF018', '658fe2a00d0d1.png', 'Set Kursi Sofa Tamu Jati Minimalis Modern', 2000000, 2, '2024-01-09 09:04:37');



SET FOREIGN_KEY_CHECKS = 1;
