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
    <form method="post">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

            </div>

            <div class=" col-12 col-sm-12 col-lg-3 col-xl-3">
                <input type="text" name="meno" placeholder="meno" required>
            </div>

            <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                <input type="text" name="priezvisko" placeholder="priezvisko" required>
            </div>

            <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                <input type="email" name="mail" placeholder="email @" required>
            </div>

            <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                <input type="number" name="tel_cislo" placeholder="tel v tvare 09... "
                       onkeyup="zistiPocetCisel(this)" onfocusout=""
                       required> <br>
                <span id="tel_cislo"></span>
            </div>

            <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

            <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                <input type="password" placeholder="Heslo" name="heslo" required>
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
