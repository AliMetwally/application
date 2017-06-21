-- create database
CREATE SCHEMA `application` 
DEFAULT CHARACTER SET utf8 
COLLATE utf8_general_ci 
;

-- tables structure

-- users table
create table users
(
username varchar(30) not null,
password varchar(60) not null,
first_name varchar(25),
last_name varchar(25),
email varchar(25),
created_on timestamp not null default current_timestamp
)ENGINE=InnoDB
;

-- tables indexes

-- users table indexes
alter table users
ADD PRIMARY KEY (username);


-- data 
-- users table
insert into users (username, password)
values ('admin', 'admin');