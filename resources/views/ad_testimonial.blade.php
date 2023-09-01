@extends('layouts.app')

@section('content')
<section class="about-us">
    <div class="row no-margin">
        <div  class="col-sm-6 cop-ck mx-auto">
            <form action="{{ route('ad_testimonial.store') }}" method="POST" enctype="multipart/form-data">
                <h2 >ADD TESTIMONIAL</h2>
                 @csrf
                <div class="row cf-ro">
                    <div  class="col-sm-3"><label>Auteur :</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="auteur" class="form-control input-sm" value="{{ old('auteur') }}" >
                        @error('auteur')
                            <span class="text-danger mb-2">{{ $errors->first('auteur') }}</span>
                        @enderror
                    </div>
                </div>
                <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Poste :</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="poste" class="form-control input-sm"  value="{{ old('poste') }}">
                        @error('poste')
                            <span class="text-danger">{{ $errors->first('poste') }}</span>
                        @enderror
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Image:</label></div>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control input-sm" >
                        @error('image')
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @enderror
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label>Commentaire :</label></div>
                    <div class="col-sm-8">
                      <textarea rows="5" name="commentaires" class="form-control input-sm">{{ old('commentaires') }}</textarea>
                    </div>
                    @error('commentaires')
                            <span class="text-danger">{{ $errors->first('commentaires') }}</span>
                    @enderror
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