<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StockController extends Controller
{
    //Mostrar productos
    public function index()
    {
        $stock = Stock::all();
        return view('stock.stock', compact('stock'));
    }

    // Mostrar formulario para crear producto
    public function create()
    {
        return view('stock.create');
    }

    // Guardar producto
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|unique:stock,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'nullable|url', // HTTPS
            'rating' => 'nullable|integer|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'old_price' => 'nullable|numeric',
            'new_price' => 'required|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
        ]);

         

        if ($request->hasFile('image')) {
            // Guardar imagen localmente en storage/app/public/products
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = '/storage/' . $imagePath;
        } elseif ($request->filled('image_url')) {
            // Usar URL externa si no se sube imagen local
            $validatedData['image'] = $request->image_url;
        } else {
            
            $validatedData['image'] = '/storage/products/default.jpg';
        }

        Stock::create($validatedData);

        return redirect()->route('stock.stock')->with('success', 'Producto agregado correctamente.');
    }


    // Mostrar formulario para editar
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stock.edit', compact('stock'));
    }

    // Actualizar producto
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|unique:stock,id,' . $id, // Permitir mismo ID
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'nullable|url',
            'rating' => 'nullable|integer|min:0|max:5',
            'reviews' => 'nullable|integer|min:0',
            'old_price' => 'nullable|numeric',
            'new_price' => 'required|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
        ]);

        $stock = Stock::findOrFail($id);

        if ($request->hasFile('image')) {
            // Subir nueva imagen local
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = '/storage/' . $imagePath;
        } elseif ($request->filled('image_url')) {
            // Usar URL externa si no se sube imagen local
            $validatedData['image'] = $request->image_url;
        } else {
            // Mantener imagen anterior si no se actualiza
            $validatedData['image'] = $stock->image;
        }

        $stock->update($validatedData);

        return redirect()->route('stock.stock')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar producto
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('stock.stock')->with('success', 'Producto eliminado correctamente.');
    }

    
 
}
