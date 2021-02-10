<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        
        <div class="container">
            <h1 class="mt-5">Le mie birre</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Quanità</th>
                        <th>Tasso alcolico</th>
                        <th>Prezzo</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
</html>
