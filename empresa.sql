CREATE DATABASE Empresa;
USE Empresa;
CREATE TABLE `usuarios` (
  `usr` varchar(10) NOT NULL PRIMARY KEY,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `activo` varchar(2) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr`, `nombre`, `correo`, `clave`, `activo`) VALUES
('cathe', 'cathe espinal', 'cathe.espinal', '1242', 'si'),
('jhoan', 'jhoan villa', 'jhoan.villa', '1247', 'si'),
('maria', 'maria lopez', 'maria.lopez', '1243', 'si'),
('yessica', 'yessica florez', 'yessica-flores@hotmail.com', '1234', 'si');

CREATE TABLE Viaje(
  codigo VARCHAR(10) PRIMARY KEY,
  destino VARCHAR(50) NOT NULL,
  cantidad INT NOT NULL,
   valor DOUBLE NOT NULL,
    activo VARCHAR(2) DEFAULT 'si');
INSERT INTO `viaje` (`codigo`, `destino`, `cantidad`, `valor`, `activo`) VALUES
('123', 'cartagena', 1, 500, 'si');
