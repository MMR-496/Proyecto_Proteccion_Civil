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
            <h1>Registro de Nuevo Curso</h1>
            <p class="page-subtitle">Crea un nuevo programa de capacitación</p>
        </div>

        <div class="form-wrapper single-form">
            <form class="formulario" method="post">

                <!-- SUBTÍTULO DEL FORM -->
                <div class="form-header">
                    <h2>Información del Curso</h2>
                </div>

                <!-- SELECT INSTRUCTOR -->
                <div class="form-group">
                    <label><span class="label-icon"></span> Instructor *</label>
                    <div class="select-container"> 
                        <div class="selected-option">
                            <input type="text" placeholder="Selecciona el instructor" id="selected" readonly>
                            <input type="hidden" class="id_seleccionable" id="id_instructor" name="id_instructor">
                        </div>
                        
                        <div class="content-container">
                            <div class="search">
                                <input type="text" id="optionSearch" placeholder="Buscar">
                            </div>

                            <ul class="options">
                                <?php foreach($instructorData as $instructor){ ?>
                                    <li data-id="<?php echo $instructor['id_instructor']; ?>" 
                                        data-nombre="<?php echo $instructor['nombre']; ?>">
                                        #<?php echo $instructor['id_instructor']; ?> - <?php echo $instructor['nombre']; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- MODALIDAD -->
                <div class="form-group">
                    <label><span class="label-icon"></span> Modalidad del Curso *</label>
                    
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="modalidadPresencial" name="modalidad" 
                                   value="Presencial" required>
                            <label for="modalidadPresencial">Presencial</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="modalidadOnline" name="modalidad" 
                                   value="Online" required>
                            <label for="modalidadOnline">Online</label>
                        </div>
                    </div>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="form-group">
                    <label for="descripcion">
                        <span class="label-icon"></span> Descripción del Curso *
                    </label>
                    <input type="text" id="descripcion" name="descripción" 
                           placeholder="Ej: Capacitación en seguridad y prevención de desastres" 
                           required>
                </div>

                <!-- TÓPICO -->
                <div class="form-group">
                    <label for="topico">
                        <span class="label-icon"></span> Tópico del Curso *
                    </label>
                    <input type="text" id="topico" name="topico" 
                           placeholder="Ej: Protección Civil Básica" required>
                </div>

                <!-- LUGAR -->
                <div class="form-group">
                    <label for="lugar">
                        <span class="label-icon"></span> Lugar del Curso *
                    </label>
                    <input type="text" id="lugar" name="lugar" 
                           placeholder="Ej: Edificio de Protección Civil, Aula 101" required>
                </div>

                <!-- BOTONES -->
                <div class="form-actions">
                    <input type="submit" id="register-course" name="register-course" 
                           value="✓ Registrar Curso">
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
