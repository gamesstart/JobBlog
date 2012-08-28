/*
MySQL - 5.5.16 : Database - registration
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`registration` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `registration`;

/*Table structure for table `sux_logs` */

DROP TABLE IF EXISTS `sux_logs`;

CREATE TABLE `sux_logs` (
  `logdate` datetime DEFAULT NULL COMMENT '日志日期',
  `logtitle` varchar(50) DEFAULT NULL COMMENT '日志标题',
  `logcontent` text COMMENT '日志内容',
  `Operating` varchar(50) DEFAULT NULL COMMENT '操作人',
  `logtp` varchar(20) DEFAULT NULL COMMENT '日志类型'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `sux_member` */

DROP TABLE IF EXISTS `sux_member`;

CREATE TABLE `sux_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `loginid` varchar(36) NOT NULL COMMENT '登录ID',
  `truename` varchar(36) NOT NULL COMMENT '用户名',
  `password` varchar(128) NOT NULL COMMENT '密码',
  `ip` varchar(16) DEFAULT NULL COMMENT 'IP',
  `cdate` datetime DEFAULT NULL COMMENT '创建时间',
  `isu` int(11) DEFAULT NULL COMMENT '是否禁用',
  `email` varchar(245) DEFAULT NULL COMMENT '电子邮件',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `sux_member` (`uid`, `loginid`, `truename`, `password`, `ip`, `cdate`, `isu`, `email`) VALUES (NULL, 'admin', '管理员', '7dfce26044c772ed8d9606ce5ea6cdfb', '127.0.0.1', '2012-08-28 00:00:00', '1', 'gamesstart@163.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
