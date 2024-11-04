<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index(){
        $nombre= "Ana";
        $apellidos= "Canche Flores";
        return view('Citas.versiculo1')
	        ->with('minombre', $nombre)
            ->with('miapellido', $apellidos);
    }
}
