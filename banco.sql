  CREATE DATABASE IF NOT EXISTS `prc_empreendimentos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
  USE `prc_empreendimentos`;

  -- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2023 às 01:51
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prc_empreendimentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamentos_decorados`
--

CREATE TABLE `apartamentos_decorados` (
  `imagem` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas_comuns`
--

CREATE TABLE `areas_comuns` (
  `imagem` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `texto` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `imagem` int(11) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conheca_regiao`
--

CREATE TABLE `conheca_regiao` (
  `titulo` varchar(255) NOT NULL,
  `texto1` varchar(255) NOT NULL,
  `texto2` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `capa` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diferenciais`
--

CREATE TABLE `diferenciais` (
  `icone` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `idEmpreendimento` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `capa` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `imagem1` varchar(255) NOT NULL,
  `texto1` varchar(3000) NOT NULL,
  `titulo1` varchar(255) NOT NULL,
  `texto2_plantas` varchar(1000) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `status_texto` varchar(255) NOT NULL,
  `status_porcetagem` varchar(255) NOT NULL,
  `previsao_entrega` varchar(255) NOT NULL,
  `titulo2_localizacao` varchar(255) NOT NULL,
  `texto3_localizacao` varchar(1000) NOT NULL,
  `rota_localizacao` varchar(255) NOT NULL,
  `mapa_localizacao` varchar(255) NOT NULL,
  `titulo3_equipe` varchar(255) NOT NULL,
  `titulo4_diferencias` varchar(255) NOT NULL,
  `texto4_diferenciais` varchar(1000) NOT NULL,
  `titulo4_evolucaoObra` varchar(255) NOT NULL,
  `texto4_evolucaoObra` varchar(255) NOT NULL,
  `titulo5_formulario` varchar(255) NOT NULL,
  `texto5_formulario` varchar(255) NOT NULL,
  `areaTerreno_evolucaoObra` varchar(255) NOT NULL,
  `areaTotal_evolucaoObra` varchar(255) NOT NULL,
  `tipologias_evolucaoObra` varchar(255) NOT NULL,
  `unidades_evolucaoObra` varchar(255) NOT NULL,
  `vendido` tinyint(1) NOT NULL DEFAULT 0,
  `vendido_porcetagem` varchar(255) NOT NULL DEFAULT '0',
  `link_entregue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `titulo` varchar(255) NOT NULL,
  `texto1` varchar(255) NOT NULL,
  `texto2` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evolucao_obra_imagens`
--

CREATE TABLE `evolucao_obra_imagens` (
  `imagem` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evolucao_obra_sub_status`
--

CREATE TABLE `evolucao_obra_sub_status` (
  `status` varchar(255) NOT NULL,
  `texto1` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_contatos`
--

CREATE TABLE `formulario_contatos` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_empreendimentos`
--

CREATE TABLE `formulario_empreendimentos` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `qnt_dormitorios` int(11) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `video` varchar(255) NOT NULL,
  `idPagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`video`, `idPagina`) VALUES
('home.mp4', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_plantas`
--

CREATE TABLE `imagens_plantas` (
  `imagem` varchar(255) NOT NULL,
  `idPlanta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `idPagina` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`idPagina`, `name`) VALUES
(1, 'Home'),
(2, 'Sobre'),
(3, 'Empreendimentos'),
(4, 'Contato'),
(5, 'Trabalhe Conosco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plantas`
--

CREATE TABLE `plantas` (
  `idPlanta` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tamanho` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `capa` varchar(255) NOT NULL,
  `texto1` varchar(255) NOT NULL,
  `titulo1` varchar(255) NOT NULL,
  `texto2` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `titulo2` varchar(255) NOT NULL,
  `texto3` varchar(255) NOT NULL,
  `texto4` varchar(255) NOT NULL,
  `texto5` varchar(255) NOT NULL,
  `texto6` varchar(255) NOT NULL,
  `texto7` varchar(255) NOT NULL,
  `titulo3` varchar(255) NOT NULL,
  `texto8` varchar(1000) NOT NULL,
  `imagem2` varchar(255) NOT NULL,
  `imagem3` varchar(255) NOT NULL,
  `titulo4` varchar(255) NOT NULL,
  `texto9` varchar(255) NOT NULL,
  `texto10` varchar(255) NOT NULL,
  `texto11` varchar(1000) NOT NULL,
  `tituloDiferencial1` varchar(255) NOT NULL,
  `textoDiferencial1` varchar(1000) NOT NULL,
  `tituloDiferencial2` varchar(255) NOT NULL,
  `textoDiferencial2` varchar(1000) NOT NULL,
  `tituloDiferencial3` varchar(255) NOT NULL,
  `textoDiferencial3` varchar(1000) NOT NULL,
  `tituloDiferencial4` varchar(255) NOT NULL,
  `textoDiferencial4` varchar(1000) NOT NULL,
  `tituloDiferencial5` varchar(255) NOT NULL,
  `textoDiferencial5` varchar(1000) NOT NULL,
  `tituloDiferencial6` varchar(255) NOT NULL,
  `textoDiferencial6` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `capa`, `texto1`, `titulo1`, `texto2`, `video`, `titulo2`, `texto3`, `texto4`, `texto5`, `texto6`, `texto7`, `titulo3`, `texto8`, `imagem2`, `imagem3`, `titulo4`, `texto9`, `texto10`, `texto11`, `tituloDiferencial1`, `textoDiferencial1`, `tituloDiferencial2`, `textoDiferencial2`, `tituloDiferencial3`, `textoDiferencial3`, `tituloDiferencial4`, `textoDiferencial4`, `tituloDiferencial5`, `textoDiferencial5`, `tituloDiferencial6`, `textoDiferencial6`) VALUES
(1, 'Teste', 'Assim como cada pessoa carrega uma identidade, nossos empreendimentos possuem personalidade, design inteligente e arquitetuta marcante. Atributos que expressam sofisticação, privacidade e bem estar, tornando única a experiência de viver em um PRC.', 'Ser exclusivo é da nossa natureza', 'Verdade &<br>                             Praticidade &<br>                             Persistência &<br>                             Espírito de equipe', '', 'O jeito PRC está baseado em valores sólidos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhe_conosco`
--

CREATE TABLE `trabalhe_conosco` (
  `capa` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `botao_texto` varchar(255) NOT NULL,
  `botao_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apartamentos_decorados`
--
ALTER TABLE `apartamentos_decorados`
  ADD KEY `FK_ApartamentosEmpreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `areas_comuns`
--
ALTER TABLE `areas_comuns`
  ADD KEY `FK_AreaComuns_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD KEY `FK_Comentarios_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `conheca_regiao`
--
ALTER TABLE `conheca_regiao`
  ADD KEY `FK_ConhecaRegiao_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `diferenciais`
--
ALTER TABLE `diferenciais`
  ADD KEY `FK_Diferenciais_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`idEmpreendimento`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD KEY `FK_Equipe_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `evolucao_obra_imagens`
--
ALTER TABLE `evolucao_obra_imagens`
  ADD KEY `FK_EvolucaoImagens_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `evolucao_obra_sub_status`
--
ALTER TABLE `evolucao_obra_sub_status`
  ADD KEY `FK_EvolucaoSubStatus_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `formulario_empreendimentos`
--
ALTER TABLE `formulario_empreendimentos`
  ADD KEY `FK_FormularioEmpreendimentos_Empreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD KEY `FK_Home_Paginas` (`idPagina`);

--
-- Índices para tabela `imagens_plantas`
--
ALTER TABLE `imagens_plantas`
  ADD KEY `FK_Plantas_ImagemPlantas` (`idPlanta`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`idPagina`);

--
-- Índices para tabela `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`idPlanta`),
  ADD KEY `FK_PlantasEmpreendimentos` (`idEmpreendimento`);

--
-- Índices para tabela `sobre`
--
ALTER TABLE `sobre`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `idEmpreendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `idPagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `plantas`
--
ALTER TABLE `plantas`
  MODIFY `idPlanta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `apartamentos_decorados`
--
ALTER TABLE `apartamentos_decorados`
  ADD CONSTRAINT `FK_ApartamentosEmpreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `areas_comuns`
--
ALTER TABLE `areas_comuns`
  ADD CONSTRAINT `FK_AreaComuns_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_Comentarios_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `conheca_regiao`
--
ALTER TABLE `conheca_regiao`
  ADD CONSTRAINT `FK_ConhecaRegiao_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `diferenciais`
--
ALTER TABLE `diferenciais`
  ADD CONSTRAINT `FK_Diferenciais_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `FK_Equipe_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `evolucao_obra_imagens`
--
ALTER TABLE `evolucao_obra_imagens`
  ADD CONSTRAINT `FK_EvolucaoImagens_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `evolucao_obra_sub_status`
--
ALTER TABLE `evolucao_obra_sub_status`
  ADD CONSTRAINT `FK_EvolucaoSubStatus_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `formulario_empreendimentos`
--
ALTER TABLE `formulario_empreendimentos`
  ADD CONSTRAINT `FK_FormularioEmpreendimentos_Empreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);

--
-- Limitadores para a tabela `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `FK_Home_Paginas` FOREIGN KEY (`idPagina`) REFERENCES `paginas` (`idPagina`);

--
-- Limitadores para a tabela `imagens_plantas`
--
ALTER TABLE `imagens_plantas`
  ADD CONSTRAINT `FK_Plantas_ImagemPlantas` FOREIGN KEY (`idPlanta`) REFERENCES `plantas` (`idPlanta`);

--
-- Limitadores para a tabela `plantas`
--
ALTER TABLE `plantas`
  ADD CONSTRAINT `FK_PlantasEmpreendimentos` FOREIGN KEY (`idEmpreendimento`) REFERENCES `empreendimentos` (`idEmpreendimento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
