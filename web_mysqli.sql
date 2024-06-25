-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `state`) VALUES
(1, 'admin', 'admin', 1),
(2, '123', '123', 1),
(3, 'asd', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(1000) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `hinhanh` varchar(1000) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tenbaiviet`, `id_danhmuc`, `hinhanh`, `tomtat`, `noidung`) VALUES
(1, 'Laptop GeForce RTX 40 Series cho mùa tựu trường', 1, '1701828692_laptop1.webp', '<p><strong><em>Với sức mạnh của GPU RTX 40 series mobile, những chiếc laptop thế hệ mới sẽ mang đến hiệu năng ấn tượng cho c&aacute;c bạn học sinh, sinh vi&ecirc;n.</em></strong></p>\n', '<p>NVIDIA Vietnam vừa mới tổ chức buổi gặp gỡ b&aacute;o ch&iacute; nhằm giới thiệu tổng quan về c&ocirc;ng nghệ ti&ecirc;n phong cho việc học tập, l&agrave;m việc v&agrave; giải tr&iacute; dựa tr&ecirc;n nền tảng GPU GeForce RTX, cũng như c&aacute;c xu hướng mới m&agrave; tr&iacute; tuệ nh&acirc;n tạo l&agrave;m chủ đạo v&agrave; được gia tăng sức mạnh dựa tr&ecirc;n nền tảng phần cứng v&agrave; phần mềm của NVIDIA.</p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/nvidia-bts23-social_09a35e758d8a4666bd00ccfcc866464a.jpg\" style=\"height:185px; width:500px\" /></p>\n\n<p><strong>Tăng tốc cho Học tập</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/geforce-bts23-perf-stem_2x_6df11ce2eaeb4e99951330ac03da1e25.jpg\" style=\"height:230px; width:500px\" /></p>\n\n<p>Laptop GeForce mang đến khả năng tăng tốc GPU cho c&aacute;c ứng dụng h&agrave;ng đầu được sử dụng trong c&aacute;c lĩnh vực kỹ thuật, c&ocirc;ng nghệ th&ocirc;ng tin, khoa học dữ liệu v&agrave; kinh tế. Điều n&agrave;y c&oacute; nghĩa l&agrave; khả năng hiển thị tương t&aacute;c, xử l&yacute; thời gian thực cho thiết kế v&agrave; m&ocirc; phỏng h&igrave;nh ảnh nhanh hơn th&ocirc;ng qua c&aacute;c m&ocirc; h&igrave;nh AI v&agrave; dữ liệu lớn với độ ch&iacute;nh x&aacute;c cao. Với khả năng tăng tốc GPU, sinh vi&ecirc;n thuộc c&aacute;c ng&agrave;nh Khoa học, C&ocirc;ng nghệ, Kỹ thuật v&agrave; To&aacute;n học (STEM) c&oacute; thể ho&agrave;n th&agrave;nh c&ocirc;ng việc một c&aacute;ch nhanh ch&oacute;ng, d&agrave;nh nhiều thời gian hơn cho việc học tập v&agrave; &iacute;t thời gian chờ đợi hơn.</p>\n\n<p><strong>Tăng tốc cho S&aacute;ng tạo</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/geforce-bts23-perf-creators_2x_9f88e7789f8e4694a4cf8a3b32a468a7.jpg\" style=\"height:269px; width:500px\" /></p>\n\n<p>Nền tảng NVIDIA Studio cung cấp sức mạnh cho sự s&aacute;ng tạo trong v&agrave; ngo&agrave;i lớp học với với c&aacute;c ứng dụng tăng tốc, tr&igrave;nh điều khiển v&agrave; c&aacute;c c&ocirc;ng cụ độc quyền bao gồm NVIDIA Omniverse, Canvas v&agrave; Broadcast. Những chiếc laptop NVIDIA GeForce RTX được trang bị phần cứng chuy&ecirc;n dụng để tăng tốc cho thiết kế 3D, chỉnh sửa ảnh v&agrave; video c&oacute; độ ph&acirc;n giải cao 8K HDR. V&agrave; với AI, người d&ugrave;ng c&oacute; thể &aacute;p dụng c&aacute;c hiệu ứng n&acirc;ng cao chỉ với một c&uacute; nhấp chuột. V&igrave; vậy, cho d&ugrave; bạn đang chỉnh sửa video, ph&aacute;t s&oacute;ng trực tiếp, chơi game hay chỉ đơn giản l&agrave; minh họa v&agrave;i điểm nhấn cần lưu &yacute; cho b&agrave;i tập về nh&agrave;, NVIDIA Studio sẽ n&acirc;ng cao mọi thứ bạn l&agrave;m.</p>\n\n<p><strong>Tăng tốc cho Giải tr&iacute;</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/geforce-bts23-perf-gaming_2x_af0a559eb44c4efcb34a4d4eac47f543.jpg\" style=\"height:230px; width:500px\" /></p>\n\n<p>GPU GeForce RTX 40 Series cung cấp sức mạnh cho những chiếc laptop nhanh nhất thế giới, gi&uacute;p sinh vi&ecirc;n c&oacute; thể thưởng thức c&aacute;c tr&ograve; chơi giải tr&iacute; mới nhất theo những c&aacute;ch m&agrave; những chiếc laptop th&ocirc;ng thường kh&ocirc;ng thể s&aacute;nh được. Chơi game với đồ họa ch&acirc;n thực v&agrave; sống động nhất, hiệu suất được tăng tốc bằng AI, độ trễ hệ thống thấp nhất v&agrave; stream game kh&ocirc;ng c&ograve;n hiện tượng giật lag.</p>\n\n<p><strong>Sức mạnh v&agrave; t&iacute;nh di động</strong></p>\n\n<p>Những chiếc laptop trang bị GPU GeForce RTX 40 Series l&agrave; sự kết hợp giữa hiệu năng v&agrave; t&iacute;nh di động. Với c&ocirc;ng nghệ Max-Q của NVIDIA, bạn c&oacute; thể tận hưởng những thiết kế mỏng nhẹ m&agrave; kh&ocirc;ng ảnh hưởng nhiều đến hiệu suất. Tuổi thọ pin k&eacute;o d&agrave;i v&agrave; hoạt động y&ecirc;n tĩnh sẽ gi&uacute;p bạn kh&ocirc;ng bị ph&acirc;n t&acirc;m v&agrave; lu&ocirc;n tập trung. Chuyển đổi dễ d&agrave;ng từ lớp học sang c&aacute;c buổi s&aacute;ng tạo ngoại kh&oacute;a, từ đ&oacute; mang đến cho bạn sức mạnh đổi mới mọi l&uacute;c mọi nơi.</p>\n\n<p><strong>Khuyến m&atilde;i m&ugrave;a tựu trường</strong></p>\n\n<p>Nh&acirc;n dịp n&agrave;y,&nbsp;NVIDIA&nbsp;c&ugrave;ng c&aacute;c đối t&aacute;c trưng b&agrave;y những chiếc laptop d&ograve;ng Studio với cấu h&igrave;nh&nbsp;GeForce RTX 40 Series&nbsp;v&agrave; th&ocirc;ng b&aacute;o khuyến m&atilde;i m&ugrave;a tựu trường đến với kh&aacute;ch h&agrave;ng.&nbsp;Những chiếc laptop n&agrave;y rất l&yacute; tưởng để học tập v&agrave; triển khai c&aacute;c dự &aacute;n khoa học STEM, đ&aacute;p ứng hầu hết c&aacute;c nhu cầu về xử l&yacute; t&aacute;c vụ trong chuy&ecirc;n ng&agrave;nh kỹ thuật v&agrave; tr&iacute; tuệ nh&acirc;n tạo ứng dụng.</p>\n'),
(2, 'Top 6 thông tin nổi bật nhất tại sự kiện Microsoft Surface', 1, '1697522203_1695565075_laptop2.webp', '<p>Microsoft vừa mới kết th&uacute;c sự kiện Microsoft Surface với nhiều c&ocirc;ng bố đ&aacute;ng ch&uacute; &yacute;, từ thiết bị Surface mới cho đến những th&ocirc;ng tin về c&aacute;c t&iacute;nh năng AI mới sắp được t&iacute;ch hợp trong những sản phẩm của Microsoft.&nbsp;</p>\n', '<p><strong>Surface Laptop Studio 2 với hiệu năng được cải thiện</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/surface_laptop_studio_2_image_1_web_557b21cb7a4e4b3882579ac0215d3575.jpg\" style=\"height:282px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Microsoft cuối c&ugrave;ng cũng đ&atilde; h&eacute; lộ Surface Laptop Studio 2. Họ gọi đ&acirc;y l&agrave; chiếc Surface mạnh nhất từng được tạo ra nhờ được trang bị vi xử l&yacute; Intel Core i7 thế hệ 13 thuộc d&ograve;ng H, GPU Nvidia RTX 4050 hoặc RTX 4060, v&agrave; RAM 64GB. Ngo&agrave;i ra, phần touchpad cũng được n&acirc;ng cấp để mang đến cho người d&ugrave;ng trải nghiệm tốt hơn. Surface Laptop Studio 2 c&oacute; gi&aacute; từ 1999 USD v&agrave; bạn đ&atilde; c&oacute; thể đặt mua trước ngay từ b&acirc;y giờ. Sản phẩm sẽ được b&aacute;n ra v&agrave;o ng&agrave;y 03/10/2023.</p>\n\n<p><strong>Surface Laptop Go 3 mỏng nhẹ được n&acirc;ng cấp phần cứng</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/surface_laptop_go_3_image_1_web_b832b488792a49499222805d5e21aa0f.jpg\" style=\"height:282px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Microsoft cho biết Surface Laptop Go 3 mạnh hơn tiền nhiệm 88%, được trang bị m&agrave;n h&igrave;nh cảm ứng 12,4-inch, nặng chưa đến 1,134kg, v&agrave; c&oacute; n&uacute;t nguồn t&iacute;ch hợp cảm biến v&acirc;n tay. N&oacute; cũng c&oacute; thời lượng pin l&ecirc;n đến 15 tiếng đồng hồ, c&ugrave;ng với đ&oacute; l&agrave; 1 cổng USB-A, 1 cổng USB-C, v&agrave; 1 cổng headphone.</p>\n\n<p>Microsoft cũng c&oacute; giới thiệu tho&aacute;ng qua về Surface Go 4 d&agrave;nh cho doanh nghiệp. N&oacute; được cải thiện ch&uacute;t đỉnh về mặt hiệu năng, cụ thể l&agrave; từ CPU Intel Pentium 2 nh&acirc;n l&ecirc;n con chip Intel N200 4 nh&acirc;n.</p>\n\n<p>Surface Laptop Go 3 c&oacute; gi&aacute; từ 799 USD, c&ograve;n Surface Go 4 c&oacute; gi&aacute; từ 579 USD. Cả 2 thiết bị sẽ được b&aacute;n ra từ ng&agrave;y 03/10/2023, v&agrave; bạn đ&atilde; c&oacute; thể đặt mua trước ngay từ h&ocirc;m nay rồi đ&oacute;.</p>\n\n<p><strong>Bản cập nhật tiếp theo của Windows 11 sẽ c&oacute; th&ecirc;m Copilot</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/copilot_hero_web_8770d1e58c6341dd9c48e1a75f3cd6c9.jpg\" style=\"height:313px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Windows 11 sẽ c&oacute; 1 bản cập nhật lớn v&agrave;o ng&agrave;y 26/09/2023. Bản cập nhật n&agrave;y sẽ mang đến v&ocirc; v&agrave;n t&iacute;nh năng mới mẻ, bao gồm Windows Copilot (sử dụng AI) m&agrave; Microsoft đ&atilde; thử nghiệm trong thời gian qua. C&ugrave;ng với đ&oacute;, diện mạo của File Explorer cũng sẽ được đổi mới v&agrave; sẽ hỗ trợ giải n&eacute;n tập tin .rar v&agrave; .7z.</p>\n\n<p>Th&ecirc;m v&agrave;o đ&oacute;, Microsoft c&oacute; bổ sung c&ocirc;ng cụ tinh chỉnh &acirc;m thanh (Windows volume mixer) cho bạn điều chỉnh &acirc;m lượng của ri&ecirc;ng từng ứng dụng. Song song đ&oacute;, bản cập nhật n&agrave;y c&ograve;n mang đến c&ocirc;ng cụ Dynamic Lighting để bạn t&ugrave;y chỉnh hiệu ứng đ&egrave;n LED RGB của c&aacute;c linh kiện được kết nối với PC.</p>\n\n<p><strong>Ứng dụng Copilot sẽ tương th&iacute;ch với nhiều dịch vụ v&agrave; ứng dụng của Microsoft</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/copilot_draft_event_7152fe08320a4c3794775541e639e607.jpg\" style=\"height:333px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Copilot l&agrave; một trợ l&yacute; ảo dựa tr&ecirc;n nền tảng AI, v&agrave; Microsoft cũng hợp nhất Copilot lại để mang đến trải nghiệm đồng nhất cho người d&ugrave;ng. C&ocirc;ng cụ n&agrave;y sẽ được đưa v&agrave;o c&aacute;c ứng dụng v&agrave; dịch vụ của Microsoft, bao gồm Windows 11, Microsoft 365, Edge. Với bản cập nhật n&agrave;y, Copilot sẽ tổng hợp th&ocirc;ng tin từ tr&ecirc;n mạng, từ dữ liệu của người d&ugrave;ng, v&agrave; từ những thứ m&agrave; người d&ugrave;ng đang thao t&aacute;c tr&ecirc;n m&aacute;y t&iacute;nh để c&oacute; thể hỗ trợ tốt hơn.</p>\n\n<p><strong>Bing Chat sẽ được ứng dụng DALL-E 3 v&agrave; đưa ra c&aacute;c c&acirc;u trả lời được c&aacute; nh&acirc;n h&oacute;a</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/dalle_3_bing_chat_197cc5421fd146a19058ab6f104fd764.jpg\" style=\"height:333px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Bing Chat l&agrave; một con chatbot AI của Microsoft, v&agrave; n&oacute; sẽ nhận được 1 bản cập nhật lớn. Microsoft c&ocirc;ng bố rằng họ sẽ bổ sung DALL-E 3 &ndash; phi&ecirc;n bản mới nhất của c&ocirc;ng cụ tạo ra h&igrave;nh ảnh từ những chữ mi&ecirc;u tả của OpenAI &ndash; v&agrave;o Bing Chat, v&agrave; n&oacute; ho&agrave;n to&agrave;n miễn ph&iacute; lu&ocirc;n nh&eacute;. Con chatbot AI n&agrave;y cũng c&oacute; th&ecirc;m t&iacute;nh năng Personalized Answers để &ldquo;học&rdquo; c&aacute;c đoạn chat của bạn hồi trước để gi&uacute;p Bing đưa ra c&acirc;u trả lời ph&ugrave; hợp với bạn hơn.</p>\n\n<p><strong>Microsoft 365 sẽ t&iacute;ch hợp Copilot v&agrave;o th&aacute;ng 11/2023</strong></p>\n\n<p><img src=\"https://file.hstatic.net/200000722513/file/365_copilot_generation_8d4dbb4ac49b4bca896205675e55d5a9.jpg\" style=\"height:333px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Microsoft sẽ cập nhật Copilot v&agrave;o trong c&aacute;c ứng dụng 365 của họ v&agrave;o ng&agrave;y 01/11/2023. Bạn c&oacute; thể d&ugrave;ng Copilot để tổng hợp văn bản, tạo email một c&aacute;ch nhanh ch&oacute;ng, viết lại t&agrave;i liệu, v&acirc;n v&acirc;n. T&iacute;nh năng n&agrave;y sẽ được cập nhật cho những ai đ&atilde; đăng k&yacute; g&oacute;i c&ocirc;ng ty v&agrave; doanh nghiệp với mức gi&aacute; cộng th&ecirc;m l&agrave; 30 USD cho mỗi th&aacute;ng.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_chitietdonhang` int(11) NOT NULL,
  `ma_donhang` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chitietdonhang`
--

INSERT INTO `tbl_chitietdonhang` (`id_chitietdonhang`, `ma_donhang`, `id_sanpham`, `soluongsp`) VALUES
(57, '1094', 11, 1),
(58, '858', 28, 10),
(59, '4781', 10, 1),
(60, '5758', 10, 1),
(61, '5758', 18, 1),
(62, '5607', 10, 1),
(63, '5607', 18, 1),
(64, '9489', 10, 1),
(65, '9489', 18, 1),
(66, '9780', 12, 1),
(67, '9780', 16, 1),
(68, '6356', 12, 1),
(69, '6356', 13, 1),
(70, '9810', 12, 1),
(71, '9810', 13, 1),
(72, '9810', 11, 1),
(73, '425', 13, 2),
(74, '2110', 13, 2),
(75, '9411', 10, 1),
(76, '8095', 11, 1),
(77, '8095', 13, 1),
(78, '9873', 11, 1),
(79, '9873', 18, 1),
(80, '1875', 10, 1),
(81, '6441', 12, 1),
(82, '9820', 29, 4),
(83, '214', 11, 4),
(84, '214', 21, 1),
(85, '330', 10, 1),
(86, '6441', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Bàn phím cơ'),
(2, 'Switch'),
(7, 'Tai nghe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_danhmuc`, `tendanhmuc`) VALUES
(22, 'Bàn ghế gaming'),
(1, 'Laptop'),
(21, 'Màn hình');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ma_donhang` varchar(10) NOT NULL,
  `ngaydat` varchar(100) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `id_vanchuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_giohang`, `id_taikhoan`, `ma_donhang`, `ngaydat`, `trangthai`, `payment`, `id_vanchuyen`) VALUES
(38, 11, '1094', '2023-12-09 17:56:58', 0, 'momo', 3),
(45, 0, '2639', '2023-12-11 19:46:22', 1, 'momo', 1),
(48, 11, '425', '2023-12-11 21:50:58', 1, 'momo', 3),
(49, 11, '2110', '2023-12-11 21:55:47', 1, 'momo', 3),
(50, 11, '9411', '2023-12-20 21:29:26', 1, 'momo', 3),
(53, 11, '1875', '2023-12-20 21:35:30', 0, 'tienmat', 3),
(56, 14, '214', '2024-01-09 15:36:51', 0, 'momo', 7),
(57, 14, '330', '2024-01-09 15:39:49', 1, 'tienmat', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<h3>Số điện thoại: <strong><em>0373605557 Anh Việt Phạm</em></strong></h3>\r\n\r\n<h3>FB: <a href=\"https://www.facebook.com/profile.php?id=100028125669872\">facebook.com/phamvietanh</a></h3>\r\n\r\n<h3>Instagram: <a href=\"https://www.instagram.com/vanh3009/\">vanh3009</a></h3>\r\n\r\n<h3>GitHub: <a href=\"https://github.com/VitTne30\">VitTne30</a></h3>\r\n\r\n<h3>😻🧠💪🙏😈👍👽</h3>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `code_cart` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(21, 'MOMOBKUN20180529', 1702119358, '10000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '1094'),
(22, 'MOMOBKUN20180529', 1702298732, '2399000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '2639'),
(23, 'MOMOBKUN20180529', 1702298808, '3989000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '6356'),
(24, 'MOMOBKUN20180529', 1702306225, '5198000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '425'),
(25, 'MOMOBKUN20180529', 1702306513, '5198000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '2110'),
(26, 'MOMOBKUN20180529', 1703081969, '1090000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '9411'),
(27, 'MOMOBKUN20180529', 1703121793, '1390000', 'Thanh toán qua mã QR MoMo', 'momo_wallet', 2147483647, '', '6441'),
(28, 'MOMOBKUN20180529', 1704789220, '9600000', 'Thanh toán qua ATM', 'momo_wallet', 2147483647, 'napas', '214');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `ID` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` text NOT NULL,
  `gioitinh` text NOT NULL,
  `tendangnhap` text NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`ID`, `hoten`, `sdt`, `diachi`, `gioitinh`, `tendangnhap`, `matkhau`) VALUES
