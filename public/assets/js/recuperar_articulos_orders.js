document.addEventListener("DOMContentLoaded", function () {
    const orderContainer = document.getElementById("order-container");
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0) {
        orderContainer.innerHTML = "<p>No hay productos en el carrito.</p>";
    } else {
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
                            <span class="price">$${product.price}</span>
                            <button class="delete-icon">🗑️</button>
                        </div>
                    </div>
                </div>
            `;

            orderContainer.appendChild(cartItem);

             
            const event = new CustomEvent("itemAdded", { detail: cartItem });
            document.dispatchEvent(event);
        });
    }
});
