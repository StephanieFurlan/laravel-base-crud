@extends('beers.layout')

@section('content')
    <div class="container">
        <h1 class="mt-5 float-start">Le mie birre</h1>
        <a href="{{ route('beers.create')}}">Add Beer</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quanità</th>
                    <th>Tasso alcolico</th>
                    <th>Prezzo</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
                <tr>
                    <td>{{ $beer->id }}</td>
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->quantity }} L</td>
                    <td>{{ $beer->alcohol }} %</td>
                    <td>{{ $beer->price }} €</td>
                    <td>
                        <a href="{{ route('beers.show', ['beer' => $beer->id])}}">Click me</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection