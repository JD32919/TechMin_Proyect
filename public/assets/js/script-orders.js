document.addEventListener("DOMContentLoaded", () => {
    const cartItems = document.querySelectorAll(".cart-item-card");
    const subtotalElement = document.querySelector(".payment-summary .summary-row:nth-child(1) span:last-child");
    const taxElement = document.querySelector(".payment-summary .summary-row:nth-child(2) span:last-child");
    const totalElement = document.querySelector(".total-section .total-row span:last-child");

    const TAX_RATE = 0.16; // 16% tax rate

    function updateCardDetails() {
        let subtotal = 0;
 
        cartItems.forEach((item) => {
            const price = parseFloat(item.querySelector(".price").textContent.replace(/[^0-9.-]+/g, ""));
            const quantity = parseInt(item.querySelector(".quantity-control input").value, 10);
            subtotal += price * quantity;
        });

        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax;

        // Update the card details
        subtotalElement.textContent = `$${subtotal.toLocaleString()}`;
        taxElement.textContent = `$${tax.toLocaleString()}`;
        totalElement.textContent = `$${total.toLocaleString()}`;

        // Update the checkout button text with subtotal and total
        const checkoutButton = document.querySelector(".checkout-button");
        checkoutButton.textContent = `Subtotal: $${subtotal.toLocaleString()} | Total: $${total.toLocaleString()} Checkout`;
    }

    cartItems.forEach((item) => {
        const minusButton = item.querySelector(".quantity-control .qty-btn:first-child");
        const plusButton = item.querySelector(".quantity-control .qty-btn:last-child");
        const quantityInput = item.querySelector(".quantity-control input");

        // Decrease quantity
        minusButton.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value, 10);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateCardDetails();
            }
        });

        // Increase quantity
        plusButton.addEventListener("click", () => {
            let quantity = parseInt(quantityInput.value, 10);
            quantityInput.value = quantity + 1;
            updateCardDetails();
        });

        // Update on manual input
        quantityInput.addEventListener("input", () => {
            let quantity = parseInt(quantityInput.value, 10);
            if (isNaN(quantity) || quantity < 1) {
                quantityInput.value = 1;
            }
            updateCardDetails();
        });

        // Delete card functionality
        const deleteButton = item.querySelector(".delete-icon");
        deleteButton.addEventListener("click", () => {
            item.remove(); // Remove the card from the DOM
            updateCardDetails(); // Recalculate totals
        });
    });

    const cardButtons = document.querySelectorAll(".card-type-logos .card-button");

    cardButtons.forEach((button) => {
        button.addEventListener("click", () => {
            // Remove 'selected' class from all buttons
            cardButtons.forEach((btn) => btn.classList.remove("selected"));
            // Add 'selected' class to the clicked button
            button.classList.add("selected");
        });
    });

    // Initial calculation
    updateCardDetails();
});