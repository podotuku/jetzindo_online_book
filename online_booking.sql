/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : online_booking

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 19/06/2020 11:23:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for booking
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking`  (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_nama_pemesan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_email_pemesan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_phone_pemesan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_lapangan_id` int(11) NULL DEFAULT NULL,
  `booking_tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_tanggal_awal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_tanggal_akhir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_jam_awal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_jam_akhir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_harga` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_total_harga` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `booking_created_date` datetime(0) NULL DEFAULT NULL,
  `booking_updated_date` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`booking_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of booking
-- ----------------------------
INSERT INTO `booking` VALUES (1, 'BOOK190620-0001', 'Jhon Doe', 'jhondoe@email.com', '0812909000', NULL, '2020-06-19', NULL, NULL, '09:00', '11:00', '200000', '200000', 'paid', '2020-06-19 11:10:33', '2020-06-19 11:10:40');
INSERT INTO `booking` VALUES (2, 'BOOK190620-0002', 'Alex Dimitri', 'alex@email.com', '0867899400', NULL, '2020-06-19', NULL, NULL, '12:00', '14:00', '200000', '200000', 'waiting', '2020-06-19 11:10:33', '2020-06-19 11:10:40');
INSERT INTO `booking` VALUES (3, 'BOOK190620-0003', 'Dominique', 'dominique@email.com', '0871367999', NULL, '2020-06-19', NULL, NULL, '14:00', '16:00', '200000', '200000', 'waiting', '2020-06-19 11:10:33', '2020-06-19 11:10:40');

-- ----------------------------
-- Table structure for harga
-- ----------------------------
DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga`  (
  `harga_id` int(11) NOT NULL,
  `harga_lapangan_id` int(11) NULL DEFAULT NULL,
  `harga_type` enum('perjam','perhari') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga_detail` double(255, 0) NULL DEFAULT NULL,
  `harga_update_date` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `harga_created_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`harga_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for lapangan
-- ----------------------------
DROP TABLE IF EXISTS `lapangan`;
CREATE TABLE `lapangan`  (
  `lapangan_id` int(11) NOT NULL AUTO_INCREMENT,
  `lapangan_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lapangan_deskripsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lapangan_foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lapangan_update_date` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `lapangan_created_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`lapangan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran`  (
  `bayar_id` int(11) NOT NULL AUTO_INCREMENT,
  `bayar_id_booking` int(11) NULL DEFAULT NULL,
  `bayar_nominal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar_bank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar_penerima` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar_status` enum('lunas','process') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar_tgl_bayar` date NULL DEFAULT NULL,
  `bayar_bukti_bayar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar_created_date` datetime(0) NULL DEFAULT NULL,
  `bayar_updated_date` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`bayar_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES (1, 2, '200000', 'BCA', 'Alex', 'process', '2020-06-19', NULL, '2020-06-19 11:13:36', '2020-06-19 11:13:45');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `users_username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `users_password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `users_level` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `users_created_date` datetime(0) NULL DEFAULT NULL,
  `users_update_date` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`users_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'administrator', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Administrator', '2020-06-19 11:16:42', '2020-06-19 11:17:38');
INSERT INTO `users` VALUES (2, 'Operator', 'operator', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Operator', '2020-06-19 11:16:42', '2020-06-19 11:17:42');

SET FOREIGN_KEY_CHECKS = 1;
