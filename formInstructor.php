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
    <script src="script.js"></script>
</head>
<header>
    <!-- Menú de navegación que estará presente en cada página
        Se encuentra encapsulado en el script con el objetivo de
        reducir la repetición de código -->
  <div id="modulo-menu"></div>

</header>
<body>
    <h1>Registro de nuevo consultor/instructor</h1>
    <br>
    <form class="formulario" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="procedencia">Procedencia:</label><br>
        <input type="text" id="procedencia" name="procedencia" required><br><br>

        <label for="tipo">Tipo:</label><br>
        <select id="tipo" name="tipo" required >
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Instructor">Instructor</option>
            <option value="Consultor">Consultor</option>
            <option value="Instructor y Consultor">Instructor y Consultor</option>
        </select><br><br>

        <label for="correo">Correo Electrónico:</label><br>
        <input type="correo" id="correo" name="correo" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono" required><br><br>        

        <input type="submit" name="register" value="Enviar">
        <button onclick="location.href='formCurso.php'" type="button">Agregar un curso</button>

    </form>
    <dialog id="modal"></dialog>
</body>
</html>