<?php
    include("conexion.php");
    include("CRUD.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Instructor</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    
</head>
<header>
    <!-- Menú de navegación que estará presente en cada página
        Se encuentra encapsulado en el script con el objetivo de
        reducir la repetición de código -->
  <div id="modulo-menu"></div>

</header>
<body>
    <h1>Registro de nuevo brigadista líder</h1>
    <br>
    <form class="formulario" method="post">
        <label for="nombre_lider">Nombre:</label><br>
        <input type="text" id="nombre_lider" name="nombre_lider" required><br><br>

        <label for="correo_lider">Correo Electrónico:</label><br>
        <input type="correo" id="correo_lider" name="correo_lider" required><br><br>

        <label for="telefono_lider">Teléfono:</label><br>
        <input type="tel" id="telefono_lider" name="telefono_lider" required><br><br>        

        <label for="especialidad">Especialidad:</label><br>
        <input type="text" id="especialidad" name="especialidad" required><br><br>        
    
   

        
        <input type="submit" id="register-brigadista" name="register-brigadista" value="Enviar">
        <button onclick="location.href='formBrigada.php'" type="button">Agregar una brigada</button>

    </form>
    

    <dialog id="modal"></dialog>
    <script src="script.js"></script>
</body>
</html>