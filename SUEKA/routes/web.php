<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ficheiroController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/welcome', function () {
    return view('welcome');
});





Route::group(['middleware' => 'guest'], function () {
    Route::get('/registar', [AutenticacaoController::class, 'registar'])->name('registar');
    Route::post('/registar', [AutenticacaoController::class, 'registarPost'])->name('registar');
    Route::get('/login', [AutenticacaoController::class, 'login'])->name('login');
    Route::post('/login', [AutenticacaoController::class, 'loginPost'])->name('login');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/esquecesenha', [HomeController::class, 'esquecesenha'])->name("esquecesenha");
    Route::get('/home', [HomeController::class, 'index'])->name("home");
    Route::get('/administrador', [HomeController::class, 'adminHome'])->name('administrador');
    Route::delete('/logout', [AutenticacaoController::class, 'logout'])->name('logout');

});


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/novoficheiro', [ficheiroController::class, 'novoficheiro'])->name("novoficheiro");
    Route::get('/listaficheiro', [ficheiroController::class, 'listaficheiro'])->name("listaficheiro");
    Route::get('/listapastas', [ficheiroController::class, 'listapastas'])->name("listapastas");
    Route::get('/listautilizadores', [ficheiroController::class, 'listautilizadores'])->name("listautilizadores");
    Route::post('/novoficheiro',[ficheiroController::class,'store']);
   
    
    Route::get('/download/{file}',[ficheiroController::class,'download']);
    
    Route::get('/visualizarficheiro/{is}',[ficheiroController::class,'visualizarficheiro']);

});



