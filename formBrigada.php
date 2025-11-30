<?php
    include("conexion.php");
    include("CRUD.php")
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
            <h1>Registro de Nueva Brigada</h1>
            <p class="page-subtitle">Crea una nueva brigada de emergencias</p>
        </div>

        <div class="form-wrapper single-form">
            <form class="formulario" method="post">

                <!-- SUBTÍTULO DEL FORM -->
                <div class="form-header">
                    <h2>Información de Brigada</h2>
                </div>

                <!-- SELECT LIDER -->
                <div class="form-group">
                    <label><span class="label-icon"></span> Líder *</label>
                    <div class="select-container"> 
                        <div class="selected-option">
                            <input type="text" placeholder="Selecciona el brigadista líder" id="selected" readonly>
                            <input type="hidden" class="id_seleccionable" id="id_lider" name="id_lider">
                        </div>
                        
                        <div class="content-container">
                            <div class="search">
                                <input type="text" id="optionSearch" placeholder="Buscar">
                            </div>

                            <ul class="options">
                                <?php foreach($liderData as $lider){ ?>
                                    <li data-id="<?php echo $lider['id_lider']; ?>" 
                                        data-nombre="<?php echo $lider['nombre_lider']; ?>">
                                        #<?php echo $lider['id_lider']; ?> - <?php echo $lider['nombre_lider']; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- NOMBRE -->
                <div class="form-group">
                    <label for="nombre_brigada">
                        <span class="label-icon"></span> Nombre de la Brigada *
                    </label>
                    <input type="text" id="nombre_brigada" name="nombre_brigada" 
                           placeholder="Ej: Brigada de Primeros Auxilios" 
                           required>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="form-group">
                    <label for="descripcion_brigada">
                        <span class="label-icon"></span> Descripción de la Brigada *
                    </label>
                    <input type="text" id="descripcion_brigada" name="descripcion_brigada" 
                           placeholder="Ej: Encargada de apoyar en situaciones de emergencia y coordinar acciones de respuesta" 
                           required>
                </div>

                 <!-- COLOR -->
                <div class="form-group">
                    <label for="color_brigada">
                        <span class="label-icon"></span> Color Representativo *
                    </label>
                    <input type="text" id="color_brigada" name="color_brigada" 
                           placeholder="Ej: azul" required>
                </div>
            

                <!-- LUGAR -->
                <div class="form-group">
                    <label for="ubicacion_brigada">
                        <span class="label-icon"></span> Ubicación de la Brigada *
                    </label>
                    <input type="text" id="ubicacion_brigada" name="ubicacion_brigada" 
                           placeholder="Ej: Edificio de Protección Civil, Aula 101" required>
                </div>

                <!-- BOTONES -->
                <div class="form-actions">
                    <input type="submit" id="register-brigada" name="register-brigada" 
                           value="✓ Registrar Brigada">
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
