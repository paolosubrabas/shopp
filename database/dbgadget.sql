/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : dbgadget

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2018-11-17 00:24:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('2', 'Foods & Caterings');
INSERT INTO `category` VALUES ('3', 'Flowers & Bouquets');
INSERT INTO `category` VALUES ('4', 'Car Rentals');
INSERT INTO `category` VALUES ('5', 'Party Packages');
INSERT INTO `category` VALUES ('12', 'Special Offers');
INSERT INTO `category` VALUES ('13', 'Gowns & Suits');
INSERT INTO `category` VALUES ('14', 'Flash Deals');

-- ----------------------------
-- Table structure for customized_catering
-- ----------------------------
DROP TABLE IF EXISTS `customized_catering`;
CREATE TABLE `customized_catering` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `PAX` int(11) NOT NULL,
  `dateneeded` varchar(100) NOT NULL,
  `timeneeded` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customized_catering
-- ----------------------------
INSERT INTO `customized_catering` VALUES ('2', 'wwew', '233232', 'daada', 'dsadasd', '1', '', '', 'Delivered');
INSERT INTO `customized_catering` VALUES ('3', 'dasdas', '2323', 'eyot', 'sdsdsd', '1', '', '', 'Delivered');
INSERT INTO `customized_catering` VALUES ('4', 'Roxanne Duyac', '09785643456', 'Birthday Catering', 'Menudo\r\nPork Humba\r\nJava Rice\r\nSisig\r\nFried Chicken\r\nCreme Brule\r\nBuko Salad', '20', '', '', 'Delivered');
INSERT INTO `customized_catering` VALUES ('5', 'January 01, 2013', '01:00 pm', 'Wedding Catering', 'Kamo nalay bahala uyy.', '30', '', '', 'pending');
INSERT INTO `customized_catering` VALUES ('6', 'hh', '455', 'nnn', 'fff', '20', '', '', 'pending');
INSERT INTO `customized_catering` VALUES ('7', 'aaaa', '1234', 'HOYY', 'SSS', '20', 'Jan. 01, 2011', '01:00 pm', 'Delivered');

