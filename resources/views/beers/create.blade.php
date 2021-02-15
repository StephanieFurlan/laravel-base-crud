@extends('beers.layout')

@section('content')
    <div class="container mt-5">
        <h1>Inserisci una birra</h1>
        <form action="{{ route('beers.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Birra</label>
                <input type="text" class="form-control" name="name">
            </div>
            @error('name')
                <div class="alert alert-danger">Nome obbligatorio.</div>
            @enderror
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantità</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            @error('quantity')
                <div class="alert alert-danger">Quantità obbligatoria.</div>
            @enderror
            <div class="mb-3">
                <label for="alcohol" class="form-label">Tasso Alcolico</label>
                <input type="text" class="form-control" name="alcohol">
            </div>
            @error('alcohol')
                <div class="alert alert-danger">Tasso alcolico obbligatorio.</div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price">
            </div>
            @error('price')
                <div class="alert alert-danger">Prezzo obbligatorio.</div>
            @enderror
            
            <a class="btn btn-secondary" href="{{route('beers.index')}}">Torna alla Home</a>
            <button type="submit" class="btn btn-primary">Salva Birra</button>
        </form>
    </div>
    
@endsection