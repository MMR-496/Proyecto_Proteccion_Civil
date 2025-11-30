
# Proyecto Protección Civil

Este es un proyecto universitario desarrollado con el objetivo de crear un sistema funcional para la Protección Civil del estado de Colima.
El sistema está diseñado para ser utilizado tanto por miembros de Protección Civil como por el público en general.

Se construyó un software sencillo que utiliza una base de datos creada en phpMyAdmin. Para su ejecución se montó un servidor local mediante XAMPP, utilizando únicamente Apache y MySQL (aunque también se configuró un servidor de correo dentro del mismo paquete).

Para la interfaz se emplearon HTML y CSS, sin usar librerías externas de estilos (por petición del profesor).
Las funcionalidades, procesamiento y peticiones se implementaron con PHP y JavaScript, nuevamente evitando frameworks o librerías externas.

Aunque no es un proyecto complejo, aún existen áreas que pueden profundizarse. Aun así, el resultado es un sistema funcional que cumple con todos los requerimientos solicitados.

## Desarrollado por

Mayte Muñoz Rosales

Keiry Yamilet Saínz Ursua

Karol Daniela Johnston Navarro

Nereyda Celestina Pérez Gónzalez (nery17pg)

## Instrucciones para Crear la Base de Datos (phpMyAdmin)
La base de datos ya está exportada en los archivos, pero si le ocasiona algún error puede crearla desde 0.

Nombre de la base de datos:    **proteccion_civil**

**Tabla: *instructor***

- id_instructor      int(11), PRIMARY KEY, AUTO_INCREMENT

- nombre             varchar(60)

- tipo               varchar(30)

- vigencia           varchar(10)

- procedencia        varchar(50)

- telefono           varchar(30)

- correo             varchar(30)


**Tabla: *curso***

- id_curso           int(11), PRIMARY KEY, AUTO_INCREMENT

- id_instructor      int(11), FOREIGN KEY

- modalidad          varchar(10)

- descripción        varchar(255)

- topico             varchar(100)

- lugar              varchar(60)


**Tabla: *lider_brigada***

- id_lider           int(11), PRIMARY KEY, AUTO_INCREMENT

- nombre_lider       varchar(60)

- telefono_lider     varchar(10)

- correo_lider       varchar(30)

- especialidad       varchar(100)


**Tabla: *brigada***

- id_brigada         int(11)

- id_lider           int(11), FOREIGN KEY

- nombre_brigada     varchar(120)

- descripcion_brigada varchar(255)

- ubicacion_brigada  varchar(100)

- n_miembros         int(4)

- fecha_creacion     date


## Notas Adicionales

Recuerde configurar el servidor de correos en XAMPP.

Cambie el puerto en conexion.php, ya que este proyecto no utiliza el puerto por defecto de MySQL.


## Demostración
**Vídeo del sistema en funcionamiento:**

https://drive.google.com/file/d/1diRrTc7AMPoyqrlgVv0wD7hfZU5otkwL/view?usp=sharing

El bug de la fecha ya está arreglado en esta versión, al igual que se cambió el texto incorrecto.

Eso sería todo lo que teníamos que decir, que tenga un excelente día :).















