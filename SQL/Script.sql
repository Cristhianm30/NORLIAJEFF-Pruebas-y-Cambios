CREATE DATABASE usuariosena;

USE usuariosena;

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `cliente` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(12) NOT NULL,
  `apellido` varchar(12) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `compras` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `producto` varchar(35) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `productos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `producto` varchar(35) NOT NULL,
  `precio` varchar(40) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `ventas` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `producto` varchar(35) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `nombre`, `apellido`, `correo`, `contrasena`) VALUES
(1, 'Norbey ', 'Moreno', 'more0589@gmail.com', '12345');

INSERT INTO `usuario` (`Id`, `nombre`, `apellido`, `correo`, `contrasena`) VALUES
(2, 'Liang ', 'Reyes', 'liangreyes9@gmail.com', 'LR12Sena');

INSERT INTO `usuario` (`Id`, `nombre`, `apellido`, `correo`, `contrasena`) VALUES
(3, 'Keyner ', 'Mestra', 'keyner.mestra@gmail.com', 'SENA');

--
-- Volcado de datos para la tabla `clientes`
--
-- Se retira la palabra 'clientes por 'cliente'. ya que esa es la tabla creada
INSERT INTO `cliente` (`Id`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`) VALUES
(1, 'Luis ', 'Gonzales', '378987656', 'Bogota DC', 'Luis12@gmail.com');

INSERT INTO `cliente` (`Id`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`) VALUES
(2, 'Pedro ', 'Suarez', '35078987', 'Pereira', 'Pedro@gmail.com');

