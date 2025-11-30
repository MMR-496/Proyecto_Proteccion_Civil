<?php
//este es el archivo con todos los métodos php
//*****************************Registro de Instructores/Consultores*******************************/
include("conexion.php");

$exito = "
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modal');

            modal.innerHTML = `
                <h2>¡Éxito!</h2>
                <p>La operación se realizó exitosamente.</p>
                <button id='continuar'>Continuar</button>
            `;

            modal.showModal();

            document.getElementById('continuar').addEventListener('click', () => {
                window.location.href = 'index.html';
            });
        });
    </script>";

$fracaso =    "
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modal');

            modal.innerHTML = `
                <h2>Error inesperado</h2>
                <p>Ha ocurrido un error,<br> intentálo de nuevo.</p>
                <button id='continuar'>Continuar</button>
            `;

            modal.showModal();

            document.getElementById('continuar').addEventListener('click', () => {
                window.location.href = 'index.html';
            });
        });
    </script>";

    
$exitoCorreo=
"
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modal');

            modal.innerHTML = `
                <h2>¡Éxito!</h2>
                <p>Revisa tu correo.</p>
                <button id='continuar'>Continuar</button>
            `;

            modal.showModal();

            document.getElementById('continuar').addEventListener('click', () => {
                window.location.href = 'index.html';
            });
        });
    </script>";

$fracasoCorreo=
"
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modal');

            modal.innerHTML = `
                <h2>Error!</h2>
                <p>No hemos podido envíar el correo de confirmación. <br>Inténtalo de nuevo.</p>
                <button id='continuar'>Continuar</button>
            `;

            modal.showModal();

            document.getElementById('continuar').addEventListener('click', () => {
                window.location.href = 'index.html';
            });
        });
    </script>";



