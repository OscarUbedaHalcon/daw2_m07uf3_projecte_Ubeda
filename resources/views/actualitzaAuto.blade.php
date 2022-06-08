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
        <form method="post" action="{{ route('autos.update', $auto->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="Matricula_auto">Matricula de auto</label>
                <input type="text" class="form-control" name="Matricula_auto" value="{{ $auto->Matricula_auto }}" />
            </div>
            <div class="form-group">
                <label for="Numero_bastidor">Numero de bastidor</label>
                <input type="text" class="form-control" name="Numero_bastidor" value="{{ $auto->Numero_bastidor }}" />
            </div>
            <div class="form-group">
                <label for="Marca">Marca</label>
                <input type="text" class="form-control" name="Marca" value="{{ $auto->Marca }}" />
            </div>
            <div class="form-group">
                <label for="Model">Model</label>
                <input type="text" class="form-control" name="Model" value="{{ $auto->Model }}" />
            </div>
            <div class="form-group">
                <label for="Color">Color</label>
                <input type="text" class="form-control" name="Color" value="{{ $auto->Color }}" />
            </div>
            <div class="form-group">
                <label for="Nombre_places">Nombre de places</label>
                <input type="text" class="form-control" name="Nombre_places" value="{{ $auto->Nombre_places }}" />
            </div>
            <div class="form-group">
                <label for="Nombre_portes">Nombre de portes</label>
                <input type="text" class="form-control" name="Nombre_portes" value="{{ $auto->Nombre_portes }}" />
            </div>
            <div class="form-group">
                <label for="Grandaria_maleter">Grandaria del maleter</label>
                <input type="text" class="form-control" name="Grandaria_maleter" value="{{ $auto->Grandaria_maleter }}" />
            </div>
            <div class="form-group">
                <label for="Tipus_combustible">Tipus de combustible</label>
                <input type="text" class="form-control" name="Tipus_combustible" value="{{ $auto->Tipus_combustible }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('autos') }}">Accés directe a la Llista d'autos</a
@endsection
