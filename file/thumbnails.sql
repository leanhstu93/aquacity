/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : thuexe

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-24 22:19:51
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `thumbnails`
-- ----------------------------
DROP TABLE IF EXISTS `thumbnails`;
CREATE TABLE `thumbnails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idXe` int(11) DEFAULT NULL,
  `UrlImage` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thumbnails
-- ----------------------------
INSERT INTO `thumbnails` VALUES ('1', '1', '/uploads/files/resize_1_700x393_sorento_2013_1760.jpg', '1');
INSERT INTO `thumbnails` VALUES ('2', '1', 'thanhnhan_auto_kia-sorento-2013-5_8990.jpg', '1');
INSERT INTO `thumbnails` VALUES ('4', '1', 'thanhnhan_auto_kia-sorento-r-2013-9_6460.jpg', '1');
INSERT INTO `thumbnails` VALUES ('6', '2', '/uploads/files/IMG_2405.jpg', '1');
INSERT INTO `thumbnails` VALUES ('7', '2', '/uploads/files/resize_1_700x393_sorento_2013_1760.jpg', '1');
INSERT INTO `thumbnails` VALUES ('23', '18', '/uploads/images/Untitled(1).png', '1');
INSERT INTO `thumbnails` VALUES ('24', '18', '/uploads/images/3-ly-do-pha-hong-xe-1_8597.jpg', '1');
INSERT INTO `thumbnails` VALUES ('25', '19', '/uploads/images/can-canh-cuu-cay-xang-bi-ro-ri-trong-mua-lu-o-quang-ninh-hinh-2_2406.jpg', '1');
INSERT INTO `thumbnails` VALUES ('26', '20', '/uploads/files/resize_1_700x393_sorento_2013_1760.jpg', '1');
INSERT INTO `thumbnails` VALUES ('27', '20', '/uploads/files/resize_1_720x400_sorento_2013_1760.jpg', '1');
INSERT INTO `thumbnails` VALUES ('28', '21', '/uploads/images/ResizeImage.jpg', '1');
INSERT INTO `thumbnails` VALUES ('29', '22', '/uploads/images/Untitled.png', '1');
INSERT INTO `thumbnails` VALUES ('30', '59', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('31', '59', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('32', '59', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('33', '59', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('34', '59', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('35', '60', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('36', '60', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('37', '60', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('38', '60', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('39', '60', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('40', '61', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('41', '61', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('42', '61', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('43', '61', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('44', '61', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('45', '62', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('46', '62', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('47', '62', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('48', '62', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('49', '62', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('50', '33', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('51', '33', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('52', '33', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('53', '33', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('54', '33', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('55', '34', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('56', '34', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('57', '34', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('58', '34', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('59', '34', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('60', '35', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('61', '35', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('62', '35', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('63', '35', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('64', '35', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('65', '36', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('66', '36', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('67', '36', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('68', '36', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('69', '36', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('70', '37', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('71', '37', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('72', '37', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('73', '37', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('74', '37', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('75', '38', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('76', '38', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('77', '38', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('78', '38', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('79', '38', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('80', '39', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('81', '39', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('82', '39', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('83', '39', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('84', '39', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('85', '40', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('86', '40', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('87', '40', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('88', '40', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('89', '40', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('90', '41', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('91', '41', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('92', '41', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('93', '41', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('94', '41', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('95', '42', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('96', '42', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('97', '42', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('98', '42', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('99', '42', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('100', '43', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('101', '43', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('102', '43', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('103', '43', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('104', '43', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('105', '44', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('106', '44', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('107', '44', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('108', '44', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('109', '44', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('110', '46', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('111', '46', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('112', '46', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('113', '46', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('114', '46', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('115', '47', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('116', '47', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('117', '47', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('118', '47', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('119', '47', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('120', '48', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('121', '48', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('122', '48', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('123', '48', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('124', '48', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('125', '49', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('126', '49', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('127', '49', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('128', '49', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('129', '49', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('130', '50', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('131', '50', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('132', '50', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('133', '50', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('134', '50', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('135', '51', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('136', '51', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('137', '51', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('138', '51', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('139', '51', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('140', '52', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('141', '52', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('142', '52', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('143', '52', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('144', '52', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('145', '53', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('146', '53', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('147', '53', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('148', '53', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('149', '53', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('150', '54', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('151', '54', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('152', '54', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('153', '54', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('154', '54', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('155', '55', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('156', '55', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('157', '55', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('158', '55', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('159', '55', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('160', '56', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('161', '56', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('162', '56', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('163', '56', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('164', '56', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('165', '57', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('166', '57', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('167', '57', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('168', '57', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('169', '57', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('170', '58', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('171', '58', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('172', '58', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('173', '58', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('174', '58', '/uploads/images/resize_1_720x400_mazda_3_2015_amazing_photo_9020.jpg', '1');
INSERT INTO `thumbnails` VALUES ('175', '63', '/uploads/images/xe/2016-audi-a3_100532820_m.jpg', '1');
INSERT INTO `thumbnails` VALUES ('176', '63', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('177', '63', '/uploads/images/xe/2016-audi-a3_100532820_m.jpg', '1');
INSERT INTO `thumbnails` VALUES ('178', '63', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('179', '63', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('180', '68', '/uploads/images/xe/2016-audi-a3_100532820_m.jpg', '1');
INSERT INTO `thumbnails` VALUES ('181', '68', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('182', '68', '/uploads/images/xe/2016-audi-a3_100532820_m.jpg', '1');
INSERT INTO `thumbnails` VALUES ('183', '68', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('184', '68', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('185', '69', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('186', '69', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('187', '69', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('188', '69', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('189', '69', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('190', '70', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('191', '70', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('192', '70', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('193', '70', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('194', '70', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('195', '71', '/uploads/images/xe/2016-audi-a3_100532820_m.jpg', '1');
INSERT INTO `thumbnails` VALUES ('196', '71', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('197', '71', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('198', '71', '/uploads/images/xe/13RDX.jpg', '1');
INSERT INTO `thumbnails` VALUES ('199', '71', '/uploads/images/xe/2016-honda-accord-sedan-first-drive-review-car-and-driver-photo-660633-s-original.jpg', '1');
INSERT INTO `thumbnails` VALUES ('200', '72', '/uploads/images/xe/2016-honda-civic-sedan-side2.jpg', '1');
INSERT INTO `thumbnails` VALUES ('201', '72', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('202', '72', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('203', '72', '/uploads/images/xe/mini-clubman-06.jpg', '1');
INSERT INTO `thumbnails` VALUES ('204', '72', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('205', '73', '/uploads/files/SUV-512.png', '1');
INSERT INTO `thumbnails` VALUES ('206', '73', '/uploads/images/xe/2016-audi-a6-tdi-quattro-photo-644949-s-1280x782.jpg', '1');
INSERT INTO `thumbnails` VALUES ('207', '73', '/uploads/images/xe/2016-honda-accord-sedan-first-drive-review-car-and-driver-photo-660633-s-original.jpg', '1');
INSERT INTO `thumbnails` VALUES ('208', '73', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('209', '73', '/uploads/images/xe/mini_paceman_2014_front_static.jpg', '1');
INSERT INTO `thumbnails` VALUES ('210', '74', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('211', '74', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('212', '74', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('213', '74', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('214', '74', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('215', '75', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('216', '75', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('217', '75', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('218', '75', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('219', '75', '/uploads/images/xe/hyundai_santa_fe_limited.jpeg', '1');
INSERT INTO `thumbnails` VALUES ('220', '76', '/uploads/images/xe/2016-Mini-Paceman-Concept.jpg', '1');
INSERT INTO `thumbnails` VALUES ('221', '76', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('222', '76', '/uploads/images/xe/Dodge-Journey-RT-2016.jpg', '1');
INSERT INTO `thumbnails` VALUES ('223', '76', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('224', '76', '/uploads/images/xe/2016-mini-cooper-countryman.jpg', '1');
INSERT INTO `thumbnails` VALUES ('225', '77', '/uploads/images/edadadada.jpg', '1');
INSERT INTO `thumbnails` VALUES ('226', '77', '/uploads/images/resize_1_720x400_hyundai-i10_9504.jpg', '1');
INSERT INTO `thumbnails` VALUES ('227', '88', '/uploads/files/brand_logo_4.png', '1');
INSERT INTO `thumbnails` VALUES ('228', '88', '/uploads/files/mini-car-icon-75292.png', '1');
INSERT INTO `thumbnails` VALUES ('229', '88', '/uploads/files/resize_1_700x393_sorento_2013_1760.jpg', '1');
