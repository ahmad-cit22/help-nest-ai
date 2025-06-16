<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('chat');
});

Route::get('/users', function () {
    $users = \App\Models\User::all();
    return $users;
});
