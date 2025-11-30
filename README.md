# Proyecto_Proteccion_Civil
Se trata de un proyecto universitario en el que se requirió programar un sistema para la Protección Civil de nuestro estado, Colima.

Se solicitó que fuera una página usable tanto para los miembros de la Protección Civil como para el público en general.

Se diseñó y desarrolló un software bastante sencillo, el cual utiliza una base de datos creada en phpMyAdmin de una forma fácil y gráfica.
Se montó un servidor local usando xampp, para el proyecto se necesitó únicamente Apache y MySQL (aunque también se configuró un servidor para mail en el mismo xampp)

Por supuesto, al tratarse de una página web se utilizaron HTML y CSS para la interfaz, es destacable el como no se utilizó ninguna librería de estilos, todo fue hecho con CSS puro (por petición del profesor).

Para las peticiones, procesamiento, y funcionalidades en general, se emplearon PHP y JavaScript, nuevamente se evitó el uso de librerías externas o frameworks

En general no es un proyecto muy complicado y aún hay aspectos que son "rabbit holes", pero el resultado final es un sistema funcional que cumple con los requerimientos y restricciones solicitados.

**Desarrollado por:**
    Mayte Muñoz Rosales
    Keiry Yamilet Saínz Ursua
    Karol Daniela Johnston Navarro
    Nereyda Celestina Pérez Gónzalez


Cómo crear la base de datos (PHPMyAdmin)

Nombre de la base de datos: 
*** proteccion_civil ***

Crear tabla "instructor" con los siguientes campos:
- id_instructor (int, 11, llave primaria, auto incremento)
- nombre (varchar, 60)
- tipo (varchar, 30)
- vigencia (varchar, 10)
- procedencia (varchar, 50)
- telefono (varchar, 30)
- correo (varchar, 30)  

Crear tabla "curso" con los siguientes campos:
- id_curso (int, 11, llave primaria, auto incremento)
- id_instructor (int, 11, llave foránea)
- modalidad (varchar, 10)
- descripción (varchar, 255)
- topico (varchar, 100)
- lugar (varchar, 60)

Crear tabla "lider_brigada"
- id_lider (int, 11, llave primaria, auto incremento)
- nombre_lider (varchar, 60)
- telefono_lider (varchar,10)
- correo_lider (varchar, 30)
- especialidad (varchar,100)

Crear tabla "brigada"
- id_brigada (int, 11)
- id_lider (int, 11, llave foránea)
- nombre_brigada (varchar, 120)
- descripcion_brigada (varchar, 255)
- ubicacion_brigada (varchar, 100)
- n_miembros (int, 4)
- fecha_creacion (date)

Recuerde configurar el servidor de correos en xampp y cambiar el puerto en el archivo conexion.php ya que no utiliza el puerto por default de MySQL

Que tenga buen día :)
