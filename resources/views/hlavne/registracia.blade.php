@extends('HlavickyAFootre.HlavnyLayoutUvod')
<head>
    <meta charset="UTF-8">
    <title>SneakField/Registracia </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="Javascript/kontrolaCisla.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/registracia.css')}}">
</head>
@section('hlavnyObsah')
    <body>
    <!--koniec hlavicky-->

    <!--Hlavny obsah-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="registracia">
                    Registrácia
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="{{route('hlavne.ulozit')}}" method="post">

            @if(Session::get('uspesne'))
                <div class="uspesne">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                    {{Session::get('uspesne')}}
                </div>
            @endif

            @if(Session::get('chyba'))
                <div class="alert alert-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                    {{Session::get('chyba')}}
                </div>
            @endif

            @csrf
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>

                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="meno" placeholder="meno" required value="{{old('meno')}}">
                    <span class="chyba">@error('meno'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="priezvisko" placeholder="priezvisko" required
                           value="{{old('priezvisko')}}">
                    <span class="chyba">@error('priezvisko'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="email" name="mail" placeholder="email @" required value="{{old('mail')}}">
                    <span class="chyba">@error('mail'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="number" name="tel_cislo" placeholder="tel v tvare 09... "
                           onkeyup="zistiPocetCisel(this)" onfocusout=""
                           required value="{{old('tel_cislo')}}"> <br>
                    <span id="tel_cislo"></span>
                    <span class="chyba">@error('tel_cislo'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="password" placeholder="pocet znakov od 6 do 15" name="heslo" required>
                    <span class="chyba">@error('heslo'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="submit" name="potvrditRegistraciu" value="Registrovať">
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">

    </div>
    <!--Hlavny obsah koniec-->

    @endsection
    </body>
    </html>
