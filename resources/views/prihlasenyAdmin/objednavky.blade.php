@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Objednávky </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
@endsection

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
