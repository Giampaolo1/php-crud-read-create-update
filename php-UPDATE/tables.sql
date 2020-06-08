CREATE TABLE `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `persons` (`id`, `name`,`surname`) VALUES
(1, "Mario", "Rossi");
