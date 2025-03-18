@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Productos</h1>
    <a href="{{ route('stock.create') }}" class="btn btn-success mb-3">Agregar Producto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio Anterior</th>
                <th>Precio Actual</th>
                <th>Descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stock as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>
                        @if(Str::startsWith($product->image, 'http'))
                            <img src="{{ $product->image }}" width="100" alt="{{ $product->title }}">
                        @else
                            <img src="{{ asset($product->image) }}" width="100" alt="{{ $product->title }}">
                        @endif
                    </td>
                    <td>${{ $product->old_price ?? 'N/A' }}</td>
                    <td>${{ $product->new_price }}</td>
                    <td>{{ $product->discount }}%</td>
                    <td>
                        <a href="{{ route('stock.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('stock.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
