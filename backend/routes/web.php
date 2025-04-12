<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
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