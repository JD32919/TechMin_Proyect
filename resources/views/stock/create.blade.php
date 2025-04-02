 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/styles_create_prodcuts.css') }}">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

 </head>
 <body>

<div class="body-de-create">

    <div class="container">

        <h2 class="logo">Add New Product</h2>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario para crear producto --}}
        <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- ID del producto --}}
            <div class="id-del-producto">
                <label for="id">Product ID:</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>

            {{-- Título del producto --}}
            <div class="titulo-del-producto">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            {{-- Descripción del producto --}}
            <div class="descripción-del-producto">
                <label for="description">Description:</label>
                <div id="editor-container"></div>
                <textarea class="form-control" id="description" name="description" rows="4" style="display:none;"></textarea>
            </div>

            {{-- Imagen del producto --}}
            <div class="image-del-producto">
                <label for="image">Image:</label>
                <div class="upload-container">
                    <label for="image" class="upload-box">
                        <img id="preview-image" src="" alt="Drag Image" style="display: none;">
                        <span id="upload-text">☁️ Drag Image</span>
                    </label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>
            </div>

            {{-- Precio nuevo --}}
            <div class="precio-nuevo">
                <label for="new_price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="new_price" name="new_price" required>
            </div>

            {{-- Descuento --}}
            <div class="descuento">
                <label for="discount">Discount (%):</label>
                <input type="number" class="form-control" id="discount" name="discount" min="0" max="100">
            </div>

            {{-- Botón para enviar --}}
            <button type="submit" class="btn-save">Save Product</button>
        </form>
    </div>
</div>

    <script src="{{ asset('assets/js/funtion_create_stock.js') }}"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    
 </body>
 </html>