document.addEventListener("DOMContentLoaded", function() {
    // Inicializar Quill.js
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        placeholder: 'Escribe la descripción aquí...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'strike'], // Negrita, cursiva, tachado
                [{ 'header': 1 }, { 'header': 2 }, { 'header': 3 }], // H1, H2, H3
                ['blockquote', 'code-block'], // Código y bloque de edición (lápiz)
                ['link'] // Enlace
            ]
        }
    });

    // Sincroniza el contenido del editor con el textarea oculto al enviar el formulario
    document.querySelector("form").addEventListener("submit", function() {
        document.getElementById("description").value = quill.root.innerHTML;
    });

    // Previsualización de imagen al subir archivo
    document.getElementById("image").addEventListener("change", function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById("preview-image");
        const uploadText = document.getElementById("upload-text");

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
                uploadText.style.display = "none"; // Oculta el texto cuando hay imagen
            };
            reader.readAsDataURL(file);
        }
    });
});
