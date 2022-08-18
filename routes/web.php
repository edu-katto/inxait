<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\Participantes\Index;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EmailController;
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

Auth::routes(['register' => false]);

Route::get('/', Index::class)->name('inicio'); // rutas controladas desde livewire
Route::get('/emailConfirm/{token}', [EmailController::class, 'emailConfirm']); //ruta para confirmar correo

Route::middleware('auth')->group( function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //vista del dashboard
    Route::get('/exportExcel', [ReportController::class, 'exportExcel'])->name('exportExcel'); //ruta para la exportación del informe
});
