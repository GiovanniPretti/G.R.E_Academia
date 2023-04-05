CREATE DATABASE IF NOT EXISTS `uni_gre` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uni_gre`;

CREATE TABLE `instrutor` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verify` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `aluno` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idade` int(3) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `plano` varchar(20) NOT NULL,
  `tipotreino` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `newsletter` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT into `instrutor` (nome, senha, email, verify) values 
  ('Giovanni Pimentel Pretti', 'e10adc3949ba59abbe56e057f20f883e', 'Giovannippretti@gmail.com', '1');

INSERT into `aluno` (nome, senha, email, idade, cpf, tel, plano, tipotreino) values 
  ('Clodoaldo Pereira', '25f9e794323b453885f5181f1b624d0b', 'clodoaldo_p@gmail.com', '27', '107.674.945-33', '(11) 9 9157-4358', 'Basic', '1'),
  ('Eduardo Uber', '202cb962ac59075b964b07152d234b70', 'eduber@hotmail.com.br', '40', '456.654.789-45', '(11) 9 9514-3596', 'Black', '2'),
  ('Filisbino Antunes', '6ebe76c9fb411be97b3b0d48b791a7c9', 'f_antunes@live.com.br', '19', '357.142.658-12', '(11) 9 9228-6753', 'Basic', '3'),
  ('Juvenal Souza Santos', 'e40f01afbb1b9ae3dd6747ced5bca532', 'juveninho.ss@gmail.com', '34', '741.264.381-84', '(11) 9 9528-3471', 'Professional', '3');

INSERT into `newsletter` (email) values 
  ('roberto_santos3@hotmail.com'),
  ('silv0.57@live.com.br');