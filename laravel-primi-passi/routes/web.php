<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'title' => 'Benvenuto nel nostro sito',
        'description' => 'Laravel è un framework per applicazioni web con
        una sintassi espressiva ed elegante',
        'steps' => [
            'composer create-project laravel/laravel example-app',
            'composer global require laravel/installer',
            'laravel new example-app',
            'cd example-app',
            'php artisan serve'
        ]
    ];
    return view('home');
});

Route::get('/features', function () {
    return view('features');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('faqs', function () {
    return view('faqs');
});
Route::get('/about', function () {
    return view('about');
});