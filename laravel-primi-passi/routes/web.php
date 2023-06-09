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

// ************** HOME **************
Route::get('/', function () {
    $data = [
        'title' => 'Benvenuto nella Home del nostro sito',
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
    return view('home', $data);
});

// ************** FEATURES **************
Route::get('/features', function () {
    $title = 'Benvenuto in Features';
    $description = 'Quì troverai le nostre caratteristiche';
    return view('features', compact('title', 'description'));
})->name('features');

// ************** PRICING **************
Route::get('/pricing', function () {
    $data = [
        'title' => 'Benvenuto in Pricing',
        'plans' => [
            '1 Mese',
            '3 Mesi',
            '6 Mesi',
            '1 Anno'
        ],
        'prices' => [
            10,
            25,
            40,
            60
        ]
    ];
    return view('pricing', $data);
})->name('pricing');

// ************** FAQS **************
Route::get('faqs', function () {
    $title = 'Benvenuto nelle FAQS';
    return view('faqs', compact('title'));
})->name('faqs');

// ************** ABOUT **************
Route::get('/about', function () {
    $title = 'Benvenuto in About';
    return view('about', compact('title'));
})->name('about');