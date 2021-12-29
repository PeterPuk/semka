@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('css/uvod.css')}}" type="text/css">
</head>

@section('hlavnyObsah')
    <!DOCTYPE html>
    <html lang="en">
    <script>
        window.addEventListener('scroll', () => {
            let obsah = document.querySelector('.rowSpecial');
            let poziciaObsahu = obsah.getBoundingClientRect().top;
            let poziciaObrazovky = window.innerHeight;
            if (poziciaObsahu < poziciaObrazovky) {
                obsah.classList.add('active');
            } else {
                obsah.classList.remove('active');
            }
        });
        window.addEventListener('scroll', () => {
            let obsah = document.querySelector('.rowSpecialDva');
            let poziciaObsahu = obsah.getBoundingClientRect().top;
            let poziciaObrazovky = window.innerHeight;
            if (poziciaObsahu < poziciaObrazovky) {
                obsah.classList.add('active');
            } else {
                obsah.classList.remove('active');
            }
        });
    </script>
    <body>
    <!--Hlavny obsah-->
    <h1 class="hlavnyNadpis">
        Obchod, kde sa sny o teniskách stávajú realitou.
    </h1>
    <div class="row">

        <div class="col-12 col-lg-1">

        </div>
        <div class="col-12 col-lg-12 ">
            <div id="carouselExampleCaptions" class="carousel slide odsadenyCarusel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/obrazky/obrazokDoCaruselu1.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption ">
                            <h5>Jedny z najikonickejších tenisiek všetkých čias, Air Jordan 1 mid v širokom spektre.
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/obrazky/druhyObrazokDoCaruselu.jpg" class="d-block w-100 h-300" alt="...">
                        <div class="carousel-caption">
                            <h5>Na prvom mieste ste pre nás Vy, zákaznícka linka 24/7!</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/obrazky/obrazokdoCaruseluPosledny.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Pridajte sa aj vy do viac ako tisícčlennej komunity! </h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-12 col-lg-1">

        </div>
        <div class="rowSpecial">
            <h1>
                Kto sme?
            </h1>
            <div class="col-3">

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 odstavec">
                <p class="odstavecUvod">
                    Sme firma plná mladých, kreatívnych a pracovitých ľudí. Každý z nich sa vie vcítiť do potrieb
                    zákazníkov
                    akéhokoľvek veku. Obuv, ktorú určite ocení aj ten najnáročnejčí človek na svete. Líšime sa od
                    druhých
                    hlavne výnimočnými modelmi športovej a vychádzkovej obuvy. Veľa z nich nie je možné len tak kúpiť a
                    je
                    potrebné si ju vyhľadať, čo trvá čas. A preto sme tu my ktorí to urobia za Vás.

                </p>

                <div class="col-10">

                </div>
            </div>
        </div>

        <img src="/obrazky/logoZmensene2.jpg" alt="" class="centrovanyObrazok">

        <!--Hlavny obsah KONIEC-->

    </div>
    @endsection
    </body>
    </html>
