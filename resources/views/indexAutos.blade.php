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
          <td># Matricula Auto</td>
          <td>Numero de bastidor</td>
          <td>Marca</td>
          <td>Model</td>
          <td>Color</td>
          <td>Nombre de Places</td>
          <td>Nombre de Portes</td>
          <td>Grandaria de maleter</td>
          <td>Tipus de combustible</td>
        </tr>
    </thead>
    <tbody>
        @foreach($auto as $aut)
        <tr>
            <td>{{$aut->Matricula_auto}}</td>
            <td>{{$aut->Numero_bastidor}}</td>
            <td>{{$aut->Marca}}</td>
            <td>{{$aut->Model}}</td>
            <td>{{$aut->Color}}</td>
            <td>{{$aut->Nombre_places}}</td>
            <td>{{$aut->Nombre_portes}}</td>
            <td>{{$aut->Grandaria_maleter}}</td>
            <td>{{$aut->Tipus_combustible}}</td>
            <td class="text-left">
                <a href="{{ route('autos.edit', $aut->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('autos.destroy', $aut->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('autos/create') }}">Accés directe a la vista de creació d'autos</a>
@endsection
