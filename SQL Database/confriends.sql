-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 06:40 PM
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
-- Database: `confriends`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `image_url`, `price`, `created_at`, `updated_at`) VALUES
(1, 'https://via.placeholder.com/150x150.png/007799?text=avatar+Avatar1+est', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(2, 'https://via.placeholder.com/150x150.png/00aaaa?text=avatar+Avatar2+nostrum', 100, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(3, 'https://via.placeholder.com/150x150.png/007755?text=avatar+Avatar3+natus', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(4, 'https://via.placeholder.com/150x150.png/0088ff?text=avatar+Avatar4+est', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(5, 'https://via.placeholder.com/150x150.png/005522?text=avatar+Avatar5+quis', 10000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(6, 'https://via.placeholder.com/150x150.png/0022bb?text=avatar+Avatar6+non', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(7, 'https://via.placeholder.com/150x150.png/0066bb?text=avatar+Avatar7+voluptate', 1000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(8, 'https://via.placeholder.com/150x150.png/0099bb?text=avatar+Avatar8+minima', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(9, 'https://via.placeholder.com/150x150.png/003366?text=avatar+Avatar9+labore', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(10, 'https://via.placeholder.com/150x150.png/0033ff?text=avatar+Avatar10+deserunt', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(11, 'https://via.placeholder.com/150x150.png/007799?text=avatar+Avatar11+vero', 1000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(12, 'https://via.placeholder.com/150x150.png/00dd77?text=avatar+Avatar12+hic', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(13, 'https://via.placeholder.com/150x150.png/00aa88?text=avatar+Avatar13+et', 500, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(14, 'https://via.placeholder.com/150x150.png/00ee77?text=avatar+Avatar14+quod', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(15, 'https://via.placeholder.com/150x150.png/009911?text=avatar+Avatar15+qui', 500, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(16, 'https://via.placeholder.com/150x150.png/00cc88?text=avatar+Avatar16+cupiditate', 100, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(17, 'https://via.placeholder.com/150x150.png/00ff00?text=avatar+Avatar17+iusto', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(18, 'https://via.placeholder.com/150x150.png/0033dd?text=avatar+Avatar18+distinctio', 100000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(19, 'https://via.placeholder.com/150x150.png/000066?text=avatar+Avatar19+quasi', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(20, 'https://via.placeholder.com/150x150.png/0077dd?text=avatar+Avatar20+commodi', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(21, 'https://via.placeholder.com/150x150.png/003399?text=avatar+Avatar21+reiciendis', 10000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(22, 'https://via.placeholder.com/150x150.png/008844?text=avatar+Avatar22+ut', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(23, 'https://via.placeholder.com/150x150.png/00bb11?text=avatar+Avatar23+qui', 100, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(24, 'https://via.placeholder.com/150x150.png/0066ee?text=avatar+Avatar24+consequatur', 10000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(25, 'https://via.placeholder.com/150x150.png/002233?text=avatar+Avatar25+est', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(26, 'https://via.placeholder.com/150x150.png/002200?text=avatar+Avatar26+doloremque', 50000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(27, 'https://via.placeholder.com/150x150.png/003355?text=avatar+Avatar27+iste', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(28, 'https://via.placeholder.com/150x150.png/004444?text=avatar+Avatar28+odit', 500, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(29, 'https://via.placeholder.com/150x150.png/00ccbb?text=avatar+Avatar29+cum', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(30, 'https://via.placeholder.com/150x150.png/00bb55?text=avatar+Avatar30+aut', 50, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(31, 'https://via.placeholder.com/150x150.png/00bb88?text=avatar+Avatar31+quod', 100000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(32, 'https://via.placeholder.com/150x150.png/00aa77?text=avatar+Avatar32+architecto', 1000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(33, 'https://via.placeholder.com/150x150.png/005577?text=avatar+Avatar33+ipsa', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(34, 'https://via.placeholder.com/150x150.png/00ccff?text=avatar+Avatar34+provident', 5000, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(35, 'https://via.placeholder.com/150x150.png/007700?text=avatar+Avatar35+est', 500, '2025-01-08 07:02:48', '2025-01-08 07:02:48'),
(36, 'https://via.placeholder.com/150x150.png/0033ff?text=avatar+Avatar36+inventore', 500, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(37, 'https://via.placeholder.com/150x150.png/0022dd?text=avatar+Avatar37+quia', 500, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(38, 'https://via.placeholder.com/150x150.png/00ee33?text=avatar+Avatar38+voluptatem', 100000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(39, 'https://via.placeholder.com/150x150.png/00ff55?text=avatar+Avatar39+veniam', 1000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(40, 'https://via.placeholder.com/150x150.png/007788?text=avatar+Avatar40+distinctio', 50, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(41, 'https://via.placeholder.com/150x150.png/00bb11?text=avatar+Avatar41+est', 10000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(42, 'https://via.placeholder.com/150x150.png/009955?text=avatar+Avatar42+nesciunt', 100, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(43, 'https://via.placeholder.com/150x150.png/008877?text=avatar+Avatar43+similique', 1000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(44, 'https://via.placeholder.com/150x150.png/000077?text=avatar+Avatar44+quis', 100000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(45, 'https://via.placeholder.com/150x150.png/00ff99?text=avatar+Avatar45+rerum', 100000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(46, 'https://via.placeholder.com/150x150.png/009922?text=avatar+Avatar46+numquam', 1000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(47, 'https://via.placeholder.com/150x150.png/00ff88?text=avatar+Avatar47+sunt', 1000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(48, 'https://via.placeholder.com/150x150.png/0088ff?text=avatar+Avatar48+qui', 5000, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(49, 'https://via.placeholder.com/150x150.png/00ee44?text=avatar+Avatar49+consequatur', 500, '2025-01-08 07:02:49', '2025-01-08 07:02:49'),
(50, 'https://via.placeholder.com/150x150.png/009955?text=avatar+Avatar50+illum', 500, '2025-01-08 07:02:49', '2025-01-08 07:02:49');

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
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender_id`, `receiver_id`, `message`, `read`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Halo', 1, '2025-01-08 07:04:55', '2025-01-08 07:05:08'),
(2, 1, 2, 'Hei^^!!', 1, '2025-01-08 07:05:22', '2025-01-08 19:31:45'),
(3, 3, 1, 'halo', 1, '2025-01-08 09:37:40', '2025-01-08 09:37:48'),
(4, 1, 3, 'haii^^', 1, '2025-01-08 09:37:57', '2025-01-08 09:39:14'),
(5, 1, 2, 'test', 1, '2025-01-08 19:31:40', '2025-01-08 19:31:45'),
(6, 2, 1, 'halo, masuk', 1, '2025-01-08 19:31:55', '2025-01-08 20:59:10'),
(7, 1, 2, 'ok', 1, '2025-01-08 21:00:46', '2025-01-08 21:23:38'),
(8, 2, 1, 'test', 1, '2025-01-08 21:23:49', '2025-01-08 21:23:58'),
(9, 1, 2, 'aman', 1, '2025-01-08 21:24:02', '2025-01-08 21:33:17'),
(10, 1, 2, 'halo', 1, '2025-01-08 21:27:18', '2025-01-08 21:33:17'),
(11, 2, 1, 'oke, masukk', 0, '2025-01-08 21:33:27', '2025-01-08 21:33:27'),
(12, 4, 1, 'halo bro', 1, '2025-01-09 09:47:25', '2025-01-09 09:47:28'),
(13, 1, 4, 'oy, halo', 0, '2025-01-09 09:47:37', '2025-01-09 09:47:37');

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
(4, '2025_01_05_132539_create_whislists_table', 1),
(5, '2025_01_05_132547_create_profile_table', 1),
(6, '2025_01_05_132701_create_chats_table', 1),
(7, '2025_01_05_133901_create_adduser_table', 1),
(8, '2025_01_05_133950_create_avatar_table', 1),
(9, '2025_01_08_061300_add_hidden_to_wishlists_table', 1),
(10, '2025_01_08_132709_create_transactions_table', 1),
(11, '2025_01_08_141147_add_coins_to_users_table', 2),
(12, '2025_01_08_141500_add_avatar_id_to_users_table', 3);

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
('ncH0Yk4BgVwqCTb8ChyBsi0DFZTaL3YS7Y1jJEtu', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiV2l4N3VvUWtzNEhQTGhLZm54UEtwSDc4WTlTWXRiTlpucTVQVmRXNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGF0L3N0YXJ0LzEiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzY0NDE0ODM7fX0=', 1736441516),
('YMB197KO2DfQCWXXCEIBvc75uJ3utZhbZFbBuXz8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMlhhM3dFUnd6RW8wRGJ2cWh0SkNxV2RPanZ3UlRpTjJhbnlTZmdScSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NDM1NTg3O319', 1736441523);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `avatar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `avatar_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 50, '2025-01-08 07:12:15', '2025-01-08 07:12:15'),
(2, 1, 4, 50, '2025-01-08 07:13:19', '2025-01-08 07:13:19'),
(3, 3, 3, 50, '2025-01-08 09:45:30', '2025-01-08 09:45:30');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `hobbies` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hobbies`)),
  `age` int(11) DEFAULT NULL,
  `friendship_intent` enum('casual_friendships','relationships','business_networking') DEFAULT NULL,
  `registration_fee` int(11) NOT NULL DEFAULT 0,
  `wallet_balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `coins` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `avatar_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_photo`, `gender`, `instagram`, `mobile`, `hobbies`, `age`, `friendship_intent`, `registration_fee`, `wallet_balance`, `coins`, `avatar_id`) VALUES
(1, 'ljn', 'ljn@gma', NULL, '$2y$12$g7/fyDS5EhgJc.PO2oA8AOoW7BY3QJgH5wQye8mPiLgGRbiroxzXa', NULL, '2025-01-08 06:57:54', '2025-01-08 21:24:55', '1736396695.jpg', 'Male', 'https://www.instagram.com/miawaug', '0812345678', '[\"Reading\",\" Hikking\",\" Writting\"]', 27, 'relationships', 110902, 800.00, 0, 3),
(2, 'rj', 'rj@sadc', NULL, '$2y$12$jT7vsPX5rpQtAIiroQhcVOpFrorccAq/Whl5NQ5bZRWZFkvPoo1.y', NULL, '2025-01-08 06:58:55', '2025-01-08 07:02:21', '1736344941.jpg', 'Female', 'https://www.instagram.com/miawaug', '0812345678', '[\"Singing\",\" Cooking \",\" Writting\"]', 23, 'relationships', 119491, 10000.00, 100, NULL),
(3, 'Rosie', 'Rosie@gmail.com', NULL, '$2y$12$B/eOs/5Mzh4GX6O5rc4zt.xqoz9O2Nox9tIwu0sLcYRoX8FFrB1aG', NULL, '2025-01-08 09:23:38', '2025-01-09 09:51:46', '1736441506.jfif', 'Female', 'https://www.instagram.com/miawaug', '0812345678', '[\"Cooking\",\" Singing\",\" Dancing\"]', 28, 'casual_friendships', 123143, 200.00, 50, 3),
(4, 'Mark', 'lmk@sadc', NULL, '$2y$12$RsTmo3kdQ4XhJJfWs8vWpuTVIth3TGX7C7jkejUW5N5cGvn4CD1Ca', NULL, '2025-01-09 08:15:58', '2025-01-09 08:16:23', '1736435783.jpg', 'Male', 'https://www.instagram.com/miawaug', '0812345678', '[\"Dancing\",\" Watching \",\" Reading\"]', 29, 'business_networking', 105717, 0.00, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wishlist_user_id` bigint(20) UNSIGNED NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `wishlist_user_id`, `hidden`, `created_at`, `updated_at`) VALUES
(7, 1, 2, 1, '2025-01-08 21:24:23', '2025-01-08 21:24:27'),
(8, 2, 1, 1, '2025-01-08 21:24:30', '2025-01-08 21:24:33'),
(9, 1, 4, 1, '2025-01-09 08:18:28', '2025-01-09 08:18:35'),
(10, 4, 1, 1, '2025-01-09 08:18:40', '2025-01-09 08:18:44'),
(11, 1, 3, 1, '2025-01-09 09:50:09', '2025-01-09 09:51:52'),
(12, 3, 1, 0, '2025-01-09 09:51:54', '2025-01-09 09:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_sender_id_foreign` (`sender_id`),
  ADD KEY `chats_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_avatar_id_foreign` (`avatar_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_avatar_id_foreign` (`avatar_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_wishlist_user_id_foreign` (`wishlist_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chats_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_avatar_id_foreign` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_avatar_id_foreign` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_wishlist_user_id_foreign` FOREIGN KEY (`wishlist_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
