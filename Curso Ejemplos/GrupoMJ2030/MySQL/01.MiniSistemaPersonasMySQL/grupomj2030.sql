# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     grupomj2030
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         Same as source (5.5.16)
# Target max_allowed_packet:    1048576
# HeidiSQL version:             4.0
# Date/time:                    2019-08-22 21:44:10
# --------------------------------------------------------

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'grupomj2030'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `grupomj2030` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `grupomj2030`;


#
# Table structure for table 'personas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `personas` (
  `idPERS` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomPERS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dirPERS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telPERS` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dtoPERS` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPERS`),
  UNIQUE KEY `idPERS` (`idPERS`),
  KEY `idPERS_2` (`idPERS`,`nomPERS`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'personas'
#

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS;*/
REPLACE INTO `personas` (`idPERS`, `nomPERS`, `dirPERS`, `telPERS`, `dtoPERS`) VALUES
	('1','Bob Esponja','Deep SEa 789','29029285','Montevideo'),
	('2','Calamardo','Tottem 8989','29058585','montevideo'),
	('3','Don Cangrejo','Kangreburger 3456','78059545','Maldonado'),
	('4','Patricio','Star 38349','40585385','canelones'),
	('5','Don Gato','Close Street 567','98989890','maldonado'),
	('6','Cucho','Calle cerrada 456','78945685','canelones'),
	('7','Demóstenes','Callejón 567','45784585','canelones'),
	('8','Pedro Picapiedra','Stone 6798','8522345','montevideo'),
	('9','Pablo Mármol','Stone 7800','852285','canelones'),
	('10','Dino','Saurio 6776','457895','canelones'),
	('11','Pepe Trueno','Storm 888','9089785','montevideo'),
	('12','Pepe Trueno','Storm 888','9089785','montevideo'),
	('14','Pato Lucas','Yaguarón 7676','777777','montevideo'),
	('15','Arenita','Bubble 6778','09090909','montevideo'),
	('16','JosÃ© PÃ©rez','RÃ­o Negro 888','8898989898','PaysandÃº'),
	('17','Estéban Sánchez','Ibirapitá 999','9090909','Tacuarembó');
/*!40000 ALTER TABLE `personas` ENABLE KEYS;*/
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
