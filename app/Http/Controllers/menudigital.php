<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorium;
use App\Models\Articulo;
use App\Models\Subcategorium;


class menudigital extends Controller
{
    //Metodos GET
    public function articuloz(Request $request,$id){
        $articulo = new Articulo();
        $articulo -> id = $request -> id;
        $articulo = Articulo::all()->only($id);
        return response()->json($articulo);
    }

    public function categoriaz(Request $request, $id){
        $categoria = new Categorium();
        $categoria -> id = $request -> id;
        $categoria = Categorium::all()->only($id);
        return response() -> json($categoria);
    }

    public function sub_categoriaz(Request $request, $id){
        $sub_categoria = new Subcategorium();
        $sub_categoria -> id = $request ->id;
        $sub_categoria=Subcategorium::all()->only($id);
        return response() -> json($sub_categoria);

    }
    //Metodos POST

    public function busqueda(Request $request){
        $busquedaa = new Articulo();
        $codigo = $busquedaa ->id=$request->id;
        $busquedaa = Articulo::all()->only($codigo);
        return response()->json($busquedaa);
    }

    public function busquedaDos(Request $request){
        $busquedaa = new Categorium();
        $codigo = $busquedaa ->id=$request->id;
        $busquedaa = Categorium::all()->only($codigo);
        return response()->json($busquedaa);
    }

    public function busquedaTres(Request $request){
        $busquedaa = new Subcategorium();
        $codigo = $busquedaa ->id=$request->id;
        $busquedaa = Subcategorium::all()->only($codigo);
        return response()->json($busquedaa);
    }


}
