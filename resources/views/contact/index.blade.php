@extends('layouts.app')

@section('content')
<div class="container-fluid about-us">
    <div class="container">
        <div class="mt-4 table-responsive">
            <h1> Liste des contacts</h1>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr> 
                        <td>
                            Nom
                        </td>
                        <td>
                            Email
                        </td>
                        <td>
                            Téléphone
                        </td>
                        <td>
                            Message
                        </td>
                        <td colspan="3">
                            Options
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                {{ $contact->name }}
                            </td>
                            <td>
                                {{ $contact->email }}
                            </td>
                            <td>
                                {{ $contact->phone }}
                            </td>
                            <td>
                                {{ $contact->message }}
                            </td>
                            <td>
                                <a  class=" btn btn-primary" href="{{ route('contact.create', ['contact'=>$contact->id]) }}"> Voir</a>
    
                                {{-- <a  class=" btn btn-primary" href="{{ route('contact.view', $contact->id ) }}"> Voir</a> --}}
                            </td>
                            <td>
                                <a  class=" btn btn-success" href="{{ route('contact.create', ['contact'=>$contact->id]) }}"> Modifier</a>
    
                                {{-- <a  class=" btn btn-primary" href="{{ route('contact.view', $contact->id ) }}"> Voir</a> --}}
                            </td>
                            <td>
                                <a  class=" btn btn-danger" href="{{ route('contact.create', ['contact'=>$contact->id]) }}"> Supprimer</a>
    
                                {{-- <a  class=" btn btn-primary" href="{{ route('contact.view', $contact->id ) }}"> Voir</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection