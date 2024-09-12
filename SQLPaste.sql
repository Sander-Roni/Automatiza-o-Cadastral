CREATE DATABASE BancoTeste;
USE BancoTeste;
CREATE TABLE BancoTeste.Utilizar(
	id int Primary key Not null auto_increment,
	Nome VARCHAR(255) Not null,
    Sobrenome VARCHAR (255) Not null,
    Ano_De_Nascimento Date,
    Senha Varchar(10) Not null,
    Email Varchar(30) Not null,
    Estado Varchar(20) Not null,
	Cidade Varchar(30) Not null
);

DROP DATABASE IF EXISTS BancoTeste;