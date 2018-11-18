CREATE USER 'grupo_bd'@'localhost' IDENTIFIED BY '12345';

CREATE DATABASE Olimpiada;

GRANT ALL ON Olimpiada.* TO 'grupo_bd'@'localhost';

FLUSH PRIVILEGES;