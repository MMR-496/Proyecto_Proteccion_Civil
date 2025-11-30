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
    
    <title>Líderes de Brigadas</title>
</head>
<header>
    <div id="modulo-menu"></div>
</header>



<body>
    <div class="container">
        <div class="page-header">
            <h1>Directorio de Líderes de Brigadas</h1>
            <p class="page-subtitle">Dirige y coordina al equipo</p>
        </div>

        <section class="instructors-section">
            <div class="action-buttons">
                <button class="action-btn primary" onclick="location.href='formBrigadista.php'">
                    Registrar Nuevo Brigadista
                </button>
                <button class="action-btn secondary" onclick="location.href='formBrigada.php'">
                    Agregar Brigada
                </button>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-card">
                <h3>¿Quieres unirte a nuestro equipo?</h3>
                <p>Forma parte de Protección Civil</p>
                <button class="cta-button" onclick="location.href='formBrigadista.php'">
                    Registrarme Ahora
                </button>
            </div>
        </section>
    </div>
     
    
    
    
    <div class="table-container">
            <div class="table-controls">
                    <input type="text" id="searchTable" class="search-input" 
                           placeholder="Buscar líder..." 
                           onkeyup="filtrarTablaBrigadas()">
            </div>

      

      <table id="brigadasTable" class="table">
            <thead>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Especialidad</th>
            </thead>
            <tbody>
                <?php 
                while($row = $liderData->fetch_assoc()){?>
                <tr>
                    <td data-label="Nombre_lider">
                       <span class="instructor-name"> <?php echo $row['nombre_lider']; ?></span>
                    </td>

                    <td data-label="Telefono_lider">
                        <a href="tel:<?php echo htmlspecialchars($row['telefono_lider']); ?>" 
                        class="phone-link">
                                <?php echo $row['telefono_lider']; ?>
                         </a>
                    </td>

                      <td data-label="Correo_lider">
                            <a href="mailto:<?php echo htmlspecialchars($row['correo_lider']); ?>" 
                                class="phone-link">
                                <?php echo htmlspecialchars($row['correo_lider']); ?>
                            </a>
                    </td>

                    <td data-label="Especialidad">
                       <span class="instructor-name"> <?php echo $row['especialidad']; ?></span>
                    </td>

                </tr>
                   
          
                

                <?php } ?> <!-- Se hace esto para asegurarse de se recorran todos los registros de la tabla -->
                

            </tbody>
        </table>
        
       



     <footer class="footer">
        <p>&copy; 2025 Protección Civil - Universidad de Colima</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>