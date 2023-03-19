CREATE DATABASE usuario_proyecto;

CREATE TABLE Administradores(
    id_admin INT AUTO_INCREMENT NOT NULL,
    nom_admin varchar(20) NOT NULL,
    pass_admin varchar(15) NOT NULL,
    tipo_admin varchar(20) DEFAULT "Administrador",
    Primary key (id_admin)
);

CREATE TABLE Moderadores(
    id_mod INT AUTO_INCREMENT NOT NULL,
    nom_mod varchar(20) NOT NULL,
    pass_mod varchar(15) NOT NULL,
    tipo_mod varchar(20) DEFAULT "Moderador",
    Primary key (id_mod)
);

CREATE TABLE Usuario_Corriente(
    id_usu INT AUTO_INCREMENT NOT NULL,
    nom_usu varchar(20) NOT NULL,
    pass_usu varchar(15) NOT NULL,
    tipo_usu varchar(35) DEFAULT "Usuario Corriente",
    Primary key (id_usu)
);

INSERT INTO Administradores(nom_admin, pass_admin) VALUES 
("Santiago.05", "8E<{z7g;{pmc4ed"),
("Sergio.10", "7_nD:9YbF{BN>Zt");
SELECT * FROM Administradores;

INSERT INTO Moderadores(nom_mod, pass_mod) VALUES 
("Daniela.10", "etH2b7V?Xdh|EBh"),
("Jession.07", "TQhX[{4hjA+{HHs");
SELECT * FROM Moderadores;

INSERT INTO usuario_corriente(nom_usu, pass_usu) VALUES 
("Roberto.21", "=fP6z+|8CstR.{e"),
("Xavier.23", "p[Ye;afnuV,}9;6");
SELECT * FROM usuario_corriente;