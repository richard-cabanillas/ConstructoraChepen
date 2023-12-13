<?php
use App\Http\Controllers\TechoPropioController;
use App\Http\Controllers\MiViviendaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\vistasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticiasContoller;

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
Route::get('/', [InicioController::class, 'index'])->name('index');
Route::get('/contacto' , [vistasController::class, 'contacto'])->name('contacto');
Route::get('/nosotros' , [vistasController::class, 'nosotros'])->name('nosotros');


Route::get('/techo-propio', [TechoPropioController::class, 'mostrar'])->name('techoPropio');
Route::get('/mi-Vivienda', [MiViviendaController::class, 'muestra'])->name('miVivienda');


//

Route::get('/noticias', [NoticiasContoller::class, 'index'])->name('noticias.index');
//Route::get('/noticias/create', [NoticiasController::class, 'create'])->name('noticias.create');
Route::post('/noticias', [NoticiasContoller::class, 'store'])->name('noticias.store');
