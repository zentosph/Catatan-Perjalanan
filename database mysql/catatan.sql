/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : catatan

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 13/11/2024 20:24:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity`  (
  `id_activity` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `activity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp,
  `delete` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_activity`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2163 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES (2047, 5, 'User membuka Manage Menu', '2024-11-13 05:54:11', NULL);
INSERT INTO `activity` VALUES (2048, 5, 'User membuka Recycle Bin User', '2024-11-13 05:55:48', NULL);
INSERT INTO `activity` VALUES (2049, 5, 'User membuka Setting Website', '2024-11-13 05:55:53', NULL);
INSERT INTO `activity` VALUES (2050, 5, 'User membuka Setting Website', '2024-11-13 05:56:00', NULL);
INSERT INTO `activity` VALUES (2051, 5, 'User membuka Setting Website', '2024-11-13 05:56:19', NULL);
INSERT INTO `activity` VALUES (2052, 5, 'User membuka Setting Website', '2024-11-13 05:56:33', NULL);
INSERT INTO `activity` VALUES (2053, 5, 'User membuka Setting Website', '2024-11-13 05:56:58', NULL);
INSERT INTO `activity` VALUES (2054, 5, 'User membuka Setting Website', '2024-11-13 06:00:21', NULL);
INSERT INTO `activity` VALUES (2055, 5, 'User membuka Setting Website', '2024-11-13 06:01:12', NULL);
INSERT INTO `activity` VALUES (2056, 5, 'User membuka Data Catatan', '2024-11-13 06:03:02', NULL);
INSERT INTO `activity` VALUES (2057, 5, 'User membuka Data Catatan', '2024-11-13 06:04:52', NULL);
INSERT INTO `activity` VALUES (2058, 5, 'User membuka Data Catatan', '2024-11-13 06:07:03', NULL);
INSERT INTO `activity` VALUES (2059, 5, 'User membuka Data Catatan', '2024-11-13 06:08:19', NULL);
INSERT INTO `activity` VALUES (2060, 5, 'User membuka Data Catatan', '2024-11-13 06:08:55', NULL);
INSERT INTO `activity` VALUES (2061, 5, 'User membuka Storage User', '2024-11-13 06:09:51', NULL);
INSERT INTO `activity` VALUES (2062, 5, 'User membuka Data Catatan', '2024-11-13 06:10:18', NULL);
INSERT INTO `activity` VALUES (2063, 5, 'User membuka Data Catatan', '2024-11-13 06:12:29', NULL);
INSERT INTO `activity` VALUES (2064, 5, 'User membuka Data Catatan', '2024-11-13 06:12:48', NULL);
INSERT INTO `activity` VALUES (2065, 5, 'User membuka Data Catatan', '2024-11-13 06:13:03', NULL);
INSERT INTO `activity` VALUES (2066, 5, 'User membuka Data Catatan', '2024-11-13 06:14:03', NULL);
INSERT INTO `activity` VALUES (2067, 5, 'User membuka Form Edit Catatan', '2024-11-13 06:14:09', NULL);
INSERT INTO `activity` VALUES (2068, 5, 'User membuka Data Catatan', '2024-11-13 06:14:14', NULL);
INSERT INTO `activity` VALUES (2069, 5, 'User Restore Update Catatan', '2024-11-13 06:14:17', NULL);
INSERT INTO `activity` VALUES (2070, 5, 'User membuka Data Catatan', '2024-11-13 06:14:17', NULL);
INSERT INTO `activity` VALUES (2071, 5, 'User membuka Data Catatan', '2024-11-13 06:14:43', NULL);
INSERT INTO `activity` VALUES (2072, 5, 'User membuka Form Edit Catatan', '2024-11-13 06:15:05', NULL);
INSERT INTO `activity` VALUES (2073, 5, 'User membuka Data Catatan', '2024-11-13 06:15:08', NULL);
INSERT INTO `activity` VALUES (2074, 5, 'User Restore Update Catatan', '2024-11-13 06:15:15', NULL);
INSERT INTO `activity` VALUES (2075, 5, 'User membuka Data Catatan', '2024-11-13 06:15:15', NULL);
INSERT INTO `activity` VALUES (2076, 5, 'User membuka Form Edit Catatan', '2024-11-13 06:15:19', NULL);
INSERT INTO `activity` VALUES (2077, 5, 'User membuka Data Catatan', '2024-11-13 06:15:21', NULL);
INSERT INTO `activity` VALUES (2078, 5, 'User membuka Data Catatan', '2024-11-13 06:15:44', NULL);
INSERT INTO `activity` VALUES (2079, 5, 'User membuka Recycle Bin User', '2024-11-13 06:16:59', NULL);
INSERT INTO `activity` VALUES (2080, 5, 'User membuka Recycle Bin User', '2024-11-13 06:21:16', NULL);
INSERT INTO `activity` VALUES (2081, 5, 'User membuka Setting Website', '2024-11-13 06:21:27', NULL);
INSERT INTO `activity` VALUES (2082, 5, 'User membuka Setting Website', '2024-11-13 06:21:39', NULL);
INSERT INTO `activity` VALUES (2083, 5, 'User membuka Setting Website', '2024-11-13 06:21:52', NULL);
INSERT INTO `activity` VALUES (2084, 5, 'User membuka Setting Website', '2024-11-13 06:22:00', NULL);
INSERT INTO `activity` VALUES (2085, 5, 'User membuka Setting Website', '2024-11-13 06:22:07', NULL);
INSERT INTO `activity` VALUES (2086, 5, 'User membuka Setting Website', '2024-11-13 06:23:23', NULL);
INSERT INTO `activity` VALUES (2087, 5, 'User membuka Setting Website', '2024-11-13 06:23:45', NULL);
INSERT INTO `activity` VALUES (2088, 5, 'User membuka Setting Website', '2024-11-13 06:25:08', NULL);
INSERT INTO `activity` VALUES (2089, 5, 'User membuka Setting Website', '2024-11-13 06:25:18', NULL);
INSERT INTO `activity` VALUES (2090, 5, 'User membuka Setting Website', '2024-11-13 06:25:33', NULL);
INSERT INTO `activity` VALUES (2091, 5, 'User membuka Setting Website', '2024-11-13 06:25:38', NULL);
INSERT INTO `activity` VALUES (2092, 5, 'User membuka Setting Website', '2024-11-13 06:26:21', NULL);
INSERT INTO `activity` VALUES (2093, 5, 'User membuka Storage User', '2024-11-13 06:26:33', NULL);
INSERT INTO `activity` VALUES (2094, 5, 'User membuka Dashboard', '2024-11-13 06:26:45', NULL);
INSERT INTO `activity` VALUES (2095, 5, 'User membuka Data Catatan', '2024-11-13 06:26:47', NULL);
INSERT INTO `activity` VALUES (2096, 5, 'User membuka Data Catatan', '2024-11-13 06:28:41', NULL);
INSERT INTO `activity` VALUES (2097, 5, 'User membuka Data Catatan', '2024-11-13 06:28:46', NULL);
INSERT INTO `activity` VALUES (2098, 5, 'User membuka Data Catatan', '2024-11-13 06:28:49', NULL);
INSERT INTO `activity` VALUES (2099, 5, 'User membuka Data Catatan', '2024-11-13 06:29:00', NULL);
INSERT INTO `activity` VALUES (2100, 5, 'User membuka Data Catatan', '2024-11-13 06:29:14', NULL);
INSERT INTO `activity` VALUES (2101, 5, 'User membuka Manage Menu', '2024-11-13 06:29:28', NULL);
INSERT INTO `activity` VALUES (2102, 5, 'User membuka Data Catatan', '2024-11-13 06:29:34', NULL);
INSERT INTO `activity` VALUES (2103, 5, 'User membuka Data Catatan', '2024-11-13 06:29:46', NULL);
INSERT INTO `activity` VALUES (2104, 5, 'User membuka Dashboard', '2024-11-13 06:29:51', NULL);
INSERT INTO `activity` VALUES (2105, 7, 'User membuka Dashboard', '2024-11-13 06:37:35', NULL);
INSERT INTO `activity` VALUES (2106, 7, 'User membuka Dashboard', '2024-11-13 06:37:59', NULL);
INSERT INTO `activity` VALUES (2107, 7, 'User membuka Data Catatan', '2024-11-13 06:38:12', NULL);
INSERT INTO `activity` VALUES (2108, 7, 'User membuka Storage User', '2024-11-13 06:38:42', NULL);
INSERT INTO `activity` VALUES (2109, 7, 'User membuka Dashboard', '2024-11-13 06:38:49', NULL);
INSERT INTO `activity` VALUES (2110, 7, 'User membuka Data Catatan', '2024-11-13 06:41:47', NULL);
INSERT INTO `activity` VALUES (2111, 7, 'User membuka Form Tambah Catatan', '2024-11-13 06:41:48', NULL);
INSERT INTO `activity` VALUES (2112, 7, 'User membuka Data Catatan', '2024-11-13 06:42:02', NULL);
INSERT INTO `activity` VALUES (2113, 7, 'User membuka Data Catatan', '2024-11-13 06:42:55', NULL);
INSERT INTO `activity` VALUES (2114, 7, 'User membuka Data Catatan', '2024-11-13 06:43:44', NULL);
INSERT INTO `activity` VALUES (2115, 7, 'User membuka Data Catatan', '2024-11-13 06:44:18', NULL);
INSERT INTO `activity` VALUES (2116, 7, 'User membuka Data Catatan', '2024-11-13 06:44:27', NULL);
INSERT INTO `activity` VALUES (2117, 7, 'User membuka Form Tambah Catatan', '2024-11-13 06:44:54', NULL);
INSERT INTO `activity` VALUES (2118, 7, 'User membuka Data Catatan', '2024-11-13 06:45:06', NULL);
INSERT INTO `activity` VALUES (2119, 7, 'User membuka Form Tambah Catatan', '2024-11-13 06:45:09', NULL);
INSERT INTO `activity` VALUES (2120, 7, 'User membuka Data Catatan', '2024-11-13 06:45:29', NULL);
INSERT INTO `activity` VALUES (2121, 7, 'User membuka Data Catatan', '2024-11-13 06:45:55', NULL);
INSERT INTO `activity` VALUES (2122, 7, 'User membuka Data Catatan', '2024-11-13 06:47:03', NULL);
INSERT INTO `activity` VALUES (2123, 7, 'User membuka Data Catatan', '2024-11-13 06:47:40', NULL);
INSERT INTO `activity` VALUES (2124, 7, 'User membuka Data Catatan', '2024-11-13 06:48:05', NULL);
INSERT INTO `activity` VALUES (2125, 7, 'User membuka Data Catatan', '2024-11-13 06:48:55', NULL);
INSERT INTO `activity` VALUES (2126, 7, 'User membuka Data Catatan', '2024-11-13 06:49:38', NULL);
INSERT INTO `activity` VALUES (2127, 7, 'User membuka Dashboard', '2024-11-13 06:51:28', NULL);
INSERT INTO `activity` VALUES (2128, 7, 'User membuka Dashboard', '2024-11-13 06:53:38', NULL);
INSERT INTO `activity` VALUES (2129, 5, 'User membuka Dashboard', '2024-11-13 06:55:09', NULL);
INSERT INTO `activity` VALUES (2130, 5, 'User membuka Data Catatan', '2024-11-13 06:55:16', NULL);
INSERT INTO `activity` VALUES (2131, 5, 'User membuka Form Tambah Catatan', '2024-11-13 06:55:29', NULL);
INSERT INTO `activity` VALUES (2132, 5, 'User membuka Data Catatan', '2024-11-13 06:55:52', NULL);
INSERT INTO `activity` VALUES (2133, 5, 'User membuka Dashboard', '2024-11-13 06:56:40', NULL);
INSERT INTO `activity` VALUES (2134, 6, 'User membuka Dashboard', '2024-11-13 06:56:55', NULL);
INSERT INTO `activity` VALUES (2135, 6, 'User membuka Storage User', '2024-11-13 06:57:03', NULL);
INSERT INTO `activity` VALUES (2136, 6, 'User membuka Storage User', '2024-11-13 06:57:14', NULL);
INSERT INTO `activity` VALUES (2137, 6, 'User membuka Setting Website', '2024-11-13 06:57:20', NULL);
INSERT INTO `activity` VALUES (2138, 6, 'User membuka Storage User', '2024-11-13 06:57:28', NULL);
INSERT INTO `activity` VALUES (2139, 6, 'User membuka Form Edit User', '2024-11-13 06:57:34', NULL);
INSERT INTO `activity` VALUES (2140, 6, 'User membuka Storage User', '2024-11-13 06:57:40', NULL);
INSERT INTO `activity` VALUES (2141, 6, 'User membuka Setting Website', '2024-11-13 06:57:48', NULL);
INSERT INTO `activity` VALUES (2142, 6, 'User membuka Data Catatan', '2024-11-13 06:58:13', NULL);
INSERT INTO `activity` VALUES (2143, 6, 'User membuka Data Catatan', '2024-11-13 06:58:19', NULL);
INSERT INTO `activity` VALUES (2144, 6, 'User membuka Form Tambah Catatan', '2024-11-13 06:58:22', NULL);
INSERT INTO `activity` VALUES (2145, 6, 'User membuka Data Catatan', '2024-11-13 06:58:36', NULL);
INSERT INTO `activity` VALUES (2146, 6, 'User membuka Data Catatan', '2024-11-13 06:58:43', NULL);
INSERT INTO `activity` VALUES (2147, 6, 'User membuka Data Catatan', '2024-11-13 06:58:50', NULL);
INSERT INTO `activity` VALUES (2148, 6, 'User membuka Data Catatan', '2024-11-13 06:58:54', NULL);
INSERT INTO `activity` VALUES (2149, 6, 'User membuka Data Catatan', '2024-11-13 06:58:57', NULL);
INSERT INTO `activity` VALUES (2150, 6, 'User membuka Form Edit Catatan', '2024-11-13 06:59:02', NULL);
INSERT INTO `activity` VALUES (2151, 6, 'User membuka Data Catatan', '2024-11-13 07:00:08', NULL);
INSERT INTO `activity` VALUES (2152, 6, 'User membuka Form Edit Catatan', '2024-11-13 07:00:18', NULL);
INSERT INTO `activity` VALUES (2153, 6, 'User membuka Form Edit Catatan', '2024-11-13 07:00:53', NULL);
INSERT INTO `activity` VALUES (2154, 6, 'User membuka Form Edit Catatan', '2024-11-13 07:02:23', NULL);
INSERT INTO `activity` VALUES (2155, 6, 'User membuka Data Catatan', '2024-11-13 07:02:46', NULL);
INSERT INTO `activity` VALUES (2156, 6, 'User Restore Update Catatan', '2024-11-13 07:02:54', NULL);
INSERT INTO `activity` VALUES (2157, 6, 'User membuka Data Catatan', '2024-11-13 07:02:55', NULL);
INSERT INTO `activity` VALUES (2158, 6, 'User membuka Setting Website', '2024-11-13 07:03:05', NULL);
INSERT INTO `activity` VALUES (2159, 6, 'User membuka Setting Website', '2024-11-13 07:03:26', NULL);
INSERT INTO `activity` VALUES (2160, 6, 'User membuka Manage Menu', '2024-11-13 07:03:34', NULL);
INSERT INTO `activity` VALUES (2161, 6, 'User membuka Manage Menu', '2024-11-13 07:03:46', NULL);
INSERT INTO `activity` VALUES (2162, 6, 'User membuka Storage User', '2024-11-13 07:04:01', NULL);

-- ----------------------------
-- Table structure for catatan
-- ----------------------------
DROP TABLE IF EXISTS `catatan`;
CREATE TABLE `catatan`  (
  `id_catatan` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `waktu` time NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `suhu_tubuh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deleted` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_catatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of catatan
-- ----------------------------
INSERT INTO `catatan` VALUES (1, 5, '2024-11-13', '17:37:00', 'Sandona', '37.0', NULL);
INSERT INTO `catatan` VALUES (2, 5, '2024-11-12', '23:37:00', 'Sandona', '38.0', NULL);
INSERT INTO `catatan` VALUES (3, 5, '2024-11-30', '17:50:00', 'zen', '39.0', NULL);
INSERT INTO `catatan` VALUES (4, 7, '2024-11-13', '19:41:00', 'zen', '37.0', NULL);
INSERT INTO `catatan` VALUES (5, 7, '2024-11-30', '01:44:00', 'Sandona', '39.0', NULL);
INSERT INTO `catatan` VALUES (6, 7, '2024-11-02', '20:45:00', 'Pasar Jodoh', '37.0', NULL);
INSERT INTO `catatan` VALUES (7, 5, '2024-11-01', '22:55:00', 'permata harapan', '37.0', NULL);
INSERT INTO `catatan` VALUES (8, 6, '2024-11-01', '21:58:00', 'Sandona', '37.0', NULL);

-- ----------------------------
-- Table structure for catatan_backup
-- ----------------------------
DROP TABLE IF EXISTS `catatan_backup`;
CREATE TABLE `catatan_backup`  (
  `id_catatan` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `waktu` time NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `suhu_tubuh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deleted` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_catatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of catatan_backup
-- ----------------------------
INSERT INTO `catatan_backup` VALUES (1, 5, '2024-11-13', '17:37:00', 'Sandona', '37.0', NULL);
INSERT INTO `catatan_backup` VALUES (2, 5, '2024-11-12', '23:37:00', 'Sandona', '38.0', NULL);
INSERT INTO `catatan_backup` VALUES (3, 5, '2024-11-30', '17:50:00', 'zenu', '39.0', NULL);
INSERT INTO `catatan_backup` VALUES (4, 7, '2024-11-13', '19:41:00', 'zen', '37.0', NULL);
INSERT INTO `catatan_backup` VALUES (5, 7, '2024-11-30', '01:44:00', 'Sandona', '39.0', NULL);
INSERT INTO `catatan_backup` VALUES (6, 7, '2024-11-02', '20:45:00', 'Pasar Jodoh', '37.0', NULL);
INSERT INTO `catatan_backup` VALUES (7, 5, '2024-11-01', '22:55:00', 'permata harapan', '37.0', NULL);
INSERT INTO `catatan_backup` VALUES (8, 6, '2024-11-01', '21:58:00', 'Sandona', '37.0', NULL);

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level`  (
  `id_level` int NOT NULL AUTO_INCREMENT,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES (1, 'Admin');
INSERT INTO `level` VALUES (2, 'User');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `level` int NULL DEFAULT NULL,
  `catatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `setting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 1, '1', '1', '0');
INSERT INTO `menu` VALUES (2, 2, '1', '0', '0');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id_setting` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'PE', 'logo.png', '5.png');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `NIK` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `level` int NULL DEFAULT NULL,
  `deleted` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (5, '12345678', 'leonardo', 2, '2024-11-13 06:57:14');
INSERT INTO `user` VALUES (6, '22161034', 'Admin', 1, NULL);
INSERT INTO `user` VALUES (8, '323455', '222', 2, NULL);

SET FOREIGN_KEY_CHECKS = 1;
