@extends('layouts.app')

@section('content')
<section id="cntact_us" class="contact-us-single">
    <div class="row no-margin">
        <div class="col-sm-6 no-padding">
             <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div  class="col-sm-6 cop-ck">
            <form action="{{ route('contact.store') }}" method="POST">
                <h2 >Contact Form</h2>
                 @csrf
                <div class="row cf-ro">
                    <div  class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" value="{{ old('name') }}" >
                        @error('name')
                            <span class="text-danger mb-2">{{ $errors->first('name') }}</span>
                        @enderror
                        <br>
                    </div>
                </div>
                <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="mail" placeholder="Enter Email Address" class="form-control input-sm"  value="{{ old('mail') }}">
                        @error('mail')
                            <span class="text-danger">{{ $errors->first('mail') }}</span>
                        @enderror
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="tel" placeholder="Enter Mobile Number" class="form-control input-sm" value="{{ old('tel') }}" >
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Enter  Message:</label></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm">{{ old('message') }}</textarea>
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-primary btn-sm">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>  
@endsection