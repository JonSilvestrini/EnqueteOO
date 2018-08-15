create database if not exists bdenquete;
use bdenquete;

DROP TABLE IF EXISTS `games`;

CREATE TABLE `games` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `jogo` varchar(50) DEFAULT NULL,
  `sugestao` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);

insert into usuarios (nome, email, senha) value ('sysadmin', 'email@email.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');


