@extends('layouts.app')
@section('titolo', 'Modifica verdura')

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
    
    <form method="POST" action="{{ route('vegetables.update', $verdura->id) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input value="{{ $verdura->nome }}" name="nome" type="text" class="form-control" id="inputNome">
    </div>
    <div class="form-group">
        <label for="inputPeso">Peso</label>
        <input value="{{ $verdura->peso }}" name="peso" type="text" class="form-control" id="inputPeso">
    </div>
    <div class="form-group">
        <label for="inputStagione">Stagione</label>
        <select name="stagione" id="inputStagione">
            <option value="autunno"{{ $verdura->stagione == 'autunno' ? 'selected=selected' : '' }}>Autunno</option>
            <option value="inverno"{{ $verdura->stagione == 'inverno' ? 'selected=selected' : '' }}>Inverno</option>
            <option value="primavera"{{ $verdura->stagione == 'primavera' ? 'selected=selected' : '' }}>Primavera</option>
            <option value="estate" {{ $verdura->stagione == 'estate' ? 'selected=selected' : '' }}>Estate</option>
        </select>
    
    </div>
    <div class="form-group">
        <label for="inputPrezzo">Prezzo</label>
        <input value="{{ $verdura->prezzo }}" name="prezzo" type="text" class="form-control" id="inputPrezzo">
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection