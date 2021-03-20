@extends('layouts.app')
@section('content')
<div class="container text-center">
    <h1>
        {{ $frutto->nome }}
    </h1>
    <p>Peso: {{ $frutto->peso }} Kg</p>
    <p>Stagione: {{ $frutto->stagione }}</p>
    <p>Prezzo: {{ $frutto->prezzo }} €</p>
</div>
@endsection