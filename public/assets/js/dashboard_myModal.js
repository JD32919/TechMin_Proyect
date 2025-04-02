// Función para abrir el modal y cargar la vista del formulario
function openModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'block';

    // Cargar la vista de stock.create con AJAX
    fetch('/stock/create')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar la vista');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('modal-body').innerHTML = data;
            inicializarCreateJS(); // Llamar a la función que activa el JS de create
        })
        .catch(error => {
            console.error('Error al cargar el formulario:', error);
            document.getElementById('modal-body').innerHTML = '<p>Error al cargar el formulario. Inténtalo nuevamente.</p>';
        });
}

// Función para cerrar el modal
function closeModal() {
    var modalContent = document.querySelector('.modal-content');
    modalContent.style.animation = 'slideOutRight 0.3s ease-out';

    setTimeout(function() {
        document.getElementById('myModal').style.display = 'none';
        modalContent.style.animation = 'slideInRight 0.3s ease-out'; // Restablecer animación
    }, 300);
}

// Cierra el modal si el usuario hace clic fuera del contenido
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target === modal) {
        closeModal();
    }
}

// Función para inicializar el JavaScript de la vista create dentro del modal
function inicializarCreateJS() {
    // Esperar un breve momento para asegurarnos de que el DOM del modal se haya cargado
    setTimeout(function() {
        var editorContainer = document.getElementById("editor-container");
        if (editorContainer) {
            // Inicializar Quill.js
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                placeholder: 'Escribe la descripción aquí...',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'strike'], // Negrita, cursiva, tachado
                        [{ 'header': 1 }, { 'header': 2 }, { 'header': 3 }], // H1, H2, H3
                        ['blockquote', 'code-block'], // Código y bloque de edición
                        ['link'] // Enlace
                    ]
                }
            });

            // Sincroniza el contenido del editor con el textarea oculto al enviar el formulario
            var form = document.querySelector("#modal-body form");
            if (form) {
                form.addEventListener("submit", function() {
                    var descriptionInput = document.getElementById("description");
                    if (descriptionInput) {
                        descriptionInput.value = quill.root.innerHTML;
                    }
                });
            }
        }

        // Previsualización de imagen al subir archivo
        var imageInput = document.getElementById("image");
        if (imageInput) {
            imageInput.addEventListener("change", function(event) {
                const file = event.target.files[0];
                const preview = document.getElementById("preview-image");
                const uploadText = document.getElementById("upload-text");

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        if (preview) {
                            preview.src = e.target.result;
                            preview.style.display = "block";
                        }
                        if (uploadText) {
                            uploadText.style.display = "none"; // Oculta el texto cuando hay imagen
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    }, 100);
}
