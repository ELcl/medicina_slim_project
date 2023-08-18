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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Usuarios
Route::get('/usuarios', function(){
    return view('users.index');
})->name('users.index');

// Pacientes
Route::get('/pacientes', function(){
    return view('pacientes.index');
})->name('pacientes.index');

// Formularios
Route::get('/formularios', function(){
    return view('formularios.index');
})->name('formularios.index');

// Casos
Route::get('/casos', function(){
    return view('casos.index');
})->name('casos.index');

require __DIR__.'/auth.php';
