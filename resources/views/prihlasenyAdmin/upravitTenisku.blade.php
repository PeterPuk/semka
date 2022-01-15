@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
<head>
    <meta charset="UTF-8">
    <title>SneakField/UpravitTenisku </title>

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
                    Upravenie tenisky
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="upravit/{{$topanka->id}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3"></div>

                <div class="col-12 col-sm-12 col-lg-6 col-xl-6">
                    <label>
                        Zvoľte značku:
                    </label>
                    <select class="form-select" aria-label="Default select example" name="znacka">
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Air Jordan">Air Jordan</option>
                        <option value="Vans">Vans</option>
                    </select>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>

                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Cena:</label>
                    <input type="number" step="any"  name="cena" placeholder="cena" required value="{{$topanka->cena}}">
                    <span class="chyba">@error('cena'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Veľkosť:</label>
                    <input type="number" name="velkost" placeholder="velkost" required value="{{$topanka->velkost}}">
                    <span class="chyba">@error('velkost'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Názov:</label>
                    <input type="text" name="nazov" placeholder="nazov" required value="{{$topanka->nazov}}">
                    <span class="chyba">@error('nazov'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Pohlavie:</label>
                    <input type="text" name="pohlavie" placeholder="1-zenske, 0-muzske"
                           required value="{{$topanka->pohlavie}}"> <br>
                    <span class="chyba">@error('pohlavie'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Množstvo:</label>
                    <input type="number" name="mnozstvo" placeholder="mnozstvo" required value="{{$topanka->mnozstvo}}">
                    <span class="chyba">@error('mnozstvo'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <label>Obrázok:</label>
                    <input  placeholder="obrazok" name="obrazok" required value="{{$topanka->obrazok}}">
                    <span class="chyba">@error('obrazok'){{$message}} @enderror</span>
                </div>
            </div>

            <div class="row">
                <div class=" col-12 col-sm-12 col-lg-5 col-xl-5"></div>

                <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                    <input type="submit" name="potvrditPridanie" value="Upraviť">
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>
            </div>
        </form>
    </div>
    <!--Hlavny obsah koniec-->

    @endsection
    </body>
    </html>
