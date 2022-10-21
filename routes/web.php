<?php

use App\Mail\MensagemTesteMail;
use GuzzleHttp\Middleware;
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

Auth::routes(['verify' => true ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('verified');

Route::resource('produto', 'App\Http\Controllers\ProdutoController')
->middleware('verified');

Route::resource('venda', 'App\Http\Controllers\VendaController')
->middleware('verified');

Route::resource('cliente', 'App\Http\Controllers\ClienteController')
->middleware('verified');

Route::get('mensagem-teste', function (){
    return new MensagemTesteMail();
   // Mail::to('raphaeloliveira843@gmail.com')->send(new MensagemTesteMail());
   // return 'E-mail enviado com sucesso"';
});