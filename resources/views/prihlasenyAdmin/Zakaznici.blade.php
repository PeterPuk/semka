@extends('HlavickyAFootre.layoutPrihlasenyAdmin')

<head>
    <meta charset="UTF-8">
    <title>Zákazníci</title>
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
        Zákazníci
    </h1>

    <table class="table table-striped table-dark  table-hover overflow-x:auto">
        <thead>
        <tr>
            <th>id_zakaznik</th>
            <th>meno</th>
            <th>priezvisko</th>
            <th>mail</th>
            <th>tel_cislo</th>
            <th>heslo</th>
            <th colspan="1">Operácia</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($zakaznici as $zakaznik)
            <tr class="w-auto">
                <td>{{ $zakaznik->id }}</td>
                <td>{{ $zakaznik->meno }}</td>
                <td>{{ $zakaznik->priezvisko }}</td>
                <td>{{ $zakaznik->mail }}</td>
                <td>{{ $zakaznik->tel_cislo }}</td>
                <td>{{ $zakaznik->heslo }}</td>
                <td>
                    @if($zakaznik->id !=6)
                    <a href="delete/{{$zakaznik->id}}"
                       class="btn btn-danger">Vymazať
                    </a>
                    @endif
                </td>

        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
