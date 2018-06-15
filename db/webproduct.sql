-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2016 at 03:42 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_group_id` int(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `admin_group_id`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 'Hoàng văn Tuyền', 1),
(7, 'admincp', '96e79218965eb72c92a549dd5a330112', 'Mod', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_group`
--

CREATE TABLE IF NOT EXISTS `admin_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_group`
--

INSERT INTO `admin_group` (`id`, `name`, `sort_order`, `permissions`) VALUES
(1, 'Admin', 1, 0x613a31343a7b733a343a227472616e223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a31333a2270726f647563745f6f72646572223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a333a22636174223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a2270726f64756374223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a31313a2261646d696e5f67726f7570223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a353a2261646d696e223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a343a2275736572223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a343a226e657773223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a343a22696e666f223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22737570706f7274223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22636f6e74616374223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22636f6d6d656e74223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a353a22736c696465223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a353a22766964656f223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d7d),
(2, 'Mod', 2, 0x613a393a7b733a333a22636174223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a2270726f64756374223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a343a226e657773223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a343a22696e666f223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22737570706f7274223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22636f6e74616374223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a373a22636f6d6d656e74223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a353a22736c696465223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d733a353a22766964656f223b613a323a7b693a303b733a343a226c697374223b693a313b733a363a226368616e6765223b7d7d);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `site_title`, `meta_desc`, `meta_key`, `parent_id`, `sort_order`) VALUES
(1, 'Laptop', '', '', '', 0, 0),
(2, 'Điện thoại', '', '', '', 0, 1),
(3, 'Tivi', '', '', '', 0, 2),
(4, ' Acer', '', '', '', 1, 0),
(5, ' Apple', '', '', '', 1, 1),
(6, 'Asus', '', '', '', 1, 2),
(7, 'Dell', '', '', '', 1, 3),
(8, 'HP', '', '', '', 1, 5),
(9, 'Apple', '', '', '', 2, 0),
(10, 'Asus', '', '', '', 2, 1),
(11, 'BlackBerry', '', '', '', 2, 3),
(12, 'HTC', '', '', '', 2, 4),
(13, 'AKAI', '', '', '', 3, 0),
(14, 'JVC', '', '', '', 3, 1),
(15, 'LG', '', '', '', 3, 2),
(16, 'Panasonic', '', '', '', 3, 3),
(17, 'Samsung', '', '', '', 3, 5),
(18, 'Toshiba', '', '', '', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `count_like` int(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `product_id`, `parent_id`, `user_name`, `user_email`, `user_id`, `user_ip`, `content`, `created`, `count_like`, `status`) VALUES
(1, 7, 0, 'Hoang van tuyen', 'hoangvantuyencnt@gmail.com', 0, '', 'San pham noi con khong admin?                    ', 1408798677, 10, 1),
(2, 7, 1, 'Vu van Anh', 'anh@gmail.com', 0, '', 'San pham nay van con hang', 1408799662, 3, 1),
(3, 7, 0, 'abc', 'hoang@gmail.com', 0, '', 'Test comment             ', 1408800324, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_static`
--

CREATE TABLE IF NOT EXISTS `content_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '',
  `content` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`,`key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Dumping data for table `content_static`
--

INSERT INTO `content_static` (`id`, `key`, `content`) VALUES
(3, 'footer', 0x3c7020636c6173733d22626f6c64223e0d0a2026636f70793b32303133202d323031342042e1baa36e20717579e1bb816e20746875e1bb99632076e1bb81266e6273703b203c7374726f6e673e43266f636972633b6e6720747920544e4848205475e1baa56e2054686f61206d6564696120266e646173683b20c490e1baa169206c267961637574653b20565443204469676974616c3c2f7374726f6e673e3c2f703e0d0a3c703e0d0a204cc4a96e682076e1bbb16320686fe1baa17420c491e1bb996e672063e1bba7612063266f636972633b6e672074793a20c49069e1bb876e2026616d703b20c49169e1bb876e2074e1bbad202c2062266161637574653b6e206ce1babb2026616d703b2062266161637574653b6e206275266f636972633b6e3c2f703e0d0a3c703e0d0a203c7374726f6e673e43c6a12073e1bb9f20313a3c2f7374726f6e673e3a2043e1baa96d204c612c2058266174696c64653b205468616e682053c6a16e2c20487579e1bb876e204b69e1babf6e205468e1bba5792c205468266167726176653b6e68205068e1bb912048e1baa369205068266f67726176653b6e67202d2044543a20303331333838313530353c2f703e0d0a3c703e0d0a203c7374726f6e673e43c6a12073e1bb9f20323a3c2f7374726f6e673e3a2043e1baa96d2058752661636972633b6e2c204e267561637574653b6920c490e1bb91692c20487579e1bb876e204b69e1babf6e205468e1bba5792c205468266167726176653b6e68205068e1bb912048e1baa369205068266f67726176653b6e67202d2044543a20303331333831323638323c2f703e0d0a),
(18, 'shipping', 0x3c703e0d0a20436869207068266961637574653b2076e1baad6e2063687579e1bb836e2063e1bba761205475e1baa56e2054686f61204d656469613c2f703e0d0a);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `content`, `meta_desc`, `meta_key`, `created`) VALUES
(1, 'Giới thiệu', '<p>\r\n	Giới thiệu</p>\r\n', '', '', 1409044792),
(2, 'Hướng dẫn mua hàng', '<p>\r\n	Hướng dẫn mua h&agrave;ng</p>\r\n', '', '', 1409044950);

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

CREATE TABLE IF NOT EXISTS `maker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(255) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `feature` enum('0','1') COLLATE utf8_bin NOT NULL,
  `count_view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `meta_desc`, `meta_key`, `image_link`, `created`, `feature`, `count_view`) VALUES