-- ----------------------------
-- Table structure for customized_party
-- ----------------------------
DROP TABLE IF EXISTS `customized_party`;
CREATE TABLE `customized_party` (
  `party_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `venue` varchar(100) NOT NULL,
  `dateneeded` varchar(100) NOT NULL,
  `timeneeded` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`party_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customized_party
-- ----------------------------
INSERT INTO `customized_party` VALUES ('1', 'kassandra', '09107675342', 'Disney', 'Birthday', 'aks.cbcbdbckbckbsdkcjsb', 'Royal Garden', 'january 12, 2019', '1pm', 'Delivered');
INSERT INTO `customized_party` VALUES ('2', 'Josh', '09123412123', 'horror', 'wedding', 'vlxcv cv vkj', 'mu manor', 'january 1, 2019', '1pm', 'pending');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `image` text,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', 'Lisa Yen', 'Lisa@gmail.com', 'Proof of Payment', 'This is my Proof of Payment.', 'pending', '');
INSERT INTO `message` VALUES ('2', 'Lisa Yen', 'Lisa@gmail.com', 'Proof of Payment', 'This is my Proof of Payment.', 'pending', '');
INSERT INTO `message` VALUES ('5', 'reytgh', 'krebullos13@gmail.com', 'jhghj', 'nbn', 'pending', '');
INSERT INTO `message` VALUES ('6', 'reytgh', 'krebullos13@gmail.com', 'jhghj', 'nbn', 'pending', '');
INSERT INTO `message` VALUES ('7', 'hjgjkhkhk', 'joshalger.ph1997@gmail.com', 'jhgjhkhkj', 'hjkkjhkljl', 'pending', '');
INSERT INTO `message` VALUES ('8', 'hjgjkhkhk', 'joshalger.ph1997@gmail.com', 'jhgjhkhkj', 'hjkkjhkljl', 'pending', '');
INSERT INTO `message` VALUES ('9', 'hjgjkhkhk', 'joshalger.ph1997@gmail.com', 'jhgjhkhkj', 'hjkkjhkljl', 'pending', '');
INSERT INTO `message` VALUES ('10', 'zxzx', 'ee@gmail.com', 'zxxcz', 'czccx', 'pending', '');
INSERT INTO `message` VALUES ('11', 'zxzx', 'ee@gmail.com', 'zxxcz', 'czccx', 'pending', '');
INSERT INTO `message` VALUES ('12', 'zxzx', 'ee@gmail.com', 'zxxcz', 'czccx', 'Read', '');
INSERT INTO `message` VALUES ('13', 'xzcz', 'zX@gmail.com', 'czcz', ' xcc', 'pending', '');
INSERT INTO `message` VALUES ('14', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'Read', '');
INSERT INTO `message` VALUES ('15', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', '&#xf2b6;', '');
INSERT INTO `message` VALUES ('16', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'pending', '');
INSERT INTO `message` VALUES ('17', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'read', '');
INSERT INTO `message` VALUES ('18', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'Read', '');
INSERT INTO `message` VALUES ('19', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'fas fa-enve', '');
INSERT INTO `message` VALUES ('20', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'read', '');
INSERT INTO `message` VALUES ('21', 'SDAD', 'joshalger.ph1997@gmail.com', 'ZXasc', 'zADA', 'read', '');
INSERT INTO `message` VALUES ('22', 'qqq', 'krebullos13@gmail.com', 'qq', 'qq', 'read', '');
INSERT INTO `message` VALUES ('23', 'test', 'test@gmail.com', 'adsada', 'test', 'Read', 'Causes1.JPG');
INSERT INTO `message` VALUES ('24', '21312', 'test@gmail.com', 'dsada', 'test', 'Read', 'Cause3.jpg');
INSERT INTO `message` VALUES ('25', '21312', 'test@gmail.com', 'dsada', 'test', 'Read', 'Causes2.jpg');
INSERT INTO `message` VALUES ('26', '21312', 'test@gmail.com', 'dsada', 'test', 'read', 'pp.jpg');
INSERT INTO `message` VALUES ('27', 'sadas', 'joshalger.ph1997@gmail.com', 'asdsa', 'eteqwe', 'read', 'bgg.jpg');
INSERT INTO `message` VALUES ('28', 'sdadas', 'joshalger.ph1997@gmail.com', 'asdasd', 'asdasdas', 'read', 'aaa.png');
INSERT INTO `message` VALUES ('29', 'sddasdsa', 'joshalger.ph1997@gmail.com', 'asdas', 'asdas', 'read', '2017-09-1211.45.281_grande.jpg');
INSERT INTO `message` VALUES ('30', 'huh', 'krebullos13@gmail.com', 'ANDROID', 'jjj', 'read', '6187729-wallpaper-for-laptop.png');
INSERT INTO `message` VALUES ('31', 'Josh Alger', 'joshalger.ph1997@gmail.com', 'Proof of Payment', 'This is my proof of payment.', 'read', 'erDiagram.jpg');
INSERT INTO `message` VALUES ('32', 'Mich Nieves', '09876543456', 'Proof of Payment', 'Mao ni uyy, aporado!', 'read', 'CAUSE3.jpg');
INSERT INTO `message` VALUES ('35', 'wewe', '4343', 'eyot', 'sasasa', 'read', 'CAUSE3.jpg');
INSERT INTO `message` VALUES ('36', 'FFF', '677', 'GG', 'BB', 'Read', 'EFFECT1.jpg');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `reserveDate` varchar(100) NOT NULL,
  `dateRequested` varchar(100) NOT NULL,
  `dateConfirmed` varchar(100) NOT NULL,
  `dateReserved` varchar(100) NOT NULL,
  `datePaid` varchar(100) NOT NULL,
  `dateDelivered` varchar(100) NOT NULL,
  `dateFinished` varchar(100) NOT NULL,
  `dateSold` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_id` (`party_id`),
  KEY `cat_id` (`cat_id`),
  KEY `message_id` (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('10', '0', '0', '0', 'a a', 'e424', 'dsdfdg', 'a@yahoo.com', '(1) Product 202, (2) Product 101, ', '400.5', 'reserved', '', '', '', '11/08/18 02:10:43 AM', '11/07/18 04:36:03 PM', '11/07/18 02:46:18 AM', '', '');
INSERT INTO `order` VALUES ('11', '0', '0', '0', 'Fe eew', '09023903920', 'rererere', 'xx@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '18000', 'confirmed', '', '11/07/18 05:21:19 PM', '11/07/18 11:24:07 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('12', '0', '0', '0', 'Yeng Consta', '09876542312', 'Aguada City', 'yeng@gmail.com', '(1) Elena Roses, (1) Lourdes Bouquet, Elena Roses', '18000', 'reserved', '', '11/07/18 05:23:15 PM', '11/07/18 11:21:07 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('13', '0', '0', '0', 'Nikko Maglangit', '09124367823', 'Magsaysay', 'Nikko@gmail.com', '(1) Frozen Theme Party, (1) Lourdes Bouquet, Frozen Theme Party', '13000', 'reserved', '', '11/07/18 10:10:35 PM', '11/07/18 11:15:11 PM', '11/08/18 12:37:15 PM', '', '', '', '');
INSERT INTO `order` VALUES ('14', '0', '0', '0', 'Christ Yap', '09167294567', 'Clarin City', 'Christ@gmail.com', '(1) Louie Suit, (1) Black Dress, Louie Suit', '13000', 'finished', '', '11/07/18 10:13:32 PM', '11/07/18 11:15:02 PM', '', '', '', '11/14/18 06:29:12 PM', '');
INSERT INTO `order` VALUES ('15', '0', '0', '0', 'Will Rebullos', '09755984487', 'Ozamiz City', 'Will@gmail.com', '(1) Louie Suit, Louie Suit', '2000', 'reserved', '', '11/07/18 11:24:03 PM', '11/08/18 12:02:56 AM', '11/08/18 02:12:27 AM', '', '', '', '');
INSERT INTO `order` VALUES ('16', '0', '0', '0', 'Hanna Gonzaga', '09835408725', 'Lam-an Ozamiz City ', 'hanna@gmail.com', '(1) Elena Roses, Elena Roses', '2000', 'paid', '', '11/07/18 11:27:44 PM', '11/08/18 01:20:39 AM', '11/08/18 12:50:41 PM', '11/09/18 02:25:32 AM', '', '', '');
INSERT INTO `order` VALUES ('17', '0', '0', '0', 'Laila Mohamed', '09345824386', 'Maadi Cairo Egypt ', 'laila@gmail.com', '(1) Elona Gown, Elona Gown', '2000', 'reserved', '', '11/07/18 11:28:42 PM', '11/08/18 01:12:10 AM', '11/08/18 01:26:55 PM', '', '', '', '');
INSERT INTO `order` VALUES ('18', '0', '0', '0', 'Emily Medlyn ', '0938649761', 'Burgos La salle', 'emily@gmail.com', '(1) Elena Roses, (1) Lourdes Bouquet, Elena Roses', '2000', 'finished', '', '11/07/18 11:32:18 PM', '', '', '', '11/08/18 01:10:25 AM', '11/13/18 03:15:37 PM', '');
INSERT INTO `order` VALUES ('19', '0', '0', '0', 'Jenalyn  Donald', '09258376512', 'Anex Ozamiz City ', 'jenalyn@gmail.com', '(1) Single Plater, Single Plater', '2000', 'reserved', '', '11/07/18 11:34:24 PM', '11/08/18 01:06:28 AM', '11/08/18 01:36:52 PM', '', '', '', '');
INSERT INTO `order` VALUES ('20', '0', '0', '0', 'Selena Ashlyn ', '09538764283', 'Don Anselmo Ozamiz City ', 'selena@gmail.com', '(1) Louie Suit, Louie Suit', '2000', 'delivered', '', '11/07/18 11:35:54 PM', '11/08/18 01:04:19 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('21', '0', '0', '0', 'Michelle  Hernandez', '098368153427', 'Cagayan City', 'michelle@gmail.com', '(1) Lourdes Bouquet, (1) Lourdes Bouquet, (1) Winona Gown, Lourdes Bouquet', '2000', 'delivered', '', '11/07/18 11:40:48 PM', '11/08/18 01:00:00 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('22', '0', '0', '0', 'Kendel price', '091183764938', 'Tinago Ozamiz City', 'kendel@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '2000', 'delivered', '', '11/07/18 11:42:32 PM', '11/08/18 01:01:47 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('23', '0', '0', '0', 'Alen  Blue ', '09172836451', 'Jimenez Ozamiz City ', 'alen@gmail.com', '(1) Black Dress, Black Dress', '2000', 'reserved', '', '11/07/18 11:44:16 PM', '11/08/18 12:20:53 AM', '11/08/18 02:08:26 AM', '', '', '', '');
INSERT INTO `order` VALUES ('24', '0', '0', '0', 'Sandra Wendel', '09267386512', 'Maningcol Ozamiz City ', 'sandra@gmail.com', '(1) Louie Suit, Louie Suit', '2000', 'paid', '', '11/07/18 11:45:40 PM', '11/08/18 12:19:24 AM', '11/08/18 02:08:30 AM', '11/08/18 02:26:20 PM', '', '', '');
INSERT INTO `order` VALUES ('25', '0', '0', '0', 'Bethaney  Chi', '09376481726', 'Abanel ST Ozamiz City ', 'bethaney@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '2000', 'reserved', '', '11/07/18 11:48:20 PM', '11/08/18 12:03:11 AM', '11/08/18 02:08:43 AM', '', '', '', '');
INSERT INTO `order` VALUES ('26', '0', '0', '0', 'M L', '09755986897', 'Ozamiz City', 'w@gmail.com', '(1) Louie Suit, Louie Suit', '2000', 'confirmed', '', '11/08/18 01:16:10 AM', '11/08/18 01:26:53 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('27', '0', '0', '0', 'a s', '0', 's', 'kai@gmail.com', '(1) Single Plater, (1) Single Plater, Single Plater', '2000', 'confirmed', '', '11/08/18 01:17:14 AM', '11/08/18 01:25:42 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('28', '0', '0', '0', 'i k', '09156104538', 'ls', 'Jiangchen@yahoo.com', '(1) Black Dress, (1) Black Dress, Black Dress', '2000', 'reserved', '', '11/08/18 01:17:50 AM', '11/08/18 01:24:36 AM', '11/08/18 12:38:04 PM', '', '', '', '');
INSERT INTO `order` VALUES ('29', '0', '0', '0', 'd j', '09156104678', 'ks', 'Liz@gmail.com', '(1) Winona Gown, Winona Gown', '2000', 'reserved', '', '11/08/18 01:18:31 AM', '11/08/18 01:23:49 AM', '11/08/18 12:38:13 PM', '', '', '', '');
INSERT INTO `order` VALUES ('30', '0', '0', '0', 'g d', '09092735719', 'as', 'grace.ramayrat@yahoo.com', '(1) Elona Gown, Elona Gown', '2000', 'reserved', '', '11/08/18 01:19:20 AM', '11/08/18 01:20:43 AM', '11/08/18 12:41:20 PM', '', '', '', '');
INSERT INTO `order` VALUES ('31', '0', '0', '0', 'Liz Rebullos', '09156104530', 'USA', 'joshalger.ph1997@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '2000', 'confirmed', '', '11/08/18 01:26:49 AM', '11/08/18 01:26:55 AM', '', '', '', '', '');
INSERT INTO `order` VALUES ('32', '0', '0', '0', 'Kassandra Ramayrat', '09156104530', 'Lanao del Norte', 'krebullos13@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '2000', 'reserved', '', '11/08/18 01:44:29 AM', '11/08/18 01:46:38 AM', '11/08/18 02:37:15 PM', '', '', '', '');
INSERT INTO `order` VALUES ('33', '0', '0', '0', 'Princess Ramayrat', '09755986688', 'Ozamiz City', 'kai@gmail.com', '(1) Elena Roses, Elena Roses', '2000', 'reserved', '', '11/08/18 02:12:25 AM', '11/08/18 02:12:41 AM', '11/08/18 02:11:52 PM', '', '', '', '');
INSERT INTO `order` VALUES ('34', '0', '0', '0', 'Jeo Daryl', '09156104537', 'Iligan City', 'jeo@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '9000', 'reserved', '', '11/08/18 12:37:10 PM', '11/08/18 12:37:18 PM', '11/08/18 02:03:25 PM', '', '', '', '');
INSERT INTO `order` VALUES ('35', '0', '0', '0', 'Jay Go', '09156104538', 'Ozamiz City', 'jay@gmail.com', '(1) Black Dress, Black Dress', '9000', 'reserved', '', '11/08/18 12:41:12 PM', '11/08/18 12:41:25 PM', '11/08/18 02:09:16 PM', '', '', '', '');
INSERT INTO `order` VALUES ('36', '0', '0', '0', 'Sheena Go', '09156104587', 'Iligan city', 'sh@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '9000', 'confirmed', '', '11/08/18 12:50:38 PM', '11/08/18 01:06:56 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('37', '0', '0', '0', 'Sh jj', '09156104678', 'Lanao del Norte', 'ebullos13@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '9000', 'reserved', '', '11/08/18 12:54:41 PM', '11/08/18 12:55:14 PM', '11/08/18 02:07:58 PM', '', '', '', '');
INSERT INTO `order` VALUES ('38', '0', '0', '0', 'A H', '09156104533', 'Iligan city', 'A@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '4000', 'reserved', '', '11/08/18 01:22:41 PM', '11/08/18 01:58:37 PM', '11/08/18 02:00:08 PM', '', '', '', '');
INSERT INTO `order` VALUES ('39', '0', '0', '0', 'u r', '09156104536', 'Iligan', 'u@gmail.com', '(1) Elena Roses, Elena Roses', '4000', 'paid', '', '11/08/18 01:23:22 PM', '11/08/18 01:33:37 PM', '11/09/18 02:07:37 AM', '11/09/18 03:14:39 AM', '', '', '');
INSERT INTO `order` VALUES ('40', '0', '0', '0', 'r j', '09156104598', 'Ozamiz City', 'r@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '4000', 'confirmed', '', '11/08/18 01:24:01 PM', '11/08/18 01:25:36 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('41', '0', '0', '0', 'J A', '09156104535', 'Ozamiz City', 'J@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '0', 'reserved', '', '11/08/18 01:52:30 PM', '11/08/18 01:58:01 PM', '11/08/18 02:01:37 PM', '', '', '', '');
INSERT INTO `order` VALUES ('42', '0', '0', '0', 'Ma Go', '09156104538', 'CdeO', 'ma@gmail.com', '(1) Elena Roses, Elena Roses', '0', 'reserved', '', '11/08/18 01:53:15 PM', '11/08/18 01:56:50 PM', '11/08/18 02:26:48 PM', '', '', '', '');
INSERT INTO `order` VALUES ('43', '0', '0', '0', 'g L', '0915610458', 'NW', 'G@gmail.com', '(1) Elona Gown, Elona Gown', '0', 'reserved', '', '11/08/18 01:53:55 PM', '11/08/18 01:54:50 PM', '11/08/18 02:37:11 PM', '', '', '', '');
INSERT INTO `order` VALUES ('44', '0', '0', '0', 'AB C', '09156104537', 'Iligan City', 'AB@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '0', 'reserved', '', '11/08/18 02:14:58 PM', '11/08/18 02:15:14 PM', '11/08/18 02:26:41 PM', '', '', '', '');
INSERT INTO `order` VALUES ('45', '0', '0', '0', 'l s', '09', 'jhj', 'o@gmail.com', '(1) Black Dress, (1) Black Dress, Black Dress', '6000', 'unconfirmed', '', '11/08/18 10:03:55 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('46', '0', '0', '0', 's a', 'aa', 'sd', 'aa@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:06:10 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('47', '0', '0', '0', 'j a', '097', 'akjsal', 'hs@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'unconfirmed', '', '11/08/18 10:07:46 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('48', '0', '0', '0', 'fdf dsds', 'sdsd', 'dsd', 'sds@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:08:29 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('49', '0', '0', '0', 'sas dsds', 'dsd', 'dsad', 'dfad@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:09:14 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('50', '0', '0', '0', 'slkdj dsmd', 'aacdn', 'dksj', 'askdj@gmail.com', '(1) Black Dress, Black Dress', '6000', 'unconfirmed', '', '11/08/18 10:10:11 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('51', '0', '0', '0', 'sd dkjs', 'skdj', 'ksjc', 'dskj@gmail.com', '(1) Single Plater, Single Plater', '6000', 'unconfirmed', '', '11/08/18 10:10:35 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('52', '0', '0', '0', 'sfmn daD', 'dlsk', 'fd', 'dl@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:11:00 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('53', '0', '0', '0', 'sdh d', 'dkj', 'dshh', 'asdkj@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:18:56 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('54', '0', '0', '0', 'adj adn', 'skjd', 'skdj', 'akdj@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'unconfirmed', '', '11/08/18 10:19:40 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('55', '0', '0', '0', 'sdm sldm', 'sdn', 'sdjd', 'sdk@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:20:04 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('56', '0', '0', '0', 'asdhj sdjs', 'sdsjd', 'sjdjh', 'sjdh@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '6000', 'unconfirmed', '', '11/08/18 10:20:23 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('57', '0', '0', '0', 'ash sjdhj', 'jdpa', 'wpod', 'als@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'unconfirmed', '', '11/08/18 10:20:41 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('58', '0', '0', '0', 'wdkej kdj', 'skd', 'sdh@gmail.com', 'dhj@gmail.com', '(1) Black Dress, Black Dress', '6000', 'unconfirmed', '', '11/08/18 10:21:32 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('59', '0', '0', '0', 'sgfd sdghs', 'sdfhj', 'ooo', 'skj@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:22:18 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('60', '0', '0', '0', 'llkl lkso', 'sdjo', 'djdei', 'sui@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:22:42 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('61', '0', '0', '0', 'aksj skjas', 'jjj', 'shwu', 'shaj@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:23:12 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('62', '0', '0', '0', 'askl djisj', 'dcbn', 'askdjks', 'sjh@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'unconfirmed', '', '11/08/18 10:23:32 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('63', '0', '0', '0', 'poap asao', 'paospao', 'asiap', 'pzOP@gmail.com', '(1) Single Plater, Single Plater', '6000', 'unconfirmed', '', '11/08/18 10:23:53 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('64', '0', '0', '0', 'ioe owei', 'qwoi', 'qowi', 'woi@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'unconfirmed', '', '11/08/18 10:24:39 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('65', '0', '0', '0', 'qwio qwoio', 'qwoi', 'qowi', 'siq@gmail.com', '(1) Louie Suit, (1) Elona Gown, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:25:24 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('66', '0', '0', '0', 'woi wiqoiwnz', 'swiuei', 'wuqei', 'eywi@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:25:42 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('67', '0', '0', '0', 'weoi wiq', 'euw', 'weiu', 'eu@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:25:59 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('68', '0', '0', '0', 'aksj kjskd', 'kdj', 'euwieu', 'sdj@gmail.com', '(1) Single Plater, Single Plater', '6000', 'unconfirmed', '', '11/08/18 10:26:15 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('69', '0', '0', '0', 'aaal alsks', 'aslk', 'sklwd', 'slk@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:26:35 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('70', '0', '0', '0', 'asj ksjak', 'kjxkjs', 'djsk', 'adjk@gmail.com', '(1) Black Dress, Black Dress', '6000', 'unconfirmed', '', '11/08/18 10:26:52 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('71', '0', '0', '0', 'agga sdsv', 'wdhwh', 'djh', 'qwyu@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:27:53 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('72', '0', '0', '0', 'lkql wlekl', 'wekwo', 'weuw', 'sld@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '6000', 'unconfirmed', '', '11/08/18 10:28:27 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('73', '0', '0', '0', 'xdbc qqqq', 'saosk', 'sdiwo', 'aosi@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'unconfirmed', '', '11/08/18 10:29:57 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('74', '0', '0', '0', 'al qleklwek', 'sdkjak', 'odewo', 'sakdj@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:30:23 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('75', '0', '0', '0', 'alsk qlskl', 'laks', 'wkld', 'qs@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:31:00 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('76', '0', '0', '0', 'aaa skjk', 'sdkj', 'oppp', 'aslk@gmail.com', '(1) Single Plater, Single Plater', '6000', 'unconfirmed', '', '11/08/18 10:31:48 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('77', '0', '0', '0', 'sjkq pop', 'epwoe', 'qe', 'dksj@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:32:11 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('78', '0', '0', '0', 'askl ldkwl', 'sd', 'ells', 'djks@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:32:34 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('79', '0', '0', '0', 'sld ggsldj', 'sajdka', 'sdljw', 'sakdj@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'unconfirmed', '', '11/08/18 10:33:05 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('80', '0', '0', '0', 'lol aksdjk', 'sksj', 'jwe', 'alskl@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:33:32 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('81', '0', '0', '0', 'ioio ann', 'qwojqo', 'qkj', 'kajks@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '6000', 'unconfirmed', '', '11/08/18 10:33:59 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('82', '0', '0', '0', ',sam qsma,', 'wpeio', '2oe31oue', 'qowioe@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'unconfirmed', '', '11/08/18 10:34:19 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('83', '0', '0', '0', 'aska qkql', 'slk', 'qswoje', 'wdjw@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'unconfirmed', '', '11/08/18 10:34:40 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('84', '0', '0', '0', 'sdlkls dflsdk', 'dkjks', 'wekwel', 'ekjk@gmail.com', '(1) Frozen Theme Party, (1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:35:07 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('85', '0', '0', '0', 'qmw oioi', 'pei', 'wskla@gmail.com', 'pqei@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'unconfirmed', '', '11/08/18 10:35:45 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('86', '0', '0', '0', 'asa sdksl', 'lskals', 'wewpo', 'alsk@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'unconfirmed', '', '11/08/18 10:36:11 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('87', '0', '0', '0', 'qmw qkwlqk', 'qwlkql', 'sqlk', 'skl@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:36:43 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('88', '0', '0', '0', 'xncv cnb', 'scmb', 'skdjkc', 'sdj@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'unconfirmed', '', '11/08/18 10:37:15 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('89', '0', '0', '0', 'sdk sldklas', 'sdasl', 'roeir', 'sdlsk@gmail.com', '(1) Single Plater, Single Plater', '6000', 'unconfirmed', '', '11/08/18 10:37:39 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('90', '0', '0', '0', 'hhhh h', 'h', 'qkwejwk', 'h@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'sold', '', '11/08/18 10:38:03 PM', '11/10/18 10:05:07 PM', '11/10/18 10:03:32 PM', '11/10/18 10:03:36 PM', '11/10/18 10:03:39 PM', '11/10/18 10:03:43 PM', '');
INSERT INTO `order` VALUES ('92', '0', '0', '0', 'ggg g', 'g', 'ghsg', 'g@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'paid', '', '11/08/18 10:38:52 PM', '11/09/18 10:38:13 PM', '11/09/18 10:38:25 PM', '11/10/18 11:19:17 PM', '', '', '');
INSERT INTO `order` VALUES ('93', '0', '0', '0', 'kkk kkk', 'k', 'qlsk', 'kash@gmail.com', '(1) Lourdes Bouquet, (1) Lourdes Bouquet, (1) Black Dress, Lourdes Bouquet', '6000', 'confirmed', '', '11/08/18 10:39:56 PM', '11/09/18 10:08:03 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('94', '0', '0', '0', 'h,mn mnm', 'nm', 'wjks', 'nm@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'reserved', '', '11/08/18 10:40:15 PM', '11/09/18 10:07:13 PM', '11/09/18 10:07:32 PM', '', '', '', '');
INSERT INTO `order` VALUES ('95', '0', '0', '0', 'am sldj', 'kl', 'ljds', 'adjka@gmail.com', '(1) Single Plater, Single Plater', '6000', 'confirmed', '', '11/08/18 10:40:37 PM', '11/09/18 10:06:56 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('96', '0', '0', '0', 'yuiy yu', 'yu', 'iuwi', 'uy@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'confirmed', '', '11/08/18 10:41:00 PM', '11/09/18 10:06:53 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('97', '0', '0', '0', 'dhj hdhjkd', 'hdsjhd', 'kdjsk', 'sdh@gmail.com', '(1) Elona Gown, (1) Elona Gown, Elona Gown', '6000', 'sold', '', '11/08/18 10:41:21 PM', '11/09/18 12:58:51 PM', '11/09/18 12:58:38 PM', '11/09/18 12:58:41 PM', '11/09/18 12:58:45 PM', '11/09/18 12:58:48 PM', '');
INSERT INTO `order` VALUES ('98', '0', '0', '0', 'fjdk adfjkl', 'skjf', 'djk', 'sdkj@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'sold', '', '11/08/18 10:44:00 PM', '11/09/18 12:56:40 PM', '11/09/18 12:34:47 PM', '11/09/18 12:35:11 PM', '11/09/18 12:56:29 PM', '11/09/18 12:56:32 PM', '');
INSERT INTO `order` VALUES ('99', '0', '0', '0', 'aslm kdjkl', 'skdjl', 'sjdls', 'sdkj@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'sold', '', '11/08/18 10:44:17 PM', '11/09/18 10:07:50 PM', '11/09/18 12:34:10 PM', '11/09/18 10:07:38 PM', '11/09/18 10:07:42 PM', '11/09/18 10:07:46 PM', '');
INSERT INTO `order` VALUES ('101', '0', '0', '0', 'rrr r', 'r', 'r', 'r@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'confirmed', '', '11/08/18 10:44:54 PM', '11/09/18 12:26:39 PM', '11/09/18 12:26:14 PM', '', '', '', '');
INSERT INTO `order` VALUES ('102', '0', '0', '0', 'dshaj jdhkjsh', 'sadjhajks', 'sdklj', 'sdhkjshd@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '6000', 'sold', '', '11/08/18 10:47:47 PM', '11/09/18 12:56:10 PM', '11/09/18 12:27:30 PM', '11/09/18 12:27:33 PM', '11/09/18 12:27:37 PM', '11/09/18 12:27:43 PM', '');
INSERT INTO `order` VALUES ('103', '0', '0', '0', 'dfkdlskf sjkjf', 'fjsdjf', 'wdlk', 'slfks@gmail.com', '(1) Elena Roses, Elena Roses', '6000', 'sold', '', '11/08/18 10:48:15 PM', '11/09/18 10:37:36 PM', '11/09/18 10:08:26 PM', '11/09/18 10:08:33 PM', '11/09/18 10:08:37 PM', '11/09/18 10:08:42 PM', '');
INSERT INTO `order` VALUES ('104', '0', '0', '0', 'sss wdlkwd', 'sdklks', 'wldk', 'sldkls@gmail.com', '(1) Single Plater, Single Plater', '6000', 'sold', '', '11/08/18 10:48:34 PM', '11/09/18 12:56:00 PM', '11/09/18 11:31:42 AM', '11/09/18 11:31:47 AM', '11/09/18 11:31:51 AM', '11/09/18 12:55:09 PM', '');
INSERT INTO `order` VALUES ('105', '0', '0', '0', 'ggg aksjk', 'sjka', 'adlsj', 'djlk@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '6000', 'sold', '', '11/08/18 10:49:37 PM', '11/09/18 11:32:23 AM', '11/09/18 03:14:46 AM', '11/09/18 03:14:52 AM', '11/09/18 03:14:56 AM', '11/09/18 03:15:01 AM', '');
INSERT INTO `order` VALUES ('106', '0', '0', '0', 'zsdkja sdj', 'sdkj', 'sdj', 'djk@gmail.com', '(1) Louie Suit, Louie Suit', '6000', 'sold', '', '11/08/18 10:50:02 PM', '11/09/18 03:12:19 AM', '11/09/18 02:54:35 AM', '11/09/18 02:54:47 AM', '11/09/18 02:54:58 AM', '11/09/18 02:55:09 AM', '');
INSERT INTO `order` VALUES ('107', '0', '0', '0', 'lll l', 'll', 'ldk', 'sdk@gmail.com', '(1) Elona Gown, Elona Gown', '6000', 'sold', '', '11/08/18 10:50:26 PM', '11/09/18 03:14:17 AM', '11/09/18 02:27:06 AM', '11/09/18 02:27:10 AM', '11/09/18 02:31:22 AM', '11/09/18 03:13:58 AM', '');
INSERT INTO `order` VALUES ('108', '0', '0', '0', 's,d dlls', 'sldk', 'DKJS', 'sdlk@gmail.com', '(1) Winona Gown, Winona Gown', '6000', 'paid', '', '11/08/18 10:50:43 PM', '11/09/18 12:24:07 AM', '11/09/18 12:24:24 AM', '11/09/18 02:09:11 AM', '', '', '');
INSERT INTO `order` VALUES ('109', '0', '0', '0', 'Anna  Lovato', '09128475937', 'Lam-an', 'anna@gmail.com', '(1) Frozen Theme Party, (1) Louie Suit, (1) Winona Gown, (1) Elena Roses, (1) Black Dress, (1) Louie Suit, Frozen Theme Party', '6000', 'sold', '', '11/09/18 12:27:52 AM', '11/09/18 03:12:36 AM', '11/09/18 02:25:39 AM', '11/09/18 02:26:29 AM', '11/09/18 02:31:30 AM', '11/09/18 02:31:53 AM', '');
INSERT INTO `order` VALUES ('110', '0', '0', '0', 'Louis Manzano', '09782345678', 'Manila City', 'louis@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '4000', 'sold', '', '11/09/18 12:42:07 PM', '11/09/18 12:55:16 PM', '11/09/18 12:43:31 PM', '11/09/18 12:44:25 PM', '11/09/18 12:44:58 PM', '11/09/18 12:45:32 PM', '');
INSERT INTO `order` VALUES ('111', '0', '0', '0', 'Joe Dy', '09126474532', 'Ozamiz City', 'Joe@gmail.com', '(1) Elena Roses, (1) Louie Suit, Elena Roses', '4000', 'sold', '', '11/10/18 12:09:07 AM', '11/10/18 12:12:33 AM', '11/10/18 12:09:41 AM', '11/10/18 12:09:44 AM', '11/10/18 12:09:48 AM', '11/10/18 12:10:13 AM', '');
INSERT INTO `order` VALUES ('113', '0', '0', '0', 'Jane Salas', '09783456784', 'Ozamizo', 'jane@gmail.com', '(1) Elena Roses, (1) Frozen Theme Party, Elena Roses', '0', 'finished', '', '11/10/18 11:25:35 PM', '11/11/18 08:36:12 AM', '11/11/18 08:36:42 AM', '11/11/18 08:36:50 AM', '11/11/18 08:36:54 AM', '11/13/18 02:55:38 PM', '');
INSERT INTO `order` VALUES ('114', '0', '0', '0', 'Jose Manalo', '09764538754', 'Ozamiz City', 'Jose@gmail.com', '(1) Frozen Theme Party, (1) Lourdes Bouquet, Frozen Theme Party', '0', 'unconfirmed', '', '11/10/18 11:28:28 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('115', '0', '0', '0', 'Inis Ku', '09785467345', 'Ozamiz City', 'Inis@gmail.com', '(1) Frozen Theme Party, Frozen Theme Party', '0', 'unconfirmed', '', '11/10/18 11:36:51 PM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('116', '0', '0', '0', 'Nash Santa', '09456710965', 'Ozamzi City', 'Nash@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '4000', 'sold', '', '11/11/18 08:24:14 AM', '11/11/18 09:29:01 AM', '11/11/18 08:40:14 AM', '11/11/18 08:40:21 AM', '11/11/18 08:40:26 AM', '11/11/18 08:40:32 AM', '');
INSERT INTO `order` VALUES ('117', '0', '0', '0', 'Loias Anso', '09876548935', 'Ozamiz City', 'Loias@gmail.com', '(1) Frozen Theme Party, <br />\r\n<b>Notice</b>:  Undefined index: product in <b>C:xampphtdocsshoppincludehomemodal.php</b> on line <b>36</b><br />\r\n', '4000', 'reserved', '', '11/11/18 09:32:00 AM', '11/11/18 09:38:48 AM', '11/11/18 09:38:54 AM', '', '', '', '');
INSERT INTO `order` VALUES ('118', '0', '0', '0', 'Josh Alger', '09783456756', 'Iligan City', 'Josh@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '4000', 'unconfirmed', '', '11/11/18 09:43:51 AM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('119', '0', '0', '0', 'Lessy Chiong', '09546789845', 'Mindanao Ave.', 'Lessy@gmail.com', '(1) Louie Suit, <br />\r\n<b>Notice</b>:  Undefined variable: product in <b>C:xampphtdocsshoppincludehomemodal.php</b> on line <b>36</b><br />\r\n', '4000', 'unconfirmed', '', '11/11/18 09:53:16 AM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('120', '0', '0', '0', 'Risa Hontiverous', '0934562897', 'Css City', 'Risa@gmil.com', '(1) Yellow Truck, <br />\r\n<b>Notice</b>:  Undefined variable: product in <b>C:xampphtdocsshoppincludehomemodal.php</b> on line <b>36</b><br />\r\n', '4000', 'unconfirmed', '', '11/11/18 09:55:36 AM', '', '', '', '', '', '');
INSERT INTO `order` VALUES ('122', '0', '0', '0', 'Ch Y', '09653567823', 'Iligan City', 'CH@gmail.com', '(1) Louie Suit, (1) Lourdes Bouquet, Louie Suit', '4000', 'finished', '', '11/11/18 11:56:14 AM', '11/14/18 06:25:16 PM', '11/14/18 06:25:38 PM', '11/14/18 06:26:27 PM', '11/14/18 06:26:32 PM', '11/14/18 06:26:47 PM', '');
INSERT INTO `order` VALUES ('123', '0', '0', '0', 'Jo Yen', '098745634356', 'Iligan City', 'Jo@gmail.com', '(1) Black Dress, <br />\r\n<b>Notice</b>:  Undefined variable: product in <b>C:xampphtdocsshoppincludehomemodal.php</b> on line <b>36</b><br />\r\n', '4000', 'sold', '', '11/11/18 11:58:00 AM', '11/13/18 12:58:09 AM', '11/13/18 12:42:43 AM', '11/13/18 12:42:46 AM', '11/13/18 12:42:49 AM', '11/13/18 12:42:52 AM', '');
INSERT INTO `order` VALUES ('124', '0', '0', '0', 'Jean Manaog', '0956437862', 'Iligan', 'Jean@gmail.com', '(1) Black Dress, Black Dress', '4000', 'sold', '', '11/11/18 12:01:01 PM', '11/13/18 12:42:15 AM', '11/13/18 12:41:06 AM', '11/13/18 12:41:10 AM', '11/13/18 12:41:13 AM', '11/13/18 12:41:16 AM', '');
INSERT INTO `order` VALUES ('125', '0', '0', '0', 'Sheena Lagas', '09068665766', 'Tudela Mis.Occ', 'sheelagas@gmail.com', '(1) Elona Gown, Elona Gown', '4000', 'finished', '', '11/13/18 01:49:48 PM', '11/13/18 02:02:15 PM', '11/13/18 02:32:31 PM', '11/13/18 02:48:23 PM', '11/13/18 10:45:14 PM', '11/13/18 11:33:43 PM', '');
INSERT INTO `order` VALUES ('126', '0', '0', '0', 'Yar Yasein', '09345672896', 'Ozamiz City', 'yar@gmail.com', '(1) Lourdes Bouquet, (1) Elena Roses, (1) Single Plater, (1) Lourdes Bouquet, Lourdes Bouquet', '4000', 'sold', '', '11/13/18 02:02:09 PM', '11/13/18 02:10:19 PM', '11/13/18 02:08:50 PM', '11/13/18 02:08:54 PM', '11/13/18 02:10:00 PM', '11/13/18 02:10:13 PM', '');
INSERT INTO `order` VALUES ('127', '0', '0', '0', 'May Magbanta', '09672345678', 'Ozamiz City', 'may@gmail.com', '(1) Lourdes Bouquet, Lourdes Bouquet', '0', 'confirmed', '', '11/14/18 10:57:15 PM', '11/15/18 06:35:59 PM', '', '', '', '', '');
INSERT INTO `order` VALUES ('128', '0', '0', '0', 'Melissa Ricks', '09786543456', 'Ozamiz City', 'melissa@gmail.com', '(1) Lourdes Bouquet, (1) Elena Roses, Lourdes Bouquet', '8000', 'unconfirmed', '', '11/16/18 06:29:28 PM', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Price` double NOT NULL,
  `Type` text NOT NULL,
  `Category` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('83', '2017-09-1211.45.281_grande.jpg', 'Lourdes Bouquet', 'dummy', '4000', 'Valentine Bouquet', 'Flowers & Bouquets', 'Reserved');
INSERT INTO `products` VALUES ('84', 'frozen.jpg', 'Frozen Theme Party', 'dummy', '9000', 'Birthday Package', 'Party Packages', 'Available');
INSERT INTO `products` VALUES ('85', 'Red-Stands-For-Love.jpg', 'Elena Roses', 'dummy', '2000', 'Bridal Bouquet', 'Flowers & Bouquets', 'Out of Stock');
INSERT INTO `products` VALUES ('86', 'Bimage.jpg', 'Elona Gown', 'dummy', '4000', 'Bridal Gown', 'Gowns & Suits', 'Available');
INSERT INTO `products` VALUES ('87', 'Gimage.jpg', 'Louie Suit', 'dummy', '2000', 'Mens Suit', 'Gowns & Suits', 'Reserved');
INSERT INTO `products` VALUES ('88', 'Pimage1.jpg', 'Black Dress', 'dummy', '3000', 'Long Dress', 'Gowns & Suits', 'Available');
INSERT INTO `products` VALUES ('89', 'Pimage.jpg', 'Winona Gown', 'dummy', '2000', 'Long Dress', 'Gowns & Suits', 'Available');
INSERT INTO `products` VALUES ('90', 'food1.jpg', 'Single Plater', 'dummy', '3000', 'Main Course', 'Foods & Caterings', 'Out of Stock');
INSERT INTO `products` VALUES ('91', 'Causes2.jpg', 'Yellow Truck', 'dummy', '5000', 'Travel Truck', 'Car Rentals', 'Reserved');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'administrator', 'bobby');
INSERT INTO `user` VALUES ('2', 'admin', 'admin');
