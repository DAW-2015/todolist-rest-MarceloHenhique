-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 17/09/2015 às 10:12
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `daw-aluno5`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Tarefas`
--

CREATE TABLE IF NOT EXISTS `Tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(400) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tarefa_usuario` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `Tarefas`
--

INSERT INTO `Tarefas` (`id`, `descricao`, `usuario_id`, `categoria`) VALUES
(1, 'oi teve pseudo 1', 1, 'trabalho'),
(2, 'oi teve pseudo 2', 1, 'pessoal'),
(3, 'oi teve pseudo 3', 1, 'outros');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Tarefas`
--
ALTER TABLE `Tarefas`
  ADD CONSTRAINT `fk_tarefa_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
