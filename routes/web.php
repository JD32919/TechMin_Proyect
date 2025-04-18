<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::middleware('auth')->get('/index', function () {
    return view('home.index');
})->name('index');

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);

// 📌 Agrupando rutas de autenticación
Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

});


// 📌 Rutas protegidas para usuarios autenticados
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/services', function () {
        return view('home.services');
    })->name('services');

    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
     
});

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

/*ruta temporal borrar al acabar las prubeas*/
Route::get('/reset-password-dev', function () {
    return view('auth.reset-password', ['token' => 'token-de-prueba']);
});


// Ruta para ver productos
Route::get('/stock', [StockController::class, 'index'])->name('stock.stock');

// Ruta para agregar producto
Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');

// Ruta para editar producto
Route::get('/stock/{id}/edit', [StockController::class, 'edit'])->name('stock.edit');
Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');

// Ruta para eliminar producto
Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('stock.destroy');

Route::get('/graficas', [DashboardController::class, 'index'])->name('graficas');

Route::get('/offers', function () {
    return view('stock.offers');
})->name('offers');

Route::get('/orders', function () {
    return view('stock.orders');
})->name('orders');

Route::get('/rating', function () {
    return view('stock.rating');
})->name('rating');

Route::get('/rating/bell', function () {
    return view('stock.rating_bell');
})->name('rating.bell');

Route::get('/rating/caterpillar', function () {
    return view('stock.rating_caterpillar');
})->name('rating.caterpillar');

Route::get('/rating/doosan', function () {
    return view('stock.rating_doosan');
})->name('rating.doosan');

Route::get('/rating/hitachi', function () {
    return view('stock.rating_hitachi');
})->name('rating.hitachi');

Route::get('/rating/terex', function () {
    return view('stock.rating_terex');
})->name('rating.terex');

Route::get('/rating/volvo', function () {
    return view('stock.rating_volvo');
})->name('rating.volvo');


Route::post('/checkout', [PaymentController::class, 'store'])->name('checkout.store');


/*Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register',[RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login',[LoginController::class, 'login']);


Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);
*/