<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/devs', function () {
    $devs = json_decode(file_get_contents(resource_path('data/devs.json')), true);
    return view('dev', ['devs' => $devs]);
});

Route::get('/loggedin', function () {
    return "DIPSHIT";
});

Route::get('/login', function () {
    return view('login');
});