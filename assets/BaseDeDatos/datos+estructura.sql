CREATE TABLE `datos` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del estudiante',
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre y apellidos del estudiante',
  `grupo` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Grupo al que el estudiante pertenece',
  `notas` int(2) NOT NULL COMMENT 'Calificación del estudiante',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `datos` (`id`, `nombre`, `grupo`, `notas`) VALUES
(1, 'Martin Mainentti', '3ro BY', 12),
(2, 'Lautaro Galeazzi', '3ro BY', 8),
(3, 'Carlos Rodriguez', '3ro BY', 10);