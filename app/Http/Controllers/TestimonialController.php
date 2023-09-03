<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad_testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $ad_testimonials = Ad_testimonial::all();
        return view('testimonial.index', compact('ad_testimonials'));
    }

    public function create(){
        return view('testimonial.create');
    }

    public function store(Request $request){
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
    
        return redirect()->route('testimonial.index');
    }

    public function show($id)
    {
        $ad_testimonial =  Ad_testimonial::where('id',$id)->first();
        return  view('testimonial.show', compact('ad_testimonial'));
    }


}
