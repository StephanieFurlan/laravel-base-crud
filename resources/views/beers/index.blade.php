@extends('beers.layout')

@section('content')
    <div class="container">
        <h1 class="mt-5 float-start">Le mie birre</h1>
        <div class="text-right">
            <a class="btn btn-success mt-2 mb-2" href="{{ route('beers.create')}}"><i class="fas fa-plus"></i>Aggiungi Birra</a>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
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
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->quantity }} L</td>
                    <td>{{ $beer->alcohol }} %</td>
                    <td>{{ $beer->price }} €</td>
                    <td>
                        <a class="btn btn-light" href="{{ route('beers.show', $beer->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-light" href="{{ route('beers.edit', $beer->id) }}"><i class="fas fa-pencil-alt"></i></a>
                        <form style="display:inline-block" action="{{ route('beers.destroy', $beer->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection