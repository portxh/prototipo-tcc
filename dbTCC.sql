CREATE DATABASE dbTCC;

USE dbTCC;

CREATE TABLE Clientes (
    idUser INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    CPF VARCHAR(11) NOT NULL UNIQUE,
    Nome VARCHAR(50) NOT NULL,
    Celular VARCHAR(15) NOT NULL UNIQUE,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Senha VARCHAR(255) NOT NULL
);


CREATE TABLE Produtos (
    IdProd INT(11) NOT NULL PRIMARY KEY,
    imagem LONGBLOB,
    nomeProd VARCHAR(100),
    descProd TEXT,
    precoProd DECIMAL(10 , 2 )
);

INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('1','cake-cream-choco.jpg', 'Bolo de Chocolate', 'Teste de Bolo via Banco de dados.', '120.65');
INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('2','cake-mix.jpg', 'Bolo de Frutas', 'Teste de Bolo via Banco de dados.', '100.00');
INSERT INTO produtos (IdProd,imagem,nomeProd,descProd,precoProd) VALUES ('3','cake-cramberry.jpg', 'Bolo de Morango', 'Teste de Bolo via Banco de dados.', '89.99');