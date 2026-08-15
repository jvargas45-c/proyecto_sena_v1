--1.usuarios
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20),
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol VARCHAR(20) DEFAULT 'cliente',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--2.categorias
CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre_categoria VARCHAR(50) NOT NULL,
    descripcion VARCHAR(150),
    estado ENUM('Activa','Inactiva') DEFAULT 'Activa'
);
--3.promociones
CREATE TABLE promociones (
    id_promocion INT AUTO_INCREMENT PRIMARY KEY,
    nombre_promocion VARCHAR(100) NOT NULL,
    descripcion TEXT,
    descuento DECIMAL(5,2),
    fecha_inicio DATE,
    fecha_fin DATE,
    estado VARCHAR(20)
);
--4.productos
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    tipo_ponque VARCHAR(50),
    descripcion TEXT,
    stock INT NOT NULL,
    id_tamano INT,
    id_categoria INT,

    CONSTRAINT fk_producto_tamano
    FOREIGN KEY (id_tamano)
    REFERENCES tamanos(id_tamano),

    CONSTRAINT fk_producto_categoria
    FOREIGN KEY (id_categoria)
    REFERENCES categorias(id_categoria)
);
--5.precios
CREATE TABLE precios (
    id_precio INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,

    CONSTRAINT fk_precio_producto
    FOREIGN KEY (id_producto)
    REFERENCES productos(id_producto)
);
--6.pedidos
CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    fecha_pedido DATE,
    total DECIMAL(10,2),
    estado VARCHAR(30),

    CONSTRAINT fk_pedido_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuarios(id_usuario)
);
--7.detalle-pedido
CREATE TABLE detalle_pedido (
    id_detalle INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT NOT NULL,
    id_producto INT NOT NULL,
    id_salsa INT,
    cantidad INT NOT NULL,
    subtotal DECIMAL(10,2),

    CONSTRAINT fk_detalle_pedido
    FOREIGN KEY (id_pedido)
    REFERENCES pedidos(id_pedido),

    CONSTRAINT fk_detalle_producto
    FOREIGN KEY (id_producto)
    REFERENCES productos(id_producto),

    CONSTRAINT fk_detalle_salsa
    FOREIGN KEY (id_salsa)
    REFERENCES salsas(id_salsa)
);