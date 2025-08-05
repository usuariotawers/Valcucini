CREATE TABLE rol (
    id_rol INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre_rol VARCHAR(30)
);

CREATE TABLE categoria (
    id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre_categoria VARCHAR(50) NOT NULL,
    Descripcion TEXT NOT NULL,
    Url_imagen VARCHAR(255) NOT NULL 
);

CREATE TABLE usuario (
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Contrasena VARCHAR(30) NOT NULL,
    id_rol INT NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES rol(id_rol)
);

CREATE TABLE productos (
    id_productos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(300) NOT NULL,
    Descripcion TEXT NOT NULL,
    Materiales TEXT NOT NULL,
    Colores TEXT NOT NULL,
    Tipo VARCHAR(30) NOT NULL,
    Garantia TEXT NOT NULL,
    Acabado TEXT NOT NULL,
    Url_imagenes VARCHAR(255) NOT NULL, -- Imagen del producto
    Visitas INT NOT NULL DEFAULT 0, -- Contador de visitas/búsquedas
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);



CREATE TABLE trabaja_con_nosotros (
    id_postulacion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Telefono VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Cargo VARCHAR(30) NOT NULL,
    Ciudad VARCHAR(30) NOT NULL,
    Experiencia TEXT NOT NULL,
    Portafolio TEXT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE formulario_PQR (
    id_formulario_PQR INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    Telefono INT NOT NULL,
    Mensaje TEXT NOT NULL,
    confirmación_envio BOOLEAN,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE reseñas (
    id_reseña INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Opinion VARCHAR(40) NOT NULL,
    Titulo_experiencia VARCHAR(20) NOT NULL,
    Calificacion INT NOT NULL,
    Fecha DATE NOT NULL,
    id_usuario INT NOT NULL,
    id_producto INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_producto) REFERENCES productos(id_productos)
);

CREATE TABLE descuentos (
    id_descuentos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Codigo_descuento VARCHAR(20) NOT NULL,
    Url_imagen VARCHAR(255) NOT NULL, -- Imagen del producto
    Porcentaje FLOAT NOT NULL,
    Fecha_inicio DATE NOT NULL,
    Fecha_fin DATE NOT NULL,
    Estado ENUM('Activo', 'Inactivo') NOT NULL,
    id_productos INT NULL,
    id_categoria INT NULL,    
   FOREIGN KEY (id_productos) REFERENCES productos(id_productos),
   FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE carrusel (
    id_carrusel INT AUTO_INCREMENT      PRIMARY KEY,
    Url_imagen VARCHAR(255) NOT NULL,
    tipo ENUM('Descuentos',  'Descuentos clientes', 'Portafolio', 'Mas vendidos', 'Recomendados', 'Inspiración para cada espacio de tu hogar') NOT NULL,
    id_producto  INT  NULL,
    id_categoria INT  NULL,
    id_descuentos INT NULL,
    FOREIGN KEY (id_producto)  REFERENCES productos(id_productos),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
    FOREIGN KEY (id_descuentos) REFERENCES descuentos(id_descuentos)


);


CREATE TABLE formulario_de_cotizacion (
    id_formulario_cotizacion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Apellido VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Telefono VARCHAR(20) NOT NULL,
    Categoria VARCHAR(30) NOT NULL,
    Medidas FLOAT NOT NULL,
    Material_principal VARCHAR(30) NOT NULL,
    Color VARCHAR(30) NOT NULL,
    Herrajeria VARCHAR(30) NOT NULL,
    Ciudad VARCHAR(30) NOT NULL,
    Cantidad INT NOT NULL,
    Codigo_descuento VARCHAR(20) NOT NULL,
    confirmacion_envio TINYINT(1) NOT NULL,
    id_usuario INT NOT NULL,
    id_descuentos INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_descuentos) REFERENCES descuentos(id_descuentos)
);



view/
└── categorias/
|    ├── ProductosCloset/
|    │   ├── ProdCloset1.php
|    │   ├── ProdCloset2.php
|    │   └── ...
|    ├── ProductosCocina/
|    │   ├── ProdCocina1.php
|    │   └── ...
|    ├── ...
|    ├── closet.php
|    ├── cocinas.php
|    ├── escritorios.php
|    └── ...
└── images/
└── css/
└── categoria.php
└── index.php
|
controller/
└── categorias/
|    ├── ProductosCloset/
|    │   ├── ProdCloset1.php
|    │   ├── ProdCloset2.php
|    │   └── ...
|    ├── ProductosCocina/
|    │   ├── ProdCocina1.php
|    │   └── ...
|    ├── ...
|    ├── ClosetController.php
|    ├── CocinasController.php
|    ├── EscritoriosController.php
|    └── ...
model/
└── categorias/
|    ├── ProductosCloset/
|    │   ├── ProdCloset1.php
|    │   ├── ProdCloset2.php
|    │   └── ...
|    ├── ProductosCocina/
|    │   ├── ProdCocina1.php
|    │   └── ...
|    ├── ...
|    ├── ClosetModel.php
|    ├── CocinasModel.php
|    ├── EscritoriosModel.php
|    └── ...