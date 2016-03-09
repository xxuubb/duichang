-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: 118.123.16.130
-- 生成日期: 2016 年 03 月 09 日 09:51
-- 服务器版本: 5.6.22
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shanghaitaiji`
--

-- --------------------------------------------------------

--
-- 表的结构 `box`
--

CREATE TABLE IF NOT EXISTS `box` (
  `box_num` varchar(32) NOT NULL,
  `box_size` varchar(32) DEFAULT NULL,
  `box_weight` varchar(32) DEFAULT NULL,
  `box_other` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`box_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `box`
--

INSERT INTO `box` (`box_num`, `box_size`, `box_weight`, `box_other`) VALUES
('9999', '9999', '999', ''),
('jw00022', '25 X 25', '450KG', '大师傅'),
('jw000222e', '25 X 25', '450KG', '的说法啥都发大水'),
('VSLU1111111', '20GP', 'E', 'D'),
('是东方四大', '333', '33', '33');

-- --------------------------------------------------------

--
-- 表的结构 `business`
--

CREATE TABLE IF NOT EXISTS `business` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `business`
--

INSERT INTO `business` (`id`, `bu_num`, `bu_box_num`, `bu_ruku_time`, `bu_ruku_customer`, `bu_ruku_add`, `bu_ruku_status`, `bu_ruku_type`, `bu_ruku_cost`, `bu_jc_time`, `bu_jc_customer`, `bu_jc_add`, `bu_jc_status`, `bu_jc_type`, `bu_jc_fixcost`, `bu_jc_costrate`, `bu_cc_time`, `bu_cc_customer`, `bu_cc_add`, `bu_cc_status`, `bu_cc_type`, `bu_cc_fixcost`, `bu_cc_costrate`, `bu_ck_time`, `bu_ck_customer`, `bu_ck_add`, `bu_ck_status`, `bu_ck_type`, `bu_ck_cost`) VALUES
(12, 'SHTJ20160125154643', 'jw00022', '2016-01-25 15:46:29', 'LD', '到事发地是范德萨发的', '未入库', '售出', 100.99, '2016-01-25 15:47:12', '上海太集', '发个', '未进场', '售出', 22.00, 21.00, '2016-01-25 15:48:00', '上海太集', '的撒', '未出场', '翻新', 22.00, 222.00, '2016-01-25 15:48:16', 'VSKY', '是打发点', '未出库', '售出', 23.00),
(13, 'SHTJ20160125154659', 'jw00022', '2016-01-25 15:46:50', '上海太集', '的撒', '未入库', '售出', 13.44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'SHTJ20160125181339', 'VSLU1111111', '2016-01-25 18:13:02', '上海太集', '铁印路117号', '已入库', '售出', 2000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` int(16) NOT NULL,
  `customer_email` varchar(32) DEFAULT NULL,
  `customer_company` varchar(256) DEFAULT NULL,
  `customer_address` varchar(256) DEFAULT NULL,
  `customer_other` varchar(256) DEFAULT NULL,
  `customer_type` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_phone`, `customer_email`, `customer_company`, `customer_address`, `customer_other`, `customer_type`) VALUES
('33', 33, '33', '33', '33', '', '委托方'),
('LD', 56848428, 'v2@vs-l.com', 'LD CO.', 'SHANGHAI', '', '委托方'),
('VSKY', 568484818, 'v1@vs-l.com', '胜天国际', '', '', '委托方'),
('上海太集', 56848000, 'abc@vs-l.com', '上海太集', '淞桥东路111号', '', '营运人'),
('徐兵', 123, '123@13', '上海聚玩', '上海延长路', '', '委托方');

-- --------------------------------------------------------

--
-- 表的结构 `dc_user`
--

CREATE TABLE IF NOT EXISTS `dc_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- 表的结构 `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `fee_num` int(16) NOT NULL,
  `fee_name` varchar(32) NOT NULL,
  `fee_ex` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`fee_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fee`
--

INSERT INTO `fee` (`fee_num`, `fee_name`, `fee_ex`) VALUES
(1, '上车费', '上车'),
(2, '下车费', '下车'),
(8, '修理费', '修理'),
(223, '3333', '33333');

-- --------------------------------------------------------

