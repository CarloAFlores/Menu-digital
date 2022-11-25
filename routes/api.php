<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Articulo;
use App\Models\Categorium;
use App\Models\Subcategorium;
use App\Http\Controllers\menudigital;

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
/* Route::get('/articulo/{id}',function($id){

    $articuloz = Articulo::all()->where('id',$id);
    return response()->json([
        "Articulos"=>$articuloz
    ]);

});

Route::get('/categoria/{id}',function($id){
    $categoriaz = Categorium::all()->where('id',$id);
    return response()->json([
        "categoria" => $categoriaz
    ],200);

});

Route::get('/sub_categoria/{id}',function($id){
    $sub_categoriaz= Subcategorium::all()->where('id',$id);
    return response()->json([
        "sub_categoria"=>$sub_categoriaz
    ],200);

});  */



Route::get('/articulo/{id}',[menudigital::class,"articuloz"]);
Route::get('/categoria/{id}',[menudigital::class,"categoriaz"]);
Route::get('/sub_categoria/{id}',[menudigital::class,"sub_categoriaz"]);

Route::post('/articulo',[menudigital::class,"busqueda"]);
Route::post('/categoria',[menudigital::class,"busquedaDos"]);
Route::post('/sub_categoria',[menudigital::class,"busquedaTres"]);
