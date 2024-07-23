-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2024 at 10:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd19204-duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `idtk` int DEFAULT '0',
  `billname` varchar(255) NOT NULL,
  `billdiachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `billsdt` varchar(50) NOT NULL,
  `billemail` varchar(255) NOT NULL,
  `billpttt` tinyint(1) DEFAULT '1' COMMENT '1.Thanh toán trực tiếp 2.Chuyển khoản 3.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `billstatus` tinyint(1) DEFAULT '0' COMMENT '0.Đơn hàng mới 1.Đang sử lý 2.Đang giao hàng 3.Đã giao hàng',
  `receiven_ame` varchar(255) DEFAULT NULL,
  `receiven_diachi` varchar(255) DEFAULT NULL,
  `receiven_sdt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `idtk`, `billname`, `billdiachi`, `billsdt`, `billemail`, `billpttt`, `ngaydathang`, `total`, `billstatus`, `receiven_ame`, `receiven_diachi`, `receiven_sdt`) VALUES
(100, 7, 'quan', 'vinh phuc', '987654321', 'quan@gmail.com', 1, '06:07:33am  22/07/2024', 165, 0, NULL, NULL, NULL),
(101, 7, 'quan', 'vinh phuc', '987654321', 'quan@gmail.com', 1, '11:51:18am  22/07/2024', 121, 2, NULL, NULL, NULL),
(102, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 2, '12:31:20pm  22/07/2024', 110, 1, NULL, NULL, NULL),
(103, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 2, '12:58:38pm  22/07/2024', 1120, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtk` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idtk`, `idpro`, `ngaybinhluan`) VALUES
(1, 'dep qua di', 8, 8, '09:17:17am 26/05/2024'),
(2, 'dep qua di', 8, 8, '09:17:22am 26/05/2024'),
(3, 'xau qua', 8, 8, '09:18:56am 26/05/2024'),
(4, 'san pham xau', 8, 8, '09:21:20am 26/05/2024'),
(5, 'xau qua', 8, 12, '09:52:40am 26/05/2024'),
(6, 'ship lâu quá', 8, 3, '10:11:04am  26/05/2024'),
(7, 'Đẹp quá đi', 7, 13, '09:57:42am  31/05/2024'),
(8, 'Nhìn màu tối quá', 7, 5, '09:58:15am  31/05/2024'),
(9, 'Màu này sáng quá!', 8, 2, '11:24:08am  29/06/2024'),
(10, 'màu này được đấy', 8, 6, '12:15:37pm  15/07/2024');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `idtk` int DEFAULT '0',
  `idpro` int NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL DEFAULT '0.00',
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idtk`, `idpro`, `tensp`, `image`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(160, 7, 39, 'POLO  SHIRT SHORT OPPIC', 'f80dc2e9eb674719de690ddea40fdea6.jpg', 77.00, 1, 77, 100),
(161, 7, 37, 'POLO COLLAR SHIRT SHORT', '20e55e578dde7ceea39c49e06c64327c.jpg', 88.00, 1, 88, 100),
(162, 7, 15, 'Áo hoodie thể thao Asics Tiger Hoodie', 'z5656604052010_6b10d897c83fde4fd67d6c7781b50bc4.jpg', 121.00, 1, 121, 101),
(163, 8, 38, 'POLO SHORT RED', '0aabb402d01475b187eec32d8050d4a9.jpg', 55.00, 2, 55, 102),
(164, 8, 35, 'Áo BOGNER FIRE', 'b9d8436d69a8fc94eb87a97cc456345b.jpg', 1120.00, 1, 1120, 103);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `status-dm` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `status-dm`) VALUES
(2, 'Áo phông thể thao', 0),
(3, 'Áo ba lỗ thể thao', 0),
(4, 'Áo gile thể thao', 0),
(5, 'Áo sơ mi thể thao', 0),
(6, 'Áo hoodie thể thao', 0),
(7, 'Áo khoác thể thao', 0),
(8, 'Áo polo thể thao', 0),
(11, 'Áo tập yoga', 0),
(12, 'Áo tập aerobic', 0),
(13, 'Áo tập gym', 0),
(16, 'Áo tập chạy bộ', 0),
(17, 'Áo  bơi', 0),
(18, 'Áo tập trượt tuyết', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double(10,2) DEFAULT '0.00',
  `image` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddanhmuc` int NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `image`, `mota`, `luotxem`, `iddanhmuc`, `status`, `soluong`) VALUES
