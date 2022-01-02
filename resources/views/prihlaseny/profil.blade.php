@extends('HlavickyAFootre.layoutPrihlaseny')
<head>
    <meta charset="UTF-8">
    <title>prihlaseny/profil</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">

</head>
@section('hlavnyObsah')
    <!DOCTYPE html>
    <html lang="en">
    <body>
    <h1 class="hlavnyNadpis">
        Váš profil
    </h1>

    <img src="/obrazky/profil.png" alt="" class="obrazokProfil">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                @foreach ($zakaznici as $zakaznik)
                    @if($zakaznik->id == session()->get('idPrihlaseneho'))
                        <tr class="w-auto">
                            <p>{{ $zakaznik->meno }}</p>
                            <p>{{ $zakaznik->priezvisko }}</p>
                            <p>{{ $zakaznik->mail }}</p>
                            <p>{{ $zakaznik->tel_cislo }}</p>
                            <p>{{ $zakaznik->heslo }}</p>
                    @endif
                @endforeach
            </div>
            <div class=" col-12 col-sm-12  col-md-6 col-lg-6">
                <div class="obalovac">
                    <form action="{{route('prihlaseny.updateMeno')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="text" name="meno" placeholder="meno" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                    </form>
                </div>
                <div class="obalovac">
                    <form action="{{route('prihlaseny.updatePriezvisko')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="text" name="priezvisko" placeholder="priezvisko" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                    </form>
                </div>
                <div class="obalovac">
                    <form action="{{route('prihlaseny.updateMail')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="email" name="mail" placeholder="email" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                    </form>
                </div>
                <div class="obalovac">
                    <form action="{{route('prihlaseny.updateCislo')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="text" name="tel_cislo" placeholder="tel_cislo" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                    </form>

                </div>
                <div class="obalovac">
                    <form action="{{route('prihlaseny.updateHeslo')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="text" name="heslo" placeholder="heslo" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>
    </html>




