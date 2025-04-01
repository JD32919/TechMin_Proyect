@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Agregar Nuevo Producto</h2>

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
        <div class="form-group mb-3">
            <label for="id">ID del Producto:</label>
            <input type="number" class="form-control" id="id" name="id" required>
        </div>

        {{-- Título del producto --}}
        <div class="form-group mb-3">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        {{-- Descripción del producto --}}
        <div class="form-group mb-3">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        {{-- Imagen del producto --}}
        <div class="form-group mb-3">
            <label for="image">Imagen:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        {{-- Precio nuevo --}}
        <div class="form-group mb-3">
            <label for="new_price">Precio Nuevo:</label>
            <input type="number" step="0.01" class="form-control" id="new_price" name="new_price" required>
        </div>

        {{-- Descuento --}}
        <div class="form-group mb-3">
            <label for="discount">Descuento (%):</label>
            <input type="number" class="form-control" id="discount" name="discount" min="0" max="100">
        </div>

        {{-- Botón para enviar --}}
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>
</div>
@endsection
