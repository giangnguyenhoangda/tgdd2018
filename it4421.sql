-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2018 lúc 01:36 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `it4421`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessory`
--

CREATE TABLE `accessory` (
  `id` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customername` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `customeremail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `customeraddress` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `customernumber` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billitem`
--

CREATE TABLE `billitem` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `billid` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_new_href`
--

CREATE TABLE `comment_new_href` (
  `id` int(11) NOT NULL,
  `newid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_product_href`
--

CREATE TABLE `comment_product_href` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `keyboard` tinytext COLLATE utf8_vietnamese_ci,
  `productid` int(11) DEFAULT NULL,
  `smartdeviceid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `postDate` date NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `logo` text COLLATE utf8_vietnamese_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` longtext COLLATE utf8_vietnamese_ci NOT NULL,
  `postEmpid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`id`, `postDate`, `title`, `logo`, `type`, `content`, `postEmpid`) VALUES
(1, '2018-11-17', 'Vivo \"Bão Sale\" đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup', 'uploads/1542443923-2.jpg', 'tin-tuc-cong-nghe', '<h2 class=\"fs-newsdt-des\" style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.63; color: rgb(61, 61, 61); font-family: Arial, Helvetica, sans-serif; letter-spacing: normal;\">Đồng hành cùng niềm khao khát chiến thắng của đội tuyển Việt Nam tại AFF Cup, Vivo quyết định giảm giá cực sốc lên đến 1 triệu đồng cho rất nhiều sản phẩm ấn tượng của hãng tại FPT Shop</h2><ul class=\"fs-newsdt-vmore\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 10px 0px; border-width: 1px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: rgb(232, 232, 232); border-right-color: initial; border-bottom-color: rgb(232, 232, 232); border-left-color: initial; border-image: initial; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/5-smartphone-ban-chay-nhat-fpt-shop-tuan-vua-qua-77294\" title=\"5 smartphone bán chạy nhất FPT Shop tuần vừa qua\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">5 smartphone bán chạy nhất FPT Shop tuần vừa qua</a></h3></li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/cuoi-tuan-top-smartphone-ha-gia-soc-cuoi-tuan-sieu-pham-iphone-2018-giam-2-trieu-dong-77293\" title=\"Cuối tuần: Top smartphone hạ giá sốc cuối tuần, siêu phẩm iPhone 2018 giảm 2 triệu đồng\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">Cuối tuần: Top smartphone hạ giá sốc cuối tuần, siêu phẩm iPhone 2018 giảm 2 triệu đồng</a></h3></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/dung-iphone-x-hay-iphone-8-da-hon-cau-tra-loi-se-co-o-day-77289\" title=\"Dùng iPhone X hay iPhone 8 &quot;đã&quot; hơn? Câu trả lời sẽ có ở đây\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">Dùng iPhone X hay iPhone 8 \"đã\" hơn? Câu trả lời sẽ có ở đây</a></h3></li></ul><div class=\"fs-newsdt-cten clearfix\" style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; zoom: 1; line-height: 1.63; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\">Trong những ngày qua, cơn bão mang tên AFF Cup đang khiến người hâm mộ bóng đá cả nước không ngừng nồng nhiệt hưởng ứng. Và để đồng hành cùng niềm khao khát chiến thắng của hơn 90 triệu dân Việt Nam, Vivo quyết định mang đến cơn “bão sale” cực sốc lên đến 1 triệu đồng cho rất nhiều sản phẩm ấn tượng của hãng tại FPT Shop.</strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/dien-thoai/vivo-v9-youth\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214); font-weight: unset !important;\">Vivo V9 Youth</a>&nbsp;– 4.99 triệu (Giảm 1 triệu đồng)</strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Với thiết kế “tai thỏ” độc đáo – một trong những xu hướng thiết kế smartphone nổi trội nhất từ đầu năm nay. Nay, chỉ với 4.99 triệu đồng, khách hàng đã có thể sở hữu một em “thỏ” xinh xắn đến từ nhà Vivo với màn hình tràn lên đến 6.3 inch.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Vivo%20%22B%C3%A3o%20Sale%22%20%C4%91%E1%BA%BFn%201%20tri%E1%BB%87u%20%C4%91%E1%BB%93ng,%20c%C3%B9ng%20tuy%E1%BB%83n%20Vi%E1%BB%87t%20Nam%20chinh%20ph%E1%BB%A5c%20AFF%20Cup\" title=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-1.jpg\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-1.jpg\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Cùng đó, với camera AI selfie lên đến 16MP và bộ đôi camera kép, Vivo V9 Youth chắc chắn sẽ là trợ thủ đắc lực cho người dùng để lưu lại từng khoảnh khắc cực đẹp của bản thân và đặc biệt là trong mùa AFF Cup này nhé. Sản phẩm còn được trang bị chip Qualcomm 8 nhân mạnh mẽ và được Vivo trợ giá lên đến 1 triệu đồng.</p><div class=\"boxpin\" style=\"margin: 20px auto; padding: 10px 5px; border: 1px solid rgb(204, 204, 204); vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; height: auto; display: inline-block;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 226.078px; max-width: 640px; float: left;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9-youth\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><img src=\"https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/5/30/636632925246319653_1o.png\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; width: 150px; height: auto !important;\"></a></div><div class=\"infor\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px; float: right;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9-youth\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px;\">Vivo V9 Youth</h3></a><figure class=\"desc\" style=\"padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style: none; width: 401.906px; max-width: 640px;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Màn Hình: 6.3 inch</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Camera: Chính: Dual 16.0 MP + 2.0 MP, Phụ: 16.0 MP</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Pin: 3260 mAh</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Ram: 4 GB</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">CPU : Qualcomm Snapdragon 450</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">HĐH: Android 8.0</li></ul></figure><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9-youth\" class=\"viewdetail\" style=\"margin: 5px 0px 0px; padding: 5px 15px; font-size: 14px; vertical-align: baseline; background-image: -webkit-linear-gradient(top, rgb(248, 148, 6), rgb(247, 107, 28)); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(255, 255, 255); border: 1px solid rgb(217, 127, 0); text-align: center; text-transform: uppercase; border-radius: 4px; display: inline-block;\">XEM CHI TIẾT</a></div></div><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\"><a class=\"btn_odn\" data-id=\"24085\" href=\"https://fptshop.com.vn/dien-thoai/vivo-v9-youth\" target=\"_blank\" style=\"margin: 0px auto; padding: 0px; font-size: 15px; vertical-align: baseline; background: linear-gradient(rgb(236, 16, 16), rgb(218, 11, 0)) rgb(230, 13, 13); outline-style: none; outline-width: initial; color: rgb(255, 255, 255); width: 245px; height: 45px; line-height: 45px; font-weight: bold; text-transform: uppercase; border-radius: 5px; display: block;\">ĐẶT MUA VIVO V9 YOUTH</a></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/dien-thoai/vivo-y81\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214); font-weight: unset !important;\">Vivo Y81</a>&nbsp;– 3.99 triệu (Giảm 700 nghìn đồng)</strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Bạn đang cần gì cho một chiếc điện thoại thông mình trong mùa AFF Cup này? Chắc chắn là một thiết kế tràn màn hình thế hệ mới đúng nghĩa để có thể xem trọn vẹn từng khoảnh khắc bóng lăn ấn tượng và cổ vũ cho đội nhà đúng không nào. Vậy thì, Y81 chính là lựa chọn tối ưu cho bạn.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Vivo%20%22B%C3%A3o%20Sale%22%20%C4%91%E1%BA%BFn%201%20tri%E1%BB%87u%20%C4%91%E1%BB%93ng,%20c%C3%B9ng%20tuy%E1%BB%83n%20Vi%E1%BB%87t%20Nam%20chinh%20ph%E1%BB%A5c%20AFF%20Cup\" title=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-2.jpg\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-2.jpg\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Với màn hình lên đến 6.22 inch, được trang bị bộ nhớ 3GB RAM kết hợp 32GB ROM và chip xử lý 8 nhân 12nm mạnh mẽ, Y81 chắc chắn sẽ hỗ trợ bạn nhiệt tình trong suốt mùa bóng cũng như một người bạn đồng hành thực thụ cả trong cuộc sống thường ngày. Ngoài ra, với camera sau 13MP, chiếc Vivo Y81 cũng “không phải dạng vừa” trong lĩnh vực nhiếp ảnh đâu nhé. Hiện tại, Vivo Y81 chỉ còn 3.99 triệu đồng, giảm đến 700 nghìn đồng so với mức giá cũ.</p><div class=\"boxpin\" style=\"margin: 20px auto; padding: 10px 5px; border: 1px solid rgb(204, 204, 204); vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; height: auto; display: inline-block;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 226.078px; max-width: 640px; float: left;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y81\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><img src=\"https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/5/23/636626646179712812_1o.png\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; width: 150px; height: auto !important;\"></a></div><div class=\"infor\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px; float: right;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y81\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px;\">Vivo Y81</h3></a><figure class=\"desc\" style=\"padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style: none; width: 401.906px; max-width: 640px;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Màn Hình: 6.22 inch,&nbsp;1520 x 720 Pixels</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Camera: 13.0 MP/5.0 MP</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Ram:&nbsp;3GB</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">CPU :&nbsp;MT 6762,&nbsp;8 Nhân,&nbsp;2.0 GHz</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Pin:&nbsp;3260 mAh&nbsp;</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">HĐH:&nbsp;Funtouch OS 4.0 （Trên nền tảng Android 8.1）</li></ul></figure><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y81\" class=\"viewdetail\" style=\"margin: 5px 0px 0px; padding: 5px 15px; font-size: 14px; vertical-align: baseline; background-image: -webkit-linear-gradient(top, rgb(248, 148, 6), rgb(247, 107, 28)); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(255, 255, 255); border: 1px solid rgb(217, 127, 0); text-align: center; text-transform: uppercase; border-radius: 4px; display: inline-block;\">XEM CHI TIẾT</a></div></div><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: justify;\"><a class=\"btn_odn\" data-id=\"24284\" href=\"https://fptshop.com.vn/dien-thoai/vivo-y81-red\" target=\"_blank\" style=\"margin: 0px auto; padding: 0px; font-size: 15px; vertical-align: baseline; background: linear-gradient(rgb(236, 16, 16), rgb(218, 11, 0)) rgb(230, 13, 13); outline-style: none; outline-width: initial; color: rgb(255, 255, 255); width: 245px; height: 45px; line-height: 45px; text-align: center; text-transform: uppercase; border-radius: 5px; display: block;\">ĐẶT MUA VIVO Y81</a></strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/dien-thoai/vivo-y71\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214); font-weight: unset !important;\">Vivo Y71</a>&nbsp;– 3.09 triệu (Giảm 600 nghìn đồng)</strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Không đau to búa lớn, chỉ với thiết kế tràn màn hình FullviewTM 6 inch HD+, nhưng với một mức giá cực yêu thương từ trước thế nên không khó để Vivo Y71 chiếm được cảm tình người dùng. Dù “bình dân” nhưng chiếc Y71 được Vivo “cưng chiều” tích hợp hẳn hoi tính năng mở khóa bằng nhận diện khuôn mặt và công nghê AI Face Beauty cho những bức ảnh đẹp say đắm nhưng không kém phần chân thật.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Vivo%20%22B%C3%A3o%20Sale%22%20%C4%91%E1%BA%BFn%201%20tri%E1%BB%87u%20%C4%91%E1%BB%93ng,%20c%C3%B9ng%20tuy%E1%BB%83n%20Vi%E1%BB%87t%20Nam%20chinh%20ph%E1%BB%A5c%20AFF%20Cup\" title=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-3.jpg\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-3.jpg\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Ngoài ra, với chip Qualcomm mạnh mẽ, Y71 còn mang đến hiệu suất vận hành tương đối ổn định cho người dùng. Sản phẩm hiện tại có giá bán 3,09 triêu đồng, giảm đến 600 nghìn đồng.&nbsp;</p><div class=\"boxpin\" style=\"margin: 20px auto; padding: 10px 5px; border: 1px solid rgb(204, 204, 204); vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; height: auto; display: inline-block;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 226.078px; max-width: 640px; float: left;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y71\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><img src=\"https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/5/14/636619141962813844_1o.png\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; width: 150px; height: auto !important;\"></a></div><div class=\"infor\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px; float: right;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y71\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px;\">Vivo Y71</h3></a><figure class=\"desc\" style=\"padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style: none; width: 401.906px; max-width: 640px;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Màn Hình: 6.0 inch</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Camera: Chính: 8.0 MP, Phụ: 5.0 MP</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Pin: 3360 mAh</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Ram: 2 GB</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">CPU : Qualcomm Snapdragon 425</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">HĐH: Funtouch OS 4.0 （Trên nền tảng Android 8.1）</li></ul></figure><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-y71\" class=\"viewdetail\" style=\"margin: 5px 0px 0px; padding: 5px 15px; font-size: 14px; vertical-align: baseline; background-image: -webkit-linear-gradient(top, rgb(248, 148, 6), rgb(247, 107, 28)); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(255, 255, 255); border: 1px solid rgb(217, 127, 0); text-align: center; text-transform: uppercase; border-radius: 4px; display: inline-block;\">XEM CHI TIẾT</a></div></div><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\"><a class=\"btn_odn\" data-id=\"24176\" href=\"https://fptshop.com.vn/dien-thoai/vivo-y71\" target=\"_blank\" style=\"margin: 0px auto; padding: 0px; font-size: 15px; vertical-align: baseline; background: linear-gradient(rgb(236, 16, 16), rgb(218, 11, 0)) rgb(230, 13, 13); outline-style: none; outline-width: initial; color: rgb(255, 255, 255); width: 245px; height: 45px; line-height: 45px; font-weight: bold; text-transform: uppercase; border-radius: 5px; display: block;\">ĐẶT MUA VIVO Y71</a></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/dien-thoai/vivo-v9\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214); font-weight: unset !important;\">Vivo V9</a>&nbsp;– 6.49 triệu (Giảm 800 nghìn đồng)</strong></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Là chiếc điện thoại dòng V đã từng làm mưa làm gió thị trường smartphone Việt Nam nửa đầu năm nay, Vivo V9 vẫn luôn được tín nhiệm vì chất lượng sản phẩm và không ngừng nhận được những phản hồi tích cực từ người dùng. Khoác trên mình thiết kế “notch” thời thượng, Vivo V9 sở hữu màn hình tràn viền lên đến 6.3 inch FHD+, camera selfie tích hợp trí thông minh nhân tạo AI lên đến 24MP, một con số đủ để khẳng định độ sắc nét mượt mà cho từng góc ảnh. Camera sau kép tích hợp AI cùng với chế độ bokeh độc đáo mang đến trải nghiệm nhiếp ảnh chuyên nghiệp hơn.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Vivo%20%22B%C3%A3o%20Sale%22%20%C4%91%E1%BA%BFn%201%20tri%E1%BB%87u%20%C4%91%E1%BB%93ng,%20c%C3%B9ng%20tuy%E1%BB%83n%20Vi%E1%BB%87t%20Nam%20chinh%20ph%E1%BB%A5c%20AFF%20Cup\" title=\"Vivo &quot;Bão Sale&quot; đến 1 triệu đồng, cùng tuyển Việt Nam chinh phục AFF Cup\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-4.jpg\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76219/Originals/vivo-bao-sale-den-1-trieu-dong-cung-tuyen-viet-nam-chinh-phuc-aff-cup-4.jpg\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Ngoài ra, với chip xử lý Qualcomm 626 8 nhân, bạn sẽ chẳng cần phải chờ đợi quá lâu cho bất kì tiến trình xử lý nào trên chiếc V9 và luôn luôn có những trải nghiệm cực kỳ mượt mà. Hiện tại, khách hàng sẽ nhận được phiếu mua hàng trị giá 800 nghìn đồng và được trừ trực tiếp vào giá khi mua Vivo V9 tại bất kỳ cửa hàng FPT trên toàn quốc.</p><div class=\"boxpin\" style=\"margin: 20px auto; padding: 10px 5px; border: 1px solid rgb(204, 204, 204); vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; height: auto; display: inline-block;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 226.078px; max-width: 640px; float: left;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><img src=\"https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/4/20/636598349121977350_1o.png\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; width: 150px; height: auto !important;\"></a></div><div class=\"infor\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px; float: right;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px;\">Vivo V9</h3></a><figure class=\"desc\" style=\"padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style: none; width: 401.906px; max-width: 640px;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Màn Hình: 6.3 inch</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Camera: Chính: Dual 16.0 MP + 5.0 MP, Phụ: 24.0 MP</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Pin: 3260 mAh</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">Ram: 4 GB</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">CPU : Qualcomm Snapdragon 626</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; list-style-type: disc;\">HĐH: Android 8</li></ul></figure><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/vivo-v9\" class=\"viewdetail\" style=\"margin: 5px 0px 0px; padding: 5px 15px; font-size: 14px; vertical-align: baseline; background-image: -webkit-linear-gradient(top, rgb(248, 148, 6), rgb(247, 107, 28)); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(255, 255, 255); border: 1px solid rgb(217, 127, 0); text-align: center; text-transform: uppercase; border-radius: 4px; display: inline-block;\">XEM CHI TIẾT</a></div></div><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\"><a class=\"btn_odn\" data-id=\"23865\" href=\"https://fptshop.com.vn/dien-thoai/vivo-v9\" target=\"_blank\" style=\"margin: 0px auto; padding: 0px; font-size: 15px; vertical-align: baseline; background: linear-gradient(rgb(236, 16, 16), rgb(218, 11, 0)) rgb(230, 13, 13); outline-style: none; outline-width: initial; color: rgb(255, 255, 255); width: 245px; height: 45px; line-height: 45px; font-weight: bold; text-transform: uppercase; border-radius: 5px; display: block;\">ĐẶT MUA VIVO V9</a></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Nhanh tay cùng FPT săn sale khủng Vivo và hưởng ứng mua lễ hội bóng đá lớn nhất Đông Nam Á trong năm nay. Chương trình bắt đầu từ ngày 15/11 và số lượng khuyến mãi có hạn. Mọi thông tin chi tiết khách hàng vui lòng truy cập địa chỉ&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/vivo\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\">tại đây</a>&nbsp;để tham khảo và đặt mua Vivo nhé.</p></div>', 1);
INSERT INTO `new` (`id`, `postDate`, `title`, `logo`, `type`, `content`, `postEmpid`) VALUES
(2, '2018-11-17', 'Chân dung Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game', 'uploads/1542443938-3.JPG', 'tin-tuc-cong-nghe', '<h2 class=\"fs-newsdt-des\" style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.63; color: rgb(61, 61, 61); font-family: Arial, Helvetica, sans-serif; letter-spacing: normal;\">Ở bài viết này chúng ta sẽ tìm hiểu một sản phẩm mới nhất của Samsung. Hãy cùng FPT Shop trên tay Galaxy A9 (2018) - chiếc smartphone 4 camera đầu tiên trên thế giới</h2><ul class=\"fs-newsdt-vmore\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 10px 0px; border-width: 1px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: rgb(232, 232, 232); border-right-color: initial; border-bottom-color: rgb(232, 232, 232); border-left-color: initial; border-image: initial; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/5-smartphone-ban-chay-nhat-fpt-shop-tuan-vua-qua-77294\" title=\"5 smartphone bán chạy nhất FPT Shop tuần vừa qua\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">5 smartphone bán chạy nhất FPT Shop tuần vừa qua</a></h3></li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/cuoi-tuan-top-smartphone-ha-gia-soc-cuoi-tuan-sieu-pham-iphone-2018-giam-2-trieu-dong-77293\" title=\"Cuối tuần: Top smartphone hạ giá sốc cuối tuần, siêu phẩm iPhone 2018 giảm 2 triệu đồng\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">Cuối tuần: Top smartphone hạ giá sốc cuối tuần, siêu phẩm iPhone 2018 giảm 2 triệu đồng</a></h3></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background: transparent;\"><a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/dung-iphone-x-hay-iphone-8-da-hon-cau-tra-loi-se-co-o-day-77289\" title=\"Dùng iPhone X hay iPhone 8 &quot;đã&quot; hơn? Câu trả lời sẽ có ở đây\" style=\"margin: 0px; padding: 0px 0px 0px 25px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(51, 122, 183); display: inline-block; position: relative;\">Dùng iPhone X hay iPhone 8 \"đã\" hơn? Câu trả lời sẽ có ở đây</a></h3></li></ul><div class=\"fs-newsdt-cten clearfix\" style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; zoom: 1; line-height: 1.63; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;\"><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\">Samsung đang cho thấy họ muốn nâng cao trải nghiệm người dùng dùng khi mang những gì tốt nhất trên một smartphone cao cấp xuống các phân khúc điện thoại thấp hơn và dĩ nhiên là có mức giá dễ thở hơn. Ở bài viết này chúng ta sẽ tìm hiểu một sản phẩm như vậy, hãy cùng FPT Shop trên tay&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-a9-2018\" target=\"_blank\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214); font-weight: unset !important;\">Galaxy A9 2018</a>&nbsp;- chiếc smartphone 4 camera đầu tiên trên thế giới</strong></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Samsung Galaxy A9 2018 là chiếc smartphone dòng A thứ 4 được Samsung ra mắt thị trường Việt Nam trong năm này. Thiết bị này vẫn giữ được những nét đặc trưng của dòng A với thiết kế sang trọng, nhiều tính năng tiệm cận với dòng Note hay S.</p><p dir=\"ltr\" class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://fptshop.com.vn/tin-tuc/danh-gia/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-1.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-1.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Nói nhanh về&nbsp;<a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/tren-tay-nhanh-galaxy-a9-2018-smartphone-dau-tien-tren-the-gioi-co-4-camera-75080\" target=\"_blank\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\">thiết kế của Galaxy A9 2018</a>, Samsung tiếp tục sử dụng phong cách tạo hình nguyên khối với bộ khung kim loại cứng cáp kết hợp hợp hai mặt kính bóng bẩy làm tôn lên vẻ ngoài sang trọng, cứng cáp cho sản phẩm. Đây cũng là lối thiết kế tạo nên thành công của Samsung ở các dòng sản phẩm cao cấp, điển hình là Galaxy Note 8 và Note 9.</p><p dir=\"ltr\" class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-2.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-2.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">So với các sản phẩm tiền nhiệm của dòng A, Samsung A9 2018 trông nam tính và mạnh mẽ hơn với những đường nét thiết kế thẳng và vuông vắn. Thêm vào đó, các cạnh máy ở mặt lưng cũng được bo tròn nhẹ và ôm sát vào phần khung nhằm tạo nên sự mềm mại cho sản phẩm, giúp người dùng dễ dàng cầm nắm hơn.</p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Máy sẽ có 3 phiên bản màu với màu hồng Bubblegum, màu xanh Lemonade , màu đen Caviar sang trọng, lịch lãm. Với thiết kế mặt lưng bằng kính sẽ bám khá nhiều dấu vân tay nên việc trang bị cho máy một chiếc ốp lưng là một lựa chọn đáng nghĩ tới cho người sử dụng.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-5.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-5.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\">Cạnh phải máy là nút âm lượng và nút nguồn</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-6.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-6.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\">Bên trái mấy là nút hỗ trợ Bixby</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-7.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-7.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\">Jack audio 3,5mm cùng loa và cổng sạc đều bố trí ở đáy máy</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-8.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-8.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: center;\">Máy hỗ trợ hai SIM với khay đựng SIM đặt phía đỉnh máy.</p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Mặt trước là nơi chứa màn hình 18.5:9 với kích thước lớn lên đến 6.3 inch, độ phân giải FullHD+ và sử dụng tấm nền Super AMOLED cho màu sắc đậm đà, màu đen rất sâu, các gam màu tương phản cao cho khả năng hiển thị hình ảnh rực rỡ và nịnh mắt, phù hợp với nhu cầu giải trí đa phương tiện của người dùng.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-3.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-3.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Phía mặt lưng nổi bật với cụm camera lối với 4 cảm biến đặt dọc theo thân máy, ngay bên dưới camera là đèn flash led. Cảm biến vân tay được đặt ở giữa mặt lưng phía trên logo Samsung. Như đã nói, Galaxy A9 (2018) là thiết bị đầu tiên trên thế giới sở hữu hệ thống 4 camera được xếp dọc ở mặt lưng. Trong đó bao gồm:</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-10.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-10.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">- Camera chính có độ phân giải 24MP và khẩu độ lớn f/1.7 giúp camera của Galaxy A9 (2018) có thể chụp tốt ngay cả trong môi trường thiếu sáng.</p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">- Camera tele có độ phân giải 10MP, khẩu độ f/2.4 có khả năng zoom quang 2x và đem tới những khuôn hình chân thực hơn khi chụp ảnh chân dung.</p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">- Camera góc rộng với ống kính rộng 120 độ với độ phân giải 8MP này sẽ giúp người dùng &nbsp;dễ dàng thu được những bức ảnh phong cảnh.</p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">- Depth camera có độ phân giải 5MP và khẩu độ F/2.2,được sử dụng để tính toán độ sâu trường ảnh khi các camera thực hiện tác vụ chụp xóa phông vật lý.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://admintintuc.fptshop.com.vn/Admin/Article/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-9.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-9.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Camera và thiết kế chưa phải là tất cả khi nói về Galaxy A9 2018, thiết bị này được trang bị Qualcomm Snapdragon 660 tám nhân, xung nhịp 2.2 GHz - chắc chắn khả năng xử lý 3D sẽ tốt hơn các vi xử lý Exynos trong cùng phân khúc. Máy sẽ được trang bị RAM lên tới 6GB và bộ nhớ trong lên tới 128GB, người dùng hoàn toàn thoải mái lưu trữ dữ liệu dù thiết bị này còn cho phép mở rộng tới 512GB thông qua thẻ nhớ ngoài. Viên pin dung lượng 3.800 mAh phụ trách cung cấp năng lượng hoạt động cho thiết bị.</p><p class=\"fsnewrm\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; text-align: center; max-width: 640px; width: 840px;\"><img alt=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" longdesc=\"https://fptshop.com.vn/tin-tuc/danh-gia/Chi%20ti%E1%BA%BFt%20v%E1%BB%81%20Samsung%20Galaxy%20A9%20(2018):%20Thi%E1%BA%BFt%20k%E1%BA%BF%20nh%C6%B0%20Note9,%204%20camera%20m%E1%BA%B7t%20l%C6%B0ng,%20chip%20kh%E1%BB%8Fe%20%C4%91%E1%BB%83%20ch%C6%A1i%20game\" title=\"Chi tiết về Samsung Galaxy A9 (2018): Thiết kế như Note9, 4 camera mặt lưng, chip khỏe để chơi game\" class=\"lazy\" data-original=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-11.JPG\" src=\"https://fptshop.com.vn/uploads/images/tin-tuc/76016/Originals/chi-tiet-ve-samsung-galaxy-a9-2018-thiet-ke-nhu-note9-4-camera-mat-lung-chip-khoe-de-choi-game-11.JPG\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Samsung A9 2018 sẽ được cài sẵn hệ điều hành Android 8.0 Oreo và hàng loạt các tính năng độc quyền từ Samsung như: Samsung Themes, Secure Folder, Bảo Trì Thiết Bị, màn hình Always On và nhiều tính năng thú vị khác nữa. Ngoài ra, A9 2018 cũng hỗ trợ thanh toán qua Samsung Pay.</p><div class=\"boxpin\" style=\"margin: 20px auto; padding: 10px 5px; border: 1px solid rgb(204, 204, 204); vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; height: auto; display: inline-block;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 226.078px; max-width: 640px; float: left;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/samsung-galaxy-a9-2018-a\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><img src=\"https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/10/11/636748642005088110_111.jpg\" style=\"margin: 0px; padding: 0px; background: transparent; max-width: 100%; width: 150px; height: auto !important;\"></a></div><div class=\"infor\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px; float: right;\"><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/samsung-galaxy-a9-2018-a\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(40, 138, 214);\"><h3 style=\"margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-weight: bold; vertical-align: baseline; background: transparent; width: 401.906px; max-width: 640px;\">Samsung Galaxy A9 (2018)</h3></a><figure class=\"desc\" style=\"padding: 0px; border: 0px; vertical-align: baseline; background: transparent;\"></figure><a target=\"_blank\" href=\"http://fptshop.com.vn/dien-thoai/samsung-galaxy-a9-2018-a\" class=\"viewdetail\" style=\"margin: 5px 0px 0px; padding: 5px 15px; font-size: 14px; vertical-align: baseline; background-image: -webkit-linear-gradient(top, rgb(248, 148, 6), rgb(247, 107, 28)); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline-style: none; outline-width: initial; color: rgb(255, 255, 255); border: 1px solid rgb(217, 127, 0); text-align: center; text-transform: uppercase; border-radius: 4px; display: inline-block;\">XEM CHI TIẾT</a></div></div><p dir=\"ltr\" style=\"margin: 20px auto; padding: 0px; border: 0px; vertical-align: baseline; background: transparent; width: 640px; max-width: 640px; text-align: justify;\">Galaxy A9 2018 dự kiến sẽ ra mắt thị trường Việt Nam trong thời gian tới với mức giá chưa được tiết lộ.</p></div>', 1),
(3, '2018-11-17', 'Swagbucks: Phụ nữ muốn có iPhone Xs, nam giới thì chờ Galaxy S10', 'uploads/1542458019-1.jpg', 'tin-tuc-cong-nghe', '<div class=\"imgwrap\" style=\"margin: 5px 0px 0px; padding: 0px; position: relative; min-height: 100px; background: rgb(241, 241, 241); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><img alt=\"Galaxy S10\" src=\"https://cdn.tgdd.vn/Files/2018/11/11/1130536/front-camera_800x464.jpg\" style=\"margin: 0px auto; padding: 0px; display: block; width: auto; height: auto; max-width: 100%;\"></div><div class=\"captionnews\" style=\"margin: 0px 0px 15px; padding: 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: italic; text-align: center; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Concept về Galaxy S10</div><h2 style=\"margin-right: auto; margin-bottom: 20px; margin-left: auto; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1; width: 600px; letter-spacing: normal;\">Hiện tại, chúng ta đã bước vào mùa mua sắm cuối năm và theo thông tin từ một cuộc khảo sát từ&nbsp;<a href=\"https://www.androidheadlines.com/2018/11/women-iphone-xs-men-galaxy-s10.html\" rel=\"nofollow\" target=\"_blank\" title=\"Vào bài nguồn\" type=\"Vào bài nguồn\" style=\"margin: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; color: rgb(40, 138, 214); outline-style: none; outline-width: initial; zoom: 1;\">Swagbucks</a>&nbsp;thì: Người dùng Mỹ đang bị phân vân giữa 2 thương hiệu lớn là&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"iPhone Apple\" type=\"iPhone Apple\" style=\"margin: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 18px; color: rgb(40, 138, 214); outline-style: none; outline-width: initial; zoom: 1;\">Apple</a>&nbsp;và Samsung, trong khi đó một số người cũng thay đổi kế hoạch nâng cấp smartphone mới lâu hơn một chút.</h2><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Cụ thể, có 32% người dùng trưởng thành ủng hộ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung?g=android\" target=\"_blank\" title=\"Smartphone Samsung\" type=\"Smartphone Samsung\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">smartphone Samsung</a>&nbsp;còn thanh thiếu niên, các bạn trẻ thì thích iPhone của Apple hơn - chiếm đến 51%.</p><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Song song đó, có khoảng 20% ủng hộ và muốn mua ngay&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-xs\" target=\"_blank\" title=\"Điện thoại iPhone Xs 64GB\" type=\"Điện thoại iPhone Xs 64GB\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">iPhone Xs</a>&nbsp;là phụ nữ, trong khi 26% người dùng là nam giới đang chờ đợi chiếc smartphone tin đồn -&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s10\" target=\"_blank\" title=\"Điện thoại Samsung Galaxy S10\" type=\"Điện thoại Samsung Galaxy S10\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Galaxy S10</a>&nbsp;(nhiều hơn mức 10% người muốn mua sản phẩm đang có trên thị trường,&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s9\" target=\"_blank\" title=\"Galaxy S9\" type=\"Galaxy S9\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Galaxy S9</a>).</p><div class=\"imgwrap\" style=\"margin: 5px 0px 0px; padding: 0px; position: relative; min-height: 100px; background: rgb(241, 241, 241); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><img alt=\"Khảo sát 1\" data-original=\"https://cdn.tgdd.vn/Files/2018/11/17/1131883/khaosat1_800x213.jpg\" title=\"Khảo sát 1\" class=\"\" src=\"https://cdn.tgdd.vn/Files/2018/11/17/1131883/khaosat1_800x213.jpg\" style=\"margin: 0px auto; padding: 0px; display: block; width: auto; height: auto; max-width: 100%;\"></div><div class=\"captionnews\" style=\"margin: 0px 0px 15px; padding: 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: italic; text-align: center; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Phần kết quả khảo sát giữa phái mạnh và phát đẹp về câu hỏi \"Chiếc smartphone nào bạn muốn nhận được nhất?\"</div><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Mặc dù đây chỉ là một cuộc khảo sát trên phạm vi nhỏ ở Mỹ, nhưng nó cũng phản ánh khá đúng các báo cáo về việc doanh số và số lô hàng smartphone xuất đi sẽ giảm trong quý 3/2018.</p><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><a rel=\"nofollow\" href=\"https://www.androidheadlines.com/2018/11/smartphone-shipments-q3-2018-report.html\" target=\"_blank\" title=\"Vào bài dẫn chứng\" type=\"Vào bài dẫn chứng\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Theo số liệu từ IDC (do AndroidHeadlines dẫn lại)</a>, nếu so với năm ngoái thì số lô hàng đã giảm đi 6%, đặc biệt là ở Trung Quốc - thị trường tiêu thụ điện thoại khá lớn cũng báo cáo mức giảm khá cao, lên đến 11%.</p><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Quay trở lại với khảo sát của&nbsp;Swagbucks, khi được hỏi \"có muốn nhận được điện thoại mới trong mùa lễ hội cuối năm không?\" thì hầu như chỉ có các bạn trẻ là hào hứng, chiếm 32% còn người lớn tuổi thì chỉ chiếm 19%.</p><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Ngược lại, nhóm khách hàng trưởng thành lại thích nhận một món quà là&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\"Laptop chính hãng tại TGDĐ\" type=\"Laptop chính hãng tại TGDĐ\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">laptop</a>&nbsp;hay PC với 21% thay vì chỉ 18% thanh thiếu niên muốn sở hữu một thiết bị lớn hơn smartphone. Ngoài ra,&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang\" target=\"_blank\" title=\"Máy tính bảng chính hãng tại TGDĐ\" type=\"Máy tính bảng chính hãng tại TGDĐ\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">máy tính bảng</a>&nbsp;cũng được 16% người trẻ và 11% người lớn lựa chọn làm công cụ giải trí trong mùa nghỉ dưỡng cuối năm.</p><div class=\"imgwrap\" style=\"margin: 5px 0px 0px; padding: 0px; position: relative; min-height: 100px; background: rgb(241, 241, 241); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><img alt=\"Khảo sát 2\" data-original=\"https://cdn.tgdd.vn/Files/2018/11/17/1131883/khaosat2_800x235.jpg\" title=\"Khảo sát 2\" class=\"\" src=\"https://cdn.tgdd.vn/Files/2018/11/17/1131883/khaosat2_800x235.jpg\" style=\"margin: 0px auto; padding: 0px; display: block; width: auto; height: auto; max-width: 100%;\"></div><div class=\"captionnews\" style=\"margin: 0px 0px 15px; padding: 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: italic; text-align: center; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Phần kết quả khảo sát giữa nhóm người trưởng thành &amp; thanh thiếu niên về câu hỏi \"Bạn thích nhận được món quà nào mà không phải đồ công nghệ?\"</div><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Dĩ nhiên, bên cạnh số người muốn mua hoặc tặng đồ điện tử thì cũng không ít người dùng thích những món đồ \"phi công nghệ\". Như ảnh bên trên các bạn có thể thấy, có đến 37% người trưởng thành và 30% thanh thiếu niên muốn nhận được Gift Card (thẻ quà tặng) ngoài ra còn quần áo, phụ kiện cá nhân,...</p><p style=\"margin: 20px auto; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricPrecision; width: 600px; font-size: 16px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\">Không biết nếu là bạn, bạn sẽ chọn mua smartphone mới ngay trong cuối năm hay chờ những sản phẩm mới sẽ ra mắt trong năm tới? Hoặc các bạn sẽ chọn cho mình những món quà không phải đồ hi-tech? Hãy chia sẻ cùng mình và mọi người nhé!</p>', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase` float NOT NULL,
  `price` float NOT NULL,
  `discountPercent` int(11) DEFAULT NULL,
  `productType` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `weight` float DEFAULT NULL,
  `madein` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `imagesurl` mediumtext COLLATE utf8_vietnamese_ci,
  `gift` tinytext COLLATE utf8_vietnamese_ci,
  `description` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `smartdevice`
--

CREATE TABLE `smartdevice` (
  `id` int(11) NOT NULL,
  `firstcamera` tinytext COLLATE utf8_vietnamese_ci,
  `second` tinytext COLLATE utf8_vietnamese_ci,
  `chipset` tinytext COLLATE utf8_vietnamese_ci,
  `gpu` tinytext COLLATE utf8_vietnamese_ci,
  `ram` tinytext COLLATE utf8_vietnamese_ci,
  `connections` tinytext COLLATE utf8_vietnamese_ci,
  `memory` tinytext COLLATE utf8_vietnamese_ci,
  `battery` tinytext COLLATE utf8_vietnamese_ci,
  `design` tinytext COLLATE utf8_vietnamese_ci,
  `utility` tinytext COLLATE utf8_vietnamese_ci,
  `screen` tinytext COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(11) NOT NULL,
  `sim` tinytext COLLATE utf8_vietnamese_ci,
  `productid` int(11) DEFAULT NULL,
  `smartdeviceid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `sim` tinytext COLLATE utf8_vietnamese_ci,
  `productid` int(11) DEFAULT NULL,
  `smartdeviceid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `phonenumber` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `avatar`, `username`, `password`, `fullname`, `role`, `phonenumber`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1542432200-Hinh Nen 20.jpg', 'giang', '1', 'Giang Nguyễn Hoàng', 0, '0358215007', 'giangnguyenhoangda@gmail.com', NULL, NULL, '2018-11-03 01:46:36', '2018-11-16 22:23:35'),
(2, 'uploads/1542432164-Hinh Nen 12.jpg', 'ruanjiang', '1', 'Nguyễn Hoàng Giang', 0, '0358215007', 'nguyenhoanggiangda@gmail.com', NULL, NULL, '2018-11-16 21:27:43', '2018-11-16 22:22:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `billitem`
--
ALTER TABLE `billitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `billid` (`billid`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_new_href`
--
ALTER TABLE `comment_new_href`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentid` (`commentid`),
  ADD KEY `newid` (`newid`);

--
-- Chỉ mục cho bảng `comment_product_href`
--
ALTER TABLE `comment_product_href`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `commentid` (`commentid`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `smartdeviceid` (`smartdeviceid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postEmpid` (`postEmpid`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `smartdevice`
--
ALTER TABLE `smartdevice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `smartdeviceid` (`smartdeviceid`);

--
-- Chỉ mục cho bảng `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `smartdeviceid` (`smartdeviceid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `billitem`
--
ALTER TABLE `billitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment_new_href`
--
ALTER TABLE `comment_new_href`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment_product_href`
--
ALTER TABLE `comment_product_href`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `smartdevice`
--
ALTER TABLE `smartdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accessory`
--
ALTER TABLE `accessory`
  ADD CONSTRAINT `accessory_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `billitem`
--
ALTER TABLE `billitem`
  ADD CONSTRAINT `billitem_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `billitem_ibfk_2` FOREIGN KEY (`billid`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `comment_new_href`
--
ALTER TABLE `comment_new_href`
  ADD CONSTRAINT `comment_new_href_ibfk_1` FOREIGN KEY (`commentid`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `comment_new_href_ibfk_2` FOREIGN KEY (`newid`) REFERENCES `new` (`id`);

--
-- Các ràng buộc cho bảng `comment_product_href`
--
ALTER TABLE `comment_product_href`
  ADD CONSTRAINT `comment_product_href_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_product_href_ibfk_2` FOREIGN KEY (`commentid`) REFERENCES `comment` (`id`);

--
-- Các ràng buộc cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `laptop_ibfk_2` FOREIGN KEY (`smartdeviceid`) REFERENCES `smartdevice` (`id`);

--
-- Các ràng buộc cho bảng `new`
--
ALTER TABLE `new`
  ADD CONSTRAINT `new_ibfk_1` FOREIGN KEY (`postEmpid`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `smartphone`
--
ALTER TABLE `smartphone`
  ADD CONSTRAINT `smartphone_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `smartphone_ibfk_2` FOREIGN KEY (`smartdeviceid`) REFERENCES `smartdevice` (`id`);

--
-- Các ràng buộc cho bảng `tablet`
--
ALTER TABLE `tablet`
  ADD CONSTRAINT `tablet_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `tablet_ibfk_2` FOREIGN KEY (`smartdeviceid`) REFERENCES `smartdevice` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
