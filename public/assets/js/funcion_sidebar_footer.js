document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector('.sidebar');
    const footer = document.getElementById('footer-section');

    function checkSidebarPosition() {
        const sidebarHeight = sidebar.offsetHeight;
        const footerOffsetTop = footer.offsetTop;
        const scrollY = window.scrollY;
        const windowHeight = window.innerHeight;

        // Si la barra lateral toca el footer, la fija antes del footer
        if (scrollY + sidebarHeight >= footerOffsetTop) {
            sidebar.style.position = 'absolute';
            sidebar.style.top = (footerOffsetTop - sidebarHeight) + 'px';
        } else {
            sidebar.style.position = 'fixed';
            sidebar.style.top = '0';
        }
    }

    // Llamar a la función al cargar y desplazarse
    window.addEventListener('scroll', checkSidebarPosition);
    checkSidebarPosition(); // Ejecuta la función al inicio
});