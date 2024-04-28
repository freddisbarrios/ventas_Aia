<?php

use App\Http\Controllers\ProfileController;
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
    $nombre= 'Fredis Barrios';
    return view('index',['nombre'=>$nombre]);
    
});
Route::get('/Arquitectura', function () {
    $nombre= 'Fredis Barrios';
    return view('Arquitectura',['nombre'=>$nombre]);
    
});
Route::get('/Construccion', function () {
    $nombre= 'Fredis Barrios';
    return view('Construccion',['nombre'=>$nombre]);

});
Route::get('/Diseño', function () {
    $nombre= 'Fredis Barrios';
    return view('Diseño',['nombre'=>$nombre]);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
