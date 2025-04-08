document.addEventListener("DOMContentLoaded", () => {
    const subtotalElement = document.querySelector(".payment-summary .summary-row:nth-child(1) span:last-child");
    const taxElement = document.querySelector(".payment-summary .summary-row:nth-child(2) span:last-child");
    const totalElement = document.querySelector(".total-section .total-row span:last-child");
    const cartCountElement = document.querySelector(".cart-count"); // ✅ Captura la cantidad de productos

    const TAX_RATE = 0.16; // 16% impuesto

    function updateCardDetails() {
        let subtotal = 0;
        let totalItems = 0; // 🔢 Contador de productos

        const cartItems = document.querySelectorAll(".cart-item-card");

        cartItems.forEach((item) => {
            const price = parseFloat(item.querySelector(".price").textContent.replace(/[^0-9.-]+/g, ""));
            const quantityInput = item.querySelector(".quantity-control input");
            const quantity = parseInt(quantityInput.value, 10);

            subtotal += price * quantity;
            totalItems += quantity;
        });

        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax;

        subtotalElement.textContent = `$${subtotal.toLocaleString()}`;
        taxElement.textContent = `$${tax.toLocaleString()}`;
        totalElement.textContent = `$${total.toLocaleString()}`;

        const checkoutButton = document.querySelector(".checkout-button");
        checkoutButton.textContent = `Subtotal: $${subtotal.toLocaleString()} | Total: $${total.toLocaleString()} Checkout`;

        // ✅ Actualiza la cantidad de productos en el carrito
        if (cartCountElement) {
            cartCountElement.textContent = totalItems;
        } else {
            console.error("🚨 No se encontró el elemento con clase 'cart-count'");
        }

        document.getElementById("subtotal-hidden").value = subtotal.toFixed(2);
        document.getElementById("total-hidden").value = total.toFixed(2);

        // También puedes actualizar el texto mostrado, si deseas:
        document.getElementById("subtotal-display").textContent = `$${subtotal.toLocaleString()}`;
        document.getElementById("total-display").textContent = `$${total.toLocaleString()}`;
    }

    function setupCartItemEvents(item) {
        const minusButton = item.querySelector(".quantity-control .qty-btn:first-child");
        const plusButton = item.querySelector(".quantity-control .qty-btn:last-child");
        const quantityInput = item.querySelector(".quantity-control input");
        const deleteButton = item.querySelector(".delete-icon");

        minusButton.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value, 10);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateCardDetails();
            }
        });

        plusButton.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value, 10);
            quantityInput.value = quantity + 1;
            updateCardDetails();
        });

        quantityInput.addEventListener("input", () => {
            let quantity = parseInt(quantityInput.value, 10);
            if (isNaN(quantity) || quantity < 1) {
                quantityInput.value = 1;
            }
            updateCardDetails();
        });

        deleteButton.addEventListener("click", () => {
            item.remove();
            updateCardDetails();
        });
    }

    document.querySelectorAll(".cart-item-card").forEach(setupCartItemEvents);

    // Cuando se agregue un nuevo artículo dinámicamente
    document.addEventListener("itemAdded", (event) => {
        setupCartItemEvents(event.detail);
        updateCardDetails();
    });

    updateCardDetails();


    document.addEventListener("DOMContentLoaded", () => {
        const bellIcon = document.getElementById("notificationBell");
        const dropdown = document.getElementById("notificationDropdown");
    
        bellIcon.addEventListener("click", () => {
            dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
        });
    
        // Opcional: cerrar al hacer clic fuera
        document.addEventListener("click", (e) => {
            if (!bellIcon.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.style.display = "none";
            }
        });
    });
    function addNotification(message) {
        const list = document.getElementById("notificationList");
        const li = document.createElement("li");
        li.textContent = message;
        list.prepend(li); // Agrega al inicio
    }
});
