-- cria o banco de dados
create database filmesdb;

-- seleciona o banco para uso
use filmesdb;

-- cria a tabela de filme
create table filme (
	id int auto_increment primary key,
	nome varchar(255) not null,
	ano int not null, 
	descricao text
);
