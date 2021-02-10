@extends('beers.layout')


@section('content')
<div class="container mt-5">
    <a href="{{ route('beers.index')}}">Home page</a>
    <h1>Beer Name: {{ $beer->name }}</h1>

    <p>Quantity: {{ $beer->quantity }} L</p>
    <p>Alcohol rate: {{ $beer->alcohol }} %</p>
    <p>Price: {{ $beer->price}} €</p>

</div>
    
    
@endsection