(1, 'Phạm Việt Anh', '0373605557', 'Hà Nội', 'Nam', 'VitTne', 'VitAnh30'),
(3, 'Lê Minh Hải', '123123123', 'Hà Nội', 'Nam', 'Haili', 'haili'),
(4, 'Ngô Thuỵ Lương', '312312123', 'Ninh Bình', 'Nam', 'Tluong', 'Tluong'),
(5, 'asd', '9238012938', 'hnoi', 'Khác', 'asd', 'asd'),
(6, 'an', '1029381092', 'phu tho', 'Khác', 'an`', 'an');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(1000) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `giasp` int(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `id_danhmuc`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`) VALUES
(10, 'Bàn phím cơ Asus ROG Azoth', 'b001', 1, 1090000, 9982, '1695234856_banphim1webp.webp', 'Hãng sản xuất: Akko \r\n\r\nTình trạng: Mới\r\n\r\nBảo hành: 12 Tháng\r\n\r\nSwitch: Akko CS switch (Wine Red / Wine White)', 'Hãng sản xuất: Akko \n\nTình trạng: Mới\n\nBảo hành: 12 Tháng\n\nSwitch: Akko CS switch (Wine Red / Wine White)', 1),
(11, 'Bàn phím cơ AKKO 5075B Plus Black&Cyan ', 'b002', 1, 2399000, 9993, '1696015253_banphim2webp.webp', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: Akko Wine Red</p>\r\n', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: Akko Wine Red</p>\r\n', 1),
(12, 'Bàn phím MonsGeek M1 QMK Black ', 'b003', 1, 1390000, 9999, '1696015274_banphim3.webp', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: AKKO Cream Yellow Pro</p>\r\n', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: AKKO Cream Yellow Pro</p>\r\n', 1),
(13, 'Bàn phím cơ AKKO 5075B Plus Naruto', 'b004', 1, 2599000, 9996, '1696015292_banphim4.webp', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: Akko Crystal Switch</p>\r\n', '<p>H&atilde;ng sản xuất: Akko T&igrave;nh trạng: Mới Bảo h&agrave;nh: 12 Th&aacute;ng Switch: Akko Crystal Switch</p>\r\n', 1),
(14, 'Bàn Phím Cơ Vortex PC66', 'b005', 1, 2790000, 10000, '1695226076_banphim5.webp', 'Nhà sản xuất: Vortex\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nSwitch: Cherry MX Blue / Brown / Red', 'Nhà sản xuất: Vortex\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nSwitch: Cherry MX Blue / Brown / Red', 1),
(15, 'Tai nghe gaming Rapoo VH520C', 't001', 7, 490000, 999, '1695226284_tainghe1.webp', 'Hãng sản xuất: Rapoo\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nMàu sắc: Đen\r\nKết nối: 3.5mm (Audio) + USB (LED)', 'Hãng sản xuất: Rapoo\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nMàu sắc: Đen\r\nKết nối: 3.5mm (Audio) + USB (LED)', 1),
(16, 'Tai nghe Logitech G535 LIGHTSPEED Wireless Black', 't002', 7, 2550000, 998, '1695226271_tainghe2.webp', 'Nhà sản xuất: Logitech\r\nMàu sắc: Đen\r\nTình trạng: Mới 100%\r\nBảo hành: 24 Tháng', 'Nhà sản xuất: Logitech\r\nMàu sắc: Đen\r\nTình trạng: Mới 100%\r\nBảo hành: 24 Tháng', 1),
(17, 'Tai nghe Corsair HS55 Wireless Core Black', 't003', 7, 1590000, 1000, '1695226331_tainghe4.webp', 'Hãng sản xuất: Corsair\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nÂm thanh Stereo', 'Hãng sản xuất: Corsair\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nÂm thanh Stereo', 1),
(18, 'Tai nghe Asus ROG Strix Go Core', 't004', 7, 1890000, 997, '1695226366_tainghe3.webp', 'Hãng sản xuất: Asus \r\nTình trạng: Mới\r\nBảo hành: 24 Tháng', 'Hãng sản xuất: Asus \r\nTình trạng: Mới\r\nBảo hành: 24 Tháng', 1),
(19, 'Tai nghe Corsair HS80 RGB Wireless', 't005', 7, 3790000, 1000, '1695226432_tainghe5.webp', 'Hãng sản xuất : Corsair\r\nTình trạng : Mới 100%\r\nBảo hành : 24 Tháng', 'Hãng sản xuất : Corsair\r\nTình trạng : Mới 100%\r\nBảo hành : 24 Tháng', 1),
(20, 'Switch SWK Mocha ST', 'PVN4233', 2, 12000, 10000, '1695408129_sw1.webp', '<p>Thương hiệu: S&oacute;i Gear</p>\r\n', '<p>Thương hiệu: S&oacute;i Gear</p>\r\n', 1),
(21, 'KTT Kang White Switch', 'PVN1369', 2, 4000, 9999, '1695226898_sw2.webp', 'Thương hiệu: Gateron', 'Thương hiệu: Gateron', 1),
(22, 'Switch FBB F3', 'PVN4322', 2, 13000, 10000, '1695234209_sw3webp.webp', 'Thương hiệu: Sói Gear', 'Thương hiệu: Sói Gear', 1),
(23, 'Switch SWK Mocha ST', 'PVN4324', 2, 12000, 10000, '1695226880_sw4.webp', 'Thương hiệu: Gateron', 'Thương hiệu: Gateron', 1),
(24, 'Switch Kailh Novelkey Cream', 'PVN1782', 2, 17000, 10000, '1695226913_sw5.webp', 'Thương hiệu: Gateron', 'Thương hiệu: Gateron', 1),
(25, 'Switch Gateron Quiin Heavy Tactile', 'PVN4132', 2, 11000, 9999, '1695226861_sw6.webp', 'Thương hiệu: Gateron', 'Thương hiệu: Gateron', 1),
(27, 'Switch Gateron Ink Black V2', 'PVN1727', 2, 17100, 10000, '1700984669_sw7.webp', '<p>Tiết kiệm:&nbsp;900₫&nbsp;so với gi&aacute; thị trường</p>\r\n', '<p>Tiết kiệm:&nbsp;900₫&nbsp;so với gi&aacute; thị trường</p>\r\n', 1),
(28, 'Switch Gateron Oil King', 'PVN1726', 2, 11400, 9990, '1700984752_sw8.webp', '<p>Thương hiệu:&nbsp;<strong>S&oacute;i Gear</strong></p>\r\n', '<p>Tiết kiệm:&nbsp;600₫&nbsp;so với gi&aacute; thị trường</p>\n', 1),
(29, 'Switch Bean Green Tactile', 'PVN5472', 2, 10000, 4, '1703148135_sw9.webp', '<p>Thương hiệu:&nbsp;<strong>Wuque</strong></p>\r\n', '<p>Thương hiệu:&nbsp;<strong>Wuque</strong></p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_taikhoan` int(11) NOT NULL,
  `tentaikhoan` varchar(1000) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `matkhau` varchar(15) NOT NULL,
  `dienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_taikhoan`, `tentaikhoan`, `hoten`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(2, 'vanh', 'Việt Anh Phạm', 'vanhpham3009@gmail.com', 'hanoi', '3009', '0373605557'),
(6, '123', '123', '123@gmail.com', '123', '123', '0373605557'),
(10, 'asd', 'Việt Anh', 'vanhpham9003@gmail.com', 'asd', 'asd', '0373605557'),
(11, '1', 'Phạm Việt Anh', 'vanhpham@gmail.com', '1', '1', '0123456789'),
(14, '2', '2', '2', '2', '2', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vanchuyen`
--

CREATE TABLE `tbl_vanchuyen` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachinhanhang` varchar(250) NOT NULL,
  `note` text NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vanchuyen`
--

INSERT INTO `tbl_vanchuyen` (`id`, `ten`, `sdt`, `diachinhanhang`, `note`, `id_taikhoan`) VALUES
(1, '123', '123', 'Số 11 ngõ 207, Bùi Xương Trạch, Thanh Xuân, Hà Nội', '123', 0),
(3, 'Phạm Việt Anh', '0373605557', 'Hà Nội', 'Giao lúc nào cũng được', 11),
(5, 'Phạm Việt Anh', '0373605557', 'Hà Nội', 'Giao trước buổi tối', 2),
(6, 'asd', '0101230009', 'ha noi', 'giao nhanh', 10),
(7, 'việt anh', '037300903', 'hà nội', 'giao nhanh', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdonhang`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_danhmuc`),
  ADD UNIQUE KEY `tendanhmuc` (`tendanhmuc`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tbl_lienhe` ADD FULLTEXT KEY `thongtinlienhe` (`thongtinlienhe`);

--
-- Indexes for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD UNIQUE KEY `masp` (`masp`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_taikhoan`),
  ADD UNIQUE KEY `tentaikhoan` (`tentaikhoan`) USING HASH;

--
-- Indexes for table `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  MODIFY `id_chitietdonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
