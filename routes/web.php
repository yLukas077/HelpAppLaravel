<?php

use Illuminate\Support\Facades\Route;



Route::get('/','MainController@Main' );

Route::get('/about', 'AboutController@About');

Route::get('/contact','ContactController@Contact');

Route::get(
    '/contact/{name}/{category_id}',
    function(string $name = "Desconhecido", int $category_id = 1) {
        echo "Listando: $name, $category_id";
    }
)->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');  