<?php

use App\Http\Controllers\BugsController;
use App\http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;



Route::get('/', function () {
    return view('home');
})->name('home');

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

// Route::re('user', UsersController::class);
Route::get('/user/login', [UsersController::class, 'showLoginForm']);
Route::post('/user/login', [UsersController::class, 'login']);
Route::get('/logout', [UsersController::class, 'logout'])->name("logout");
Route::resource('/user', UsersController::class);
Route::resource('/bug', BugsController::class);