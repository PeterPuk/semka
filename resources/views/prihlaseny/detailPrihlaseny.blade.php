@extends('HlavickyAFootre.layoutPrihlaseny')
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
    <div class="container-fluid obal">
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
                    <a class="kupit" href="objednavka/{{$topanka->id}}">Kúpiť</a>

                </div>
            </div>

        </div>

        <div class="row">
            <h1 class="nadpis">
                Hodnotenia:
            </h1>
            <form action="ulozitHodnotenie/{{$topanka->id}}/{{session()->get('idPrihlaseneho')}}" method="post">
                @if(Session::get('uspesne'))
                    <div class="uspesne">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>
                        {{Session::get('uspesne')}}
                    </div>
                @endif

                @if(Session::get('chyba'))
                    <div class="alert alert-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>
                        {{Session::get('chyba')}}
                    </div>
                @endif
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-3 col-x-3"></div>

                    <div class="col-12 col-sm-12 col-lg-6 col-x-6">
                    <textarea name="hodnotenie" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3"
                              value="Napíšte hodnotenie..." required>

                    </textarea>

                        <span class="chyba">@error('hodnotenie'){{$message}}@enderror</span>

                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 col-x-3"></div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-5 col-x-5"></div>

                    <div class="col-12 col-sm-12 col-lg-2 col-x-2">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Pridať hodnotenie</button>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-5 col-x-5"></div>
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-lg-4 col-x-4"></div>

            <div class="col-12 col-sm-12 col-lg-4 col-x-4">
                @foreach($hodnotenia as $hod)
                    <div class="card carty">
                        @foreach($zakaznici as $zakaznik)
                            @if($hod->id_zakaznik == $zakaznik->id)
                                <div class="card-header">
                                    <strong>Zákazník: </strong>{{$zakaznik->meno}}
                                </div>
                            @endif

                        @endforeach
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p><strong>Hodnotenie: </strong>{{$hod->hodnotenie}}</p>
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-sm-12 col-lg-4 col-x-4"></div>

        </div>
    </div>

@endsection
<!--Footer-->
</body>
</html>

