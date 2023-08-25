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
    $name = "Miracle BOCOVO";
    return view('index',['name'=>$name]);
})->name('home');

Route::get('/about', function () {
    $name = "Miracle BOCOVO";
    return view('layouts.about',['name'=>$name]);
})->name('about');

Route::get('/skills', function () {
    return view('layouts.skills');
})->name('skills');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('/services', function () {
    return view('layouts.services');
})->name('services');

Route::get('/testimonial', function () {
    return view('layouts.testimonial');
})->name('testimonial');

Route::get('/portfolio', function () {
    return view('layouts.portfolio');
})->name('portfolio');


//Route::get('/', 'HomeController@home');
