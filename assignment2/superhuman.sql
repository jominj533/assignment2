use sys;
CREATE TABLE IF NOT EXISTS `superhuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `superpowers` varchar(500) NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
