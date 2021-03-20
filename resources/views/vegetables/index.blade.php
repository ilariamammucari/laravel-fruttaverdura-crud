@extends('layouts.app')
@section('titolo', 'Verdura')

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
            @foreach ($verdure as $verdura)   
            <tr>
                <th scope="row">{{ $verdura->id }}</th>
                <td>{{ $verdura->nome }}</td>
                <td>{{ $verdura->prezzo }} €</td>
                <td>
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('vegetables.show', $verdura->id) }}">Dettagli</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="{{ route('vegetables.edit', $verdura->id) }}">Modifica</a>
                    </button>
                    <form class="d-inline-block" method="post" action="{{ route('vegetables.destroy', $verdura->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            Cancella
                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    
    <div>
        <button type="button" class="btn btn-success">
            <a href="{{ route('vegetables.create') }}">Aggiungi Verdura</a>
        </button>
    </div>
</div>
@endsection