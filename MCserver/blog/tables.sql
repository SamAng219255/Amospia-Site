use mcstuff;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `uuid` char(32) NOT NULL,
  `forecolor` char(6) NOT NULL DEFAULT '000000',
  `backcolor` char(6) NOT NULL DEFAULT 'C0C0C0',
  `ip` varchar(45) NOT NULL,
  `laston` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nation` varchar(32) NOT NULL DEFAULT '',
  `character` varchar(32) NOT NULL DEFAULT '',
  `prefix` varchar(32) NOT NULL DEFAULT '',
  `suffix` varchar(32) NOT NULL DEFAULT '',
  `permissions` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `topic` varchar(16) NOT NULL DEFAULT 'general',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;