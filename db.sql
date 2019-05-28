CREATE DATABASE registro;
use registro;

CREATE TABLE docente(
id int not null auto_increment PRIMARY KEY,
paterno varchar(60) not null,
materno varchar(60) not null,
nombres varchar(60) not null,
pais varchar(60) not null,
dni char(8) not null,
fecingresou date,
ley char(2) not null,
gradoacademico varchar(60) not null,
mencion varchar(220) not null,
universidad varchar(220) not null,
paisuniversidad varchar(60) not null,
pregrado char(2) not null,
maestria char(2) not null,
doctorado char(2) not null,
catdocente varchar(60) not null,
regime varchar(60) not null,
clases double not null,
otras double not null,
total double not null,
investigador char(2) not null,
dina char(2) not null,
periodo varchar(60) not null,
obs varchar(200) not null,
creationat timestamp default current_timestamp
);