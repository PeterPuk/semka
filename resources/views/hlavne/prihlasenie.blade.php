@extends('HlavickyAFootre.HlavnyLayoutUvod')
@section('title')
    <title>Prihlásenie</title>
@endsection

@section('scriptCss')

    <link rel="stylesheet" href="{{asset('css/prihlasenie.css')}}">
@endsection

@section("hlavnyObsah")
    <!DOCTYPE html>
    <html lang="en">
    <body>

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
            <a class="linkRegistracia" href="/hlavne/registracia">Registrácia  TU!</a>
        </div>
    </form>

    @endsection
    </body>
    </html>