(3, 'Áo gile thể thao Asics Accelerate', 5555.00, 'ao-gile-nu-Lecoq-QGWUJK50-Blue-1.jpg', '        www                                                                                                ', 9, 4, 0, 22),
(4, 'Áo ba lỗ Asics Gel-Cool', 111.00, 'z5656563206409_80473fd799e6d92bd24b1e4fa94ab71b.jpg', '             rrrr                                                                                           ', 0, 3, 0, 8),
(5, 'Áo gile  Under Armour ColdGear Armour', 111.00, 'z5656593557204_a1e211a85c9e3c2a065ca6c8ca7c330b.jpg', '           oooo                                                                        ', 40, 4, 0, 3),
(6, 'Áo ba lỗ Lululemon Power Y', 77.00, 'z5656541669661_3de2ffc9869d4e69c21d75e30a74cc4e.jpg', '                      ppp                                                                                  ', 90, 3, 0, 9),
(7, 'Áo Asics Thermopolis', 111.00, 'z5656569860220_6737072eb1bab298ca6001e63b3ca49b.jpg', '          qqqq                                                                         ', 0, 2, 0, 8),
(8, 'Áo sơ mi thể thao Puma Evostripe', 8070.00, '2267d628d56054ed0e80732d0fd7b2e8.jpg', '               pppp                                                                    ', 77, 5, 0, 5),
(11, 'Áo ba lỗ Adidas Own The Run', 5555.00, 'z5656563206496_3fd28b1b77fbbfffda94c85a3b65f9a6.jpg', '                eeee                                                                                        ', 0, 3, 0, 8),
(12, 'Áo Lululemon Swiftly Tech tay ngắn', 77.00, 'z5656624624711_db219b9d4f70cd8e19c04532b0fe5501.jpg', '             www                                                                                           ', 41, 2, 0, 15),
(13, 'Áo gile  Nike Therma-FIT', 111.00, 'f11d910ebd9dbc13a2faef65d0aa1603.jpg', '                       ppp                                                            ', 23, 4, 0, 9),
(14, 'Áo khoác thể thao Adidas Tiro 21', 77.00, '0c5a52706a0042af7a25243f7bb30c45.jpg', '                                                                                   ', 120, 7, 0, 6),
(15, 'Áo hoodie thể thao Asics Tiger Hoodie', 121.00, 'z5656604052010_6b10d897c83fde4fd67d6c7781b50bc4.jpg', '           qqqq                                                                        ', 0, 6, 0, 7),
(16, 'Áo hoodie thể thao Puma Evostripe', 1239.00, 'z5656604052063_ecc4a9c9d2751b787565a6eba026c52c.jpg', '                 tgg                                                                                       ', 0, 6, 0, 12),
(17, 'Nike Dri-FIT Polo Shirt', 77.00, 'z5656598677148_e3b89843ff40370417fe860e89f5d65f.jpg', '               eee                                                                    ', 67, 8, 0, 8),
(18, 'Áo ba lỗ Nike Dri-FIT Miler chạy bộ', 2222.00, 'z5656563206646_13c30e6865b70c4faeda83a2e900c9ad.jpg', '                      bxhbh                                                             ', 56, 3, 0, 5),
(21, 'Áo phông Puma Evostripe', 98.00, 'z5656624592785_fc32e9cae6886be9c8bbac3f12018654.jpg', '             oo                                                                                           ', 55, 2, 0, 13),
(22, 'Áo tập yoga Puma Studio', 98.00, 'z5656614723620_b56bf04f1d86539e57bc0ec14245f4b1.jpg', '                     ppp                                                              ', 76, 11, 0, 23),
(23, 'Áo tập yoga Lululemon Align Tank', 55.00, 'z5656615922814_ab936ef49fcc4c06112bf51237ee80e2.jpg', '            uu                                                                       ', 0, 11, 0, 6),
(24, 'Áo thể thao Nike Dri-FIT thoáng khí', 55.00, 'z5656624624712_ef960cf8b7a2c7b849ed33a05c1edc7d.jpg', '                    ww                                                                                    ', 0, 2, 0, 9),
(25, 'Workout Aerobic Ready Shorts', 99.00, '5ba75487dafc1a3fd828ee3f24d55375.jpg', '                      ww                                        ', 90, 12, 0, 10),
(26, 'Nike Dri-FIT Miler Tank Top Gym', 16.00, '4c7e4fb020a2e74d524a549534bb2935.jpg', '             re                                                                      ', 0, 13, 0, 10),
(29, 'Nike Dri-FIT Miler Short  Running Top', 13.00, 'fe5c698488a69ee396bfd7583f2ee443.jpg', '                  jhhh                                            ', 0, 16, 0, 6),
(30, 'Áo bơi thể thao Ukedi', 66.00, '59e73bbe2bb68d6ffae2e0301a3b32a9.jpg', '                 eeee   ', 0, 17, 0, 10),
(31, 'Áo bơi ONeill UV', 99.00, 'dbee6400337f5eb9a66bf64e49d6eb94.jpg', '           sưe         ', 0, 18, 0, 10),
(32, 'Áo bơi Opelia Puma', 44.00, 'bdf40ef26b1c5ecc5fc85c476f68a1c3.jpg', '              qqqq      ', 0, 17, 0, 6),
(33, 'Áo Khoác  Short Ski Jacket', 1234.00, '07cba59c7be8a7cd3fcf5856d3cfced2.jpg', '       gfh             ', 0, 18, 0, 16),
(34, 'Áo Trượt tuyết Koipe', 999.00, '98fba1d93a9310ccc15e69e5c54da2ce.jpg', '         hghj                                ', 0, 18, 0, 6),
(35, 'Áo BOGNER FIRE', 1120.00, 'b9d8436d69a8fc94eb87a97cc456345b.jpg', '                    yiy', 0, 18, 0, 21),
(36, 'Áo bơi Cutout swimsuit', 98.00, '56c76986c57ecfd4600318e1451ad20d.jpg', '      gd                                  ', 0, 17, 0, 6),
(37, 'POLO COLLAR SHIRT SHORT', 88.00, '20e55e578dde7ceea39c49e06c64327c.jpg', '                    dfsf', 0, 8, 0, 9),
(38, 'POLO SHORT RED', 55.00, '0aabb402d01475b187eec32d8050d4a9.jpg', '                 fsxs                                                                                       ', 0, 8, 0, 11),
(39, 'POLO  SHIRT SHORT OPPIC', 77.00, 'f80dc2e9eb674719de690ddea40fdea6.jpg', '         gfg           ', 0, 8, 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `role` tinyint DEFAULT '0',
  `status-tk` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `pass`, `email`, `diachi`, `sdt`, `role`, `status-tk`) VALUES
(7, 'quan', '0000000', 'quan@gmail.com', 'vinh phuc', '987654321', 1, 0),
(8, 'ducduc', '12345678', 'luuduc@gmail.com', 'Vĩnh Phúc', '0965866805', 1, 0),
(9, 'quan', '0000000', 'quan@gmail.com', NULL, NULL, 0, 0),
(10, 'quangquang', '11111111', 'quang@gmail.com', 'Hải Dương', '0989801133', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`iddanhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
