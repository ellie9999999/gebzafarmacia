<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
// Página principal después del login
Route::middleware('auth')->get('/home', [HomeController::class, 'index'])->name('home');
// Página de login (método GET muestra formulario de login)
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');

// Procesa el login (método POST para enviar las credenciales)
Route::post('/login', [HomeController::class, 'login'])->name('login.post');

// Página principal (después de login, o si ya has iniciado sesión)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Cierra sesión
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

// Carrito de compras (solo usuarios autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
});

// Registro de usuario
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
