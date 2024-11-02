<?php
//Index
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\IndexAnuncioController;
use App\Http\Controllers\NosotrosController;


//APP Alumnos
use App\Http\Controllers\AnunciosController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\QuejasController;

//App Profesores
use App\Http\Controllers\ProfesorAnunciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Index
Route::get('/Login', [LoginController::class, 'login'])->name('Login');
Route::post('/Login', [LoginController::class, 'IniSesion']);
Route::get('/Contactanos', [ContactanosController::class, 'contactanos'])->name('index.contactanos');
Route::get('/indexAnuncios', [IndexAnuncioController::class, 'indexAnuncios'])->name('index.anuncios');
Route::get('/Nosotros', [NosotrosController::class, 'nosotros'])->name('index.nosotros');

//Rutas Alumnos
Route::get('/Anuncios', [AnunciosController::class, 'anuncios'])->name('Alumno.anuncios');
Route::get('/Docentes', [DocentesController::class, 'docentes'])->name('Alumno.docentes');
Route::get('/Horarios', [HorariosController::class, 'horarios'])->name('Alumno.horarios');
Route::get('/Notas', [NotasController::class, 'notas'])->name('Alumno.notas');
Route::get('/Quejas', [QuejasController::class, 'quejas'])->name('Alumno.quejas');

//Rutas Profesores
Route::get('/ProfesorAnuncios', [ProfesorAnunciosController::class, 'panuncios']);

