-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 05:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl_upgrade`
--

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
-- Table structure for table `irs`
--

CREATE TABLE `irs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `jmlsks` int(11) DEFAULT NULL,
  `scansks` varchar(255) DEFAULT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `irs`
--

INSERT INTO `irs` (`id`, `userid`, `semester`, `jmlsks`, `scansks`, `isverified`, `created_at`, `updated_at`) VALUES
(6, '2', '3', 23, 'lagiabsen.png', 0, '2022-12-02 05:30:08', '2022-12-04 02:45:59'),
(9, '11', '2', 23, 'lagiabsen.png', 0, '2022-12-04 08:56:16', '2022-12-04 08:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `k_h_s`
--

CREATE TABLE `k_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `skssemester` int(11) NOT NULL,
  `skskumulatif` int(11) NOT NULL,
  `ipsemester` double(8,2) NOT NULL,
  `ipkumulatif` double(8,2) NOT NULL,
  `scankhs` varchar(255) DEFAULT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `k_h_s`
--

INSERT INTO `k_h_s` (`id`, `userid`, `semester`, `skssemester`, `skskumulatif`, `ipsemester`, `ipkumulatif`, `scankhs`, `isverified`, `created_at`, `updated_at`) VALUES
(1, '1', '2', 23, 120, 3.20, 3.50, 'wakwau.png', 0, '2022-12-03 03:07:32', '2022-12-04 02:41:40'),
(2, '11', '2', 23, 120, 3.45, 3.85, 'absen.png', 0, '2022-12-04 08:56:32', '2022-12-04 08:56:32');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_07_170241_irs', 1),
(6, '2022_11_07_170442_k_h_s', 1),
(7, '2022_11_07_170521_p_k_l', 1),
(8, '2022_11_07_170552_skripsi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_k_l_s`
--

CREATE TABLE `p_k_l_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `dosenpengampu` varchar(255) NOT NULL,
  `scanpkl` varchar(255) DEFAULT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_k_l_s`
--

INSERT INTO `p_k_l_s` (`id`, `userid`, `semester`, `instansi`, `dosenpengampu`, `scanpkl`, `isverified`, `created_at`, `updated_at`) VALUES
(3, '1', '2', 'Surya', 'Dojo jiwaa', 'absen.png', 0, '2022-12-04 00:07:34', '2022-12-04 02:42:28'),
(4, '11', '4', 'Surya', 'Dojo jiwa', 'lagiabsen.png', 0, '2022-12-04 08:56:42', '2022-12-04 08:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `skripsis`
--

CREATE TABLE `skripsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `tglsidang` date NOT NULL,
  `dosenpembimbing` varchar(255) NOT NULL,
  `scansidang` varchar(255) DEFAULT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skripsis`
--

INSERT INTO `skripsis` (`id`, `userid`, `semester`, `tglsidang`, `dosenpembimbing`, `scansidang`, `isverified`, `created_at`, `updated_at`) VALUES
(6, '1', '3', '2022-12-13', 'aryo perdana', 'jay anjeng.png', 1, '2022-12-04 08:34:15', '2022-12-04 08:34:28'),
(7, '11', '9', '2022-12-22', 'aryo perdana', 'ml-6.png', 0, '2022-12-04 08:56:54', '2022-12-04 08:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomortlp` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `status` varchar(255) NOT NULL,
  `dosenwali` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nim`, `jurusan`, `angkatan`, `alamat`, `nomortlp`, `email_verified_at`, `password`, `remember_token`, `level`, `status`, `dosenwali`, `created_at`, `updated_at`) VALUES
(1, 'Zeri Zaidan', 'zerizaidan@gmail.com', '24060120150214', 'Informatika S1', 2020, 'Jalan Tirto agung 1', 856421886, NULL, '$2y$10$w7A1NhUUm6eWelJCO881IO0nxnwWA9Q.0ursCMKEaYvcBbTWF5UBG', NULL, 'user', 'Aktif', 'Prabowo Nur Khalid', '2022-12-02 05:15:21', '2022-12-04 05:14:32'),
(2, 'Awan Widiatma', 'awanwidiatma@gmail.com', '24010122150214', 'Informatika S1', 2020, NULL, NULL, NULL, '$2y$10$cwxlRyrHNlVyOQ7k/KFPqOC87hW1c6AhQ2flWvaHb7OhGoUOfW5xG', NULL, 'user', 'Aktif', 'Arum Ningtyas', '2022-12-02 05:15:21', '2022-12-04 08:46:22'),
(3, 'FSM UNDIP', 'fsmundip@gmail.com', '247474754', 'Sains Dan Matematika', 1989, NULL, NULL, NULL, '$2y$10$wqHKC2nmQTPM/wftNISUK.9QBpr6qDhCkeoJ7R7qzvPlI87MB0eJa', NULL, 'department', 'Aktif', NULL, '2022-12-02 05:15:21', '2022-12-02 05:15:21'),
(4, 'Prabowo Nur Khalid', 'prabowo@gmail.com', '19560701', 'Informatika S1', 2004, NULL, NULL, NULL, '$2y$10$c1zdmjRz7MjshElM6dui4.z9wAHU6VlHA2HJXU9F7J4vOqaJf/3tu', NULL, 'dosen', 'Aktif', NULL, '2022-12-02 05:15:21', '2022-12-02 05:15:21'),
(5, 'Migak Erlangga', 'migak@gmail.com', '11254682', 'Informatika S1', 1995, NULL, NULL, NULL, '$2y$10$TmN4JOg21TJyLXz88uMfWu8TfNezo22f/VPKgiG2ZVw1vMeZAZmyi', NULL, 'admin', 'Aktif', NULL, '2022-12-02 05:15:21', '2022-12-02 05:15:21'),
(6, 'Yohan waw', 'yohan@gmail.com', '245042321', 'Informatika S1', 1325, NULL, NULL, NULL, '$2y$10$K2BJWB2EVputTgAFfrhXqOEz99zHBig.9/uh6pBK5l5z6Yl/WV6JK', NULL, 'user', 'Mangkir', 'Prabowo Nur Khalid', '2022-12-03 02:50:20', '2022-12-04 08:04:25'),
(7, 'Tulus Agung', 'tulus@gmail.com', '24060120123214', 'Informatika S1', 1385, NULL, NULL, NULL, '$2y$10$Oh6nxoyxHlHAxzGd4MOSYu6V/moJ0UX8SbaiheqxoQQqpW0m74Wt6', NULL, 'dosen', 'Aktif', 'Prabowo Nur Khalid', '2022-12-04 00:14:35', '2022-12-04 06:28:50'),
(8, 'Akbar januar', 'akbar@gmail.com', '24230120150214', 'Informatika S1', 2018, NULL, NULL, NULL, '$2y$10$eDWdGaCLzyDnfG0W80.sN.G3O7bwH1W2yCS6Uy.MeqgkQOcbPHK3C', NULL, 'user', 'Cuti', 'Prabowo Nur Khalid', '2022-12-04 00:15:08', '2022-12-04 00:15:08'),
(9, 'djoko anwar', 'djoko@gmail.com', '24060310150214', 'Informatika S1', 2020, NULL, NULL, NULL, '$2y$10$rVW7PQUOPNsfKgkGENOLdeN1TNWTxJ/hVa6qazbD.zBRD43INsjCm', NULL, 'user', 'Dropout', 'Prabowo Nur Khalid', '2022-12-04 00:16:01', '2022-12-04 00:16:01'),
(10, 'Yos Sudarso', 'yos@gmail.com', '24060213132214', 'Informatika S1', 2015, NULL, NULL, NULL, '$2y$10$YOehNl9xBMaeS/7zKEvN4utnmiZC3zfblu9UKJ933XJHOli06ci1u', NULL, 'dosen', 'Aktif', 'Prabowo Nur Khalid', '2022-12-04 00:16:46', '2022-12-04 00:16:46'),
(11, 'Habibah Wahyu', 'habibah@gmail.com', '240601277402214', 'Informatika S1', 2018, 'Jalan Tirto agung 1', 8564218863, NULL, '$2y$10$FVq2k6YdNXOsRbf.cejwo.W/3ftPreft692CyCUqcZ8yOc4Q5OvGm', NULL, 'user', 'Mangkir', 'Prabowo Nur Khalid', '2022-12-04 08:44:57', '2022-12-04 08:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `irs`
--
ALTER TABLE `irs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k_h_s`
--
ALTER TABLE `k_h_s`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `p_k_l_s`
--
ALTER TABLE `p_k_l_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skripsis`
--
ALTER TABLE `skripsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `irs`
--
ALTER TABLE `irs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `k_h_s`
--
ALTER TABLE `k_h_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_k_l_s`
--
ALTER TABLE `p_k_l_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skripsis`
--
ALTER TABLE `skripsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
