/*
Navicat MySQL Data Transfer

Source Server         : duylinhstore
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : duylinhstore

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-30 16:43:19
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for hinhanhxe
-- ----------------------------
DROP TABLE IF EXISTS `hinhanhxe`;
CREATE TABLE `hinhanhxe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idxe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duongdan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for intro
-- ----------------------------
DROP TABLE IF EXISTS `intro`;
CREATE TABLE `intro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `Link` varchar(250) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`,`Email`,`Phone`) USING BTREE,
  KEY `FK_User_Role` (`RoleId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

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
  `ngaynhap` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT 0 COMMENT '0-Chưa bán; 1-Đã bán',
  `nhanvien` int(11) DEFAULT NULL,
  `ngayban` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
