-- =====================================================
-- ESTRUTURA DO BANCO DE DADOS - CLÍNICA VETERINÁRIA
-- =====================================================
-- Este arquivo contém a estrutura completa do banco de dados
-- para as páginas: login, cadastro, forgot-password e formulario
-- =====================================================

-- =====================================================
-- 1. TABELA USERS (Usuários/Cadastro)
-- =====================================================
-- Esta tabela armazena todas as informações dos usuários
-- que se cadastram no sistema da clínica veterinária
-- =====================================================

CREATE TABLE users (
    -- ID único do usuário (chave primária)
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    -- Informações pessoais básicas
    nome VARCHAR(255) NOT NULL COMMENT 'Nome completo do usuário',
    cpf VARCHAR(14) NOT NULL UNIQUE COMMENT 'CPF do usuário (formato: 000.000.000-00)',
    data_nascimento DATE NOT NULL COMMENT 'Data de nascimento do usuário',
    telefone VARCHAR(20) NOT NULL COMMENT 'Telefone de contato',
    
    -- Informações de login
    email VARCHAR(255) NOT NULL UNIQUE COMMENT 'Email do usuário (usado para login)',
    password VARCHAR(255) NOT NULL COMMENT 'Senha criptografada do usuário',
    
    -- Endereço completo
    cep VARCHAR(10) NOT NULL COMMENT 'CEP do endereço',
    endereco VARCHAR(255) NOT NULL COMMENT 'Rua/Avenida do endereço',
    numero VARCHAR(10) NOT NULL COMMENT 'Número da residência',
    complemento VARCHAR(100) NULL COMMENT 'Complemento do endereço (opcional)',
    bairro VARCHAR(100) NOT NULL COMMENT 'Bairro do endereço',
    cidade VARCHAR(100) NOT NULL COMMENT 'Cidade do endereço',
    estado VARCHAR(2) NOT NULL COMMENT 'Estado (sigla: SP, RJ, etc.)',
    
    -- Configurações do usuário
    remember_token VARCHAR(100) NULL COMMENT 'Token para "lembrar de mim"',
    newsletter BOOLEAN DEFAULT FALSE COMMENT 'Se o usuário quer receber newsletter',
    
    -- Timestamps de controle
    email_verified_at TIMESTAMP NULL COMMENT 'Quando o email foi verificado',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data da última atualização'
);

-- =====================================================
-- 2. TABELA PASSWORD_RESETS (Recuperação de Senha)
-- =====================================================
-- Esta tabela armazena tokens temporários para recuperação de senha
-- quando o usuário esquece sua senha
-- =====================================================

CREATE TABLE password_resets (
    -- Email do usuário que solicitou a recuperação
    email VARCHAR(255) NOT NULL COMMENT 'Email do usuário que esqueceu a senha',
    
    -- Token único para recuperação (gerado aleatoriamente)
    token VARCHAR(255) NOT NULL COMMENT 'Token único para recuperação de senha',
    
    -- Data de criação do token
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Quando o token foi criado',
    
    -- Índices para melhor performance
    INDEX idx_email (email),
    INDEX idx_token (token)
);

-- =====================================================
-- 3. TABELA PETS (Pets dos Usuários)
-- =====================================================
-- Esta tabela armazena informações dos pets cadastrados
-- pelos usuários no formulário
-- =====================================================

