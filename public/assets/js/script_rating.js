document.addEventListener("DOMContentLoaded", () => {
    const addToCartButton = document.querySelector(".add-to-cart");
    const quantityInput = document.getElementById("quantity");
    const decreaseQtyButton = document.getElementById("decrease-qty");
    const increaseQtyButton = document.getElementById("increase-qty");

    // Handle quantity decrease
    decreaseQtyButton.addEventListener("click", () => {
        let quantity = parseInt(quantityInput.value, 10);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
        }
    });

    // Handle quantity increase
    increaseQtyButton.addEventListener("click", () => {
        let quantity = parseInt(quantityInput.value, 10);
        quantityInput.value = quantity + 1;
    });

    // Handle "Add to Cart" button click
    addToCartButton.addEventListener("click", () => {
        const quantity = parseInt(quantityInput.value, 10);
         
    });
});
