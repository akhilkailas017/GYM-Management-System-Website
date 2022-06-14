# gym_management_completed

database:

create database gym;
use gym;
create table member_details(id int primary key auto_increment,name varchar(30),gender varchar(30),email varchar(30),age int);
create table trainer_details(id int primary key auto_increment,name varchar(30),gender varchar(30),email varchar(30),age int);
create table shift(id int primary key auto_increment,name varchar(30),shift varchar(30));
create table fitness(id int primary key auto_increment,activity varchar(30),trainer varchar(30),slot varchar(30));
create table mem_login(id int primary key auto_increment,username varchar(50),password varchar(300));
create table tr_login(id int primary key auto_increment,username varchar(50),password varchar(300));
create table specialisation(id int,specialisation_name varchar(30),trained_by varchar(30));