--
-- 表的结构 `mzy_income`
--

CREATE TABLE IF NOT EXISTS `mzy_income` (
  `income_time` varchar(32) NOT NULL,
  `income_type` varchar(32) DEFAULT NULL,
  `income_money` float(32,2) DEFAULT NULL,
  `income_user` varchar(32) DEFAULT NULL,
  `income_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`income_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mzy_income`
--

INSERT INTO `mzy_income` (`income_time`, `income_type`, `income_money`, `income_user`, `income_other`) VALUES
('2016-03-04 09:23:02', '面部护理', 444.00, '', ''),
('2016-03-06 15:35:09', '汗蒸养生', 500.00, '', '徐红');

-- --------------------------------------------------------

--
-- 表的结构 `mzy_product`
--

CREATE TABLE IF NOT EXISTS `mzy_product` (
  `number` int(32) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(32) NOT NULL,
  `product_num` int(32) NOT NULL,
  `product_price` float(32,2) DEFAULT NULL,
  `product_type` varchar(32) DEFAULT NULL,
  `product_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `mzy_product`
--

INSERT INTO `mzy_product` (`number`, `product_name`, `product_num`, `product_price`, `product_type`, `product_other`) VALUES
(2, '沙棘茶', 1, 1980.00, NULL, NULL),
(3, '玉米肽糙米胚牙片', 1, 380.00, NULL, NULL),
(4, '芦荟餐具洗洁精', 5, 45.00, NULL, NULL),
(5, '健康食品礼盒', 1, 865.00, NULL, NULL),
(6, '健扬胶囊', 1, 318.00, NULL, NULL),
(7, '芦荟清洁套装', 1, 129.00, NULL, NULL),
(8, '芦荟多用途清洁剂', 5, 45.00, NULL, NULL),
(9, '活立多牌一生糖套装', 1, 558.00, NULL, NULL),
(10, '臻荟洗护发套装（女士）', 5, 168.00, NULL, NULL),
(11, '芦荟沐浴露', 5, 60.00, NULL, NULL),
(12, '芦荟牙膏套装', 5, 57.00, NULL, NULL),
(13, '臻荟清透丝润洗护发套装男士用', 2, 168.00, NULL, NULL),
(14, '芦荟胶优惠套装', 2, 330.00, NULL, NULL),
(15, '芦荟王浆矿物粉优惠套装', 1, 2061.00, NULL, NULL),
(16, '芦荟超浓缩洗衣液', 5, 75.00, NULL, NULL),
(17, '胶原肽芦荟咀嚼片', 1, 320.00, NULL, NULL),
(18, '红枣胶原肽沙棘汁优惠套装', 1, 2716.00, NULL, NULL),
(19, '芦荟蔬果洁净剂', 5, 26.00, NULL, NULL),
(20, '紧肤精华露', 1, 480.00, NULL, NULL),
(21, '活力精华露', 1, 480.00, NULL, NULL),
(22, '焕颜修复精华霜', 1, 480.00, NULL, NULL),
(23, '润唇膏', 2, 76.00, NULL, NULL),
(24, '唇膏（蜜桃红）', 2, 130.00, NULL, NULL),
(25, '唇膏（牡丹红）', 2, 130.00, NULL, NULL),
(26, '敏感修复套装', 1, 488.00, NULL, NULL),
(27, '敏感修护系列组合装', 1, 1049.00, NULL, NULL),
(28, '滋润套装', 1, 488.00, NULL, NULL),
(29, '滋润系列组合装', 2, 1159.00, NULL, NULL),
(30, '清爽套装', 1, 488.00, NULL, NULL),
(31, '清爽系列组合装', 1, 1036.00, NULL, NULL),
(32, '美白润肤隔离霜', 1, 226.00, NULL, NULL),
(33, '脸部安瓶精华液', 1, 550.00, NULL, NULL),
(34, '维e润手霜', 2, 63.00, NULL, NULL),
(35, '润白清透防晒霜', 2, 280.00, NULL, NULL),
(36, '腮红（花漾粉彩）', 1, 245.00, NULL, NULL),
(37, '玛丽艳BB霜', 1, 220.00, NULL, NULL),
(38, '双色粉底霜（自然色）', 1, 265.00, NULL, NULL),
(39, '营养餐（螺旋藻南瓜粉）', 1, 198.00, NULL, NULL),
(40, '黑泥面膜套装', 1, 528.00, NULL, NULL),
(41, '肽藻营养粉优惠套装', 1, 2425.00, NULL, NULL),
(42, '红酒', 1, 685.00, NULL, NULL),
(43, '活肤眼霜', 1, 380.00, NULL, NULL),
(44, '护眼啫哩', 1, 280.00, NULL, NULL),
(45, '柔和洁肤乳', 1, 168.00, NULL, NULL),
(46, '深层保湿日霜', 1, 298.00, NULL, NULL),
(47, '活细胞晚霜', 1, 348.00, NULL, NULL),
(48, '润肤面膜', 1, 238.00, NULL, NULL),
(49, '敏感洁肤霜', 1, 160.00, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `mzy_product_in`
--

CREATE TABLE IF NOT EXISTS `mzy_product_in` (
  `product_in_time` varchar(32) NOT NULL,
  `product_in_name` varchar(32) NOT NULL,
  `product_in_num` int(32) NOT NULL,
  `product_in_price` float(32,2) DEFAULT NULL,
  `product_in_user` varchar(32) DEFAULT NULL,
  `product_in_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_in_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mzy_product_in`
--

INSERT INTO `mzy_product_in` (`product_in_time`, `product_in_name`, `product_in_num`, `product_in_price`, `product_in_user`, `product_in_other`) VALUES
('2016-03-04 11:26:38', '玉米肽糙米胚牙片', 1, 380.00, '顾姐', ''),
('2016-03-04 11:27:34', '芦荟餐具洗洁精', 5, 45.00, '顾姐', ''),
('2016-03-04 11:32:53', '沙棘茶', 10, 1980.00, '顾姐', '优惠9送1'),
('2016-03-04 11:38:14', '健康食品礼盒', 1, 865.00, '顾姐', ''),
('2016-03-04 11:38:55', '健扬胶囊', 1, 318.00, '顾姐', ''),
('2016-03-04 11:47:52', '芦荟清洁套装', 1, 129.00, '顾姐', ''),
('2016-03-04 11:51:35', '芦荟多用途清洁剂', 1, 45.00, '顾姐', ''),
('2016-03-04 11:57:28', '活立多牌一生糖套装', 1, 558.00, '顾姐', ''),
('2016-03-04 11:58:17', '臻荟洗护发套装（女士）', 5, 168.00, '顾姐', ''),
('2016-03-04 11:59:17', '芦荟沐浴露', 5, 60.00, '顾姐', ''),
('2016-03-04 12:00:19', '芦荟牙膏套装', 5, 57.00, '顾姐', ''),
('2016-03-04 12:12:06', '臻荟清透丝润洗护发套装男士用', 2, 168.00, '顾姐', ''),
('2016-03-04 12:13:51', '芦荟胶优惠套装', 1, 330.00, '顾姐', '一盒十只'),
('2016-03-04 12:15:24', '芦荟王浆矿物粉优惠套装', 1, 2061.00, '顾姐', '9送1共10瓶'),
('2016-03-04 12:18:04', '芦荟超浓缩洗衣液', 5, 75.00, '顾姐', ''),
('2016-03-04 12:18:46', '胶原肽芦荟咀嚼片', 1, 320.00, '顾姐', ''),
('2016-03-06 10:35:29', '红枣胶原肽沙棘汁优惠套装', 1, 2716.00, '', '7送1共8盒'),
('2016-03-06 10:37:30', '芦荟蔬果洁净剂', 5, 26.00, '', ''),
('2016-03-06 10:38:26', '紧肤精华露', 1, 480.00, '', ''),
('2016-03-06 10:38:54', '活力精华露', 1, 480.00, '', ''),
('2016-03-06 10:39:26', '焕颜修复精华霜', 1, 480.00, '', ''),
('2016-03-06 10:39:52', '润唇膏', 2, 76.00, '', ''),
('2016-03-06 10:40:20', '唇膏（蜜桃红）', 2, 130.00, '', ''),
('2016-03-06 10:40:42', '唇膏（牡丹红）', 2, 130.00, '', ''),
('2016-03-06 10:42:27', '敏感修复套装', 1, 488.00, '', ''),
('2016-03-06 10:42:56', '敏感修护系列组合装', 1, 1049.00, '', ''),
('2016-03-06 10:43:26', '滋润套装', 1, 488.00, '', ''),
('2016-03-06 10:44:10', '滋润系列组合装', 1, 1159.00, '', ''),
('2016-03-06 10:46:49', '清爽套装', 1, 488.00, '', ''),
('2016-03-06 10:46:58', '清爽套装', 1, 488.00, '', ''),
('2016-03-06 10:48:26', '滋润系列组合装', 1, 1036.00, '', ''),
('2016-03-06 11:01:59', '清爽系列组合装', 1, 1036.00, '', ''),
('2016-03-06 11:02:39', '美白润肤隔离霜', 1, 226.00, '', ''),
('2016-03-06 11:03:13', '脸部安瓶精华液', 1, 550.00, '', ''),
('2016-03-06 11:03:49', '维e润手霜', 2, 63.00, '', ''),
('2016-03-06 11:04:18', '润白清透防晒霜', 1, 280.00, '', ''),
('2016-03-06 11:04:55', '腮红（花漾粉彩）', 1, 245.00, '', ''),
('2016-03-06 11:05:29', '玛丽艳BB霜', 1, 220.00, '', ''),
('2016-03-06 11:05:50', '双色粉底霜（自然色）', 1, 265.00, '', ''),
('2016-03-06 11:06:42', '营养餐（螺旋藻南瓜粉）', 1, 198.00, '', ''),
('2016-03-06 11:07:25', '黑泥面膜套装', 1, 528.00, '', ''),
('2016-03-06 11:08:11', '肽藻营养粉优惠套装', 1, 2425.00, '', ''),
('2016-03-06 11:39:02', '红酒', 1, 685.00, '季艳', '3送1共4瓶'),
('2016-03-06 11:40:37', '芦荟胶优惠套装', 1, 330.00, '季艳', ''),
('2016-03-06 11:41:02', '润白清透防晒霜', 1, 280.00, '季艳', ''),
('2016-03-06 11:48:50', '活肤眼霜', 1, 380.00, '季艳', ''),
('2016-03-06 11:49:23', '护眼啫哩', 1, 280.00, '季艳', ''),
('2016-03-06 11:49:48', '柔和洁肤乳', 1, 168.00, '季艳', ''),
('2016-03-06 11:50:21', '深层保湿日霜', 1, 298.00, '季艳', ''),
('2016-03-06 11:50:49', '活细胞晚霜', 1, 348.00, '季艳', ''),
('2016-03-06 11:51:17', '润肤面膜', 1, 238.00, '季艳', ''),
('2016-03-06 11:51:50', '滋润系列组合装', 1, 1159.00, '季艳', ''),
('2016-03-06 11:53:26', '敏感洁肤霜', 1, 160.00, '季艳', '');

-- --------------------------------------------------------

--
-- 表的结构 `mzy_product_out`
--

CREATE TABLE IF NOT EXISTS `mzy_product_out` (
  `product_out_time` varchar(32) NOT NULL,
  `product_out_name` varchar(32) NOT NULL,
  `product_out_num` int(32) NOT NULL,
  `product_out_price` float(32,2) DEFAULT NULL,
  `product_out_user` varchar(32) DEFAULT NULL,
  `product_out_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_out_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mzy_product_type`
--

CREATE TABLE IF NOT EXISTS `mzy_product_type` (
  `product_name` varchar(32) NOT NULL,
  `product_price` float(32,2) DEFAULT NULL,
  `product_type` varchar(32) DEFAULT NULL,
  `product_other` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`product_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mzy_product_type`
--

INSERT INTO `mzy_product_type` (`product_name`, `product_price`, `product_type`, `product_other`) VALUES
('健康食品礼盒', 865.00, '保健', ''),
('健扬胶囊', 318.00, '保健', ''),
('双色粉底霜（自然色）', 265.00, '彩妆', ''),
('唇膏（牡丹红）', 130.00, '彩妆', ''),
('唇膏（蜜桃红）', 130.00, '彩妆', ''),
('护眼啫哩', 280.00, '护肤', ''),
('敏感修复套装', 488.00, '美容护肤', ''),
('敏感修护系列组合装', 1049.00, '美容护肤', ''),
('敏感洁肤霜', 160.00, '护肤', ''),
('柔和洁肤乳', 168.00, '护肤', ''),
('沙棘茶', 256.00, '茶', ''),
('活力精华露', 480.00, '护肤美容', ''),
('活立多牌一生糖套装', 558.00, '保健', '一盒6瓶'),
('活细胞晚霜', 348.00, '护肤', ''),
('活肤眼霜', 380.00, '护肤', ''),
('润唇膏', 76.00, '彩妆', ''),
('润白清透防晒霜', 280.00, '美容护肤', ''),
('润肤面膜', 238.00, '护肤', ''),
('深层保湿日霜', 298.00, '护肤', ''),
('清爽套装', 488.00, '美容护肤', ''),
('清爽系列组合装', 1036.00, '美容护肤', ''),
('滋润套装', 488.00, '美容护肤', ''),
('滋润系列组合装', 1159.00, '美容护肤', ''),
('焕颜修复精华霜', 480.00, '护肤美容', ''),
('玉米肽糙米胚牙片', 380.00, '保健', ''),
('玛丽艳BB霜', 220.00, '彩妆', ''),
('紧肤精华露', 480.00, '美容护肤', ''),
('红枣胶原肽沙棘汁优惠套装', 2716.00, '', '7送1共8盒'),
('红酒', 268.00, '', '3送1共4瓶'),
('维e润手霜', 63.00, '护肤', ''),
('美白润肤隔离霜', 226.00, '美容护肤', ''),
('肽藻营养粉优惠套装', 2425.00, '保健', '5送1共6瓶'),
('胶原肽芦荟咀嚼片', 320.00, '', ''),
('脸部安瓶精华液', 550.00, '美容护肤', ''),
('腮红（花漾粉彩）', 245.00, '彩妆', ''),
('臻荟洗护发套装（女士）', 168.00, '个人日用品', ''),
('臻荟洗护发套装（男士）', 168.00, '', ''),
('臻荟清透丝润洗护发套装男士用', 168.00, '', ''),
('芦荟多用途清洁剂', 45.00, '家居日用', ''),
('芦荟沐浴露', 60.00, '个人日用品', ''),
('芦荟清洁套装', 129.00, '家居日用', ''),
('芦荟牙膏套装', 57.00, '个人日用品', ''),
('芦荟王浆矿物粉优惠套装', 2061.00, '', '9送1共10瓶'),
('芦荟胶', 28.00, '养颜', ''),
('芦荟胶优惠套装', 330.00, '', '一盒10只'),
('芦荟蔬果洁净剂', 26.00, '家居用品', ''),
('芦荟超浓缩洗衣液', 75.00, '', ''),
('芦荟餐具洗洁精', 45.00, '家居日用品', ''),
('营养餐（螺旋藻南瓜粉）', 198.00, '保健', ''),
('黑泥面膜套装', 528.00, '美容护肤', '');

-- --------------------------------------------------------

--
-- 表的结构 `mzy_user`
--

CREATE TABLE IF NOT EXISTS `mzy_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `mzy_user`
--

INSERT INTO `mzy_user` (`id`, `username`, `userpass`, `realname`, `phone`, `dc_right`) VALUES
(1, '顾姐', 'd93591bdf7860e1e4ee2fca799911215', '', NULL, ''),
(2, '孙姐', 'd93591bdf7860e1e4ee2fca799911215', '徐兵', 123, '管理员'),
(3, '季艳', 'd93591bdf7860e1e4ee2fca799911215', '季艳', 123, '管理员');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `userpass`, `realname`, `phone`, `dc_right`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', NULL, ''),
(7, 'xubing', '1aabac6d068eef6a7bad3fdf50a05cc8', '徐兵', 123, '管理员'),
(8, 'xubing', 'e10adc3949ba59abbe56e057f20f883e', '是的', 123, '管理员'),
(9, 'ss', 'c20ad4d76fe97759aa27a0c99bff6710', '是的', 123, '管理员'),
(10, 'test', '098f6bcd4621d373cade4e832627b4f6', '', 0, '管理员');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
