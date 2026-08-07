--
-- Banco de dados: `wda_crud`
--
CREATE DATABASE IF NOT EXISTS `wda_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wda_crud`;
-- --------------------------------------------------------
--
-- Estrutura da tabela `customers`
--
CREATE TABLE `customers` (
 `id` int(11) NOT NULL,
 `name` varchar(255) NOT NULL,
 `cpf_cnpj` varchar(15) NOT NULL,
 `birthdate` datetime NOT NULL,
 `address` varchar(255) NOT NULL,
 `hood` varchar(100) NOT NULL,
 `zip_code` varchar(8) NOT NULL,
 `city` varchar(100) NOT NULL,
 `state` varchar(2) NOT NULL,
 `phone` varchar(13) NOT NULL,
 `mobile` varchar(13) NOT NULL,
 `ie` varchar(15) NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Extraindo dados da tabela `customers`
--
INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(1, 'Fulano de Tal', '123.456.789-00', '1989-01-01 00:00:00', 'Rua da Web, 123', 'Internet', '12345678', 'Teste', 'Te', '15 12345678', '15987654321', '123456', '2016-05-24 00:00:00', '2016-05-24 00:00:00'),
(2, 'Ciclano de Tal', '123.456.789-00', '1989-01-01 00:00:00', 'Rua da Web, 123', 'Internet', '12345678', 'Teste', 'Te', '15 12345678', '15987654321', '123456', '2016-05-24 00:00:00', '2016-05-24 00:00:00');
--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;