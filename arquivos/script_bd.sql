-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Dez-2018 às 21:46
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7276771_projetoprat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrar_prestador`
--

CREATE TABLE `cadastrar_prestador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `profissao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experiencia` int(10) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastrar_prestador`
--

INSERT INTO `cadastrar_prestador` (`id`, `nome`, `telefone`, `profissao`, `experiencia`, `login`, `senha`) VALUES
(6, 'Gustavo', '00 12345-678', 'prestador', 5, 'gustavo1', '@gustavo'),
(7, 'Bruno', '111111111', 'Eletricista', 10, 'brsousa', '111111'),
(9, 'Professor', '11 888888888', 'Engenheiro', 10, 'professor', 'professor123'),
(12, 'Bruno Belarmino', '11 912345678', 'Cuidador de animais', 15, 'teste123p', 'teste123p'),
(15, 'Detetizador', '118888-9999', 'Detetizador', 10, 'detetizador', 'detetizador'),
(16, 'Fornecedor', '1111111111', 'Padeiro', 10, 'padeiro', 'padeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrar_usuario`
--

CREATE TABLE `cadastrar_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(10) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastrar_usuario`
--

INSERT INTO `cadastrar_usuario` (`id`, `nome`, `telefone`, `cidade`, `estado`, `rua`, `numero`, `login`, `senha`) VALUES
(2, 'joao', '43423424', 'São Paulo', 'São Paulo', 'Rua Americana', 123, 'admin', '31231'),
(4, 'teste', '43423424', 'São Paulo', 'SP', 'Elisa Silveira, 553', 112312312, 'teste', '123213'),
(9, 'Gustavo Milena Abril Santos', '11975637565', 'JUNDIAI', 'São Paulo', 'Rua Haydee Dumanjin Mojola', 153, 'gustavo2', 'gustavo'),
(12, 'Bruno', '111111111', 'São Paulo', 'São Paulo', 'Rua tal', 401, 'brsousa', 'aaaaaaaaa'),
(14, 'Bruno Belarmino', '11 9 5493202', 'São Paulo', 'São Paulo', 'Rua Consolação', 920, 'teste123', 'teste123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enviar_orcamento`
--

CREATE TABLE `enviar_orcamento` (
  `id` int(11) NOT NULL,
  `data_conclusao` date NOT NULL,
  `preco_total` int(100) NOT NULL,
  `custo_adicional` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `enviar_orcamento`
--

INSERT INTO `enviar_orcamento` (`id`, `data_conclusao`, `preco_total`, `custo_adicional`, `status`) VALUES
(1, '2018-12-20', 100, 50, 0),
(3, '2011-11-11', 20, 0, 0),
(4, '2020-09-18', 444, 150, 0),
(5, '2019-01-15', 20, 12, 0),
(6, '2019-03-22', 500, 111, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicar_servico`
--

CREATE TABLE `publicar_servico` (
  `cod_ps` int(11) NOT NULL,
  `profissional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome_contato` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `preferencia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `termo_uso` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `publicar_servico`
--

INSERT INTO `publicar_servico` (`cod_ps`, `profissional`, `nome_contato`, `telefone`, `preferencia`, `cep`, `endereco`, `numero`, `bairro`, `termo_uso`) VALUES
(1, '', 'Joao', '11', '11 912345678', '09845 080', 'Rua Pindamonhangaba', 113, 'Sumaré', 0),
(2, '', 'Alessandra', '11 912345678', 'Whatsapp', '02111 001', 'Rua 3 de Dezembro', 123, 'Centro', 0),
(5, '', 'Professor', '(11)99999-8888', 'Whatsapp', '11111222', 'Rua Maria Antônia', 114, 'Higienópolis', 0),
(7, '', 'Bruno', '11111111', 'E-mail', '81818181', 'rua tal', 7373, 'tchau', 0),
(8, '', 'Antônio', '11 912345678', 'Whatsapp', '04834 003', 'Rua Cidade Universitária', 1736, 'Butantã', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detalhe` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_categoria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zona` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_perfil` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `historico` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `competencias` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `detalhe`, `categoria`, `sub_categoria`, `Estado`, `Zona`, `tipo_perfil`, `historico`, `competencias`) VALUES
(25, 'Junior', 'Serviço de qualidade com preços justos.', 'Encanador', 'Encanador, eletricista, faz-tudo', 'São Paulo', 'São Paulo', 'Fornecedor', '', ''),
(36, 'Rodrigo', 'Montagem em até 3 dias úteis.', 'Marceneiro', 'Montagem de armários', 'São Paulo', 'Guarulhos', 'Prestador', '3 anos de experiência na New Interiores.', 'Experiência em montagem de armários de diversos modelos.'),
(37, 'Eletricista', 'Pagamentos a vista tem 10% de desconto.', 'Eletricista', 'Nova fiação, manutenção.', 'São Paulo', 'Maua', 'Prestador', '5 anos de experiência na Eletropaulo como engenheiro elétrico', 'Experiência em projetos de grandes proporções'),
(38, 'Gabriel', 'Cortes padrões ou personalizados.', 'Cabeleireiro', 'Corte de cabelo, luzes, barba.', 'São Paulo', 'São Paulo', 'Prestador', 'Tenho salão próprio há 10 anos.', 'Experiência em corte masculino.'),
(39, 'Adalberto', 'Análise em 2 horas.', 'Mecânico', 'Manutenção de automóveis', 'São Paulo', 'Osasco', 'Prestador', 'Dono de oficina há 3 anos.', 'Excelente prestação de serviço');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitar_orcamento`
--

CREATE TABLE `solicitar_orcamento` (
  `id` int(11) NOT NULL,
  `profissional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome_contato` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(20) NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `termo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `solicitar_orcamento`
--

INSERT INTO `solicitar_orcamento` (`id`, `profissional`, `nome_contato`, `telefone`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `termo`) VALUES
(2, 'joao', 'joao', '221321323', '12312312', 'osjdiqwjdoi', 123213, 'isojdasoidj', 'asijdnsad', '', 0),
(4, 'Encanador', 'gustavo', '123', '13203720', 'Rua Haydee Dumanjin Mojola', 153, 'Jardim do Lago', 'Jundiaí', '', 0),
(8, 'Mecânico', 'Gustavo Milena Abril Santos', '11975637565', '13203720', 'RUA  HAYDEE DUMANJIN MOJOLA, 153', 1233, '111111', 'JUNDIAI', '', 0),
(9, 'teste 3', 'teste 3', '11975637565', '13203720', 'Rua Haydee Dumanjin Mojola', 0, 'teste 3', 'Jundiaí', 'SP', 0),
(14, 'mdnet', 'mdnet', '123231231231', '12321321312', 'mdnet', 123123, 'mdnet', 'mdnet', 'mdnet', 0),
(15, 'Marcenaria', 'Fulano', '11 9 54932021', '193728', 'Rua Consolação', 920, 'Higienópolis', 'São Paulo', 'São Paulo', 0),
(16, 'Marcenaria', 'Fulano', '11 9 54932021', '193728', 'Rua Consolação', 920, 'Higienópolis', 'São Paulo', 'São Paulo', 0),
(17, 'Marcenaria', 'Fulano', '11 9 54932021', '193728', 'Rua Consolação', 920, 'Higienópolis', 'São Paulo', 'São Paulo', 0),
(36, 'Cabeleireiro', 'Cliente', '118888899999', '12345689', 'Rua 123', 456, 'Penha', 'São Paulo', 'SP', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrar_prestador`
--
ALTER TABLE `cadastrar_prestador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastrar_usuario`
--
ALTER TABLE `cadastrar_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enviar_orcamento`
--
ALTER TABLE `enviar_orcamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicar_servico`
--
ALTER TABLE `publicar_servico`
  ADD PRIMARY KEY (`cod_ps`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitar_orcamento`
--
ALTER TABLE `solicitar_orcamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrar_prestador`
--
ALTER TABLE `cadastrar_prestador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cadastrar_usuario`
--
ALTER TABLE `cadastrar_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enviar_orcamento`
--
ALTER TABLE `enviar_orcamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `publicar_servico`
--
ALTER TABLE `publicar_servico`
  MODIFY `cod_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `solicitar_orcamento`
--
ALTER TABLE `solicitar_orcamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
