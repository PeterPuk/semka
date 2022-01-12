@extends('HlavickyAFootre.layoutPrihlasenyAdmin')

<head>
    <meta charset="UTF-8">
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
        Tenisky
    </h1>

    <div class="pridatTenisku">
        <a href="/prihlasenyAdmin/pridatTenisku"
           class="btn btn-secondary">Pridať tenisku
        </a>
    </div>

    <table class="table table-striped table-dark  table-hover overflow-x:auto">
        <thead>
        <tr>
            <th>id</th>
            <th>cena</th>
            <th>velkost</th>
            <th>nazov</th>
            <th>znacka</th>
            <th>obrazok</th>
            <th>operacia</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($topanky as $topanka)
            <tr class="w-auto">
                <td>{{ $topanka->id }}</td>
                <td>{{ $topanka->cena }}</td>
                <td>{{ $topanka->velkost }}</td>
                <td>{{ $topanka->nazov }}</td>
                <td>{{ $topanka->znacka }}</td>
                <td>{{ $topanka->obrazok }}</td>
                <td>
                    <a href="delete/{{$topanka->id}}"
                       class="btn btn-danger">Vymazať
                    </a>
                </td>
        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
