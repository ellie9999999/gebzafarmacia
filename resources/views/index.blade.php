<!-- resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tu Carrito</h1>
        @if (count($cart) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $productId => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>${{ $details['price'] }}</td>
                            <td>${{ $details['price'] * $details['quantity'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('checkout') }}" class="btn btn-success">Ir a Pagar</a>
        @else
            <p>No tienes productos en el carrito.</p>
        @endif
    </div>
@endsection
