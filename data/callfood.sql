create database callfood;

use callfood;

create table users(
id int unsigned not null primary key auto_increment,
username varchar(30) not null unique,
password varchar(50) not null,
name varchar(10) not null
)default charset utf8;

create table items(
id int unsigned not null primary key auto_increment,
oid int unsigned not null,
buyid int unsigned not null,
foodname varchar(30) not null,
oprice float not null,
tprice float not null,
status int unsigned default 0 not null
)default charset utf8;

create table orders(
id int unsigned not null primary key auto_increment,
money float not null,
payid int unsigned not null,
buyfrom varchar(30) not null,
timeline datetime not null,
marktime datetime not null
)default charset utf8;


insert into items(oid,buyid,foodname,oprice,tprice,status) values (6,3,'白切熊掌',15,8,0);
insert into items(oid,buyid,foodname,oprice,tprice,status) values (6,6,'瘦肉汤河粉',13,8,0);
insert into items(oid,buyid,foodname,oprice,tprice,status) values (6,5,'烧鸭拼烧肉',15,8,0);

insert into items(oid,buyid,foodname,oprice,tprice,status) values (8,3,'白切鸡拼烧鸭',15,8,0);
insert into items(oid,buyid,foodname,oprice,tprice,status) values (8,7,'玫瑰酱油鸡',15,8,0);
insert into items(oid,buyid,foodname,oprice,tprice,status) values (8,8,'农家白切鸡',15,8,0);












