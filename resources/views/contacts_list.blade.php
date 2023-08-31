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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection