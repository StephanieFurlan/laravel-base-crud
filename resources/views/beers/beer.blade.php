@extends('beers.layout')


@section('content')
<div class="container mt-5">
    <h1>Info: {{ $beer->name }}</h1>
    <table class="table table-dark">
        <tr>
            <th>Nome</th>
            <td>{{ $beer->name }}</td>
        </tr>
        <tr>
            <th>Quanità</th>
            <td>{{ $beer->quantity }} L</td>
        </tr>
        <tr>
            <th>Tasso alcolico</th>
            <td>{{ $beer->alcohol }} %</td>
        </tr>
        <tr>
            <th>Prezzo</th>
            <td>{{ $beer->price }} €</td>
        </tr>
    </table>
    <div class="text-right">
        <a class="btn btn-success mt-2 mb-2" href="{{ route('beers.index')}}">Home Page</a>
    </div>
    <form action="{{ route('beers.destroy') }}">
        @csrf
        @method('DELETE')
        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
    </form>
</div>
@endsection