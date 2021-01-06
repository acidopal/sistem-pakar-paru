-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2021 at 08:27 AM
-- Server version: 10.5.6-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_paru`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `alamat`, `keterangan`, `no_telepon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Nawaf', 'Cianjur', 'Spesialis Paru', '089892312', '/upload/gambar/dokter/1081651530.jpeg', '2020-12-29 10:34:14', '2020-12-29 10:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Batuk > 3 minggu', 'Batuk > 3 minggu', '2020-12-29 10:45:04', '2020-12-29 10:51:46'),
(2, 'Batuk Berdarah', 'Batuk Berdarah', '2020-12-29 10:45:31', '2020-12-29 10:45:31'),
(3, 'Nyeri Dada', 'Nyeri Di Bagian Dada', '2020-12-29 10:45:47', '2020-12-29 10:45:47'),
(4, 'Sesak Nafas', 'Sesak Nafas Berat', '2020-12-29 10:46:05', '2020-12-29 10:46:05'),
(5, 'Demam', 'Demam', '2020-12-29 10:46:32', '2020-12-29 10:52:00'),
(6, 'Keringat Malam', 'Berkeringat berlebihan', '2020-12-29 10:52:26', '2020-12-29 10:52:26'),
(7, 'Nafsu Makan Berkurang', 'Jadi Ga Nafsu Makan', '2020-12-29 10:52:55', '2020-12-29 10:52:55'),
(8, 'Ketika bernapas kadang terdengar suara “ngik” atau mengi', 'Ketika bernapas kadang terdengar suara “ngik” atau mengi', '2020-12-29 10:53:13', '2020-12-29 10:53:13'),
(9, 'Batuk muncul sebelum atau bersamaan dengan sesak napas', 'Batuk muncul sebelum atau bersamaan dengan sesak napas', '2020-12-29 10:53:40', '2020-12-29 10:53:40'),
(10, 'Dahak tidak banyak hanya beberapa sendok teh per hari', 'Dahak tidak banyak hanya beberapa sendok teh per hari', '2020-12-29 10:53:53', '2020-12-29 10:53:53'),
(11, 'Batuk muncul sebelum atau bersamaan dengan sesak napas', 'Batuk muncul sebelum atau bersamaan dengan sesak napas', '2020-12-29 10:54:06', '2020-12-29 10:54:06'),
(12, 'Dahak bersifat purulen (kuning sedikit cair) dan bernanah pada keadaan infeksi', 'Dahak bersifat purulen (kuning sedikit cair) dan bernanah pada keadaan infeksi', '2020-12-29 10:54:23', '2020-12-29 10:54:23'),
(13, 'Asma nokturnal terjadi antara jam 4-6 pagi dan menghilang dengan bronkodilator', 'Asma nokturnal terjadi antara jam 4-6 pagi dan menghilang dengan bronkodilator', '2020-12-29 10:54:56', '2020-12-29 10:54:56'),
(14, 'Batuk timbul akibat paparan zat tertentu, aktivitas, gangguan emosi, dan infeksi virus', 'Batuk timbul akibat paparan zat tertentu, aktivitas, gangguan emosi, dan infeksi virus', '2020-12-29 11:51:58', '2020-12-29 12:06:30'),
(15, 'Batuk memberat pada malam hari', 'Batuk memberat pada malam hari', '2020-12-29 11:52:10', '2020-12-29 11:52:10'),
(16, 'Ada riwayat keluarga asma dan atopi', 'Ada riwayat keluarga asma dan atopi', '2020-12-29 11:52:23', '2020-12-29 11:52:23'),
(17, 'Penurunan berat badan ( > 4 kg / 6 bulan)', 'Penurunan berat badan ( > 4 kg / 6 bulan)', '2020-12-29 11:52:43', '2020-12-29 11:52:43'),
(18, 'Rasa capai berlebihan', 'Rasa capai berlebihan', '2020-12-29 11:53:03', '2020-12-29 11:53:03'),
(19, 'Rasa nyeri di dada, bahu, atau punggung', 'Rasa nyeri di dada, bahu, atau punggung', '2020-12-29 11:53:12', '2020-12-29 11:53:12'),
(20, 'Pembengkakan leher dan wajah', 'Pembengkakan leher dan wajah', '2020-12-29 11:53:21', '2020-12-29 11:53:21'),
(21, 'Suara parau', 'Suara parau', '2020-12-29 11:53:40', '2020-12-29 11:53:40'),
(22, 'Pembengkakan leher dan wajah', 'Pembengkakan leher dan wajah', '2020-12-29 11:53:51', '2020-12-29 11:53:51'),
(23, 'Demam (suhu tubuh > 40oC)', 'Demam (suhu tubuh > 40oC)', '2020-12-29 11:54:10', '2020-12-29 11:54:10'),
(24, 'Menggigil', 'Menggigil', '2020-12-29 11:54:21', '2020-12-29 11:54:21'),
(25, 'Dahak kental (mukoid) atau dahak kuning bernanah (purulen)', 'Dahak kental (mukoid) atau dahak kuning bernanah (purulen)', '2020-12-29 11:54:35', '2020-12-29 11:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_18_080546_create_dokter_table', 1),
(5, '2019_12_18_150742_create_penyakit_table', 1),
(6, '2019_12_18_171122_create_gejala_table', 1),
(7, '2019_12_18_172541_create_pengetahuan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL,
  `nilai_cf` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `id_penyakit`, `id_gejala`, `nilai_mb`, `nilai_md`, `nilai_cf`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.65, 0.04, 0.61, '2020-12-29 10:47:49', '2020-12-29 12:03:47'),
