@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Úvod </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
@endsection

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
