-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2020 lúc 06:38 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `finaldb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `idLocation` int(10) DEFAULT NULL,
  `pickupDay` date DEFAULT NULL,
  `dropDay` date DEFAULT NULL,
  `idProduct` int(10) DEFAULT NULL,
  `idReview` int(10) DEFAULT NULL,
  `idUPayment` int(10) DEFAULT NULL,
  `idUser` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `iddropLocation` int(10) DEFAULT NULL,
  `totalprice` decimal(18,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `idLocation`, `pickupDay`, `dropDay`, `idProduct`, `idReview`, `idUPayment`, `idUser`, `status`, `iddropLocation`, `totalprice`, `created_at`, `updated_at`) VALUES
(32, 1, '2020-05-11', '2020-05-13', 7, NULL, NULL, 4, 3, 1, '39.98', '2020-05-11 03:23:54', '2020-05-11 06:35:53'),
(33, 1, '2020-05-11', '2020-05-14', 6, NULL, NULL, 4, 3, 1, '77.97', '2020-05-11 03:26:19', '2020-05-11 06:34:05'),
(34, 1, '2020-05-12', '2020-05-14', 4, NULL, NULL, 2, NULL, 2, '76.98', '2020-05-12 07:34:23', '2020-05-12 07:34:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `id` int(10) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contactPhone` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`id`, `address`, `contactPhone`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Quan Tan Binh', '0123456789', 'Ho Chi Minh', '2020-04-27 03:50:26', '2020-04-27 03:50:26'),
(2, 'Thanh Xuan', '123123123', 'Ha Noi', '2020-04-27 03:50:44', '2020-04-27 03:50:44'),
(3, 'Quan 11', '324123123', 'Da Nang', '2020-04-27 03:50:56', '2020-04-27 03:50:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'HTK Ho Chi Minh', '2020-04-27 03:53:07', '2020-04-27 03:53:07'),
(2, 'HTK Ha Noi', '2020-04-27 03:53:14', '2020-04-27 03:53:14'),
(3, 'HTK Da Nang', '2020-04-27 03:53:20', '2020-04-27 03:53:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `idPaymentType` int(10) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `TotalPrice` decimal(18,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `payment_types`
--

INSERT INTO `payment_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MoMo', '2020-04-27 03:53:45', '2020-04-27 03:53:45'),
(2, 'Banking', '2020-04-27 03:53:50', '2020-04-27 03:53:50'),
(3, 'Visa', '2020-04-27 03:53:54', '2020-04-27 03:53:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `idModel` int(10) DEFAULT NULL,
  `idLocation` int(10) DEFAULT NULL,
  `daily_price` decimal(18,2) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `groupset` varchar(255) DEFAULT NULL,
  `cassette` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `idModel`, `idLocation`, `daily_price`, `status`, `image`, `size`, `weight`, `groupset`, `cassette`, `created_at`, `updated_at`) VALUES
(1, 'Brand-X Road Bike', 1, 3, '50.00', 0, 'roadbike3.jpg', 'M', 'Nominal weight 14 kg', 'Shimano Alivio 24-speed', ' HG Cassette 11-32 T, 8-speed', '2020-04-27 03:51:37', '2020-04-29 03:32:02'),
(2, 'Light Touring Bike', 4, 1, '49.00', 0, 'touringbike.jpg', 'L', 'Nominal weight 13 kg', 'Shimano Alivio 24-speed', 'HG Cassette 11-32 T, 8-speed', '2020-04-27 03:51:55', '2020-05-03 20:06:01'),
(3, 'Mountain bike 540 RR Red', 2, 3, '50.00', 0, 'mountainbike.jpg', 'XL', 'Nominal weight 15 kg', 'Shimano Alivio 24-speed', ' HG Cassette 11-32 T, 8-speed', '2020-04-27 03:52:06', '2020-04-27 03:52:06'),
(4, 'hybrid bike Dual Sport 2 ', 4, 3, '38.49', 1, 'hybridbike3.jpg', 'M', 'Nominal weight 13 kg', 'Shimano Alivio 24-speed', ' HG Cassette 11-32 T, 8-speed', '2020-04-27 03:52:17', '2020-05-12 07:34:23'),
(5, ' Leadnovo Black-Red-White', 1, 1, '15.99', 0, 'roadbike.jpg', 'XL', 'Nominal weight 12 kg', 'Shimano Alivio 22-speed', ' HG Cassette 11-32 T, 8-speed', '2020-04-27 19:22:33', '2020-05-04 02:23:27'),
(6, 'Mountain Bike Cross FXT30', 2, 2, '25.99', 0, 'mountainbike1.jpg', 'M', 'Nominal weight 16 kg', 'Shimano Alivio 24-speed', ' HG Cassette 11-32 T, 8-speed', '2020-04-27 19:22:50', '2020-05-11 06:34:05'),
(7, 'Mountain bike 4EVER Virus XC1', 2, 2, '19.99', 0, 'mountainbike2.jpg', 'L', 'Nominal weight 14 kg', 'Shimano Alivio 24-speed', 'HG Cassette 11-32 T, 8-speed', '2020-04-27 19:23:14', '2020-05-11 06:35:53'),
(8, 'Riverside 900 Hybrid Bike ', 3, 3, '14.99', 0, 'hybridbike1.jpg', 'XL', 'Nominal weight 16 kg', 'Shimano Alivio 24-speed', 'HG Cassette 11-32 T, 8-speed', '2020-04-27 19:23:37', '2020-04-27 19:23:37'),
(9, 'Hybrid bike -Kids', 3, 1, '12.99', 0, 'hybridbike2.jpg', 'L', 'Nominal weight 10 kg', 'Shimano Alivio 18-speed', 'HG Cassette 8-28 T, 6-speed', '2020-04-27 19:23:51', '2020-05-03 19:17:30'),
(10, 'TREK\r\n920 Touring Bike, 2019', 4, 3, '23.99', 0, 'touringbike1.jpg', 'M', 'Nominal weight 16 kg', 'Shimano Alivio 24-speed\r\n', 'HG Cassette 8-28 T, 6-speed', '2020-05-03 20:56:20', '2020-05-03 20:56:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `Description` text DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `Description`, `idProduct`, `idUser`, `Rating`, `created_at`, `updated_at`) VALUES
(3, 'good ', 3, 2, 0, '2020-04-29 21:27:37', '2020-04-29 21:27:37'),
(5, 'good', 1, 4, 0, '2020-05-02 00:25:09', '2020-05-02 00:25:09'),
(6, 'very fast', 7, 16, 0, '2020-05-04 07:59:26', '2020-05-04 07:59:26'),
(7, 'Good bike', 7, 2, 0, '2020-05-04 08:00:01', '2020-05-04 08:00:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-04-27 10:46:13', NULL),
(2, 'Customer', '2020-04-27 10:48:53', NULL),
(3, 'Staff', '2020-04-27 10:49:12', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `idManufacture` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `idManufacture`, `created_at`, `updated_at`) VALUES
(1, 'Road-Bike', 2, '2020-04-27 10:47:34', NULL),
(2, 'Mountain-Bike', 3, '2020-04-27 10:47:34', NULL),
(3, 'Hybird-Bike', 2, '2020-04-27 10:48:18', NULL),
(4, 'Touring Bike', 1, '2020-04-29 03:41:25', '2020-04-29 03:41:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `active` int(10) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `idRole` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `gender`, `address`, `image`, `phone`, `DateofBirth`, `active`, `password`, `idRole`, `created_at`, `updated_at`) VALUES
(2, 'hatuankiet19@gmail.com', 'Ha Tuan Kiet', 'Male', '70/9/1 Le Van Tho, P.11, Q.Go vap, TPHCM, VN', 'Adminimg.jpeg', 37257948, '1998-06-26', 1, '$2y$10$5Ph3owr.eVGqtMhvUz4HJO4kJTaPvG95M0N2pNC/kbEVbHC/5Ub5O', 3, '2020-05-09 04:31:11', '2020-04-27 05:50:17'),
(4, 'htkrental@gmail.com', 'HTK Rental Bike', 'Male', '70/9/1 Le van Tho, P11, Q.GoVap, TPHCM', 'Adminimg.jpeg', 372579483, '1998-06-26', 1, '$2y$10$rnFANUOBckaU48L9xZA89OydTNBgdHPwh5cbn2Vz4YKbbno2SPHBa', 1, '2020-05-09 04:30:45', '2020-05-08 21:30:45'),
(13, 'tiencong@gmail.com', 'Tien Cong', NULL, NULL, NULL, NULL, NULL, 0, '$2y$10$KQqUmjuI41GxXShiwUhA9O1wotmSGCqYAFgrCO32x0Z.yOeMMBHza', 2, '2020-05-04 04:03:32', '2020-05-02 05:49:27'),
(15, 'giang@gmail.com', 'giang', 'Male', 'Quan 11', NULL, 372579412, '1999-12-21', 0, '$2y$10$2kgJxsBgwS.KHVjMxChdaOsbOCQZDvfrczU1DORilktiVJtPo4uYG', 2, '2020-05-04 04:05:44', '2020-05-03 21:05:44'),
(16, 'hatuankiet7@gmail.com', 'kiet', NULL, 'Quan Tan Binh', NULL, 123123, NULL, 1, '$2y$10$th3bnmkC.5TGv93t3uec2uO25WZGrsdHVu8LPNzzQUrDpbRju7nFC', 2, '2020-05-09 04:29:05', '2020-05-04 01:48:30'),
(17, 'kiet@kietfpt.com', 'Kiet', NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$xMHc8gxMikMyy7xbZsuoWOtxqBD7t1gDKzMWOybE8ZaUYixM8MQwG', 2, '2020-05-12 16:20:33', '2020-05-12 09:20:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
