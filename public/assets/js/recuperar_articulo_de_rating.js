document.addEventListener("DOMContentLoaded", function () {
    const orderContainer = document.getElementById("order-container");
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0) {
        orderContainer.innerHTML = "<p>There are no products in the cart.</p>";
    } else {
        // Agregamos un contador de productos
        const cartCount = document.createElement("p");
        cartCount.classList.add("cart-count");
        cartCount.textContent = `You have ${cart.length}  items${cart.length > 1 ? 's' : ''} in your cart.`;
        orderContainer.appendChild(cartCount);

        // Mostramos cada producto
        cart.forEach(product => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item-card");

            cartItem.innerHTML = `
                <img src="${product.image}" alt="Product Image" class="product-image">
                <div class="item-details">
                    <p class="item-description">${product.title}</p>
                    <div class="item-price-quantity">
                        <div class="quantity-control">
                            <button class="qty-btn">-</button>
                            <input type="text" value="1">
                            <button class="qty-btn">+</button>
                        </div>
                        <div class="price-delete-container">
                            <span class="price">${product.price}</span>
                            <button class="delete-icon">🗑️</button>
                        </div>
                    </div>
                </div>
            `;

            orderContainer.appendChild(cartItem);

            // Evento personalizado, si lo usas
            const event = new CustomEvent("itemAdded", { detail: cartItem });
            document.dispatchEvent(event);
        });
    }
});
