-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 09:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guestbooks`
--

CREATE TABLE `guestbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `score_food` int(11) NOT NULL,
  `score_service` int(11) NOT NULL,
  `score_ambiance` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `message_sentiment` varchar(255) DEFAULT NULL,
  `fuzzy_score` decimal(5,2) DEFAULT NULL,
  `satisfaction_class` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guestbooks`
--

INSERT INTO `guestbooks` (`id`, `customer_name`, `phone`, `score_food`, `score_service`, `score_ambiance`, `message`, `message_sentiment`, `fuzzy_score`, `satisfaction_class`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', '081234567890', 95, 90, 92, 'Makanannya enak banget, pelayanannya ramah dan cepat. Pasti balik lagi!', 'Positif', 92.50, 'Sangat Puas', '2025-11-26 22:10:11', '2025-11-26 22:10:11'),
(2, 'Siti Aminah', '081298765432', 100, 95, 90, 'The best restaurant in town! Suasana cozy dan makanannya juara.', 'Positif', 95.00, 'Sangat Puas', '2025-11-25 22:10:11', '2025-11-25 22:10:11'),
(3, 'Andi Pratama', '085712312312', 90, 85, 88, 'Sangat puas dengan kualitasnya. Harga worth it.', 'Positif', 87.50, 'Sangat Puas', '2025-11-24 22:10:11', '2025-11-24 22:10:11'),
(4, 'Dewi Sartika', '081345645645', 85, 90, 95, 'Tempatnya estetik parah, bagus buat foto-foto. Makanan juga oke.', 'Positif', 90.00, 'Sangat Puas', '2025-11-23 22:10:11', '2025-11-23 22:10:11'),
(5, 'Rahmat Hidayat', '081900001111', 90, 90, 90, 'Pelayanan gercep banget. Makanannya fresh dan hangat.', 'Positif', 90.00, 'Sangat Puas', '2025-11-26 21:10:11', '2025-11-26 21:10:11'),
(6, 'Citra Lestari', '082122223333', 75, 80, 70, 'Lumayan enak, cuma parkirannya agak sempit.', 'Netral', 75.00, 'Puas', '2025-11-22 22:10:11', '2025-11-22 22:10:11'),
(7, 'Eko Purnomo', '081233334444', 60, 65, 60, 'Standar aja sih rasanya. Not bad.', 'Netral', 61.50, 'Puas', '2025-11-21 22:10:11', '2025-11-21 22:10:11'),
(8, 'Fajar Nugraha', '085677778888', 50, 50, 50, 'Cukup oke buat nongkrong, tapi makanan perlu ditingkatkan.', 'Netral', 50.00, 'Cukup', '2025-11-20 22:10:11', '2025-11-20 22:10:11'),
(9, 'Gita Gutawa', '081299990000', 55, 60, 50, 'Harganya terjangkau, tapi rasa biasa aja.', 'Positif', 55.00, 'Cukup', '2025-11-24 22:10:11', '2025-11-24 22:10:11'),
(10, 'Hendra Wijaya', '081311112222', 70, 70, 70, 'Oke lah buat makan siang.', 'Positif', 70.00, 'Puas', '2025-11-26 10:10:11', '2025-11-26 10:10:11'),
(11, 'Indah Permata', '081255556666', 30, 20, 40, 'Kecewa banget. Makanannya asin parah dan dingin.', 'Negatif', 30.00, 'Kurang Puas', '2025-11-19 22:10:11', '2025-11-19 22:10:11'),
(12, 'Joko Susilo', '085788889999', 20, 10, 30, 'Pelayanan sangat lambat! Nunggu 1 jam gak dateng-dateng.', 'Negatif', 20.00, 'Kurang Puas', '2025-11-12 22:10:11', '2025-11-12 22:10:11'),
(13, 'Kartika Putri', '081200009999', 40, 30, 20, 'Tempatnya kotor dan banyak lalat. Tolong kebersihannya.', 'Negatif', 30.00, 'Kurang Puas', '2025-11-23 22:10:11', '2025-11-23 22:10:11'),
(14, 'Lukman Hakim', '081344445555', 25, 25, 25, 'Harganya mahal tapi porsinya dikit banget. Gak worth it.', 'Negatif', 25.00, 'Kurang Puas', '2025-11-26 17:10:11', '2025-11-26 17:10:11'),
(15, 'Maya Sari', '082166667777', 10, 10, 10, 'Sangat buruk. Pelayan jutek dan kasar. Kapok makan sini.', 'Negatif', 10.00, 'Kurang Puas', '2025-11-25 22:10:11', '2025-11-25 22:10:11'),
(16, 'Nanda Putra', '081277778888', 85, 80, 85, 'Suka sama ambience-nya, tenang dan nyaman.', 'Positif', 83.00, 'Sangat Puas', '2025-11-26 18:10:11', '2025-11-26 18:10:11'),
(17, 'Oki Setiawan', '085699990000', 45, 40, 50, 'Bising banget suaranya, jadi pusing.', 'Negatif', 45.00, 'Cukup', '2025-11-26 16:10:11', '2025-11-26 16:10:11'),
(18, 'Putri Ayu', '081212123434', 92, 92, 92, 'Perfect! Gak ada obat rasanya.', 'Positif', 92.00, 'Sangat Puas', '2025-11-26 20:10:11', '2025-11-26 20:10:11'),
(19, 'Qori Sandioriva', '081356567878', 35, 30, 40, 'Makanannya hambar, kayak kurang bumbu.', 'Negatif', 35.00, 'Kurang Puas', '2025-11-19 22:10:11', '2025-11-19 22:10:11'),
(20, 'Rizal Mantovani', '081987876565', 88, 85, 90, 'Rekomendasi banget buat dinner romantis.', 'Positif', 87.00, 'Sangat Puas', '2025-11-26 22:10:11', '2025-11-26 22:10:11'),
(21, 'Aditya Warman', '081211110001', 95, 95, 90, 'Luar biasa! Makanan enak dan tempat bersih.', 'Positif', 93.33, 'Sangat Puas', '2025-11-24 22:11:38', '2025-11-26 22:11:38'),
(22, 'Bella Saphira', '081211110002', 100, 100, 100, 'Sempurna. Tidak ada kurangnya.', 'Positif', 100.00, 'Sangat Puas', '2025-11-21 22:11:38', '2025-11-26 22:11:38'),
(23, 'Chandra Liow', '081211110003', 85, 90, 85, 'Pelayanannya ramah banget, senyum terus.', 'Positif', 86.67, 'Sangat Puas', '2025-11-16 22:11:38', '2025-11-26 22:11:38'),
(24, 'Dinda Kirana', '081211110004', 90, 88, 92, 'Tempatnya cozy buat nugas. Kopi enak.', 'Positif', 90.00, 'Sangat Puas', '2025-11-14 22:11:38', '2025-11-26 22:11:38'),
(25, 'Erik Soekamti', '081211110005', 98, 95, 90, 'Rasa bintang lima harga kaki lima. Mantap!', 'Positif', 94.33, 'Sangat Puas', '2025-11-25 22:11:38', '2025-11-26 22:11:38'),
(26, 'Farah Quinn', '081211110006', 90, 90, 90, 'Chef-nya jago, masakannya lezat.', 'Positif', 90.00, 'Sangat Puas', '2025-11-23 22:11:38', '2025-11-26 22:11:38'),
(27, 'Gilang Dirga', '081211110007', 88, 85, 80, 'Recommended banget buat yang cari makanan pedas.', 'Positif', 84.33, 'Sangat Puas', '2025-11-11 22:11:38', '2025-11-26 22:11:38'),
(28, 'Hesti Purwadinata', '081211110008', 92, 92, 95, 'Interiornya bagus, instagramable abis.', 'Positif', 93.00, 'Sangat Puas', '2025-11-06 22:11:38', '2025-11-26 22:11:38'),
(29, 'Iko Uwais', '081211110009', 85, 90, 85, 'Pelayanan cepat dan sigap.', 'Positif', 86.67, 'Sangat Puas', '2025-11-22 22:11:38', '2025-11-26 22:11:38'),
(30, 'Jessica Mila', '081211110010', 95, 80, 90, 'Makanannya enak, cuma antri dikit.', 'Positif', 88.33, 'Sangat Puas', '2025-11-18 22:11:38', '2025-11-26 22:11:38'),
(31, 'Kevin Julio', '081211110011', 82, 85, 88, 'Cukup memuaskan untuk harga segini.', 'Positif', 85.00, 'Sangat Puas', '2025-11-20 22:11:38', '2025-11-26 22:11:38'),
(32, 'Luna Maya', '081211110012', 90, 95, 95, 'Best service in town!', 'Positif', 93.33, 'Sangat Puas', '2025-11-12 22:11:38', '2025-11-26 22:11:38'),
(33, 'Maudy Ayunda', '081211110013', 88, 88, 88, 'Suasana tenang, cocok buat meeting.', 'Positif', 88.00, 'Sangat Puas', '2025-11-08 22:11:38', '2025-11-26 22:11:38'),
(34, 'Nicholas Saputra', '081211110014', 92, 90, 90, 'Suka banget sama kopinya. Fresh.', 'Positif', 90.67, 'Sangat Puas', '2025-11-04 22:11:38', '2025-11-26 22:11:38'),
(35, 'Opick', '081211110015', 85, 85, 85, 'Alhamdulillah enak dan halal.', 'Positif', 85.00, 'Sangat Puas', '2025-11-01 22:11:38', '2025-11-26 22:11:38'),
(36, 'Prilly Latuconsina', '081211110016', 75, 70, 75, 'Lumayan enak, tapi porsi dikit.', 'Netral', 73.33, 'Puas', '2025-11-24 22:11:38', '2025-11-26 22:11:38'),
(37, 'Raffi Ahmad', '081211110017', 70, 80, 70, 'Oke lah buat makan siang kilat.', 'Positif', 73.33, 'Puas', '2025-11-21 22:11:38', '2025-11-26 22:11:38'),
(38, 'Sule', '081211110018', 65, 65, 60, 'Biasa aja rasanya, nothing special.', 'Netral', 63.33, 'Puas', '2025-11-17 22:11:38', '2025-11-26 22:11:38'),
(39, 'Tulus', '081211110019', 60, 60, 60, 'Cukup enak, tapi agak mahal.', 'Negatif', 60.00, 'Puas', '2025-11-15 22:11:38', '2025-11-26 22:11:38'),
(40, 'Uya Kuya', '081211110020', 55, 50, 55, 'Tempatnya agak sempit ya.', 'Negatif', 53.33, 'Cukup', '2025-11-13 22:11:38', '2025-11-26 22:11:38'),
(41, 'Vino G Bastian', '081211110021', 50, 55, 50, 'Pelayan kurang senyum.', 'Negatif', 51.67, 'Cukup', '2025-11-10 22:11:38', '2025-11-26 22:11:38'),
(42, 'Wulan Guritno', '081211110022', 78, 75, 80, 'Masakannya oke kok.', 'Positif', 77.67, 'Puas', '2025-11-23 22:11:38', '2025-11-26 22:11:38'),
(43, 'Xaverius', '081211110023', 60, 70, 60, 'Not bad lah.', 'Netral', 63.33, 'Puas', '2025-11-19 22:11:38', '2025-11-26 22:11:38'),
(44, 'Yuki Kato', '081211110024', 58, 60, 55, 'Standard cafe pada umumnya.', 'Netral', 57.67, 'Cukup', '2025-11-07 22:11:38', '2025-11-26 22:11:38'),
(45, 'Zaskia Gotik', '081211110025', 70, 65, 70, 'Goyang lidah rasanya, lumayan.', 'Positif', 68.33, 'Puas', '2025-11-05 22:11:38', '2025-11-26 22:11:38'),
(46, 'Agnez Mo', '081211110026', 75, 85, 70, 'Service bagus, makanan B aja.', 'Netral', 76.67, 'Puas', '2025-11-22 22:11:38', '2025-11-26 22:11:38'),
(47, 'Baim Wong', '081211110027', 68, 60, 65, 'Perlu perbaikan di kebersihan toilet.', 'Negatif', 64.33, 'Puas', '2025-11-03 22:11:38', '2025-11-26 22:11:38'),
(48, 'Cinta Laura', '081211110028', 55, 55, 55, 'So so.', 'Netral', 55.00, 'Cukup', '2025-10-31 22:11:38', '2025-11-26 22:11:38'),
(49, 'Deddy Corbuzier', '081211110029', 72, 70, 75, 'Not healthy enough, too oily.', 'Negatif', 72.33, 'Puas', '2025-10-29 22:11:38', '2025-11-26 22:11:38'),
(50, 'Ernest Prakasa', '081211110030', 60, 50, 60, 'Parkir susah banget.', 'Negatif', 56.67, 'Cukup', '2025-11-25 22:11:38', '2025-11-26 22:11:38'),
(51, 'Ferry Salim', '081211110031', 40, 30, 40, 'Makanannya hambar gak ada rasa.', 'Negatif', 36.67, 'Kurang Puas', '2025-11-24 22:11:38', '2025-11-26 22:11:38'),
(52, 'Gading Marten', '081211110032', 30, 20, 30, 'Pelayanan super lambat! Kecewa.', 'Negatif', 26.67, 'Kurang Puas', '2025-11-22 22:11:38', '2025-11-26 22:11:38'),
(53, 'Hamish Daud', '081211110033', 20, 20, 20, 'Very bad experience.', 'Negatif', 20.00, 'Kurang Puas', '2025-11-18 22:11:38', '2025-11-26 22:11:38'),
(54, 'Indro Warkop', '081211110034', 35, 35, 35, 'Kopi asem banget, gak enak.', 'Negatif', 35.00, 'Kurang Puas', '2025-11-16 22:11:38', '2025-11-26 22:11:38'),
(55, 'Jefri Nichol', '081211110035', 25, 25, 25, 'Mahal doang, rasa zonk.', 'Negatif', 25.00, 'Kurang Puas', '2025-11-12 22:11:38', '2025-11-26 22:11:38'),
(56, 'Kaka Slank', '081211110036', 10, 10, 10, 'Parah, ada lalat di makanan.', 'Negatif', 10.00, 'Kurang Puas', '2025-11-09 22:11:38', '2025-11-26 22:11:38'),
(57, 'Lesti Kejora', '081211110037', 40, 40, 40, 'Kurang worth it sama harganya.', 'Negatif', 40.00, 'Kurang Puas', '2025-11-07 22:11:38', '2025-11-26 22:11:38'),
(58, 'Marcel Chandrawinata', '081211110038', 30, 35, 30, 'Berisik banget tempatnya, pusing.', 'Negatif', 31.67, 'Kurang Puas', '2025-11-04 22:11:38', '2025-11-26 22:11:38'),
(59, 'Nia Ramadhani', '081211110039', 20, 15, 20, 'Ga bisa kupas salak, eh ga bisa makan disini juga karena ga enak.', 'Negatif', 18.33, 'Kurang Puas', '2025-11-01 22:11:38', '2025-11-26 22:11:38'),
(60, 'Olga Syahputra', '081211110040', 15, 15, 15, 'Ancur rasanya.', 'Negatif', 15.00, 'Kurang Puas', '2025-10-30 22:11:38', '2025-11-26 22:11:38'),
(61, 'Pevita Pearce', '081211110041', 38, 30, 35, 'Pelayan judes minta ampun.', 'Negatif', 34.33, 'Kurang Puas', '2025-11-23 22:11:38', '2025-11-26 22:11:38'),
(62, 'Raditya Dika', '081211110042', 28, 28, 28, 'Makanannya dingin kayak hatimu.', 'Negatif', 28.00, 'Kurang Puas', '2025-11-20 22:11:38', '2025-11-26 22:11:38'),
(63, 'Sandra Dewi', '081211110043', 33, 33, 33, 'Kebersihan sangat kurang.', 'Negatif', 33.00, 'Kurang Puas', '2025-11-17 22:11:38', '2025-11-26 22:11:38'),
(64, 'Tora Sudiro', '081211110044', 42, 40, 40, 'Meja lengket berminyak.', 'Negatif', 40.67, 'Cukup', '2025-11-14 22:11:38', '2025-11-26 22:11:38'),
(65, 'Via Vallen', '081211110045', 22, 22, 22, 'Menyesal makan di sini.', 'Negatif', 22.00, 'Kurang Puas', '2025-11-11 22:11:38', '2025-11-26 22:11:38'),
(66, 'Wendy Cagur', '081211110046', 30, 25, 30, 'Salah pesanan 3 kali.', 'Negatif', 28.33, 'Kurang Puas', '2025-11-08 22:11:38', '2025-11-26 22:11:38'),
(67, 'Yuni Shara', '081211110047', 35, 40, 35, 'AC nya panas.', 'Negatif', 36.67, 'Kurang Puas', '2025-11-05 22:11:38', '2025-11-26 22:11:38'),
(68, 'Zainuddin MZ', '081211110048', 40, 30, 40, 'Perbaiki lagi kualitasnya.', 'Netral', 36.67, 'Kurang Puas', '2025-11-02 22:11:38', '2025-11-26 22:11:38'),
(69, 'Ariel Noah', '081211110049', 20, 30, 20, 'Musik terlalu kencang, ganggu makan.', 'Negatif', 23.33, 'Kurang Puas', '2025-10-28 22:11:38', '2025-11-26 22:11:38'),
(70, 'Bunga Citra Lestari', '081211110050', 30, 30, 30, 'Bad experience.', 'Negatif', 30.00, 'Kurang Puas', '2025-10-27 22:11:38', '2025-11-26 22:11:38'),
(71, 'siti', '22222', 100, 100, 100, 'sangat enak', 'Positif', 100.00, 'Sangat Puas', '2025-12-01 23:04:32', '2025-12-01 23:04:32'),
(78, 'cici', NULL, 60, 60, 40, 'terbaik', 'Positif', 40.00, 'Cukup', '2025-12-03 23:28:00', '2025-12-03 23:28:00'),
(82, 'mila', NULL, 100, 100, 100, 'enak', 'Netral', 100.00, 'Sangat Puas', '2025-12-04 00:04:57', '2025-12-04 00:05:10'),
(84, 'adit', NULL, 90, 90, 90, NULL, 'Netral', 90.00, 'Sangat Puas', '2025-12-04 00:47:46', '2025-12-04 00:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_26_193419_create_guestbooks_table', 1),
(5, '2025_11_26_212651_add_sentiment_to_guestbooks', 1),
(6, '2025_11_26_213740_add_sentiment_column_to_guestbooks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Y9cRGKOWki8vqK1RP2uA1xX8MAt3A97EGUgYbHwh', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQU12WWxReDN6MDgwYktKSmp1Z2padTVqZDFNeXJqQVN2M1liSzgzdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Njt9', 1764838208);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-11-26 13:35:53', '$2y$12$E6CQMgfE3kf/0D4V9nWuTuqewtbHAvE94hP0t0MjwO0B/bXkAlE2a', 'nxIo5SxLxb', '2025-11-26 13:35:53', '2025-11-26 13:35:53'),
(2, 'Admin Restoran', 'admin@resto.com', NULL, '$2y$12$VSakSFiW6d8tY2yrJNoYRuOb22wI5QR/djYcJvclqxAZuKqgoNQ5G', NULL, '2025-11-26 13:41:21', '2025-11-26 13:41:21'),
(4, 'Stev', 'stev@resto.com', NULL, '$2y$12$Xt/cv77nNfXVlr18FV/9QOkh6O5tmMvT0SjJjZ8L21zuKu6c00cqS', NULL, '2025-11-26 13:48:50', '2025-11-26 13:48:50'),
(5, 'Mila', 'mila@resto.com', NULL, '$2y$12$rW2QEGidzcRjH1HR7dl4h.HJXzLFeAZXW1MRIZF9sCTZukGpw6ZgC', NULL, '2025-11-26 13:48:51', '2025-11-26 13:48:51'),
(6, 'Cici', 'cici@resto.com', NULL, '$2y$12$grSIsuObZ1pKn2wwZxOBCewFghCO14YjJpCPfFvV7WW5saKF3rlOi', NULL, '2025-11-26 13:48:51', '2025-11-26 13:48:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guestbooks`
--
ALTER TABLE `guestbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guestbooks`
--
ALTER TABLE `guestbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
