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
    
    
    <form method="POST" action="{{ route('fruits.update', $frutto->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="inputNome">Nome</label>
            <input value="{{ $frutto->nome }}" name="nome" type="text" class="form-control" id="inputNome">
        </div>
        <div class="form-group">
            <label for="inputPeso">Peso</label>
            <input value="{{ $frutto->peso }}" name="peso" type="text" class="form-control" id="inputPeso">
        </div>
        <div class="form-group">
            <label for="inputStagione">Stagione</label>
            <select name="stagione" id="inputStagione">
                <option value="autunno" {{ $frutto->stagione == 'autunno' ? 'selected=selected' : '' }}>Autunno</option>
                <option value="inverno" {{ $frutto->stagione == 'inverno' ? 'selected=selected' : '' }}>Inverno</option>
                <option value="primavera" {{ $frutto->stagione == 'primavera' ? 'selected=selected' : '' }}>Primavera</option>
                <option value="estate" {{ $frutto->stagione == 'estate' ? 'selected=selected' : '' }}>Estate</option>
            </select>
    
        </div>
        <div class="form-group">
            <label for="inputPrezzo">Prezzo</label>
            <input value="{{ $frutto->prezzo }}" name="prezzo" type="text" class="form-control" id="inputPrezzo">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    </div>
</div>
@endsection