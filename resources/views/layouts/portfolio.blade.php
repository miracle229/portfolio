@extends('layouts.app')

@section('content')
<div id="portfolio" class="gallery">    
    <div class="container">
       <div class="session-title row">
             <h2>Portfolio</h2>
             <p>Take a look at some of our latest work</p>
             <div class="heading-line"></div>
         </div>
       <div class="row">
         

 <div class="gallery-filter d-none d-sm-block">
     <button class="btn btn-default filter-button" data-filter="all">All</button>
     <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
     <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
     <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
     <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
 </div>
 <br/>



     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
         <img src="{{ url('assets/images/gallery/gallery_01.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
         <img src="{{ url('assets/images/gallery/gallery_02.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
         <img src="{{ url('assets/images/gallery/gallery_03.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
         <img src="{{ url('assets/images/gallery/gallery_04.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
         <img src="{{ url('assets/images/gallery/gallery_05.jpg') }}" class="img-responsive">
     </div>

   

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
         <img src="{{ url('assets/images/gallery/gallery_06.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
         <img src="{{ url('assets/images/gallery/gallery_09.jpg') }}" class="img-responsive">
     </div>

     <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
         <img src="{{ url('assets/images/gallery/gallery_08.jpg') }}" class="img-responsive">
     </div>

     
 </div>
</div>


</div>
@endsection