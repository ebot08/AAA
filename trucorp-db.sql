CREATE DATABASE Trucorp;
USE Trucorp;

CREATE TABLE users(
id varchar(10) PRIMARY KEY,
Nama varchar(25),
Kantor varchar(25)
);

INSERT INTO Trucorp.users(ID,Nama,Kantor)
VALUES('912','Elliana','Pusat');
