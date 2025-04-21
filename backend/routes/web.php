<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/actualite', function () {
    return view('actualite');
});

Route::get('/ressources', function () {
    return view('ressources');
});

Route::get('/connexion', function () {
    return view('connexion');
});
    Route::get('/gestion', function () {
        return view('gestion');
    });
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/indexadmin', function () {
    return view('indexadmin');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/service1', function () {
    return view('service1');
});
Route::get('/service2', function () {
    return view('service2');
});
Route::get('/service3', function () {
    return view('service3');
});
Route::get('/service4', function () {
    return view('service4');
});
Route::get('/oubeid', function () {
    return view('DrOubeid');
});
Route::get('/amira', function () {
    return view('DrAmira');
});
Route::get('/fati', function () {
    return view('DrFati');
});
Route::get('/siham', function () {
    return view('DrSiham');
});
Route::get('/contact', function () {
    return view('contact');
});
use App\Http\Controllers\RdvController;

Route::post('/rdv/store', [RdvController::class, 'store'])->name('rdv.store');