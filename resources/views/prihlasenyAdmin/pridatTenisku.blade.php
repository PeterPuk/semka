@extends('HlavickyAFootre.layoutPrihlasenyAdmin')
@section('title')
    <title>Pridať tenisku </title>
@endsection

@section('scriptCss')
    <link rel="stylesheet" href="{{asset('css/registracia.css')}}">
@endsection
@section('hlavnyObsah')
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="registracia">
                    Pridanie tenisky
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="{{route('prihlasenyAdmin.ulozit')}}" enctype="multipart/form-data" method="post">

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
                    <input type="number" step="any"  name="cena" placeholder="cena" required value="{{old('cena')}}">
                    <span class="chyba">@error('cena'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="number" name="velkost" placeholder="velkost" required value="{{old('velkost')}}">
                    <span class="chyba">@error('velkost'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="nazov" placeholder="nazov" required value="{{old('nazov')}}">
                    <span class="chyba">@error('nazov'){{$message}} @enderror</span>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="pohlavie" placeholder="1-zenske, 0-muzske"
                           required value="{{old('pohlavie')}}"> <br>
                    <span class="chyba">@error('pohlavie'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="number" name="mnozstvo" placeholder="mnozstvo" required value="{{old('mnozstvo')}}">
                    <span class="chyba">@error('mnozstvo'){{$message}} @enderror</span>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="file" placeholder="obrazok" name="obrazok" required id="file" onchange=" return kontrolaTypuSuboru()">
                    <span class="chyba">@error('obrazok'){{$message}} @enderror</span>
                </div>
            </div>

            <div class="row">
                <div class=" col-12 col-sm-12 col-lg-5 col-xl-5"></div>

                <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                    <input type="submit" name="potvrditPridanie" value="Pridať">
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>
            </div>
        </form>
    </div>

    @endsection
    </body>
    </html>
