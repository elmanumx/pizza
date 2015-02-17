
CREATE TABLE datos_generales
(
	id_datos_generales   INTEGER AUTO_INCREMENT,
	nombre_datos_generales VARCHAR(100) NULL,
	direccion_datos_generales VARCHAR(200) NULL,
	correo_datos_generales VARCHAR(100) NULL,
	tel_datos_generales  VARCHAR(50) NULL,
	imagen_datos_generales VARCHAR(20) NULL,
	PRIMARY KEY (id_datos_generales)
)AUTO_INCREMENT = 0;



CREATE TABLE cargo_empleado
(
	id_cargo_empleado    INTEGER AUTO_INCREMENT,
	status_cargo_empleado VARCHAR(20) NULL,
	nombre_cargo_empleado VARCHAR(100) NULL,
	PRIMARY KEY (id_cargo_empleado)
)AUTO_INCREMENT = 0;



CREATE TABLE empleados
(
	id_empleado          INTEGER AUTO_INCREMENT,
	nombre_empleado      VARCHAR(50) NULL,
	apellidop_empleado   VARCHAR(50) NULL,
	apellidom_empleado   VARCHAR(50) NULL,
	direccion_empleado   VARCHAR(50) NULL,
	rfc_empleado         VARCHAR(18) NULL,
	tel_empleado         VARCHAR(50) NULL,
	status_empleado      VARCHAR(50) NULL,
	fecha_nac_empleado   DATE NULL,
	id_cargo_empleado    INTEGER NULL,
	PRIMARY KEY (id_empleado),
	FOREIGN KEY R_33 (id_cargo_empleado) REFERENCES cargo_empleado (id_cargo_empleado)
)AUTO_INCREMENT = 0;



CREATE TABLE usuario
(
	id_usuario           INTEGER AUTO_INCREMENT,
	nombre_usuario       VARCHAR(50) NULL,
	pass_usuario         VARCHAR(50) NULL,
	status_usuario       VARCHAR(50) NULL,
	id_empleado          INTEGER NULL,
	PRIMARY KEY (id_usuario),
	FOREIGN KEY R_5 (id_empleado) REFERENCES empleados (id_empleado)
)AUTO_INCREMENT = 0;



CREATE TABLE mesa
(
	id_mesa              INTEGER AUTO_INCREMENT,
	numero_mesa          VARCHAR(20) NULL,
	descripcion_mesa     VARCHAR(200) NULL,
	status_mesa          VARCHAR(20) NULL,
	temporal_mesa        VARCHAR(20) NULL,
	PRIMARY KEY (id_mesa)
)AUTO_INCREMENT = 0;



CREATE TABLE venta
(
	id_venta             INTEGER AUTO_INCREMENT,
	monto_venta          FLOAT NULL,
	fecha_venta          DATE NULL,
	hora_venta           TIME NULL,
	status_venta         VARCHAR(50) NULL,
	id_usuario           INTEGER NULL,
	id_empleado          INTEGER NULL,
	id_mesa              INTEGER NULL,
	id_cajero_venta      VARCHAR(20) NULL,
	PRIMARY KEY (id_venta),
	FOREIGN KEY R_28 (id_usuario) REFERENCES usuario (id_usuario),
	FOREIGN KEY R_29 (id_empleado) REFERENCES empleados (id_empleado),
	FOREIGN KEY R_30 (id_mesa) REFERENCES mesa (id_mesa)
)AUTO_INCREMENT = 0;



CREATE TABLE salida
(
	id_salida            INTEGER AUTO_INCREMENT,
	cantidad_salida      FLOAT NULL,
	descripcion_salida   VARCHAR(200) NULL,
	fecha_salida         DATE NULL,
	PRIMARY KEY (id_salida)
)AUTO_INCREMENT = 0;



CREATE TABLE entrada
(
	id_entrada           INTEGER AUTO_INCREMENT,
	cantidad_entrada     FLOAT NULL,
	descripcion_entrada  VARCHAR(200) NULL,
	fecha_entrada        DATE NULL,
	PRIMARY KEY (id_entrada)
)AUTO_INCREMENT = 0;



CREATE TABLE corte_caja
(
	id_corte_caja        INTEGER AUTO_INCREMENT,
	fecha_corte_caja     DATE NULL,
	incio_corte_caja     FLOAT NULL,
	id_venta             INTEGER NULL,
	id_salida            INTEGER NULL,
	id_entrada           INTEGER NULL,
	PRIMARY KEY (id_corte_caja),
	FOREIGN KEY R_23 (id_venta) REFERENCES venta (id_venta),
	FOREIGN KEY R_25 (id_salida) REFERENCES salida (id_salida),
	FOREIGN KEY R_26 (id_entrada) REFERENCES entrada (id_entrada)
)AUTO_INCREMENT = 0;



CREATE TABLE producto
(
	id_producto          INTEGER AUTO_INCREMENT,
	nombre_producto      VARCHAR(50) NULL,
	precio_compra_producto FLOAT NULL,
	descripcion_producto VARCHAR(50) NULL,
	precio_venta_producto FLOAT NULL,
	existencia_actual_producto INTEGER NULL,
	existencia_min_producto INTEGER NULL,
	img_producto         VARCHAR(100) NULL,
	status_producto      VARCHAR(20) NULL,
	PRIMARY KEY (id_producto)
)AUTO_INCREMENT = 0;



CREATE TABLE pizza
(
	id_pizza             INTEGER AUTO_INCREMENT,
	nombre_pizza         VARCHAR(100) NULL,
	descripcion_pizza    CHAR(18) NULL,
	img_pizza            VARCHAR(100) NULL,
	PRIMARY KEY (id_pizza)
)AUTO_INCREMENT = 0;



