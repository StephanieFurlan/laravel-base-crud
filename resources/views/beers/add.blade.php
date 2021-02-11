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
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantità</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            <div class="mb-3">
                <label for="alcohol" class="form-label">Tasso Alcolico</label>
                <input type="text" class="form-control" name="alcohol">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price">
            </div>
            
            <button type="submit" class="btn btn-secondary">Indietro</button>
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
    
@endsection