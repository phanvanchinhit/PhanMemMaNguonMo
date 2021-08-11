-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2016 at 09:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`) VALUES
(1, 'admin', 'b4b892e5418149867c8d0b3592b813cd', 'nguyễn thành hậu');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name`, `parent_id`) VALUES
(1, 'Túi Xách', 0),
(2, 'Thời Trang Nam & Nữ', 0),
(3, 'Phụ Kiện & Mỹ Phẩm', 0),
(4, 'Mắt Kính', 0),
(5, 'Điện Thoại & LapTop', 0),
(6, 'Clutch 802', 1),
(7, 'Áo Thun', 2),
(8, 'Sửa Rửa Mặt', 3),
(9, 'Kính BiLu', 4),
(10, 'USB ', 5),
(11, 'Kính phượt', 4),
(12, 'Điện Thoại', 5),
(14, 'Hermes', 1),
(16, 'Prada', 1),
(17, 'Chanel', 1),
(18, 'Louis Vuitton', 1),
(19, 'Gucci', 1),
(20, 'Coach', 1),
(21, 'Son môi', 3),
(22, 'Nước Hoa', 3),
(23, 'Phấn Má Hồng', 3),
(24, 'Cọ Trang Điểm', 3),
(25, 'Sửa Tắm', 3),
(26, 'Tai Phone', 5),
(27, 'Tản Nhiệt', 5),
(28, 'Balo', 2),
(29, 'Giày Vans', 2),
(30, 'Hàng Quảng Châu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_transaction`, `id_product`, `qty`, `amount`, `data`, `status`) VALUES
(1, 1, 28, 1, '180000.0000', '', 0),
(2, 1, 20, 1, '190000.0000', '', 0),
(3, 1, 14, 1, '410000.0000', '', 0),
(4, 2, 26, 1, '270000.0000', '', 0),
(5, 2, 22, 3, '210000.0000', '', 0),
(6, 3, 28, 1, '180000.0000', '', 0),
(7, 3, 26, 1, '270000.0000', '', 0),
(8, 4, 28, 1, '180000.0000', '', 0),
(9, 4, 11, 1, '314000.0000', '', 0),
(10, 5, 27, 1, '300000.0000', '', 0),
(11, 6, 28, 1, '180000.0000', '', 0),
(12, 7, 23, 1, '85000.0000', '', 0),
(13, 7, 26, 1, '270000.0000', '', 0),
(14, 8, 27, 1, '300000.0000', '', 0),
(15, 9, 21, 1, '90000.0000', '', 0),
(16, 10, 20, 1, '190000.0000', '', 0),
(17, 10, 19, 1, '320000.0000', '', 0),
(18, 11, 28, 1, '180000.0000', '', 0),
(19, 12, 27, 1, '300000.0000', '', 0),
(20, 13, 27, 1, '300000.0000', '', 0),
(21, 14, 28, 1, '180000.0000', '', 0),
(22, 15, 28, 1, '180000.0000', '', 0),
(23, 16, 28, 1, '180000.0000', '', 0),
(24, 17, 27, 1, '300000.0000', '', 0),
(25, 18, 28, 1, '180000.0000', '', 0),
(26, 19, 28, 1, '180000.0000', '', 0),
(27, 20, 27, 1, '300000.0000', '', 0),
(28, 21, 27, 1, '300000.0000', '', 0),
(29, 22, 28, 1, '180000.0000', '', 0),
(30, 23, 28, 1, '180000.0000', '', 0),
(31, 24, 28, 1, '180000.0000', '', 0),
(32, 25, 28, 1, '180000.0000', '', 0),
(33, 26, 28, 1, '180000.0000', '', 0),
(34, 27, 28, 1, '180000.0000', '', 0),
(35, 28, 28, 1, '180000.0000', '', 0),
(36, 29, 27, 1, '300000.0000', '', 0),
(37, 30, 28, 1, '180000.0000', '', 0),
(38, 31, 28, 1, '180000.0000', '', 0),
(39, 32, 28, 1, '180000.0000', '', 0),
(40, 33, 27, 1, '300000.0000', '', 0),
(41, 34, 28, 1, '180000.0000', '', 0),
(42, 35, 28, 2, '360000.0000', '', 0),
(43, 35, 23, 1, '85000.0000', '', 0),
(44, 36, 28, 1, '180000.0000', '', 0),
(45, 37, 28, 1, '180000.0000', '', 0),
(46, 38, 28, 1, '180000.0000', '', 0),
(47, 39, 28, 1, '180000.0000', '', 0),
(48, 40, 28, 1, '180000.0000', '', 0),
(49, 41, 28, 1, '180000.0000', '', 0),
(50, 42, 26, 1, '270000.0000', '', 0),
(51, 43, 28, 1, '180000.0000', '', 0),
(52, 44, 26, 1, '270000.0000', '', 0),
(53, 45, 26, 12, '3240000.0000', '', 0),
(54, 44, 28, 2, '360000.0000', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `name_catalog` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `view` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_catalog`, `name_catalog`, `name`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `meta_key`, `site_title`, `warranty`, `total`, `buyed`, `rate_total`, `rate_count`, `gifts`, `meta_desc`) VALUES
(11, 17, 'Chanel', 'Chanel classic F1', '315000.0000', '<p>\r\n	sadsad</p>\r\n', 1000, 'tui_xach.jpg', '["13614980_298867220462662_7145359368991707893_n.jpg","13615420_298867270462657_6842337585805229283_n.jpg","13619925_298867253795992_3631405696801658292_n.jpg"]', '2016-07-09', 10, '', '', '2 thang', 0, 0, 0, 0, '', ''),
(13, 30, 'Hàng Quảng Châu', 'LV tua rua', '310000.0000', '<p>\r\n	LV tua rua</p>\r\n', 0, '13599830_299090640440320_6496556368805815886_n.jpg', '["13599991_299090647106986_7179268951218761191_n.jpg","13606862_299090673773650_7320035087091427003_n.jpg","13631573_299090683773649_8243380948476688954_n.jpg"]', '2016-07-09', 20, '', '', '2 tuan', 0, 0, 0, 0, '', ''),
(14, 14, 'Hermes', 'Hermes birkin sp', '410000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Hermes birkin sp</span></p>\r\n', 0, '13615181_299115950437789_1504856732614196552_n.jpg', '["13615385_299116040437780_8391977453206660277_n.jpg","13620017_299116003771117_1297039682149352364_n.jpg","13627070_299115977104453_5448456580397929957_n.jpg"]', '2016-07-09', 30, '', '', '1 tuan', 0, 0, 0, 0, '', ''),
(15, 6, 'Clutch 802', 'Clutch đinh', '290000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Clutch đinh</span></p>\r\n', 0, '13557676_299089713773746_2507892125045042132_n.jpg', '["13590386_299089760440408_3391886600509733991_n.jpg","13654336_299089727107078_6481126660454574794_n.jpg"]', '2016-07-09', 22, '', '', '1 tuan', 0, 0, 0, 0, '', ''),
(16, 28, 'Balo', 'Balo', '320000.0000', '<p>\r\n	Balo</p>\r\n', 0, '13619902_298665540482830_8918037663224419882_n.jpg', '["13620388_298665560482828_1851988972810371015_n.jpg","13620722_298665617149489_4734176029892801441_n.jpg"]', '2016-07-09', 33, '', '', '2 tuần', 0, 0, 0, 0, '', ''),
(17, 6, 'Clutch 802', 'Clutch 802 size 24', '280000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Clutch 802 size 24</span></p>\r\n', 0, '13438928_298603500489034_5457089791188914833_n.jpg', '["13606465_298603477155703_3059456594083059953_n.jpg","13606747_298603520489032_6474200844494580468_n.jpg","13627120_298603460489038_6973549491376476769_n.jpg"]', '2016-07-09', 50, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(18, 19, 'Gucci', 'Túi gucci', '190000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">T&uacute;i gucci</span></p>\r\n', 0, '13466489_290040671345317_7753309319988685596_n.jpg', '[]', '2016-07-09', 90, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(19, 6, 'Clutch 802', 'Clutch Cầm Tay', '320000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">clutch&nbsp;</span></p>\r\n', 0, '13567298_298570177159033_6552233824450347422_n.jpg', '["13590513_298570180492366_2492956343426419367_n.jpg","13592408_298570147159036_8685869898076639971_n.jpg","13645307_298570100492374_1223246558300991758_n.jpg"]', '2016-07-09', 60, 'tui,  xach, nu', 'Túi xách nữ | Clutch Cầm Tay giá rẻ tại đà nẵng', '2 tuần', 0, 0, 0, 0, '', ''),
(20, 17, 'Chanel', 'Chanel katun F1 full box', '190000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Chanel katun F1 full box</span></p>\r\n', 0, '13600266_298174893865228_3513220343463710447_n.jpg', '["13567209_298174860531898_7615003385079743382_n.jpg","13590432_298174873865230_8528988660007920678_n.jpg","13619795_298174837198567_6246125812867267035_n.jpg"]', '2016-07-09', 70, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(21, 23, 'Phấn Má Hồng', 'Phấn mắt Sivanna Thái Lan', '100000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Phấn mắt Sivanna Th&aacute;i Lan</span></p>\r\n', 10000, '13600364_290802907977115_8211585694149140613_n.jpg', '["13620924_290802884643784_2615715308299908547_n.jpg","13627215_290802924643780_7695910339187221835_n.jpg","13645166_290802944643778_1461184177608036818_n.jpg"]', '2016-07-09', 80, '', '', '2 tuần', 0, 0, 0, 0, '', ''),
(22, 25, 'Sửa Tắm', 'Sữa tắm Aloe Ha', '70000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">Sữa tắm Aloe Ha</span></p>\r\n', 0, '13567285_290801947977211_39567870285877944_n.jpg', '[]', '2016-07-09', 55, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(23, 25, 'Sửa Tắm', 'Magic Baby', '90000.0000', '<p>\r\n	Magic Baby</p>\r\n', 5000, '13592401_290802021310537_6977690982614048850_n.jpg', '[]', '2016-07-09', 23, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(24, 8, 'Sửa Rửa Mặt', 'READY 2 WHITE MILKY WHITE', '60000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 19.32px;">READY 2 WHITE MILKY WHITE</span></p>\r\n', 0, '13612103_290664661324273_2836539995969428316_n.jpg', '[]', '2016-07-09', 92, '', '', '1 tháng', 0, 0, 0, 0, '', ''),
(25, 25, 'Sửa Tắm', 'Sữa tắm Shena', '90000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 18px;">Sữa tắm Shena</span></p>\r\n', 0, '13606474_289030954820977_7711196167287114349_n.jpg', '[]', '2016-07-09', 66, '', '', '1 tuần', 0, 0, 0, 0, '', ''),
(26, 28, 'Balo', 'Balo Chiếc Lá', '280000.0000', '<p>\r\n	<span style="color: rgb(29, 33, 41); font-family: Arial; font-size: 14px; line-height: 18px;">Balo Chiếc L&aacute;</span></p>\r\n', 10000, '13592711_287170001673739_7637902183671685761_n.jpg', '["13599889_287169968340409_1943356769194407325_n.jpg"]', '2016-07-09', 55, '', '', '2 tuần', 0, 0, 0, 0, '', ''),
(27, 11, 'Kính phượt', 'Kính Porsche Design 8632', '320000.0000', '<h1 class="product_title entry-title" itemprop="name" style="font-family: Arial; box-sizing: border-box; margin: 0px 0px 10px; font-size: 20px; font-weight: 500; line-height: 1.1; clear: none; padding: 0px; background-color: rgb(252, 252, 252);">\r\n	K&iacute;nh Porsche Design 8632</h1>\r\n', 20000, '13063357_841673445966647_8681064950386424491_o-462x392.jpg', '[]', '2016-07-09', 44, '', '', '2 tháng', 0, 0, 0, 0, '', ''),
(28, 20, 'Coach', 'Chanel Da Hồng Nhạt', '190000.0000', '<p>\r\n	channal t&uacute;i hồng</p>\r\n', 10000, '13615164_301084113574306_6125822305132471482_n.jpg', '["13626504_301084130240971_5216208883844769367_n.jpg","13631453_301084183574299_5910913077681429500_n.jpg","13686504_301084150240969_5957793359577683372_n.jpg"]', '2016-07-13', 0, 'tui, xach, nam, nu, da, nang', 'Túi xách nữ, Chanel Da Hồng Nhạt , tại đà nẵng,', '2 tuần', 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `security` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `type`, `status`, `id_user`, `name`, `email`, `phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`) VALUES
(1, 0, 0, 1, 'Nguyễn Thành Hậu', 'sohuyn1996@gmail.com', '01674717919', 780000, 'offline', '', '                       gui hang cho toi vao ngay mai     ', '', '2016-07-19'),
(2, 0, 0, 0, 'nguyen thanh hau', 'sohuyn1996@gmail.com', '01674717919', 480000, 'offline', '', 'thanh toan khi nhan hang                            ', '', '2016-07-21'),
(3, 0, 1, 0, 'nguyen thanh hau', 'sohuyn1996@gmail.com', '01674717919', 450000, 'baokim', '', 'abc                            ', '', '2016-07-21'),
(4, 0, 0, 0, 'nguyen thanh hau', 'sohuyn1996@gmail.com', '01674717919', 494000, 'baokim', '', 'abc                            ', '', '2016-07-21'),
(5, 0, 1, 0, 'Nguyễn Thành Hậu1', 'sohuyn1996@gmail.com', '01674717919', 300000, 'baokim', '', 'aabc                            ', '', '2016-07-21'),
(7, 0, 1, 0, 'nguyen thanh hau', 'sohuyn1996@gmail.com', '01674717919', 355000, 'baokim', '', '          asdad                  ', '', '2016-07-21'),
(8, 0, 0, 1, 'Nguyễn Thành Hậu', 'sohuyn1996@gmail.com', '01674717919', 300000, 'baokim', '', '            sad                ', '', '2016-07-21'),
(9, 0, 0, 1, 'Nguyễn Thành Hậu', 'sohuyn1996@gmail.com', '01674717919', 90000, 'baokim', '', '          sds                  ', '', '2016-07-21'),
(10, 0, 1, 0, 'hoang van tuyen', 'meo@gmail.com', '01674717919', 510000, 'baokim', '', 'sadsadasd                            ', '', '2016-07-30'),
(11, 0, 0, 0, 'hoang van tuyen', 'sohuyn1996@gmail.com', '098097', 180000, 'baokim', '', 'ssadasd                            ', '', '2016-07-30'),
(12, 0, 2, 0, 'nguyen thanh hau', 'sohuyns1996@gmail.com', '1674717919', 300000, 'baokim', '', '             asdsad               ', '', '2016-07-30'),
(13, 0, 0, 0, 'hoang van tuyen', 'sohuyn1996@gmail.com', 'sad', 300000, 'baokim', '', '        sadsad                    ', '', '2016-07-30'),
(14, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '   sadsadsad                         ', '', '2016-07-30'),
(16, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '                    asdsad        ', '', '2016-07-30'),
(26, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '           sadsad                 ', '', '2016-07-30'),
(27, 0, 1, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '     asdasd                       ', '', '2016-07-30'),
(28, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '         sadsad                   ', '', '2016-07-30'),
(29, 0, 1, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 300000, 'baokim', '', '              adsdsa              ', '', '2016-07-30'),
(30, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '                    sadsad        ', '', '2016-07-30'),
(31, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '               sadsad             ', '', '2016-07-30'),
(32, 0, 1, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '               asdsad             ', '', '2016-07-30'),
(33, 0, 2, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 300000, 'baokim', '', '                         sadsad   ', '', '2016-07-30'),
(34, 0, 1, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '               asdsad             ', '', '2016-07-30'),
(35, 0, 1, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 445000, 'baokim', '', '        sadsadsad                    ', '', '2016-07-30'),
(36, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '                sadasd            ', '', '2016-07-30'),
(40, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '                        sadsad    ', '', '2016-07-30'),
(41, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '     sadsad                       ', '', '2016-07-30'),
(42, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 270000, 'baokim', '', '             sadsad              ', '', '2016-07-30'),
(43, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 180000, 'baokim', '', '                 sadsad           ', '', '2016-07-30'),
(44, 0, 0, 9, 'hoang van tuyen', 'tuyen@gmail.com', '01674717919', 360000, 'baokim', '', '          ádsad                  ', '', '2016-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `phone`, `adress`, `created`) VALUES
(1, 'Nguyễn Thành Hậu', 'sohuyn1996@gmail.com', 'b4b892e5418149867c8d0b3592b813cd', '01674717919', '78 vo nhu hung', 0),
(9, 'hoang van tuyen', 'tuyen@gmail.com', 'b4b892e5418149867c8d0b3592b813cd', '01674717919', '69 vo nhu hung', 0),
(10, 'nguyen thanh phuong', 'phuong@gmail.com', 'b4b892e5418149867c8d0b3592b813cd', '01674717919', 'lao bao', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
