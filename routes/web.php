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
    return view('welcome');
});

Route::get('/wiki_php', function () {
    return "PHP — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений.";
});

Route::get('/wiki_lara', function () {
    return "Laravel — бесплатный веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC";
});

Route::get('/wiki_PStorm', function () {
    return "PhpStorm — коммерческая кросс-платформенная интегрированная среда разработки для PHP";
});
