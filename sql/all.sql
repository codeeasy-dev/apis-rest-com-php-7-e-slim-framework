CREATE DATABASE codeeasy_gerenciador_de_lojas CHARACTER SET utf8 COLLATE utf8_general_ci;

USE codeeasy_gerenciador_de_lojas;

CREATE TABLE lojas (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE produtos (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    loja_id INT UNSIGNED NOT NULL,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL NOT NULL,
    quantidade INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_produtos_loja_id_lojas_id
		FOREIGN KEY (loja_id) REFERENCES lojas(id)
);

CREATE TABLE usuarios (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) UNIQUE NOT NULL,
    senha VARCHAR(200) NOT NULL
);

CREATE TABLE tokens (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuarios_id INT UNSIGNED NOT NULL,
    token VARCHAR(1000) NOT NULL,
    refresh_token VARCHAR(1000) NOT NULL,
    expired_at DATETIME NOT NULL,
    active TINYINT UNSIGNED NOT NULL DEFAULT 1,
    CONSTRAINT fk_tokens_usuarios_id_usuarios_id
        FOREIGN KEY (usuarios_id) REFERENCES usuarios(id)
);

INSERT INTO lojas (nome, telefone, endereco)
VALUES ('codeeasy', '0000-0000', 'Rua CE');

INSERT INTO produtos (loja_id, nome, preco, quantidade)
VALUES (1, 'teclado', 40.00, 20);

INSERT INTO usuarios (
    nome,
    email,
    senha
) VALUES (
    'User 01',
    'user@gmail.com',
    '$argon2i$v=19$m=1024,t=2,p=2$WDF5RHJLTTJaWm41Y003OA$mlfnDCyPXqcg7AkShT9wocgt7SFIRfGDw0cy8OpzXN0'
);
