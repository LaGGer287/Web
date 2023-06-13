-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2023 lúc 09:54 AM
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
-- Cơ sở dữ liệu: `clb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caulacbo`
--

CREATE TABLE `caulacbo` (
  `id` int(11) NOT NULL,
  `namthanhlap` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `muctieu` text NOT NULL,
  `chutich_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `caulacbo`
--

INSERT INTO `caulacbo` (`id`, `namthanhlap`, `ten`, `muctieu`, `chutich_id`) VALUES
(1, 2022, 'Câu lạc bộ khuyết tật', 'Trở thành người khuyết tật', 'CT1'),
(2, 2022, 'Câu lạc bộ tình nguyện', 'Trở thành tình nguyện viên', 'CT2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoatdong`
--

CREATE TABLE `chitiethoatdong` (
  `id` int(11) NOT NULL,
  `hoatdong_id` int(11) NOT NULL,
  `sinhvien_id` varchar(32) NOT NULL,
  `nhiemvu` varchar(500) NOT NULL,
  `nhanxet` text NOT NULL,
  `diemdanhgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoatdong`
--

INSERT INTO `chitiethoatdong` (`id`, `hoatdong_id`, `sinhvien_id`, `nhiemvu`, `nhanxet`, `diemdanhgia`) VALUES
(1, 1, 'HS1', 'Lao động tốt', 'Thực hiện tốt', 1),
(2, 2, 'HS2', 'Lao động tốt', 'Thực hiện tốt', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkythanhvien`
--

CREATE TABLE `dangkythanhvien` (
  `id` int(11) NOT NULL,
  `sinhvien_id` varchar(32) NOT NULL,
  `clb_id` int(11) NOT NULL,
  `ngaydangky` datetime NOT NULL,
  `ngayxetduyet` datetime NOT NULL,
  `chutichclb_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangkythanhvien`
--

INSERT INTO `dangkythanhvien` (`id`, `sinhvien_id`, `clb_id`, `ngaydangky`, `ngayxetduyet`, `chutichclb_id`) VALUES
(1, 'HS1', 1, '0000-00-00 00:00:00', '2000-10-11 00:00:00', 'CT1'),
(2, 'HS2', 2, '0000-00-00 00:00:00', '2000-10-11 00:00:00', 'CT2');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `hienthi`
-- (See below for the actual view)
--
CREATE TABLE `hienthi` (
`id` int(11)
,`namthanhlap` int(11)
,`ten` varchar(255)
,`muctieu` text
,`TenCT` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` int(11) NOT NULL,
  `clbtochuc_id` int(11) NOT NULL,
  `tungay` datetime NOT NULL,
  `denngay` datetime NOT NULL,
  `muctieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `clbtochuc_id`, `tungay`, `denngay`, `muctieu`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Trờ thành khuyết tật'),
(2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Trờ thành tình nguyện viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` varchar(32) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `trangthai`, `hovaten`, `ngaysinh`, `mota`) VALUES
('CT1', 1, 'Nguyễn Quốc Trường', '0000-00-00 00:00:00', 'Xấu trai'),
('CT2', 1, 'Bùi Thế Đức', '0000-00-00 00:00:00', 'Xấu chó'),
('HS1', 1, 'Nguyễn Duy Chiến', '0000-00-00 00:00:00', 'Đẹp trai'),
('HS2', 0, 'Hoàng Anh Dũng', '0000-00-00 00:00:00', 'Xấu trai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL,
  `quyenhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `matkhau`, `tendaydu`, `quyenhan`) VALUES
(1, 'chien', '123', 'abc', 1),
(2, 'Chiến', '1', '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `hienthi`
--
DROP TABLE IF EXISTS `hienthi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hienthi`  AS SELECT `caulacbo`.`id` AS `id`, `caulacbo`.`namthanhlap` AS `namthanhlap`, `caulacbo`.`ten` AS `ten`, `caulacbo`.`muctieu` AS `muctieu`, `sinhvien`.`hovaten` AS `TenCT` FROM (`caulacbo` join `sinhvien`) WHERE `sinhvien`.`id` = `caulacbo`.`chutich_id` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chutich_id` (`chutich_id`);

--
-- Chỉ mục cho bảng `chitiethoatdong`
--
ALTER TABLE `chitiethoatdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoatdong_id` (`hoatdong_id`),
  ADD KEY `sinhvien_id` (`sinhvien_id`);

--
-- Chỉ mục cho bảng `dangkythanhvien`
--
ALTER TABLE `dangkythanhvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sinhvien_id` (`sinhvien_id`),
  ADD KEY `chutichclb_id` (`chutichclb_id`),
  ADD KEY `clb_id` (`clb_id`);

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clbtochuc_id` (`clbtochuc_id`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiethoatdong`
--
ALTER TABLE `chitiethoatdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dangkythanhvien`
--
ALTER TABLE `dangkythanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD CONSTRAINT `caulacbo_ibfk_1` FOREIGN KEY (`chutich_id`) REFERENCES `sinhvien` (`id`);

--
-- Các ràng buộc cho bảng `chitiethoatdong`
--
ALTER TABLE `chitiethoatdong`
  ADD CONSTRAINT `chitiethoatdong_ibfk_1` FOREIGN KEY (`hoatdong_id`) REFERENCES `hoatdong` (`id`),
  ADD CONSTRAINT `chitiethoatdong_ibfk_2` FOREIGN KEY (`sinhvien_id`) REFERENCES `sinhvien` (`id`);

--
-- Các ràng buộc cho bảng `dangkythanhvien`
--
ALTER TABLE `dangkythanhvien`
  ADD CONSTRAINT `dangkythanhvien_ibfk_1` FOREIGN KEY (`sinhvien_id`) REFERENCES `sinhvien` (`id`),
  ADD CONSTRAINT `dangkythanhvien_ibfk_2` FOREIGN KEY (`chutichclb_id`) REFERENCES `sinhvien` (`id`),
  ADD CONSTRAINT `dangkythanhvien_ibfk_3` FOREIGN KEY (`clb_id`) REFERENCES `caulacbo` (`id`);

--
-- Các ràng buộc cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD CONSTRAINT `hoatdong_ibfk_1` FOREIGN KEY (`clbtochuc_id`) REFERENCES `caulacbo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
