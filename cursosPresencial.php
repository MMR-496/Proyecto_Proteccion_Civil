<?php
    include("conexion.php");
    include("CRUD.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Presenciales - Protección Civil UdeC</title>
    <link rel="stylesheet" href="styles.css" type="text/css">

</head>
<header>
    <div id="modulo-menu"></div>
</header>
<body>
    <div class="container">
        <div class="page-header">
            <h1>🏛️ Cursos Presenciales</h1>
            <p class="page-subtitle">Capacitación práctica en nuestras instalaciones</p>
        </div>

        <section class="course-info">
            <div class="info-banner">
                <div class="banner-icon">🎯</div>
                <div class="banner-content">
                    <h3>Experiencia Práctica</h3>
                    <p>Aprende de manera presencial con simulacros, ejercicios prácticos y contacto directo con instructores expertos.</p>
                </div>
            </div>
        </section>

        <section class="instructors-section">
            <div class="section-header">
                <h2>👥 Cursos Presenciales Disponibles</h2>
                <p>Profesionales certificados comprometidos con tu aprendizaje</p>
            </div>

            <div class="action-buttons">
                <button class="action-btn primary" onclick="location.href='formInstructor.php'">
                    ➕ Registrar Instructor
                </button>
                <button class="action-btn secondary" onclick="location.href='formCurso.php'">
                    ➕ Agregar Curso
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
                            <th> Instructor</th>
                            <th> Procedencia</th>
                            <th> Teléfono</th>
                            <th> Correo</th>
                            <th> Curso</th>
                            <th> Tópico</th>
                            <th> Lugar</th>
                            <th> Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($presencialData && $presencialData->num_rows > 0) {
                            while($row = $presencialData->fetch_assoc()) { 
                        ?>
                        <tr>
                            <td data-label="Instructor"><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td data-label="Procedencia"><?php echo htmlspecialchars($row['procedencia']); ?></td>
                            <td data-label="Teléfono">
                                <a href="mailto:<?php echo htmlspecialchars($row['correo']); ?>" class="phone-link">
                                    <?php echo htmlspecialchars($row['telefono']); ?>
                                </a>
                            <td data-label="Correo">
                                <a href="mailto:<?php echo htmlspecialchars($row['correo']); ?>" class="phone-link">
                                    <?php echo htmlspecialchars($row['correo']); ?>
                                </a>
                            </td>
                            <td data-label="Curso" class="curso-descripcion"><?php echo htmlspecialchars($row['descripción']); ?></td>
                            <td data-label="Tópico"><?php echo htmlspecialchars($row['topico']); ?></td>
                            <td data-label="Lugar"><?php echo htmlspecialchars($row['lugar']); ?></td>
                            <td data-label="Acción">
                                <!-- NO cambiar la clase curso-descripcion bajo ningún motivo, de otra manera no funcionará nuestro programa-->
                                 <button class="enroll-btn" onclick="enrollCourse(this, <?php echo $row['id_curso']; ?>)">
                                    📝 Inscribirme
                                </button>
                            </td>
                        </tr>
                        <?php 
                            }
                        } else {
                            echo "<tr><td colspan='8' class='no-data'>No hay cursos presenciales disponibles aún</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-card">
                <h3>¿Prefieres capacitación en línea?</h3>
                <p>También ofrecemos cursos online con flexibilidad de horarios</p>
                <button class="cta-button" onclick="location.href='cursosOnline.php'">
                    💻 Ver cursos online
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