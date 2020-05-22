/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : 127.0.0.1:3306
Source Database       : php10

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-06-23 12:56:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(100) NOT NULL DEFAULT '',
  `intime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('57', '345345', '345345', '1497868254');
INSERT INTO `msg` VALUES ('58', '345345', '345345', '1497868296');
INSERT INTO `msg` VALUES ('59', '345345', '345345', '1497868300');
INSERT INTO `msg` VALUES ('60', '345345', '345345', '1497868302');
INSERT INTO `msg` VALUES ('61', '鎴戞槸鐣欒█鍐呭?', '鎴戞槸鐣欒█浜', '1497868315');
INSERT INTO `msg` VALUES ('62', '我是留言内容', '我是留言人', '1497868387');
INSERT INTO `msg` VALUES ('63', '我是留言内容', '我是留言人', '1497868539');
INSERT INTO `msg` VALUES ('64', '我是留言内容', '我是留言人', '1497868540');
INSERT INTO `msg` VALUES ('65', '1', 'user', '12345');
INSERT INTO `msg` VALUES ('66', 'dffdfd', 'fdfd', '1498192888');
INSERT INTO `msg` VALUES ('67', 'dfdf', 'fddfdfdf', '1498192930');
INSERT INTO `msg` VALUES ('68', '最新的留言', '留言人', '1498193452');
INSERT INTO `msg` VALUES ('69', '的所得税是的是的', '所得税的都是', '1498193490');
INSERT INTO `msg` VALUES ('70', 'aaa', 'aaa', '1498193536');
INSERT INTO `msg` VALUES ('71', 'bbb', 'bbb', '1498193549');
INSERT INTO `msg` VALUES ('72', '欢迎大家学习PHP，这里是十天学会PHP的课程，如果你坚持到今天说明你有程序员的潜质，非常欢迎大家继续学习。\r\n\r\n对于所有的学习资料，大家可以找我索取，也可以登录网站查看，包括课件、源代码、考题等。', '王亮', '1498193583');
