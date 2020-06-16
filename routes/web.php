<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  $cards = config('pasta');

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
  $card = $cards[$id];
  
    return view('showPasta', compact('card'));
}) -> name ('showPasta');
