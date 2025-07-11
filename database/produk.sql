/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : bubay

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 21/01/2024 20:09:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `idproduk` int NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_modal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_jual` int NOT NULL,
  `stok` int NULL DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (43, 'PM001', 'IMG-20230313-WA0002.jpg', 'Lemari Olimpic 2 Pintu', '700000', 865000, 0, '2024-01-21 19:56:30');
INSERT INTO `produk` VALUES (44, 'PM002', '649316673afc5.png', 'Meja Kerja/Belajar Hitam Minimalis', '350000', 489000, 2, '2024-01-21 19:58:40');
INSERT INTO `produk` VALUES (45, 'PM003', 'IMG-20230313-WA0000.jpg', 'SET Kasur Springbed Elite Serenity (160x200)', '2700000', 2559000, 1, '2024-01-08 15:19:45');
INSERT INTO `produk` VALUES (61, 'PM004', '6493169c55905.png', 'Meja Belajar Kecil Putih Minimalis', '240000', 179000, 4, '2024-01-08 15:19:56');

SET FOREIGN_KEY_CHECKS = 1;
