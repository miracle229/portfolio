<?php

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







Route::get('/ad_testimonial', function () {
    return view('ad_testimonial');
})->name('ad_testimonial');


Route::post('/ad_testimonial/store', function (Request $request) {

    $request->validate([
        'auteur' => ['required', 'min:3', 'string'],
        'poste' => ['nullable', 'min:4', 'string'],
        'commentaires' => ['required','string'],
        'image' => 'nullable|file|image'
    ]);

    $file_path = $request->image->store('public');

    $ad_testimonial = Ad_testimonial::create([
        'auteur'=>$request->auteur,
        'poste'=>$request->poste,
        'commentaires'=>$request->commentaires,
        'image'=>$file_path
    ]);

    return redirect()->route('testimonial');
    //return view('ad_testimonial', compact('ad_testimonial'));
    //return redirect()->route('home');
   // return view('contact',compact('nom','email','telephone','message'));
})->name('ad_testimonial.store');

Route::get('/testimonial', function () {
    $ad_testimonials = Ad_testimonial::all();
    return view('testimonial', compact('ad_testimonials'));
})->name('testimonial');


Route::get('/ad_testimonial/view/{id}', function($id, $type){

    $ad_testimonial =  Contact::where('id',$id)->first();
    return  view('ad_testimonial_view', compact('ad_testimonial'));
})->name('ad_testimonial.view');

//Route::get('/', 'HomeController@home');
