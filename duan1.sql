-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2019 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activates`
--

CREATE TABLE `activates` (
  `id` int(11) NOT NULL,
  `activate` int(10) NOT NULL,
  `start` time DEFAULT NULL,
  `stop` time DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `beautiful_pictures`
--

CREATE TABLE `beautiful_pictures` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'Tin Tức', NULL),
(2, 'Sự Kiện', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `childrens`
--

CREATE TABLE `childrens` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `permanent_residence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `childrens`
--

INSERT INTO `childrens` (`id`, `fullname`, `parent_id`, `birthday`, `status`, `class_id`, `permanent_residence`, `place_of_birth`, `gender`, `created_at`, `updated_at`) VALUES
(11, 'manh cuong', 7, '2017-11-07', NULL, 4, 'Số 79 ngõ 58 nguyễn đình hoàn', 'Quận Cầu Giấy', 0, NULL, '2019-12-02 21:35:14'),
(12, 'manhcuong', 7, '2019-11-13', NULL, 4, 'Cau Giay, Ha Noi', 'Ha Noi', 1, NULL, '2019-11-27 12:13:16'),
(14, 'test1', 6, '2018-01-28', NULL, 1, 'Cau Giay, Ha Noi', 'Ha Noi', 1, '2019-11-27 09:17:40', '2019-12-02 21:56:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `name`, `age`) VALUES
(1, '1-001', 1),
(2, '2-001', 2),
(3, '3-011', 3),
(4, '4-001', 4),
(5, '5-001', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `created_at` time(6) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `id_news` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checked` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enrolls`
--

CREATE TABLE `enrolls` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checked` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `forgot_password`
--

CREATE TABLE `forgot_password` (
  `id` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `checked` int(1) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `join_activate`
--

CREATE TABLE `join_activate` (
  `id` int(11) NOT NULL,
  `activate_id` int(11) NOT NULL,
  `children_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` int(10) DEFAULT NULL,
  `image_slide` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `content`, `slug`, `featured`, `image_slide`, `cate_id`) VALUES
(7, 'NHỮNG “MỤ PHÙ THỦY” ĐƯỢC TRẺ EM YÊU QUÝ ', 'Dịp lễ hội Halloween vừa qua tại Hệ thống Trường Mầm non Quốc tế KINDY CITY xuất hiện rất nhiều mụ phù thủy với bề ngoài có chút đáng sợ. Tuy nhiên, điều này không làm học trò ngại ngùng, ngược lại họ là tâm điểm yêu thương của các bạn nhỏ. Tại Trương Địn', '5de5d22512025-logo.png', '2019-11-30 03:45:10', '2019-12-03 04:31:49', '<p>Dịp lễ hội Halloween vừa qua tại Hệ thống&nbsp;<strong>Trường Mầm non Quốc tế KINDY CITY</strong>&nbsp;xuất hiện rất nhiều mụ ph&ugrave; thủy với bề ngo&agrave;i c&oacute; ch&uacute;t đ&aacute;ng sợ. Tuy nhi&ecirc;n, điều n&agrave;y kh&ocirc;ng l&agrave;m học tr&ograve; ngại ng&ugrave;ng, ngược lại họ l&agrave; t&acirc;m điểm y&ecirc;u thương của c&aacute;c bạn nhỏ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h1-10.jpg\" style=\"height:643px; width:960px\" /></p>\r\n\r\n<p>Tại&nbsp;<a href=\"https://kindycity.edu.vn/co-so-truong-dinh/\"><strong>Trương Định</strong></a>, khi &ldquo;Teacher&rdquo; Dung v&agrave; Sarah với h&igrave;nh h&agrave;i kỳ qu&aacute;i xuất hviện, học sinh to&agrave;n trường &ugrave;a v&agrave;o &ocirc;m c&ocirc;, xin kẹo, h&ocirc;n c&ocirc; thắm thiết kh&ocirc;ng ngại những vết sẹo, m&agrave;n nhện loang lổ tr&ecirc;n mặt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h2-8.jpg\" style=\"height:960px; width:927px\" /></p>\r\n\r\n<p>Trong khi đ&oacute;, tuy kẹo b&aacute;nh, thức uống ở KINDY CITY&nbsp;<strong><a href=\"https://kindycity.edu.vn/co-so-phan-xich-long/\">cơ sở Phan X&iacute;ch Long</a></strong>&nbsp;được pha bởi c&ocirc; gi&aacute;o đ&oacute;ng vai &ldquo;t&ecirc;n cướp biển ma qu&aacute;i&rdquo; nhưng học tr&ograve; vẫn chờ đợi được thưởng thức. Ăn uống xong, c&aacute;c con lại t&uacute;m tụm b&ecirc;n &ldquo;ph&ugrave; thủy chột mắt&rdquo; do gi&aacute;o vi&ecirc;n nước ngo&agrave;i nhập vai để c&ugrave;ng vui chơi, chụp ảnh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h3-5.jpg\" style=\"height:539px; width:960px\" /></p>\r\n\r\n<p>Tại&nbsp;<strong><a href=\"https://kindycity.edu.vn/co-so-quan-2/\">cơ sở Ng&ocirc; Quang Huy</a></strong>, b&agrave; Ti&ecirc;n Hắc &Aacute;m Maleficent với tạo h&igrave;nh kiều diễm đ&atilde; d&agrave;nh trọn vẹn sự ch&uacute; &yacute;, thiện cảm của học sinh to&agrave;n trường. V&agrave; những bộ xương đ&aacute;ng sợ, Ma-sơ Nun &aacute;c quỷ cũng kh&ocirc;ng l&agrave;m c&aacute;c thi&ecirc;n thần KINDY CITY B&igrave;nh T&acirc;n ngại ng&ugrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h4-5.jpg\" style=\"height:640px; width:960px\" /></p>\r\n\r\n<p>Hay những mụ ph&ugrave; thủy ở&nbsp;<strong><a href=\"https://kindycity.edu.vn/co-so-go-vap\">G&ograve; Vấp</a></strong>,&nbsp;<a href=\"https://kindycity.edu.vn/co-so-cong-hoa/\"><strong>Cộng H&ograve;a</strong></a>, với khay đầy d&acirc;y rợ, m&agrave;n nhện nhầy nhụa, mắt k&iacute;nh, mũ đen lạ hoắc nhưng c&aacute;c em vẫn nhận ra v&agrave; l&agrave;m tr&ograve; h&ugrave; dọa ngược lại c&aacute;c c&ocirc;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h56-2.jpg\" style=\"height:301px; width:968px\" /></p>\r\n\r\n<p>L&agrave; v&igrave; c&aacute;c con y&ecirc;u mến c&ocirc;, quen thuộc từ giọng n&oacute;i, tiếng cười, cử chỉ &acirc;n cần v&agrave; cảm nhận được sự an to&agrave;n tuyệt đối khi ở b&ecirc;n c&ocirc;, n&ecirc;n c&ocirc; với h&igrave;nh d&aacute;ng n&agrave;o, c&aacute;c con cũng dễ d&agrave;ng nhận ra v&agrave; b&aacute;m lấy!</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h7-4.jpg\" style=\"height:539px; width:960px\" /><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h8-1.jpg\" style=\"height:640px; width:960px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'nhung-mu-phu-thuy-duoc-tre-em-yeu-quy', NULL, NULL, 1),
(8, 'CÙNG HỌC SINH PHAN XÍCH LONG CÂN BẰNG VẬT THỂ', 'Vào buổi sáng trong lành tại cơ sở Phan Xích Long, các em học sinh lớp Panda cùng cô Leandre tìm lời giải cho câu hỏi “Làm sao để hai đầu của chiếc cân ở vị trí ngang bằng với nhau?“. Với học cụ là các loại trái cây: táo, cam, quýt, chuối và chôm', '5de1d9792097f-about-1.png', '2019-11-30 03:52:41', '2019-11-30 03:52:41', '<p>V&agrave;o buổi s&aacute;ng trong l&agrave;nh tại&nbsp;<strong>cơ sở Phan X&iacute;ch Long</strong>, c&aacute;c em học sinh lớp Panda c&ugrave;ng c&ocirc; Leandre t&igrave;m lời giải cho c&acirc;u hỏi &ldquo;<strong>L&agrave;m sao để hai đầu của chiếc c&acirc;n ở vị tr&iacute; ngang bằng với nhau?</strong>&ldquo;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h1-9.jpg\" style=\"height:643px; width:960px\" /></p>\r\n\r\n<p>Với học cụ l&agrave; c&aacute;c loại tr&aacute;i c&acirc;y: t&aacute;o, cam, qu&yacute;t, chuối v&agrave; ch&ocirc;m ch&ocirc;m, ở đầu b&ecirc;n n&agrave;y của chiếc c&acirc;n, c&ocirc; Leandre đặt hai tr&aacute;i t&aacute;o v&agrave;, nhờ hai bạn trợ gi&uacute;p, c&ocirc; vừa sắp xếp một số loại quả kh&aacute;c l&ecirc;n đầu c&acirc;n c&ograve;n lại vừa quan s&aacute;t v&agrave; th&ecirc;m/bớt tr&aacute;i c&acirc;y, sao cho hai đầu c&acirc;n ở vị tr&iacute; ngang bằng nhau.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h2-7-e1574322043939.jpg\" style=\"height:591px; width:960px\" /><br />\r\nL&uacute;c đầu bạn Kh&aacute;nh T&acirc;m chọn đặt l&ecirc;n đầu c&acirc;n hai tr&aacute;i chuối v&agrave; một quả cam. Nhưng sau đ&oacute; em đ&atilde; thay quả cam th&agrave;nh quả qu&yacute;t kh&ocirc;ng c&oacute; cuống v&igrave; qu&yacute;t nhỏ v&agrave; nhẹ hơn n&ecirc;n l&agrave;m c&acirc;n được ở vị tr&iacute; ngang bằng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h3-4.jpg\" style=\"height:702px; width:960px\" /></p>\r\n\r\n<p>Sau đ&oacute;, c&aacute;c em lu&acirc;n phi&ecirc;n thay tr&aacute;i c&acirc;y ở vị tr&iacute; hai đầu c&acirc;n để biết được độ nặng &ndash; nhẹ của c&aacute;c loại khi c&oacute; sự so s&aacute;nh với nhau.</p>\r\n\r\n<p>Đặc biệt, khi trẻ nhận ra hai đầu c&acirc;n sẽ ngang bằng nhau l&uacute;c kh&ocirc;ng chứa đựng g&igrave; b&ecirc;n tr&ecirc;n, th&igrave; cũng l&agrave; l&uacute;c c&ocirc; Leandre mang đến một điều ngạc nhi&ecirc;n kh&aacute;c cho trẻ: C&oacute; những l&uacute;c kh&ocirc;ng c&oacute; g&igrave; b&ecirc;n tr&ecirc;n nhưng đầu c&acirc;n bị b&ecirc;n cao &ndash; b&ecirc;n thấp l&agrave; do c&acirc;n bị lệch. Do đ&oacute; trước khi c&acirc;n vật dụng, trẻ cần c&oacute; th&oacute;i quen kiểm tra độ c&acirc;n bằng của chiếc c&acirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h4-4.jpg\" style=\"height:586px; width:960px\" /></p>\r\n\r\n<p>Qua hoạt động n&agrave;y, c&aacute;c em ph&acirc;n biệt được m&agrave;u sắc, h&igrave;nh dạng c&aacute;c loại tr&aacute;i c&acirc;y v&agrave; đặc biệt tự t&igrave;m ra c&aacute;ch xếp chồng ch&uacute;ng l&ecirc;n nhau sau cho vững v&agrave;ng v&agrave; cao nhất. Đ&acirc;y l&agrave; c&aacute;ch tập cho c&aacute;c em vận dụng tư duy x&acirc;y dựng mọi việc từ nền m&oacute;ng vững chắc.</p>\r\n', 'cung-hoc-sinh-phan-xich-long-can-bang-vat-the', 0, NULL, 2),
(9, 'CHUÔNG GIÓ TÁI CHẾ – MÓN ĐỒ CHƠI HIỀN LÀNH VỚI TRÁI ĐẤT', 'Đó là món đồ chơi có tên “Plastic Bottle Mind Chime” ra đời từ bàn tay khéo léo và óc sáng tạo của cô trò cơ sở Ngô Quang Huy (quận 2) thuộc Hệ thống Trường Mầm non Ánh mai sáng.', '5de1da1f6fca1-h1-7.jpg', '2019-11-30 03:55:27', '2019-11-30 03:55:27', '<p>Đ&oacute; l&agrave; m&oacute;n đồ chơi c&oacute; t&ecirc;n &ldquo;<strong>Plastic Bottle Mind Chime</strong>&rdquo; ra đời từ b&agrave;n tay kh&eacute;o l&eacute;o v&agrave; &oacute;c s&aacute;ng tạo của c&ocirc; tr&ograve;&nbsp;<a href=\"https://kindycity.edu.vn/co-so-quan-2\">cơ sở Ng&ocirc; Quang Huy (quận 2)</a>&nbsp;thuộc&nbsp;<strong>Hệ thống Trường Mầm non Quốc tế KINDY CITY</strong>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h1-7.jpg\" style=\"height:643px; width:960px\" /></p>\r\n\r\n<p>Chỉ với chai nhựa đ&atilde; qua sử dụng m&agrave; c&aacute;c bạn thu gom được v&agrave; một số phụ kiện dễ t&igrave;m, c&aacute;c lớp lớn của cơ sở n&agrave;y đ&atilde; l&agrave;m th&agrave;nh chiếc chu&ocirc;ng gi&oacute; xinh xắn trang tr&iacute; lớp học, nh&agrave; cửa cửa m&agrave; ai ai cũng muốn được sở hữu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h2-6.jpg\" style=\"height:640px; width:960px\" /></p>\r\n\r\n<p>Phần th&acirc;n tr&ecirc;n của chai nhựa, c&aacute;c bạn thực hiện quấn len nhiều m&agrave;u sắc v&agrave; cắt d&aacute;n h&igrave;nh hoa bướm trang tr&iacute; l&ecirc;n tr&ecirc;n l&agrave;m điểm nhấn cho sản phẩm. Để chiếc chu&ocirc;ng gi&oacute; bắt mắt hơn, cả lớp l&agrave;m tua rua cột v&agrave;o b&ecirc;n dưới. D&acirc;y trang tr&iacute; cũng được gắn th&ecirc;m ống h&uacute;t, hạt cườm để th&ecirc;m phần lung linh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h3-3.jpg\" style=\"height:640px; width:960px\" /></p>\r\n\r\n<p>Trong khi đ&oacute;, lớp nhỏ d&ugrave;ng đoạn th&acirc;n tr&ograve;n hoặc đ&aacute;y của chai nhựa đ&atilde; được c&ocirc; gi&aacute;o cắt sẵn, l&agrave;m chiếc chu&ocirc;ng gi&oacute; kh&aacute;c đơn giản hơn nhưng cũng th&uacute; vị kh&ocirc;ng k&eacute;m. Sơn m&agrave;u sắc y&ecirc;u th&iacute;ch xong, c&aacute;c em tỉ mỉ luồn d&acirc;y, gắn chu&ocirc;ng, nơ cườm, kim tuyến trang tr&iacute; l&ecirc;n tr&ecirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h4-3.jpg\" style=\"height:640px; width:960px\" /><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h5-2.jpg\" style=\"height:640px; width:960px\" /></p>\r\n\r\n<p>Cứ thế, h&agrave;ng chục chiếc chu&ocirc;ng gi&oacute; t&iacute; hon ra đời, l&agrave;m vật phẩm trang tr&iacute; đẹp mắt tr&ecirc;n th&acirc;n c&acirc;y, trong lớp học cơ sở Ng&ocirc; Quang Huy &ndash;&nbsp;<strong>Trường Mầm non Quốc tế KINDY CITY</strong>.</p>\r\n\r\n<p>Mỗi khi c&oacute; ngọn gi&oacute; đi qua, những chiếc chu&ocirc;ng lại reo l&ecirc;n &acirc;m thanh vui tai, nhắc nhớ mọi người về việc tiết kiệm, t&aacute;i chế, t&aacute;i sử dụng mỗi ng&agrave;y trước khi vứt đi một m&oacute;n đồ c&oacute; hại cho tr&aacute;i đất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://kindycity.edu.vn/wp-content/uploads/2019/11/h6-4.jpg\" style=\"height:640px; width:960px\" /></p>\r\n', 'chuong-gio-tai-che-–-mon-do-choi-hien-lanh-voi-trai-dat', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_phonenumber` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_phonenumber` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_users` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parents`
--

INSERT INTO `parents` (`id`, `father_name`, `mother_name`, `father_phonenumber`, `mother_phonenumber`, `father_job`, `mother_job`, `address`, `email`, `id_users`) VALUES
(6, 'Nguyễn Văn C', 'Phạm Thị B', '0975871744', '099888664', 'nông dân', 'chủ tịch', 'Quan hoa', 'cuongtmph06947@fpt.edu.vn', 7),
(7, 'Nguyễn Văn Minh', 'Phạm Thị Gì', '0975871744', '0975871744', 'Săn bắt', 'Hái lượm', 'Cau Giay, Ha Noi', 'cuongtmph06947@fpt.edu.vn', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_footer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zalo` int(10) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `phone`, `password`, `role`) VALUES
(7, '0975871765', '$2y$12$oTgK439.IQAdRb9/emnSaus1duX5rmWCdgX.et35jPWifk4T92eVy', 1),
(8, '0975871766', '$2y$12$oTgK439.IQAdRb9/emnSaus1duX5rmWCdgX.et35jPWifk4T92eVy', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activates`
--
ALTER TABLE `activates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `beautiful_pictures`
--
ALTER TABLE `beautiful_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class` (`class_id`),
  ADD KEY `parent` (`parent_id`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `news_id` (`id_news`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `join_activate`
--
ALTER TABLE `join_activate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activate_id` (`activate_id`),
  ADD KEY `children_id` (`children_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activates`
--
ALTER TABLE `activates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `beautiful_pictures`
--
ALTER TABLE `beautiful_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `join_activate`
--
ALTER TABLE `join_activate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `childrens`
--
ALTER TABLE `childrens`
  ADD CONSTRAINT `class` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `parent` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `news_id` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `join_activate`
--
ALTER TABLE `join_activate`
  ADD CONSTRAINT `activate_id` FOREIGN KEY (`activate_id`) REFERENCES `activates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `children_id` FOREIGN KEY (`children_id`) REFERENCES `childrens` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
