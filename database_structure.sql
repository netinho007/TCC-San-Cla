-- =====================================================
-- BANCO DE DADOS COMPLETO - CLÍNICA VETERINÁRIA
-- =====================================================

DROP DATABASE IF EXISTS BD_AULA;
CREATE DATABASE BD_AULA CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE BD_AULA;

-- =====================================================
-- 1. TABELA USERS (Usuários/Cadastro)
-- =====================================================
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(100) NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    newsletter BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- =====================================================
-- 2. TABELA PASSWORD_RESETS (Recuperação de Senha)
-- =====================================================
CREATE TABLE password_reset_tokens (
    email VARCHAR(255) PRIMARY KEY,
    token VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- 3. TABELA PETS (Pets dos Usuários)
-- =====================================================
CREATE TABLE pets (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NULL COMMENT 'Pode ser NULL se usuário não estiver logado',
    nome_pet VARCHAR(255) NOT NULL,
    especie VARCHAR(50) NOT NULL,
    raca VARCHAR(100) NULL,
    idade INT NULL,
    peso DECIMAL(5,2) NULL,
    sexo ENUM('macho', 'femea') NULL,
    vacinas_em_dia ENUM('sim', 'nao', 'nao_sei') NULL,
    vermifugacao_em_dia ENUM('sim', 'nao', 'nao_sei') NULL,
    castrado ENUM('sim', 'nao') NULL,
    doencas_previas TEXT NULL,
    temperamento ENUM('calmo', 'agitado', 'medroso', 'agressivo', 'amigavel') NULL,
    socializacao ENUM('muito_social', 'social', 'neutro', 'agressivo') NULL,
    comportamento_estranho TEXT NULL,
    tipo_alimentacao ENUM('racao', 'comida_caseira', 'mista', 'outro') NULL,
    frequencia_alimentacao ENUM('1_vez_dia', '2_vezes_dia', '3_vezes_dia', 'livre') NULL,
    alergias TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- =====================================================
-- ✅ FIM DO ARQUIVO BD_AULA.SQL
-- =====================================================