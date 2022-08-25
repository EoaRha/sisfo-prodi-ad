-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2022 at 11:21 AM
-- Server version: 10.8.3-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `slug`, `deskripsi`, `status`, `popular`, `image`, `meta_title`, `meta_deskripsi`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Madu', 'madu', 'madu bla bla', 1, 1, '1657786847.jpg', 'madu bla bla bla', 'madu bla bla bla', 'madu bla bla bla', '2022-07-14 01:20:47', '2022-07-14 02:36:10'),
(2, 'Kurma', 'kurma', 'kurma bla bla', 1, 1, '1657786892.jpg', 'kurma bla bla bla', 'kurma bla bla bla', 'kurma bla bla bla', '2022-07-14 01:21:32', '2022-07-14 02:36:31'),
(3, 'Minyak Zaitun', 'minyak-zaitun', 'minyak Zaitun bla bla', 1, 1, '1657786976.jpg', 'minyak zaitun bla bla bla', 'minyak zaitun bla bla bla', 'minyak zaitun bla bla bla', '2022-07-14 01:22:56', '2022-07-14 02:36:51'),
(4, 'Kapsul', 'kapsul', 'kapsul bla bla', 1, 0, '1657787024.jpg', 'kapsul bla bla bla', 'kapsul bla bla bla', 'kapsul bla bla bla', '2022-07-14 01:23:44', '2022-07-14 02:37:15'),
(5, 'Herbal Anak', 'herbal-anak', 'herbal anak bla bla', 1, 0, '1657787059.jpg', 'herbal anak bla bla bla', 'herbal anak bla bla bla', 'herbal anak bla bla bla', '2022-07-14 01:24:19', '2022-07-14 02:37:33'),
(6, 'Habbatussauda', 'habbatussauda', 'habbatussauda bla bla', 1, 0, '1657787092.jpg', 'habbatussauda bla bla bla', 'habbatussauda bla bla bla', 'habbatussauda bla bla bla', '2022-07-14 01:24:52', '2022-07-14 02:37:56'),
(7, 'tes', 'tes', 'testestestestestestestestestestes', 1, 1, '1657786847.jpg', 'tes-tes-tes-tes', 'tes-tes-tes-testes-tes-tes-testes-tes-tes-testes-tes-tes-testes-tes-tes-tes', 'tes-tes-tes-tes', '2022-08-16 04:28:32', '2022-08-16 04:28:32'),
(8, 'kate', 'kate', 'tes import kategori', 1, 1, '1657786892.jpg', 'kate-tes-import', 'kate-tes-import kate-tes-importkate-tes-importkate-tes-importkate-tes-importkate-tes-importkate-tes-import', 'kate-tes-import', '2022-08-16 06:09:10', '2022-08-16 06:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2022_04_11_045221_create_provinces_table', 2),
(12, '2022_04_11_045240_create_cities_table', 2),
(45, '2014_10_12_000000_create_users_table', 3),
(46, '2014_10_12_100000_create_password_resets_table', 3),
(47, '2019_08_19_000000_create_failed_jobs_table', 3),
(48, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(49, '2022_03_11_065335_create_kategori_table', 3),
(50, '2022_03_15_015732_create_products_table', 3),
(51, '2022_03_22_050217_create_carts_table', 3),
(52, '2022_03_29_041724_create_orders_table', 3),
(53, '2022_03_29_061415_create_order_items_table', 3),
(54, '2022_03_30_091632_create_wishlists_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ekspedisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_belanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = pendding\r\n1 = sudah bayar\r\n2 = kadaluarsa\r\n3 = batal',
  `no_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaksi_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `alamat`, `provinsi`, `tipe`, `kota`, `kecamatan`, `kode_pos`, `ekspedisi`, `paket`, `estimasi`, `total_belanja`, `berat`, `ongkir`, `total`, `status`, `no_resi`, `catatan_admin`, `tracking_no`, `payment_status`, `transaksi_id`, `transaksi_time`, `payment_type`, `payment_code`, `pdf_url`, `bukti`, `created_at`, `updated_at`) VALUES
(19, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Bali', 'Kota', 'Denpasar', 'Denpasar Barat', '80227', 'jne', 'OKE', '2-3', '120000', '900', '24000', 144000, 0, NULL, NULL, 'NHI-98767352352752', 'pending', 'f2a3048e-623c-4141-92cc-6ac207fffbfb', '2022-08-11 10:45:01', 'cstore', '232172994207', 'https://app.sandbox.midtrans.com/snap/v1/transactions/aa352d85-1c17-46ec-a066-b49ba31b8ae7/pdf', NULL, '2022-08-11 03:44:30', '2022-08-11 03:49:21'),
(20, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Kalimantan Tengah', 'Kabupaten', 'Gunung Mas', 'Manuhing Raya', '74511', 'jne', 'REG', '10+', '100000', '700', '67000', 167000, 0, NULL, NULL, 'NHI-82453890942759', 'pending', '1b47d5ea-8cae-45a0-aff6-ae50099ae7db', '2022-08-11 11:21:30', 'gopay', NULL, NULL, NULL, '2022-08-11 04:21:10', '2022-08-11 04:24:48'),
(21, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Jawa Barat', 'Kota', 'Bogor', 'Bogor Selatan - Kota', '16119', 'jne', 'REG', '1-2', '500000', '3500', '36000', 536000, 1, 'contoh no resi', 'selesai', 'NHI-90286573083649', 'settlement', '1da69360-dd4b-4957-9065-04cd41bfa68b', '2022-08-11 11:29:30', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/0e379c60-5d5b-4000-a27c-a0afe913b915/pdf', 'freesnippingtool.com_capture_20200610092730.png.png', '2022-08-11 04:29:18', '2022-08-16 02:11:14'),
(22, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'DKI Jakarta', 'Kota', 'Jakarta Barat', 'Taman Sari', '11220', 'jne', 'OKE', '2-3', '100000', '700', '8000', 108000, 0, NULL, NULL, 'NHI-61686360095903', 'capture', '4bc5ef5d-3c9a-4e12-80a1-9a9e2733a215', '2022-08-11 13:56:58', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/1c5157b0-a15d-4230-86e6-f7f8464542ae/pdf', NULL, '2022-08-11 06:56:35', '2022-08-11 07:23:48'),
(23, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Sumatera Barat', 'Kabupaten', 'Agam', 'Palembayan', '26411', 'jne', 'OKE', '4-7', '330000', '500', '45000', 375000, 0, NULL, NULL, 'NHI-19087108339212', 'settlement', 'fba682b4-7d51-494d-85fe-7d99cbeb1806', '2022-08-11 16:39:03', 'cstore', '782172994207', 'https://app.sandbox.midtrans.com/snap/v1/transactions/336988ff-c98c-437d-83d3-981149903ec9/pdf', NULL, '2022-08-11 09:36:57', '2022-08-11 09:39:40'),
(24, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Maluku', 'Kota', 'Ambon', 'Sirimau', '97222', 'jne', 'OKE', '3-5', '100000', '700', '75000', 175000, 0, NULL, NULL, 'NHI-957077002739', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 09:41:27', '2022-08-11 09:41:27'),
(25, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Alor', 'Pantar Timur', '85811', 'jne', 'OKE', '6-10', '50000', '350', '77000', 127000, 0, NULL, NULL, 'NHI-95114589097728', 'pending', 'a89f3533-88f4-4ada-a4aa-33451dcdf3e0', '2022-08-12 15:48:00', 'qris', NULL, NULL, '14 januari 2022.PNG.PNG', '2022-08-12 08:47:31', '2022-08-15 09:59:58'),
(26, '1', 'admin', 'nhi', 'admin@gmail.com', '082172994207', 'Jalan talas iv', 'Jawa Barat', 'Kabupaten', 'Bandung', 'Banjaran', '40311', 'jne', 'OKE', '2-3', '150000', '1050', '10000', 160000, 1, 'contoh no resi', 'tes', 'NHI-43188844383615', 'settlement', '4a5f8fbc-8e66-4e27-8c9b-b7dd918deada', '2022-08-18 10:37:12', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/f7ac3911-42a5-4c5f-a1fe-f819a3d918ae/pdf', 'freesnippingtool.com_capture_20220816162908.png.png', '2022-08-18 03:36:52', '2022-08-18 03:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2', '165000', '2022-07-17 19:27:37', '2022-07-17 19:27:37'),
(2, '3', '2', '3', '165000', '2022-07-17 19:35:44', '2022-07-17 19:35:44'),
(3, '4', '1', '3', '75000', '2022-07-17 19:46:26', '2022-07-17 19:46:26'),
(4, '5', '1', '2', '75000', '2022-07-18 02:59:06', '2022-07-18 02:59:06'),
(5, '6', '6', '3', '20000', '2022-07-18 03:03:12', '2022-07-18 03:03:12'),
(6, '7', '3', '3', '50000', '2022-07-18 06:25:51', '2022-07-18 06:25:51'),
(7, '8', '2', '3', '165000', '2022-07-19 07:49:04', '2022-07-19 07:49:04'),
(8, '9', '2', '20', '165000', '2022-08-09 04:07:04', '2022-08-09 04:07:04'),
(9, '10', '3', '4', '50000', '2022-08-10 03:28:54', '2022-08-10 03:28:54'),
(10, '11', '2', '3', '165000', '2022-08-10 03:37:04', '2022-08-10 03:37:04'),
(11, '12', '3', '1', '50000', '2022-08-10 03:40:21', '2022-08-10 03:40:21'),
(12, '13', '6', '6', '20000', '2022-08-10 03:44:15', '2022-08-10 03:44:15'),
(13, '14', '4', '2', '50000', '2022-08-10 03:57:25', '2022-08-10 03:57:25'),
(14, '15', '7', '2', '60000', '2022-08-10 09:03:58', '2022-08-10 09:03:58'),
(15, '16', '5', '3', '40000', '2022-08-10 09:13:29', '2022-08-10 09:13:29'),
(16, '17', '2', '2', '165000', '2022-08-11 02:15:07', '2022-08-11 02:15:07'),
(17, '18', '6', '1', '20000', '2022-08-11 02:48:32', '2022-08-11 02:48:32'),
(18, '19', '7', '2', '60000', '2022-08-11 03:44:30', '2022-08-11 03:44:30'),
(19, '20', '3', '2', '50000', '2022-08-11 04:21:10', '2022-08-11 04:21:10'),
(20, '21', '3', '10', '50000', '2022-08-11 04:29:18', '2022-08-11 04:29:18'),
(21, '22', '3', '2', '50000', '2022-08-11 06:56:35', '2022-08-11 06:56:35'),
(22, '23', '2', '2', '165000', '2022-08-11 09:36:57', '2022-08-11 09:36:57'),
(23, '24', '3', '2', '50000', '2022-08-11 09:41:27', '2022-08-11 09:41:27'),
(24, '25', '3', '1', '50000', '2022-08-12 08:47:31', '2022-08-12 08:47:31'),
(25, '26', '3', '3', '50000', '2022-08-18 03:36:52', '2022-08-18 03:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kate_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kate_id`, `name`, `slug`, `small_deskripsi`, `deskripsi`, `original_price`, `selling_price`, `image`, `qty`, `weight`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Madu Hijau', 'madu-hijau', 'madu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijau', 'madu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijau', '100000', '75000', '1657790428.jpg', '0', '210', 1, 0, 'madu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijau', 'madu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijau', 'madu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijaumadu-hijau', '2022-07-14 02:20:28', '2022-07-19 07:37:50'),
(2, 1, 'Madu Bajakah Borneo', 'madu-bajaka-borneo', 'madu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneo', 'madu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneo', '200000', '165000', '1657790523.jpg', '65', '250', 1, 1, 'madu-bajaka-borneo', 'madu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneo', 'madu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneomadu-bajaka-borneo', '2022-07-14 02:22:03', '2022-08-11 09:36:57'),
(3, 1, 'Madu TW', 'madu-tw', 'madu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-tw', 'madu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-tw', '75000', '50000', '1657790638.jpg', '72', '350', 1, 1, 'madu-tw', 'madu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-tw', 'madu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-twmadu-tw', '2022-07-14 02:23:58', '2022-08-18 03:36:52'),
(4, 1, 'Madu Alshifa', 'madu-alshifa', 'madu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifa', 'madu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifa', '80000', '50000', '1657790824.jpg', '98', '500', 1, 1, 'madu-alshifa', 'madu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifa', 'madu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifamadu-alshifa', '2022-07-14 02:27:04', '2022-08-10 03:57:25'),
(5, 1, 'Madu Adz Dzikro', 'madu-adz-dzikro', 'madu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikro', 'madu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikromadu-adz-dzikro', '65000', '40000', '1657791007.jpg', '97', '500', 1, 1, 'madu-adz-dzikro', 'madu-adz-dzikro', 'madu-adz-dzikro', '2022-07-14 02:30:07', '2022-08-10 09:13:29'),
(6, 3, 'Minyak Kutus Kutus', 'minyak-kutus-kutus', 'minyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutus', 'minyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutus', '30000', '20000', '1657791118.jpg', '90', '100', 1, 1, 'minyak-kutus-kutus', 'minyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutus', 'minyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutusminyak-kutus-kutus', '2022-07-14 02:31:58', '2022-08-11 02:48:32'),
(7, 1, 'Madu Hitam Pahit', 'madu-hitam-pahit', 'madu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahit', 'madu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahit', '85000', '60000', '1657791290.jpg', '96', '450', 1, 1, 'madu-hitam-pahit', 'madu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahit', 'madu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahitmadu-hitam-pahit', '2022-07-14 02:34:50', '2022-08-11 03:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `email_verified_at`, `password`, `phone`, `alamat`, `provinsi`, `tipe`, `kota`, `kecamatan`, `kode_pos`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nhi', 'admin@gmail.com', NULL, '$2y$10$dOUyVzYirHnfPK63/zRWOOWjA40NtpMCLuUlmljnXIZlTPhmnq7K.', '082172994207', 'Jalan talas iv', 'Banten', 'Kota', 'Tangerang Selatan', 'Pamulang', '15435', 1, NULL, '2022-07-14 01:17:41', '2022-07-14 03:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_no` (`tracking_no`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
