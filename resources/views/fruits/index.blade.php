@extends('layouts.app')
@section('titolo', 'Frutta')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($frutti as $frutto)   
            <tr>
                <th scope="row">{{ $frutto->id }}</th>
                <td>{{ $frutto->nome }}</td>
                <td>{{ $frutto->prezzo }} €</td>
                <td>
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('fruits.show', $frutto->id) }}">Dettagli</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="{{ route('fruits.edit', $frutto->id) }}">Modifica</a>
                    </button>
                    <form class="d-inline-block" method="POST" action="{{ route('fruits.destroy', $frutto->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <button type="button" class="btn btn-success">
            <a href="{{ route('fruits.create') }}">Aggiungi Frutto</a>
        </button>
    </div>
</div>
@endsection