CREATE USER 'grupo_bd'@'localhost' IDENTIFIED BY '12345';

CREATE DATABASE trab_bd;

GRANT ALL ON trab_bd.* TO 'grupo_bd'@'localhost';

FLUSH PRIVILEGES;