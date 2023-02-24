CREATE DATABASE inventario;

USE inventario;

CREATE TABLE `Categoria` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(200)
);

CREATE TABLE `tipo` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(200)
);

CREATE TABLE `Empleado` (
  `id` int(200) PRIMARY KEY AUTO_INCREMENT,
  `identificacion` varchar(200),
  `nombre` varchar(200),
  `apellido` varchar(200),
  `correo` varchar(200),
  `password` varchar(200),
  `telefono` varchar(100),
  `rol` varchar(100)
);

CREATE TABLE `Entrada` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `cantidad` varchar(200),
  `fecha` varchar(200),
  `idProducto` int(11),
  `idPersonal` int(11),
  `idTipo` int(11)
);

CREATE TABLE `Salida` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `cantidad` varchar(200),
  `fecha` varchar(200),
  `idProducto` int(11),
  `idPersonal` int(11),
  `idTipo` int(11)
);

CREATE TABLE `Producto` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(200),
  `descripcion` varchar(200),
  `precio` varchar(200),
  `stock` varchar(200),
  `foto` varchar(200),
  `estado` varchar(200),
  `fk_categoria` int(11)
);



ALTER TABLE Producto
ADD CONSTRAINT FK_producto1
FOREIGN KEY (fk_categoria) REFERENCES Categoria(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE Entrada
ADD CONSTRAINT FK_eproducto
FOREIGN KEY (idProducto) REFERENCES Producto(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE Entrada
ADD CONSTRAINT FK_epersonal
FOREIGN KEY (idPersonal) REFERENCES Empleado(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE Entrada
ADD CONSTRAINT FK_etipo
FOREIGN KEY (idTipo) REFERENCES Tipo(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE salida
ADD CONSTRAINT FK_productsal
FOREIGN KEY (idProducto) REFERENCES Producto(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE salida
ADD CONSTRAINT FK_spersonal
FOREIGN KEY (idPersonal) REFERENCES Empleado(id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE salida
ADD CONSTRAINT FK_stipo
FOREIGN KEY (idTipo) REFERENCES Tipo(id) ON DELETE CASCADE ON UPDATE CASCADE;


INSERT INTO `empleado` (`id`, `identificacion`, `nombre`, `apellido`, `correo`, `password`, `telefono`, `rol`) VALUES
(1, '1117489249', 'Adrian', 'Rodriguez', 'admin@gmail.com', 'a2d', '3224477818', 'admin');
