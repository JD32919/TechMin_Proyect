function toggleCategories() {
    var categories = document.getElementById("categories");
    if (categories.style.display === "none" || categories.style.display === "") {
        categories.style.display = "block"; // Muestra la sección
    } else {
        categories.style.display = "none"; // Oculta la sección
    }
}

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.querySelector(".categories").classList.add("show-categories");
    }, 1000); // Aparece después de 1 segundo
});

// Función para cargar contenido dinámico
function loadContent(event, page) {
    event.preventDefault(); // Evita la recarga de la página
    
    const contentDiv = document.getElementById("content");
    contentDiv.innerHTML = "<h3>Cargando...</h3>"; // Muestra un mensaje mientras carga

    fetch(page)
        .then(response => {
            if (!response.ok) {
                throw new Error("Página no encontrada");
            }
            return response.text();
        })
        .then(data => {
            contentDiv.innerHTML = data; // Inserta el contenido en la página
            history.pushState(null, "", page); // Actualiza la URL sin recargar
            updateActiveMenu(page);
        })
        .catch(error => {
            contentDiv.innerHTML = "<h2>Error 404</h2><p>El contenido no está disponible.</p>";
        });
}

// Función para resaltar la opción activa del menú
function updateActiveMenu(page) {
    const links = document.querySelectorAll("nav ul li a");
    links.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === page) {
            link.classList.add("active");
        }
    });
}

// Maneja la navegación con el botón "Atrás" del navegador
window.onpopstate = function () {
    const path = window.location.pathname.substring(1);
    loadContent(new Event("popstate"), path || "home.html");
};

// Cargar contenido inicial según la URL
document.addEventListener("DOMContentLoaded", function () {
    const path = window.location.pathname.substring(1) || "home.html";
    loadContent(new Event("load"), path);
});
