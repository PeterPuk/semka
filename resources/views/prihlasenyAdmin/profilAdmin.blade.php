@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Admin/Profil </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css">
@endsection
@section('hlavnyObsah')
    <!DOCTYPE html>
    <html lang="en">
    <body>
    <h1 class="hlavnyNadpis">
        Administrátor
    </h1>
    <img src="/obrazky/profil.png" alt="" class="obrazokProfil">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                @foreach ($zakaznici as $zakaznik)
                    @if($zakaznik->id == session()->get('idPrihlaseneho'))
                        <tr class="w-auto">
                            <p>{{ $zakaznik->mail }}</p>
                            <p>{{ $zakaznik->heslo }}</p>
                    @endif
                @endforeach
            </div>
            <div class=" col-12 col-sm-12  col-md-5 col-lg-5">
                <div class="obalovac">
                    <form action="{{route('prihlasenyAdmin.updateMailAdmin')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required >
                        <input type="email" name="mail" placeholder="email" required>
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                        <span class="chyba">@error('mail'){{$message}} @enderror</span>
                    </form>
                </div>
                <div class="obalovac">
                    <form action="{{route('prihlasenyAdmin.updateHesloAdmin')}}" method="post">
                        @csrf
                        <input class="skryty" type="text" name="id" value="{{session()->get('idPrihlaseneho')}}"
                               required>
                        <input type="text" name="heslo" placeholder="heslo" required >
                        <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">
                        <span class="chyba">@error('heslo'){{$message}} @enderror</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>
    </html>




