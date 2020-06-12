-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2020 lúc 04:17 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k20httta_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giang_vien`
--

CREATE TABLE `tbl_giang_vien` (
  `ID_Giang_vien` int(11) NOT NULL,
  `Ten_Giang_vien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Chuc_danh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bo_Mon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phu_trach_hoc_phan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Chia_se_nghien_cuu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Chuyen_mon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_giang_vien` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giang_vien`
--

INSERT INTO `tbl_giang_vien` (`ID_Giang_vien`, `Ten_Giang_vien`, `Chuc_danh`, `Email`, `Bo_Mon`, `Phu_trach_hoc_phan`, `Chia_se_nghien_cuu`, `Chuyen_mon`, `anh_giang_vien`) VALUES
(1, 'chu văn huy', 'Phó Bí thư Chi bộ, Phó Trưởng Khoa HTTTQL', ' huycv@hvnh.edu.vn', 'Tin học quản lý', 'Kiến trúc doanh nghiệp, Lập trình Web, Phát triển ', 'https://hvnh.academia.edu/huycv', 'Msc (IT), BA (IT)', ''),
(2, 'chu văn huy', 'dffs', 'fdfdsf', 'dfadsf', 'dsfds', 'sdfdsf', 'dsfdsf', ''),
(3, '213123123', '213123123', '123123', '213123', '123123', '123123', '123123', ''),
(4, 'sadsadsadsad', 'sadasdasd', 'sadsad', 'ádsad', 'ádads', 'ádads', 'ádasd', ''),
(5, 'vcxcxvxcv', 'cxvxcvcxv', 'cxvxcv', 'cvxxcvxcv', 'vcxvxcvxcv', '2321312', '1231231232', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_giang_vien`
--
ALTER TABLE `tbl_giang_vien`
  ADD PRIMARY KEY (`ID_Giang_vien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_giang_vien`
--
ALTER TABLE `tbl_giang_vien`
  MODIFY `ID_Giang_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
