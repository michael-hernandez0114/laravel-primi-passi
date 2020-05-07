@php

$arrayProdotti = config('products');

//dd($cards);

$lunghe = [];
$corte = [];
$cortissime = [];

foreach ($arrayProdotti as $key => $value) {
    if ($value['tipo'] == 'lunga') {
        $lunghe[$key] = $value;
    }
    elseif ($value['tipo'] == 'corta') {
        $corte[$key] = $value;
    }
    elseif ($value['tipo'] == 'cortissima') {
        $cortissime[$key] = $value;
    }
}

//dd($lunghe);
//dd($corte);
//dd($cortissime);

$prodotto = $arrayProdotti[$id];

@endphp

@extends('layout.user')
@section('titolo')
    Prodotti
@endsection
@section('main')

        <main>
            <div class="prodotto">
                <h1>{{$prodotto['titolo']}}</h1>
                <div class="img-block">
                    <img src="{{$prodotto['src-h']}}" alt="">
                </div>
                <div class="img-block">
                    <img src="{{$prodotto['src-p']}}" alt="">
                </div>
                <p>{!! $prodotto['descrizione'] !!}</p>

            </div>

        </main>
@endsection
