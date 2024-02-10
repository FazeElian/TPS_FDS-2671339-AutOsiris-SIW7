<?php

// Incluimos librería se enrutamiento
use Illuminate\Support\Facades\Route;

// Incluimos los controladores de cada modulo
use App\Http\Controllers\CategoryController; //Categorías de producto
use App\Http\Controllers\ProductController; // Productos
use App\Http\Controllers\Perfile; // Perfil
use App\Http\Controllers\CustomerController; // Roles
use App\Http\Controllers\InventoryController; // Inventarios
use App\Http\Controllers\SaleController; // Ventas
use App\Http\Controllers\FactureController; // Facturas

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta Categorías Productos
Route::resource('products/categories', CategoryController::class)->middleware("auth")->except(['show']);

    // Ruta para buscar Categorías de productos
    Route::get('products/categories/search', [CategoryController::class, 'search'])->name('categories.search');

// Ruta Productos
Route::resource('products', ProductController::class)->middleware("auth");

// Ruta Perfil
Route::resource('perfile', Perfile::class)->middleware("auth");

// Ruta Facturas
Route::resource('factures', FactureController::class)->middleware("auth");

// Ruta de PDF de factura
Route::get("factures/showPDF/{id}", [\App\Http\Controllers\FactureController::class, "showPDF"])->name("factures.pdf");

// Ruta Clientes
Route::resource('customers', CustomerController::class)->middleware("auth");

// Ruta Inventarios
Route::resource('inventories', InventoryController::class)->middleware("auth");

// Ruta Ventas
Route::resource('sales', SaleController::class)->middleware("auth");
