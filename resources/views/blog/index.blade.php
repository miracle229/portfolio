@extends('layouts.app')

@section('content')
<div id="services"  class="services container-fluid">
    <div class="container">
        <div class="session-title row">
             <h2>BLOGS</h2>
             <p>There are many variations of passages of Lorem Ipsum available Lorem Ipsum available but the majority</p>
             <div class="heading-line"></div>
         </div>
         <div class="services-row row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 seric-div">
                    <div class="service-card">
                        <div class="img-box">
                            <img src="{{ Storage::url($blog->image->path) }}" alt="">
                          </div>
                        <h4>{{ $blog->title }}</h4>
                        <p>{{ $blog->categorie->title }}</p>
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            @endforeach
         </div>
       </div>
 </div>
@endsection