document.addEventListener("DOMContentLoaded", function () {
    const cartButtons = document.querySelectorAll(".cart-button");

    cartButtons.forEach(button => {
        button.addEventListener("click", function () {
            const card = button.closest(".card");
            const product = {
                id: card.querySelector(".id").textContent.replace("id: ", ""),
                title: card.querySelector(".title").textContent,
                price: card.querySelector(".new-price").textContent,
                image: card.querySelector("img").src
            };

            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push(product);
            localStorage.setItem("cart", JSON.stringify(cart));

            console.log("Producto agregado:", product); // Depuración

            showStyledMessage("✅ Producto agregado al carrito");
        });
    });

    function showStyledMessage(message) {
        // Si ya hay un mensaje en pantalla, lo eliminamos antes de agregar otro
        let existingMessage = document.querySelector(".cart-message");
        if (existingMessage) {
            existingMessage.remove();
        }

        let msgDiv = document.createElement("div");
        msgDiv.textContent = message;
        msgDiv.className = "cart-message";
        document.body.appendChild(msgDiv);

        console.log("Mensaje insertado en el DOM"); // Depuración

        // Esperamos al siguiente frame para aplicar la animación
        requestAnimationFrame(() => {
            msgDiv.classList.add("show");
        });

        setTimeout(() => {
            msgDiv.classList.remove("show");
            setTimeout(() => msgDiv.remove(), 500);
        }, 3000);
    }
});
