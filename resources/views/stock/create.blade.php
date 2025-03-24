<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('assets/css/styles_dashboard_myModal.css') }}">
    
</head>
<body>

 

 
<div class="container">
    <h1>Agregar Producto</h1>

    <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Campo para ingresar el ID manualmente -->
        <div class="form-group">
            <label>ID del Producto:</label>
            <input type="number" name="id" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Título:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Subir Imagen desde tu Equipo:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label>O ingresar URL de la Imagen:</label>
            <input type="url" name="image_url" class="form-control">
        </div>

        <div class="form-group">
            <label>Precio Anterior:</label>
            <input type="number" step="0.01" name="old_price" class="form-control">
        </div>

        <div class="form-group">
            <label>Precio Actual:</label>
            <input type="number" step="0.01" name="new_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Descuento (%):</label>
            <input type="number" name="discount" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
 
    
</body>
</html>

