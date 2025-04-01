 // Función para abrir el modal y cargar la vista del formulario
function openModal3() {
    var modal = document.getElementById('myModal3');
    modal.style.display = 'block';

    // Cargar la vista de stock.create con AJAX
    fetch('/orders')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar la vista');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('modal-body3').innerHTML = data;
        })
        .catch(error => {
            console.error('Error al cargar el formulario:', error);
            document.getElementById('modal-body3').innerHTML = '<p>Error al cargar el formulario. Inténtalo nuevamente.</p>';
        });
}

// Función para cerrar el modal
function closeModal3() {
    var modalContent = document.querySelector('.modal-content3');
    modalContent.style.animation = 'slideOutRight 0.3s ease-out';

    setTimeout(function() {
        document.getElementById('myModal3').style.display = 'none';
        modalContent.style.animation = 'slideInRight 0.3s ease-out'; // Restablecer animación
    }, 300);
}

// Cierra el modal si el usuario hace clic fuera del contenido
window.onclick = function(event) {
    var modal = document.getElementById('myModal3');
    if (event.target === modal) {
        closeModal3();
    }
}
