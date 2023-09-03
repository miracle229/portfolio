<div class="home-screen container-fluid">
    <div class="home-cover">
          <div id="menu-jk" class="header">
             <div class="container">
                 <div class="row">
                     <div class="col-md-3 logo">
                         <img class="logo-wt" src="{{ url('assets/images/logo.png') }}" alt="">
                         <img class="logo-gry" src="{{url(' assets/images/logo-gray.png') }}" alt="">
                         
                         <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                     </div>
                     <div id="menu" class="col-md-9 d-none d-md-block">
                         <ul>
                             <li><a href="{{ route('home') }}">Home</a></li>
                             <li><a href="{{ route('about') }}">About Us</a></li>
                             <li><a href="{{ route('services') }}">Services</a></li>
                             <li><a href="{{ route('skills') }}">Skills</a></li>
                             <li><a href="{{ route('testimonial.index') }}">Testimonial</a></li>
                             <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                             <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
    </div>
  </div>