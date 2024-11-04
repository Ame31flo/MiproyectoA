<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VersesController extends Controller
{
    public function index(){
        $nombre= "America Sherlim";
        $apellidos= "Flores Pech";
        return view('versiculos.versiculofav1')
	        ->with('minombre', $nombre)
            ->with('miapellido', $apellidos);
              
    }
}
