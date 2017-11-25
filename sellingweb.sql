-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2017 lúc 12:55 AM
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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'under wear', '2017-11-22 12:35:52', '2017-11-22 12:35:52'),
(6, 'pants', '2017-11-22 12:36:03', '2017-11-22 12:36:03'),
(7, 'shirt', '2017-11-22 12:47:53', '2017-11-22 12:47:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_07_031600_create_product_table', 1),
(4, '2017_11_07_033445_create_image_table', 1),
(5, '2017_11_22_154752_create_category_table', 2);

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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `detail_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `label`, `description`, `price`, `detail_information`, `feature_image`, `created_at`, `updated_at`) VALUES
(3, 7, 'ao lot', 'Victoria Secret', 'come here', 32, '<ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\"><li><a href=\"http://tiki.vn/ao-thun-nam/c917\" style=\"color: rgb(0, 127, 240);\">Áo Thun Nam</a> Cổ Tròn Tuấn Tú Store A1XD05 - Xanh Đen làm từ chất liệu cotton co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc.</li><li>Đây cũng là chất liệu dễ giặt sạch, nhanh khô, giúp bạn tiết kiệm một khoảng thời gian đáng kể.</li><li>Chất liệu cotton co giãn với bề mặt vải mềm mịn, thấm hút mồ hôi tạo cảm giác thoải mái, thoáng mát cho người mặc.</li><li>Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.</li><li>Form áo vừa vặn cơ thể, thoải mái theo từng cử động.</li><li>Kiểu cổ tròn kết hợp cùng tay ngắn vừa đơn giản, trẻ trung vừa thoải mái, năng động.</li><li>Áo trơn đơn sắc dễ dàng trong việc phối đồ và dễ dàng tạo ra cho mình nhiều phong cách khác nhau.</li><li>Bạn có thể phối áo cùng quần short, quần jean, quần kaki với giày thể thao hay giày xăng đan để đi dạo phố cùng bạn bè, người thân.</li></ul><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Hướng dẫn chọn size:</p><p></p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\"><img title=\"Áo Thun Nam T-Shirt Cổ Tròn Tuấn Tú Store A1D010 - Đen\" alt=\"Áo Thun Nam T-Shirt Cổ Tròn Tuấn Tú Store A1D010 - Đen\" width=\"638\" height=\"355\" src=\"https://tikicdn.com/media/catalog/product/u/n/untitled-1.u5533.d20170901.t093139.913545.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\"><img title=\"Áo Thun Nam T-Shirt Cổ Tròn Tuấn Tú Store A1D010 - Đen\" alt=\"Áo Thun Nam T-Shirt Cổ Tròn Tuấn Tú Store A1D010 - Đen\" width=\"626\" height=\"328\" src=\"https://tikicdn.com/media/catalog/product/d/s/dsd.u5533.d20170901.t100359.814393.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><div><br></div>', 'image/product_image/1511394013110817-intl-home-40-bra-USD.jpg', '2017-11-08 23:13:27', '2017-11-22 16:40:13'),
(4, 6, 'wusnf dfhgu', 'dfssssss', 'dfgdf  rrrrrrrrrrrr', 3, '<h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\"></h5><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\"><br></h5><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">Thiết kế đẹp và sang trọng</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Điện Thoại Nokia 8 có thiết kế nguyên khối, bộ khung máy được làm từ kim loại làm nổi bật lên vẻ sang trọng, tinh tế. Mặt kính cảm ứng được bảo vệ bởi kính Corning Gorilla Glass 5. Máy có 3 màu vàng, bạc và xanh vô cùng đẹp mắt.</p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center;\"><img title=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" alt=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" width=\"780\" height=\"433\" src=\"https://tikicdn.com/media/catalog/product/v/i/vi-vn-nokia-8--1-.u2769.d20170825.t104840.530970.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">Vi xử lý mạnh mẽ</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Điện Thoại Nokia 8 được tích hợp hệ điều hành Android 7.0, được xem là hệ điều hành tốt nhất hiện nay, cho bạn những trải nghiệm tuyệt vời nhất. Bên cạnh đó, máy được trang bị CPU Qualcomm Snapdragon 835 giúp chạy mượt các ứng dụng trên điện thoại. RAM 4 GB cho khả năng đa nhiệm cực tốt, bộ nhớ trong có thể lên đến 64 GB và hỗ trợ thẻ nhớ ngoài lên đến 256 GB mang lại một không gian lưu trữ thoải mái.</p><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">Màn hình rộng 5.3 inches</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Nokia 8 có màn hình cảm ứng với kích thước 5.3 inches, sử dụng tấm nền IPS LCD, độ phân giải 1440 x 2560 pixcels, mật độ điểm ảnh gần 554 ppi, cho hình ảnh hiển thị sắc nét và sống động.</p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center;\"><img title=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" alt=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" width=\"780\" height=\"433\" src=\"https://tikicdn.com/media/catalog/product/v/i/vi-vn-nokia-8--2-.u2769.d20170825.t104840.578119.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">Bộ đôi camera siêu nét</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Nokia 8 được trang bị camera chính nằm ở mặt sau với cặp camera 13MP, hỗ trợ nhiều tính năng tùy chỉnh ấn tượng: tự động lấy nét, gắn thẻ địa lý, chạm lấy nét, nhận diện khuôn mặt, HDR, Panorama, chống rung quang học (OIS)... giúp bạn lưu lại những khoảnh khắc cuộc sống một cách nhanh chóng. Ngoài ra, mặt trước máy có camera phụ có độ phân giải cao 12 MP để bạn thực hiện các cuộc gọi video thông qua ứng dụng hoặc selfie với bạn bè, người thân.</p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center;\"><img title=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" alt=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" width=\"780\" height=\"433\" src=\"https://tikicdn.com/media/catalog/product/v/i/vi-vn-nokia-8--4-.u2769.d20170825.t104840.649605.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center;\"><img title=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" alt=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" width=\"780\" height=\"433\" src=\"https://tikicdn.com/media/catalog/product/v/i/vi-vn-nokia-8--6-.u2769.d20170825.t104840.684996.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">OZO Audio - Công nghệ độc quyền của Hollywood</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Nokia 8 là điện thoại thông minh đầu tiên sử dụng tính năng Nokia OZO Audio, công nghệ độc quyền của Hollywood. Âm thanh không gian 360 OZO mang lại trải nghiệm âm thanh hoàn hảo cho video 4K của bạn. Khả năng thu âm âm thanh 360 ° hàng đầu đảm bảo cho việc phát lại cho phép bạn thực sự hồi tưởng lại khoảnh khắc để những kỷ niệm của bạn không hề phai mờ.</p><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: center;\"><img title=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" alt=\"Điện Thoại Nokia 8 - Hàng Chính Hãng\" width=\"780\" height=\"433\" src=\"https://tikicdn.com/media/catalog/product/v/i/vi-vn-nokia-8--7-.u2769.d20170825.t104840.719193.jpg\" style=\"display: block; max-width: 100%; height: auto; margin-left: auto; margin-right: auto;\"></p><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: justify;\">Các tính năng hữu ích khác</h5><p style=\"margin-top: 5px; margin-bottom: 12px; color: rgb(36, 36, 36); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Chiếc điện thoại Nokia 8 được trang bị sẵn cảm biến vân tay cho phép bạn bảo mật dữ liệu thuận tiện hơn. Ngoài ra, máy còn hỗ trợ mạng 4G để bạn có thể trải nghiệm internet di động tốc độ cao một cách hoàn hảo.</p>', 'image/product_image/1511394032103117-homepage-trend-shop.jpg', '2017-11-14 03:11:21', '2017-11-22 16:40:32'),
(5, 5, 'f', 'd', 'fgdf', 4, '<p>dddddddddd</p>', 'image/product_image/1511394052110817-intl-home-40-bra-USD.jpg', '2017-11-22 09:22:37', '2017-11-22 16:40:52');

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
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '0 if member, 1 if admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `adress`, `birthday`, `phone`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'donhatquang', 'nhatquangprovodoi@gmail.com', '$2y$10$auRJh0FIoC7W5N3fDl1ut.D6QXn7.R4GwwYVrDlce2lwNsHbSEpTm', '2', NULL, NULL, NULL, 1, 'HkWUIY6mWQivILNuMW21xbzz8ADRKh157xOaQn0PKHfF4ZGpSUq2oJaiaJxG', '2017-11-08 23:04:20', '2017-11-08 23:04:20'),
(2, 'dung', 'dinhanhdung1996@gmail.com', '$2y$10$1lBG/H8kAg72QSO3E/SpzuvkdSSl3aZ23zWjeCUVv8ECDy8enseyi', '2', NULL, NULL, NULL, 0, 'fMk8S0p12pCIrlZjOU9GyBhwKScGq44QeefRQgJZor7LWgJ0AeYLfX3zSpqJ', '2017-11-08 23:05:10', '2017-11-08 23:05:10'),
(3, 'ssssssss', 'nhatquangprovodoi3@gmail.com', '$2y$10$MQLR3NsOn8duVIebsmfUL.MMsBq0VrWUc3jhYxjQim9cXvxRVQ9LG', '2', 'xcv, xcv', NULL, NULL, 0, '5DG4fp8WBTydr7zroEkJafCGTLdRYRV1fiYTWlrloo9UdynE7gyfz1abwDMD', '2017-11-22 09:27:04', '2017-11-22 09:27:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
