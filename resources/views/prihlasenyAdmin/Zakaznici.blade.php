@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Admin/Zákazníci </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
@endsection

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
                    @if($zakaznik->id !=10)
                    <a href="deleteZakaznik/{{$zakaznik->id}}"
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
