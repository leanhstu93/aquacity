/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : batdongsan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-23 01:15:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tintuc_lang`
-- ----------------------------
DROP TABLE IF EXISTS `tintuc_lang`;
CREATE TABLE `tintuc_lang` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `idLoai` int(4) DEFAULT NULL,
  `HinhAnh` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` text CHARACTER SET utf8,
  `NoiDung` text CHARACTER SET utf8,
  `Date` int(4) DEFAULT NULL,
  `keyword` text CHARACTER SET utf8,
  `seo_description` text,
  `seo_title` varchar(255) DEFAULT NULL,
  `Active` tinyint(1) DEFAULT '1' COMMENT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`Alias`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tintuc_lang
-- ----------------------------
INSERT INTO `tintuc_lang` VALUES ('1', '6', '/uploads/files/img1404.jpg', 'DỰ ÁN ĐÀO TẠO MÔI GIỚI BẤT ĐỘNG SẢN MIỄN PHÍ ', 'DU-AN-DAO-TAO-MOI-GIOI-BAT-DONG-SAN-MIEN-PHI', null, '<p><strong>&nbsp;HOT NHẤT VIỆT NAM</strong><br />\r\n<br />\r\n<strong>Mục Đ&iacute;ch Dự &Aacute;n :</strong><br />\r\n- Nhằm gi&uacute;p Sinh vi&ecirc;n, người đam m&ecirc; tiếp cận với ng&agrave;nh kinh doanh BĐS một c&aacute;ch hiệu quả nhất th&ocirc;ng qua đ&agrave;o tạo kiến thức BĐS. Bằng giải ph&aacute;p vừa học vừa l&agrave;m sinh vi&ecirc;n, người ham học hỏi c&oacute; thể tự trang trải cuộc sống của m&igrave;nh th&ocirc;ng qua việc cộng t&aacute;c với dự &aacute;n của C&ocirc;ng ty Đất Ph&ugrave; Sa. Hơn nữa dự &aacute;n đ&agrave;o tạo v&agrave; giới thiệu việc l&agrave;m miễn ph&iacute; l&agrave; m&ocirc;i trường thuận lợi cho những t&agrave;i năng l&agrave;m nghề m&ocirc;i giới&nbsp;bất động sản tỏa s&aacute;ng đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển của thị trường bất động sản Việt Nam.</p>\r\n\r\n<p>-C&aacute;c bạn c&oacute; biết hiện nay tại TP.HCM đang cần khoảng 10.000 nh&acirc;n vi&ecirc;n m&ocirc;i giới bất động sản cho hoạt động trong năm 2016. C&ocirc;ng ty bất động sản Đất Ph&ugrave; Sa xin giới thiệu chương tr&igrave;nh d&agrave;nh cho tất cả mọi người được học v&agrave; tiếp cận miễn ph&iacute; về nghề m&ocirc;i giới bất động sản. Bạn chỉ cần muốn tham gia v&agrave;o nghề m&ocirc;i giới h&atilde;y đến với Đất Ph&ugrave; Sa để trở th&agrave;nh chuy&ecirc;n gia m&ocirc;i giới hang đầu Việt Nam v&agrave; thu nhập đ&aacute;ng mơ ước với nghề nhiều người mơ ước.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Li&ecirc;n hệ</strong>&nbsp;<strong>:0906.5678.12 (Ban Đ&agrave;o tạo)&nbsp; để được tư vấn cụ thể về chương tr&igrave;nh v&agrave; được tham dự v&agrave;o dự &aacute;n.</strong></p>\r\n\r\n<p><br />\r\n<strong>Điều Kiện v&agrave; Quyền Lợi khi Tham Gia Dự &Aacute;n :</strong><br />\r\n<br />\r\n<strong>Điều Kiện:</strong>&nbsp;<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L&agrave; sinh vi&ecirc;n c&aacute;c trường đại học cao đẳng.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L&agrave; người năng động, y&ecirc;u th&iacute;ch kinh doanh, c&oacute; tinh thần cầu tiến, mong muốn l&agrave;m th&ecirc;m v&agrave; y&ecirc;u th&iacute;ch m&ocirc;i giới&nbsp;bất động sản.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chuẩn bị hồ sơ gồm: chứng minh thư (c&ocirc;ng chứng), thẻ sinh vi&ecirc;n (pho to), đơn xin việc(viết tay), CV giới thiệu bạn th&acirc;n&nbsp;2 ảnh 3*4.<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (lưu &yacute; hồ sơ kh&ocirc;ng ho&agrave;n trả )<br />\r\n<br />\r\n<strong>Quyền&nbsp; Lợi :</strong><br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thường xuy&ecirc;n được đ&agrave;o tạo miễn ph&iacute; c&aacute;c kỹ năng mềm, kỹ năng m&ocirc;i giới chuy&ecirc;n s&acirc;u.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tham gia miến ph&iacute; một số hội thảo về bất động sản ,tư duy l&agrave;m gi&agrave;u &hellip;do c&ocirc;ng ty hoặc đối t&aacute;c của c&ocirc;ng ty tổ chức.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được hưởng ưu đ&atilde;i khi tham gia c&aacute;c kh&oacute;a học bất động sản do c&ocirc;ng ty tổ chức.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được l&agrave;m việc ,cộng t&aacute;c trong m&ocirc;i trường chuy&ecirc;n nghiệp th&acirc;n thiện .<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được đ&agrave;o tạo miễn ph&iacute; c&aacute;c kiến thức ,kỹ năng cơ bản khi bắt đầu l&agrave;m việc.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tham gia b&aacute;n c&aacute;c sản phẩm do c&ocirc;ng ty cung cấp v&agrave; hưởng quyền lợi t&agrave;i ch&iacute;nh cụ thể ghi trong hợp đồng cộng t&aacute;c .<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&oacute; cơ hội thăng tiến trở th&agrave;nh trưởng nh&oacute;m hay trở th&agrave;nh người quản l&yacute; của c&ocirc;ng ty. C&oacute; thể c&ugrave;ng C&ocirc;ng ty g&oacute;p vốn th&agrave;nh lập C&ocirc;ng ty con để c&ugrave;ng nhau ph&aacute;t triển dự &aacute;n kinh doanh.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được c&ocirc;ng ty định hướng v&agrave; hỗ trợ để trở th&agrave;nh những chủ doanh nghiệp trong tương lại.<br />\r\n<br />\r\n<strong>Quy Tr&igrave;nh Tuyển Dụng Chuy&ecirc;n Vi&ecirc;n :</strong><br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Trưởng ph&ograve;ng dự &aacute;n duyệt hồ sơ v&agrave; phỏng vấn =&gt; tập hợp hồ sơ đạt y&ecirc;u cầu gửi l&ecirc;n bộ phận h&agrave;nh ch&iacute;nh lưu trữ =&gt; k&yacute; hợp đồng cộng t&aacute;c vi&ecirc;n.<br />\r\n<br />\r\n<strong>Quy Tr&igrave;nh Đ&agrave;o Tạo Chuy&ecirc;n Vi&ecirc;n :</strong><br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ng&agrave;y đầu chuy&ecirc;n vi&ecirc;n được hướng dẫn t&igrave;m hiểu trước về ng&agrave;nh nghề kinh doanh của c&ocirc;ng ty, sản phẩm đang hot nhất tr&ecirc;n thị trường hiện nay.<br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ng&agrave;y thứ 2 chuy&ecirc;n vi&ecirc;n được hướng dẫn cụ thể về ng&agrave;nh nghề kinh doanh ,cung cấp th&ocirc;ng tin cụ thể ch&iacute;nh x&aacute;c về sản phẩm,được hướng dẫn kỹ năng tư vấn kh&aacute;ch hang,v&agrave; kỹ năng t&igrave;m kiếm kh&aacute;ch h&agrave;ng.<br />\r\n<br />\r\n-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ng&agrave;y thứ 3 kiểm tra lại những th&ocirc;ng tin m&agrave; chuy&ecirc;n vi&ecirc;n đ&atilde; năm bắt được đồng thời chỉnh sửa v&agrave; bổ xung.<br />\r\n<br />\r\n&nbsp; =&gt; trong qu&aacute; tr&igrave;nh thường xuy&ecirc;n gi&uacute;p đỡ chuy&ecirc;n vi&ecirc;n khi gặp kh&oacute; khăn trong c&ocirc;ng việc cần sự trợ gi&uacute;p.<br />\r\n<br />\r\n<strong>C&aacute;c Hoạt Động Dự Kiến Của Dự &Aacute;n :</strong><br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tham gia b&aacute;n c&aacute;c kh&oacute;a học bất động sản do c&ocirc;ng ty cung cấp<br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tham gia b&aacute;n c&aacute;c bất động sản của đối t&aacute;c do dự &aacute;n li&ecirc;n kết.<br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Thường xuy&ecirc;n tổ chức họp nh&oacute;m theo từng chuy&ecirc;n đề một tuần/lần<br />\r\n<br />\r\n- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tổ chức c&aacute;c buổi xeminar tại c&aacute;c trường đại học.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>C&ocirc;ng ty CP ĐT-XD-BĐS Đất Ph&ugrave; Sa&nbsp;&nbsp;Hotline: 0906.5678.12</em></strong></p>\r\n\r\n<p>69 Đường số 7, KP 5, Phường An Ph&uacute;, Quận 2. TP.HCM</p>\r\n', null, '', '', null, '1');
