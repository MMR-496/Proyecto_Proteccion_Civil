/* Módulo de navegación reutilizable */

window.addEventListener("DOMContentLoaded", function(){ // se refiere al contexto general de la página y todo su contenido (window)
      document.getElementById("modulo-menu").innerHTML = //Se añade un handler de evento para cargar el menú una vez que el DOM esté completamente cargado.
      //Se utiliza DOM en lugar de load porque load espera a que se carguen todos los recursos (imágenes, estilos, etc.),
      // mientras que DOMContentLoaded se activa tan pronto como el HTML ha sido completamente cargado y parseado sin incluir elementos de estilo o gráficos. 
      // Se obtiene el elemento con id "modulo-menu" y se inserta el HTML del menú de navegación.
      
      `                                                        
        <div id="header">
            <div class="logo-titulo">
                <img src="logo.jpg" 
                     alt="Logo Protección Civil de la Universidad de Colima" 
                     class="logo">
                <h1>Protección Civil UdeC</h1>
            </div>

            <ul class="nav">
                <li><a href="index.html">Inicio</a></li>

                <li>
                    <a href="#">Cursos</a>
                    <ul>
                        <li><a href="cursosOnline.php">Online</a></li>
                        <li><a href="cursosPresencial.php">Presencial</a></li>
                        <li><a href="instructoresConsultores.php">Directorio</a></li>
                    </ul>
                </li>

                  <li>
                    <a href="#">Brigadas</a>
                    <ul>
                        <li><a href="brigadas.php">Brigadas</a></li>
                        <li><a href="brigadasDirectorio.php">Directorio</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Información</a>
                    <ul>
                        <li><a href="Noticias.html">Noticias</a></li>
                        <li><a href="Vialidad.html">Vialidad</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Siniestros</a>
                    <ul>
                        <li><a href="Huracanes.html">Huracanes/Tormentas</a></li>
                        <li><a href="Sismos.html">Sismos/Terremotos</a></li>
                        <li><a href="Incendios.html">Incendios</a></li>
                    </ul>
                </li>

                <li><a href="Contacto.html">Contacto</a></li>
            </ul>
        </div>
    `;
    		// Resaltar la página actual en el menú
		 	highlightCurrentPage();
        }
    );

// Función para resaltar la página actual
function highlightCurrentPage() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const links = document.querySelectorAll('.nav a');
    
    links.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage) {
            link.style.backgroundColor = 'var(--amarillo-udec)';
            link.style.color = 'var(--verde-udec)';
        }
    });
}
/*QuerySelector(All) se trata de un método DOM (Document Objetc Model), que nos permite interactuar con el html desde js
Para realizar una interacción primero hay que seleccionar los elementos sobre los que queremos ejecutar una acción
Mientras que querySelector solo escoge el primer nodo coincidente, querySelectorAll escoge todas las coincidencias
y además los guarda en una nodelist, que es similar a
* */
const selectBox=document.querySelector('.select-container'); //contenedor principal
const selectOption=document.querySelector('.selected-option');//div de la opción que se vaya a escoger
const selected = document.querySelector('#selected');//el elemento en sí que se escoge, es un input donde se guarda el valor seleccionado
const filterSearch=document.querySelector('#filterSearch');//barra de búsqueda
const options = document.querySelector('.options');//donde se contienen la lista
const optionsList=document.querySelectorAll('.options li');//todas y cada una de las opciones
const hiddenInput = document.querySelector('.id_seleccionable')

selectOption.addEventListener('click', () => {//cuando se dé click en el contenedor, se ejecutará la siguiente función
		selectBox.classList.toggle('active');
	}
);




optionsList.forEach((row)=>{
		row.addEventListener('click', function(){ //no se puede usar función flecha  por que no tienen su propio this
			text = this.textContent;
			selected.value = text;
			selectBox.classList.remove('active');
		}

		)
	}

)



optionSearch.addEventListener('keyup', () =>{
	var filter, li, i, textValue;
	filter = optionSearch.value.toUpperCase();
	li=options.getElementsByTagName('li');
	for(i=0;i<li.length; i++){
		liCount = li[i];
		textValue = liCount.textContent || liCount.innerText;
		if(textValue.toUpperCase().indexOf(filter)>-1){
			li[i].style.display = '';
		}else{
			li[i].style.display = 'none';
		}

	}
}

)


optionsList.forEach(row =>{
	row.addEventListener('click', () =>{
			const id = 	row.dataset.id
			const name = row.dataset.nombre

			selected.value = name
			hiddenInput.value = id

			}
		);

	}
);




// Función para mostrar notificaciones
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        padding: 1rem 2rem;
        background: ${type === 'success' ? 'var(--verde-udec)' : '#f44336'};
        color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        z-index: 10000;
        animation: slideInRight 0.5s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.5s ease';
        setTimeout(() => notification.remove(), 500);
    }, 3000);
}


// Agregar animaciones CSS dinámicas
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideOutRight {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(100px);
        }
    }
`;
document.head.appendChild(style);
function filtrarTabla() {
    const input = document.getElementById('searchTable');
    if (!input) return;

    const filter = input.value.toUpperCase();
    const tables = document.querySelectorAll('.table'); // todas las tablas con class="table"

    tables.forEach(table => {
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            let visible = false;
            const td = tr[i].getElementsByTagName('td');

            for (let j = 0; j < td.length; j++) {
                const txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    visible = true;
                    break;
                }
            }

            tr[i].style.display = visible ? '' : 'none';
        }
    });
}

function enrollCourse(btn, idcurso) {//Va a identificar el botón de inscripción específico que fue presionado
    let row = btn.closest('tr');//Va a buscar el objeto tr más cercano al botón, incluyendose a sí mismo
    //.textContent nos permite obtener el texto de un objeto DOM, como en este caso un tr
    let descripcionCurso = row.querySelector('.curso-descripcion').textContent.trim();

    // Redirigir con parámetros GET
    window.location.href = "registrarse.php?idcurso=" + encodeURIComponent(idcurso) +
                           "&descripcionCurso=" + encodeURIComponent(descripcionCurso);
}


function unirseBrigada(btn, id_brigada) {//Va a identificar el botón de inscripción específico que fue presionado
    let row = btn.closest('tr');//Va a buscar el objeto tr más cercano al botón, incluyendose a sí mismo
    //.textContent nos permite obtener el texto de un objeto DOM, como en este caso un tr
    let nombre_brigada = row.querySelector('.nombre_brigada').textContent.trim();

    // Redirigir con parámetros GET
    window.location.href = "registrarseBrigada.php?id_brigada=" + encodeURIComponent(id_brigada) +
                           "&nombre_brigada=" + encodeURIComponent(nombre_brigada);
}





