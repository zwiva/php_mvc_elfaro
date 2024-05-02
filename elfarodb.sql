-- DB elfarodb
-- XAMPP -> Apache + Mysql
-- Servidor: 127.0.0.1
-- PHP: 8.2.12

CREATE TABLE `elfarodb`.`contactos` (`nombre` CHAR(250) NOT NULL , `email` CHAR(50) NOT NULL , `mensaje` VARCHAR(6500) NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `contactos` ADD `id_contacto` SERIAL NOT NULL FIRST;

CREATE TABLE `elfarodb`.`usuarios` (`nombre` CHAR(250) NOT NULL , `rut` CHAR(10) NOT NULL , `email` CHAR(50) NOT NULL , `fono` CHAR(10) NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `usuarios` ADD `id_usuario` SERIAL NOT NULL FIRST;