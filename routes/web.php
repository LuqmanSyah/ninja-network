<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["id" => 1, "name" => "Naruto", "skill" => 16],
        ["id" => 2, "name" => "Sasuke", "skill" => 17],
        ["id" => 3, "name" => "Sakura", "skill" => 16],
    ];
    return view('ninjas.index', ["greeting" => "Hello, Ninjas!", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    $ninjas = [
        ["id" => 1, "name" => "Naruto", "skill" => 16],
        ["id" => 2, "name" => "Sasuke", "skill" => 17],
        ["id" => 3, "name" => "Sakura", "skill" => 16],
    ];
    return view('ninjas.show', ["id" => $id]);
});
