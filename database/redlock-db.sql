CREATE DATABASE Redlock;
USE Redlock;

CREATE TABLE users (
    ID INT(6) PRIMARY KEY,
    Nama VARCHAR(30) NOT NULL,
    Alamat VARCHAR(50) NOT NULL,
    Jabatan VARCHAR(30) NOT NULL
);

INSERT INTO users (ID,Nama, Alamat, Jabatan) VALUES
(1, 'Yukiko Amagi', '123 Main St', 'Assosiate Manager'),
(2, 'Chie Satonaka', '456 Oak St', 'Junior Programmer'),
(3, 'Naoto Shirogane', '789 Elm St', 'Junior System Analyst'),
(4, 'Rise Kujikawa', '656 Arlin St', 'IT Manager');