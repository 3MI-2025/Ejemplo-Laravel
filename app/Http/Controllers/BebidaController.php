<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{

    public function Index(){
        $bebidas = Bebida::all();
        return view("index", ["bebidas" => $bebidas]);
    }

    public function Insertar(Request $request){
        $bebida = new Bebida();
        $bebida->nombre = $request->post("nombre");
        $bebida->capacidad = $request->post("capacidad");
        $bebida->stock = $request->post("stock");
        $bebida->tipo = $request->post("tipo");
        $bebida->marca = $request->post("marca");
        $bebida->save();
        return redirect("/")->with("bebidaAgregada", true);
    }
   
}