CREATE TABLE pets (
    -- ID único do pet
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    -- Relacionamento com o usuário (tutor)
    user_id BIGINT UNSIGNED NOT NULL COMMENT 'ID do usuário (tutor) do pet',
    
    -- Informações básicas do pet
    nome_pet VARCHAR(255) NOT NULL COMMENT 'Nome do pet',
    especie VARCHAR(50) NOT NULL COMMENT 'Espécie: cachorro, gato, ave, etc.',
    raca VARCHAR(100) NULL COMMENT 'Raça do pet (opcional)',
    idade INT NULL COMMENT 'Idade do pet em anos',
    peso DECIMAL(5,2) NULL COMMENT 'Peso do pet em kg',
    sexo ENUM('macho', 'femea') NULL COMMENT 'Sexo do pet',
    
    -- Histórico de saúde
    vacinas_em_dia ENUM('sim', 'nao', 'nao_sei') NULL COMMENT 'Se as vacinas estão em dia',
    vermifugacao_em_dia ENUM('sim', 'nao', 'nao_sei') NULL COMMENT 'Se a vermífugação está em dia',
    castrado ENUM('sim', 'nao') NULL COMMENT 'Se o pet é castrado/esterilizado',
    doencas_previas TEXT NULL COMMENT 'Histórico de doenças e tratamentos',
    
    -- Comportamento
    temperamento ENUM('calmo', 'agitado', 'medroso', 'agressivo', 'amigavel') NULL COMMENT 'Temperamento do pet',
    socializacao ENUM('muito_social', 'social', 'neutro', 'agressivo') NULL COMMENT 'Como se comporta com outros animais',
    comportamento_estranho TEXT NULL COMMENT 'Comportamentos incomuns observados',
    
    -- Alimentação
    tipo_alimentacao ENUM('racao', 'comida_caseira', 'mista', 'outro') NULL COMMENT 'Tipo de alimentação',
    frequencia_alimentacao ENUM('1_vez_dia', '2_vezes_dia', '3_vezes_dia', 'livre') NULL COMMENT 'Frequência de alimentação',
    alergias TEXT NULL COMMENT 'Alergias alimentares conhecidas',
    
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de cadastro do pet',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data da última atualização',
    
    -- Chave estrangeira para relacionamento com users
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- =====================================================
-- 4. TABELA CONSULTATIONS (Consultas/Motivos)
-- =====================================================
-- Esta tabela armazena as consultas e motivos de visita
-- preenchidos no formulário do pet
-- =====================================================

CREATE TABLE consultations (
    -- ID único da consulta
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    -- Relacionamento com o pet
    pet_id BIGINT UNSIGNED NOT NULL COMMENT 'ID do pet da consulta',
    
    -- Relacionamento com o usuário (tutor)
    user_id BIGINT UNSIGNED NOT NULL COMMENT 'ID do usuário (tutor)',
    
    -- Informações da consulta
    motivo_consulta TEXT NOT NULL COMMENT 'Descrição do motivo da consulta/sintomas',
    urgencia ENUM('baixa', 'media', 'alta', 'emergencia') NULL COMMENT 'Nível de urgência da consulta',
    
    -- Status da consulta
    status ENUM('pendente', 'agendada', 'realizada', 'cancelada') DEFAULT 'pendente' COMMENT 'Status atual da consulta',
    
    -- Informações de contato do tutor (podem ser diferentes do cadastro)
    nome_tutor VARCHAR(255) NOT NULL COMMENT 'Nome do tutor na consulta',
    telefone_tutor VARCHAR(20) NOT NULL COMMENT 'Telefone do tutor na consulta',
    email_tutor VARCHAR(255) NULL COMMENT 'Email do tutor na consulta',
    endereco_tutor TEXT NULL COMMENT 'Endereço do tutor na consulta',
    
    -- Autorizações
    autorizacao_uso BOOLEAN DEFAULT FALSE COMMENT 'Se autoriza uso das informações para fins veterinários',
    
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação da consulta',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data da última atualização',
    
    -- Chaves estrangeiras
    FOREIGN KEY (pet_id) REFERENCES pets(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- =====================================================
-- 5. TABELA FAILED_JOBS (Trabalhos Falhados)
-- =====================================================
-- Esta tabela armazena trabalhos em fila que falharam
-- (útil para envio de emails, notificações, etc.)
-- =====================================================

CREATE TABLE failed_jobs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uuid VARCHAR(255) NOT NULL UNIQUE COMMENT 'Identificador único do trabalho',
    connection TEXT NOT NULL COMMENT 'Conexão usada para o trabalho',
    queue TEXT NOT NULL COMMENT 'Nome da fila do trabalho',
    payload LONGTEXT NOT NULL COMMENT 'Dados do trabalho em JSON',
    exception LONGTEXT NOT NULL COMMENT 'Exceção que causou a falha',
    failed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da falha'
);

-- =====================================================
-- 6. ÍNDICES ADICIONAIS PARA PERFORMANCE
-- =====================================================
-- Índices para melhorar a performance das consultas
-- =====================================================

-- Índice para busca por email (muito usado no login)
CREATE INDEX idx_users_email ON users(email);

-- Índice para busca por CPF
CREATE INDEX idx_users_cpf ON users(cpf);

-- Índice para pets por usuário
CREATE INDEX idx_pets_user_id ON pets(user_id);

-- Índice para consultas por pet
CREATE INDEX idx_consultations_pet_id ON consultations(pet_id);

-- Índice para consultas por usuário
CREATE INDEX idx_consultations_user_id ON consultations(user_id);

-- Índice para consultas por status
CREATE INDEX idx_consultations_status ON consultations(status);

-- =====================================================
-- 7. TRIGGERS PARA AUDITORIA
-- =====================================================
-- Triggers para registrar mudanças importantes
-- =====================================================

-- Trigger para registrar alterações de senha
DELIMITER $$
CREATE TRIGGER tr_users_password_change
    AFTER UPDATE ON users
    FOR EACH ROW
BEGIN
    IF OLD.password != NEW.password THEN
        INSERT INTO password_resets (email, token, created_at)
        VALUES (NEW.email, 'PASSWORD_CHANGED', NOW());
    END IF;
END$$
DELIMITER ;

-- =====================================================
-- 8. VIEWS ÚTEIS
-- =====================================================
-- Views para facilitar consultas complexas
-- =====================================================

-- View para usuários com seus pets
CREATE VIEW vw_users_pets AS
SELECT 
    u.id as user_id,
    u.nome as user_nome,
    u.email,
    u.telefone,
    COUNT(p.id) as total_pets
FROM users u
LEFT JOIN pets p ON u.id = p.user_id
GROUP BY u.id, u.nome, u.email, u.telefone;

-- View para consultas com informações completas
CREATE VIEW vw_consultations_complete AS
SELECT 
    c.id as consultation_id,
    c.motivo_consulta,
    c.urgencia,
    c.status,
    c.created_at as data_consulta,
    u.nome as tutor_nome,
    u.email as tutor_email,
    u.telefone as tutor_telefone,
    p.nome_pet,
    p.especie,
    p.raca
FROM consultations c
JOIN users u ON c.user_id = u.id
JOIN pets p ON c.pet_id = p.id;

-- =====================================================
-- 9. PROCEDURES ÚTEIS
-- =====================================================
-- Procedures para operações comuns
-- =====================================================

-- Procedure para limpar tokens expirados de recuperação de senha
DELIMITER $$
CREATE PROCEDURE sp_cleanup_expired_tokens()
BEGIN
    -- Remove tokens de recuperação de senha com mais de 24 horas
    DELETE FROM password_resets 
    WHERE created_at < DATE_SUB(NOW(), INTERVAL 24 HOUR);
END$$
DELIMITER ;

-- Procedure para obter estatísticas da clínica
DELIMITER $$
CREATE PROCEDURE sp_clinic_stats()
BEGIN
    SELECT 
        (SELECT COUNT(*) FROM users) as total_users,
        (SELECT COUNT(*) FROM pets) as total_pets,
        (SELECT COUNT(*) FROM consultations WHERE status = 'pendente') as pending_consultations,
        (SELECT COUNT(*) FROM consultations WHERE status = 'agendada') as scheduled_consultations,
        (SELECT COUNT(*) FROM consultations WHERE urgencia = 'emergencia') as emergency_cases;
END$$
DELIMITER ;

-- =====================================================
-- 10. DADOS INICIAIS (SEEDERS)
-- =====================================================
-- Dados iniciais para teste e desenvolvimento
-- =====================================================

-- Inserir um usuário administrador para testes
INSERT INTO users (
    nome, cpf, data_nascimento, telefone, email, password,
    cep, endereco, numero, bairro, cidade, estado
) VALUES (
    'Administrador Sistema',
    '000.000.000-00',
    '1990-01-01',
    '(14) 99999-9999',
    'admin@sanclamarilia.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', -- password: password
    '17500-000',
    'Rua Exemplo',
    '123',
    'Centro',
    'Marília',
    'SP'
);

-- =====================================================
-- FIM DA ESTRUTURA DO BANCO DE DADOS
-- =====================================================
-- 
-- INSTRUÇÕES DE IMPLEMENTAÇÃO:
-- 
-- 1. Execute este script no seu banco de dados MySQL/MariaDB
-- 2. Configure as credenciais de conexão no arquivo .env do Laravel
-- 3. Execute as migrations do Laravel: php artisan migrate
-- 4. Execute os seeders: php artisan db:seed
-- 5. Teste as funcionalidades de login, cadastro e formulário
-- 
-- OBSERVAÇÕES IMPORTANTES:
-- - Todos os campos de senha devem ser criptografados antes de salvar
-- - Use validação de email única no cadastro
-- - Implemente rate limiting para tentativas de login
-- - Configure backup automático do banco de dados
-- - Use transações para operações críticas
-- =====================================================
