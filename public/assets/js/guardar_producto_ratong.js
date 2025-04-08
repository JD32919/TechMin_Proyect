document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
            const card = button.closest(".parent");

            if (!card) {
                console.error("No se encontró el contenedor del producto");
                return;
            }

            const titleElement = card.querySelector(".product-title");
            const priceElement = card.querySelector(".current-price");
            const imageElement = card.querySelector("img.main-image");

            if (!titleElement || !priceElement || !imageElement) {
                console.error("Faltan datos del producto");
                return;
            }

            const product = {
                title: titleElement.textContent.trim(),
                price: priceElement.textContent.trim(),
                image: imageElement.src
            };

            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push(product);
            localStorage.setItem("cart", JSON.stringify(cart));

            console.log("Product added:", product);
            showStyledMessage("✅ Product added to cart");

            // Redirige a una sección o página del carrito
            window.location.href = "/orders"; // Cambia si deseas una ruta diferente
        });
    });

    function showStyledMessage(message) {
        let existingMessage = document.querySelector(".cart-message");
        if (existingMessage) existingMessage.remove();

        let msgDiv = document.createElement("div");
        msgDiv.textContent = message;
        msgDiv.className = "cart-message";
        document.body.appendChild(msgDiv);

        requestAnimationFrame(() => {
            msgDiv.classList.add("show");
        });

        setTimeout(() => {
            msgDiv.classList.remove("show");
            setTimeout(() => msgDiv.remove(), 500);
        }, 3000);
    }
});
