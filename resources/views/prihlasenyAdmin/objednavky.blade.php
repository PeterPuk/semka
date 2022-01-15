@extends('HlavickyAFootre.layoutPrihlasenyAdmin')

<head>
    <meta charset="UTF-8">
    <title>Objednávky</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
</head>

@section('hlavnyObsah')
    <!DOCTYPE html>
    <html lang="en">
    <body>

    <h1 class="hlavnyNadpis">
        Objednávky
    </h1>

    <table class="table table-striped table-dark  table-hover overflow-x:auto">
        <thead>
        <tr>
            <th>id</th>
            <th>id_teniska </th>
            <th>id_zakaznik</th>
            <th>meno</th>
            <th>priezvisko</th>
            <th>adresa</th>
            <th>psc</th>
            <th>doprava</th>
            <th>operacia</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($objednavky as $objednavka)
            <tr class="w-auto">
                <td>{{ $objednavka->id }}</td>
                <td>{{ $objednavka->id_teniska }}</td>
                <td>{{ $objednavka->id_zakaznik }}</td>
                <td>{{ $objednavka->meno }}</td>
                <td>{{ $objednavka->priezvisko }}</td>
                <td>{{ $objednavka->adresa }}</td>
                <td>{{$objednavka->psc}}</td>
                <td>{{$objednavka->doprava}}</td>
                <td>
                    <a href="deleteObjednavku/{{$objednavka->id}}"class="btn btn-danger">Vybaviť</a>
                </td>
        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
