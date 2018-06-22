create database editor;
use editor;

Create table usuarios (
	idUser Int NOT NULL AUTO_INCREMENT,
	fullname Varchar(500) NOT NULL,
	email Varchar(255) NOT NULL,
	username Varchar(255) NOT NULL,
	password Varchar(255) NOT NULL,
	created_at Datetime NOT NULL,
	UNIQUE (email),
	UNIQUE (username),
 Primary Key (idUser)) ENGINE = MyISAM;

Create table archivos (
	idArchivo Int NOT NULL AUTO_INCREMENT,
	idUser Int NOT NULL,
	nombreArchivo Varchar(85) NOT NULL,
	contenidoArchivo Longtext NOT NULL,
	ultimaModif Date NOT NULL,
 Primary Key (idArchivo,idUser)) ENGINE = MyISAM;

Create table compartidos (
	idCompartido Int NOT NULL AUTO_INCREMENT,
	idArchivo Int NOT NULL,
	idUser Int NOT NULL,
	fechaCompartido Datetime NOT NULL,
	idInvitado Int,
 Primary Key (idCompartido)) ENGINE = MyISAM;



Alter table archivos add CONSTRAINT Foreign Key (idUser) references usuarios (idUser) on delete cascade on update cascade;
Alter table compartidos add CONSTRAINT Foreign Key (idArchivo,idUser) references archivos (idArchivo,idUser) on delete cascade on update cascade;
