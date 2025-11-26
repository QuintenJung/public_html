<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/devs/{name}', function ($name) {
    $users = json_decode(file_get_contents(resource_path('data/devs.json')), true);

    // Ophalen van een user (of null als niet gevonden)
    $data = $users[$name] ?? "Quinten";

    return view('dev', [
        'name' => $name,
        'data' => $data
    ]);
});

