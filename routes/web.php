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

    $nome = 'irineu';
    $idade = 20;

    $arr = [10,20,30,40,50];
    $nomes = ['jesus', 'maria', 'josé'];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => 'programador',
        'arr' => $arr,
        'nomes' => $nomes,
    ]);
});

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('produtos/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});