@extends('HlavickyAFootre.layoutPrihlaseny')
@section('title')
    <title>Prihlásený/Objednávka </title>
@endsection

@section('scriptCss')
    <script src="{{asset('javascript/kontrolaVstupov.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/registracia.css')}}">
@endsection

<!DOCTYPE html>
<html lang="en">

<body>
@section('hlavnyObsah')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="registracia">
                    Objednávka tenisky
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="ulozitObjednavku/{{$topanka->id}}/{{session()->get('idPrihlaseneho')}}"  method="post">
            @csrf
            <div class="row">
                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3"></div>

                <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                    <label>
                        Zvoľte typ doručenia:
                    </label>
                    <select class="form-select" aria-label="Default select example" name="doprava">
                        <option value="Kurier">Kuriér</option>
                        <option value="Posta">Pošta</option>
                    </select>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>

                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" step="any"  name="meno" placeholder="meno" required value="{{old('meno')}}">
                    <span class="chyba">@error('meno'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="priezvisko" placeholder="priezvisko" required value="{{old('priezvisko')}}">
                    <span class="chyba">@error('priezvisko'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="adresa" placeholder="adresa" required value="{{old('adresa')}}">
                    <span class="chyba">@error('adresa'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="mesto" placeholder="mesto"
                           required value="{{old('mesto')}}"> <br>
                    <span class="chyba">@error('mesto'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="number" name="psc" placeholder="psc"
                           onkeyup="skontrolujPSC(this)" onfocusout="" required value="{{old('psc')}}">
                    <span id="psc"></span>
                    <span class="chyba">@error('psc'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="submit" name="objednat" value="Objednať">
                </div>
            </div>

        </form>
    </div>


@endsection
</body>
</html>

