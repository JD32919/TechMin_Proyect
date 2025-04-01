document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector('.sidebar');
    const footer = document.getElementById('footer-section');
    const content = document.querySelector('.content'); // Asegúrate de que el contenido principal tenga esta clase

    function checkSidebarPosition() {
        const sidebarHeight = sidebar.offsetHeight;
        const footerOffsetTop = footer.offsetTop;
        const scrollY = window.scrollY;
        const windowHeight = window.innerHeight;
        const contentHeight = content.offsetHeight;

        // Altura dinámica del contenido y sidebar
        const sidebarMaxHeight = footerOffsetTop - 20;

        if (scrollY + sidebarHeight >= footerOffsetTop - 20) {
            sidebar.style.position = 'absolute';
            sidebar.style.top = (footerOffsetTop - sidebarHeight - 20) + 'px';
        } else if (scrollY >= 0 && scrollY + sidebarHeight < sidebarMaxHeight) {
            sidebar.style.position = 'fixed';
            sidebar.style.top = '0';
        }
    }

    // Llamar a la función al cargar y al desplazarse
    window.addEventListener('scroll', checkSidebarPosition);
    window.addEventListener('resize', checkSidebarPosition);
    checkSidebarPosition(); // Ejecuta la función al inicio
});