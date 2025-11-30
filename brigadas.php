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
            <h1> 🔰 Brigadas</h1>
            <p class="page-subtitle">Protege, apoya, actúa. Súmate ya al equipo.</p>

        <section class="course-info">
            <div class="info-banner">
                <div class="banner-icon">❤️‍🩹</div>
                <div class="banner-content">
                    <h3>Marca la diferencia en tu comunidad.</h3>
                    <p>Formar parte de Protección Civil te permite aprender, ayudar y actuar en momentos clave, desarrollando habilidades que realmente pueden salvar vidas. Súmate al equipo y contribuye a mantener seguros a quienes te rodean.</p>
                </div>
            </div>
        </section>

        <section class="instructors-section">
            <div class="section-header">
                <h2>👷‍♂️👷‍♀️ Conviértete en Líder de Brigada</h2>
                <p>Guía, organiza y protege a tu comunidad desde un rol fundamental dentro de Protección Civil.</p>
            </div>

            <div class="action-buttons">
                <button class="action-btn primary" onclick="location.href='formBrigadista.php'">
                    Registrar Brigadista
                </button>
                <button class="action-btn secondary" onclick="location.href='formBrigada.php'">
                    Agregar Brigada
                </button>
            </div>

            <div class="table-container">
                <div class="table-controls">
                    <input type="text" id="searchTable" class="search-input" 
                           placeholder="Buscar brigada..." 
                           onkeyup="filtrarTabla()">
                </div>

                <table id="brigadasTable" class="table">
                    <thead>
                        <tr>
                            <th>Líder</th>
                            <th>Correo</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Color</th>
                            <th>Ubicación</th>
                            <th>Miembros</th>
                            <th>Creación</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    <?php 
                while($row = $brigadasData->fetch_assoc()){?> 
                <tr>
                    <td data-label="Líder"><?php echo $row['nombre_lider']; ?></td>
                      <td data-label="Correo">
                        <a href="mailto:<?php echo htmlspecialchars($row['correo_lider']); ?>" class="phone-link">
                            <?php echo $row['correo_lider']; ?></a>
                        </a>
                    </td>  
                             <!-- NO cambiar la clase curso-descripcion bajo ningún motivo, de otra manera no funcionará nuestro programa-->
                    <td data-label="Curso" class="nombre_brigada"><?php echo $row['nombre_brigada']; ?></td>
                    
                    <td data-label="Descripcion"><?php echo $row['descripcion_brigada']; ?></td>
                    <td data-label="Color_Brigada"><?php echo $row['color_brigada']; ?></td>
                    <td data-label="Ubicacion_Brigada"><?php echo $row['ubicacion_brigada']; ?></td>
                    <td data-label="Miembros_Brigada"><?php echo $row['n_miembros']; ?></td>
                    <td data-label="Fecha_Brigada"><?php echo $row['fecha_creacion']; ?></td>
                    <td data-label="Acción">
                        <button class="enroll-btn" onclick="unirseBrigada(this, <?php echo $row['id_brigada']; ?>)">
                            📝 Unirme
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
                <h3>¿Quieres ser Instructor?</h3>
                <p>Únete como instructor y ayuda a formar una comunidad más segura</p>
                <button class="cta-button" onclick="location.href='formInstructor.php'">
                    Registrarme como Instructor
                </button>
            </div>
        </section>
    </div>

    <script src="script.js"></script>
    <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>
</body>
</html>