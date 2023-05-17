DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `user` varchar(10) NOT NULL,
  `post` int(11) NOT NULL,
  `type` varchar(7) NOT NULL,
  KEY `likes_FK` (`post`),
  KEY `likes_FK_1` (`user`),
  CONSTRAINT `likes_FK` FOREIGN KEY (`post`) REFERENCES `posts` (`id`),
  CONSTRAINT `likes_FK_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `text` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `user` varchar(10) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `replyto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_FK` (`user`),
  KEY `posts_FK_1` (`replyto`),
  CONSTRAINT `posts_FK` FOREIGN KEY (`user`) REFERENCES `users` (`username`),
  CONSTRAINT `posts_FK_1` FOREIGN KEY (`replyto`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `telnumber` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

