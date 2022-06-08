@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou client
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
      <form method="post" action="{{ route('clients.store') }}">
	  <div class="form-group">
              @csrf
              <label for="Dni_client">Dni de client</label>
              <input type="text" class="form-control" name="Dni_client"/>
          </div>
          <div class="form-group">
              <label for="Nom_cognoms">Nom i cognoms</label>
              <input type="text" class="form-control" name="Nom_cognoms"/>
          </div>
          <div class="form-group">
              <label for="Edat">Edat</label>
              <input type="text" class="form-control" name="Edat"/>
          </div>
          <div class="form-group">
              <label for="Telefon">Telefon</label>
              <input type="text" class="form-control" name="Telefon"/>
          </div>
          <div class="form-group">
              <label for="Adreca">Adreca</label>
              <input type="text" class="form-control" name="Adreca"/>
          </div>
          <div class="form-group">
              <label for="Ciutat">Ciutat</label>
              <input type="text" class="form-control" name="Ciutat"/>
          </div>
          <div class="form-group">
              <label for="Pais">Pais</label>
              <input type="text" class="form-control" name="Pais"/>
          </div>
          <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" name="Email"/>
          </div>
          <div class="form-group">
              <label for="Numero_permis_conduccio">Numero de permis de conduccio</label>
              <input type="text" class="form-control" name="Numero_permis_conduccio"/>
          </div>
          <div class="form-group">
              <label for="Punts_permis_conduccio">Punts de permis de conduccio</label>
              <input type="text" class="form-control" name="Punts_permis_conduccio"/>
          </div>
          <div class="form-group">
              <label for="Tipus_targeta">Tipus_targeta</label>
              <input type="text" class="form-control" name="Tipus_targeta" value="credit"/>
          </div>
          <div class="form-group">
              <label for="Numero_targeta">Numero_targeta</label>
              <input type="text" class="form-control" name="Numero_targeta"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a>
@endsection
