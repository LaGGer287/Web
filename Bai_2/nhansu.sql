-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2023 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhansu`
--

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `hienthi`
-- (See below for the actual view)
--
CREATE TABLE `hienthi` (
`id` varchar(32)
,`pbt` varchar(255)
,`trangthai` int(11)
,`ten` varchar(255)
,`hovaten` varchar(255)
,`dienthoai` varchar(10)
,`email` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhansu`
--

CREATE TABLE `nhansu` (
  `id` varchar(32) NOT NULL,
  `phongban_id` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhansu`
--

INSERT INTO `nhansu` (`id`, `phongban_id`, `trangthai`, `trinhdo_id`, `hovaten`, `dienthoai`, `email`) VALUES
('NS1', 1, 1, 1, 'Nguyễn Duy Chiến', '0999999999', 'chien@gmail.com'),
('NS2', 2, 1, 2, 'Hoàng Anh Dũng', '0999999999', 'dung@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id`, `ten`, `dienthoai`, `diachi`) VALUES
(1, 'Phòng Marketing', '099999999', 'Hải Phòng'),
(2, 'Phòng Kế toán', '099999999', 'Hải Phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quatrinhdaotao`
--

CREATE TABLE `quatrinhdaotao` (
  `id` varchar(32) NOT NULL,
  `nhansu_id` varchar(32) NOT NULL,
  `tungay` datetime NOT NULL,
  `denngay` datetime NOT NULL,
  `loaihinhdaotao` varchar(100) NOT NULL,
  `bangcap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quatrinhdaotao`
--

INSERT INTO `quatrinhdaotao` (`id`, `nhansu_id`, `tungay`, `denngay`, `loaihinhdaotao`, `bangcap`) VALUES
('QTDT1', 'NS1', '2022-01-01 00:00:00', '2022-01-01 00:00:00', 'Đại học', 'Đại học'),
('QTDT2', 'NS2', '2022-01-01 00:00:00', '2022-01-01 00:00:00', 'Cao đằng', 'Cao đẳng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thannhan`
--

CREATE TABLE `thannhan` (
  `id` int(11) NOT NULL,
  `nhansu_id` varchar(32) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `quanhe` varchar(50) NOT NULL,
  `dienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thannhan`
--

INSERT INTO `thannhan` (`id`, `nhansu_id`, `ten`, `quanhe`, `dienthoai`) VALUES
(1, 'NS1', 'Nguyễn Quốc Trường', 'Bố', '011111111'),
(2, 'NS2', 'Bùi Thế Đức', 'Bố', '011111111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdohocvan`
--

CREATE TABLE `trinhdohocvan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trinhdohocvan`
--

INSERT INTO `trinhdohocvan` (`id`, `ten`, `mota`) VALUES
(1, 'Đại học', 'Hết đại học'),
(2, 'Cao đẳng', 'Hết Cao đẳng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL,
  `quyenhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `matkhau`, `tendaydu`, `quyenhan`) VALUES
('chien', '123', 'abc', 1),
('admin', '321', 'abc', 1),
('Chiến', '123', 'abc', 1);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `hienthi`
--
DROP TABLE IF EXISTS `hienthi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hienthi`  AS SELECT `id` AS `id`, `phongban`.`ten` AS `pbt`, `trangthai` AS `trangthai`, `trinhdohocvan`.`ten` AS `ten`, `hovaten` AS `hovaten`, `dienthoai` AS `dienthoai`, `email` AS `email` FROM ((`nhansu` join `phongban`) join `trinhdohocvan`) WHERE `phongban`.`id` = `phongban_id` AND `trinhdohocvan`.`id` = `trinhdo_id` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phongban_id` (`phongban_id`),
  ADD KEY `trinhdo_id` (`trinhdo_id`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quatrinhdaotao`
--
ALTER TABLE `quatrinhdaotao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhansu_id` (`nhansu_id`);

--
-- Chỉ mục cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhansu_id` (`nhansu_id`);

--
-- Chỉ mục cho bảng `trinhdohocvan`
--
ALTER TABLE `trinhdohocvan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trinhdohocvan`
--
ALTER TABLE `trinhdohocvan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD CONSTRAINT `nhansu_ibfk_1` FOREIGN KEY (`phongban_id`) REFERENCES `phongban` (`id`),
  ADD CONSTRAINT `nhansu_ibfk_2` FOREIGN KEY (`trinhdo_id`) REFERENCES `trinhdohocvan` (`id`);

--
-- Các ràng buộc cho bảng `quatrinhdaotao`
--
ALTER TABLE `quatrinhdaotao`
  ADD CONSTRAINT `quatrinhdaotao_ibfk_1` FOREIGN KEY (`nhansu_id`) REFERENCES `nhansu` (`id`);

--
-- Các ràng buộc cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  ADD CONSTRAINT `thannhan_ibfk_1` FOREIGN KEY (`nhansu_id`) REFERENCES `nhansu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
