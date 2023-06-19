-- Active: 1684553939702@@127.0.0.1@3306@ferregarochoa

CREATE DATABASE FerreGarochoa;

USE FerreGarochoa;

-- DROP DATABASE FerreGarochoa;

CREATE TABLE
    Ciudades(
        id_ciu INT AUTO_INCREMENT PRIMARY KEY,
        nom_ciu TEXT NOT NULL,
        capital_ciudad TEXT NOT NULL
    );

CREATE TABLE
    Sedes(
        id_sede INT AUTO_INCREMENT PRIMARY KEY,
        nom_sed TEXT NOT NULL,
        direc_sed TEXT NOT NULL,
        fkciudad INT NOT NULL
    );

CREATE TABLE
    EPS(
        id_eps INT AUTO_INCREMENT PRIMARY KEY,
        eps TEXT NOT NULL
    );

CREATE TABLE
    Cajadecompensacion(
        id_caja INT AUTO_INCREMENT PRIMARY KEY,
        caja TEXT NOT NULL
    );

CREATE TABLE
    Turnos(
        id_turnos INT AUTO_INCREMENT PRIMARY KEY,
        nom_turno TEXT NOT NULL,
        entrada TIME NOT NULL,
        salida TIME NOT NULL
    );

CREATE TABLE
    Cargos(
        id_cargo INT AUTO_INCREMENT PRIMARY KEY,
        cargo TEXT NOT NULL,
        sueldo DOUBLE NOT NULL,
        descrip_cargo TEXT DEFAULT "[No hay aun]"
    );

CREATE TABLE
    Generos(
        id_gender INT AUTO_INCREMENT PRIMARY KEY,
        gender TEXT NOT NULL
    );

CREATE TABLE
    Empleados(
        id_emp INT AUTO_INCREMENT PRIMARY KEY,
        dni_emp BIGINT NOT NULL,
        ape_emp TEXT NOT NULL,
        nom_emp TEXT NOT NULL,
        edad_emp INT NOT NULL,
        tel_emp BIGINT NOT NULL,
        direct_emp TEXT NOT NULL,
        fkgender INT NOT NULL,
        fkeps INT NOT NULL,
        fkcaja INT NOT NULL,
        fkcargo INT NOT NULL,
        fksede INT NOT NULL,
        fkturno INT NOT NULL,
        descrip_emp TEXT DEFAULT "[No hay aun]"
    );

CREATE TABLE
    Existenciasdeproductos(
        id_exist INT AUTO_INCREMENT PRIMARY KEY,
        fecha_exist_entrada DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        fksede INT NOT NULL,
        fkproduct INT NOT NULL
    );

CREATE TABLE
    Productos(
        id_produc INT AUTO_INCREMENT PRIMARY KEY,
        nom_produc TEXT NOT NULL,
        precio_venta DOUBLE NOT NULL,
        precio_compra DOUBLE NOT NULL
    );

CREATE TABLE
    Facturasdeproveedores(
        id_facompras INT AUTO_INCREMENT PRIMARY KEY,
        fecha_facompras DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        fkproduc INT NOT NULL,
        fkprov INT NOT NULL,
        fksede INT NOT NULL
    );

CREATE TABLE
    Facturasdeclientes(
        id_facentregas INT AUTO_INCREMENT PRIMARY KEY,
        fecha_facentregas DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        descuento INT DEFAULT 0,
        fkproduc INT NOT NULL,
        fkclient INT NOT NULL,
        fksede INT NOT NULL
    );

CREATE TABLE
    Proveedores(
        id_prov INT AUTO_INCREMENT PRIMARY KEY,
        nom_prov TEXT NOT NULL,
        tel_prov INT NOT NULL,
        mail_prov TEXT NOT NULL,
        direc_prov TEXT NOT NULL
    );

CREATE TABLE
    Clientes(
        id_clien INT AUTO_INCREMENT PRIMARY KEY,
        dni_clien BIGINT NOT NULL,
        nom_clien TEXT NOT NULL,
        ape_clien TEXT NOT NULL,
        tel_clien BIGINT NOT NULL,
        mail_clien TEXT NOT NULL,
        direc_clien TEXT NOT NULL
    );

