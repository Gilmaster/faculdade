-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 15:58
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `imagem`, `nome`, `descricao`, `preco`) VALUES
(1, 'img/imagew.jpg', 'ROTEADOR MERCUSYS WIFI AC 12.000 MPS', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. \r\n                                Magni aliquid, vel recusandae voluptatibus eveniet optio eum ipsa atque veritatis voluptatum adipisci neque nihil, <br>\r\n                                quisquam voluptas deleniti et placeat quasi laborum!', NULL),
(2, 'img/Lpyaxd.jpg', 'ROTEADOR TP LINK WI FI AC 750 MBS', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. \r\n                                Magni aliquid, vel recusandae voluptatibus eveniet optio eum ipsa atque veritatis voluptatum adipisci neque nihil, <br>\r\n                                quisquam voluptas deleniti et placeat quasi laborum!', NULL),
(3, 'img/OIP.jpg', 'ROTEADOR WS5200 V2 GIGA AC1200 4ANT BC HUAWEI', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.,<br> \r\n                                Magni aliquid, vel recusandae voluptatibus eveniet optio eum ipsa atque veritatis voluptatum adipisci neque nihil, <br>\r\n                                quisquam voluptas deleniti et placeat quasi laborum!', NULL),
(4, 'img/portada_crop.jpg', 'ROTEADOR WS318N SEM FIO 2ANT BC HUAWEI', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.\r\n                                Magni aliquid, vel recusandae voluptatibus eveniet optio eum ipsa atque veritatis voluptatum adipisci neque nihil, <br>\r\n                                quisquam voluptas deleniti et placeat quasi laborum!', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