CREATE TABLE tamano
(
	id_tamano            INTEGER AUTO_INCREMENT,
	nombre_tamano        VARCHAR(100) NULL,
	status_tamano        VARCHAR(20) NULL,
	PRIMARY KEY (id_tamano)
)AUTO_INCREMENT = 0;



CREATE TABLE lista_pizza
(
	id_lista_pizza       INTEGER AUTO_INCREMENT,
	precio_lista_pizza   FLOAT NULL,
	id_pizza             INTEGER NULL,
	id_tamano            INTEGER NULL,
	PRIMARY KEY (id_lista_pizza),
	FOREIGN KEY R_17 (id_pizza) REFERENCES pizza (id_pizza),
	FOREIGN KEY R_18 (id_tamano) REFERENCES tamano (id_tamano)
)AUTO_INCREMENT = 0;



CREATE TABLE lista_venta
(
	id_lista_venta       INTEGER AUTO_INCREMENT,
	cantidad_lista_venta INTEGER NULL,
	monto_lista_venta    FLOAT NULL,
	id_producto          INTEGER NULL,
	id_venta             INTEGER NULL,
	id_lista_pizza       INTEGER NULL,
	nombre_lista_venta   VARCHAR(200) NULL,
	PRIMARY KEY (id_lista_venta),
	FOREIGN KEY R_20 (id_producto) REFERENCES producto (id_producto),
	FOREIGN KEY R_21 (id_venta) REFERENCES venta (id_venta),
	FOREIGN KEY R_22 (id_lista_pizza) REFERENCES lista_pizza (id_lista_pizza)
)AUTO_INCREMENT = 0;



CREATE TABLE categoria_ingrediente
(
	id_categoria_ingrediente INTEGER AUTO_INCREMENT,
	nombre_categoria_ingrediente VARCHAR(100) NULL,
	status_categoria_ingrediente VARCHAR(20) NULL,
	PRIMARY KEY (id_categoria_ingrediente)
)AUTO_INCREMENT = 0;



CREATE TABLE medida_ingrediente
(
	id_medida_ingrediente INTEGER AUTO_INCREMENT,
	nombre_medida_ingrediente VARCHAR(20) NULL,
	status_medida_ingrediente VARCHAR(20) NULL,
	PRIMARY KEY (id_medida_ingrediente)
)AUTO_INCREMENT = 0;



CREATE TABLE ingrediente
(
	id_ingrediente       INTEGER AUTO_INCREMENT,
	nombre_ingrediente   VARCHAR(20) NULL,
	id_categoria_ingrediente INTEGER NULL,
	cantidad_actual_ingrediente VARCHAR(20) NULL,
	cantidad_minima_ingrediente VARCHAR(20) NULL,
	id_medida_ingrediente INTEGER NULL,
	PRIMARY KEY (id_ingrediente),
	FOREIGN KEY R_31 (id_categoria_ingrediente) REFERENCES categoria_ingrediente (id_categoria_ingrediente),
	FOREIGN KEY R_34 (id_medida_ingrediente) REFERENCES medida_ingrediente (id_medida_ingrediente)
)AUTO_INCREMENT = 0;



CREATE TABLE lista_ingrediente
(
	id_ingrediente       INTEGER NULL,
	id_lista_ingrediente INTEGER AUTO_INCREMENT,
	id_lista_pizza       INTEGER NULL,
	porcion_lista_ingrediente FLOAT NULL,
	PRIMARY KEY (id_lista_ingrediente),
	FOREIGN KEY R_8 (id_ingrediente) REFERENCES ingrediente (id_ingrediente),
	FOREIGN KEY R_19 (id_lista_pizza) REFERENCES lista_pizza (id_lista_pizza)
)AUTO_INCREMENT = 0;



CREATE TABLE categoria_pagina
(
	id_categoria_pagina  INTEGER AUTO_INCREMENT,
	nombre_categoria_pagina VARCHAR(50) NULL,
	status_categoria_pagina VARCHAR(20) NULL,
	icono_categoria_pagina VARCHAR(50) NULL,
	PRIMARY KEY (id_categoria_pagina)
)AUTO_INCREMENT = 0;



CREATE TABLE pagina
(
	id_pagina            INTEGER AUTO_INCREMENT,
	nombre_pagina        VARCHAR(50) NULL,
	url_pagina           VARCHAR(100) NULL,
	status_pagina        VARCHAR(5) NULL,
	id_categoria_pagina  INTEGER NULL,
	icono_pagina         VARCHAR(50) NULL,
	PRIMARY KEY (id_pagina),
	FOREIGN KEY R_32 (id_categoria_pagina) REFERENCES categoria_pagina (id_categoria_pagina)
)AUTO_INCREMENT = 0;



CREATE TABLE privilegio
(
	id_privilegio        INTEGER AUTO_INCREMENT,
	id_pagina            INTEGER NULL,
	id_usuario           INTEGER NULL,
	status_privilegio    boolean NULL,
	id_empleado          INTEGER NULL,
	guardar_privilegio   VARCHAR(20) NULL,
	modificar_privilegio VARCHAR(20) NULL,
	baja_privilegio      VARCHAR(20) NULL,
	PRIMARY KEY (id_privilegio),
	FOREIGN KEY R_2 (id_pagina) REFERENCES pagina (id_pagina),
	FOREIGN KEY R_3 (id_usuario) REFERENCES usuario (id_usuario),
	FOREIGN KEY R_36 (id_empleado) REFERENCES empleados (id_empleado)
)AUTO_INCREMENT = 0;


