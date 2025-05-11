<?php

// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Obtener el carrito del usuario (esto dependerá de cómo lo almacenes, puede ser en la base de datos o en la sesión)
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        // Verificar si el producto ya está en el carrito
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }

        // Guardar el carrito en la sesión
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
}
