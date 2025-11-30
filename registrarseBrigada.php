<?php
    include("conexion.php");
    include("CRUD.php");

    $id_brigada = $_GET['id_brigada'] ?? '';
    $nombre_brigada = $_GET['nombre_brigada'] ?? '';
        
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
            <p class="page-subtitle">Forma parte de una brigada</p>
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
                    <input type="text" id="nombre_usuario_brigada" name="nombre_usuario_brigada" 
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
                    <input type="text" id="correo_usuario_brigada" name="correo_usuario_brigada" 
                           placeholder="Ej: juan.perez@gmail.com" required>
                </div>


                
                   <!-- CURSO -->
                <div class="form-group">
                    <label for="brigada_usuario">
                        <span class="label-icon"></span> Brigada a unirme
                    </label>
                    <input type="text" id="brigada_usuario" name="brigada_usuario"  disabled
                     value="<?php echo $nombre_brigada; ?>"  >
                </div>


                <!-- BOTONES -->
                <div class="form-actions">
                    <input type="submit" id="sign-up-brigada" name="sign-up-brigada" 
                           value="✓ Unirme">
                    <button type="button" onclick="location.href='brigadas.php'">
                        ← Cancelar
                    </button>
                </div>

                <p class="form-note">* Campos obligatorios</p>

            </form>
        </div>
    </div>

    
    <dialog id="modal"></dialog>
    
    <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>

    
    <!-- SCRIPT -->
    <script src="script.js"></script>

</body>
</html>
