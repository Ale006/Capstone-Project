CREATE DATABASE bd_natural_centric;
use bd_natural_centric;
show tables;

/*Tabla Areas*/
CREATE TABLE IF NOT EXISTS areas(
	id int not null auto_increment primary key,
    	nombre varchar(255)
)ENGINE=INNODB;

/*Tabla Tipo_Pension*/
CREATE TABLE IF NOT EXISTS tipo_pensiones(
	id int not null auto_increment primary key,
    	nombre_tp varchar(255)
)ENGINE=INNODB;

/*Tabla Cargos*/
CREATE TABLE IF NOT EXISTS cargos(
	id int not null auto_increment primary key,
    	nombre_cargo varchar(255)
)ENGINE=INNODB;

/*Tabla Bancos*/
CREATE TABLE IF NOT EXISTS bancos(
	id int not null auto_increment primary key,
    	nombre_banco varchar(255)
)ENGINE=INNODB;

/*Tabla Tipo de Documento*/
CREATE TABLE IF NOT EXISTS tipo_documento(
	id int not null auto_increment primary key,
    	nombre_doc varchar(255)
)ENGINE=INNODB;

/*Tabla Genero*/
CREATE TABLE IF NOT EXISTS genero(
	id int not null auto_increment primary key,
    	nombre_genero varchar(255)
)ENGINE=INNODB;

/*Tabla Nacionalidad*/
CREATE TABLE IF NOT EXISTS nacionalidad(
	id int not null auto_increment primary key,
    	nombre_nacionalidad varchar(255)
)ENGINE=INNODB;

/*Tabla Estado Civil*/
CREATE TABLE IF NOT EXISTS estado_civil(
	id int not null auto_increment primary key,
    	nombre_estado varchar(255)
)ENGINE=INNODB;

/*Tabla Estado del Personal*/
CREATE TABLE IF NOT EXISTS estado_personal(
	id int not null auto_increment primary key,
    	nombre_estado varchar(255)
)ENGINE=INNODB;

/*Tabla Pension*/
CREATE TABLE IF NOT EXISTS pension(
	id int not null auto_increment primary key,
	nombre_pension varchar(255),
    	fk_tipo_pension int ,
    	constraint fk_tipo_pension_id foreign key(fk_tipo_pension)references tipo_pensiones(id)
)ENGINE=INNODB;

/*Tabla Personal*/
CREATE TABLE IF NOT EXISTS personal(
	id int not null auto_increment primary key,
	nombre varchar(255),
	apellido varchar(255),
	num_documento varchar(20),
	num_telefono varchar(9),
	num_telf_emergencia varchar(9),
	direccion varchar(255),
	cant_hijos int,
	fk_tipo_doc int ,
    	fk_genero int ,
	fk_nacionalidad int ,
	fk_estado_civil int ,
	fk_estado_personal int ,
    	constraint fk_tipo_doc_id foreign key(fk_tipo_doc)references tipo_documento(id),
    	constraint fk_genero_id foreign key(fk_genero) references genero(id),
	constraint fk_nacionalidad_id foreign key(fk_nacionalidad) references nacionalidad(id),
	constraint fk_estado_civil_id foreign key(fk_estado_civil) references estado_civil(id),
	constraint fk_estado_personal_id foreign key(fk_estado_personal) references estado_personal(id)
)ENGINE=INNODB;

/*Tabla Planes de Pago*/
CREATE TABLE IF NOT EXISTS planes_pago(
	id int not null auto_increment primary key,
	hora_entrada time,
	hora_salida time,
	sueldo_bruto double,
	monto_seguro double,
	asig_familiar double,
	num_cuenta_banco varchar(30),
	fk_area int ,
    	fk_cargo int ,
	fk_banco int ,
	fk_pension int ,
	fk_personal int ,
    	constraint fk_area_id foreign key(fk_area)references areas(id),
    	constraint fk_cargo_id foreign key(fk_cargo) references cargos(id),
	constraint fk_banco_id foreign key(fk_banco) references bancos(id),
	constraint fk_pension_id foreign key(fk_pension) references pension(id),
	constraint fk_personal_id foreign key(fk_personal) references personal(id)
)ENGINE=INNODB;


/*Tabla Asistencia*/
CREATE TABLE IF NOT EXISTS asistencias(
	id int not null auto_increment primary key,
	fecha_entrada date,
	hora_entrada time,
	fecha_salida date,
	hora_salida time,
	fk_personal_a int ,
	constraint fk_personal_a_id foreign key(fk_personal_a) references personal(id)
)ENGINE=INNODB;

/*Tabla usuarios*/
CREATE TABLE IF NOT EXISTS usuarios(
	id int not null auto_increment primary key,
	username varchar(30),
	password varchar(30),
	rol varchar(30),
	fecha_alta date,
	fecha_baja date,
	status varchar(30),
	fk_personal_u int ,
	constraint fk_personal_u_id foreign key(fk_personal_u) references personal(id)
)ENGINE=INNODB;





