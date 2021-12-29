@extends('HlavickyAFootre.layoutNeprihlaseny')
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

    <link rel="stylesheet" href="{{asset('css/prihlasenie.css')}}">
</head>

@section("hlavnyObsah")
    <!DOCTYPE html>
    <html lang="en">
    <body>
    <!--koniec hlavicky-->


    <!--Hlavny obsah-->

    <h1 class="prihlasenie">
        Prihlásenie
    </h1>
    <form action = "{{route('hlavne.skontroluj')}}" method="post">
        @csrf
        <div class="obalovac">
            <input type="email" name="mail" placeholder="e-mail @" required value="{{old('mail')}}">
            <span class="chyba">@error('mail') {{$message}} @enderror</span>

            <input type="password" placeholder="Heslo" name="heslo" required>
            <span class="chyba">@error('heslo') {{$message}}@enderror</span>
            @if(Session::get('chyba'))
                <div class="chyba">
                    {{Session::get('chyba')}}
                </div>
            @endif

            <input type="submit" name="potvrditPrihlasenie" value="Prihlásiť">
        </div>
    </form>

    @endsection
    </body>
    </html>