(2, 1, 2, 0.85, 0.08, 0.77, '2020-12-29 10:48:03', '2020-12-29 12:04:04'),
(3, 1, 3, 0.9, 0.1, 0.8, '2020-12-29 11:55:00', '2020-12-29 12:04:15'),
(4, 1, 4, 0.85, 0.09, 0.76, '2020-12-29 11:55:09', '2020-12-29 12:04:32'),
(5, 1, 5, 0.6, 0.05, 0.55, '2020-12-29 12:04:59', '2020-12-29 12:04:59'),
(6, 1, 6, 0.9, 0.1, 0.8, '2020-12-29 12:05:17', '2020-12-29 12:05:17'),
(7, 1, 7, 0.75, 0.19, 0.56, '2020-12-29 12:06:05', '2020-12-29 12:06:05'),
(8, 2, 1, 0.65, 0.05, 0.6, '2020-12-29 12:07:09', '2020-12-29 12:07:09'),
(9, 2, 8, 0.95, 0.05, 0.9, '2020-12-29 12:07:45', '2020-12-29 12:07:59'),
(10, 2, 10, 0.7, 0.3, 0.4, '2020-12-29 12:08:16', '2020-12-29 12:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `keterangan`, `penanganan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Tuberkulosis Paru (TBC)', 'TBC (Tuberkulosis) yang juga dikenal dengan TB adalah penyakit paru-paru akibat kuman Mycobacterium tuberculosis. TBC akan menimbulkan gejala berupa batuk yang berlangsung lama (lebih dari 3 minggu), biasanya berdahak, dan terkadang mengeluarkan darah.', 'Berobat', '/upload/gambar/1424762147.jpg', '2020-12-29 10:39:22', '2020-12-29 10:39:22'),
(2, 'Penyakit Paru Obstruktif Kronik (PPOK)', 'Penyakit paru obstruktif kronis (PPOK) adalah peradangan pada paru-paru yang berkembang dalam jangka panjang. PPOK umumnya ditandai dengan sulit bernapas, batuk berdahak, dan mengi (bengek).', 'Berobat', '/upload/gambar/1734606468.jpg', '2020-12-29 10:40:02', '2020-12-29 10:40:02'),
(3, 'Asma Bronkia', 'Asma bronkial termasuk penyakit asma yang paling umum terjadi. Penyakit ini dapat menyebabkan jalan napas paru membengkak (edema) dan menyempit, sehingga jalur udara menghasilkan lendir yang berlebihan. Kondisi ini membuat penderitanya sulit bernapas, yang seringkali juga diikuti batuk, napas pendek, dan napas berbunyi (mengi).', 'Rutin mengecek fungsi paru-paru dengan peak flow meter juga bisa jadi cara mencegah kekambuhan serangan.', '/upload/gambar/198297301.jpg', '2020-12-29 10:42:59', '2020-12-29 18:46:34'),
(4, 'Kanker Paru', 'Kanker paru-paru adalah kondisi ketika sel ganas (kanker) terbentuk di paru-paru. Kanker ini lebih banyak dialami oleh orang yang memiliki kebiasaan merokok dan merupakan satu dari tiga jenis kanker yang paling banyak terjadi di Indonesia.', 'Operasi', NULL, '2020-12-29 10:43:40', '2020-12-29 10:43:40'),
(5, 'Pneumonia', 'Pneumonia adalah peradangan paru-paru yang disebabkan oleh infeksi. Pneumonia bisa menimbulkan gejala yang ringan hingga berat. Beberapa gejala yang umumnya dialami penderita pneumonia adalah batuk berdahak, demam, dan sesak napas.', 'Obat antipiretik dan analgetik', NULL, '2020-12-29 10:44:30', '2020-12-29 10:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_telepon`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '081231923123', 'admin@admin.com', NULL, '$2y$10$C8mT2n12QDZty1VruZ3krucNsjZbKiD4frt5HjLof8TucS2ZjxGt6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengetahuan_id_penyakit_foreign` (`id_penyakit`),
  ADD KEY `pengetahuan_id_gejala_foreign` (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_id_gejala_foreign` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengetahuan_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