//llama la conexión a la base de datos
if(isset($_POST['register'])){ // si los campos efectivamente tienen datos
    if( !empty($_POST['nombre']) && 
        !empty($_POST['correo']) && 
        !empty($_POST['procedencia']) && 
        !empty($_POST['telefono']) && 
        !empty($_POST['tipo']))// con !empty se asegura que los campos no estén vacíos para proceder a la inserción
        {//tras presionar el botón de enviar/registrar
            //se capturan los datos del formulario
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $vigencia = "Activo"; //por defecto un nuevo instructor siempre será activo
            $procedencia = $_POST['procedencia'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            //se guarda la consulta en una variable
            $consulta = "INSERT INTO instructor(nombre, tipo, vigencia, procedencia, telefono, correo) VALUES ('$nombre','$tipo','$vigencia','$procedencia','$telefono','$correo')";
            //pues así será más fácil usarla como parametro para la inserción de los datos
            $resultado = mysqli_query($conexion, $consulta);
            //se ejecuta la consulta
            
           if($resultado){//si la consulta es éxitosa aparece un pop up a notificarlo, si hubo un error igualmente lo anuncia. te lleva de regreso al index
                echo $exito;
            }else{
                echo $fracaso;    
            }

    }
    
}




$readInstructor = "SELECT * FROM instructor"; //consulta para obtener todos los registros de la tabla instructor
$instructorData = mysqli_query($conexion, $readInstructor); //ejecuta la consulta


$readAll = "SELECT c.id_curso, i.*, c.descripción, c.topico, c.modalidad, c.lugar
            FROM instructor i
            JOIN curso c 
            ON i.id_instructor = c.id_instructor 
            ORDER BY c.id_instructor"; //consulta para obtener todos los registros
$allData = mysqli_query($conexion, $readAll);



$readPresencial = "SELECT c.id_curso, i.*, c.descripción, c.topico, c.modalidad, c.lugar
                   FROM instructor i
                   JOIN curso c 
                   ON i.id_instructor = c.id_instructor
                   WHERE c.modalidad = 'Presencial'
                   ORDER BY c.id_curso"; //consulta para obtener todos los registros
$presencialData = mysqli_query($conexion, $readPresencial);


$readOnline = "SELECT c.id_curso, i.*, c.descripción, c.topico, c.modalidad, c.lugar
               FROM instructor i
               JOIN curso c 
               ON i.id_instructor = c.id_instructor
               WHERE c.modalidad = 'Online'
               ORDER BY c.id_curso"; //consulta para obtener todos los registros
$onlineData = mysqli_query($conexion, $readOnline);


if(isset($_POST['register-course'])){
    $id_instructor = $_POST['id_instructor'];
    $modalidad = $_POST['modalidad'];
    $descripción = $_POST['descripción'];
    $topico = $_POST['topico'];
    $lugar = $_POST['lugar'];
    $consulta = "INSERT INTO curso(id_instructor, modalidad, descripción, topico, lugar) VALUES ('$id_instructor', '$modalidad', '$descripción', '$topico', '$lugar')";
    $resultado = mysqli_query($conexion, $consulta);
     if($resultado){//si la consulta es éxitosa aparece un pop up a notificarlo, si hubo un error igualmente lo anuncia. te lleva de regreso al index
                echo $exito;
            }else{
                echo $fracaso;    
            }
}

session_start();

if (isset($_POST['guardarCursoTemp'])) {
    $_SESSION['idcurso'] = $_POST['idcurso'];
    $_SESSION['descripcionCurso'] = $_POST['descripcionCurso'];
    exit; // muy importante (no imprimir nada)
}

if(isset($_POST['sign-up'])){
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo_usuario = $_POST['correo_usuario'];
    
    $descripcion_curso = $_GET['descripcionCurso'];
    //ENVIAR UN CORREO
    $to = $correo_usuario;
    $subject = "Inscripción a Curso de Protección Civil";
    $message = "Hola $nombre_usuario,\n\nGracias por inscribirte en nuestro curso de Protección Civil: $descripcion_curso. 
    \n\nPronto nos pondremos en contacto contigo con más detalles.
    \n\nSaludos cordiales,  
    \nProtección Civil - Universidad de Colima";
    $headers = 'From:mmunoz14@ucol.mx';
    if(mail($to, $subject, $message, $headers)){
        echo $exitoCorreo;
    } else {
        echo $fracasoCorreo;
    }
    
}



if(isset($_POST['sign-up-brigada'])){
    $nombre_usuario = $_POST['nombre_usuario_brigada'];
    $correo_usuario = $_POST['correo_usuario_brigada'];
    
    $brigada_usuario = $_GET['nombre_brigada'];
    //ENVIAR UN CORREO
    $to = $correo_usuario;
    $subject = "Inscripción a Curso de Protección Civil";
    $message = "Hola $nombre_usuario,\n\nGracias por sumarte a la brigada: $brigada_usuario. 
    \n\nPronto nos pondremos en contacto contigo con más detalles.
    \n\nSaludos cordiales,  
    \nProtección Civil - Universidad de Colima";
    $headers = 'From:mmunoz14@ucol.mx';
    if(mail($to, $subject, $message, $headers)){
        echo $exitoCorreo;
        $id_brigada = $_GET['id_brigada'];
    
    $consulta = "UPDATE brigada
                SET n_miembros = n_miembros+1
                WHERE id_brigada = '$id_brigada'";
    $resultado = mysqli_query($conexion, $consulta);
    } else {
        echo $fracasoCorreo;
    }
    
    
}





$readLider = "SELECT * FROM lider_brigada"; //consulta para obtener todos los registros de la tabla instructor
$liderData = mysqli_query($conexion, $readLider); //ejecuta la consulta


//BRIGADISTAS Y BRIGADAS

if(isset($_POST['register-brigadista'])){
    $nombre_lider = $_POST['nombre_lider'];
    $telefono_lider = $_POST['telefono_lider'];
    $correo_lider = $_POST['correo_lider'];
    $especialidad = $_POST['especialidad'];
    $consulta = "INSERT INTO lider_brigada(nombre_lider, telefono_lider, correo_lider, especialidad) VALUES ('$nombre_lider', '$telefono_lider', '$correo_lider', '$especialidad')";
    $resultado = mysqli_query($conexion, $consulta);
     if($resultado){//si la consulta es éxitosa aparece un pop up a notificarlo, si hubo un error igualmente lo anuncia. te lleva de regreso al index
                echo $exito;
            }else{
                echo $fracaso;    
            }
}

$readBrigadas =   "SELECT b.*, l.nombre_lider, l.correo_lider
                    FROM brigada b
                    JOIN lider_brigada l
                    ON b.id_lider = l.id_lider
                    ORDER BY b.id_brigada"; //consulta para obtener todos los registros
$brigadasData = mysqli_query($conexion, $readBrigadas);




if(isset($_POST['register-brigada'])){
    $id_lider = $_POST['id_lider'];
    $nombre_brigada = $_POST['nombre_brigada'];
    $color_brigada = $_POST['color_brigada'];
    $descripcion_brigada = $_POST['descripcion_brigada'];
    $ubicacion_brigada = $_POST['ubicacion_brigada'];
    $n_miembros = 0;
    date_default_timezone_set('America/Mexico_City');
    $fecha_creacion = date("Y-m-d");
    $consulta = "INSERT INTO brigada(id_lider, nombre_brigada, color_brigada, descripcion_brigada, ubicacion_brigada, n_miembros, fecha_creacion) VALUES ('$id_lider', '$nombre_brigada', '$color_brigada', '$descripcion_brigada','$ubicacion_brigada' , '$n_miembros', '$fecha_creacion')";
    $resultado = mysqli_query($conexion, $consulta);
     if($resultado){//si la consulta es éxitosa aparece un pop up a notificarlo, si hubo un error igualmente lo anuncia. te lleva de regreso al index
                echo $exito;
            }else{
                echo $fracaso;    
            }
}
?>


