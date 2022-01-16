@extends('HlavickyAFootre.HlavnyLayoutUvod')
@section('title')
    <title>Pánske </title>
@endsection

@section('scriptCss')

    <link rel="stylesheet" href="{{asset('css/damskePanske.css')}}">
@endsection

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
