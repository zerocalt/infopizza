-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/04/2026 às 02:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infopizza`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `tipo` enum('produto','entregador') NOT NULL,
  `alvo_id` int(11) NOT NULL COMMENT 'produto_id ou entregador_id',
  `nota` tinyint(4) NOT NULL,
  `comentario` text DEFAULT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `caixa_movimentacoes`
--

CREATE TABLE `caixa_movimentacoes` (
  `id` int(11) NOT NULL,
  `sessao_id` int(11) NOT NULL,
  `tipo` enum('entrada','saida') NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `forma_pagamento` varchar(50) DEFAULT NULL,
  `data_movimentacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `caixa_sessoes`
--

CREATE TABLE `caixa_sessoes` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `operador_id` int(11) NOT NULL,
  `valor_inicial` decimal(10,2) NOT NULL,
  `valor_final` decimal(10,2) DEFAULT NULL,
  `valor_esperado` decimal(10,2) DEFAULT NULL,
  `data_abertura` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_fechamento` timestamp NULL DEFAULT NULL,
  `status` enum('aberto','fechado') DEFAULT 'aberto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tempo_preparo_padrao` int(11) DEFAULT 30 COMMENT 'em minutos',
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `pizzaria_id`, `nome`, `tempo_preparo_padrao`, `descricao`) VALUES
(1, 1, 'Pizzas Doce', 40, 'Pizza composta por doces.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `score_interno` tinyint(4) DEFAULT 5,
  `observacao_interna` text DEFAULT NULL,
  `datacad` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `despesas`
--

CREATE TABLE `despesas` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL COMMENT 'agua, luz, internet, etc',
  `tipo` enum('fixa','variavel') DEFAULT 'variavel',
  `valor` decimal(10,2) NOT NULL,
  `vencimento` date NOT NULL,
  `status_pagamento` enum('pago','pendente') DEFAULT 'pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entregadores`
--

CREATE TABLE `entregadores` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `veiculo_tipo` varchar(50) DEFAULT NULL,
  `veiculo_placa` varchar(10) DEFAULT NULL,
  `dados_bancarios` text DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque_movimentacoes`
--

CREATE TABLE `estoque_movimentacoes` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `ingrediente_id` int(11) NOT NULL,
  `tipo` enum('entrada','saida') NOT NULL,
  `quantidade` decimal(10,3) NOT NULL,
  `fornecedor` varchar(150) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `data_movimentacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cargo` varchar(50) NOT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `unidade_medida` varchar(10) NOT NULL COMMENT 'kg, un, litro',
  `estoque_minimo` decimal(10,3) DEFAULT 0.000,
  `estoque_atual` decimal(10,3) DEFAULT 0.000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `atendente_id` int(11) DEFAULT NULL,
  `entregador_id` int(11) DEFAULT NULL,
  `status` enum('recebido','preparo','pronto','entrega','entregue','cancelado') DEFAULT 'recebido',
  `tipo_entrega` enum('delivery','retirada') DEFAULT 'delivery',
  `endereco_entrega` text DEFAULT NULL,
  `localizacao_gps` varchar(100) DEFAULT NULL COMMENT 'lat,lng corrigida',
  `forma_pagamento` varchar(50) DEFAULT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `tempo_estimado` int(11) DEFAULT NULL COMMENT 'em minutos',
  `data_pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_conclusao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_itens`
--

CREATE TABLE `pedido_itens` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL DEFAULT 1.00,
  `preco_unitario` decimal(10,2) NOT NULL,
  `observacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizzarias`
--

CREATE TABLE `pizzarias` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `cor_primaria` varchar(7) DEFAULT '#007bff',
  `cor_secundaria` varchar(7) DEFAULT '#6c757d',
  `regra_preco_pizza` enum('maior_valor','soma','media') DEFAULT 'maior_valor',
  `modelo_remuneracao_entregador` enum('comissao_fixa','comissao_percentual','salario_fixo') DEFAULT 'comissao_fixa',
  `valor_remuneracao` decimal(10,2) DEFAULT 0.00,
  `status` enum('ativa','pausada','cancelada') DEFAULT 'ativa',
  `datacad` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pizzarias`
--

INSERT INTO `pizzarias` (`id`, `nome`, `cnpj`, `slug`, `logo`, `banner`, `cor_primaria`, `cor_secundaria`, `regra_preco_pizza`, `modelo_remuneracao_entregador`, `valor_remuneracao`, `status`, `datacad`) VALUES
(1, 'InfoPizza', '', '', NULL, NULL, '#007bff', '#6c757d', 'maior_valor', 'comissao_fixa', 0.00, 'ativa', '2026-04-01 23:28:42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizzaria_contatos`
--

CREATE TABLE `pizzaria_contatos` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizzaria_horarios`
--

CREATE TABLE `pizzaria_horarios` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `dia_semana` tinyint(4) NOT NULL COMMENT '0=Domingo, 1=Segunda...',
  `abertura` time DEFAULT NULL,
  `fechamento` time DEFAULT NULL,
  `status_ativo` tinyint(1) DEFAULT 1,
  `motivo_fechamento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `pizzaria_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `disponivel` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_ingredientes`
--

CREATE TABLE `produto_ingredientes` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `ingrediente_id` int(11) NOT NULL,
  `quantidade` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`);

--
-- Índices de tabela `caixa_movimentacoes`
--
ALTER TABLE `caixa_movimentacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessao_id` (`sessao_id`);

--
-- Índices de tabela `caixa_sessoes`
--
ALTER TABLE `caixa_sessoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`),
  ADD KEY `operador_id` (`operador_id`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `entregadores`
--
ALTER TABLE `entregadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `estoque_movimentacoes`
--
ALTER TABLE `estoque_movimentacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`),
  ADD KEY `ingrediente_id` (`ingrediente_id`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `entregador_id` (`entregador_id`);

--
-- Índices de tabela `pedido_itens`
--
ALTER TABLE `pedido_itens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`);

--
-- Índices de tabela `pizzarias`
--
ALTER TABLE `pizzarias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices de tabela `pizzaria_contatos`
--
ALTER TABLE `pizzaria_contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `pizzaria_horarios`
--
ALTER TABLE `pizzaria_horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaria_id` (`pizzaria_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índices de tabela `produto_ingredientes`
--
ALTER TABLE `produto_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_id` (`produto_id`),
  ADD KEY `ingrediente_id` (`ingrediente_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `caixa_movimentacoes`
--
ALTER TABLE `caixa_movimentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `caixa_sessoes`
--
ALTER TABLE `caixa_sessoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entregadores`
--
ALTER TABLE `entregadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque_movimentacoes`
--
ALTER TABLE `estoque_movimentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido_itens`
--
ALTER TABLE `pedido_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pizzarias`
--
ALTER TABLE `pizzarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pizzaria_contatos`
--
ALTER TABLE `pizzaria_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pizzaria_horarios`
--
ALTER TABLE `pizzaria_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto_ingredientes`
--
ALTER TABLE `produto_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `fk_aval_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `caixa_movimentacoes`
--
ALTER TABLE `caixa_movimentacoes`
  ADD CONSTRAINT `fk_mov_sessao` FOREIGN KEY (`sessao_id`) REFERENCES `caixa_sessoes` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `caixa_sessoes`
--
ALTER TABLE `caixa_sessoes`
  ADD CONSTRAINT `fk_caixa_operador` FOREIGN KEY (`operador_id`) REFERENCES `funcionarios` (`id`),
  ADD CONSTRAINT `fk_caixa_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_categorias_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `despesas`
--
ALTER TABLE `despesas`
  ADD CONSTRAINT `fk_despesas_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `entregadores`
--
ALTER TABLE `entregadores`
  ADD CONSTRAINT `fk_entregadores_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `estoque_movimentacoes`
--
ALTER TABLE `estoque_movimentacoes`
  ADD CONSTRAINT `fk_estoque_ingrediente` FOREIGN KEY (`ingrediente_id`) REFERENCES `ingredientes` (`id`),
  ADD CONSTRAINT `fk_estoque_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_funcionarios_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `fk_ingredientes_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_pedidos_entregador` FOREIGN KEY (`entregador_id`) REFERENCES `entregadores` (`id`),
  ADD CONSTRAINT `fk_pedidos_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `pedido_itens`
--
ALTER TABLE `pedido_itens`
  ADD CONSTRAINT `fk_item_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `pizzaria_contatos`
--
ALTER TABLE `pizzaria_contatos`
  ADD CONSTRAINT `fk_contatos_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `pizzaria_horarios`
--
ALTER TABLE `pizzaria_horarios`
  ADD CONSTRAINT `fk_horarios_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_produtos_pizzaria` FOREIGN KEY (`pizzaria_id`) REFERENCES `pizzarias` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `produto_ingredientes`
--
ALTER TABLE `produto_ingredientes`
  ADD CONSTRAINT `fk_pi_ingrediente` FOREIGN KEY (`ingrediente_id`) REFERENCES `ingredientes` (`id`),
  ADD CONSTRAINT `fk_pi_produto` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
