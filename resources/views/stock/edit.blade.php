@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>

    <form action="{{ route('stock.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Título:</label>
            <input type="text" name="title" class="form-control" value="{{ $stock->title }}" required>
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
            <input type="number" step="0.01" name="old_price" class="form-control" value="{{ $stock->old_price }}">
        </div>

        <div class="form-group">
            <label>Precio Actual:</label>
            <input type="number" step="0.01" name="new_price" class="form-control" value="{{ $stock->new_price }}" required>
        </div>

        <div class="form-group">
            <label>Descuento (%):</label>
            <input type="number" name="discount" class="form-control" value="{{ $stock->discount }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
