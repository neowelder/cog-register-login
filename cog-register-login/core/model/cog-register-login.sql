create database cog_login;
use cog_login;
create table user (
	id int not null auto_increment primary key,
	name varchar(100) not null,
	lastname varchar(100) not null,
	mail varchar(100) not null,
	image varchar(200),
	password varchar(50) not null,
	is_admin boolean not null default 0,
	is_active boolean not null default 0,
	created_at datetime not null
);


insert into user (name,lastname,mail,password,is_admin,is_active,created_at) value ("Usuario","Ejemplo","usuario@ejemplo.com","bea6b399ba45a43c95c2b567651e9c9cef4415c5",1,1,NOW());

