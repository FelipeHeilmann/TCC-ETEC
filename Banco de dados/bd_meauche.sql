-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.239
-- Generation Time: 08-Dez-2022 às 20:14
-- Versão do servidor: 5.7.32-35-log
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_meauche`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb01_usuario`
--

CREATE TABLE `tb01_usuario` (
  `tb01_id_usuario` int(8) NOT NULL,
  `tb01_nome` varchar(50) NOT NULL,
  `tb01_email` varchar(50) NOT NULL,
  `tb01_cnpj` varchar(20) DEFAULT NULL,
  `tb01_senha` varchar(255) NOT NULL,
  `tb01_telefone` varchar(14) NOT NULL,
  `tb01_id_nivel` int(8) NOT NULL,
  `tb01_nome_foto` varchar(255) NOT NULL,
  `tb01_caminho_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb01_usuario`
--

INSERT INTO `tb01_usuario` (`tb01_id_usuario`, `tb01_nome`, `tb01_email`, `tb01_cnpj`, `tb01_senha`, `tb01_telefone`, `tb01_id_nivel`, `tb01_nome_foto`, `tb01_caminho_foto`) VALUES
(1, 'Felipe Heilmann', 'felipeheilmannm@gmail.com', NULL, '$2y$10$JXv8bjyobQt2lfomkRQrP.TfB/Y6iN8aEb6g3fDEeyuTVW7uXvLOy', '(11)97414-6507', 1, 'profile_icon.jpeg', 'arquivos/perfil/1/profile_icon.jpeg'),
(2, 'julia', 'julia@gmail.com', NULL, '$2y$10$BjQPjup13jDgZig4jE8qNuHPu61mV.kPBLkYMbr0YiXFvHTSgYXbu', '(22)71727-1727', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(3, 'Mateus Guarnieri', 'mateusgarodrigues@gmail.com', NULL, '$2y$10$znDfOnzeTpTIo4peoXCbbOBz/zFzNkfjk8xWdzKWazDbm/q3r9/aG', '(11)97277-3528', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(4, 'Artur', 'arturgamaralr@gmail.com', NULL, '$2y$10$2eTzELl7CeH14NiI1bornupMWZ.UytHQ81UIExEEZp33Xh0vII6nK', '(11)99872-4356', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(8, 'Matheus AlcÃ¢ntara ', 'matheus.a.pedroso@hotmail.com', NULL, '$2y$10$6kkXEzRFNF976LTyFzftOun.3zbzsXbZE1YeAI96JeFaZ4gwez7SC', '(11)96196-3547', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(9, 'Carolina Crocci ', 'carolcrocci11@gmail.com', NULL, '$2y$10$vvQBFSagooPtL8zY0wIxaO5oiHPmJ0rVWzzmw4d4NHI3emBxKW4B6', '(11)91002-2519', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(10, 'Fernando Mesurini ', 'fernando.mesurini@terra.com.br', NULL, '$2y$10$NXljz.Kg3pnDPS.BTRKES.Zj/gSSpP2odcDCEhBwyQ46nq.Gjb4pS', '(11)95107-7128', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(11, 'Silvia Bernardoni', 'sbmesurini@terra.com.br', NULL, '$2y$10$5ND9kDVj.hcFvC.F1wm5qupBTBXLCgaxtyLeiF3q48IQYww.pSjNC', '(11)97759-0864', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(12, 'jose', 'jose@gmail.com', NULL, '$2y$10$xJd7KSpAbT/GLrQHlX8bWeKDhvUKoSWiirqMfyvsMoNNCbrx2cQn6', '(11)97878-7545', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(13, 'La Maquina Victor', 'victorantunes249@gmail.com', NULL, '$2y$10$OWTOGr37CfVHZ3OOsXscGenzjdz6MQlkcUTBC02cPr2zUuHXzYqmm', '(22)22222-2222', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(14, 'Mateus Guarnieri', 'mateusgamaralr@gmail.com', NULL, '$2y$10$JHJCA3CaV4zWJpbrEUK5veUDKXK6V634y7jQeo.kkHj9r/vOa1dC2', '(11)97277-3528', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(20, 'El Tanque Victor', 'victorantunes49@gmail.com', NULL, '$2y$10$OUZQAzhFpR2eHz.J4ujH6./C6VT34n.cXFIvagKbFv1.Q1Flx1pBq', '(22)22222-2222', 1, '1647815690129.webp', 'arquivos/perfil/20/profile_icon.webp'),
(22, 'Bicho Grillo', 'bichogrillo@gmail.com', '66.672.822/0001-27	', '$2y$10$PfRkK8rrmcF9n0xu14KH6.miVmjDtSLdFtYvX6OQH2AyRRF1D3XN2', '11111111111', 2, 'default_icon', 'arquivos/perfil/default_icon.png'),
(23, 'carlos alberto', 'carlosalberto@gmail.com', NULL, '$2y$10$OBOr8Ar6sptRlruMAhcE5eoQq.aUcnK1maKEaVMYQBJfjsd0eSduq', '(11)17268-1827', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(24, 'MaurÃ­cio Souza', 'mauricinho@hotmail.com', NULL, '$2y$10$ERCoKNzeVUNeNBJQx4EV..zzk/oyljaEnxRXGJSpKzQlGy4Q1Rkxm', '(11)94402-8922', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(25, 'Batata', 'dstarde67@gmail.com', NULL, '$2y$10$WJCj7HFVgyjcBe/m84JHgeFJdfo/PlRN.jrrrLjDqRqqnWohb3w5a', '(11)98689-5789', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(26, 'Pedro Mesurini', 'pedro.mesurini@gmail.com', NULL, '$2y$10$rBX6FLuj/3iAiZ842gg4IeDD0PkafAbdFulmmt8NRCc8SCaDZkcnW', '(11)95270-4010', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(29, 'Bruna', 'antunesb05@gmail.com', NULL, '$2y$10$zLXrV4eijY9Pqdm..KmDx.hyAS70OLN9bWKTNrbyQzxHdssh41S..', '(11)99874-5228', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(34, 'Bruna', 'bantunes208@gmail.com', NULL, '$2y$10$3NzAl4tyNJaW844ijqTDoOhUTXi4eY1j63tYkaQJsXshvfIBAFO8S', '(11)97130-5580', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(35, '', '', NULL, '$2y$10$p6/VaO6yJF7eGHzT8xbio.cLN1WpPQvBUSjEPhpFipU3B7nU6mp.i', '', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(36, 'SÃ©rgio', 'eletronicamira2@gmail.com', NULL, '$2y$10$jxxP8NMQeNIXGu7abRLrL.pgsmgNiCmfDttuIPCC66VBGeghqLKHy', '(11)99564-1777', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(37, 'Peter Parker ', 'peterparker@gmail.com', NULL, '$2y$10$qsLJ.gumpiD751XtLMQGQO8xL5mnCvPLgptlN1GdhPxxGeGxLT0YS', '(11)66666-6666', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(38, 'Felipe Heilmann', 'felipemarques@gmail.com', NULL, '$2y$10$LgfFOZnlUmvNAw5/DMqxtua383tkyhqt8uJVIVINZG2V1PCOl.C2S', '(11)97414-6507', 1, 'default_icon', 'arquivos/perfil/default_icon.png'),
(40, 'Felipe Heilmann', 'Felipeheilmann@gmail.com', NULL, '$2y$10$5EMI6vaM9XqHcD1gkYyky.g1Wl7i8vkU0NCy0VtEtL0K./5WeaoHK', '(11)95434-8576', 1, 'default_icon', 'arquivos/perfil/default_icon.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb02_animal`
--

CREATE TABLE `tb02_animal` (
  `tb02_id_animal` int(8) NOT NULL,
  `tb02_id_usuario` int(8) NOT NULL,
  `tb02_id_porte` int(8) NOT NULL,
  `tb02_id_especie` int(8) NOT NULL,
  `tb02_id_cor` int(8) NOT NULL,
  `tb02_id_status` int(8) NOT NULL,
  `tb02_observacoes` varchar(50) DEFAULT NULL,
  `tb02_contato` varchar(255) NOT NULL,
  `tb02_data` datetime NOT NULL,
  `tb02_nome_foto` varchar(255) NOT NULL,
  `tb02_caminho_foto` varchar(255) NOT NULL,
  `tb02_para_ong` int(1) NOT NULL,
  `tb02_latitude` float(10,6) NOT NULL,
  `tb02_longitude` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb02_animal`
--

INSERT INTO `tb02_animal` (`tb02_id_animal`, `tb02_id_usuario`, `tb02_id_porte`, `tb02_id_especie`, `tb02_id_cor`, `tb02_id_status`, `tb02_observacoes`, `tb02_contato`, `tb02_data`, `tb02_nome_foto`, `tb02_caminho_foto`, `tb02_para_ong`, `tb02_latitude`, `tb02_longitude`) VALUES
(24, 1, 3, 1, 2, 1, '', '(11)97414-6507', '2022-11-22 08:53:37', 'images (4).jpeg', 'arquivos/abandonados/708acd5e41abf18aad359e001ed4ef06.jpeg', 0, -23.120226, -46.581738),
(27, 1, 2, 1, 2, 1, 'Ralados no rosto ', '(11)97414-6507', '2022-11-22 08:56:50', 'images (7).jpeg', 'arquivos/risco/22a05b1dea79c6833217ecea8099b14f.jpeg', 1, -23.118801, -46.581062),
(28, 36, 1, 1, 5, 1, 'Com manchas pretas', '(11)97277-3528', '2022-11-30 13:39:29', 'pastor-1.jpg', 'arquivos/abandonados/fc628cd7d3c186d180008db171eae484.jpg', 0, -23.135136, -46.554707),
(29, 3, 3, 2, 4, 1, 'Rajado', '(11)97277-3528', '2022-12-01 19:49:44', 'DEA823C0-D04A-493F-93DB-9C64E74A4638.jpeg', 'arquivos/abandonados/ae1c29ab181e580e2d4f7ca0ff11c599.jpeg', 0, -23.162144, -46.570324),
(30, 3, 2, 1, 1, 1, 'Com roupa rosa', '(11)97277-3528', '2022-12-05 05:27:59', 'images (1).jpg', 'arquivos/abandonados/de341309bdd72029d1c0bfed9141f8db.jpg', 0, -23.481548, -46.740276),
(32, 3, 2, 1, 2, 1, 'Com manchas pretas', '(11)97277-3528', '2022-12-05 05:29:24', 'b9gx5kexhlabdcgrl91e7xlwf.jpg', 'arquivos/abandonados/5a8588a2e5d87e79a9d7ce96aad7c8a7.jpg', 0, -23.481548, -46.740276),
(33, 3, 2, 1, 2, 1, 'Muito magro', '(11)97277-3528', '2022-12-05 05:32:16', 'download (4).jpg', 'arquivos/risco/6493d5a3960c2d6753b780868d2769c2.jpg', 1, -23.481548, -46.740276),
(34, 1, 2, 1, 3, 1, '', '(11)97414-6507', '2022-12-05 05:59:59', 'images (5).jpeg', 'arquivos/abandonados/4062f9bee5924732d3587ab8a7d979a1.jpeg', 0, -23.156069, -47.039005),
(38, 1, 2, 1, 2, 1, '', '(11)97414-6507', '2022-12-06 19:43:38', 'images (7).jpeg', 'arquivos/abandonados/65641de9c9cb1ed005675d2e5171f927.jpeg', 0, -23.151703, -46.582275),
(40, 3, 2, 1, 1, 1, 'Identificado no colar como â€œTamaâ€', '(11)97277-3528', '2022-12-07 06:09:11', 'DEE0E10C-114D-408C-8708-AC57EBCFF0C4.jpeg', 'arquivos/abandonados/a41d90cd33202f0bdaf0b4caf40c617a.jpeg', 0, -23.149593, -46.558239),
(41, 3, 3, 2, 1, 1, 'Com manchas brancas ', '(11)97277-3528', '2022-12-07 06:10:07', 'C1EEEC03-658A-4227-B320-B2D55D61FF3D.jpeg', 'arquivos/abandonados/73a68243ed093a634bb56836ee8b791a.jpeg', 0, -23.149593, -46.558239),
(43, 40, 2, 1, 5, 1, 'Marca branca no peito ', '(11)97414-6507', '2022-12-07 08:22:23', 'images (8).jpeg', 'arquivos/abandonados/8e09009a61615993060a83b8332dc6be.jpeg', 0, -23.133892, -46.579933),
(44, 40, 3, 2, 2, 3, 'Rosto machucado ', '(11)97414-6507', '2022-12-07 08:23:28', 'images (10).jpeg', 'arquivos/risco/b84c9d2fb73a55ec2777a74aa8b7f7c4.jpeg', 1, -23.119013, -46.579933);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb03_cor`
--

CREATE TABLE `tb03_cor` (
  `tb03_id_cor` int(8) NOT NULL,
  `tb03_descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb03_cor`
--

INSERT INTO `tb03_cor` (`tb03_id_cor`, `tb03_descricao`) VALUES
(1, 'Preto'),
(2, 'Branco'),
(3, 'Bege'),
(4, 'Cinza'),
(5, 'Marrom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb04_especie`
--

CREATE TABLE `tb04_especie` (
  `tb04_id_especie` int(8) NOT NULL,
  `tb04_descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb04_especie`
--

INSERT INTO `tb04_especie` (`tb04_id_especie`, `tb04_descricao`) VALUES
(1, 'Cachorro'),
(2, 'Gato'),
(3, 'Ave');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb05_porte`
--

CREATE TABLE `tb05_porte` (
  `tb05_id_porte` int(8) NOT NULL,
  `tb05_descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb05_porte`
--

INSERT INTO `tb05_porte` (`tb05_id_porte`, `tb05_descricao`) VALUES
(1, 'Grande'),
(2, 'Medio'),
(3, 'Pequeno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb06_nivel_acesso`
--

CREATE TABLE `tb06_nivel_acesso` (
  `tb06_id_nivel` int(8) NOT NULL,
  `tb06_descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb06_nivel_acesso`
--

INSERT INTO `tb06_nivel_acesso` (`tb06_id_nivel`, `tb06_descricao`) VALUES
(1, 'Usuário'),
(2, 'ONG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb07_status`
--

CREATE TABLE `tb07_status` (
  `tb07_id_status` int(8) NOT NULL,
  `tb07_descricao` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tb07_status`
--

INSERT INTO `tb07_status` (`tb07_id_status`, `tb07_descricao`) VALUES
(1, 'Não Encontrado'),
(2, 'Em Espera'),
(3, 'Encontrado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb01_usuario`
--
ALTER TABLE `tb01_usuario`
  ADD PRIMARY KEY (`tb01_id_usuario`),
  ADD KEY `FK_acesso` (`tb01_id_nivel`);

--
-- Indexes for table `tb02_animal`
--
ALTER TABLE `tb02_animal`
  ADD PRIMARY KEY (`tb02_id_animal`),
  ADD KEY `FK_id_cor_abandonado` (`tb02_id_cor`),
  ADD KEY `FK_id_porte_abandonado` (`tb02_id_porte`),
  ADD KEY `FK_id_usuario_abandonado` (`tb02_id_usuario`),
  ADD KEY `FK_id_especie_abandonado` (`tb02_id_especie`),
  ADD KEY `FK_id_status` (`tb02_id_status`);

--
-- Indexes for table `tb03_cor`
--
ALTER TABLE `tb03_cor`
  ADD PRIMARY KEY (`tb03_id_cor`);

--
-- Indexes for table `tb04_especie`
--
ALTER TABLE `tb04_especie`
  ADD PRIMARY KEY (`tb04_id_especie`);

--
-- Indexes for table `tb05_porte`
--
ALTER TABLE `tb05_porte`
  ADD PRIMARY KEY (`tb05_id_porte`);

--
-- Indexes for table `tb06_nivel_acesso`
--
ALTER TABLE `tb06_nivel_acesso`
  ADD PRIMARY KEY (`tb06_id_nivel`);

--
-- Indexes for table `tb07_status`
--
ALTER TABLE `tb07_status`
  ADD PRIMARY KEY (`tb07_id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb01_usuario`
--
ALTER TABLE `tb01_usuario`
  MODIFY `tb01_id_usuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb02_animal`
--
ALTER TABLE `tb02_animal`
  MODIFY `tb02_id_animal` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb03_cor`
--
ALTER TABLE `tb03_cor`
  MODIFY `tb03_id_cor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb04_especie`
--
ALTER TABLE `tb04_especie`
  MODIFY `tb04_id_especie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb05_porte`
--
ALTER TABLE `tb05_porte`
  MODIFY `tb05_id_porte` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb06_nivel_acesso`
--
ALTER TABLE `tb06_nivel_acesso`
  MODIFY `tb06_id_nivel` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb07_status`
--
ALTER TABLE `tb07_status`
  MODIFY `tb07_id_status` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb01_usuario`
--
ALTER TABLE `tb01_usuario`
  ADD CONSTRAINT `FK_acesso` FOREIGN KEY (`tb01_id_nivel`) REFERENCES `tb06_nivel_acesso` (`tb06_id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb02_animal`
--
ALTER TABLE `tb02_animal`
  ADD CONSTRAINT `FK_id_cor_abandonado` FOREIGN KEY (`tb02_id_cor`) REFERENCES `tb03_cor` (`tb03_id_cor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_id_especie_abandonado` FOREIGN KEY (`tb02_id_especie`) REFERENCES `tb04_especie` (`tb04_id_especie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_id_porte_abandonado` FOREIGN KEY (`tb02_id_porte`) REFERENCES `tb05_porte` (`tb05_id_porte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_id_status` FOREIGN KEY (`tb02_id_status`) REFERENCES `tb07_status` (`tb07_id_status`),
  ADD CONSTRAINT `FK_id_usuario_abandonado` FOREIGN KEY (`tb02_id_usuario`) REFERENCES `tb01_usuario` (`tb01_id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
