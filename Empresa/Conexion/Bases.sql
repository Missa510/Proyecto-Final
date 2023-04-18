CREATE DATABASE usuario_proyecto;

USE usuario_proyecto;

CREATE TABLE Administradores(
    id_admin INT AUTO_INCREMENT NOT NULL,
    mail_admin varchar(40) NOT NULL,
    nom_admin varchar(20) NOT NULL,
    pass_admin varchar(15) NOT NULL,
    tipo_admin varchar(20) DEFAULT "Administrador",
    Primary key (id_admin)
);

CREATE TABLE Moderadores(
    id_mod INT AUTO_INCREMENT NOT NULL,
    mail_mod varchar(40) NOT NULL,
    nom_mod varchar(20) NOT NULL,
    pass_mod varchar(15) NOT NULL,
    tipo_mod varchar(20) DEFAULT "Moderador",
    Primary key (id_mod)
);

CREATE TABLE Usuario_Corriente(
    id_usu INT AUTO_INCREMENT NOT NULL,
    mail_usu varchar(40) NOT NULL,
    nom_usu varchar(20) NOT NULL,
    pass_usu varchar(15) NOT NULL,
    tipo_usu varchar(35) DEFAULT "Usuario Corriente",
    Primary key (id_usu)
);

INSERT INTO Administradores(mail_admin, nom_admin, pass_admin) VALUES 
("sjqv05@gmail.com", "Santiago.05", "8E<{z7g;{pmc4ed"),
("ssandovalrobles207@gmail.com", "Sergio.10", "7_nD:9YbF{BN>Zt");
SELECT * FROM Administradores;

INSERT INTO Moderadores(mail_mod, nom_mod, pass_mod) VALUES 
("dani43@gmail.com", "Daniela.10", "etH2b7V?Xdh|EBh"),
("jeissondiaz32@gmail.com", "Jession.07", "TQhX[{4hjA+{HHs");
SELECT * FROM Moderadores;

INSERT INTO usuario_corriente(mail_usu, nom_usu, pass_usu) VALUES 
("alguien1@gmail.com", "Roberto.21", "=fP6z+|8CstR.{e"),
("alguien2@gmail.com", "Xavier.23", "p[Ye;afnuV,}9;6");
SELECT * FROM usuario_corriente;