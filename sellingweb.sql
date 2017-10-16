-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2017 lúc 12:29 PM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sellingweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('0','1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT ' 0 if male, 1 if female',
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `adress`, `birthday`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'donhatquang', 'nhatquangprovodoi@gmail.com', '$2y$10$wY2z3RRXt1VZnqk.g7a9T.TrgdVtor51i1S6cUsgIoONj0BQcq83m', '2', 'diufhiusd', '2017-10-16', 1659785001, 'x8RFcfGAtfe3wm1nOyvjfjTgDps5bSHQxD6Xc5gt3RyBiZQVM3L1N0fXuTyv', '2017-10-15 02:04:03', '2017-10-15 02:04:03'),
(4, 'sdfsd', 'tnt.d.i.e@gmail.com', '$2y$10$7uAqIM2UvXojn5Mbt/vNduypC82gTK8CKlm3GjXBI6XNL4XymRxT2', '2', NULL, NULL, 1659785001, 'YALg4t84xE43m5pdSN8A6X7jXmeyBlwg60qAFBnIGYN6WrdZBCFKyqvJAtC1', '2017-10-15 02:07:03', '2017-10-15 02:07:03'),
(5, 'nhatquangprovodoi@gmail.com', 'nhatquangprovodoi1@gmail.com', '$2y$10$1vWRSUsPEcjQ9MlgvDjPWOBHjta9.VBIgnLGbPjSvHMdgsxZ9LOjK', '2', NULL, NULL, NULL, 'MZsg5qXcoyrkCLRt5huDaYcACgnFTABLaNlKbhzklJVyFd1CyHJNR5yXLQUh', '2017-10-16 02:15:12', '2017-10-16 02:15:12'),
(6, 'ddd', 'nhatquangprovodoi222@gmail.com', '$2y$10$cOZxzN3U3DBz3BNfXNm5OumGGcI4XvI7F/cXRWcmjqkpjqTCv9J4G', '2', NULL, NULL, 1111111111, 'dccPINqtrExWyEhuliCVl1wcXygYQ8sLbFW1jVtsnqBAQlw1WvxhQLdSXYUZ', '2017-10-16 02:41:42', '2017-10-16 02:41:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
