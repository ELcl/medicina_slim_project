<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Importar Controladores
use App\Http\Controllers\UserController;
use App\Models\User;

use App\Http\Controllers\PacienteController;
use App\Models\Paciente;

use App\Http\Controllers\CasoController;
use App\Models\Caso;

// Permisos de Spatie
use Spatie\Permission\Models\Permission;


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
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::patch('/user/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Pacientes
    Route::get('/paciente', [PacienteController::class, 'index'])->name('pacientes.index');
    Route::get('/paciente/create', [PacienteController::class, 'create'])->name('pacientes.create');
    Route::post('/paciente', [PacienteController::class, 'store'])->name('pacientes.store');
    Route::patch('/paciente/{paciente}', [PacienteController::class, 'update'])->name('pacientes.update');
    Route::delete('/paciente/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

// Casos
    Route::get('/caso', [CasoController::class, 'index'])->name('casos.index');
    Route::get('/caso/create', [CasoController::class, 'create'])->name('casos.create');
    Route::post('/user', [CasoController::class, 'store'])->name('casos.store');
    Route::patch('/caso/{caso}', [CasoController::class, 'update'])->name('casos.update');
    Route::delete('/caso/{caso}', [CasoController::class, 'destroy'])->name('casos.destroy');

// Formularios
Route::get('/formularios', function(){
    return view('formularios.index');
})->name('formularios.index');



require __DIR__.'/auth.php';
