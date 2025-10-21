-- =====================================================
-- BANCO DE DADOS SIMPLIFICADO - CLÍNICA VETERINÁRIA
-- =====================================================
-- Nome do Banco: BD_AULA
-- Estrutura compatível com MySQL/MariaDB
-- =====================================================

-- =====================================================
-- 0. CRIAÇÃO DO BANCO DE DADOS
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
CREATE TABLE password_resets (
    email VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- 3. TABELA PETS (Pets dos Usuários)
-- =====================================================
CREATE TABLE pets (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
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
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- =====================================================
-- 4. TABELA CONSULTATIONS (Consultas/Motivos)
-- =====================================================
CREATE TABLE consultations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pet_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    motivo_consulta TEXT NOT NULL,
    urgencia ENUM('baixa', 'media', 'alta', 'emergencia') NULL,
    status ENUM('pendente', 'agendada', 'realizada', 'cancelada') DEFAULT 'pendente',
    nome_tutor VARCHAR(255) NOT NULL,
    telefone_tutor VARCHAR(20) NOT NULL,
    email_tutor VARCHAR(255) NULL,
    endereco_tutor TEXT NULL,
    autorizacao_uso BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (pet_id) REFERENCES pets(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- =====================================================
-- 5. DADOS INICIAIS (ADMIN)
-- =====================================================
INSERT INTO users (
    nome, cpf, data_nascimento, telefone, email, password,
    cep, endereco, numero, bairro, cidade, estado
) VALUES (
    'Administrador Sistema',
    '000.000.000-00',
    '1990-01-01',
    '(14) 99999-9999',
    'admin@sanclamarilia.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    '17500-000',
    'Rua Exemplo',
    '123',
    'Centro',
    'Marília',
    'SP'
);

-- =====================================================
-- ✅ FIM DO ARQUIVO BD_AULA.SQL
-- =====================================================