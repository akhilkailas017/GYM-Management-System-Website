# GYM-Management-System-Website

**How to install PHP in windows:**

- download and install xampp

- download phpmyadmin

	create a folder name localhost in c: drive then extract to C:\localhost\phpmyadmin

- go to C:\xampp then open xampp-control then start apache and mysql

- in command prompt to to location

	C:\xampp\mysql\bin
	then type mysql -u root
	then click enter for mysql

- run php file
	
	start apache and mysql in xampp
	go to C:\xampp\htdocs
	paste our project folder in this location
	then go to browser and type
	localhost/file_name
	
	
**Mysql commands used:**

	create database gym;
	use gym;
	create table member_details(id int primary key auto_increment,name varchar(30),gender varchar(30),email varchar(30),age int);
	create table trainer_details(id int primary key auto_increment,name varchar(30),gender varchar(30),email varchar(30),age int);
	create table shift(id int primary key auto_increment,name varchar(30),shift varchar(30));
	create table fitness(id int primary key auto_increment,activity varchar(30),trainer varchar(30),slot varchar(30));
	create table mem_login(id int primary key auto_increment,username varchar(50),password varchar(300));
	create table tr_login(id int primary key auto_increment,username varchar(50),password varchar(300));
	create table specialisation(id int,specialisation_name varchar(30),trained_by varchar(30));
