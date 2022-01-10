-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para crud_reciclaje
CREATE DATABASE IF NOT EXISTS `crud_reciclaje` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `crud_reciclaje`;

-- Volcando estructura para tabla crud_reciclaje.ejemplos
CREATE TABLE IF NOT EXISTS `ejemplos` (
  `IdEjemplo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `ImgObjeto` varchar(200) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `ImgPapelera` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdEjemplo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla crud_reciclaje.ejemplos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `ejemplos` DISABLE KEYS */;
INSERT INTO `ejemplos` (`IdEjemplo`, `ImgObjeto`, `Descripcion`, `ImgPapelera`) VALUES
	(4, 'https://www.fumisan.es/8618-home_default/vaso-plastico-blanco-166-cc-vending.jpg', 'agyuiosdfgyuasyudfgyuasyuf', 'https://www.juansola.com/20837/papelera-faibo-318-amarilla.jpg'),
	(5, 'https://www.fumisan.es/8618-home_default/vaso-plastico-blanco-166-cc-vending.jpg', 'asdfsdfuiasdgyuifyasudfgyudasgyufgyua', 'https://www.juansola.com/20837/papelera-faibo-318-amarilla.jpg'),
	(10, 'https://www.fumisan.es/8618-home_default/vaso-plastico-blanco-166-cc-vending.jpg', 'Editado', 'https://www.juansola.com/20837/papelera-faibo-318-amarilla.jpg');
/*!40000 ALTER TABLE `ejemplos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
