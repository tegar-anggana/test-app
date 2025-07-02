<?php

use App\Http\Controllers\SimpleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route: Callback Functions and Route::view()
Route::get('/hello', function () {
    return 'Hello World';
});

// route: view (resources/views/learn/learn.blade.php)
Route::view('/learn', 'learn.learn');

// route: Routing to a Single Controller Method
Route::get('/about', [SimpleController::class, 'aboutMethod']);

// Route Parameters
Route::get('/simple/{id}', function ($id) {
    return 'Simple ' . $id;
});

// route parameter ke controller
Route::get('/show/{sebuahParam}', [SimpleController::class, 'showMethod']);

// Route Naming
Route::get('/named', [SimpleController::class, 'namedMethod'])->name('named');

// Route Groups (akses di /admin/grup dan /admin/kelompok)
Route::prefix('admin')->group(function () {
    Route::get('/grup', function () {
        return 'Admin Grup';
    });
    Route::get('/kelompok', function () {
        return 'Admin Kelompok';
    });
});

// Displaying Variables in Blade
Route::get('/myblade', [SimpleController::class, 'myBladeMethod']);