(1, 'Nhà lầu siêu xe hàng mã ế sưng, đồ chơi biển đảo hút khách', '(Dân trí) - Loạt đồ chơi trung thu biển đảo hướng về quê hương mới xuất hiện nhưng đã hút khách, các mặt hàng vàng mã “xa xỉ” không còn được nhiều người mua sắm.', '<p style="TEXT-ALIGN: left">\r\n	Theo b&aacute;c Lan, một chủ cửa h&agrave;ng ở phố H&agrave;ng M&atilde; chia sẻ: &ldquo;Kinh tế kh&oacute; khăn n&ecirc;n người bỏ tiền triệu ra mua đồ c&uacute;ng đắt tiền như nh&agrave; lầu, xe hơi, điện thoại, ti vi c&ograve;n rất &iacute;t. Mọi người chỉ lựa chọn những loại đồ c&oacute; gi&aacute; b&igrave;nh d&acirc;n như quần &aacute;o, gi&agrave;y d&eacute;p v&agrave; mũ để c&uacute;ng. Những mặt h&agrave;ng b&aacute;n chạy nhất l&agrave; tiền &acirc;m phủ, v&agrave;ng, quần &aacute;o hay gi&agrave;y d&eacute;p v&igrave; c&oacute; gi&aacute; kh&aacute; b&igrave;nh d&acirc;n&rdquo;.</p>\r\n<p style="TEXT-ALIGN: center">\r\n	<img alt="Mặt hàng đèn lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay" src="http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n1-242e1.jpg" /><br />\r\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Mặt h&agrave;ng đ&egrave;n lồng biển đảo mới xuất hiện trong dịp Tết Trung Thu năm nay</span></p>\r\n<p style="TEXT-ALIGN: center">\r\n	<span style="FONT-FAMILY: Tahoma"><img alt="Các thông điệp ý nghĩa yêu quê hương, biển đảo được in lên đèn lồng" src="http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n2-242e1.jpg" /></span><br />\r\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">C&aacute;c th&ocirc;ng điệp &yacute; nghĩa y&ecirc;u qu&ecirc; hương, biển đảo được in l&ecirc;n đ&egrave;n lồng</span></p>\r\n<p>\r\n	Một mặt h&agrave;ng đặc biệt của m&ugrave;a Vu Lan năm nay đ&oacute; l&agrave; loại đồ chơi &ldquo;biển đảo&rdquo;. Đ&oacute; l&agrave; những chiếc đ&egrave;n lồng được in những th&ocirc;ng điệp hướng về qu&ecirc; hương, biển đảo hết sức &yacute; nghĩa.</p>\r\n<div class="article-side-rail" id="article-side-rail">\r\n	<div class="article-video-relation">\r\n		<div class="relative">\r\n			<img alt="Mùa Vu Lan: " class="thumb" src="http://video-thumbs.vcmedia.vn///dantri/7iS0Ym1SbbOoTsWhJi6Q/2014/08/08/vangma-15e63.jpg" /><img class="ico" src="http://dantri3.vcmedia.vn/App_Themes/Default/Images/ico_video_play.png" /></div>\r\n		<p class="caption">\r\n			M&ugrave;a Vu Lan: &quot;Xe si&ecirc;u sang&quot; đỗ chật phố H&agrave;ng M&atilde;</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	C&aacute;c chủ cửa h&agrave;ng tại đ&acirc;y cho biết, c&aacute;c loại mặt h&agrave;ng l&agrave;m thủ c&ocirc;ng truyền thống đ&egrave;n lồng, đầu l&acirc;n, đ&egrave;n &ocirc;ng sao vẫn được kh&aacute;ch h&agrave;ng ưa chuộng nhất. Ngo&agrave;i ra, mẫu đ&egrave;n lồng in sẵn mang th&ocirc;ng điệp hướng về biển đảo qu&ecirc; hương được nhiều bậc phụ huynh v&agrave; c&aacute;c em học sinh đặc biệt y&ecirc;u th&iacute;ch.</p>\r\n<p style="TEXT-ALIGN: center">\r\n	<img alt="Mới xuất hiện nhưng những chiếc đèn lồng này được nhiều phụ huynh và các em nhỏ lựa chọn" src="http://dantri4.vcmedia.vn/Urgz3f5tKFdDA0VUUO/Image/2014/08/n4-242e1.jpg" /><br />\r\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Mới xuất hiện nhưng những chiếc đ&egrave;n lồng n&agrave;y được nhiều phụ huynh v&agrave; c&aacute;c em nhỏ lựa chọn</span><br />\r\n	&nbsp;</p>\r\n<p>\r\n	Chiếc đ&egrave;n lồng mang th&ocirc;ng điệp biển đảo được gh&eacute;p lại bằng 3 mảnh b&igrave;a kh&aacute;c nhau. Chiếc đ&egrave;n c&oacute; thể thắp s&aacute;ng v&agrave; ph&aacute;t nhạc khi được lắp pin ở tay cầm.Tuy nhi&ecirc;n, chi tiết đ&aacute;ng ch&uacute; &yacute; nhất đ&oacute; l&agrave; những th&ocirc;ng điệp hướng về biển đảo in tr&ecirc;n th&acirc;n của chiếc đ&egrave;n lồng như &ldquo;Em y&ecirc;u biển đảo qu&ecirc; hương&rdquo;, &ldquo;B&eacute; hướng về biển đảo&rdquo;, &ldquo;Em y&ecirc;u biển đảo Việt Nam&rdquo;, &ldquo;Em y&ecirc;u ch&uacute; bộ đội hải qu&acirc;n Việt Nam&rdquo;, với những h&igrave;nh ảnh chiến sĩ Hải qu&acirc;n Việt Nam s&uacute;ng kho&aacute;c tr&ecirc;n vai bảo vệ chủ quyền biển đảo Tổ quốc hay những chiếc t&agrave;u mang d&ograve;ng chữ Cảnh s&aacute;t biển Việt Nam&hellip;</p>\r\n', '', '', 'n1-242e1.jpg', 1407553602, '0', 5),
(2, 'Arsenal đồng ý bán Vermaelen cho Barcelona', '(Dân trí) - Theo những thông tin từ báo giới Anh, Arsenal đã quyết định từ chối MU, để bán trung vệ Vermarlen cho Barcelona. Mức giá của trung vệ này vào khoảng 15 triệu bảng.', '<p>\r\n	Như đ&atilde; biết, c&aacute;ch đ&acirc;y v&agrave;i ng&agrave;y, trung vệ Vermaelen đ&atilde; từ chối gia hạn hợp đồng với Arsenal. Điều đ&oacute; khiến cho CLB th&agrave;nh London t&igrave;m c&aacute;ch b&aacute;n cầu thủ n&agrave;y bằng mọi gi&aacute; để &ldquo;gỡ gạc&rdquo; ch&uacute;t &iacute;t ph&iacute; chuyển nhượng thay v&igrave; mất trắng cầu thủ n&agrave;y&nbsp;ở m&ugrave;a H&egrave; sang năm.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt"><img _fl="" align="middle" alt="Vermaelen ở rất gần Barcelona" src="http://dantri4.vcmedia.vn/uajiKupQ6reCuKKDlVlG/Image/2014/08/Vermaelen-d4361.jpg" style="MARGIN: 5px" width="450" /><br />\r\n	Vermaelen ở rất gần Barcelona</span><br />\r\n	&nbsp;</div>\r\n<p>\r\n	Trong thời gian gần đ&acirc;y, MU v&agrave; Barcelona l&agrave; hai ứng cử vi&ecirc;n s&aacute;ng gi&aacute; trong cuộc đua gi&agrave;nh chữ k&yacute; của hậu vệ người Bỉ. Cuối c&ugrave;ng, HLV Wenger đ&atilde; quyết định từ chối MU để b&aacute;n Vermarlen cho Barcelona. Trước đ&oacute; c&oacute; th&ocirc;ng tin cho rằng Wenger muốn đổi Vermaelen lấy Smalling, tuy nhi&ecirc;n Van Gaal lại từ chối phương &aacute;n n&agrave;y.</p>\r\n<p>\r\n	Trước b&aacute;o giới, HLV Wenger cho biết: &ldquo;Ch&uacute;ng t&ocirc;i đ&atilde; nhận được những lời đề nghị từ nước ngo&agrave;i v&agrave; quyết định để Vermaelen rời khỏi Premier League. Bản th&acirc;n Arsenal cũng đang ở trong thế kh&oacute; trong vụ n&agrave;y&rdquo;.</p>\r\n<p>\r\n	Theo tờ BBC, Arsenal đ&atilde; đồng &yacute; lời đề nghị trị gi&aacute; 15 triệu bảng của Barcelona. Trong thời gian tới, trung vệ người Bỉ sẽ được quyền tự do đ&agrave;m ph&aacute;n với đội b&oacute;ng xứ Catalan.</p>\r\n<p>\r\n	Nhiều khả năng thương vụ n&agrave;y sẽ ho&agrave;n tất trong thời gian tới. Arsenal cũng bắt đầu t&igrave;m người thay thế Vermaelen. L&uacute;c n&agrave;y, ưu ti&ecirc;n số 1 của HLV Wenger l&agrave; trung vệ Nastasic của Man City, người nhiều khả năng sẽ mất vị tr&iacute; nếu như Mangala gia nhập Etihad.</p>\r\n<p align="right">\r\n	<b>H.Long</b></p>\r\n', '', '', 'Vermaelen-d4361.jpg', 1407553674, '0', 2),
(3, 'Hà Nội: CSGT tìm người thân giúp cháu bé 8 tuổi đi lạc', '(Dân trí) - Theo người thân cháu Chi, trong lúc gia đình nghỉ trưa, cháu Chi mải chơi đã đi lạc từ phía phường Ngọc Lâm (quận Long Biên) sang nội thành. Trong lúc đang hoang mang tìm cháu, gia đình nhận được tin báo của lực lượng cảnh sát giao thông.', '<p>\r\n	Khoảng 15h30 ng&agrave;y 8/8, khi đang l&agrave;m nhiệm vụ tại chốt ph&iacute;a nam cầu Chương Dương (địa b&agrave;n quận Ho&agrave;n Kiếm, H&agrave; Nội), Thượng sĩ Phạm Gia Hợp v&agrave; Thượng t&aacute; L&ecirc; Đức Đo&agrave;n(Đội CSGT số 1) ph&aacute;t hiện một ch&aacute;u b&eacute; khoảng 7-8 tuổi đi bộ tr&ecirc;n khu vực cầu Chương Dương với vẻ mặt sợ sệt. Khi Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đ&ograve;an tiến lại hỏi han, ch&aacute;u b&eacute; c&oacute; biểu hiện sợ sệt v&agrave; bật kh&oacute;c n&oacute;i rằng đi lạc đường.</p>\r\n<p>\r\n	Thấy ch&aacute;u b&eacute; lả đi v&igrave; mệt, Thượng sĩ Hợp đ&atilde; đưa ch&aacute;u về chốt trực, mua b&aacute;nh v&agrave; sữa để ch&aacute;u ăn đỡ đ&oacute;i v&agrave; trấn tĩnh lại. Đồng thời, Thượng sĩ Hợp th&ocirc;ng b&aacute;o tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng về đặc điểm nhận dạng của ch&aacute;u b&eacute;.</p>\r\n<p>\r\n	<img alt="Cháu Chi đoàn tụ với gia đình." src="http://dantri4.vcmedia.vn/xFKfMbJ7RTXgah5W1cc/Image/2014/08/455-549e4.jpg" /><br />\r\n	Ch&aacute;u Chi đo&agrave;n tụ với gia đ&igrave;nh.</p>\r\n<p>\r\n	Sau khi trấn tĩnh lại, ch&aacute;u b&eacute; cho biết t&ecirc;n l&agrave; Vương Kim Chi (SN 2007), năm nay l&ecirc;n lớp 2 trường tiểu học &Aacute;i Mộ, quận Long Bi&ecirc;n, H&agrave; Nội. Bằng c&aacute;c biện ph&aacute;p nghiệp vụ, Thượng sĩ Hợp v&agrave; Thượng t&aacute; Đo&agrave;n đ&atilde; li&ecirc;n hệ được với c&ocirc; gi&aacute;o chủ nhiệm ch&aacute;u Chi để th&ocirc;ng b&aacute;o với gia đ&igrave;nh ch&aacute;u b&eacute; biết.</p>\r\n<p>\r\n	Gần 2 tiếng đồng hồ sau, mẹ ch&aacute;u Chi l&agrave; chị Đo&agrave;n Thị Khuyến (SN 1983, ở Ngọc L&acirc;m, Long Bi&ecirc;n, H&agrave; Nội) đ&atilde; t&igrave;m đến trụ sở Đội CSGT số 1 nhận lại con. Chị Khuyến cho cho biết, khoảng 14h c&ugrave;ng ng&agrave;y, trong l&uacute;c gia đ&igrave;nh nghỉ trưa, ch&aacute;u Chi mải chơi đ&atilde; đi lạc từ b&ecirc;n n&agrave;y cầu sang b&ecirc;n kia nội th&agrave;nh.</p>\r\n<p>\r\n	Trong l&uacute;c hoang mang kh&ocirc;ng biết t&igrave;m ch&aacute;u ở đ&acirc;u, gia đ&igrave;nh được th&ocirc;ng b&aacute;o ch&aacute;u Chi đ&atilde; được c&aacute;c chiến sĩ CSGT tận t&igrave;nh gi&uacute;p đỡ. Thay mặt gia đ&igrave;nh, chị Khuyến đ&atilde; viết thư cảm ơn c&aacute;c chiến sĩ cảnh s&aacute;t giao th&ocirc;ng.</p>\r\n<p>\r\n	<strong>Tiến Nguy&ecirc;n</strong></p>\r\n', '', '', '455-549e4.jpg', 1407553969, '0', 9),
(4, 'Mỹ tăng cường không kích Iraq', '(Dân trí) - Sau khi Tổng thống Obama phê chuẩn cho không kích các mục tiêu của nhóm phiến quân Hồi giáo IS ở miền bắc Iraq, Lầu Năm Góc đã tiến hành 3 đợt không kích.', '<p>\r\n	C&aacute;c vụ kh&ocirc;ng k&iacute;ch nhằm v&agrave;o nh&oacute;m Nh&agrave; nước Hồi gi&aacute;o (IS) ở miền bắc Iraq l&agrave; những cuộc tấn c&ocirc;ng đầu ti&ecirc;n kể từ khi Mỹ trực tiếp tham gia v&agrave;o hoạt động qu&acirc;n sự ở Iraq v&agrave; sau đ&oacute; r&uacute;t qu&acirc;n v&agrave;o cuối năm 2011.</p>\r\n<p>\r\n	Trong cuộc kh&ocirc;ng k&iacute;ch đầu ti&ecirc;n v&agrave;o ng&agrave;y thứ s&aacute;u, m&aacute;y bay kh&ocirc;ng người l&aacute;i c&ugrave;ng chiến đấu cơ hải qu&acirc;n Mỹ đ&atilde; nhắm v&agrave;o c&aacute;c mục ti&ecirc;u gần th&agrave;nh phố Irbil của người Kurd. Sau đ&oacute; họ tiến h&agrave;nh th&ecirc;m 2 đợt tấn c&ocirc;ng nữa.</p>\r\n<p>\r\n	Nh&oacute;m Hồi gi&aacute;o người Sunni IS đ&atilde; chiếm quyền kiểm so&aacute;t nhiều khu vực của Iraq v&agrave; cả Syria.</p>\r\n<p>\r\n	H&agrave;ng chục ng&agrave;n người thuộc c&aacute;c nh&oacute;m d&acirc;n tộc thiểu số đ&atilde; phải rời bỏ nh&agrave; cửa khi phiến qu&acirc;n tiến v&agrave;o.</p>\r\n<p>\r\n	Nh&oacute;m IS hay c&ograve;n được gọi l&agrave; ISIS cũng đ&atilde; chiếm đập lớn nhất Iraq.</p>\r\n<p>\r\n	Lầu Năm G&oacute;c cho biết trong đợt kh&ocirc;ng k&iacute;ch thứ hai, m&aacute;y bay kh&ocirc;ng người l&aacute;i của Mỹ đ&atilde; ph&aacute; hủy một vị tr&iacute; đặt ph&aacute;o của phiến qu&acirc;n v&agrave; ti&ecirc;u diệt một nh&oacute;m phiến qu&acirc;n.</p>\r\n<p>\r\n	Chỉ hơn một tiếng sau, chiến đấu cơ F/A-18 đ&atilde; d&ugrave;ng bom c&oacute; laser dẫn đường bắn tr&uacute;ng một đo&agrave;n 7 xe của IS.</p>\r\n<p>\r\n	Trước đ&oacute;, v&agrave;o ng&agrave;y thứ s&aacute;u, 2 quả bom đ&atilde; được thả xuống một khẩu ph&aacute;o của IS d&ugrave;ng để chống lại lực lượng đang bảo vệ Irbil, thủ phủ của v&ugrave;ng tự trị của người Kurd.</p>\r\n<p>\r\n	Ph&aacute;t ng&ocirc;n vi&ecirc;n Bộ Ngoại giao Mỹ Marie Harf cho biết mục ti&ecirc;u trước mắt của c&aacute;c cuộc kh&ocirc;ng k&iacute;ch l&agrave; &ldquo;ngăn chặn bước tiến&rdquo; của IS về Irbil.</p>\r\n<p>\r\n	&ldquo;Sau đ&oacute; về l&acirc;u d&agrave;i chung t&ocirc;i muốn phối hợp hỗ trợ th&ecirc;m thời gian v&agrave; kh&ocirc;ng gian cho c&aacute;c lực lượng của người Kurd để xốc lại lực lượng, chiến đấu với đe dọa của ch&iacute;nh họ&rdquo;.</p>\r\n<p>\r\n	B&agrave; cũng khẳng định &ldquo;kh&ocirc;ng c&oacute; giải ph&aacute;p qu&acirc;n sự l&acirc;u d&agrave;i của Mỹ ở đ&oacute;&rdquo;.</p>\r\n<p>\r\n	Mặc d&ugrave; ch&iacute;nh phủ Iraq v&agrave; V&ugrave;ng người Kurd vẫn c&ograve;n đang c&oacute; bất đồng trong những th&aacute;ng qua, nhưng Thủ tướng Nouri Maliki đ&atilde; ph&aacute;i một m&aacute;y bay chở đạn tới Irbil v&agrave; thứ s&aacute;u. Trước đ&oacute; &ocirc;ng đ&atilde; lệnh cho lực lượng kh&ocirc;ng qu&acirc;n hỗ trợ cho c&aacute;c tay s&uacute;ng người Kurd để chiến đấu chống IS.</p>\r\n<p>\r\n	<b>Trung Anh</b></p>\r\n', '', '', '1-7d48c.jpg', 1407554007, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `data` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`transaction_id`, `id`, `product_id`, `qty`, `amount`, `data`, `status`) VALUES
(7, 6, 2, 1, 4000000.0000, '', 1),
(8, 7, 2, 1, 4000000.0000, '', 0),
(9, 8, 8, 1, 10000000.0000, '', 0),
(10, 9, 8, 1, 10000000.0000, '', 0),
(11, 10, 8, 1, 10000000.0000, '', 2),
(12, 11, 8, 1, 10000000.0000, '', 0),
(13, 12, 8, 2, 20000000.0000, '', 0),
(14, 13, 8, 1, 10000000.0000, '', 1),
(15, 14, 3, 1, 5000000.0000, '', 0),
(16, 15, 3, 1, 5000000.0000, '', 0),
(17, 16, 3, 1, 5000000.0000, '', 0),
(18, 17, 3, 1, 5000000.0000, '', 0),
(19, 18, 3, 1, 5000000.0000, '', 0),
(20, 19, 3, 1, 5000000.0000, '', 0),
(21, 20, 8, 1, 10000000.0000, '', 0),
(22, 21, 9, 1, 5400000.0000, '', 0),
(22, 22, 7, 2, 11600000.0000, '', 0),
(23, 23, 8, 1, 9500000.0000, '', 1),
(24, 24, 9, 1, 5400000.0000, '', 2),
(25, 25, 7, 1, 5800000.0000, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maker_id` int(255) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `feature` enum('0','1') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `maker_id`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `meta_key`, `site_title`, `warranty`, `total`, `buyed`, `rate_total`, `rate_count`, `gifts`, `video`, `meta_desc`, `feature`) VALUES
(2, 15, 'Tivi LG 4000', 0, 4000000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 200000, 'product2.jpg', '', 0, 6, '', '', '12 tháng', 0, 0, 9, 2, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(3, 13, 'Tivi Akai', 0, 5000000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product1.jpg', '', 0, 8, '', '', '12 tháng', 0, 0, 4, 1, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(4, 16, 'Tivi Panasonic', 0, 6000000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product3.jpg', '', 0, 4, '', '', '12 tháng', 0, 0, 12, 3, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(5, 17, 'Tivi Samsung', 0, 5500000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product4.jpg', '', 0, 1, '', '', '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(6, 15, 'Tivi LG 5000', 0, 5000000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 0, 'product5.jpg', '', 0, 1, '', '', '12 tháng', 0, 0, 0, 0, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(7, 18, 'Tivi Toshiba', 0, 6200000.0000, 'Bài viết cho sản phẩm này đang được cập nhật ...', 400000, 'product6.jpg', '', 0, 84, '', '', '12 tháng', 0, 1, 20, 5, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(8, 14, 'Tivi JVC 500', 0, 10000000.0000, '<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>\r\n', 500000, 'product7.jpg', '["Chrysanthemum.jpg","Desert.jpg"]', 0, 114, '', '', '12 tháng', 0, 1, 17, 5, 'USB 4G', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0'),
(9, 15, 'Tivi LG 520', 0, 5400000.0000, '<p>\r\n	B&agrave;i viết cho sản phẩm n&agrave;y đang được cập nhật ...</p>\r\n', 0, 'product13.jpg', 'a:0:{}', 0, 29, '', '', '12 tháng', 0, 0, 7, 2, '0', 'https://www.youtube.com/watch?v=zAEYQ6FDO5U', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `image_name`, `image_link`, `link`, `info`, `sort_order`) VALUES
(1, 'Slide 1', '', '11.jpg', 'http://dantri.com.vn/', '0', 1),
(2, 'Slide 2', '', '21.jpg', 'http://dantri.com.vn/', '', 2),
(3, 'Slide 3', '', '31.jpg', 'http://dantri.com.vn/', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `yahoo`, `gmail`, `skype`, `phone`, `sort_order`) VALUES
(1, 'Hoang van tuyen', 'tuyenht90', 'hoangvantuyencnt@gmail.com', 'tuyencnt90', '016455656556', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `security` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `type`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`) VALUES
(7, 0, 1, 15, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 4000000.0000, 'nganluong', '', '', '', 1405548000),
(8, 0, 0, 15, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 4000000.0000, 'nganluong', '', '', '', 1407917785),
(9, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 10000000.0000, 'nganluong', '', '111', '', 1407918071),
(10, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 10000000.0000, 'nganluong', '', '111111', '', 1407918235),
(11, 0, 2, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '111111', 10000000.0000, 'nganluong', '', '111', '', 1407918299),
(12, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '7667676', 10000000.0000, 'nganluong', '', '', '', 1407923211),
(13, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '11', 20000000.0000, 'nganluong', '', '11', '', 1407926712),
(14, 0, 1, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 10000000.0000, 'nganluong', '', '', '', 1407981011),
(15, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099561),
(16, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099692),
(17, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099749),
(18, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099776),
(19, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099813),
(20, 0, 0, 19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 5000000.0000, 'baokim', '', '', '', 1408099856),
(21, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '01686039488', 10000000.0000, 'dathang', '', '', '', 1408159002),
(22, 0, 0, 19, 'Học lập trình web php', 'hoangvantuyencnt@gmail.com', '676676', 17000000.0000, 'nganluong', '', 'Giao hàng tới ABC', '', 1463280156),
(23, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '018487458547', 9500000.0000, 'offline', '', 'Chuyển hàng đúng thời gian vào 6/5/2016', '', 1465088835),
(24, 0, 2, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '018487458547', 5400000.0000, 'baokim', '', 'abc', '', 1465089700),
(25, 0, 0, 0, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '018487458547', 5800000.0000, 'baokim', '', 'test', '', 1465089758);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created`) VALUES
(19, 'Hoàng văn Tuyền', 'hoangvantuyencnt@gmail.com', '1245454545', 'hải Phòng', '96e79218965eb72c92a549dd5a330112', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `count_view` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `count_view`, `name`, `images`, `intro`, `link`, `feature`, `created`, `view`) VALUES
(10, 0, 'Chuyện Tình Trên Facebook - Hồ Việt Trung [Official]', '1386147113843_video.jpg', '', 'http://www.youtube.com/watch?v=3ZlLyU2L4P0', 1386146497, 2013, 4),
(8, 0, 'Chỉ còn trong mơ & Phải không em', '1386147092891_video.jpg', '', 'http://www.youtube.com/watch?v=RfNJ43HBzOM', 1386146505, 2013, 6),
(7, 0, '[HD] Anh Xin Lỗi - Minh Vương M4U', '1386147058495_video.jpg', '', 'http://www.youtube.com/watch?v=OCZ4D9qT8lI', 1386146502, 2013, 17),
(16, 0, 'Nhốt Em Vào Tim - Hồ Việt Trung [Official]', '1386147135763_video.jpg', '', 'http://www.youtube.com/watch?v=fkDSnN_I_Ig', 0, 1386147135, 0),
(17, 0, 'Chỉ Yêu Mình Em - Châu Khải Phong [Official]', '1386147154302_video.jpg', '', 'http://www.youtube.com/watch?v=l2MydtlKra8', 0, 1386147154, 4),
(18, 0, 'Số Nghèo - Châu Khải Phong [Official]', '138614718279_video.jpg', '', 'http://www.youtube.com/watch?v=LJRvv8U6Dos', 1386147576, 1386147182, 1),
(19, 0, 'Trò Chơi Đắng Cay - Châu Khải Phong [Official]', '138614721063_video.jpg', '', 'http://www.youtube.com/watch?v=3J8d8-YgOlU', 1386147575, 1386147210, 0),
(20, 0, 'Sầu Tím Thiệp Hồng - Quang Lê & Lệ Quyên ( Liveshow Quang Lê )', '1386147271236_video.jpg', '', 'http://www.youtube.com/watch?v=Kd5OrV4Y_bs', 0, 1386147271, 0),
(21, 0, 'Gõ cửa trái tim Quang Lê - Mai Thiên Vân', '1386147292776_video.jpg', '', 'http://www.youtube.com/watch?v=9oVxDQsgXIQ', 1386147577, 1386147292, 0),
(22, 0, 'Cô Hàng Xóm - Quang Lê', '1386147310490_video.jpg', '', 'http://www.youtube.com/watch?v=nA9ub4zlel8', 0, 1386147310, 0),
(23, 0, 'Lam Truong - Mai Mai', '1386147353743_video.jpg', '', 'http://www.youtube.com/watch?v=o1igATj9lMw', 0, 1386147353, 0),
(24, 0, 'Lỡ Yêu Em Rồi - Bằng Kiều', '1386147364632_video.jpg', '', 'http://www.youtube.com/watch?v=HYi-5dM_c34', 0, 1386147364, 0),
(25, 0, 'Bản Tình Cuối - Bằng Kiều', '1386147389790_video.jpg', '', 'http://www.youtube.com/watch?v=pNr7jEQ8LT8', 0, 1386147389, 2),
(26, 1, 'Phút cuối - Bằng Kiều', '1386150063515_video.jpg', '', 'http://www.youtube.com/watch?v=sA_gM6_eqXU', 0, 1386150063, 0),
(27, 0, 'Giấc Mơ (Live) - Bùi Anh Tuấn ft Yanbi', '1386150103768_video.jpg', '', 'http://www.youtube.com/watch?v=XLr463dUNgQ', 0, 1386150103, 0),
(28, 4, 'Anh Nhớ Em - Tuấn Hưng', '1386150121482_video.jpg', '', 'http://www.youtube.com/watch?v=ewNQtt1RiSk', 0, 1386150121, 0),
(29, 0, 'LE QUYEN & TUAN HUNG - Nhu Giac Chiem Bao', '1386150141608_video.jpg', '', 'http://www.youtube.com/watch?v=DaMARvh0kms', 0, 1386150141, 0),
(30, 12, 'Dĩ Vãng Cuộc Tình - Duy Mạnh ft Tuấn Hưng', '140905101897_video.jpg', '', 'http://www.youtube.com/watch?v=g8I-LoBIFgQ', 0, 1409051018, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
