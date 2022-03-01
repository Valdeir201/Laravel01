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

use App\Http\Controllers\TeleController;

Route::get('/', [TeleController::class, 'index']);

Route::get('/cadastrar', [TeleController::class, 'cadastrar']);


Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/perfil/{id?}', function ($id = null) {
    return view('perfil', ['id' => $id]);
});

Route::get('/infor/', function () {

    $busca = request('search');

    return view('infor', ['busca' => $busca]);
});
    
Route::get('/teste', function () {
    return ('Teste');
});

Route::get('/if', function () {
    return "IFRN";
    });

Route::get('/helo', function () {
    return "Helo World";
    });