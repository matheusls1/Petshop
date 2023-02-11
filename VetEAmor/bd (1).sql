create database vetin;
use vetin;

create table cliente(
id int primary key auto_increment not null,
nome varchar(100) not null,
cpf int not null,
telefone varchar(15) not null,
email varchar(30) not null,
senha varchar(20)not null
) Engine = InnoDB;

create table agenda(
id int primary key auto_increment not null,  
dataAgendamento datetime not null,
procedimento varchar(100) not null,
animal varchar(20) not null,
sexoAnimal varchar(10) not null
) Engine = InnoDB;


/*drop table agenda;
drop table cliente;
select * from agenda;
select * from cliente;*/