<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


route::get('/test', function (Request $req) {

    // dd($req->header->all()); //pegar todos os cabecalhos que ta vindo na requisicao

    //dd($req->headers->get('Authorization')); //pegar um  cabecalho especifico 


    $response = new \Illuminate\Http\response(json_encode(['msg' => 'minha primeira api']));
    $response->header('content-Type', 'application/json');  //alterando o cabecalho content-type dizendo que ela é app/json
    return $response;
});


//products route
route::namespace('App\Http\Controllers\Api')->group(function () {

    route::get('/products', 'ProductController@index');
    route::get('/products/{id}', 'ProductController@show');
    route::post('/products', 'ProductController@save'); //->middleware('auth.basic'); //middleware para autenticar
    route::put('/products', 'ProductController@update');
    route::patch('/products', 'ProductController@update'); //atualizando linha especifica dos produtos
    route::delete('/products/{id}', 'ProductController@delete');


    route::resource('/users', 'UserController');
});
