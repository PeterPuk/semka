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


    <link rel="stylesheet" href="{{asset('css/uvod.css')}}" type="text/css">
</head>

@section('hlavnyObsah')
    <!DOCTYPE html>
    <html lang="en">
    <body>

    <h1 class="hlavnyNadpis">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentcolor"
             class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
        Toto je zoznam všetkých zákazníkov.
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
                @if($zakaznik->id !=6)
                <td>
                    <a href="delete/{{$zakaznik->id}}"
                       class="btn btn-danger">Vymazať
                    </a>
                </td>
            @endif
        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
