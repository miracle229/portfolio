<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

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
    return view('about',['name'=>$name]);
})->name('about');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::post('/contact/store', function (Request $request) {

    $request->validate([
        'name' => ['required', 'min:3', 'string'],
        'mail' => ['required','email','unique'],
        'tel' => ['required'],
        'message' => 'nullable'
    ]);

    $contact = Contact::create([
        'name'=>$request->name,
        'email'=>$request->mail,
        'phone'=>$request->tel,
        'message'=>$request->message
    ]);

    return view('contact', compact('contact'));
    //return redirect()->route('home');

   // return view('contact',compact('nom','email','telephone','message'));
})->name('contact.store');

Route::get('/contact/list', function(){
    $contacts = Contact::all();
    return view('contacts_list', compact('contacts'));
})->name('contact.list');



//Route::get('/', 'HomeController@home');
