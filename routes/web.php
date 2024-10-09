<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alicorpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\landing_promocional\LandingPromocionalController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\XplorerController;

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

Route::controller(alicorpController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/nuevo', 'nuevo')->name('nuevo');
    Route::get('/juegos', 'juegos')->name('juegos');
    Route::get('/contacto', 'contacto')->name('contacto');
    Route::get('/reclamacion', 'reclamacion')->name('reclamacion');
    Route::get('/promocion', 'promocion')->name('promocion');

});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    
    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/dashboard/inicio', [AdminController::class, 'inicio'])->name('admin.dashboard.inicio');
    Route::get('/dashboard/juegosWeb', [AdminController::class, 'juegosWeb'])->name('admin.dashboard.juegosWeb');
    Route::get('/dashboard/juegosCamp', [AdminController::class, 'juegosCamp'])->name('admin.dashboard.juegosCamp');
    Route::get('/dashboard/configuracion', [AdminController::class, 'configuracion'])->name('dashboard.configuracion');
    Route::get('/dashboard/editar/Perfil', [AdminController::class, 'EditProfile'])->name('dashboard.editar.perfil');
    Route::post('/dashboard/grabar/Perfil', [AdminController::class, 'StoreProfile'])->name('dashboard.grabar.perfil');
 

    // mis proyectos
    Route::get('/dashboard/mis-proyectos', [AdminController::class, 'dashboardMio'])->name('admin.dashboard.mio');
    Route::get('/dashboard/juegosWeb/mis-proyectos', [AdminController::class, 'juegosWebMio'])->name('admin.dashboard.juegosWeb.mio');
    Route::get('/dashboard/juegosCamp/mis-proyectos', [AdminController::class, 'juegosCampMio'])->name('admin.dashboard.juegosCamp.mio');

    Route::prefix('landing_promocional')->group(function () {
        Route::get('/', [AdminController::class, 'landing'])->name('landing_promocional.index');
        Route::get('/mio', [AdminController::class, 'landingMio'])->name('landing_promocional.index.mio');
        // landing promocional asignacion
        Route::get('show/{id}/overview',[LandingPromocionalController::class, 'show'])->name('landing_promocional.show.overview');
        Route::get('show/{id}/indicadores',[LandingPromocionalController::class, 'indicador'])->name('landing_promocional.show.indicadores');
        Route::get('show/{id}/participantes',[LandingPromocionalController::class, 'participante'])->name('landing_promocional.show.participantes');
        Route::get('show/{id}/ganadores',[LandingPromocionalController::class, 'ganador'])->name('landing_promocional.show.ganadores');
        Route::get('show/{id}/configuracion',[LandingPromocionalController::class, 'configuracion'])->name('landing_promocional.show.configuracion');
        Route::get('show/{id}/personalizar',[LandingPromocionalController::class, 'configuracion'])->name('landing_promocional.show.personalizarLanding');
    });

    Route::prefix('juego_web')->group(function () {
        Route::get('/', [AdminController::class, 'landing'])->name('juego_web.index');
        // landing promocional asignacion
        Route::get('show/{id}/overview',[LandingPromocionalController::class, 'show'])->name('juego_web.show.overview');
        Route::get('show/{id}/indicadores',[LandingPromocionalController::class, 'indicador'])->name('juego_web.show.indicadores');
        Route::get('show/{id}/participantes',[LandingPromocionalController::class, 'participante'])->name('juego_web.show.participantes');
        Route::get('show/{id}/ganadores',[LandingPromocionalController::class, 'ganador'])->name('juego_web.show.ganadores');
        Route::get('show/{id}/configuracion',[LandingPromocionalController::class, 'configuracion'])->name('juego_web.show.configuracion');
    });
    
    Route::prefix('juego_campana')->group(function () {
        Route::get('/', [AdminController::class, 'landing'])->name('juego_campana.index');
        // landing promocional asignacion
        Route::get('show/{id}/overview',[LandingPromocionalController::class, 'show'])->name('juego_campana.show.overview');
        Route::get('show/{id}/indicadores',[LandingPromocionalController::class, 'indicador'])->name('juego_campana.show.indicadores');
        Route::get('show/{id}/participantes',[LandingPromocionalController::class, 'participante'])->name('juego_campana.show.participantes');
        Route::get('show/{id}/ganadores',[LandingPromocionalController::class, 'ganador'])->name('juego_campana.show.ganadores');
        Route::get('show/{id}/configuracion',[LandingPromocionalController::class, 'configuracion'])->name('juego_campana.show.configuracion');
        Route::get('show/{id}/asignacion',[LandingPromocionalController::class, 'configuracion'])->name('juego_campana.show.asignacion');
    });

    // registros
    Route::put('/proyecto/{id}', [ProjectController::class, 'guardarDatosInfoProyecto'])->name('project.config.proyecto');
    Route::put('/dominio/{id}', [ProjectController::class, 'guardarDatosDominio'])->name('project.config.dominio');
    Route::put('/vigencia/{id}', [ProjectController::class, 'guardarDatosVigencia'])->name('project.config.vigencia');
    Route::put('/estilo/{id}', [ProjectController::class, 'guardarDatosEstilos'])->name('project.config.estilo');
    Route::put('/premio/{id}', [ProjectController::class, 'guardarDatosPremios'])->name('project.config.premio');
    Route::get('/premio/{id}', [ProjectController::class, 'obtenerPremio'])->name('project.config.premio.get');
    Route::put('/estado/{id}', [ProjectController::class, 'guardarDatosEstado'])->name('project.config.estado');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/cliente/dashboard', [alicorpController::class, 'dashboard'])->name('cliente.dashboard');
    Route::get('/cliente/configuracion', [alicorpController::class, 'PUpdate'])->name('cliente.configuracion');
    Route::get('/cliente/contrasena', [alicorpController::class, 'contrasena'])->name('cliente.contrasena');
    Route::post('cliente/password/update', [alicorpController::class, 'UpdatePassword'])->name('cliente.password.update');
    Route::post('/cliente/profile/update', [alicorpController::class, 'UpdateProfile'])->name('cliente.update.user');
});

Route::controller(XplorerController::class)->group(function () {
    Route::get('xplorer/login', 'loginForm')->name('xplorer.login');
    Route::post('xplorer/login','login');
    Route::get('xplorer/logout','logout')->name('xplorer.logout');
});

Route::middleware('auth:xplorer')->group(function () {
    Route::get('/xplorer/dashboard', function () {
        return view('xplorer.dashboard');
    });
});

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
