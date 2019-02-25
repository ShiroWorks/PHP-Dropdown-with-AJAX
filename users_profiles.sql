CREATE TABLE `users_profiles`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar
(100) DEFAULT NULL,
  `last_name` varchar
(100) DEFAULT NULL,
  `user_id` int
(11) DEFAULT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
