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
