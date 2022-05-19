-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2022 lúc 11:49 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDH` varchar(30) NOT NULL,
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` varchar(30) NOT NULL,
  `TenDH` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `request` text NOT NULL,
  `totalmoney` decimal(15,4) NOT NULL,
  `namepay` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `username` varchar(50) NOT NULL,
  `MaSP` varchar(10) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`username`, `MaSP`, `SoLuong`) VALUES
('hai123', 'sp002', 1),
('hai123', 'sp002', 1),
('hai123', 'sp002', 1),
('hai123', '', 1),
('hai123', 'sp004', 1),
('hai123', '', 1),
('hai123', 'sp004', 1),
('hai123', '', 1),
('hai123', 'qưeqw', 1),
('hai123', '', 1),
('hai123', '', 1),
('admin', 'sp001', 1),
('admin', 'sp008', 1),
('giang', 'sp001', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(5) CHARACTER SET utf8 NOT NULL,
  `TenSP` varchar(100) CHARACTER SET utf8 NOT NULL,
  `LoaiSP` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Size` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Mau` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Gia` int(11) NOT NULL,
  `anh` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `LoaiSP`, `Size`, `Mau`, `Gia`, `anh`, `mota`) VALUES
('sp001', 'Hoodie dirty coin', 'Quần áo mùa đông', 'XL', 'Trắng', 600000, '1.png', ''),
('sp002', 'Hoodie dirty coin xanh', 'Quần áo mùa đông', 'XL', 'Xanh', 600000, '2.png', ''),
('sp003', 'Hoodie dirty coin đỏ', 'Quần áo mùa đông', 'XL', 'Đỏ', 600000, '3.png', ''),
('sp004', 'cadigan dirtycoin', 'Quần áo mùa đông', 'XL', 'Trắng', 490000, '4.png', ''),
('sp005', 'Đầm Xuông Tay Bèo', 'Quần áo mùa hè', 'XL', 'Đỏ', 500000, 'sp1.png', 'Siêu đẹp'),
('sp006', 'Áo Sơ My Tay Bồng', 'Quần áo mùa hè', 'X', 'Đỏ', 300000, 'sp2.png', 'Rất là phong cách'),
('sp007', 'Chân Váy Bò', 'Quần áo mùa hè', 'XL', 'Xanh', 700000, 'sp3.png', 'Phong cách trẻ '),
('sp008', 'Đầm Xuông Tay Bèo', 'Quần áo mùa hè', 'X', 'Hồng', 600000, 'sp4.png', 'Trẻ trung'),
('sp009', 'Quần Jeans nữ', 'Quần áo mùa hè', 'X', 'Xanh', 300000, 'sp5.png', 'phù hợp mọi lứa tuổi'),
('sp010', 'Đầm Lụa Đuôi Cá', 'Quần áo mùa hè', 'L', 'Đỏ', 600000, 'sp6.png', 'Siêu Đẹp'),
('sp011', 'Đầm Chiffon Dập Ly', 'Quần áo mùa hè', 'XL', 'Đen', 600000, 'sp7.png', 'Sản phẩm mới của shop'),
('sp012', 'Đầm Xuông Tay Bèo', 'Quần áo mùa hè', 'X', 'Trắng', 300000, 'sp8.png', 'Đẹp'),
('sp013', 'Đầm Xèo Xếp Tầng', 'Quần áo mùa hè', 'L', 'Trắng', 900000, 'sp9.png', 'Đẹp '),
('sp014', 'Áo Măng Tô Kẻ', 'Quần áo mùa đông', 'XL', 'Xám', 850000, 'sp10.png', 'Thích hợp đi hội'),
('sp015', 'Áo Khoác Dạ Dáng Dài', 'Quần áo mùa đông', 'XXL', 'Đen', 95000, 'sp11.png', 'Đẹp'),
('sp016', 'Áo Khoác Dáng Dài', 'Quần áo mùa đông', 'XXL', 'Đen', 950000, 'sp12.png', 'Chất Liệu Siêu Bền'),
('sp017', 'Áo Khoác Len Viền Màu', 'Quần áo mùa đông', 'XXL', 'Đen', 700000, 'sp13.png', 'Hợp Thời Trang'),
('sp018', 'Trench Coat Dáng Dài', 'Quần áo mùa đông', 'XXL', 'Hồng', 1200000, 'sp14.png', 'Chất Liệu Đẹp Hàng Hiệu Tiêu Chuẩn'),
('sp019', 'Trench Coat Dáng Dài', 'Quần áo mùa đông', 'XL', 'Lục', 1200000, 'sp15.png', 'Siêu Bền'),
('sp020', 'Áo Khoác Dạ Dáng Vest', 'Quần áo mùa đông', 'X', 'Hồng', 1000000, 'sp16.png', 'Giá Đẹp'),
('sp021', 'Áo Khoác Thun ', 'Quần áo mùa đông', 'XXL', 'Nâu', 420000, 'sp17.png', 'Đẹp'),
('sp022', 'Men Tweed Bomber Jacket', 'Quần áo mùa đông', 'XL', 'Đen', 800000, 'sp18.png', 'Đẹp'),
('sp023', 'Áo Khoác Gió', 'Quần áo mùa đông', 'X', 'Đen', 600000, 'sp19.png', 'Siêu Mềm'),
('sp024', 'Áo Khoác Kẻ', 'Quần áo mùa đông', 'XL', 'Đen', 500000, 'sp20.png', 'Hợp Phong Cách'),
('sp025', 'Áo Khoác Kẻ', 'Quần áo mùa đông', 'XXL', 'Đỏ', 500000, 'sp21.png', 'Bền Đẹp'),
('sp026', 'Áo Khoác Cổ Đức', 'Quần áo mùa đông', 'XXL', 'Xanh', 600000, 'sp22.png', 'Đẹp Bền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `Password`, `Email`, `permission`) VALUES
('', 'hdtrung01@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
('admin', '21232F297A57A5A743894A0E4A801FC3', 'Shopquanao@gmail.com', 1),
('áds', '8277e0910d750195b448797616e091ad', 'â', 0),
('giang', '25f9e794323b453885f5181f1b624d0b', 'nhokcunpvp@gmail.com', 0),
('hai123', '70a0f9894d2df18c2507d231a94caee8', 'hai123', 0),
('simple', '202cb962ac59075b964b07152d234b70', 'simple@gmail.com', 0),
('thnagcho147c', '70a0f9894d2df18c2507d231a94caee8', 'hai123', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
