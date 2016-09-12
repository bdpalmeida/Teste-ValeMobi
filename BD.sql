CREATE DATABASE Negociacao_Mercadorias;

USE Negociacao_Mercadorias;

#Estrutura tabela Mercadoria
CREATE TABLE Mercadoria
(cod_Mercadoria INT PRIMARY KEY AUTO_INCREMENT, tipo_Mercadoria VARCHAR(100), nome_Mercadoria VARCHAR(100),
 quant_Mercadoria INT, preco_Mercadoria DOUBLE);

#Indices para tabela Mercadoria
CREATE INDEX nome_Mercadoria ON Mercadoria(nome_Mercadoria(10));

#Views para tabela Mercadoria
CREATE OR REPLACE VIEW vwMercadoria AS 
	SELECT cod_Mercadoria, nome_Mercadoria FROM Mercadoria ORDER BY nome_Mercadoria;
#select * from vwMercadoria;


#Estrutura tabela Operacao
CREATE TABLE Operacao
(cod_negocio INT PRIMARY KEY AUTO_INCREMENT, cod_Mercadoria INT, quantidade INT, preco DOUBLE, tipo_negocio ENUM('Compra', 'Venda'));

#Chave Estrangeira para tabela Operacao
ALTER TABLE Operacao ADD FOREIGN KEY(cod_Mercadoria) REFERENCES Mercadoria(cod_Mercadoria);

#View para tabela Operacao
CREATE OR REPLACE VIEW vwOperacao AS 
	SELECT cod_Mercadoria, tipo_Mercadoria, nome_Mercadoria, quantidade, preco, tipo_negocio FROM Operacao NATURAL JOIN Mercadoria;
#select * from vwOperacao;