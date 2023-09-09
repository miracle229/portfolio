@extends('layouts.app')

@section('content')
<div class="container-fluid about-us">
    <div class="container">
        <div class="mt-4 table-responsive">
            <h1> Liste des categories</h1>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr> 
                        <td>
                            Titre
                        </td>
                        <td colspan="2">
                            Options
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <td>
                                {{ $categorie->title }}
                            </td>
                            <td>
                                <a  class=" btn btn-primary" href="{{ route('categorie.create', ['categorie'=>$categorie->id]) }}"> Modifier</a>
    
                                {{-- <a  class=" btn btn-primary" href="{{ route('contact.view', $contact->id ) }}"> Voir</a> --}}
                            </td>
                            <td>
                                <a  class=" btn btn-danger" href="{{ route('categorie.create', ['categorie'=>$categorie->id]) }}"> Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection