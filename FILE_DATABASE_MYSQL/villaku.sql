-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 07:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `provils`
--

CREATE TABLE `provils` (
  `id` int(11) NOT NULL,
  `tentang` longtext NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `wa` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provils`
--

INSERT INTO `provils` (`id`, `tentang`, `instagram`, `alamat`, `wa`, `created_at`, `updated_at`) VALUES
(1, 'Website Villaku adalah sebuah website yang menawarkan pengalaman menginap yang sulit terlupakan.', 'ffaarrhhaanns', 'Jalan Salemba Raya, Jakarta Pusat, DKI Jakarta, Indonesia', '088899076543', '2021-08-03 07:36:50', '2021-08-03 00:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Yusuf', 'yusuf20', '201098'),
(2, 'Farhan Anshari', 'farhan136', '250300');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(10) NOT NULL,
  `pemesanan_id` int(10) NOT NULL,
  `upload_bukti` varchar(191) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `asal_bank` varchar(15) NOT NULL,
  `no_pengirim` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id`, `pemesanan_id`, `upload_bukti`, `nama_pengirim`, `asal_bank`, `no_pengirim`, `created_at`, `updated_at`) VALUES
(1, 1, '5fdcb7f16d541.jpg', 'Mohammad Yusuf', 'BCA', '081882321023', '2020-12-18 08:08:49', '2021-05-30 11:37:50'),
(3, 3, 'photo-1433086966358-54859d0ed716.jpg', 'Farhan', 'Bank DKI', '085865773214', '2021-05-30 05:38:25', '2021-05-30 05:38:25'),
(4, 3, 'photo-1433086966358-54859d0ed716.jpg', 'Farhan', 'Bank DKI', '085865773214', '2021-05-30 05:38:30', '2021-05-30 05:38:30'),
(5, 4, 'woodland-road-falling-leaf-natural-38537.jpeg', 'Alex', 'Mandiri', '085865773214', '2021-05-30 05:45:11', '2021-05-30 05:45:11'),
(6, 4, 'woodland-road-falling-leaf-natural-38537.jpeg', 'Alex', 'Mandiri', '085865773214', '2021-05-30 05:47:39', '2021-05-30 05:47:39'),
(7, 6, 'pi (2).jpg', 'Adi', 'Mandiri', '085862173214', '2021-05-30 05:57:25', '2021-05-30 05:57:25'),
(8, 6, 'pi (2).jpg', 'Adi', 'Mandiri', '085862173214', '2021-05-30 06:21:19', '2021-05-30 06:21:19'),
(9, 7, 'photo-1542500186-6edb30855637.jpg', 'Marko', 'BRI', '085847973444', '2021-05-30 16:43:08', '2021-05-30 16:43:08'),
(10, 8, 'photo-1540015385001-a65e7e93281f.jpg', 'Alex', 'BCA', '088822273412', '2021-05-30 21:17:42', '2021-05-30 21:17:42'),
(11, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:40:35', '2021-05-30 23:40:35'),
(12, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:41:04', '2021-05-30 23:41:04'),
(13, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:42:01', '2021-05-30 23:42:01'),
(14, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:42:36', '2021-05-30 23:42:36'),
(15, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:42:45', '2021-05-30 23:42:45'),
(16, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:44:06', '2021-05-30 23:44:06'),
(17, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:44:26', '2021-05-30 23:44:26'),
(18, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:44:31', '2021-05-30 23:44:31'),
(19, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:44:47', '2021-05-30 23:44:47'),
(20, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:45:38', '2021-05-30 23:45:38'),
(21, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:45:58', '2021-05-30 23:45:58'),
(22, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:46:16', '2021-05-30 23:46:16'),
(23, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:46:33', '2021-05-30 23:46:33'),
(24, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:47:32', '2021-05-30 23:47:32'),
(25, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:47:44', '2021-05-30 23:47:44'),
(26, 10, 'photo-1534447677768-be436bb09401.jpg', 'Mark', 'Bank DKI', '085847973222', '2021-06-05 00:05:34', '2021-06-05 00:05:34'),
(27, 11, 'photo-1560601642-26e63881f099.jpg', 'Markopolo', 'Mandiri', '085881173555', '2021-06-08 05:52:25', '2021-06-08 05:52:25'),
(28, 12, 'photo-1540015385001-a65e7e93281f.jpg', 'Yusuf', 'Mandiri', '085862175590', '2021-06-09 20:52:01', '2021-06-09 20:52:01'),
(29, 13, 'photo-1564410267841-915d8e4d71ea.jpg', 'Adi', 'BCA', '085862173214', '2021-06-18 05:00:58', '2021-06-18 05:00:58'),
(30, 15, 'photo_2019-08-02_16-59-02.jpg', 'Mark', 'BCA', '085847973291', '2021-08-04 03:45:13', '2021-08-04 03:45:13'),
(31, 16, 'palet 7.PNG', 'Kurniawan', 'Bank DKI', '085862173214', '2021-08-22 21:10:39', '2021-08-22 21:10:39'),
(32, 17, 'pexels-photo-1366919.jpeg', 'Kurniawan', 'BCA', '085847973222', '2021-08-23 05:30:03', '2021-08-23 05:30:03'),
(33, 18, 'pexels-photo-1324803.jpeg', 'Alex', 'BNI', '088822273412', '2021-08-23 05:32:09', '2021-08-23 05:32:09'),
(34, 20, 'palet 4.jpg', 'Kurniawan', 'Mandiri', '085865773214', '2021-08-26 07:46:45', '2021-08-26 07:46:45'),
(35, 31, 'profile2.jpg', 'Kurniawan', 'Bank DKI', '085865773214', '2021-08-27 01:43:27', '2021-08-27 01:43:27'),
(36, 32, 'photo-1433086966358-54859d0ed716.jpg', 'Kurniawan', 'Bank DKI', '085862173214', '2021-08-27 01:44:23', '2021-08-27 01:44:23'),
(37, 32, 'photo-1466853817435-05b43fe45b39.jpg', 'Alex', 'Mandiri', '085865773214', '2021-08-31 07:09:26', '2021-08-31 07:09:26'),
(38, 32, 'joyce-g-i_xDZbBTEgg-unsplash.jpg', 'Mark', 'BCA', '085847973222', '2021-08-31 07:15:58', '2021-08-31 07:15:58'),
(39, 33, 'photo-1564410267841-915d8e4d71ea.jpg', 'Kurniawan', 'Bank DKI', '085862173214', '2021-08-31 07:21:52', '2021-08-31 07:21:52'),
(40, 33, 'woodland-road-falling-leaf-natural-38537.jpeg', 'Kurniawan', 'BRI', '085865773214', '2021-09-02 05:41:47', '2021-09-02 05:41:47'),
(41, 35, 'photo-1575830873417-4edc3abb28a6.jpg', 'Kurniawan', 'BRI', '085865773214', '2021-09-03 07:52:04', '2021-09-03 07:52:04'),
(42, 36, '1249.jpg', 'Adi', 'Bank DKI', '085862173214', '2021-09-08 07:20:15', '2021-09-08 07:20:15'),
(43, 37, '1249.jpg', 'Farhan', 'Mandiri', '085862173214', '2021-09-08 20:20:55', '2021-09-08 20:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id` int(10) NOT NULL,
  `villa_id` int(10) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `malam` int(10) NOT NULL,
  `total_harga` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `villa_id`, `mulai`, `selesai`, `malam`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 10, '2020-12-18', '2020-12-21', 4, 84, '2021-05-30 11:37:09', '2021-05-30 11:37:09'),
(3, 9, '2021-05-30', '2021-06-01', 2, 42, '2021-05-30 12:37:50', '2021-05-30 12:37:50'),
(4, 11, '2021-05-30', '2021-06-02', 3, 54, '2021-05-30 12:43:36', '2021-05-30 12:43:36'),
(5, 8, '2021-05-30', '2021-05-31', 1, 26, '2021-05-30 12:52:12', '2021-05-30 12:52:12'),
(6, 14, '2021-06-02', '2021-06-06', 4, 116, '2021-05-30 12:55:36', '2021-05-30 12:55:36'),
(7, 8, '2021-05-31', '2021-06-02', 2, 52, '2021-05-30 23:42:30', '2021-05-30 23:42:30'),
(8, 10, '2021-06-01', '2021-06-02', 1, 21, '2021-05-31 04:17:06', '2021-05-31 04:17:06'),
(9, 10, '2021-05-31', '2021-06-01', 1, 21, '2021-05-31 06:39:48', '2021-05-31 06:39:48'),
(10, 10, '2021-06-06', '2021-06-09', 3, 63, '2021-06-05 06:59:34', '2021-06-05 06:59:34'),
(11, 11, '2021-06-08', '2021-06-09', 1, 18, '2021-06-08 12:35:32', '2021-06-08 12:35:32'),
(12, 14, '2021-06-18', '2021-06-20', 2, 58, '2021-06-10 03:51:09', '2021-06-10 03:51:09'),
(13, 8, '2021-06-19', '2021-06-20', 1, 26, '2021-06-18 11:59:17', '2021-06-18 11:59:17'),
(15, 9, '2021-08-05', '2021-08-07', 2, 42, '2021-08-04 10:44:24', '2021-08-04 10:44:24'),
(16, 11, '2021-08-23', '2021-08-25', 2, 36, '2021-08-23 04:10:01', '2021-08-23 04:10:01'),
(17, 14, '2021-08-22', '2021-08-26', 4, 116, '2021-08-23 12:29:38', '2021-08-23 12:29:38'),
(18, 14, '2021-08-22', '2021-08-26', 4, 116, '2021-08-23 12:31:52', '2021-08-23 12:31:52'),
(19, 10, '2021-08-27', '2021-08-30', 3, 63, '2021-08-26 07:44:19', '2021-08-26 07:44:19'),
(20, 10, '2021-08-27', '2021-08-30', 3, 63, '2021-08-26 07:46:24', '2021-08-26 07:46:24'),
(21, 11, '2021-08-20', '2021-08-23', 3, 54, '2021-08-26 08:03:01', '2021-08-26 08:03:01'),
(22, 14, '2021-08-26', '2021-08-28', 2, 58, '2021-08-26 08:05:09', '2021-08-26 08:05:09'),
(23, 11, '2021-08-27', '2021-08-30', 3, 54, '2021-08-26 08:29:27', '2021-08-26 08:29:27'),
(24, 11, '2021-08-27', '2021-08-30', 3, 54, '2021-08-26 08:29:47', '2021-08-26 08:29:47'),
(25, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:38:36', '2021-08-27 00:38:36'),
(26, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:39:36', '2021-08-27 00:39:36'),
(27, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:40:50', '2021-08-27 00:40:50'),
(28, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:41:32', '2021-08-27 00:41:32'),
(29, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:41:40', '2021-08-27 00:41:40'),
(30, 11, '2021-08-28', '2021-08-31', 3, 54, '2021-08-27 00:42:58', '2021-08-27 00:42:58'),
(31, 10, '2021-08-28', '2021-08-29', 1, 21, '2021-08-27 00:43:56', '2021-08-27 00:43:56'),
(32, 3, '2021-08-28', '2021-08-31', 3, 66, '2021-08-27 01:43:52', '2021-08-27 01:43:52'),
(33, 10, '2021-09-15', '2021-09-30', 15, 315, '2021-08-31 07:21:19', '2021-08-31 07:21:19'),
(34, 8, '2021-10-12', '2021-10-20', 8, 208, '2021-09-03 07:37:27', '2021-09-03 07:37:27'),
(35, 12, '2021-10-26', '2021-10-28', 2, 52, '2021-09-03 07:51:27', '2021-09-03 07:51:27'),
(36, 10, '2021-09-08', '2021-09-10', 2, 11000000, '2021-09-08 07:17:56', '2021-09-08 07:17:56'),
(37, 16, '2021-10-04', '2021-10-07', 3, 16500000, '2021-09-08 20:20:22', '2021-09-08 20:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_villa`
--

CREATE TABLE `tbl_villa` (
  `id` int(10) NOT NULL,
  `villa` varchar(50) NOT NULL,
  `foto_utama` varchar(255) NOT NULL,
  `foto_indoor` varchar(255) NOT NULL,
  `foto_outdoor` varchar(255) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` varchar(5) NOT NULL,
  `map` longtext DEFAULT NULL,
  `deskripsi` longtext NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `harga` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_villa`
--

INSERT INTO `tbl_villa` (`id`, `villa`, `foto_utama`, `foto_indoor`, `foto_outdoor`, `alamat`, `kategori`, `stok`, `map`, `deskripsi`, `nomor_hp`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Bukit Danau 14', 'image/VillaEmpatBelas_Utama.jpg', 'image/VillaEmpatBelas_Indoor.jpg', 'image/VillaEmpatBelas_Outdoor.jpg', 'Jl. Hanjawar No.KM.1, Puncak, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253', 'Bukit Danau', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5037049228886!2d107.02719591477175!3d-6.70821069515021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b702bdc4beab%3A0x5719b8c754aa599f!2sVilla%20Bukit%20Danau%20Adam!5e0!3m2!1sid!2sid!4v1631077662620!5m2!1sid!2sid', 'Villa Bukit Danau seri empat belas sangat cocok untuk tempat berlibur keluarga, terdiri dari tiga lantai yang memiliki lima kamar tidur, lima kamar mandi, ruang keluarga yang besar, balkon dan juga halaman yang luas tempat anak-anak bermain.', '-', 5800000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(2, 'ALW 3 ', 'image/ALW3_Utama.jpg', 'image/ALW3_Indoor.jpg', 'image/ALW3_Outdoor.jpg', 'Jl. Kota Bunga, Kabupaten Cianjur, Jawa Barat 43253', 'Kota Bunga', '1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.155308210438!2d107.03867776742861!3d-6.703891546547083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3d50918b7ab%3A0xb5bad0687b2025c8!2sVilla%20Kota%20Bunga%20-%20Adam!5e0!3m2!1sid!2sid!4v1631083784518!5m2!1sid!2sid', 'Villa ALW merupakan villa yang memiliki bangunan baru, konsep modern, interior yang mewah dan memiliki kolam renang pribadi. Hal ini menjadikannya sebagai salah satu villa mewah yang ada di puncak.', '-', 4500000, '2021-05-30 11:36:14', '2021-06-14 00:51:20'),
(3, 'Gadog 2', 'image/Gadog2_Utama.jpg', 'image/Gadog2_Indoor.jpg', 'image/Gadog2_Outdoor.jpg', 'Jl. Gadog No.184 Gadog Kec. Pacet Kabupaten Cianjur Jawa Barat 43253', 'Cipanas', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.228570439661!2d107.04451761477188!3d-6.741950095126263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3a9f25408ef%3A0xd1bc8ee096f3575f!2sJl.%20Gadog%20No.184%2C%20Gadog%2C%20Kec.%20Pacet%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631084343238!5m2!1sid!2sid', 'Villa gadog 2 memiliki empat kamar tidur, empat kamar mandi, ruang keluarga, dapur, teras, balkon serta kolam renang pribadi. Ini sangat cocok bagi siapapun yang ingin merasakan sensasi villa yang mewah dan bangunan baru.', '-', 4800000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(4, 'Galaksi Puncak', 'image/Galaksi_Utama.jpg', 'image/Galaksi_Indoor.jpg', 'image/Galaksi_Outdoor.jpg', 'Jl raya Hanjawar Pacet cipanas', 'Bukit Danau', '1', '', 'Villa Galaksi menjadi pilihan tepat sebab villa ini hanya berkisar satu jutaan saja sudah memiliki fasilitas kolam renang. Meskipun kolam renang umum, namun sudah free sepuasnya tidak di kenakan biaya lagi.', '-', 1200000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(5, 'Bukit Danau 13', 'image/VillaTigaBelas_Utama.jpg', 'image/VillaTigaBelas_Indoor.jpg', 'image/VillaTigaBelas_Outdoor.jpg', 'Jl. Hanjawar No.KM.1, Puncak, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253', 'Bukit Danau', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5037049228886!2d107.02719591477175!3d-6.70821069515021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b702bdc4beab%3A0x5719b8c754aa599f!2sVilla%20Bukit%20Danau%20Adam!5e0!3m2!1sid!2sid!4v1631077662620!5m2!1sid!2sid', 'Villa Tiga belas merupakan salah satu villa yang berlokasi di dalam komplek villa bukit danau. Lokasi villa ini berada di tepi danau yang indah. Di sekitar sini terdapat banyak ikan liar yang sangat cocok bagi pelanggan yang memiliki hobi memancing.', '-', 5500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(6, 'Klasik 3 Kamar', 'image/Klasik3Kamar_Utama.jpg', 'image/Klasik3Kamar_Indoor.jpg', 'image/Klasik3Kamar_Outdoor.jpg', 'Jl. Wisma Coolibah Cimacan Kec. Cipanas Kabupaten Cianjur Jawa Barat 43253', 'Coolibah', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.6119880804839!2d107.02313252917789!3d-6.715061199696585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3ef2f7f24ef%3A0xbf016a005f2b8397!2sJl.%20Wisma%20Coolibah%2C%20Cimacan%2C%20Kec.%20Cipanas%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631089716139!5m2!1sid!2sid', 'Villa klasik 3 kamar merupakan salah satu villa dengan bangunan bergaya tempo dulu yang berlokasi di dalam komplek villa coolibah puncak. Villa ini mempunyai 1 lantai dengan 3 kamar tidur dan dilengkapi dengan fasilitas kolam renang pribadi serta memiliki pemandangan gunung yang indah.', '-', 3500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(7, 'Gadog 1', 'image/Gadog1_Utama.jpg', 'image/Gadog1_Indoor.jpg', 'image/Gadog1_Outdoor.jpg', 'Jl. Gadog No.184 Gadog Kec. Pacet Kabupaten Cianjur Jawa Barat 43253\r\n ', 'Cipanas', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.228570439661!2d107.04451761477188!3d-6.741950095126263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3a9f25408ef%3A0xd1bc8ee096f3575f!2sJl.%20Gadog%20No.184%2C%20Gadog%2C%20Kec.%20Pacet%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631084343238!5m2!1sid!2sid', 'Villa Gadog 1 memiliki 4 buah kamar tidur, 2 kamar mandi, ruang keluarga, dapur, parkiran yang luas dan kolam renang pribadi.', '-', 4500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(8, 'Agus', 'image/Agus_Utama.jpg', 'image/Agus_Indoor.jpg', 'image/Agus_Outdoor.jpg', 'Jl. Hanjawar No.KM.1, Puncak, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253', 'Bukit Danau', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5037049228886!2d107.02719591477175!3d-6.70821069515021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b702bdc4beab%3A0x5719b8c754aa599f!2sVilla%20Bukit%20Danau%20Adam!5e0!3m2!1sid!2sid!4v1631077662620!5m2!1sid!2sid', 'Villa Agus merupakan villa yang cocok untuk rombongan dengan fasilitas yang mencover hampir semua kegiatan seperti kolam renang pribadi, lapangan sangat luas bisa di pakai main bola ataupun kegiatan fun game, billiard, karaoke, alat Gym, play ground anak, alat masak, alat makan dan pemandangan pegunungan yang indah.', '-', 12000000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(9, 'Liverpool 3', 'image/LiverpoolTiga_Utama.jpg', 'image/LiverpoolTiga_Indoor.jpg', 'image/LiverpoolTiga_Outdoor.jpg', 'Jl. Kota Bunga, Kabupaten Cianjur, Jawa Barat 43253', 'Kota Bunga', '1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.155308210438!2d107.03867776742861!3d-6.703891546547083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3d50918b7ab%3A0xb5bad0687b2025c8!2sVilla%20Kota%20Bunga%20-%20Adam!5e0!3m2!1sid!2sid!4v1631083784518!5m2!1sid!2sid', 'Villa liverpool memiliki fasilitas kolam renang pribadi, free wifi, ac dan perlatan lainya.', '-', 3500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(10, 'Coolibah Klasik 6', 'image/Coolibah6_Utama.jpg', 'image/Coolibah6_Indoor.jpg', 'image/Coolibah6_Outdoor.jpg', 'Jl. Wisma Coolibah Cimacan Kec. Cipanas Kabupaten Cianjur Jawa Barat 43253', 'Coolibah', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.6119880804839!2d107.02313252917789!3d-6.715061199696585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3ef2f7f24ef%3A0xbf016a005f2b8397!2sJl.%20Wisma%20Coolibah%2C%20Cimacan%2C%20Kec.%20Cipanas%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631089716139!5m2!1sid!2sid', 'Villa untuk kapasitas 20, 30 s.d 40 orang dengan fasilitas billiard, kolam renang pribadi dan memiliki view alam yang indah.', '-', 5500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(11, 'CB 34', 'image/CB34_Utama.jpg', 'image/CB34_Indoor.jpg', 'image/CB34_Outdoor.jpg', 'Jl. Wisma Coolibah Cimacan Kec. Cipanas Kabupaten Cianjur Jawa Barat 43253', 'Coolibah', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.6119880804839!2d107.02313252917789!3d-6.715061199696585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3ef2f7f24ef%3A0xbf016a005f2b8397!2sJl.%20Wisma%20Coolibah%2C%20Cimacan%2C%20Kec.%20Cipanas%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631089716139!5m2!1sid!2sid', 'Teruntuk pelanggan yang sedang mencari villa dengan fasilitas kolam renang pribadi dan billiard di puncak untuk kapasitas s.d 30 orang dan harga yang cukup terjangkau, anda bisa menggunakan villa CB 34 Puncak.', '-', 3800000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(12, 'Oxford', 'image/Oxford_Utama.jpg', 'image/Oxford_Indoor.jpg', 'image/Oxford_Outdoor.jpg', 'Jl. Kota Bunga, Kabupaten Cianjur, Jawa Barat 43253', 'Kota Bunga', '1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.155308210438!2d107.03867776742861!3d-6.703891546547083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3d50918b7ab%3A0xb5bad0687b2025c8!2sVilla%20Kota%20Bunga%20-%20Adam!5e0!3m2!1sid!2sid!4v1631083784518!5m2!1sid!2sid', 'Villa oxford merupakan villa bernuansa eropa yang terdiri dari 2 lantai dengan 3 buah kamar tidur ( 1 di bawah, 2 di atas ) , 2 kamar mandi ( 1 di bawah luar, 1 di atas dalam kamar ).', '-', 1500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(13, 'Birmingham', 'image/Bimirgham_Utama.jpg', 'image/Bimirgham_Indoor.jpg', 'image/Bimirgham_Outdoor.jpg', 'Jl. Kota Bunga, Kabupaten Cianjur, Jawa Barat 43253', 'Kota Bunga', '1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.155308210438!2d107.03867776742861!3d-6.703891546547083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3d50918b7ab%3A0xb5bad0687b2025c8!2sVilla%20Kota%20Bunga%20-%20Adam!5e0!3m2!1sid!2sid!4v1631083784518!5m2!1sid!2sid', 'Villa ini merupakan salah satu villa yang memiliki nuansa eropa. Villa ini sangat terbatas.', '-', 4000000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(14, 'CB28', 'image/CB28_Utama.jpg', 'image/CB28_Indoor.jpg', 'image/CB28_Outdoor.jpg', 'Jl. Hanjawar No.KM.1, Puncak, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253', 'Bukit Danau', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5037049228886!2d107.02719591477175!3d-6.70821069515021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b702bdc4beab%3A0x5719b8c754aa599f!2sVilla%20Bukit%20Danau%20Adam!5e0!3m2!1sid!2sid!4v1631077662620!5m2!1sid!2sid', 'Villa dengan 4 kamar di puncak memiliki fasilitas kolam renang pribadi untuk kapasitas s.d 30 orang bisa lah mencoba menggunakan villa CB 28 yang satu ini.', '-', 4500000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(15, 'Andri', 'image/Andri_Utama.jpg', 'image/Andri_Indoor.jpg', 'image/Andri_Outdoor.jpg', 'Jl. Kota Bunga, Kabupaten Cianjur, Jawa Barat 43253', 'Kota Bunga', '1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.155308210438!2d107.03867776742861!3d-6.703891546547083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3d50918b7ab%3A0xb5bad0687b2025c8!2sVilla%20Kota%20Bunga%20-%20Adam!5e0!3m2!1sid!2sid!4v1631083784518!5m2!1sid!2sid', 'Villa andri adalah villa dengan bangunan 1 lantai yang di lengkapi fasilitas kolam renang pribadi', '-', 4000000, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(16, 'Asih 5', 'image/Asih5_Utama.jpg', 'image/Asih5_Indoor.jpg', 'image/Asih5_Outdoor.jpg', 'Palasari Kec. Cipanas Kabupaten Cianjur Jawa Barat 43253 ', 'Cipanas', '1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.623765979389!2d107.03105272917787!3d-6.709272899696838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3dd9467c57d%3A0xf5eefdedbc267324!2sPalasari%2C%20Kec.%20Cipanas%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043253!5e0!3m2!1sid!2sid!4v1631156013147!5m2!1sid!2sid', 'Villa asih terdiri dari dua lantai memiliki lima buah kamar tidur, tiga kamar mandi, ruang keluarga, dapur, playground anak, kolam renang, musola dan car port luas\r\n', '-', 5500000, '2021-09-09 03:09:52', '2021-09-09 03:09:52'),
(17, 'Hanjawar 10', 'image/Hanjawar10_Utama.jpg', 'image/Hanjawar10_Indoor.jpg', 'image/Hanjawar10_Outdoor.jpg', 'Jl raya kota bunga puncak, dekat hotel sahid eminem', 'Cipanas', '1', '', 'Villa Hanjawar 10 memiliki 10 kamar tidur, 10 kamar mandi, kolam renang pribadi yang biasa di gunakan untuk acara gathering kantor dan keluarga besar.', '-', 9000000, '2021-09-09 03:09:52', '2021-09-09 03:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimoni` longtext NOT NULL,
  `bintang` int(1) NOT NULL DEFAULT 5,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `user_id`, `testimoni`, `bintang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mesan villa disini cukup mudah dan villa yang tersedia kualitasnya bukan kaleng-kaleng....', 5, '2021-05-30 05:50:07', '2021-05-30 05:50:07'),
(2, 2, 'SERUUU.... POKOKNYA KALIAN MESTI COBA', 5, '2021-05-30 05:53:35', '2021-05-30 05:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `foto`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 'Farhan', 'fanshari62@gmail.com', '2021-05-30 12:35:53', '$2y$10$kyy7S3SE9mqs/xx6gFjyp.l08hLjCV1GUJQ06IDRrhqhNsDU9xAtq', 'profile2.jpg', 'Mahasiswa', '2021-05-30 05:35:53', '2021-05-30 05:35:53'),
(2, 'Anshari', 'farhanshr346@gmail.com', '2021-05-30 12:51:21', '$2y$10$qkaCXVo3Nzt8VD7rfK7A7eZ4Ot4Td/Z1qMeCkju7eQhaU0QIAg5vy', 'foto1.jpg', 'Mahasiswa', '2021-05-30 05:51:21', '2021-05-30 05:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provils`
--
ALTER TABLE `provils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_id` (`pemesanan_id`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villa_id` (`villa_id`);

--
-- Indexes for table `tbl_villa`
--
ALTER TABLE `tbl_villa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provils`
--
ALTER TABLE `provils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_villa`
--
ALTER TABLE `tbl_villa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`pemesanan_id`) REFERENCES `tbl_pemesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD CONSTRAINT `tbl_pemesanan_ibfk_1` FOREIGN KEY (`villa_id`) REFERENCES `tbl_villa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
