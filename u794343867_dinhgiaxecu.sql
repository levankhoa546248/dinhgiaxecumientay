/*
Navicat MySQL Data Transfer

Source Server         : u794343867_dinhgiaxecu
Source Server Version : 50505
Source Host           : sql354.main-hosting.eu:3306
Source Database       : u794343867_dinhgiaxecu

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-12-10 17:20:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for advertise
-- ----------------------------
DROP TABLE IF EXISTS `advertise`;
CREATE TABLE `advertise` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of advertise
-- ----------------------------

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT 'đường dẫn hình ảnh',
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luotxem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `nguoidang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '0-Không hiển thị lên top; 1-Hiển thị lên top',
  `chitiet` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai` int(11) DEFAULT 0 COMMENT '0-Tin tức ô tô; 1-Tin tức hãng xe',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', 'car/images/blog/honda-oto-can-tho-thay-lop-xe.jpg', 'Honda ô tô Cần Thơ: Thay lốp tặng gối', '500', '2020-12-02 17:35:44', '56', '1', '<div class=\"entry-content\"><p>Đại lý 5S Honda ô tô Cần Thơ xin giới thiệu sản phẩm lốp thay thế mới RE (Recommended tire). Chương trình “Thay lốp êm lái – Tặng gối êm ái”.</p><p><span id=\"more-21394\"></span></p><p>Không chỉ gây ấn tượng bởi thiết kế mạnh mẽ, phóng khoáng, lốp RE còn nổi bật với những đặc tính: Đoạn đường phanh ngắn hơn, an toàn hơn; Tuổi tho cao; Công nghệ chống trơn trượt đảm bảo an toàn trong mọi điều kiện thời tiết và địa hình.</p><h2><span style=\"color: #800000;\"><strong>HONDA Ô TÔ CẦN THƠ: THAY LỐP RE TẶNG GỐI</strong></span></h2><p>Đặc biệt, khách hàng lựa chọn lốp RE còn tiết kiệm chi phí tới 33% so với thay lốp theo xe mà vẫn được hưởng thời gian bảo hành tương đương: 5 năm.</p><p>Để tri ân khách hàng Honda nhân dịp ra mắt sản phẩm mới, Công ty Honda Việt Nam phối hợp với Nhà sản xuất lốp Công ty TNHH Lốp xe Goodyear Việt Nam xin thông báo chương trình khuyến mại hấp dẫn:</p><p>1. Tên chương trình khuyến mại: “Thay lốp êm lái – Nhận gối êm ái”</p><p>1. Thời gian khuyến mại: Từ ngày 09/11/2020 đến hết ngày 31/01/2021.</p><p>2. Phạm vi khuyến mại: Toàn bộ Nhà Phân phối Ô tô do Công ty Honda Ủy nhiệm trên toàn quốc</p><p>3. Hàng hóa, dịch vụ được khuyến mại: Lốp RE do Goodyear cung cấp thuộc các mã sau:</p><table class=\"table table-striped table-bordered table-hover\"><thead  class=\"bg-primary\"><tr><th><strong>STT</strong></th><th><strong>Mã Phụ tùng</strong></th><th><strong>Tên Phụ tùng (E)</strong></th><th><strong>Tên Phụ tùng (V)</strong></th></tr></thead><tbody><tr><td>1</td><td>42751TG0GY0</td><td>TIRE 175/65R15 84H (GOODYEAR)</td><td>Lốp xe 175/65R15 84H (GOODYEAR)</td></tr><tr><td>2</td><td>42751TG0GY1</td><td>TIRE 185/55R16 83V (GOODYEAR)</td><td>Lốp xe 185/55R16 83V (GOODYEAR)</td></tr><tr><td>3</td><td>42751T8NGY0</td><td>TIRE 215/55R17 94V (GOODYEAR)</td><td>Lốp xe 215/55R17 94V (GOODYEAR)</td></tr><tr><td>4</td><td>42751TEXGY1</td><td>TIRE 215/50R17 95W (GOODYEAR)</td><td>Lốp xe 215/50R17 95W (GOODYEAR)</td></tr><tr><td>5</td><td>42751TEXGY0</td><td>TIRE 215/55R16 93V (GOODYEAR)</td><td>Lốp xe 215/55R16 93V (GOODYEAR)</td></tr><tr><td>6</td><td>42751TEAGY0</td><td>TIRE 215/50R17 95W (GOODYEAR)</td><td>Lốp xe 215/50R17 95W (GOODYEAR)</td></tr><tr><td>7</td><td>42751SWGGY0</td><td>TIRE 225/65R17 102H (GOODYEAR)</td><td>Lốp xe 225/65R17 102H (GOODYEAR)</td></tr><tr><td>8</td><td>42751T0AGY0</td><td>TIRE 225/60R18 100V (GOODYEAR)</td><td>Lốp xe 225/60R18 100V (GOODYEAR)</td></tr></tbody></table><p>4. Hàng hóa, dịch vụ khuyến mại: Gối tựa đầu dùng trên ô tô</p><p>5. Đối tượng hưởng khuyến mại: Khách hàng mua/ thay lốp thuộc danh sách lốp ở Điều 4 tại các Nhà Phân phối Ô tô do Công ty Honda Ủy nhiệm trên toàn quốc.</p><p>6. Nội dung chi tiết chương trình:</p><p>Khi mua/ thay 01 lốp thuộc danh sách lốp ở Điều 4 tại các Nhà Phân phối Ô tô do Công ty Honda Ủy nhiệm trên toàn quốc, Khách hàng nhận ngay số 01 gối tựa đầu dùng trên ô tô.</p><p>Còn chần chừ gì nữa. Đến ngay các Nhà phân phối ô tô Honda trên toàn quốc để tham gia hoặc biết thêm thông tin chi tiết.</p><p></p><blockquote class=\"c-info-140618\"><h2><span style=\"color: #800000;\"><strong>ĐẠI LÝ 5S Ô TÔ HONDA CẦN THƠ</strong></span></h2><ul><li>Địa chỉ: E1-1 Đường Võ Nguyên Giáp, khu vực Thạnh Lợi, phường Phú Thứ, quận Cái Răng, Tp. Cần Thơ.</li><li>Hotline:&nbsp;<span style=\"color: #ff6600;\"><span style=\"color: #008000;\"><a style=\"color: #008000;\" href=\"tel://0913839595\"><strong>091.383.9595</strong></a></span>&nbsp;<span style=\"color: #000000;\">(Mr. Tuấn Anh).</span></span></li></ul><p>Không chỉ là Đại lý 3S như các hãng khác, Honda ô tô Cần Thơ đạt chuẩn <strong>5S </strong>đầu tiên tại 13 tỉnh miền Tây. Đây là là một trong những điểm khác biệt tiêu biểu của Honda, các dịch vụ tiêu chuẩn đạt lên con số 5, cụ thể là:</p><ul><li>Showroom (Sales): cửa hàng kinh doanh các dòng xe chính hãng Honda.</li><li>Service: quy trình bảo hành bảo dưỡng, sửa chữa chuẩn.</li><li>Spare parts: cung cấp phụ tùng, phụ kiện chính hãng.</li><li>Safety driving: hướng dẫn lái xe an toàn.</li><li>Social contributions: hoạt động đóng góp xã hội.</li></ul><p style=\"text-align: center; background: #000; line-height: 300%;\"><span style=\"color: #ffff00;\"><strong><a style=\"color: #ffff00;\" href=\"tel:0913839595\">TƯ VẤN: 091.383.9595</a></strong></span></p><hr><p>Xem thêm: <a href=\"https://canthoauto.com/thuong-hieu/honda/\">Đánh giá chi tiết các dòng xe Honda</a>.</p></blockquote><div class=\"goc-chuyen-vien-box-1\"><p><a href=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39.jpg\" target=\"_blank\" rel=\"noopener noreferrer\"><noscript><img data-lazyloaded=\"1\" src=\"data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=\" class=\"aligncenter wp-image-15431 size-medium\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg\" alt=\"Chuyên viên tư vấn ô tô Honda Cần Thơ\" width=\"620\" height=\"620\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-100x100.jpg 100w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-300x300.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-768x768.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-330x330.jpg 330w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39.jpg 900w\" data-sizes=\"(max-width: 620px) 100vw, 620px\" /><noscript><img class=\"aligncenter wp-image-15431 size-medium\" src=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg\" alt=\"Chuyên viên tư vấn ô tô Honda Cần Thơ\" width=\"620\" height=\"620\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-100x100.jpg 100w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-300x300.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-768x768.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-330x330.jpg 330w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39.jpg 900w\" sizes=\"(max-width: 620px) 100vw, 620px\" /></noscript><img class=\"aligncenter wp-image-15431 size-medium lazyloaded\" src=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg\" alt=\"Chuyên viên tư vấn ô tô Honda Cần Thơ\" width=\"620\" height=\"620\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-100x100.jpg 100w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-300x300.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-768x768.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-330x330.jpg 330w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39.jpg 900w\" data-sizes=\"(max-width: 620px) 100vw, 620px\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-620x620.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-100x100.jpg 100w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-300x300.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-768x768.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39-330x330.jpg 330w, https://canthoauto.com/wp-content/uploads/2019/06/chuyen-vien-tu-van-o-to-honda-can-tho-39.jpg 900w\"></a></p></div><div class=\"goc-chuyen-vien-box-2\"><blockquote><p><a href=\"https://canthoauto.com/chuyen-vien-tu-van-honda/\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Mr. Tuấn Anh – Chuyên viên tư vấn Honda ô tô Cần Thơ:</strong></a></p><ul><li>Chăm sóc khách hàng &amp; chi tiết về các dòng xe ô tô Honda ;</li><li>Giá xe chuẩn &amp; chương trình khuyến mãi mới nhất – ưu đãi nhất ;</li><li>Hỗ trợ đăng ký lái thử tận nhà ;</li><li>Hỗ trợ mua xe trả góp (lên đến 85% giá trị xe) với lãi suất thấp, thủ tục đơn giản ;</li><li>Tư vấn tận tâm, chăm sóc khách hàng &amp; dịch vụ hậu mãi hấp dẫn.</li></ul><p><strong>Điện thoại tư vấn:&nbsp;</strong><span style=\"color: #ff6600;\"><span style=\"color: #008000;\"><a style=\"color: #008000;\" href=\"tel://0913839595\"><strong>091.383.9595</strong></a></span></span></p></blockquote></div><div style=\"clear: both;\"></div><p>Tháng 11/2020, khách hàng mua 2 dòng xe của Honda ô tô là CR-V và HR-V sẽ được ưu đãi giảm 50% phí trước bạ. Như vậy cùng với nghị định 70/2020 của chính phủ, Honda CR-V 2020 sẽ được hỗ trợ 100% phí trước bạ do là dòng xe được lắp ráp trong nước.</p><p>Thời gian ưu đãi từ ngày 12/10/2020 đến hết tháng 12/2020.</p><figure id=\"attachment_21142\" aria-describedby=\"caption-attachment-21142\" style=\"width: 900px\" class=\"wp-caption aligncenter\"><a href=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg\"><noscript><img data-lazyloaded=\"1\" src=\"data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=\" class=\"size-full wp-image-21142\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg\" alt=\"Đại lý sẽ hỗ trợ 50% lệ phí trước bạ còn lại cho khách hàng mua xe Honda CR-V. Khuyến mãi Honda ô tô mới tháng 10 năm 2020.\" width=\"900\" height=\"600\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-600x400.jpg 600w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-620x413.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-300x200.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-768x512.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-330x220.jpg 330w\" data-sizes=\"(max-width: 900px) 100vw, 900px\" /><noscript><img class=\"size-full wp-image-21142\" src=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg\" alt=\"Đại lý sẽ hỗ trợ 50% lệ phí trước bạ còn lại cho khách hàng mua xe Honda CR-V. Khuyến mãi Honda ô tô mới tháng 10 năm 2020.\" width=\"900\" height=\"600\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-600x400.jpg 600w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-620x413.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-300x200.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-768x512.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-330x220.jpg 330w\" sizes=\"(max-width: 900px) 100vw, 900px\" /></noscript><img class=\"size-full wp-image-21142 lazyloaded\" src=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg\" alt=\"Đại lý sẽ hỗ trợ 50% lệ phí trước bạ còn lại cho khách hàng mua xe Honda CR-V. Khuyến mãi Honda ô tô mới tháng 10 năm 2020.\" width=\"900\" height=\"600\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-600x400.jpg 600w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-620x413.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-300x200.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-768x512.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-330x220.jpg 330w\" data-sizes=\"(max-width: 900px) 100vw, 900px\" sizes=\"(max-width: 900px) 100vw, 900px\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-600x400.jpg 600w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-620x413.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-300x200.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-768x512.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/honda-cr-v-chuong-trinh-khuyen-mai-honda-can-tho-5s-330x220.jpg 330w\"></a><figcaption id=\"caption-attachment-21142\" class=\"wp-caption-text\">Đại lý sẽ hỗ trợ 50% lệ phí trước bạ còn lại cho khách hàng mua xe Honda CR-V.</figcaption></figure><figure id=\"attachment_21159\" aria-describedby=\"caption-attachment-21159\" style=\"width: 900px\" class=\"wp-caption aligncenter\"><a href=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg\"><noscript><img data-lazyloaded=\"1\" src=\"data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=\" class=\"size-full wp-image-21159\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg\" alt=\"Chương trình hỗ trợ cho Honda CR-V và cả Honda HR-V\" width=\"900\" height=\"516\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-620x355.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-300x172.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-768x440.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-330x189.jpg 330w\" data-sizes=\"(max-width: 900px) 100vw, 900px\" /><noscript><img class=\"size-full wp-image-21159\" src=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg\" alt=\"Chương trình hỗ trợ cho Honda CR-V và cả Honda HR-V\" width=\"900\" height=\"516\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-620x355.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-300x172.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-768x440.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-330x189.jpg 330w\" sizes=\"(max-width: 900px) 100vw, 900px\" /></noscript><img class=\"size-full wp-image-21159 lazyloaded\" src=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg\" data-src=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg\" alt=\"Chương trình hỗ trợ cho Honda CR-V và cả Honda HR-V\" width=\"900\" height=\"516\" data-srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-620x355.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-300x172.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-768x440.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-330x189.jpg 330w\" data-sizes=\"(max-width: 900px) 100vw, 900px\" sizes=\"(max-width: 900px) 100vw, 900px\" srcset=\"https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto.jpg 900w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-620x355.jpg 620w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-300x172.jpg 300w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-768x440.jpg 768w, https://canthoauto.com/wp-content/uploads/2019/10/khuyen-mai-crv-hrv-50-phi-truoc-ba-auto-330x189.jpg 330w\"></a><figcaption id=\"caption-attachment-21159\" class=\"wp-caption-text\">Chương trình hỗ trợ cho Honda CR-V và cả Honda HR-V</figcaption></figure><p>Quý khách hàng mua xe tại Đại lý Honda Cần Thơ sẽ được hưởng nhiều phần quà giá trị hấp dẫn. Ưu đãi trả góp lên đến 85% với lãi suất thấp.</p><p></p><hr><p>Từ khóa trong bài viết: <span style=\"color: #999999;\">honda ô tô cần thơ, ô tô honda khuyến mãi</span>. Tags: <strong><span style=\"color: #008000;\"><a style=\"color: #008000;\" href=\"https://canthoauto.com/honda-crv-2020-moi/\">honda cr-v</a>, <a style=\"color: #008000;\" href=\"https://canthoauto.com/honda-hr-v/\">honda hr-v</a>, <a style=\"color: #008000;\" href=\"https://canthoauto.com/honda-city/\">honda city</a>, <a style=\"color: #008000;\" href=\"https://canthoauto.com/honda-civic/\">honda civic</a></span></strong>. CW by Admin 19 Nov 20.</p><div class=\"canth-sau-noi-dung\" id=\"canth-1109592978\"> <ins class=\"adsbygoogle\" style=\"display: block; text-align: center; height: 200px;\" data-ad-client=\"ca-pub-3536498916271539\" data-ad-slot=\"3701461429\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-adsbygoogle-status=\"done\"><ins id=\"aswift_1_expand\" style=\"display:inline-table;border:none;height:200px;margin:0;padding:0;position:relative;visibility:visible;width:810px;background-color:transparent;\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_1_anchor\" style=\"display:block;border:none;height:200px;margin:0;padding:0;position:relative;visibility:visible;width:810px;background-color:transparent;\"><iframe id=\"aswift_1\" name=\"aswift_1\" style=\"left:0;position:absolute;top:0;border:0;width:810px;height:200px;\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"810\" height=\"200\" frameborder=\"0\" src=\"https://googleads.g.doubleclick.net/pagead/ads?guci=2.2.0.0.2.2.0.0&amp;client=ca-pub-3536498916271539&amp;output=html&amp;h=200&amp;slotname=3701461429&amp;adk=3788031658&amp;adf=20844034&amp;pi=t.ma~as.3701461429&amp;w=810&amp;fwrn=4&amp;lmt=1607503690&amp;rafmt=11&amp;psa=1&amp;format=810x200&amp;url=https%3A%2F%2Fcanthoauto.com%2Fhonda-o-to-can-tho-thay-lop%2F&amp;flash=0&amp;wgl=1&amp;adsid=ChEIgIjC_gUQ77SS_eHq_PfPARJMAJK01yXmg3PlPjhnI2qU2x3ZxIXGVJfF9Qu4jGQxcIjnDSuOWOJxfbw6-EkJvVPgy1YzI9M5rnWDTVcO8ra1_ubJISt13oq5blGxgQ&amp;dt=1607503682189&amp;bpp=8&amp;bdt=234&amp;idt=170&amp;shv=r20201203&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D79319445445068a8-224b6b87f9c400c7%3AT%3D1606878613%3ART%3D1606878613%3AS%3DALNI_MZUZLNCGlY_NnCX7bTm33sxyri4Tw&amp;prev_fmts=0x0%2C330x250&amp;nras=1&amp;correlator=1296262453967&amp;frm=20&amp;pv=1&amp;ga_vid=347352118.1606878614&amp;ga_sid=1607503682&amp;ga_hid=476485638&amp;ga_fc=0&amp;rplot=4&amp;u_tz=420&amp;u_his=6&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=768&amp;u_aw=1304&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=59&amp;ady=4173&amp;biw=1287&amp;bih=697&amp;scr_x=0&amp;scr_y=1390&amp;eid=21068769&amp;oid=3&amp;psts=AGkb-H9E6JMFmLwZh_kx6Tq9cRyqHmA0b43CN2AR-GTlZBHSZWqlJ6_bab-hIrbG3i54NQ&amp;pvsid=2498446320004751&amp;pem=707&amp;ref=https%3A%2F%2Fcanthoauto.com%2F&amp;rx=0&amp;eae=0&amp;fc=1920&amp;brdim=62%2C0%2C62%2C0%2C1304%2C0%2C1304%2C768%2C1304%2C697&amp;vis=1&amp;rsz=%7C%7CeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=8320&amp;bc=31&amp;jar=2020-12-09-08&amp;ifi=1&amp;uci=a!1&amp;btvi=2&amp;fsb=1&amp;xpc=yGaoWafSMY&amp;p=https%3A//canthoauto.com&amp;dtd=8629\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" data-google-container-id=\"a!1\" data-google-query-id=\"CLLQ6PPBwO0CFYZ1vAodhV0HDQ\" data-load-complete=\"true\"></iframe></ins></ins></ins>  </div></div>', '0');
INSERT INTO `blog` VALUES ('2', 'car/images/blog/mazda3-can-tho-2020.jpg', 'Ưu đãi giá: Mazda 3 2020', '548', '2020-12-02 17:40:55', '56', '1', null, '0');
INSERT INTO `blog` VALUES ('3', 'car/images/blog/mazda-hau-giang-showroom-dai-ly.jpg', 'Mazda Hậu Giang: Giá tốt & Hỗ trợ mua trả góp', '398', '2020-12-02 17:45:14', '56', '1', null, '0');
INSERT INTO `blog` VALUES ('4', 'car/images/blog/mazda-6.jpg', 'Bảng giá xe Mazda Sóc Trăng', '543', '2020-12-02 17:47:15', '56', '1', '', '0');
INSERT INTO `blog` VALUES ('5', 'car/images/blog/mazda-6.jpg', 'Bảng giá xe Mazda Sóc Trăng', '543', '2020-12-02 17:47:15', '56', '1', '', '1');
INSERT INTO `blog` VALUES ('6', 'car/images/blog-3-720x480.jpg', 'Bảng giá xe Vinfast Hậu Giang', '543', '2020-12-02 17:47:15', '56', '1', '', '1');
INSERT INTO `blog` VALUES ('7', 'car/images/about-2-720x720.jpg', 'Bảng giá xe Toyota Cần Thơ', '543', '2020-12-02 17:47:15', '56', '1', '', '1');
INSERT INTO `blog` VALUES ('8', 'car/images/author-image-2-646x680.jpg', 'Bảng giá xe Mazda Sóc Trăng', '543', '2020-12-02 17:47:15', '56', '1', '', '0');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Position` int(4) DEFAULT NULL,
  `alias` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Categories_Supplies1` (`SupplyId`) USING BTREE,
  KEY `Id` (`Id`) USING BTREE,
  KEY `Id_2` (`Id`) USING BTREE,
  KEY `Id_3` (`Id`) USING BTREE,
  KEY `Id_4` (`Id`) USING BTREE,
  KEY `Id_5` (`Id`) USING BTREE,
  KEY `Id_6` (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for chongoi
-- ----------------------------
DROP TABLE IF EXISTS `chongoi`;
CREATE TABLE `chongoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of chongoi
-- ----------------------------
INSERT INTO `chongoi` VALUES ('9', '4-5 chỗ', '1');
INSERT INTO `chongoi` VALUES ('10', '7 chỗ', '1');
INSERT INTO `chongoi` VALUES ('11', '16 chỗ', '1');

-- ----------------------------
-- Table structure for chudautuxe
-- ----------------------------
DROP TABLE IF EXISTS `chudautuxe`;
CREATE TABLE `chudautuxe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idchudautu` int(11) DEFAULT NULL,
  `idxe` int(11) DEFAULT NULL,
  `vondautu` decimal(10,0) DEFAULT 0,
  `taidautu` int(11) DEFAULT 0 COMMENT '0-Không tái đầu tư. 1-Tái đầu tư',
  `tile` int(11) DEFAULT 0,
  `tienlai` decimal(10,0) DEFAULT 0,
  `ngayban` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Chưa bán. 1-Đã bán',
  `ngaynhap` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=479 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of chudautuxe
-- ----------------------------
INSERT INTO `chudautuxe` VALUES ('478', '29', '213', '300000000', '0', '100', '47500000', null, '0', '2020-09-14');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `Author` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Phone` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Comment_Product` (`ProductId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for contactinfo
-- ----------------------------
DROP TABLE IF EXISTS `contactinfo`;
CREATE TABLE `contactinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Zalo` varchar(200) NOT NULL,
  `Skype` varchar(50) NOT NULL,
  `Message` longtext DEFAULT NULL,
  `Active` int(11) DEFAULT 0 COMMENT '0-Chưa xem; 1-Đã xem',
  `hoten` varchar(255) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contactinfo
-- ----------------------------
INSERT INTO `contactinfo` VALUES ('2', '', '', '', '08888883222', '', '', '', '', '', '0', '', '2020-12-02 11:12:20');
INSERT INTO `contactinfo` VALUES ('3', '', '', '', '0983333333', '', '', '', '', '', '0', '', '2020-12-02 11:12:25');
INSERT INTO `contactinfo` VALUES ('4', '', '', '', '08888883222', '08888883222', '', '', '', '08888883222', '0', '', '2020-12-02 11:12:36');
INSERT INTO `contactinfo` VALUES ('5', '', '', '', '0983333333', '', '', '', '', '', '0', '', '2020-12-02 11:12:16');
INSERT INTO `contactinfo` VALUES ('6', '', '', '', '0983333333', '', '', '', '', '', '0', '', '2020-12-02 11:12:05');
INSERT INTO `contactinfo` VALUES ('7', '', '', '', '0983333333', '', '', '', '', '', '0', '', '2020-12-02 11:12:27');
INSERT INTO `contactinfo` VALUES ('8', '', '', '', '12344444444', 'levankhoa.vnpt.2017@gmail.com', '', '', '', 'ooooooooooooooooo', '0', 'Nhat', '2020-12-07 23:12:16');
INSERT INTO `contactinfo` VALUES ('9', '', '', '', '0999999999999', '', '', '', '', '', '0', 'Nga', '2020-12-08 08:12:15');
INSERT INTO `contactinfo` VALUES ('10', '', '', '', '08888883222', '', '', '', '', '', '0', 'Bột', '2020-12-09 11:12:45');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(550) DEFAULT NULL,
  `Image` varchar(350) DEFAULT NULL,
  `Links` longtext DEFAULT NULL,
  `Detail` varchar(2500) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for dongxe
-- ----------------------------
DROP TABLE IF EXISTS `dongxe`;
CREATE TABLE `dongxe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dongxe` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `idhangxe` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of dongxe
-- ----------------------------
INSERT INTO `dongxe` VALUES ('11', 'Toyota Vios', '42', '1');
INSERT INTO `dongxe` VALUES ('12', 'Toyota Corolla Altis', '42', '1');
INSERT INTO `dongxe` VALUES ('13', 'Toyota Camry', '42', '1');
INSERT INTO `dongxe` VALUES ('14', 'Toyota Fortuner', '42', '1');
INSERT INTO `dongxe` VALUES ('15', 'Toyota Yaris', '42', '1');
INSERT INTO `dongxe` VALUES ('16', 'Toyota Avanza', '42', '1');
INSERT INTO `dongxe` VALUES ('17', 'Toyota Rush', '42', '1');
INSERT INTO `dongxe` VALUES ('18', 'Toyota Hiace', '42', '1');
INSERT INTO `dongxe` VALUES ('19', 'Toyota Land Cruiser Prado', '42', '1');
INSERT INTO `dongxe` VALUES ('20', 'Toyota Alphard', '42', '1');
INSERT INTO `dongxe` VALUES ('21', 'Moring', '47', '1');

-- ----------------------------
-- Table structure for exportence
-- ----------------------------
DROP TABLE IF EXISTS `exportence`;
CREATE TABLE `exportence` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `ProductId` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 0 COMMENT 'Trạng thái nhập hàng: 0 - Chưa bán; 1 - Đã bán; 2 - Đã báo cáo',
  `PaymentId` int(11) DEFAULT 0 COMMENT 'Hình thức thanh toán: 0 - Tiền mặt; 1 - Chuyển khoản; 2 - Khác',
  `ReceiverId` int(11) DEFAULT NULL COMMENT 'Người nhận tiền',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of exportence
-- ----------------------------

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `Createtime` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feedback
-- ----------------------------

-- ----------------------------
-- Table structure for gioithieuwebsite
-- ----------------------------
DROP TABLE IF EXISTS `gioithieuwebsite`;
CREATE TABLE `gioithieuwebsite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `tieude2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `tieude3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `chitiet1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `chitiet2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `chitiet3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Không hoạt động; 1-Hoạt đông',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of gioithieuwebsite
-- ----------------------------
INSERT INTO `gioithieuwebsite` VALUES ('1', 'Địa chỉ', 'Hỗ trợ', 'Cam kết', 'Địa chỉ: 332-334 đường 30/04, thị trấn Nàng Mau, huyện Vị Thủy, tỉnh Hậu Giang.<br>Hotline 24/7: 0939571387 - 0939571157', 'Đăng ký, đăng kiểm, chuyển vùng\r\n\r<br>\nCác dịch vụ theo nhu cầu Quý Khách<br>\r\nTrả góp lãi xuất thấp, vay Ngân Hàng tối đa 70% giá trị xe', 'Pháp lý chuẩn\r\n<br>\nMáy móc nguyên bản\r<br>\n\r\nXe không đâm đụng, ngập nước', '1');

-- ----------------------------
-- Table structure for ha_giaydangkiem
-- ----------------------------
DROP TABLE IF EXISTS `ha_giaydangkiem`;
CREATE TABLE `ha_giaydangkiem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idguiban` int(11) DEFAULT NULL,
  `duongdan` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1-Chưa xóa. 0-Đã xóa',
  `fileid` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ha_giaydangkiem
-- ----------------------------
INSERT INTO `ha_giaydangkiem` VALUES ('51', '1', 'images/xeguiban/1_52_690096_2015-lexus-lf-sa-concept-4903_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('52', '11', 'images/xeguiban/11_53_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('53', '11', 'images/xeguiban/11_54_718336_2015-mazda-koeru-concept-3828_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('54', '11', 'images/xeguiban/11_55_627417_2015-mclaren-675lt-maklaren_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('55', '11', 'images/xeguiban/11_56_1165970_2015-mercedes-benz-cls-500-890_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('56', '11', 'images/xeguiban/11_57_895133_2015-nissan-sentra-nissan_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('57', '11', 'images/xeguiban/11_58_895133_2015-nissan-sentra-nissan_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('58', '11', 'images/xeguiban/11_59_830212_2015-acura-nsx-concept-akura_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('59', '11', 'images/xeguiban/11_60_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('60', '11', 'images/xeguiban/11_61_530541_2014-maserati-alfieri-concept_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('61', '11', 'images/xeguiban/11_62_1046324_2014-peugeot-quartz-concept_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('62', '11', 'images/xeguiban/11_63_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('63', '11', 'images/xeguiban/11_64_530541_2014-maserati-alfieri-concept_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('64', '11', 'images/xeguiban/11_65_682791_auto-mazda-6-red_1080_1.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('65', '11', 'images/xeguiban/11_66_895133_2015-nissan-sentra-nissan_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('66', '11', 'images/xeguiban/11_67_682791_auto-mazda-6-red_1080_1.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('67', '11', 'images/xeguiban/11_68_895133_2015-nissan-sentra-nissan_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('68', '11', 'images/xeguiban/11_69_795453_2014-peugeot-quartz-concept-260_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('69', '11', 'images/xeguiban/11_70_830212_2015-acura-nsx-concept-akura_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('70', '12', 'images/xeguiban/12_71_690096_2015-lexus-lf-sa-concept-4903_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('71', '12', 'images/xeguiban/12_72_775400_bmw-gran-coupe-concept_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('72', '12', 'images/xeguiban/12_73_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('73', '12', 'images/xeguiban/12_74_682791_auto-mazda-6-red_1080_1.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('74', '12', 'images/xeguiban/12_75_830212_2015-acura-nsx-concept-akura_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('75', '12', 'images/xeguiban/12_76_1429127_2015-jaguar-xf-prestige-yaguar_1080.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('76', '13', 'images/xeguiban/13_77_260216_dang-kiem.png', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('77', '13', 'images/xeguiban/13_78_55407_P1230955-5a8fa.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('78', '18', 'car/images/xeguiban/18_1_49927_107737034_3212283268828618_2074389475527281508_n.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('79', '18', 'car/images/xeguiban/18_2_253588_photo6109179641408367470.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('80', '18', 'car/images/xeguiban/18_3_253588_photo6109179641408367470.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('81', '18', 'car/images/xeguiban/18_4_49927_107737034_3212283268828618_2074389475527281508_n.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('82', '18', 'car/images/xeguiban/18_5_49927_107737034_3212283268828618_2074389475527281508_n.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('83', '19', 'images/xeguiban/19_79_530541_2.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('84', '19', 'images/xeguiban/19_80_715109_1.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('85', '19', 'images/xeguiban/19_81_1046324_3.jpg', '1', null);
INSERT INTO `ha_giaydangkiem` VALUES ('88', '19', 'car/images/giaydangkiem/19_3_530541_2.jpg', '1', '530541_2.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('90', '19', 'car/images/giaydangkiem/19_6_530541_2.jpg', '1', '530541_2.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('93', '19', 'car/images/giaydangkiem/19_8_830212_2015-acura-nsx-concept-akura_1080.jpg', '1', '830212_2015-acura-nsx-concept-akura_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('94', '19', 'car/images/giaydangkiem/19_9_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1', '1079525_2014-peugeot-quartz-concept-259_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('95', '19', 'car/images/giaydangkiem/19_10_795453_2014-peugeot-quartz-concept-260_1080.jpg', '1', '795453_2014-peugeot-quartz-concept-260_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('96', '19', 'car/images/giaydangkiem/19_11_830212_2015-acura-nsx-concept-akura_1080.jpg', '1', '830212_2015-acura-nsx-concept-akura_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('97', '19', 'car/images/giaydangkiem/19_12_795453_2014-peugeot-quartz-concept-260_1080.jpg', '1', '795453_2014-peugeot-quartz-concept-260_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('98', '19', 'car/images/giaydangkiem/19_13_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1', '1079525_2014-peugeot-quartz-concept-259_1080.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('99', '19', 'car/images/giaydangkiem/19_14_530541_2.jpg', '1', '530541_2.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('101', '19', 'car/images/giaydangkiem/19_16_1046324_3.jpg', '1', '1046324_3.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('102', '19', 'car/images/giaydangkiem/19_16_530541_2.jpg', '1', '530541_2.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('103', '19', 'car/images/giaydangkiem/19_17_1046324_3.jpg', '1', '1046324_3.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('105', '19', 'car/images/giaydangkiem/19_20_1046324_3.jpg', '1', '1046324_3.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('106', '19', 'car/images/giaydangkiem/19_18_715109_1.jpg', '1', '715109_1.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('107', '19', 'car/images/giaydangkiem/19_18_530541_2.jpg', '1', '530541_2.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('117', '20', 'car/images/giaydangkiem/20_22_260216_dang-kiem.png', '1', '260216_dang-kiem.png');
INSERT INTO `ha_giaydangkiem` VALUES ('118', '20', 'car/images/giaydangkiem/20_23_385129_so_dang_kiem_mercedes_amg_c300_2013.jpg', '1', '385129_so_dang_kiem_mercedes_amg_c300_2013.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('119', '21', 'car/images/giaydangkiem/21_23_55407_P1230955-5a8fa.jpg', '1', '55407_P1230955-5a8fa.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('120', '21', 'car/images/giaydangkiem/21_24_385129_so_dang_kiem_mercedes_amg_c300_2013.jpg', '1', '385129_so_dang_kiem_mercedes_amg_c300_2013.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('124', '22', 'car/images/giaydangkiem/22_25_55407_P1230955-5a8fa.jpg', '1', '55407_P1230955-5a8fa.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('125', '22', 'car/images/giaydangkiem/22_25_385129_so_dang_kiem_mercedes_amg_c300_2013.jpg', '1', '385129_so_dang_kiem_mercedes_amg_c300_2013.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('126', '28', 'car/images/giaydangkiem/28_27_55407_P1230955-5a8fa.jpg', '1', '55407_P1230955-5a8fa.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('128', '32', 'car/images/giaydangkiem/32_29_49927_107737034_3212283268828618_2074389475527281508_n.jpg', '1', '49927_107737034_3212283268828618_2074389475527281508_n.jpg');
INSERT INTO `ha_giaydangkiem` VALUES ('129', '33', 'car/images/giaydangkiem/33_28_11267_images.jpg', '1', '11267_images.jpg');

-- ----------------------------
-- Table structure for hinhanhguibanxe
-- ----------------------------
DROP TABLE IF EXISTS `hinhanhguibanxe`;
CREATE TABLE `hinhanhguibanxe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idguiban` int(11) DEFAULT NULL,
  `duongdan` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1-Chưa xóa. 0-Đã xóa',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hinhanhguibanxe
-- ----------------------------
INSERT INTO `hinhanhguibanxe` VALUES ('47', '1', 'images/xe/1_23_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('48', '1', 'images/xe/1_24_530541_2014-maserati-alfieri-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('49', '1', 'images/xe/1_25_1046324_2014-peugeot-quartz-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('50', '1', 'images/xe/1_26_795453_2014-peugeot-quartz-concept-260_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('51', '1', 'images/xe/1_27_830212_2015-acura-nsx-concept-akura_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('52', '1', 'images/xe/1_28_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('53', '1', 'images/xe/1_29_530541_2014-maserati-alfieri-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('54', '1', 'images/xe/1_30_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('55', '1', 'images/xe/1_31_1046324_2014-peugeot-quartz-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('56', '1', 'images/xe/1_32_530541_2014-maserati-alfieri-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('57', '1', 'images/xe/1_33_1046324_2014-peugeot-quartz-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('58', '1', 'images/xe/1_34_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('59', '1', 'images/xe/1_35_682791_auto-mazda-6-red_1080_1.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('60', '1', 'images/xe/1_36_895133_2015-nissan-sentra-nissan_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('61', '1', 'images/xe/1_37_682791_auto-mazda-6-red_1080_1.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('62', '1', 'images/xe/1_38_490094_auto-mazda-6-red_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('63', '1', 'images/xe/1_39_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('64', '1', 'images/xe/1_40_530541_2014-maserati-alfieri-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('65', '1', 'images/xe/1_41_1046324_2014-peugeot-quartz-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('66', '1', 'images/xe/1_42_859163_mclaren-p1-concept-avto-5945_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('67', '1', 'images/xe/1_43_843696_mclaren-p1-concept-maklaren-303_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('68', '1', 'images/xe/1_44_816628_nio-ep9-car-nextev-nio-ep9-weilai-super-car-automobile-ele-3_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('69', '1', 'images/xe/1_45_716985_nio-ep9-car-nextev-nio-ep9-weilai-super-car-automobile-ele-2_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('70', '1', 'images/xe/1_46_830743_zagato-aston-martin-vanquish-7521_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('71', '1', 'images/xe/1_47_1046324_2014-peugeot-quartz-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('72', '1', 'images/xe/1_48_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('73', '1', 'images/xe/1_49_556836_citroen-survolt-concept-2010_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('74', '1', 'images/xe/1_50_622353_jaguar-c-x17-5-seater-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('75', '1', 'images/xe/1_51_367959_infinity-essence-koncept-kar_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('76', '13', 'images/xe/13_52_715109_2014-infiniti-vision-gran-3549_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('77', '13', 'images/xe/13_53_530541_2014-maserati-alfieri-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('78', '20', 'http://localhost/dinhgiaxecumientay/car/images/hinhanhxe/20_1_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('79', '20', 'car/images/hinhanhxe/20_1_795453_2014-peugeot-quartz-concept-260_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('82', '20', 'car/images/hinhanhxe/20_4_775400_bmw-gran-coupe-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('83', '20', 'car/images/hinhanhxe/20_5_490094_auto-mazda-6-red_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('84', '21', 'car/images/hinhanhxe/21_5_367959_infinity-essence-koncept-kar_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('85', '21', 'car/images/hinhanhxe/21_7_1076696_jaguar-model-xj-serebro_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('86', '21', 'car/images/hinhanhxe/21_6_775400_bmw-gran-coupe-concept_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('87', '22', 'car/images/hinhanhxe/22_8_575379_Lambo_Murc-LP640-Versace_136_1920x1200_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('88', '22', 'car/images/hinhanhxe/22_8_645428_Lambo_Murc-LP640-Versace_137_1920x1200_1080.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('89', '32', 'car/images/hinhanhxe/32_10_253588_photo6109179641408367470.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('90', '33', 'car/images/hinhanhxe/33_10_1046324_3.jpg', '1');
INSERT INTO `hinhanhguibanxe` VALUES ('91', '33', 'car/images/hinhanhxe/33_11_1079525_2014-peugeot-quartz-concept-259_1080.jpg', '1');

-- ----------------------------
-- Table structure for hinhanhxe
-- ----------------------------
DROP TABLE IF EXISTS `hinhanhxe`;
CREATE TABLE `hinhanhxe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idxe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duongdan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images64` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of hinhanhxe
-- ----------------------------
INSERT INTO `hinhanhxe` VALUES ('412', '213', 'images/xe/213_131486_xe-vios-2020-mau-do-0.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('413', '213', 'images/xe/213_135218_xe-vios-2020-mau-do-6.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('414', '213', 'images/xe/213_152953_xe-vios-2020-mau-do-7.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('415', '0', 'images/xe/0_530541_2014-maserati-alfieri-concept_1080.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('416', '0', 'images/xe/0_530541_2014-maserati-alfieri-concept_1080.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('417', '0', 'images/xe/0_530541_2014-maserati-alfieri-concept_1080.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('418', '0', 'images/xe/0_530541_2014-maserati-alfieri-concept_1080.jpg', null);
INSERT INTO `hinhanhxe` VALUES ('419', '1', 'images/xeguiban/1_530541_2014-maserati-alfieri-concept_1080.jpg', null);

-- ----------------------------
-- Table structure for hopso
-- ----------------------------
DROP TABLE IF EXISTS `hopso`;
CREATE TABLE `hopso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of hopso
-- ----------------------------
INSERT INTO `hopso` VALUES ('4', 'Hộp số sàn', '1');
INSERT INTO `hopso` VALUES ('5', 'Hộp số tự động', '1');
INSERT INTO `hopso` VALUES ('6', 'Hộp số bán tự động', '1');
INSERT INTO `hopso` VALUES ('7', '7 chỗ', '0');

-- ----------------------------
-- Table structure for imageslide
-- ----------------------------
DROP TABLE IF EXISTS `imageslide`;
CREATE TABLE `imageslide` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) DEFAULT NULL,
  `SlideId` int(1) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imageslide
-- ----------------------------

-- ----------------------------
-- Table structure for importence
-- ----------------------------
DROP TABLE IF EXISTS `importence`;
CREATE TABLE `importence` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) NOT NULL,
  `PurchaseDiscount` double(18,2) DEFAULT 0.00 COMMENT 'Chiết khấu mua',
  `SaleDiscount` double(18,2) DEFAULT 0.00 COMMENT 'Chiết khấu bán',
  `CostsIncurred` double(18,2) DEFAULT 0.00 COMMENT 'Chi phí phát sinh',
  `SalePrice` double(18,2) DEFAULT 0.00 COMMENT 'Giá bán',
  `ImportUserId` int(11) NOT NULL,
  `Date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`Id`,`ProductId`),
  UNIQUE KEY `uq_imp` (`ProductId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of importence
-- ----------------------------

-- ----------------------------
-- Table structure for infocompany
-- ----------------------------
DROP TABLE IF EXISTS `infocompany`;
CREATE TABLE `infocompany` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '0-Không hoạt động; 1-Hoạt động',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of infocompany
-- ----------------------------
INSERT INTO `infocompany` VALUES ('1', '332-334 Đường 30/04, Thị Trấn Nàng Mau <br>Huyện Vị Thủy, Tỉnh Hậu Giang', 'https://www.facebook.com/linh.duy.794', null, null, null, '0939571387', 'dinhgiaxecumientay@gmail.com', '1');

-- ----------------------------
-- Table structure for intro
-- ----------------------------
DROP TABLE IF EXISTS `intro`;
CREATE TABLE `intro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text DEFAULT NULL,
  `Content1` longtext DEFAULT NULL,
  `Link1` varchar(250) DEFAULT '',
  `IsActive` tinyint(1) DEFAULT 0 COMMENT '0-Không hoạt động;1-Đang hoạt động',
  `Title2` text DEFAULT NULL,
  `Content2` longtext DEFAULT NULL,
  `Link2` varchar(250) DEFAULT '',
  `Title3` text DEFAULT NULL,
  `Content3` longtext DEFAULT NULL,
  `Link3` varchar(250) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of intro
-- ----------------------------
INSERT INTO `intro` VALUES ('3', 'VinFast – “Mãnh liệt tinh thần Việt Nam”', 'Thương hiệu VinFast mang ý nghĩa “Việt Nam, Phong cách, An toàn, Sáng tạo và Tiên phong”. Chính vì vậy câu slogan thương hiệu xe hơi này cũng thấm đậm tinh thần dân tộc hào hùng và mạnh mẽ.<br>VinFast đã thành công khi sử dụng câu khẩu hiệu mạnh mẽ “Mãnh liệt tinh thần Việt Nam” để truyền tải nhiều nội lực đến khách hàng. Thương hiệu này đang trên đà hướng tới một đẳng cấp quốc tế với tầm nhìn trở thành một trong những hãng sản xuất ô tô, xe máy hàng đầu tại khu vực Đông Nam Á.', 'car.php?controller=xe&action=xeC', '1', 'Ford – “Go Further”', 'Thương hiệu xe hơi nổi tiếng Ford luôn hướng mọi hành động và sản phẩm của mình theo đúng tiêu chí trong slogan mà hãng đã đặt ra là “Go Further” (dịch nôm na là “Tiến xa hơn nữa”).', 'car.php?controller=xe&action=xeC', 'Kia – “The Power to Surprise”', 'Sự đổi mới đầy ngoạn mục đã thể hiện được trong câu slogan thương hiệu xe hơi Kia – “The Power to Surprise – Sức mạnh từ sự ngạc nhiên”.', 'car.php?controller=xe&action=xeC');

-- ----------------------------
-- Table structure for investor
-- ----------------------------
DROP TABLE IF EXISTS `investor`;
CREATE TABLE `investor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Funds` double(18,0) DEFAULT NULL,
  `Percentage` int(11) DEFAULT 0 COMMENT 'Tỉ lệ tiền lãi',
  `Dividends` double DEFAULT 0 COMMENT 'Tiền lãi thụ hưởng',
  `Reinvestment` int(11) DEFAULT 0 COMMENT 'Tái đầu tư',
  `manhadautu` int(11) DEFAULT NULL,
  `tennhadautu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxedautu` int(11) DEFAULT NULL,
  `vondautu` decimal(10,0) DEFAULT 0,
  `taidautu` int(11) DEFAULT 0 COMMENT '0-Không tái đầu tư. 1-Tái đầu tư',
  `tile` float DEFAULT 0,
  `tienlai` decimal(10,0) DEFAULT 0,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `ProductId` (`ProductId`,`UserId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of investor
-- ----------------------------

-- ----------------------------
-- Table structure for livesport
-- ----------------------------
DROP TABLE IF EXISTS `livesport`;
CREATE TABLE `livesport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(500) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Url1` varchar(200) NOT NULL,
  `Url2` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of livesport
-- ----------------------------

-- ----------------------------
-- Table structure for logo
-- ----------------------------
DROP TABLE IF EXISTS `logo`;
CREATE TABLE `logo` (
  `LogoId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `alias` varchar(200) NOT NULL,
  PRIMARY KEY (`LogoId`),
  UNIQUE KEY `logo` (`alias`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logo
-- ----------------------------
INSERT INTO `logo` VALUES ('1', 'Logo', 'logo-dung-lam-3.jpg', 'Logo góc trái ở trên đầu', '1', 'logo-left-top');

-- ----------------------------
-- Table structure for mausac
-- ----------------------------
DROP TABLE IF EXISTS `mausac`;
CREATE TABLE `mausac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mausac
-- ----------------------------
INSERT INTO `mausac` VALUES ('9', 'Đỏ', '1');
INSERT INTO `mausac` VALUES ('10', 'Vàng', '1');
INSERT INTO `mausac` VALUES ('11', 'Cam', '1');
INSERT INTO `mausac` VALUES ('12', 'Tím', '1');
INSERT INTO `mausac` VALUES ('13', 'Xanh dương', '1');
INSERT INTO `mausac` VALUES ('14', 'Xanh lá', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `MenuId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `URL` varchar(250) DEFAULT NULL,
  `Order` int(11) DEFAULT NULL,
  `IsVisible` tinyint(1) DEFAULT NULL,
  `Desciption` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`MenuId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for namsanxuat
-- ----------------------------
DROP TABLE IF EXISTS `namsanxuat`;
CREATE TABLE `namsanxuat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of namsanxuat
-- ----------------------------
INSERT INTO `namsanxuat` VALUES ('13', '2000', '1');
INSERT INTO `namsanxuat` VALUES ('14', '2001', '1');
INSERT INTO `namsanxuat` VALUES ('15', '2002', '1');
INSERT INTO `namsanxuat` VALUES ('16', '2003', '1');
INSERT INTO `namsanxuat` VALUES ('17', '2004', '1');
INSERT INTO `namsanxuat` VALUES ('18', '2005', '1');
INSERT INTO `namsanxuat` VALUES ('19', '2006', '1');
INSERT INTO `namsanxuat` VALUES ('20', '2007', '1');
INSERT INTO `namsanxuat` VALUES ('21', '2008', '1');
INSERT INTO `namsanxuat` VALUES ('22', '2009', '1');
INSERT INTO `namsanxuat` VALUES ('23', '2010', '1');
INSERT INTO `namsanxuat` VALUES ('24', '2011', '1');
INSERT INTO `namsanxuat` VALUES ('25', '2012', '1');
INSERT INTO `namsanxuat` VALUES ('26', '2013', '1');
INSERT INTO `namsanxuat` VALUES ('27', '2014', '1');
INSERT INTO `namsanxuat` VALUES ('28', '2015', '1');
INSERT INTO `namsanxuat` VALUES ('29', '2016', '1');
INSERT INTO `namsanxuat` VALUES ('30', '2017', '1');
INSERT INTO `namsanxuat` VALUES ('31', '2018', '1');
INSERT INTO `namsanxuat` VALUES ('32', '2019', '1');
INSERT INTO `namsanxuat` VALUES ('33', '2020', '1');
INSERT INTO `namsanxuat` VALUES ('34', '2021', '1');

-- ----------------------------
-- Table structure for nhadautu
-- ----------------------------
DROP TABLE IF EXISTS `nhadautu`;
CREATE TABLE `nhadautu` (
  `manhadautu` int(11) NOT NULL AUTO_INCREMENT,
  `tennhadautu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tongtien` decimal(10,0) DEFAULT 0,
  `sodu` decimal(10,0) DEFAULT 0,
  PRIMARY KEY (`manhadautu`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nhadautu
-- ----------------------------
INSERT INTO `nhadautu` VALUES ('29', 'Trần Duy Linh', '123', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', null, null, '0', '0');

-- ----------------------------
-- Table structure for nhienlieu
-- ----------------------------
DROP TABLE IF EXISTS `nhienlieu`;
CREATE TABLE `nhienlieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nhienlieu
-- ----------------------------
INSERT INTO `nhienlieu` VALUES ('7', 'Xăng', '1');
INSERT INTO `nhienlieu` VALUES ('8', 'Dầu Diesel', '1');
INSERT INTO `nhienlieu` VALUES ('9', 'Điện', '1');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Createtime` datetime NOT NULL,
  `Status` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cart_total` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for paymention
-- ----------------------------
DROP TABLE IF EXISTS `paymention`;
CREATE TABLE `paymention` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of paymention
-- ----------------------------

-- ----------------------------
-- Table structure for position
-- ----------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE `position` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NamePosition` varchar(45) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of position
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(550) DEFAULT NULL,
  `TypeId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Price` double(18,0) NOT NULL,
  `Color` varchar(250) DEFAULT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `Size` varchar(20) DEFAULT NULL,
  `Detail` longtext DEFAULT NULL,
  `CreateBy` int(11) DEFAULT NULL,
  `Createdate` date DEFAULT NULL,
  `EditBy` int(11) DEFAULT NULL,
  `EditDate` date DEFAULT NULL,
  `TotalView` int(11) DEFAULT NULL,
  `isSaleOff` tinyint(1) DEFAULT NULL,
  `Percent_off` int(11) NOT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(260) DEFAULT NULL,
  `Image4` varchar(260) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Product_Supplies` (`SupplyId`) USING BTREE,
  KEY `FK_Product_Categories` (`CategoryId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for quyenmenu
-- ----------------------------
DROP TABLE IF EXISTS `quyenmenu`;
CREATE TABLE `quyenmenu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(100) NOT NULL,
  `QuyenTruyCap` int(11) DEFAULT 0,
  `CauHinhWebsite` int(11) DEFAULT 0,
  `DonHang` int(11) DEFAULT 0,
  `SanPham` int(11) DEFAULT 0,
  `DanhMucSanPham` int(11) DEFAULT 0,
  `NhomDanhMuc` int(11) DEFAULT 0,
  `PhatVideo` int(11) DEFAULT 0,
  `BinhLuan` int(11) DEFAULT 0,
  `PhanHoi` int(11) DEFAULT 0,
  `ThongKe` int(11) DEFAULT 0,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `User` (`User`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quyenmenu
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `img1` varchar(260) DEFAULT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `img2` varchar(260) DEFAULT NULL,
  `text2` varchar(500) DEFAULT NULL,
  `img3` varchar(260) NOT NULL,
  `text3` varchar(500) NOT NULL,
  `img4` varchar(260) NOT NULL,
  `text4` varchar(500) NOT NULL,
  `img5` varchar(260) NOT NULL,
  `text5` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES ('1', 'banner trái', 'dunglamauto-banner.jpg', '0', 'banner-oto.jpg', '0', 'banner-oto-2.jpg', '0', 'banner-logo-hang-xe.jpg', '0', 'image5-1-banner-trai.jpg', '0', '1');
INSERT INTO `slideshow` VALUES ('2', 'banner trái', 'dunglamauto-banner.jpg', '0', '', '', '', '', '', '', '', '', '1');

-- ----------------------------
-- Table structure for subcategory
-- ----------------------------
DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Link` varchar(260) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `pId` int(11) NOT NULL DEFAULT 0,
  `alias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Id_Supplies1` (`SupplyId`) USING BTREE,
  KEY `FK_Id_Category1` (`CategoryId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subcategory
-- ----------------------------
INSERT INTO `subcategory` VALUES ('42', 'Toyota', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('43', 'Ford', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('44', 'Hyundai', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('45', 'Honda', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('46', 'Mitsubishi ', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('47', 'KIA', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('48', 'Mazda ', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('49', 'Lexus', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('50', 'Mercedes- Benz ', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('51', 'BMW', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('52', 'Audi', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('53', 'Peugeot', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('54', 'ISUZU', null, null, null, '0', null);
INSERT INTO `subcategory` VALUES ('55', 'Vinfast', null, null, null, '0', null);

-- ----------------------------
-- Table structure for supplies
-- ----------------------------
DROP TABLE IF EXISTS `supplies`;
CREATE TABLE `supplies` (
  `SupplyId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SupplyId`),
  KEY `SupplyId` (`SupplyId`) USING BTREE,
  KEY `SupplyId_2` (`SupplyId`) USING BTREE,
  KEY `SupplyId_3` (`SupplyId`) USING BTREE,
  KEY `SupplyId_4` (`SupplyId`) USING BTREE,
  KEY `SupplyId_5` (`SupplyId`) USING BTREE,
  KEY `SupplyId_6` (`SupplyId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of supplies
-- ----------------------------

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `alias` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT '12345',
  `Name` varchar(150) DEFAULT NULL,
  `CreateDate` date DEFAULT NULL,
  `RoleId` int(11) DEFAULT NULL,
  `Avatar` varchar(550) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `TypeUser` int(11) DEFAULT NULL COMMENT '1: Nhà đầu tư. 2: Nhân viên. 3: Khách hàng',
  `QuyenTruyCap` int(11) DEFAULT 0,
  `CauHinhWebsite` int(11) DEFAULT 0,
  `DonHang` int(11) DEFAULT 0,
  `SanPham` int(11) DEFAULT 0,
  `DanhMucSanPham` int(11) DEFAULT 0,
  `NhomDanhMuc` int(11) DEFAULT 0,
  `PhatVideo` int(11) DEFAULT 0,
  `BinhLuan` int(11) DEFAULT 0,
  `PhanHoi` int(11) DEFAULT 0,
  `ThongKe` int(11) DEFAULT 0,
  `XuatNhapHang` int(11) DEFAULT 0,
  `Surplus` double DEFAULT 0,
  `Zalo` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `ZaloView` varchar(255) DEFAULT NULL,
  `FacebookView` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL,
  `TwitterView` varchar(255) DEFAULT NULL,
  `Instagram` varchar(255) DEFAULT NULL,
  `InstagramView` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`,`Email`,`Phone`) USING BTREE,
  KEY `FK_User_Role` (`RoleId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('56', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'Trần Duy Linh', '2020-03-29', null, '', 'dinhgiaxecumientay@gmail.com', '123', 'Hậu Giang', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'https://zalo.me/0939571387', 'https://www.facebook.com/C%E1%BB%ADa-H%C3%A0ng-D%C5%A9ng-L%C3%A2m-387688081723225/', 'Trần Duy Linh', 'Cửa Hàng Dũng Lâm', null, null, null, null);

-- ----------------------------
-- Table structure for user_online
-- ----------------------------
DROP TABLE IF EXISTS `user_online`;
CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL,
  PRIMARY KEY (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_online
-- ----------------------------

-- ----------------------------
-- Table structure for visiter
-- ----------------------------
DROP TABLE IF EXISTS `visiter`;
CREATE TABLE `visiter` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of visiter
-- ----------------------------

-- ----------------------------
-- Table structure for xe
-- ----------------------------
DROP TABLE IF EXISTS `xe`;
CREATE TABLE `xe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hangxe` int(11) DEFAULT NULL,
  `tenxe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id hãng xe',
  `mausac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giavon` decimal(10,0) DEFAULT 0,
  `chietkhaumua` decimal(10,0) DEFAULT 0,
  `chietkhauban` decimal(10,0) DEFAULT 0,
  `soluong` int(11) DEFAULT 1,
  `chiphiphatsinh` decimal(10,0) DEFAULT 0,
  `giaban` decimal(10,0) DEFAULT 0,
  `tonglai` decimal(10,0) DEFAULT 0,
  `sotienconlai` decimal(10,0) DEFAULT 0,
  `ngaynhap` date DEFAULT NULL COMMENT 'Ngày nhập xe',
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Chưa bán; 1-Đã bán',
  `nhanvien` int(11) DEFAULT NULL,
  `ngayban` date DEFAULT NULL COMMENT 'Ngày bán xe',
  `ngaytao` date DEFAULT NULL COMMENT 'Ngày nhập record',
  `imagemain` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongxe` int(11) DEFAULT NULL,
  `nhienlieu` int(11) DEFAULT NULL,
  `hopso` int(11) DEFAULT NULL,
  `chongoi` int(11) DEFAULT NULL,
  `namsanxuat` int(11) DEFAULT NULL,
  `xuatxu` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mô tả sơ lược',
  `chitiet` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mô tả chi tiết về xe',
  `giamgia` decimal(10,0) DEFAULT NULL COMMENT 'Giá hiển thị ảo để giảm giá về giá bán',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xe
-- ----------------------------
INSERT INTO `xe` VALUES ('213', '42', 'Toyota test 1', '9', '300000000', '2000000', '500000', '1', '0', '350000000', '47500000', '0', '2020-09-14', '0', '56', null, '2020-09-14', null, '11', '7', '4', '9', '13', '5', 'ABS, Ghế da, Trợ lực lái điện, Ghế sưởi điện, Hu và AU mới, Đèn pha Xenon', '- Colour coded bumpers<br>- Tinted glass<br>- Immobiliser<br>- Central locking - remote<br>- Passenger airbag<br>- Electric windows<br>- Rear head rests<br>- Radio<br>- CD player<br>- Ideal first car<br>- Warranty<br>- High level brake light<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '400000000');
INSERT INTO `xe` VALUES ('214', '47', 'Kia Moring', '9', '195000000', '800000', '0', '1', '0', '235000000', '39200000', '195000000', '2020-10-01', '0', '56', null, '2020-10-03', null, '21', '7', '4', '9', '29', '5', 'ABS, Gh? da, Tr? l?c l?i di?n, Gh? su?i di?n, Hu v? AU m?i, ??n pha Xenon', '- Colour coded bumpers\r\n- Tinted glass\r\n- Immobiliser\r\n- Central locking - remote\r\n- Passenger airbag\r\n- Electric windows\r\n- Rear head rests\r\n- Radio\r\n- CD player\r\n- Ideal first car\r\n- Warranty\r\n- High level brake light\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', null);

-- ----------------------------
-- Table structure for xeguiban
-- ----------------------------
DROP TABLE IF EXISTS `xeguiban`;
CREATE TABLE `xeguiban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thongtinxe` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `giabanmongmuon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Chưa duyệt. 1-Đã duyệt',
  `ngaytao` date DEFAULT NULL COMMENT 'Ngày system',
  `hangxe` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongxe` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaydangkiem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Hình ảnh giấy đăng kiểm',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xeguiban
-- ----------------------------
INSERT INTO `xeguiban` VALUES ('10', 'Mile', '055523666333', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', '', '300,000,000', '0', '2020-11-17', '', '', null);
INSERT INTO `xeguiban` VALUES ('11', 'Khansh', '988888890', '', '', '900,000,000', '0', '2020-11-17', '', '', null);
INSERT INTO `xeguiban` VALUES ('12', 'Binz', '0321111111', '', '', '', '0', '2020-11-18', '', '', null);
INSERT INTO `xeguiban` VALUES ('13', 'Son Hung Min', '0988888838', 'HG', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwfffffffffffffffff', '360,000,000', '1', '2020-11-23', '', '', null);
INSERT INTO `xeguiban` VALUES ('14', 'Khoa', '092222222222', 'Tiền Giang', 'Xe con mới', '260,000,000', '0', '2020-11-25', 'Toyota', 'Camry', null);
INSERT INTO `xeguiban` VALUES ('15', 'H', '0922222222222', '', '', '', '0', '2020-11-26', '', '', null);
INSERT INTO `xeguiban` VALUES ('16', '', '', '', '', '', '0', '2020-11-26', '', '', null);
INSERT INTO `xeguiban` VALUES ('17', 'Khoa', '0988888888', 'Tg', '', '300,000,000', '0', '2020-11-26', '', '', null);
INSERT INTO `xeguiban` VALUES ('18', 'Nhat', '098888882', 'TG', '', '400,000,000', '0', '2020-11-26', '', '', null);
INSERT INTO `xeguiban` VALUES ('19', 'Bột', '08888883222', 'TG', '', '300,000,000', '0', '2020-11-27', '', '', null);
INSERT INTO `xeguiban` VALUES ('20', 'Mận', '0983333333', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', 'Xe Toyota Camry 2020 được trang bị 2 loại động cơ là xăng 2.0L và xăng 2.5L 16 van, DOHC VVT-i sản sinh công suất tối đa từ 165-181 mã lực, mô men xoắn cực đại 199-235 Nm.', '300,000,000', '1', '2020-12-01', 'Toyota', 'Camry', null);
INSERT INTO `xeguiban` VALUES ('21', 'Morisio', '08888822220', 'ấp Phong Thuận - xã Cam Lộc - huyện Minh Nghĩa - Tỉnh Hậu Giang', 'Toyota Camry 2.5Q nhập khẩu thế hệ thứ 8 vừa được nhập khẩu về Hà Nội là mẫu xe được sản xuất tại Mỹ. Theo một số đại lý chính hãng của Toyota Việt Nam tiết lộ nguồn tin mẫu xe Camry mới nhất năm 2020 sẽ nhập khẩu thay vì được lắp ráp như trước. Cụ thể, nguồn hàng sẽ được nhập từ thị trường Thái Lan hoặc Indonesia.', '200,000,000', '1', '2020-12-01', 'Toyota', 'Camry', null);
INSERT INTO `xeguiban` VALUES ('22', 'Bochestino', '09923333333', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', 'Sau khi Toyota Fortuner 2021 được ra mắt tại Thái Lan thì mẫu xe này lập tức trở thành chủ đề bàn tán của giới mê xe. Toyota Fortuner 2021 là phiên bản nâng cấp về ngoại thất, tính năng tiện nghi và tăng thêm độ mạnh mẽ của dàn động cơ hứa hẹn đem đến chiếc xe trong mơ cho khách hàng trung thành bao năm nay của Toyota.', '300,000,000', '1', '2020-12-01', 'Toyota', 'Fortuner', null);
INSERT INTO `xeguiban` VALUES ('23', 'Noah', '0984300000', 'Huyện Nam Đàn - Tỉnh Nghệ An', 'Việt Nam được chọn là nơi ra mắt đầu tiên của bản nâng cấp Toyota Innova, mà không phải những thị trường doanh số khủng như Thái Lan hay Ấn Độ.\n\nSự đi xuống của Innova có thể là lý do khiến Toyota cần quan tâm đặc biệt hơn cho thị trường Việt. Không những vậy, trào lưu xe đa dụng đang ngày càng phát triển tại Việt Nam, nên động thái giới thiệu Toyota Innova bản cải tiến 2021 đầu tiên tại thị trường Việt Nam là có thể hiểu được.\n\nHơn nữa, nhìn vào doanh số của Innova tại Indonesia - 331.000 xe trong năm 2019, trong khi tại Việt Nam là 80.000 xe, có thể hiểu vì sao hãng xe Nhật lại đang ưu ái Việt Nam hơn.', '250,000,000', '0', '2020-12-01', 'Toyota', 'Innova', null);
INSERT INTO `xeguiban` VALUES ('24', '', '', '', '', '', '1', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('25', '', '', '', '', '', '0', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('26', 'Bella', '09999931111', '', '', '', '1', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('27', 'Tấm', '0230000000000', '', '', '', '1', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('28', 'Bánh Bao', '09423333333333', '', '', '', '1', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('29', 'Leno', '09888888888', '', '', '', '1', '2020-12-01', '', '', null);
INSERT INTO `xeguiban` VALUES ('30', 'Bột', '08888883222', '', '', '', '0', '2020-12-07', '', '', null);
INSERT INTO `xeguiban` VALUES ('31', 'Bột', '0983333333', '', '', '', '0', '2020-12-07', '', '', null);
INSERT INTO `xeguiban` VALUES ('32', 'Nhat', '12344444444', '', '', '', '1', '2020-12-07', '', '', null);
INSERT INTO `xeguiban` VALUES ('33', 'Mận', '08888883222', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', '', '', '1', '2020-12-09', '', '', null);

-- ----------------------------
-- Table structure for xetimmua
-- ----------------------------
DROP TABLE IF EXISTS `xetimmua`;
CREATE TABLE `xetimmua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thongtinxe` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `giamuamongmuon` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Chưa duyệt. 1-Đã duyệt',
  `ngaytao` date DEFAULT NULL,
  `hangxe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongxe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xetimmua
-- ----------------------------
INSERT INTO `xetimmua` VALUES ('7', 'Berry', '08888883222', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', '', '300,000,000', '0', '2020-12-02', 'Vinfast', '');
INSERT INTO `xetimmua` VALUES ('8', 'Bột', '08888883222', '', '', '', '0', '2020-12-09', '', '');
INSERT INTO `xetimmua` VALUES ('9', 'Bột', '08888883222', 'TT Nàng Mau, H. Vị Thủy, T. Hậu Giang', '', '', '0', '2020-12-09', '', '');

-- ----------------------------
-- Table structure for xuatxu
-- ----------------------------
DROP TABLE IF EXISTS `xuatxu`;
CREATE TABLE `xuatxu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1 COMMENT '1: Đang sử dụng; 0: Không sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xuatxu
-- ----------------------------
INSERT INTO `xuatxu` VALUES ('5', 'Trong nước', '1');
INSERT INTO `xuatxu` VALUES ('6', 'Nhập khẩu', '1');
