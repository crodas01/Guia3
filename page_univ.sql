# Host: localhost  (Version: 5.5.8-log)
# Date: 2016-06-05 01:30:34
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "contactos"
#

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `idContacto` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la tabla',
  `nombresContacto` varchar(80) NOT NULL DEFAULT '' COMMENT 'Nombres del contacto',
  `direccionContacto` varchar(80) NOT NULL DEFAULT '' COMMENT 'Direccion del contacto',
  `telefonoContacto` varchar(15) DEFAULT '' COMMENT 'Telefono del contacto',
  `celularContacto` varchar(15) DEFAULT NULL COMMENT 'Celular del contacto',
  `emailContacto` varchar(50) DEFAULT NULL COMMENT 'Direccion de correo del contacto',
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de contactos';

#
# Data for table "contactos"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la tabla',
  `nombreUsuario` varchar(80) NOT NULL DEFAULT '' COMMENT 'Nombre del usuario',
  `loginUsuario` varchar(20) NOT NULL DEFAULT '' COMMENT 'Login con que ingresara al sistema',
  `passwUsuario` varchar(20) NOT NULL DEFAULT '' COMMENT 'Contraseña del usuario',
  `estadoUsuario` char(1) NOT NULL DEFAULT 'a' COMMENT 'Estado del usuario, i=inactivo, a=activo',
  `tipoUsuario` char(1) NOT NULL DEFAULT '' COMMENT 'Tipo de usuario, e=empleado, c=cliente',
  `emailUsuario` varchar(80) NOT NULL DEFAULT '' COMMENT 'Correo electronico del usuario',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabla para almacenar la información de los usuarios del sist';

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'Empleado de Prueba','admin','admin123','a','e','correo@prueba.com'),(2,'Cliente de Prueba','cliente','cliente123','a','c','cliente@prueba.com');

#
# Structure for table "visitas"
#

DROP TABLE IF EXISTS `visitas`;
CREATE TABLE `visitas` (
  `idVisitas` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la tabla',
  `ipVisitas` varchar(20) NOT NULL DEFAULT '' COMMENT 'IP de donde se ingresa',
  `cantidadVisitas` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Contador de vistas [por fecha / ip]',
  `fechaVisitas` date NOT NULL DEFAULT '0000-00-00' COMMENT 'Fecha de la visita',
  PRIMARY KEY (`idVisitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para almacenar el contador de visitas';

#
# Data for table "visitas"
#

INSERT INTO `visitas` VALUES (1,'127.0.0.1',1,'2016-06-05'),(2,'127.0.0.1',1,'2016-06-04');
