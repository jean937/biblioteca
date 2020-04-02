/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.3.16-MariaDB : Database - biblioteca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `biblioteca`;

/*Table structure for table `alquileres` */

DROP TABLE IF EXISTS `alquileres`;

CREATE TABLE `alquileres` (
  `id_alquiler` int(10) NOT NULL AUTO_INCREMENT,
  `id_lector` int(10) DEFAULT NULL,
  `id_libro` int(10) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  PRIMARY KEY (`id_alquiler`),
  KEY `id_libro` (`id_libro`),
  KEY `alquileres_ibfk_2` (`id_lector`),
  CONSTRAINT `alquileres_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE,
  CONSTRAINT `alquileres_ibfk_2` FOREIGN KEY (`id_lector`) REFERENCES `lectores` (`id_lector`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `alquileres` */

insert  into `alquileres`(`id_alquiler`,`id_lector`,`id_libro`,`fecha_salida`,`fecha_entrada`) values (23,0,20,'2020-03-16','2020-03-31');

/*Table structure for table `autores` */

DROP TABLE IF EXISTS `autores`;

CREATE TABLE `autores` (
  `id_autor` int(10) NOT NULL AUTO_INCREMENT,
  `autor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `autores` */

insert  into `autores`(`id_autor`,`autor`) values (4,'Melanie');

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(10) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categoria`,`categoria`) values (1,'Drama'),(3,'comedia');

/*Table structure for table `editoriales` */

DROP TABLE IF EXISTS `editoriales`;

CREATE TABLE `editoriales` (
  `id_editorial` int(10) NOT NULL AUTO_INCREMENT,
  `editorial` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_editorial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `editoriales` */

insert  into `editoriales`(`id_editorial`,`editorial`) values (2,'juan montalvo');

/*Table structure for table `lectores` */

DROP TABLE IF EXISTS `lectores`;

CREATE TABLE `lectores` (
  `id_lector` int(10) NOT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `codigo_postal` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_lector`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lectores` */

insert  into `lectores`(`id_lector`,`nombres`,`telefono`,`direccion`,`codigo_postal`) values (0,'Melanie  Medina',12345563,'babahoyo',12376);

/*Table structure for table `libros` */

DROP TABLE IF EXISTS `libros`;

CREATE TABLE `libros` (
  `id_libro` int(10) NOT NULL AUTO_INCREMENT,
  `id_autor` int(10) DEFAULT NULL,
  `id_categoria` int(10) DEFAULT NULL,
  `id_editorial` int(10) DEFAULT NULL,
  `nombre_autor` varchar(30) DEFAULT NULL,
  `fecha_lan` date DEFAULT NULL,
  `idioma` varchar(30) NOT NULL,
  `paginas` int(10) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `id_autor` (`id_autor`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_editorial` (`id_editorial`),
  CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`) ON DELETE CASCADE,
  CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`Id_categoria`) ON DELETE CASCADE,
  CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`Id_editorial`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `libros` */

insert  into `libros`(`id_libro`,`id_autor`,`id_categoria`,`id_editorial`,`nombre_autor`,`fecha_lan`,`idioma`,`paginas`,`descripcion`) values (20,4,3,2,'medicina general','2020-03-17','espaÃ±ol',234,'viejo');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `password` int(10) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre`,`usuario`,`password`,`estado`) values (7,'mela','admin',123,'activo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
