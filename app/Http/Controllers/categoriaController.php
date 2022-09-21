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
        echo $id;
    }

}
