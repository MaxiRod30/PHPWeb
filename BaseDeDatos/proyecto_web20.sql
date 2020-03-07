# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     proyecto_web20
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2020-03-07 12:46:56
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'proyecto_web20'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "proyecto_web20" /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE "proyecto_web20";


#
# Table structure for table 'categorias'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "categorias" (
  "categoriasID" int(100) unsigned NOT NULL AUTO_INCREMENT,
  "categoriasNOM" varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ("categoriasID"),
  UNIQUE KEY "categoriasID_UNIQUE" ("categoriasID")
) AUTO_INCREMENT=24;



#
# Dumping data for table 'categorias'
#

LOCK TABLES "categorias" WRITE;
/*!40000 ALTER TABLE "categorias" DISABLE KEYS;*/
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('18','Camaras');
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('19','Repuesto Camaras');
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('20','Lentes');
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('21','Cargadores');
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('22','Fichas');
REPLACE INTO "categorias" ("categoriasID", "categoriasNOM") VALUES
	('23','Pilas');
/*!40000 ALTER TABLE "categorias" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'marcas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "marcas" (
  "marcasID" int(100) unsigned NOT NULL AUTO_INCREMENT,
  "marcasNOM" varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ("marcasID"),
  UNIQUE KEY "marcasID_UNIQUE" ("marcasID")
) AUTO_INCREMENT=20;



#
# Dumping data for table 'marcas'
#

LOCK TABLES "marcas" WRITE;
/*!40000 ALTER TABLE "marcas" DISABLE KEYS;*/
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('14','Canon');
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('15','Nikon');
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('16','Fuji');
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('17','Sony');
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('18','Olympus');
REPLACE INTO "marcas" ("marcasID", "marcasNOM") VALUES
	('19','Lumix');
/*!40000 ALTER TABLE "marcas" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'producto'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "producto" (
  "productoID" int(100) unsigned NOT NULL AUTO_INCREMENT,
  "productoNOM" varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  "productoDESCRIP" varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  "productoPRECIO" float NOT NULL,
  "productoMARCA" int(100) NOT NULL,
  "productoCATEG" int(100) NOT NULL,
  "productoPAIS" varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  "productoIMG" varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  "productoACT" varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ("productoID"),
  UNIQUE KEY "productoID_UNIQUE" ("productoID")
) AUTO_INCREMENT=38;



#
# Dumping data for table 'producto'
#

LOCK TABLES "producto" WRITE;
/*!40000 ALTER TABLE "producto" DISABLE KEYS;*/
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('29','Camara Canon DI350 ','Camara Digital Canon Eos Rebel T6 Gtia Oficial + Regalo Amv','1300',14,18,'USA','../../imageProducto/5','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('30','Camara Nikon D3500 ',' Una DSLR tan fácil de usar como una cámara para apuntar y disparar ? Diseño compacto y cómodo que r','1500',15,18,'USA','../../imageProducto/6','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('31','Lente Alpex ','Alpex Ancho Ángulo Lente de Cámara','300',19,20,'China','../../imageProducto/3','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('32','Cargador Batería  Cámara Nikon ','Cargador Batería En-el15 De Cámara Nikon','100',15,21,'UK','../../imageProducto/8','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('33','Pilas Fuji ','Pilas re cargarble para cámara Fui','1234',16,23,'China','../../imageProducto/9','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('34','Pilas Canon ','Pilas para cámara Canon','312',14,23,'UK','../../imageProducto/10','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('35','Olympus OM-D E-M5  ','Digital Camera. Micro Cuatro Tercios','1600',18,18,'China','../../imageProducto/11','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('36','Canon EOS Rebel T6 18MP  ','Canon EOS Rebel T6 18MP Digital Camera - Black with  75-300mm Zoom Lens Bundle ','2000',14,18,'China','../../imageProducto/12','Activo');
REPLACE INTO "producto" ("productoID", "productoNOM", "productoDESCRIP", "productoPRECIO", "productoMARCA", "productoCATEG", "productoPAIS", "productoIMG", "productoACT") VALUES
	('37','Cargador para cámaras Canon ','Tipo de conexión PARED:220V / AUTO:12V','400',14,21,'USA','../../imageProducto/13','Activo');
/*!40000 ALTER TABLE "producto" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'users'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "users" (
  "usersID" int(100) unsigned NOT NULL AUTO_INCREMENT,
  "usersNAME" varchar(32) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de usuario a logearse',
  "usersPASS" varchar(32) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Password de usuario a logiarse',
  "usersNOM" varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  "usersPRIVI" varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ("usersID"),
  UNIQUE KEY "usersID_UNIQUE" ("usersID"),
  UNIQUE KEY "usersNAME_UNIQUE" ("usersNAME")
) AUTO_INCREMENT=22 COMMENT='Administracion de Usuarios';



#
# Dumping data for table 'users'
#

LOCK TABLES "users" WRITE;
/*!40000 ALTER TABLE "users" DISABLE KEYS;*/
REPLACE INTO "users" ("usersID", "usersNAME", "usersPASS", "usersNOM", "usersPRIVI") VALUES
	('19','santi1','81dc9bdb52d04dc20036dbd8313ed055','santiago','Consumidor');
REPLACE INTO "users" ("usersID", "usersNAME", "usersPASS", "usersNOM", "usersPRIVI") VALUES
	('20','admin','81dc9bdb52d04dc20036dbd8313ed055','Administrador','Administrador');
REPLACE INTO "users" ("usersID", "usersNAME", "usersPASS", "usersNOM", "usersPRIVI") VALUES
	('21','maxi','81dc9bdb52d04dc20036dbd8313ed055','Maxi Administrador','Administrador');
/*!40000 ALTER TABLE "users" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
