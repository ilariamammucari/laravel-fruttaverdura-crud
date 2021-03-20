@extends('layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('fruits.store') }}">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="inputNome">Nome</label>
            <input name="nome" type="text" class="form-control" id="inputNome">
        </div>
        <div class="form-group">
            <label for="inputPeso">Peso</label>
            <input name="peso" type="text" class="form-control" id="inputPeso">
        </div>
        <div class="form-group">
            <label for="inputStagione">Stagione</label>
            <select name="stagione" id="inputStagione">
                <option value="autunno">Autunno</option>
                <option value="inverno">Inverno</option>
                <option value="primavera">Primavera</option>
                <option value="estate">Estate</option>
            </select>
    
        </div>
        <div class="form-group">
            <label for="inputPrezzo">Prezzo</label>
            <input name="prezzo" type="text" class="form-control" id="inputPrezzo">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    </div>
</div>
@endsection