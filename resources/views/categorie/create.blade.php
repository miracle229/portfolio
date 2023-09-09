@extends('layouts.app')

@section('content')
<section class="about-us">
    <div class="row no-margin">
        <div  class="col-sm-6 cop-ck mx-auto">
            <form action="{{ route('categorie.store') }}" method="POST">
                <h2 >ADD CATEGORIE</h2>
                 @csrf
                <div class="row cf-ro">
                    <div  class="col-sm-3"><label>Title :</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control input-sm" value="{{ old('title') }}" >
                        @error('title')
                            <span class="text-danger mb-2">{{ $errors->first('title') }}</span>
                        @enderror
                    </div>
                </div>
                 <div  class="row cf-ro">
                    <div  class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection