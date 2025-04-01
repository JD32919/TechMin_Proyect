// Función para abrir el modal y cargar la vista del carousel
function openModal2() {
    var modal = document.getElementById('myModal2');
    modal.style.display = 'block';

    // Cargar contenido del modal
    fetch('/offers')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar la vista');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('modal-body2').innerHTML = data;

            // Inicializar carousel DESPUÉS de cargar contenido
            setTimeout(function () {
                inicializarCarousel();
            }, 100);
        })
        .catch(error => {
            console.error('Error al cargar el formulario:', error);
            document.getElementById('modal-body2').innerHTML = '<p>Error al cargar el formulario. Inténtalo nuevamente.</p>';
        });
}

// Inicializar Swiper dentro del modal
function inicializarCarousel() {
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 4,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
    });
}

// Función para cerrar el modal
function closeModal2() {
    var modalContent = document.querySelector('.modal-content2');
    modalContent.style.animation = 'slideOutRight 0.3s ease-out';

    setTimeout(function () {
        document.getElementById('myModal2').style.display = 'none';
        modalContent.style.animation = 'slideInRight 0.3s ease-out'; // Restablecer animación
    }, 300);
}

// Cierra el modal si el usuario hace clic fuera del contenido
window.onclick = function (event) {
    var modal = document.getElementById('myModal2');
    if (event.target === modal) {
        closeModal2();
    }
};
