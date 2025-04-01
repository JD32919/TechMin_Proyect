document.addEventListener('DOMContentLoaded', function () {
    // Inicializar Quill Editor
    var quill = new Quill('#quill-editor', {
        theme: 'snow',
        placeholder: 'Enter product description...'
    });

    // Actualizar valor del input oculto antes de enviar el formulario
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#description-input').value = quill.root.innerHTML;
    };

    // Mostrar mensaje para categoría seleccionada
    function showCategoryMessage() {
        var categoryMessage = document.getElementById('category-message');
        var selectedCategory = document.getElementById('product-type').value;

        if (selectedCategory) {
            categoryMessage.innerHTML = `You selected: <strong>${selectedCategory}</strong>`;
        } else {
            categoryMessage.innerHTML = '';
        }
    }
});