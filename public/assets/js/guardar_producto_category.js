document.addEventListener("DOMContentLoaded", function () {
    const categoryLinks = document.querySelectorAll('.sub-menu-link');
    const imageElement = document.querySelector('.image-category img');
    const cardContainer = document.querySelector('.card-container');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const selectedCategory = this.dataset.category;
            const category = categoryData[selectedCategory];

            if (category) {
                imageElement.src = category.image;
                cardContainer.innerHTML = '';

                category.products.forEach(product => {
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                        <img src="${product.img}" alt="${product.title}">
                        <p class="title">${product.title}</p>
                        <span class="stars">${product.stars}</span>
                        <p class="id">id: ${product.id}</p>
                        <p class="old-price">${product.oldPrice}</p>
                        <div class="price-cart-container">
                            <p class="new-price">${product.newPrice}</p>
                            <button class="cart-button">
                                <img src="assets/image/carrito.png" alt="Carrito">
                            </button>
                        </div>
                    `;
                    cardContainer.appendChild(card);
                });

                // 🔥 Llamamos a la función para asignar eventos a los nuevos botones
                asignarEventosCarrito();
            }
        });
    });

    function asignarEventosCarrito() {
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

                showStyledMessage("✅ Producto agregado al carrito");
            });
        });
    }

    function showStyledMessage(message) {
        let existingMessage = document.querySelector(".cart-message");
        if (existingMessage) {
            existingMessage.remove();
        }

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
