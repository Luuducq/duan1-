-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2024 at 05:00 PM
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
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `idtk` varchar(999) DEFAULT NULL,
  `billname` varchar(255) NOT NULL,
  `billdiachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `billsdt` varchar(50) NOT NULL,
  `billemail` varchar(255) NOT NULL,
  `billpttt` text COMMENT '1.Thanh toán trực tiếp 2.Chuyển khoản 3.Thanh toán online',
  `ngaydathang` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `billstatus` tinyint(1) DEFAULT '0' COMMENT '0.Đơn hàng mới 1.Đang sử lý 2.Đang giao hàng 3.Đã giao hàng',
  `id_pro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `receiven_sdt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `idtk`, `billname`, `billdiachi`, `billsdt`, `billemail`, `billpttt`, `ngaydathang`, `total`, `billstatus`, `id_pro`, `amount`, `receiven_sdt`) VALUES
(29, 'cc', 'Vũ Đức Nam', '123', '0559926567', 'vunammmm23072004@gamil.com', 'Thanh toán tại nhà', '2024/08/11 16:31', 91080, 1, '40', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `idtk` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `idpro` varchar(200) DEFAULT NULL,
  `ngaybinhluan` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idtk`, `idpro`, `ngaybinhluan`, `role`) VALUES
(11, 'sftgjwrtyjw n ', 'Vũ Đức Nam', '33', '2024-08-09   ', 0),
(12, 'abc', 'Vũ Đức Nam', '31', '2024-08-09   ', 0),
(13, '1111', 'Vũ Đức Nam', '33', '2024-08-10   ', 0),
(14, '1aeee', 'Vũ Đức Nam', '33', '2024-08-10   ', 0),
(15, '1aeee', 'Vũ Đức Nam', '33', '2024-08-10   ', 0),
(16, '1', 'Vũ Đức Namdddd', '32', '2024-08-10   ', 0),
(17, '1', 'Vũ Đức Namdddd', '32', '2024-08-10   ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `role`) VALUES
(18, 'Áo bóng đá', 1),
(19, 'Áo bóng chuyền', 1),
(20, 'Áo bóng bàn', 1),
(21, 'Áo PICKLEBALL', 1),
(22, 'Áo cầu lông', 1),
(24, 'Phụ kiện', 1),
(25, 'Phụ kiện', 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int NOT NULL,
  `id_product` text,
  `amount` text,
  `username` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `id_product`, `amount`, `username`) VALUES
(47, '33', '2', ''),
(54, '32', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double(10,2) DEFAULT '0.00',
  `image` varchar(255) DEFAULT NULL,
  `soLuong` int NOT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddanhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `image`, `soLuong`, `mota`, `luotxem`, `iddanhmuc`) VALUES
(40, 'Áo cầu lông VTT GoWo Nam', 90000.00, '2.webp', 999, '<p>ưerfytguhij</p>', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `role` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `pass`, `email`, `diachi`, `sdt`, `role`) VALUES
(12, 'abc', 'c4ca4238a0b923820dcc509a6f75849b', 'vunammmmm@gmail.com', NULL, NULL, 0),
(13, 'abcddaasfda', 'c4ca4238a0b923820dcc509a6f75849b', 'vunam2372022204@gmail.com', NULL, NULL, 0),
(14, 'ducduc', 'c4ca4238a0b923820dcc509a6f75849b', 'namvdph47498@gmail.com', 'Hải Dương', '09999999', 1),
(15, 'cc', '202cb962ac59075b964b07152d234b70', 'namvdph47498cc@gmail.com', 'Hải Dương', '0332991111', 0),
(16, 'lumanhgioi3', 'e479d8e16237c5e2e987478e41a1fb78', 'lumanhgioi.vn@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tt` int NOT NULL,
  `tieude` text,
  `mota` text,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tt`, `tieude`, `mota`, `img`) VALUES
(6, 'KAMITO AMAZING VIỆT NAM - KHÁM PHÁ VẺ ĐẸP TỨ ĐẠI ĐỈNH ĐÈO', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-weight: 700; max-width: 100%;\">Kamito Amazing Việt Nam được lấy cảm hứng từ vẻ đẹp bất tận của dải đất hình chữ S, mỗi địa danh là một bức tranh hùng vĩ. Dưới bàn tay của những người nghệ sĩ tài hoa Kamito, nét đẹp thiên nhiên được thổi hồn vào những sản phẩm có tính thẩm mỹ cao, đem đến cảm hứng khám phá vẻ đẹp đất nước cho những con người yêu thiên nhiên.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255);\">Kamito Amazing Việt Nam khởi đầu bằng BST Tứ Đại Đỉnh Đèo tượng trưng cho 4 đỉnh đèo huyền thoại núi rừng phía Bắc: Mã Pí Lèng, Khau Phạ, Ô Quy Hồ và Pha Đin được thiết kế qua các sản phẩm giày thể thao, giày life style mang vẻ đẹp tuyệt mỹ của thiên nhiên Việt Nam.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255);\">BST Tứ Đại Đỉnh Đèo mang phong cách hiện đại, thời trang và đầy năng động dễ dàng cho bạn mix match với các outfit trong tủ đồ để tự tin xuống phố hay các chuyến du lịch, đi chơi và các hoạt động khác trong cuộc sống hàng ngày.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255);\">Đừng bỏ lỡ cơ hội khám phá những tuyệt tác thiên nhiên cùng Kamito Amazing Việt Nam, những bộ sưu tập mang đến niềm tự hào về thiên nhiên, đất nước và con người Việt Nam.&nbsp;</p><div><br></div>', 'tt1.jpg'),
(7, 'BÙNG NỔ THÁNG 10 – GIẢM 50% ÁO ĐẤU BECAMEX BÌNH DƯƠNG, SHB ĐÀ NẴNG VÀ TOPENLAND BÌNH ĐỊNH', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">Kamito hân hạnh là nhà tài trợ chính thức trang phục thi đấu cho CLB Becamex Bình Dương, CLB SHB Đà Nẵng và CLB Topenland Bình Định mùa giải 2021.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">Thời gian vừa qua, những chiếc áo đấu của ba CLB đã được rất nhiều người hâm mộ trên cả nước ủng hộ và cho phản hồi tích cực.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">Để cảm ơn những sự ủng hộ nhiệt thành từ người hâm mộ, từ hôm nay 01/10/2021 tới 31/10/2021, Kamito giảm 50% giá bán áo đấu các CLB Becamex Bình Dương, CLB SHB Đà Nẵng và CLB Topenland Bình Định phiên bản Fan Jersey, cụ thể:</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Áo đấu CLB Becamex Bình Dương và CLB SHB Đà Nẵng: Giảm từ 370,000đ còn 185,000đ</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">Áo đấu CLB Topenland Bình Định phiên bản Fan Jersey: Giảm từ 220,000đ còn 110,000đ</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">=================================</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Chiếc áo đấu Becamex Bình Dương và SHB Đà Nẵng sẽ hoàn toàn tương tự như áo các cầu thủ khi ra sân thi đấu.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Chiếc áo đấu Topenland Bình Định sẽ hoàn toàn tương tự về chất liệu như áo các cầu thủ mặc khi ra sân thi đấu và chỉ khác biệt ở công nghệ in phần tên trước ngực: phần chữ “Topenland” được in ép nhiệt nổi bật.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Tham khảo thông tin chi tiết và đặt hàng online tại:</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Áo đấu CLB Becamex Bình Dương: https://kamito.vn/products/official-ao-dau-2021-becamex-binh-duong-tim</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Áo đấu CLB SHB Đà Nẵng: https://kamito.vn/products/official-ao-dau-2021-shb-da-nang-cam</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;Áo đấu CLB Topenland Bình Định: https://kamito.vn/products/ao-fan-clb-topenland-binh-dinh</span></p>', 'tt3.jpg'),
(8, 'SP10 ĐỒNG HÀNH CÙNG BAN NHẠC BỨC TƯỜNG TRONG ALBUM MỚI \"CON ĐƯỜNG KHÔNG TÊN\"', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">BỨC</span><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;TƯỜNG - ban nhạc rock nổi tiếng đã ghi dấu sâu đậm trong tâm trí biết bao fan nhạc rock hơn 2 thập kỷ qua, đã chính thức trở lại với album \"Con Đường Không Tên\".</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">\"Thời gian vẫn lặng lẽ qua, như cuốn đi tất cả, nhưng ký ức và tình yêu sẽ mãi vẹn nguyên\" - Đó là điều đẹp nhất mà Bức Tường muốn dành tặng tới các bạn yêu âm nhạc thông qua album lần này.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span class=\"diy96o5h\" style=\"margin: 0px; padding: 0px; max-width: 100%;\">Kamito</span><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">&nbsp;rất hân hạnh khi đồng hành cùng ban nhạc Bức Tường trong buổi ra mắt album với những chiếc áo T-Shirt \"Con Đường Không Tên\".</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: Quicksand, sans-serif; line-height: 21px; max-width: 100%; color: rgb(37, 42, 43); font-size: 14px; background-color: rgb(255, 255, 255); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; max-width: 100%;\">Không chỉ đơn thuần là một chiếc áo lưu niệm, T Shirt Con Đường Không Tên được sản xuất từ chất liệu vải Triblend cao cấp, mang tới sự nhẹ nhàng, cực kỳ thoáng mát, giúp người mặc luôn cảm thấy thoải mái dù là đi làm, đi học hay chơi thể thao.</span></p>', 'tt4.jpg');

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
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
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
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