ALTER TABLE Sedes
ADD
    CONSTRAINT Opera FOREIGN KEY (fkciudad) REFERENCES Ciudades(id_ciu);

ALTER TABLE
    Existenciasdeproductos
ADD
    CONSTRAINT ExiSed FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE
    Existenciasdeproductos
ADD
    CONSTRAINT ExiProd FOREIGN KEY (fkproduct) REFERENCES Productos(id_produc);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT ProdProv FOREIGN KEY (fkproduc) REFERENCES Productos(id_produc);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT CliFac FOREIGN KEY (fkclient) REFERENCES Clientes(id_clien);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT CliPro FOREIGN KEY (fkproduc) REFERENCES Productos(id_produc);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT SedFacClient FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT ProvProd FOREIGN KEY (fkprov) REFERENCES Proveedores(id_prov);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT SedFac FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE Empleados
ADD
    CONSTRAINT TurEmp FOREIGN KEY (fkturno) REFERENCES Turnos(id_turnos);

ALTER TABLE Empleados
ADD
    CONSTRAINT GenEmp FOREIGN KEY (fkgender) REFERENCES Generos(id_gender);

ALTER TABLE Empleados
ADD
    CONSTRAINT CarEmp FOREIGN KEY (fkcargo) REFERENCES Cargos(id_cargo);

ALTER TABLE Empleados
ADD
    CONSTRAINT EPSEmp FOREIGN KEY (fkeps) REFERENCES EPS(id_eps);

ALTER TABLE Empleados
ADD
    CONSTRAINT CajaEmp FOREIGN KEY (fkcaja) REFERENCES Cajadecompensacion(id_caja);

ALTER TABLE Empleados
ADD
    CONSTRAINT SedEmp FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

INSERT INTO
    Ciudades(nom_ciu, capital_ciudad)
VALUES ("Bogota D.C.", "Cundinamarca"), ("Medellin", "Antioquia"), ("Cali", "Valle del Cauca"), ("Michelena", "Tachira");

INSERT INTO
    Proveedores(
        nom_prov,
        tel_prov,
        mail_prov,
        direc_prov
    )
VALUES (
        "SteelDick S.A.S",
        3152689510,
        "steeldick34@gmail.com",
        "Kr 34C #54 - 84"
    ), (
        "JellyRaw",
        3002568948,
        "jellraw@gmail.com",
        "Cl 35A #54 - 78"
    ), (
        "FeYCalidad",
        3157895110,
        "feycalidad89@yahoo.com",
        "Kr 65 Tns 65 - 43C"
    );

INSERT INTO
    Sedes(nom_sed, direc_sed, fkciudad)
VALUES (
        "Kennedy 13",
        "Kr 13 # 25 - 50",
        1
    ), (
        "Usaquen",
        "Cl 191A # 11A - 25",
        1
    ), (
        "Napole",
        "Cl 43B # 54 - 67C",
        2
    ), (
        "Central Madeirence",
        "Cl 65C Av El Libertador #45",
        4
    );

INSERT INTO
    Productos(
        nom_produc,
        precio_venta,
        precio_compra
    )
VALUES (
        "Cinta aislante 5 mts mara Psycho",
        15000,
        13500
    ), (
        "Cerrucho para madera 23 cm mara Ferwrell",
        70000,
        45000
    ), (
        "Juego de destornilladores estria 8 in marca SteelDick",
        25600,
        15000
    );

INSERT INTO
    Existenciasdeproductos(
        fecha_exist_entrada,
        cant_produc,
        fksede,
        fkproduct
    )
VALUES ("2023-05-30 16-50", 45000, 2, 3), ("2023-05-30 16-50", 15000, 1, 3), ("2023-05-30 16-50", 58600, 2, 1), ("2023-06-03 12-21", 89450, 4, 2);

