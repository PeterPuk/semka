@extends('HlavickyAFootre.HlavnyLayoutUvod')
@section('title')
    <title>Detail </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

<!DOCTYPE html>
<html lang="en">
<body>
@section('hlavnyObsah')
    <div class="container-fluid obalNeprihlaseny">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 col-x-6">
                <div class="card">
                    <img class="card-img-top obrazok" src="{{ asset('Obrazky/'.$topanka->obrazok)}}"
                         alt="nenacitalo sa ">
                </div>
            </div>

            <div class="col-12 col-sm-12 col-lg-6 col-x-6">
                <div class="obalTextu">
                    <h4>{{$topanka->nazov}}</h4>
                    <p class="odstavec"><strong>Cena:</strong> {{$topanka->cena}}€ </p>
                    <p class="odstavec"><strong>Veľkosť:</strong> {{$topanka->velkost}} </p>
                    <p class="odstavec"><strong>Značka:</strong> {{$topanka->znacka}} </p>
                    <p class="odstavec"><strong>Počet kusov na sklade:</strong> {{$topanka->mnozstvo}}</p>
                    <a class="kupit" href="/hlavne/prihlasenie">Kúpiť</a>
                </div>
            </div>


        </div>
    </div>


@endsection

</body>
</html>

