create database contatinho;
use contatinho;

CREATE TABLE cliente (
idCliente INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(16),
senha VARCHAR(8)
);

CREATE TABLE contato (
idContato INT AUTO_INCREMENT PRIMARY KEY,
numero VARCHAR(16),
obs VARCHAR(255),
nome VARCHAR(40),
endereco VARCHAR(90)
);

insert into cliente (nome, senha) values ("José", "senha"), ("Marcus", "senha"), ("Vitor", "senha");


insert into contato (numero, obs, nome, endereco) values ("4002-8922","Playstation","Yudi","São Paulo"), ("666","Rei do Inferno","Lúcifer","Infero"), 
("888888","Playboyzinho","Tony Stark","New York"), ("0011003","Nanadaime Hokage","Naruto","Konoha");




