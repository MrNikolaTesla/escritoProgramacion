CREATE TABLE `datos` (
  `id` int(4) PRIMARY KEY NOT NULL COMMENT 'Identificador del estudiante',
  `fecha` datetime NOT NULL COMMENT 'Fecha de inscripción',
  `centro` varchar(50) NOT NULL COMMENT 'Centro de estudio',
  `nombre_apellido` varchar(60) NOT NULL COMMENT 'Nombre y apellido del estudiante',
  `curso` varchar(22) NOT NULL COMMENT 'Curso al que el estudiante pertenece',
  `edad` int(3) NOT NULL COMMENT 'Edad del estudiante',
  `numero_cel` int(12) NOT NULL COMMENT 'Número del estudiante',
  `correo` varchar(60) NOT NULL COMMENT 'Correo del estudiante'
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

INSERT INTO
  `datos` (
    `id`,
    `fecha`,
    `centro`,
    `nombre_apellido`,
    `curso`,
    `edad`,
    `numero_cel`,
    `correo`
  )
VALUES
  (
    1,
    '2023-03-01 12:15:00',
    'UTU Maldonado',
    'Luis González',
    'Diseño Web 1',
    16,
    '091010101',
    'correo1@email.com'
  ),
  (
    2,
    '2023-03-01 12:15:00',
    'UTU Maldonado',
    'Martín Rodríguez',
    'Redes 2',
    19,
    '092020202',
    'correo2@email.com'
  ),
  (
    3,
    '2023-03-01 12:15:00',
    'UTU Maldonado',
    'Guillermo Perez',
    'Programación 3',
    32,
    '093030303',
    'correo3@email.com'
  ),
  (
    4,
    '2023-03-01 12:15:00',
    'UTU Arrayanes',
    'Victor Miraballes',
    'Administración 2',
    25,
    '094040404',
    'correo4@email.com'
  ),
  (
    5,
    '2023-03-01 12:15:00',
    'UTU Arrayanes',
    'Miguel Martínez',
    'Administración 2',
    21,
    '095050505',
    'correo5@email.com'
  ),
  (
    6,
    '2023-03-01 12:15:00',
    'UTU Arrayanes',
    'Alfredo Benitez',
    'Gastronomía 1',
    17,
    '096060606',
    'correo6@email.com'
  );