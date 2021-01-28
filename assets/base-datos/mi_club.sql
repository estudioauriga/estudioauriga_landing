/* SQL Manager Lite for MySQL                              5.8.0.53936 */
/* ------------------------------------------------------------------- */
/* Host     : localhost                                                */
/* Port     : 3306                                                     */
/* Database : mi_club                                                  */


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'utf8mb4' */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `mi_club`
    CHARACTER SET 'utf8mb4'
    COLLATE 'utf8mb4_general_ci';

USE `mi_club`;

/* Structure for the `socios` table : */

CREATE TABLE `socios` (
  `id_socio` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) COLLATE utf8mb4_general_ci NOT NULL,
  `empresa` VARCHAR(20) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` INTEGER(12) DEFAULT NULL,
  `mail` VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
  `motivo` MEDIUMTEXT COLLATE utf8mb4_general_ci,
  PRIMARY KEY USING BTREE (`id_socio`)
) ENGINE=InnoDB
AUTO_INCREMENT=113 ROW_FORMAT=DYNAMIC CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci'
;

/* Structure for the `cuotas` table : */

CREATE TABLE `cuotas` (
  `id_cuota` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `id_socio` INTEGER(11) DEFAULT NULL,
  `fecha_pago` DATE DEFAULT NULL,
  `importe_cuota` DECIMAL(8,2) DEFAULT NULL,
  `anotaciones` TEXT COLLATE utf8mb4_general_ci,
  PRIMARY KEY USING BTREE (`id_cuota`),
  KEY `id_socio` USING BTREE (`id_socio`),
  CONSTRAINT `cuotas_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id_socio`)
) ENGINE=InnoDB
AUTO_INCREMENT=11 ROW_FORMAT=DYNAMIC CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci'
;

/* Data for the `socios` table  (LIMIT 0,500) */

INSERT INTO `socios` (`id_socio`, `nombre`, `empresa`, `telefono`, `mail`, `motivo`) VALUES
  (1,'Oscar','S',NULL,'','Este cliente soy yo'),
  (2,'Joel','N',NULL,'','Este cliente es un moroso'),
  (3,'Pedro','S',NULL,'','Cliente habitual'),
  (4,'Ana','S',NULL,'','Solo veranos'),
  (5,'Luis','S',NULL,'','Invierno'),
  (6,'Maria','S',NULL,'','Epoca de Verano'),
  (7,'Jose','S',NULL,'','No es un cliente habitual'),
  (8,'Marcos','S',NULL,'','Le gusta el senderismo'),
  (9,'Beatriz','S',NULL,'','Posee tarjeta de descuento'),
  (10,'Veronica','S',NULL,'','Cliente bastante formal');
COMMIT;

/* Data for the `cuotas` table  (LIMIT 0,500) */

INSERT INTO `cuotas` (`id_cuota`, `id_socio`, `fecha_pago`, `importe_cuota`, `anotaciones`) VALUES
  (1,1,'2010-12-25',100.00,' El cliente tiene las cuentas saldadas'),
  (2,2,NULL,0.00,' El cliente no paga'),
  (3,3,'2010-12-25',50.00,' El cliente tiene las cuentas saldadas'),
  (4,4,'2010-12-25',40.00,' El cliente tiene las cuentas saldadas'),
  (5,5,'2010-12-25',30.00,' El cliente tiene las cuentas saldadas'),
  (6,6,'2010-12-25',5.00,' El cliente debe dinero'),
  (7,7,'2010-12-25',4.00,' El cliente debe dinero'),
  (8,8,'2010-12-25',2.00,' El cliente debe dinero'),
  (9,1,'2010-12-25',15.00,'El cliente tiene dinero'),
  (10,10,'2010-12-25',120.00,'Cliente solvente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;