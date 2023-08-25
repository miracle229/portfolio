@extends('layouts.app')

@section('content')

<div id="about_us" class="about-us container-fluid">
    <div class="container">
        <div class="session-title row">
             <h2>About Me</h2>
             <p>There are many variations of passages of Lorem Ipsum available Lorem Ipsum available but the majority</p>
             <div class="heading-line"></div>
         </div>
         <div class="about-row row">
            <div class="image-col col-md-4">
                <img src="{{ url('assets/images/about.png') }}" alt="">
                <button class="btn btn-primary"><i class="fas fa-download"></i> Download CV</button>
            </div>
            <div class="detail-col col-md-8">
                <h2>{{ $name }}</h2>
                 <h6>Freelance Web Designer</h6>
                 <p>There are many variations of passages of Lorem Ipsum available but the majority is have suffered alteration in that some form by injected humour or randomised that words which don't look even slightly believable. If you are going a to use a passage of Lorem Ipsum you need to be sure there isn't anything embarrassing. There are is many variations of passages available.</p>
                   <div class="row">
                     <div class="col-md-6 col-12">
                         <div class="info-list">
                             <ul>
                                 <li><span>Birthday:</span>05. 09.1987</li>
                                 <li><span>City:</span>Toranto</li>
                                 <li><span>Study:</span>Cambridge University</li>
                                 <li><span>Website:</span>www.smarteyeapps.com</li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-6 col-12">
                         <div class="info-list">
                             <ul>
                                 <li><span>Age:</span>31 Years</li>
                                 <li><span>Degree:</span>Master</li>
                                 <li><span>Mail:</span>email@example.com</li>
                                 <li><span>Phone:</span>+01 454 548 4458</li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 
                 
            </div>
             
             
           
         </div>
    </div>    
     
 </div>

 @endsection