CREATE TABLE IF NOT EXISTS candidatos (
    -- Identificador único e chave primária
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    -- Dados Pessoais
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NULL,
    nome_mae VARCHAR(255) NULL,
    nome_pai VARCHAR(255) NULL,
    sexo ENUM('Feminino', 'Masculino') NULL,
    cpf CHAR(11) NOT NULL UNIQUE, -- Armazena apenas os 11 números, sem pontos ou traço
    solteiro ENUM('sim, estou na condição de solteiro', 'não') NULL,
    
    -- Endereço
    cep CHAR(8) NULL, -- Armazena apenas os 8 números do CEP
    endereco VARCHAR(255) NULL,
    numero VARCHAR(20) NULL,
    bairro VARCHAR(100) NULL,
    estado CHAR(2) NULL, -- Guarda a sigla da UF (ex: SP, RJ, DF)
    cidade VARCHAR(100) NULL,
    
    -- Dados do Responsável Legal
    responsavel_nome VARCHAR(255) NULL,
    responsavel_cpf CHAR(11) NULL,
    
    -- Dados do Curso / Contato
    especialidade VARCHAR(100) NULL,
    telefone VARCHAR(15) NULL,
    celular VARCHAR(15) NULL,
    email VARCHAR(255) NOT NULL,
    
    -- Dados Estatísticos
    dependentes ENUM('Não possuo', 'Sim') NULL,
    parente_militar ENUM('Não', 'Sim') NULL,
    procedencia ENUM('Todo em escola privada', 'Todo em escola pública', 'A maior parte em escola pública', 'A maior parte em escola privada') NULL,
    renda VARCHAR(50) NULL, -- Armazena o value selecionado da faixa de renda
    escolaridade ENUM('Ensino Fundamental Incompleto', 'Ensino Fundamental Completo', 'Ensino Médio Incompleto', 'Ensino Médio Completo', 'Ensino Superior Incompleto', 'Ensino Superior Completo', 'Pós-graduação/Mestrado/Doutorado') NULL,
    estado_civil ENUM('solteiro', 'casado', 'divorciado', 'viuvo', 'separado', 'uniao_estavel') NULL,
    preparacao ENUM('estudei_sozinho', 'fiz_curso_preparatorio', 'nao_me_preparei') NULL,
    deficiencia ENUM('nao', 'sim') DEFAULT 'nao',
    tipo_deficiencia ENUM('fisica', 'auditiva', 'visual', 'intelectual', 'multipla', 'autismo') NULL,
    naturalidade_uf CHAR(2) NULL,
    naturalidade_cidade VARCHAR(100) NULL,
    nacionalidade VARCHAR(50) DEFAULT 'Brasil - Brasileiro Nato',
    raca ENUM('branca', 'preta', 'parda', 'amarela', 'indigena', 'nao_declarado') NULL,
    
    -- Campos Adicionais do Formulário
    autodeclaracao VARCHAR(50) NULL, -- Guarda as checkboxes marcadas separadas por vírgula
    motivo VARCHAR(50) NULL,
    quantidade_exames ENUM('uma-vez', 'duas-vezes-ou-mais') NULL,
    
    -- Opções de Isenção, Cotas e Condições Especiais
    isencao ENUM('cadunico', 'medula', 'nao') DEFAULT 'nao',
    cota_negros ENUM('sim', 'nao') DEFAULT 'nao',
    direito_amamentar ENUM('sim', 'nao') DEFAULT 'nao',
    
    -- Controle do Sistema
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
