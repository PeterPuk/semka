@extends('HlavickyAFootre.HlavnyLayoutUvod')
<head>
    <meta charset="UTF-8">
    <title>SneakField/Panske </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/damskePanske.css')}}">
</head>

<!DOCTYPE html>
<html lang="en">

<body>
@section('hlavnyObsah')
<h1>
    Pánske
</h1>


    <div class="obal">
            <div class="d-flex justify-content-start flex-wrap">
                @foreach ($topanky as $topanka)
                    @if($topanka->pohlavie == 0)
                        <a href="detail/{{$topanka->id}}" class="link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('Obrazky/'.$topanka->obrazok)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5>{{$topanka->nazov}}</h5>
                                    <p >Cena: {{$topanka->cena}}€ </p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
    </div>
@endsection
</body>
</html>
