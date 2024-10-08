<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
Route::resource('buku', BukuController::class);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::get('/', function () {
    return redirect()->route('buku.index'); // Redirect to the 'buku.index' route
});
// Route to show the edit form for a specific book
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');

// Route to handle the form submission for updating the book
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');