@extends('disseny')

@section('content')

<h1>Llista d'autos</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># Dni de client</td>
          <td>Nom i cognoms</td>
          <td>Edat</td>
          <td>Telefon</td>
          <td>Adreça</td>
          <td>Ciutat</td>
          <td>Pais</td>
          <td>Email</td>
          <td>Numero de permis de conduccio</td>
          <td>Punts de permis de conduccio</td>
          <td>Tipus de targeta</td>
          <td>Numero de targeta</td>
        </tr>
    </thead>
    <tbody>
        @foreach($client as $cli)
        <tr>
            <td>{{$cli->Dni_client}}</td>
            <td>{{$cli->Nom_cognoms}}</td>
            <td>{{$cli->Edat}}</td>
            <td>{{$cli->Telefon}}</td>
            <td>{{$cli->Adreca}}</td>
            <td>{{$cli->Ciutat}}</td>
            <td>{{$cli->Pais}}</td>
            <td>{{$cli->Email}}</td>
            <td>{{$cli->Numero_permis_conduccio}}</td>
            <td>{{$cli->Punts_permis_conduccio}}</td>
            <td>{{$cli->Tipus_targeta}}</td>
            <td>{{$cli->Numero_targeta}}</td>
            <td class="text-left">
                <a href="{{ route('clients.edit', $cli->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a>
@endsection
