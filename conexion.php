
<?php
/*se hace una nueva instancia a la clase PDO que sirve para conectarse a la base de datos 
 y ahí se encuentran todos los métodos o peticiones para realizar consultas a la base de datos
 Decidí usar Mysqli sobre PDO debido a que no se planean migraciones futuras a otras bases de datos
 y porque Mysqli ofrece un mejor rendimiento en este caso*/
$conexion = mysqli_connect("localhost","root","","proteccion_civil", 3307); //el puerto por defecto es 3306, pero por conflictos en las máquinas de los desarrolladores se cambió por otro
/*le especifico el puerto ya que el por default ya está en uso por oracle
configuré este nuevo puerto para que xampp haga uso de él y no cause conflicto

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


-----------------------------------------
***Desarrollado por:***
    Mayte Muñoz Rosales
    Keiry Yamilet Saínz Ursua
    Karol Daniela Johnston Navarro
    Nereyda Celestina Pérez Gónzalez
*/