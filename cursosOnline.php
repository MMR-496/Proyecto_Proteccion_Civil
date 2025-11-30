<?php
    include("conexion.php");
    include("CRUD.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Online - Protección Civil UdeC</title>
    <link rel="stylesheet" href="styles.css" type="text/css">

</head>
<header>
    <div id="modulo-menu"></div>
</header>
<body>
    <div class="container">
        <div class="page-header">
            <h1> 🖥️ Cursos Online</h1>
            <p class="page-subtitle">Capacitación en protección civil desde cualquier lugar</p>
        </div>

        <section class="course-info">
            <div class="info-banner">
                <div class="banner-icon">✒️</div>
                <div class="banner-content">
                    <h3>Aprende a tu propio ritmo</h3>
                    <p>Nuestros cursos online te permiten capacitarte en protección civil con flexibilidad de horarios y desde la comodidad de tu hogar.</p>
                </div>
            </div>
        </section>

        <section class="instructors-section">
            <div class="section-header">
                <h2>👥 Cursos Online Disponibles</h2>
                <p>Profesionales certificados comprometidos con tu aprendizaje</p>
            </div>

            <div class="action-buttons">
                <button class="action-btn primary" onclick="location.href='formInstructor.php'">
                    Registrar Instructor
                </button>
                <button class="action-btn secondary" onclick="location.href='formCurso.php'">
                    Agregar Curso
                </button>
            </div>

            <div class="table-container">
                <div class="table-controls">
                    <input type="text" id="searchTable" class="search-input" 
                           placeholder="Buscar curso..." 
                           onkeyup="filtrarTabla()">
                </div>

                <table id="cursosTable" class="table">
                    <thead>
                        <tr>
                            <th>Instructor</th>
                            <th>Procedencia</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Curso</th>
                            <th>Tópico</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    <?php 
                while($row = $onlineData->fetch_assoc()){?> 
                <tr>
                    <td data-label="Instructor"><?php echo $row['nombre']; ?></td>
                    <td data-label="Procedencia"><?php echo $row['procedencia']; ?></td>
                    <td data-label="Teléfono"><?php echo $row['telefono']; ?></td>
                    <td data-label="Correo">
                        <a href="mailto:<?php echo htmlspecialchars($row['correo']); ?>" class="phone-link">
                            <?php echo $row['correo']; ?></a>
                        </a>
                    </td>             <!-- NO cambiar la clase curso-descripcion bajo ningún motivo, de otra manera no funcionará nuestro programa-->
                    <td data-label="Curso" class="curso-descripcion"><?php echo $row['descripción']; ?></td>
                    <td data-label="Tópico"><?php echo $row['topico']; ?></td>
                    <td data-label="Acción">
                        <button class="enroll-btn" onclick="enrollCourse(this, <?php echo $row['id_curso']; ?>)">
                            📝 Inscribirme
                        </button>
                    </td>
                </tr>
                

                <?php } ?> <!-- Se hace esto para asegurarse de se recorran todos los registros de la tabla -->
                

                    </tbody>
                </table>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-card">
                <h3>¿Quieres impartir un curso?</h3>
                <p>Únete como instructor y ayuda a formar una comunidad más segura</p>
                <button class="cta-button" onclick="location.href='formInstructor.php'">
                    Registrarme como Instructor
                </button>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>