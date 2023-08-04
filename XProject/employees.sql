-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th8 04, 2023 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Pammi', 'PO Box 27230', 5072),
(2, 'Farly', 'Apt 1373', 5644),
(3, 'Stephan', '1st Floor', 6857),
(4, 'Farlie', '18th Floor', 5691),
(5, 'Isabel', 'PO Box 93095', 5435),
(6, 'Torrance', 'Apt 723', 7263),
(7, 'Beulah', '14th Floor', 5758),
(8, 'Bernardo', 'PO Box 29311', 5944),
(9, 'Elsbeth', 'Suite 37', 6147),
(10, 'Deeanne', 'Apt 1891', 7017),
(11, 'Denys', '15th Floor', 7130),
(12, 'Kalli', '7th Floor', 5881),
(13, 'Farlie', 'Suite 45', 5069),
(14, 'Cullin', 'PO Box 95763', 7499),
(15, 'Dallas', 'Suite 83', 6913),
(16, 'Gusty', 'Room 1745', 5516),
(17, 'Jerrold', 'Room 320', 7655),
(18, 'Arlina', 'PO Box 79408', 6692),
(19, 'Amil', '18th Floor', 6205),
(20, 'Charity', 'Suite 63', 7372),
(21, 'Odele', '15th Floor', 5613),
(22, 'Beale', 'PO Box 19739', 5643),
(23, 'Dedra', 'Suite 45', 5729),
(24, 'Tobe', 'Apt 675', 6852),
(25, 'Tana', 'Apt 1231', 5214),
(26, 'Dunc', 'Room 1425', 6781),
(27, 'Jonis', '5th Floor', 7788),
(28, 'Carny', 'Apt 1492', 7380),
(29, 'Meara', 'PO Box 79818', 7703),
(30, 'Christie', 'Apt 1086', 6560),
(31, 'Tod', 'Room 1277', 7394),
(32, 'Neel', 'Suite 89', 6671),
(33, 'Cecilla', '16th Floor', 7281),
(34, 'Sonni', 'Apt 767', 7765),
(35, 'Natty', 'PO Box 94311', 5952),
(36, 'Ewen', 'Suite 19', 7479),
(37, 'Padgett', 'Apt 1428', 5930),
(38, 'Phyllida', 'Apt 1897', 6738),
(39, 'Carol-jean', 'Suite 44', 5412),
(40, 'Nanny', '12th Floor', 6309),
(41, 'Jessy', 'Room 1071', 7711),
(42, 'Demetre', 'PO Box 82948', 6999),
(43, 'Trescha', 'PO Box 71857', 6496),
(44, 'Giralda', 'PO Box 12251', 6970),
(45, 'Berk', 'Suite 37', 7268),
(46, 'Estrellita', 'PO Box 7535', 6095),
(47, 'Sydel', 'Apt 579', 7527),
(48, 'Guthrey', '19th Floor', 6340),
(49, 'Jules', '18th Floor', 6691),
(50, 'Ruthy', 'PO Box 62396', 5132);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
