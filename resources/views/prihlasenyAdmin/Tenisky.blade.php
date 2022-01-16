@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Admin/Tenisky </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
@endsection

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
            <th>cena v € </th>
            <th>velkost</th>
            <th>nazov</th>
            <th>znacka</th>
            <th>obrazok</th>
            <th>pohlavie(zena-1, muz -0)</th>
            <th>mnozstvo(ks)</th>
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
                <td>{{$topanka->pohlavie}}</td>
                <td>{{$topanka->mnozstvo}}</td>
                <td>
                    <a href="prejdiNaFormular/{{$topanka->id}}"class="btn btn-success">Upraviť</a>
                    <a href="delete/{{$topanka->id}}"class="btn btn-danger">Vymazať</a>
                </td>
        @endforeach
        </tbody>
    </table>

    @endsection
    </body>
    </html>
