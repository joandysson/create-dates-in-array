SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dates
-- ----------------------------
DROP TABLE IF EXISTS `dates`;
CREATE TABLE `dates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime(0) NOT NULL,
  `create_at` datetime(0) NOT NULL,
  `ative` boolean NOT NULL DEFAULT true,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 0000 ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dates
-- ----------------------------
SET FOREIGN_KEY_CHECKS = 1;