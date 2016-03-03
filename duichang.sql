/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : duichang

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-03-03 21:37:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `box`
-- ----------------------------
DROP TABLE IF EXISTS `box`;
CREATE TABLE `box` (
  `box_num` varchar(32) NOT NULL,
  `box_size` varchar(32) DEFAULT NULL,
  `box_weight` varchar(32) DEFAULT NULL,
  `box_other` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`box_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of box
-- ----------------------------
INSERT INTO `box` VALUES ('jw00022', '25 X 25', '450KG', '大师傅');

-- ----------------------------
-- Table structure for `business`
-- ----------------------------
DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `bu_num` varchar(64) NOT NULL,
  `bu_box_num` varchar(32) NOT NULL,
  `bu_ruku_time` varchar(32) DEFAULT NULL,
  `bu_ruku_customer` varchar(32) DEFAULT NULL,
  `bu_ruku_add` varchar(256) DEFAULT NULL,
  `bu_ruku_status` varchar(32) DEFAULT NULL,
  `bu_ruku_type` varchar(32) DEFAULT NULL,
  `bu_ruku_cost` float(32,2) DEFAULT NULL,
  `bu_jc_time` varchar(32) DEFAULT NULL,
  `bu_jc_customer` varchar(32) DEFAULT NULL,
  `bu_jc_add` varchar(256) DEFAULT NULL,
  `bu_jc_status` varchar(32) DEFAULT NULL,
  `bu_jc_type` varchar(32) DEFAULT NULL,
  `bu_jc_fixcost` float(32,2) DEFAULT NULL,
  `bu_jc_costrate` float(32,2) DEFAULT NULL,
  `bu_cc_time` varchar(32) DEFAULT NULL,
  `bu_cc_customer` varchar(32) DEFAULT NULL,
  `bu_cc_add` varchar(256) DEFAULT NULL,
  `bu_cc_status` varchar(32) DEFAULT NULL,
  `bu_cc_type` varchar(32) DEFAULT NULL,
  `bu_cc_fixcost` float(32,2) DEFAULT NULL,
  `bu_cc_costrate` float(32,2) DEFAULT NULL,
  `bu_ck_time` varchar(32) DEFAULT NULL,
  `bu_ck_customer` varchar(32) DEFAULT NULL,
  `bu_ck_add` varchar(256) DEFAULT NULL,
  `bu_ck_status` varchar(32) DEFAULT NULL,
  `bu_ck_type` varchar(32) DEFAULT NULL,
  `bu_ck_cost` float(32,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of business
-- ----------------------------
INSERT INTO `business` VALUES ('1', '160125023433', '', '', '', '', '', '', '0.00', '16-01-25 02:46:09', '徐兵', '大放大', '未进场', '售出', '1.10', '21.00', '16-01-25 02:49:00', '徐兵', '', '未出场', '售出', '0.00', '0.00', '16-01-25 03:12:19', '徐兵', '是打发点', '未出库', '售出', '23.00');
INSERT INTO `business` VALUES ('2', 'SHTJ160125024335', 'jw00022', '16-01-25 10:43:18', '徐兵1', '', '', '售出', '101.00', '', '', '', '', '', '0.00', '0.00', '16-01-25 02:49:05', '徐兵', '的撒', '未出场', '售出', '11.00', '222.00', null, null, null, null, null, null);
INSERT INTO `business` VALUES ('3', 'SHTJ160125024402', '', '', '', '', '', '', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('4', 'SHTJ160125024419', '', '', '', '', '', '', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('5', 'SHTJ160125024420', '', '', '', '', '', '', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('6', 'SHTJ160125024421', '', '', '', '', '', '', '0.00', '16-01-25 02:24:35', '徐兵1', '打发', '正在进场', '翻新', '22.00', '22.00', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('7', 'SHTJ160125024422', '', '', '', '', '', '', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('8', 'SHTJ160125024816', '', '', '', '', '', '', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('9', 'SHTJ160125025013', 'jw00022', '16-01-25 10:49:56', '徐兵', '的说法是撒旦法', '未入库', '售出', '20.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('10', 'SHTJ160125025148', 'jw00022', '16-01-25 10:51:44', '徐兵', '', '未入库', '售出', '0.00', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `business` VALUES ('11', 'SHTJ160125025250', 'jw00022', '16-01-25 10:51:50', '徐兵', '到事发地是范德萨发的', '未入库', '售出', '13.44', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` int(16) NOT NULL,
  `customer_email` varchar(32) DEFAULT NULL,
  `customer_company` varchar(256) DEFAULT NULL,
  `customer_address` varchar(256) DEFAULT NULL,
  `customer_other` varchar(256) DEFAULT NULL,
  `customer_type` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('徐兵', '123', '123@13', '', 'sdfsda', '', '委托方');
INSERT INTO `customer` VALUES ('徐兵1', '123', '123@13', '上海聚玩是大法师发发呆时', '上海延长路多发发大厦是东方', '是大法师', '营运人');

-- ----------------------------
-- Table structure for `fee`
-- ----------------------------
DROP TABLE IF EXISTS `fee`;
CREATE TABLE `fee` (
  `fee_num` int(16) NOT NULL,
  `fee_name` varchar(32) NOT NULL,
  `fee_ex` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`fee_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fee
-- ----------------------------
INSERT INTO `fee` VALUES ('1', '上车费', '上车');

-- ----------------------------
-- Table structure for `mzy_income`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_income`;
CREATE TABLE `mzy_income` (
  `income_time` varchar(32) NOT NULL,
  `income_type` varchar(32) DEFAULT NULL,
  `income_money` float(32,2) DEFAULT NULL,
  `income_user` varchar(32) DEFAULT NULL,
  `income_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`income_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mzy_income
-- ----------------------------
INSERT INTO `mzy_income` VALUES ('2016-02-29 21:12:53', '汗蒸养生', '33.00', null, '');
INSERT INTO `mzy_income` VALUES ('2016-03-01 14:43:11', '产品销售', '44.00', '', '');
INSERT INTO `mzy_income` VALUES ('2016-03-01 14:43:27', '面部护理', '43.00', '', '');
INSERT INTO `mzy_income` VALUES ('2016-03-01 15:18:29', '面部护理', '333.00', '孙姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-01 15:19:08', '产品销售', '5555.00', '季艳', '');
INSERT INTO `mzy_income` VALUES ('2016-03-01 16:00:57', '产品销售', '544.00', '季艳', 'rewt');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:37:56', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:38:05', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:38:25', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:40:32', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:40:45', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:45:20', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:45:27', '面部护理', '0.00', '顾姐', '');
INSERT INTO `mzy_income` VALUES ('2016-03-02 20:48:25', '面部护理', '0.00', '顾姐', '');

-- ----------------------------
-- Table structure for `mzy_product`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_product`;
CREATE TABLE `mzy_product` (
  `number` int(32) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(32) NOT NULL,
  `product_num` int(32) NOT NULL,
  `product_price` float(32,2) DEFAULT NULL,
  `product_type` varchar(32) DEFAULT NULL,
  `product_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mzy_product
-- ----------------------------
INSERT INTO `mzy_product` VALUES ('2', '沙棘茶', '55', '111.00', null, null);

-- ----------------------------
-- Table structure for `mzy_product_in`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_product_in`;
CREATE TABLE `mzy_product_in` (
  `product_in_time` varchar(32) NOT NULL,
  `product_in_name` varchar(32) NOT NULL,
  `product_in_num` int(32) NOT NULL,
  `product_in_price` float(32,2) DEFAULT NULL,
  `product_in_user` varchar(32) DEFAULT NULL,
  `product_in_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_in_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mzy_product_in
-- ----------------------------
INSERT INTO `mzy_product_in` VALUES ('2016-03-01 18:47:19', '沙棘茶', '10', '240.00', '', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-01 19:39:45', '沙棘茶', '10', '22.00', '孙姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:01:58', '沙棘茶', '33', '44.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:02:17', '沙棘茶', '44', '33.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:06:13', '沙棘茶', '11', '333.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:06:27', '沙棘茶', '12', '222.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:08:20', '沙棘茶', '11', '12.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:08:26', '沙棘茶', '21', '12.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:12:19', '沙棘茶', '22', '11.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:12:26', '沙棘茶', '33', '21.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:20:57', '沙棘茶', '22', '22.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:21:19', '沙棘茶', '33', '33.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:24:52', '沙棘茶', '11', '11.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:33:02', '沙棘茶', '22', '22.00', '顾姐', '');
INSERT INTO `mzy_product_in` VALUES ('2016-03-02 20:33:14', '沙棘茶', '11', '111.00', '顾姐', '');

-- ----------------------------
-- Table structure for `mzy_product_out`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_product_out`;
CREATE TABLE `mzy_product_out` (
  `product_out_time` varchar(32) NOT NULL,
  `product_out_name` varchar(32) NOT NULL,
  `product_out_num` int(32) NOT NULL,
  `product_out_price` float(32,2) DEFAULT NULL,
  `product_out_user` varchar(32) DEFAULT NULL,
  `product_out_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_out_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mzy_product_out
-- ----------------------------
INSERT INTO `mzy_product_out` VALUES ('2016-03-03 20:22:49', '沙棘茶', '11', '25.00', '顾姐', '');

-- ----------------------------
-- Table structure for `mzy_product_type`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_product_type`;
CREATE TABLE `mzy_product_type` (
  `product_name` varchar(32) NOT NULL,
  `product_price` float(32,2) DEFAULT NULL,
  `product_type` varchar(32) DEFAULT NULL,
  `product_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mzy_product_type
-- ----------------------------
INSERT INTO `mzy_product_type` VALUES ('沙棘茶', '256.00', '茶', '');
INSERT INTO `mzy_product_type` VALUES ('芦荟胶', '28.00', '养颜', '');

-- ----------------------------
-- Table structure for `mzy_user`
-- ----------------------------
DROP TABLE IF EXISTS `mzy_user`;
CREATE TABLE `mzy_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of mzy_user
-- ----------------------------
INSERT INTO `mzy_user` VALUES ('1', '顾姐', 'd93591bdf7860e1e4ee2fca799911215', '', null, '');
INSERT INTO `mzy_user` VALUES ('2', '孙姐', 'd93591bdf7860e1e4ee2fca799911215', '徐兵', '123', '管理员');
INSERT INTO `mzy_user` VALUES ('3', '季艳', 'd93591bdf7860e1e4ee2fca799911215', '季艳', '123', '管理员');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', null, '');
INSERT INTO `user` VALUES ('7', 'xubing', '1aabac6d068eef6a7bad3fdf50a05cc8', '徐兵', '123', '管理员');
INSERT INTO `user` VALUES ('8', 'xubing', 'e10adc3949ba59abbe56e057f20f883e', '是的', '123', '管理员');
INSERT INTO `user` VALUES ('9', 'ss', 'c20ad4d76fe97759aa27a0c99bff6710', '是的', '123', '管理员');
INSERT INTO `user` VALUES ('10', 'test', '098f6bcd4621d373cade4e832627b4f6', '', '0', '管理员');
