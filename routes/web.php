<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  $cards = config('pasta');
  $collection = collect($cards)->map(function ($item, $key) {
    $item['id'] = $key;
    return $item ;
  });

  $lunga = $collection -> WHERE('tipo','lunga');
  $corta = $collection -> WHERE('tipo','corta');
  $cortissima = $collection -> WHERE('tipo','cortissima');

    return view('home',compact('lunga','corta','cortissima'));
}) -> name ('home');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name ('contacts');

Route::get('/showPasta/{id}', function ($id) {

  $cards = config('pasta');
  $collection = collect($cards) ->map(function ($item, $key) {
    $item['id'] = $key;
    return $item ;
  });

  $card = $collection->where('id', $id)->first();


    return view('showPasta', compact('card'));
}) -> name ('showPasta');
