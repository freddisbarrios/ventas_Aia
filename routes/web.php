<?php

use App\Http\Controllers\InmuebleController;
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
*/Route::view('/','inicio')->name('inicio');

Route::get('index', function () {
    $nombre= 'Fredis Barrios';
    return view('index',['nombre'=>$nombre]);
    
})-> name('view.index');


Route::get('/Arquitectura', function () {
    $nombre= 'Fredis Barrios';
    return view('Arquitectura',['nombre'=>$nombre]);
    
})->name('arquitectura.arq');
Route::get('/Construccion', function () {
    $nombre= 'Fredis Barrios';
    return view('Construccion',['nombre'=>$nombre]);

})->name('construccion.constr');
Route::get('/Diseño', function () {
    $nombre= 'Fredis Barrios';
    return view('Diseño',['nombre'=>$nombre]);

})->name('diseño.dis');
/* CRUD de productos
//listar productos
Route::get('/inmuebles',[InmuebleController::class,'index'])->name('inmuebles.index');
//crear y guardar producto
Route::get('/inmuebles/create',[InmuebleController::class,'create'])->name('inmuebles.create');
Route::post('/inmuebles',[InmuebleController::class,'store'])->name('inmuebles.store');
//listar producto
Route::get('/inmuebles/{inmueble}',[InmuebleController::class,'show'])->name('inmuebles.show');
//editar y actualizar producto
Route::get('/inmuebles/{inmueble}/edit',[InmuebleController::class,'edit'])->name('inmuebles.edit');
Route::put('/inmuebles/{inmueble}',[InmuebleController::class,'update'])->name('inmuebles.update');
//eliminar producto
Route::delete('/inmuebles',[InmuebleController::class,'destroy'])->name('inmuebles.destroy');
*/
Route::resource('/inmuebles',InmuebleController::class)->middleware('auth');//crud de productos

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