INSERT INTO
    Clientes(
        dni_clien,
        nom_clien,
        ape_clien,
        tel_clien,
        mail_clien,
        direc_clien
    )
VALUES (
        10345256712,
        "Juliana Manola",
        "Rodriguez Rondon",
        3081256984,
        "mail1@hotmail.com",
        "Cl 54A #45 - 98"
    ), (
        10486284361,
        "Roberto Fabian",
        "Herrera Martinez",
        3081256984,
        "mail1@gmail.com",
        "Cl 54A #45 - 98"
    ), (
        10321584998,
        "Benito Jose",
        "Cameila Jimenez",
        3027845596,
        "benitocamelaXD123@yahoo.com",
        "Tns 23a #3b - 89c"
    );

INSERT INTO
    Facturasdeproveedores(
        fecha_facompras,
        cant_produc,
        fkproduc,
        fkprov,
        fksede
    )
VALUES (
        "2023-06-03 12-16",
        15000,
        2,
        1,
        4
    ), (
        "2023-06-03 12-30",
        80000,
        3,
        3,
        4
    ), (
        "2023-06-03 16-10",
        2500,
        3,
        2,
        3
    ), ("2023-06-08 01-13", 300, 1, 3, 2);

INSERT INTO
    Facturasdeclientes(
        fecha_facentregas,
        cant_produc,
        fkproduc,
        fkclient,
        fksede
    )
VALUES ("2023-06-08 13-16", 5, 1, 2, 4), ("2023-06-08 13-20", 1, 3, 3, 1), ("2023-06-09 16-33", 2, 2, 1, 2);

INSERT INTO EPS(eps)
VALUES ("Nueva EPS"), ("Capital Salud"), ("Colsubsidio"), ("Famisanar"), ("Sanitas");

INSERT INTO Cajadecompensacion (caja)
VALUES ("Cafam"), ("Compensar"), ("Grupo AVAL");

INSERT INTO
    Turnos(nom_turno, entrada, salida)
VALUES (
        "Mañana",
        "08:00:00",
        "18:00:00"
    ), (
        "Tarde",
        "12:00:00",
        "21:00:00"
    );

INSERT INTO Generos(gender)
VALUES ("Masculino"), ("Femenino"), ("Nazi"), ("Chavista"), (
        "Elefamnte guerrero psiquico ancestral"
    ), ("Mexicano");

INSERT INTO
    Cargos(cargo, sueldo, descrip_cargo)
VALUES (
        "Cajero/ra",
        1250000,
        "Atiende a la clientela en las cajas"
    ), (
        "Jefe de almacen",
        2300000,
        "Administra los productos en almacen"
    ), (
        "Portero/ra",
        1450000,
        "Ciuda la entrada y salida (pueden rotar entre tienda y almacen)"
    ), (
        "Ayudante",
        1150000,
        "Se encuentra en los pasillos ayudando a la clientela en sus necesidades"
    );

INSERT INTO
    Empleados(
        dni_emp,
        ape_emp,
        nom_emp,
        edad_emp,
        tel_emp,
        direct_emp,
        fkgender,
        fkeps,
        fkcaja,
        fkcargo,
        fksede,
        fkturno,
        descrip_emp
    )
VALUES (
        1012659815,
        "Ferrero Hilarion",
        "Garbiel Jose",
        23,
        3014521687,
        "Cl 63A # 90 - 45B AV. Lagos de la cadaverica mama de Rada",
        5,
        3,
        1,
        2,
        4,
        1,
        "Un hijo de puta total >:("
    ),(
        1450640694,
        "Alvarez",
        "Diana Maria",
        25,
        31548965062,
        "Kr 54B Av. Los Olivos #90 - 51",
        2,
        1,
        2,
        1,
        4,
        2,
        "Un sol de Dios :3"
    ),(
        1031541248,
        "Rada Vasquez",
        "Mateo",
        16,
        3185308188,
        "Cl 191A # 11A - 25",
        5,
        1,
        1,
        3,
        4,
        2,
        "El ser mas pasivamente permisivo que Dios pudo haber"
    );