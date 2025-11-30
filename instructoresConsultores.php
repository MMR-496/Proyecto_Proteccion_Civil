<?php
    include("conexion.php");
    include("CRUD.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="script.js"></script>
    <title>Instructores y Consultores</title>
</head>
<header>
    <div id="modulo-menu"></div>
</header>



<body>
    <div class="container">
        <div class="page-header">
            <h1>Directorio de Instructores y Consultores</h1>
            <p class="page-subtitle">Profesionales certificados en Protección Civil</p>
        </div>

        <section class="instructors-section">
            <div class="action-buttons">
                <button class="action-btn primary" onclick="location.href='formInstructor.php'">
                    Registrar Nuevo Instructor
                </button>
                <button class="action-btn secondary" onclick="location.href='formCurso.php'">
                    Agregar Curso
                </button>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-card">
                <h3>¿Quieres unirte a nuestro equipo?</h3>
                <p>Conviértete en instructor o consultor de Protección Civil</p>
                <button class="cta-button" onclick="location.href='formInstructor.php'">
                    Registrarme Ahora
                </button>
            </div>
        </section>
    </div>


    
    
    
    <div class="table-container">
            <div class="table-controls">
                    <input type="text" id="searchTable" class="search-input" 
                           placeholder="Buscar instructor..." 
                           onkeyup="filtrarTabla()">
            </div>

      

      <table id="instructoresTable">
            <thead>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Vigencia</th>
                <th>Procedencia</th>
                <th>Telefono</th>
                <th>Correo</th>
            </thead>
            <tbody>
                <?php 
                while($row = $instructorData->fetch_assoc()){?>
                <tr>
                    <td data-label="Nombre">
                       <span class="instructor-name"> <?php echo $row['nombre']; ?></span>
                    </td>

                    <td data-label="Tipo">
                        <span class="badge badge-tipo"><?php echo $row['tipo']; ?></span>
                    </td>
                    
                    <td data-label="Vigencia">
                        <span class="badge badge-<?php echo strtolower($row['vigencia']); ?>">
                            <?php echo $row['vigencia']; ?>
                        </span>
                    </td>

                    <td data-label="Procedencia">
                        <?php echo $row['procedencia']; ?>
                    </td>

                    <td data-label="Teléfono">
                        <a href="tel:<?php echo htmlspecialchars($row['telefono']); ?>" 
                                   class="phone-link">
                            <?php echo $row['telefono']; ?>
                         </a>
                    </td>

                      <td data-label="Correo">
                                <a href="mailto:<?php echo htmlspecialchars($row['correo']); ?>" 
                                   class="phone-link">
                                    <?php echo htmlspecialchars($row['correo']); ?>
                                </a>
                            </td>
                </tr>
                

                <?php } ?> <!-- Se hace esto para asegurarse de se recorran todos los registros de la tabla -->
                

            </tbody>
        </table>

    </div>

     <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>

     <script>
        function filtrarTabla() {
            const input = document.getElementById('searchTable');
            const filter = input.value.toUpperCase();
            const table = document.getElementById('instructoresTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                let visible = false;
                const td = tr[i].getElementsByTagName('td');
                
                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        const txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            visible = true;
                            break;
                        }
                    }
                }
                
                tr[i].style.display = visible ? '' : 'none';
            }
        }
    </script>
</body>
</html>