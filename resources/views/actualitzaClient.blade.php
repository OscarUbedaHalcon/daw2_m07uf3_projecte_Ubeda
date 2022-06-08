@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('clients.update', $client->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="Dni_client">Dni de client</label>
                <input type="text" class="form-control" name="Dni_client" value="{{ $client->Dni_client }}" />
            </div>
            <div class="form-group">
                <label for="Nom_cognoms">Nom i Cognoms</label>
                <input type="text" class="form-control" name="Nom_cognoms" value="{{ $client->Nom_cognoms }}" />
            </div>
            <div class="form-group">
                <label for="Edat">Edat</label>
                <input type="text" class="form-control" name="Edat" value="{{ $client->Edat }}" />
            </div>
            <div class="form-group">
                <label for="Telefon">Telefon</label>
                <input type="text" class="form-control" name="Telefon" value="{{ $client->Telefon }}" />
            </div>
            <div class="form-group">
                <label for="Adreca">Adreca</label>
                <input type="text" class="form-control" name="Adreca" value="{{ $client->Adreca }}" />
            </div>
            <div class="form-group">
                <label for="Ciutat">Ciutat</label>
                <input type="text" class="form-control" name="Ciutat" value="{{ $client->Ciutat }}" />
            </div>
            <div class="form-group">
                <label for="Pais">Pais</label>
                <input type="text" class="form-control" name="Pais" value="{{ $client->Pais }}" />
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" name="Email" value="{{ $client->Email }}" />
            </div>
            <div class="form-group">
                <label for="Numero_permis_conduccio">Numero de permis de conduccio</label>
                <input type="text" class="form-control" name="Numero_permis_conduccio" value="{{ $client->Numero_permis_conduccio }}" />
            </div>
            <div class="form-group">
                <label for="Punts_permis_conduccio">Punts de permis de conduccio</label>
                <input type="text" class="form-control" name="Punts_permis_conduccio" value="{{ $client->Punts_permis_conduccio }}" />
            </div>
            <div class="form-group">
                <label for="Tipus_targeta">Tipus de targeta</label>
                <input type="text" class="form-control" name="Tipus_targeta" value="{{ $client->Tipus_targeta }}" />
            </div>
            <div class="form-group">
                <label for="Numero_targeta">Numero de targeta</label>
                <input type="text" class="form-control" name="Numero_targeta" value="{{ $client->Numero_targeta }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a
@endsection
