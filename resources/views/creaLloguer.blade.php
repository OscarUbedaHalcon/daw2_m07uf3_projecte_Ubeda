@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou lloguer
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
      <form method="post" action="{{ route('lloguers.store') }}">
          <div class="form-group">
              @csrf
              <label for="Dni_client">Dni de client</label>
              <input type="text" class="form-control" name="Dni_client"/>
          </div>
          <div class="form-group">
              <label for="Matricula_auto">Matricula de auto</label>
              <input type="text" class="form-control" name="Matricula_auto"/>
          </div>
          <div class="form-group">
              <label for="Data_prestec">Data del prestec</label>
              <input type="text" class="form-control" name="Data_prestec"/>
          </div>
          <div class="form-group">
              <label for="Data_devolucio">Data de devolucio</label>
              <input type="text" class="form-control" name="Data_devolucio"/>
          </div>
          <div class="form-group">
              <label for="Lloc_devolucio">Lloc de devolucio</label>
              <input type="text" class="form-control" name="Lloc_devolucio"/>
          </div>
          <div class="form-group">
              <label for="Preu_dia">Preu per dia</label>
              <input type="text" class="form-control" name="Preu_dia"/>
          </div>
          <div class="form-group">
              <label for="Prestec_retorn_diposit_ple">Prestec amb retorn de diposit ple</label>
              <input type="text" class="form-control" name="Prestec_retorn_diposit_ple"/>
          </div>
          <div class="form-group">
              <label for="Tipus_assegunanca">Tipus d'assegurança</label>
              <input type="text" class="form-control" name="Tipus_assegunanca" value="completo"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('lloguers') }}">Accés directe a la Llista de lloguers</a>
@endsection
