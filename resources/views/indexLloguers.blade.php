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
          <td>Matricula de auto</td>
          <td>Data del prestec</td>
          <td>Data de devolucio</td>
          <td>Lloc de devolucio</td>
          <td>Preu per dia</td>
          <td>Prestec amb retorn de diposit ple</td>
          <td>Tipus d'assegurança</td>
        </tr>
    </thead>
    <tbody>
        @foreach($lloguer as $llog)
        <tr>
            <td>{{$llog->Dni_client}}</td>
            <td>{{$llog->Matricula_auto}}</td>
            <td>{{$llog->Data_prestec}}</td>
            <td>{{$llog->Data_devolucio}}</td>
            <td>{{$llog->Lloc_devolucio}}</td>
            <td>{{$llog->Preu_dia}}</td>
            <td>{{$llog->Prestec_retorn_diposit_ple}}</td>
            <td>{{$llog->Tipus_assegunanca}}</td>
            <td class="text-left">
                <a href="{{ route('lloguers.edit', $llog->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('lloguers.destroy', $llog->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('lloguers/create') }}">Accés directe a la vista de creació de lloguers</a>
@endsection
