<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name ('home');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name ('contacts');
