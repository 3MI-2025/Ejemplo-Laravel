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

   
}