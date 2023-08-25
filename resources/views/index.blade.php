@extends('layouts.app')

@section('content')
<div class="home-screen container-fluid">
    <div class="home-cover">
        <div class="container">
            <div class="row home-detail">
               <div class="col-md-5 animated bounceInLeft hom-img">
                   <img src="{{ url('assets/images/name.png') }}" alt="">
               </div>
               <div class="col-md-7 animated bounceInRight homexp">
                    <h5>Hello I'm</h5>
                    <h2>{{ $name }}</h2>
                    <span>Professional <a >Freelance Web Designer</a> </span>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    
                    <ul class="socil-icon">
                         <li>
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fab fa-instagram"></i></a> 
                         </li>
                         <li>
                             <a href="#"><i class="fab fa-pinterest-p"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fab fa-dribbble"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fab fa-behance"></i></a>
                         </li>
                    </ul>
                </div>
            </div>
        
         </div>
    </div>
</div>


@endsection
        
       