create database apweb;
use apweb;

create table productos(
	id smallint(6) not null,
    nombre varchar(40),
    imagen varchar(40),
    precio smallint(8),
    primary key(id)    
) ENGINE=innoDB default charset=utf8;



insert into productos values (1,'Conversaciones con Dios','li.jpg',270);
insert into productos values (2,'El Alquimista','li2.jpg',220);
insert into productos values (3,'El libro negro del emperador','li4.jpg',280);
insert into productos values (4,'Inteligencia emocional','li5.jpg',300);
insert into productos values (5,'El poder del ahora','li6.jpg',150);
insert into productos values (6,'La buena suerte','li32.jpg',120);
insert into productos values (7,'Quien se ha robado mi queso','li33.jpg',118);
insert into productos values (8,'La primera guerra mundial','li8.jpg',130);

select*from productos;

create table compras(
id int not null auto_increment,
numeroventa int(11) not null,
nombre varchar(40),
imagen varchar(40),
precio varchar(40),
cantidad varchar(40),
subtotal varchar(40),
primary key(id)
)ENGINE=innoDB default charset=utf8;



select*from compras;

create table usuarios(
id int not null auto_increment,
nombre varchar(40),
apellido varchar(40),
usuario varchar(40),
password varchar(40),
imagen varchar(40),
primary key(id)
)ENGINE=innoDB default charset=utf8;



insert into usuarios values(null,'Julio','Muñoz','JM','123','jm.jpg');

select*from usuarios;



