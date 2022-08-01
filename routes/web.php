<?php

use App\Http\Controllers\IncidentController;
use App\Models\Incident;
use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('incidencias', IncidentController::class)->names('incidencias');
Route::get('incidencias', [IncidentController::class, 'index'])->name('incidencias.index');
Route::get('incidencias/create', [IncidentController::class, 'create'])->name('incidencias.create');
// Route::post('incidencias', [IncidentController::class, 'store'])->name('incidencias.store');
Route::get('incidencias/{contact}/edit', [IncidentController::class, 'edit'])->name('incidencias.edit');
Route::put('incidencias/{contact}', [IncidentController::class, 'update'])->name('incidencias.update');
