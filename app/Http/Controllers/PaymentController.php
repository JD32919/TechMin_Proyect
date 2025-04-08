<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_on_card' => 'required|string|max:255',
            'card_number' => 'required|string|max:20',
            'expiration_date' => 'required|string|max:7',
            'cvv' => 'required|string|max:4',
            'subtotal' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        Payment::create([
            'name_on_card' => $validated['name_on_card'],
            'card_number' => $validated['card_number'],
            'expiration_date' => $validated['expiration_date'],
            'cvv' => $validated['cvv'],
            'subtotal' => $validated['subtotal'],
            'total' => $validated['total'],
            'shipping' => 0 // puedes modificarlo si tienes envío variable
        ]);

        //   agregar código para enviar  
        return response()->json(['success' => true, 'message' => 'Pago procesado correctamente']);
    }
}
