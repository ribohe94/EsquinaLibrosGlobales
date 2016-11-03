-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2016 a las 22:26:04
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esquina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `libNombre` varchar(60) NOT NULL,
  `libIsnb` int(13) UNSIGNED NOT NULL,
  `libDescripcion` varchar(480) NOT NULL,
  `libIntercambio` tinyint(1) NOT NULL,
  `libPrecioBase` float NOT NULL,
  `libAutor` varchar(25) NOT NULL,
  `libIdUser` int(11) NOT NULL,
  `libActive` tinyint(1) NOT NULL,
  `libPub` datetime NOT NULL,
  `libImage` varchar(20000) DEFAULT NULL,
  `idLibro` int(18) NOT NULL,
  `libPrecioActual` float DEFAULT NULL,
  `libCategoria` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para los libros de la aplicacion';

CREATE TABLE Esquina.subasta
(
    id INT NOT NULL,
    oferta FLOAT NOT NULL,
    usuario INT(10) UNSIGNED NOT NULL,
    comentario varchar(480) NOT NULL,
    libro int(18) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario) REFERENCES users (id),
    FOREIGN KEY (libro) REFERENCES libros (idLibro)
);

CREATE TABLE Esquina.oferta
(
    id INT NOT NULL AUTO_INCREMENT,
    ofertaLib varchar(25),
    oferta FLOAT,
    usuario INT(10) UNSIGNED NOT NULL,
    comentario varchar(480) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario) REFERENCES users (id)
);

CREATE TABLE Esquina.intercambio
(
    id INT NOT NULL,
    ofertaLib INT(18) NOT NULL,
    usuario INT(10) UNSIGNED NOT NULL,
    comentario varchar(480) NOT NULL,
    libro int(18) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario) REFERENCES users (id),
    FOREIGN KEY (libro) REFERENCES libros (idLibro)
);

INSERT INTO oferta (id, ofertaLib, oferta, usuario, comentario) VALUES
  (1, 'Un Diccionario', 1000, 1, 'El libro me parece muy interesante, Quiero leerlo!!!'),
  (2, 'La Iliada', 2000, 2, 'El libro me parece muy interesante, Quiero leerlo!!!');

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`libNombre`, `libIsnb`, `libDescripcion`, `libIntercambio`, `libPrecioBase`, `libAutor`, `libIdUser`, `libActive`, `libPub`, `libImage`, `idLibro`, `libPrecioActual`, `libCategoria`) VALUES
('Dracula', 1, 'Drácula es una novela publicada en 1897 por el irlandés Bram Stoker, quien ha convertido a su antagonista en el vampiro más famoso. Se dice que el escritor se basó en las conversaciones que mantuvo con un erudito húngaro llamado Arminius Vámbéry, quien le habló de Vlad Drăculea.', 1, 25000, 'Bram Stoker', 1, 1, '2016-10-08 00:00:00', 'img_books/dracula.png', 13, NULL, 1),
('Frankenstein', 2, 'Frankenstein o el moderno Prometeo, o simplemente Frankenstein (título original en inglés: Frankenstein; or, The Modern Prometheus), es una obra literaria de la escritora inglesa Mary Shelley. Publicado en 1818 y enmarcado en la tradición de la novela gótica, el texto explora temas tales como la moral científica, la creación y destrucción de vida y la audacia de la humanidad en su relación con Dios.', 0, 15000, 'Mary Shelley', 2, 1, '2016-10-08 00:00:00', 'img_books/frankenstein.png', 14, NULL, 2),
('La República', 3, 'República —en griego (Politeia), que proviene de (pólis, denominación dada a las ciudades estados griegas)— es la más conocida e influyente obra de Platón, y es el compendio de las ideas que conforman su filosofía. Se trata de un diálogo entre Sócrates y otros personajes, como los discípulos o parientes del propio Sócrates.', 1, 10000, 'Platón', 2, 1, '2016-10-08 00:00:00', 'img_books/republica.png', 15, NULL, 3),
('El Extranjero', 4, 'El extranjero (título original francés L\'Étranger) es la primera novela del escritor francés Albert Camus, publicada en 1942. El protagonista, Meursault, es un ser indiferente a la realidad por resultarle absurda e inabordable. El progreso tecnológico le ha privado de la participación en las decisiones colectivas y le ha convertido en "extranjero" dentro de lo que debería ser su propio entorno.', 1, 30000, 'Albert Camus', 0, 0, '0000-00-00 00:00:00', 'img_books/extranjero.png', 16, NULL, 4),
('Ilíada', 5, 'La Ilíada (en griego antiguo Iliás; en griego moderno Iliáda) es una epopeya griega, atribuida tradicionalmente a Homero. Compuesta en hexámetros dactílicos, consta de 15 693 versos (divididos por los editores, ya en la antigüedad, en 24 cantos o rapsodias) y su trama radica en la cólera de Aquiles (mênis).1 Narra los acontecimientos ocurridos durante 51 días en el décimo y último año de la guerra de Troya. El título de la obra deriva del nombre griego de Troya, Ιlión.', 0, 5000, 'Homero', 1, 1, '2016-10-08 00:00:00', 'img_books/iliada.png', 17, NULL, 5),
('Meditaciones', 6, 'Las Meditaciones o Pensamientos o A sí mismo (en griego, Τὰ εἰς ἑαυτόν, Tà eis heautón, literalmente \'cosas para sí mismo\') del emperador romano Marco Aurelio es una obra literaria constituida por una serie de reflexiones de este filósofo, aparentemente fuera del tiempo y sin cronología. Fue originalmente redactada en griego entre los años 170 y 180. La obra, en doce tomos, es única en su género, y parece recorrer los últimos años de la vida interior de este emperador.', 0, 24000, 'Marco Aurelio', 2, 0, '2016-10-05 00:00:00', 'img_books/meditaciones.png', 18, NULL, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
