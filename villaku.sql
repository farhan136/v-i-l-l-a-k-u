-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 11:11 AM
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Yusuf', 'yusuf20', '201098');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(10) NOT NULL,
  `pemesanan_id` int(10) NOT NULL,
  `upload_bukti` varchar(191) NOT NULL,
  `nama_pengirim` varchar(191) NOT NULL,
  `asal_bank` varchar(191) NOT NULL,
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
(25, 9, 'photo-1541789094913-f3809a8f3ba5.jpg', 'Rijal', 'BCA', '085765993674', '2021-05-30 23:47:44', '2021-05-30 23:47:44');

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
(9, 10, '2021-05-31', '2021-06-01', 1, 21, '2021-05-31 06:39:48', '2021-05-31 06:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int(10) NOT NULL,
  `foto_utama` varchar(191) NOT NULL,
  `foto_indoor` varchar(191) NOT NULL,
  `foto_outdoor` varchar(191) NOT NULL,
  `villa` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `foto_utama`, `foto_indoor`, `foto_outdoor`, `villa`, `alamat`, `provinsi`, `deskripsi`, `nomor_hp`, `harga`) VALUES
(1, '5fdcb5aa36985.jpg', '5fdcb5aa36ac0.jpg', '5fdcb5aa36bab.jpg', 'Storge', 'Jalan Putaran Jaya RT29/31 No.26, Kabupaten Tabanana', 'Bali', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030300', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_villa`
--

CREATE TABLE `tbl_villa` (
  `id` int(10) NOT NULL,
  `villa` varchar(191) NOT NULL,
  `foto_utama` varchar(191) NOT NULL,
  `foto_indoor` varchar(191) NOT NULL,
  `foto_outdoor` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `pulau` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `harga` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_villa`
--

INSERT INTO `tbl_villa` (`id`, `villa`, `foto_utama`, `foto_indoor`, `foto_outdoor`, `alamat`, `provinsi`, `pulau`, `deskripsi`, `nomor_hp`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Acropolis', 'image/acropolis1.jpg', 'image/acropolis2.jpg', 'image/acropolis3.jpg', 'Jalan Putaran Jaya RT29/31 No.26, Kabupaten Tabanana', 'Jogyakarta', 'Jawa', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030666', 19, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(2, 'Seminyak', 'image/seminyak1.jpg', 'image/seminyak2.jpg', 'image/seminyak3.jpg', 'Jalan Permata Sari RT16/03 No.34, Kabupaten Ketapang', 'Kalimantan', 'Kalimantan', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030777', 20, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(3, 'Ubud', 'image/ubud1.jpg', 'image/ubud2.jpg', 'image/ubud3.jpg', 'Jalan Pantai Kejora RT20/10 NO.10, Kabupaten Mempawah', 'Kalimantan', 'Kalimantan', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030233', 22, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(4, 'Uluwatu', 'image/uluwatu1.jpg', 'image/uluwatu2.jpg', 'image/uluwatu3.jpg', 'Jalan Kelabaran Jaksa RT21/27 No.34, Kabupaten Bengkayang', 'Kalimantan', 'Kalimantan', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030999', 15, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(5, 'Wake', 'image/wake1.jpg', 'image/wake2.jpg', 'image/wake3.jpg', 'Jalan Campur Asih Raya RT12/13 No.21, Kabupaten Ketapang', 'Kalimantan', 'Kalimantan', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030666', 24, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(6, 'Kejora', 'image/kejora1.jpg', 'image/kejora2.jpg', 'image/kejora3.jpg', 'Jalan Pantai Kejora RT20/10 NO.10, Kabupaten Mempawah', 'Kalimantan', 'Kalimantan', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030777', 17, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(7, 'Athena', 'image/athena1.jpg', 'image/athena2.jpg', 'image/athena3.jpg', 'Jalan Putaran Jaya RT29/31 No.26, Kabupaten Tabanana', 'Bali', 'Bali', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 21, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(8, 'Coraffan', 'image/coraffan1.jpg', 'image/coraffan2.jpg', 'image/coraffan3.jpg', 'Jalan Nirmala RT02/01 No.34, Kabupaten Pesagen', 'Bali', 'Bali', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 26, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(9, 'Agape', 'image/agape1.jpg', 'image/agape2.jpg', 'image/agape3.jpg', 'Jalan Mutiara Jernih RT02/12 No.35, Kabupaten Asih', 'Bali', 'Bali', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030300', 21, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(10, 'Nirwana', 'image/nirwana1.jpg', 'image/nirwana2.jpg', 'image/nirwana3.jpg', 'Jalan Putaran Jaya RT29/31 No.26, Kabupaten Sleman', 'Jogyakarta', 'Jawa', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 21, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(11, 'Nirmala', 'image/nirmala1.jpg', 'image/nirmala2.jpg', 'image/nirmala3.jpg', 'Jalan Laut Selatan RT02/01 No.24, Kabupaten Mekarsari', 'Jogyakarta', 'Jawa', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021444555623', 18, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(12, 'Azaya', 'image/azaya1.jpg', 'image/azaya2.jpg', 'image/azaya3.jpg', 'Jalan Pantai Kejora RT20/10 NO.10, Kabupaten Mempawah', 'Bali', 'Bali', 'illa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021444555623', 26, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(13, 'Jawel', 'image/jawel1.jpg', 'image/jawel2.jpg', 'image/jawel3.jpg', 'Jalan Putaran Jaya RT29/31 No.26, Kabupaten Kebakaran', 'Bali', 'Bali', 'illa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 27, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(14, 'Pancaloka', 'image/pancaloka1.jpg', 'image/pancaloka2.jpg', 'image/pancaloka3.jpg', 'Jalan Campur Asih Raya RT12/13 No.21, Kabupaten Ketapang', 'Jogyakarta', 'Jawa', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 29, '2021-05-30 11:36:14', '2021-05-30 11:36:14'),
(15, 'Pool', 'image/pool1.jpg', 'image/pool2.jpg', 'image/pool3.jpg', 'Jalan Pantai Kejora RT20/10 NO.10, Kabupaten Mempawah', 'Jogyakarta', 'Jawa', 'Villa ini terletak tepat di tengah kota dengan 42 kamar dan suite. Mereka mengusung konsep minimalis industrial-chic black-and-white yang sangat unik untuk hotel-hotel di Manado. Konsep seperti ini jarang ditemukan bahkan di Bali untuk kelas hotel seperti itu! Kami melakukan sesi pemotretan perdana pada November 2017 dan tindak lanjut pada April 2018, tepat sebelum hotel siap untuk bisnis. Secara total, kami menghabiskan empat hari untuk membahas semua interior dan eksterior hotel, makanan dan sarapan, serta beberapa detail. Kami sangat berterima kasih dan mengucapkan terima kasih kepada pemilik hotel, manajemen, serta semua manajer dan staf yang sangat bersemangat untuk membantu kami dalam proses pengambilan foto.', '021202030302', 17, '2021-05-30 11:36:14', '2021-05-30 11:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimoni` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `user_id`, `testimoni`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mesan villa disini cukup mudah dan villa yang tersedia kualitasnya bukan kaleng-kaleng....', '2021-05-30 05:50:07', '2021-05-30 05:50:07'),
(2, 2, 'SERUUU.... POKOKNYA KALIAN MESTI COBA', '2021-05-30 05:53:35', '2021-05-30 05:53:35');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_villa`
--
ALTER TABLE `tbl_villa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
