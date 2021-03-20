@extends('layouts.app')
@section('titolo', 'Dettagli verdura')
@section('content')
<div class="container text-center">
    <h1>
        {{ $verdura->nome }}
    </h1>
    <p>Peso: {{ $verdura->peso }} Kg</p>
    <p>Stagione: {{ $verdura->stagione }}</p>
    <p>Prezzo: {{ $verdura->prezzo }} €</p>
</div>
@endsection