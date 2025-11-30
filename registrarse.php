<?php
    include("conexion.php");
    include("CRUD.php");

    $idcurso = $_GET['idcurso'] ?? '';
    $descripcionCurso = $_GET['descripcionCurso'] ?? '';
        
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Curso</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<header>
    <div id="modulo-menu"></div>
</header>

<body>

    <div class="container">

        <!-- ENCABEZADO -->
        <div class="page-header">
            <h1>Inscribirme</h1>
            <p class="page-subtitle">Forma parte de un curso</p>
        </div>

        <div class="form-wrapper single-form">
            <form class="formulario" method="post">

                <!-- SUBTÍTULO DEL FORM -->
                <div class="form-header">
                    <h2>Ingresa tu Información</h2>
                </div>

                <!-- NOMBRE -->
                <div class="form-group">
                    <label for="nombre">
                        <span class="label-icon"></span> Nombre Completo *
                    </label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" 
                           placeholder="Ej: Juan Pérez" 
                           required>
                </div>

                <!-- EDAD -->
                <div class="form-group">
                    <label for="edad">
                        <span class="label-icon"></span> Edad del Aplicante
                    </label>
                    <input type="text" id="topico" name="topico" 
                           placeholder="Ej: 18">
                </div>

           
                   <!-- CORREO ELECTRONICO -->
                <div class="form-group">
                    <label for="correo_usuario">
                        <span class="label-icon"></span> Correo Electrónico *
                    </label>
                    <input type="text" id="correo_usuario" name="correo_usuario" 
                           placeholder="Ej: juan.perez@gmail.com" required>
                </div>


                
                   <!-- CURSO -->
                <div class="form-group">
                    <label for="curso_usuario">
                        <span class="label-icon"></span> Curso a Inscribirme
                    </label>
                    <input type="text" id="curso_usuario" name="curso_usuario"  disabled
                     value="<?php echo $descripcionCurso; ?>"  >
                </div>


                <!-- BOTONES -->
                <div class="form-actions">
                    <input type="submit" id="sign-up" name="sign-up" 
                           value="✓ Inscribirme">
                    <button type="button" onclick="location.href='index.html'">
                        ← Cancelar
                    </button>
                </div>

                <p class="form-note">* Campos obligatorios</p>

            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>
    
    <dialog id="modal"></dialog>

    <!-- SCRIPT -->
    <script src="script.js"></script>

</body>
</html>
