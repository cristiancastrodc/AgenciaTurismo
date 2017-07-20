/*********************** *************************/
/*          TABLA EQUIPOS        */
/*********************** *************************/
drop table if exists tequipos;
create table tequipos(
  idequipo varchar(5) primary key,
    nombre varchar(35),
    cantidad int,
    precio int
)engine Innodb default charset= utf8;

/*********************** *************************/
/*          TABLA CLIENTES         */
/*********************** *************************/
drop table if exists tclientes;
create table tclientes(
  idcliente varchar(5) primary key,
    nombres varchar(50),
    apellidos varchar(50),
    genero char(2),
    telefono int,
    email varchar(50),
    pais varchar(50),
    nropasaporte int,
    fechanacimiento varchar(10),
    estudiante char(2)
)engine Innodb default charset= utf8;

/*********************** *************************/
/*          TABLA PAQUETES         */
/*********************** *************************/
drop table if exists tpaquetes;
create table tpaquetes(
  idpaquete varchar(5) primary key,
    nombre varchar(30),
    terminos text
)engine Innodb default charset= utf8;
/*********************** *************************/
/*          TABLA GUIAS          */
/*********************** *************************/
drop table if exists tguias;
create table tguias(
  idguia varchar(5) primary key,
    fullnombre  varchar(50),
    genero char(2),
    telefono int,
    email varchar(50),
    idiomas varchar(50),
    descripcion varchar(50)
)engine Innodb default charset= utf8;

/*********************** *************************/
/*          TABLA TOUR             */
/*********************** *************************/
drop table if exists ttour;
create table ttour(
  idtour varchar(5) primary key,
    idpaquete varchar(5),
    idguia varchar(5),
  nombretour varchar(45),
    precio int,
    infogeneral text,
    iterinario text,
    incluye text,
  quellevar text,
    foto blob,
    constraint fkidguia foreign key (idguia) references tguias(idguia),
    constraint fkidpaquete foreign key (idpaquete) references tpaquetes(idpaquete)
)engine Innodb default charset= utf8;
/*********************** *************************/
/*          TABLA TRESERVADETALLE    */
/*********************** *************************/
drop table if exists treservadetalle;
create table treservadetalle(
  idreservadetalle varchar(5) primary key,
    idcliente varchar(5),
    precio int,
    constraint fkidcliente foreign key (idcliente) references tclientes(idcliente)
)engine Innodb default charset= utf8;
/*********************** *************************/
/*          TABLA RESERVAS         */
/*********************** *************************/
drop table if exists treserva;
create table treserva(
  idreserva varchar(5) primary key,
    idtour varchar(5),
    idequipo varchar(5),
    fechaViaje datetime,
    idreservadetalle varchar(5),
    constraint fkidreservadetalle foreign key (idreservadetalle) references treservadetalle(idreservadetalle),
    constraint fkidtour foreign key (idtour) references ttour(idtour),
    constraint fkidequipo foreign key (idequipo) references tequipos(idequipo)
)engine Innodb default charset= utf8;

/*********************** *************************/
/*          TABLA TPAGO          */
/*********************** *************************/
drop table if exists tpago;
create table tpago(
  idpago varchar(5) primary key,
    idreserva varchar(5),
    montototal int,
    constraint fkidreserva foreign key (idreserva) references treserva(idreserva)
)engine Innodb default charset= utf8;

/*********************** *************************/
/*      TABLA ADMINSTRADOR               */
/*********************** *************************/
drop table if exists tadministrador;
create table tadministrador(
  idadmin varchar(5) primary key,
    usuario varchar(30),
    contraseña varchar(5),
    habilitado bit,
    nombre varchar(30),
    apellidos varchar(30),
    cargo varchar(30)
)engine Innodb;

