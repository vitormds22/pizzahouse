<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    //Imaginando pegar os valores do banco
    $pizza =  [
        'type' => 'hawaiian',
        'base' => 'cheesy crust',
        'price' => 10
    ];
    return view('pizzas', $pizza);
    //É possivel retornar qualquer coisa aqui, porém o mais comum é retornar a view mesmo
    // return 'pizzas!';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
});

