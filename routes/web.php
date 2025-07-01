<?php

use App\Http\Controllers\SimpleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route: callback function
Route::get('/hello', function () {
    return 'Hello World';
});

// route: view (resources/views/learn/learn.blade.php)
Route::view('/learn', 'learn.learn');

// route: controller method
Route::get('/about', [SimpleController::class, 'aboutMethod']);

// route parameter
Route::get('/simple/{id}', function ($id) {
    return 'Simple ' . $id;
});

// route parameter ke controller
Route::get('/show/{sebuahParam}', [SimpleController::class, 'showMethod']);

// route name
Route::get('/named', [SimpleController::class, 'namedMethod'])->name('named');

// route group (akses di /admin/grup dan /admin/kelompok)
Route::prefix('admin')->group(function () {
    Route::get('/grup', function () {
        return 'Admin Grup';
    });
    Route::get('/kelompok', function () {
        return 'Admin Kelompok';
    });
});
