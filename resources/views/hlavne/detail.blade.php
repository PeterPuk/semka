@extends('HlavickyAFootre.HlavnyLayoutUvod')
<head>
    <meta charset="UTF-8">
    <title>SneakField/Detail </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>

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
<!--Footer-->
</body>
</html>

