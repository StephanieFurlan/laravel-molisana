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
    $data = config('pasta');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $key => $pasta) {
        $pasta['id'] = $key;
        if ($pasta['tipo'] =="lunga") {
            $lunghe[] = $pasta;
        } elseif ($pasta['tipo'] =="corta")  {
            $corte[] = $pasta;
        } else {
            $cortissime[] = $pasta;
        }
    }
    return view('home', [
        'lunghe' =>  $lunghe,
        'corte' => $corte,
        'cortissime' => $cortissime
        ]
    );
})->name('home');


Route::get('/product/{id}', function ($id) {
    $data = config('pasta');
    $product = $data[$id];
    return view('product', [
        'product' => $product,
        'id' => $id,
        'maxId' => count($data) - 1
    ]);
})->name('product');


Route::get('/news', function () {
    return view('news');
})->name('news');
