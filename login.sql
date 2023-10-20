create database bd_login;

create table users(
use_id int primary key auto_increment not null,
use_email varchar(90) not null,
use_senha varchar(30) not null
);

insert into users(use_email, use_senha) values('leoing@gmail.com', 'leo20ing');