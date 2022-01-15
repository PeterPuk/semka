@extends('HlavickyAFootre.layoutPrihlasenyAdmin')

<head>
    <meta charset="UTF-8">
    <title>Hodnotenia</title>
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
        Hodnotenia
    </h1>

    <table class="table table-striped table-dark  table-hover overflow-x:auto">
        <thead>
        <tr>
            <th>id</th>
            <th>id_zakaznik</th>
            <th>id_teniska</th>
            <th>hodnotenie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($hodnotenia as $hodnotenie)
            <tr class="w-auto">
                <td>{{ $hodnotenie->id }}</td>
                <td>{{ $hodnotenie->id_zakaznik }}</td>
                <td>{{ $hodnotenie->id_teniska }}</td>
                <td>{{ $hodnotenie->hodnotenie }}</td>
        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
