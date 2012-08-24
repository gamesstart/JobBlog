-- 主机: localhost
-- 生成日期: 2012 年 08 月 23 日 16:40
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `registration`
--

-- --------------------------------------------------------

--
-- 表的结构 `logs`
--
-- 创建时间: 2012 年 08 月 23 日 08:14
-- 最后更新: 2012 年 08 月 23 日 08:14
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `logdate` datetime DEFAULT NULL COMMENT '日志日期',
  `logtitle` varchar(50) DEFAULT NULL COMMENT '日志标题',
  `logcontent` text COMMENT '日志内容',
  `Operating` varchar(50) DEFAULT NULL COMMENT '操作人',
  `logtp` varchar(20) DEFAULT NULL COMMENT '日志类型'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `member`
--
-- 创建时间: 2012 年 08 月 23 日 08:10
-- 最后更新: 2012 年 08 月 23 日 08:10
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `loginid` varchar(36) NOT NULL COMMENT '登录ID',
  `truename` varchar(36) NOT NULL COMMENT '用户名',
  `password` varchar(128) NOT NULL COMMENT '密码',
  `ip` varchar(16) DEFAULT NULL COMMENT 'IP',
  `cdate` datetime DEFAULT NULL COMMENT '创建时间',
  `isu` int(11) DEFAULT NULL COMMENT '是否禁用',
  `email` varchar(245) DEFAULT NULL COMMENT '电子邮件',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
