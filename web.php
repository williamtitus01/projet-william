<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

//lien vers page description
Route::get('/description/{id}',[ProductController::class, 'description'])
    ->name('product.description');

//affiche produit db dans la home
Route::get('/',[ProductController::class, 'index']);
//lien formulaire pour poster l'info vers db

Route::get('/formulaire', function () {
    return view('user/formulaire');
})->name('user.formulaire');

//poster donnée dans db
Route::post('/formulaire', [ProductController::class, 'save']);
//recupérer donné db

//si utilisateur loggé lien dashboard visible
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[ProductController::class, 'formulaire']);
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/edit/{id}',[ProductController::class, 'edit']);
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('edit.update');
require __DIR__.'/auth.php';
