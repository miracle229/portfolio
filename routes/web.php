<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Ad_testimonial;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/skills', [HomeController::class, 'skills'])->name('skills');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
//return redirect()->route('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::resource('testimonial', TestimonialController::class);





// Route::post('/ad_testimonial/store', function (Request $request) {

   
//     //return view('ad_testimonial', compact('ad_testimonial'));
//     //return redirect()->route('home');
//    // return view('contact',compact('nom','email','telephone','message'));
// })->name('ad_testimonial.store');


//Route::get('/', 'HomeController@home');
