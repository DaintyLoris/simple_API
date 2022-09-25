<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(), 200);
    }

    public function getCategoriaIndex($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Registro no encontrado!'], 404);
        }
        return response()->json($categoria::find($id), 200);
    }

    public function insertarCategoria(Request $request){
        $categoria = categoria::create($request->all());
        return response($categoria, 200);
    }

    public function actualizarCategoria(Request $request, $id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado!'], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function eliminarCategoria($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado!'], 404);
        }
        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado!'], 200);
    }

}
