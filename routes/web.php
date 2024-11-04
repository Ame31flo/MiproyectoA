<?php

use App\Http\Controllers\QuotesController;
use App\Http\Controllers\VersesController;
use Illuminate\Support\Facades\Route;
use app\Http\VersesControllers;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/biblia', function () {
    return view('inicio');
});


Route::get('/v1', function () {
    return view('versiculo1');
});

Route::get('/v2', function () {
    return view('versiculo2');
});

Route::get('/v3', function () {
    return view('versiculo3');
});

Route::get('/v4', function () {
    return view('versiculo4');
});

Route:: get('/versiculocontrolador', [VersesController::class, 'index']);

Route:: get('/citascontrolador', [QuotesController::class, 'index']);

/*Route::get('/insertarvalor', function () {
    
    $computer = new Computer;
    $computer->model='Legion';
    $computer->mark='Lénovo';
    $computer->size=16;
    $computer->colors='Gris';
    $computer->made= 'China';
    $computer->category= 'Laptop';
    $computer->save();

    return $computer;
});/*

/*Route::get('/insertarvalor', function () {
    
    $computer = new Computer;
    $computer->model='14-2ef';
    $computer->mark='HP';
    $computer->size=12;
    $computer->colors='Negro';
    $computer->made= 'México';
    $computer->category= 'Pórtatil';
    $computer->save();

    return $computer;
});/*

/*Route::get('/insertarvalor', function () {
    
    $computer = new Computer;
    $computer->model='MacBook';
    $computer->mark='Apple';
    $computer->size=14;
    $computer->colors='Blanco';
    $computer->made= 'Estados Unidos';
    $computer->category= 'PC';
    $computer->save();

    return $computer;
});/*


/*Route::get('/insertarvalor', function () {
    
    $computer = Computer::find(2);
    return $computer;

});/** */

/*Route::get('/insertarvalor', function () {

    $computer = Computer::where('colors', 'Blanco')->first();
    return $computer;

});/** */

/*Route::get('/insertarvalor', function () {

    $computer = Computer::where('made', 'China')->first();
    $computer->made = 'Turquia';
    $computer->save();
    return $computer;

});/** */

/*Route::get('/insertarvalor', function () {

    $computer = Computer::all();
    return $computer;

});/** */

/*Route::get('/insertarvalor', function () {

    $computer = Computer::find(2);
    $computer->delete();

      // el método delete borrará de la tabla el registro seleccionado
     
 });/*/

 Route::get('/insertarvalor', function () {
    
    /*$computer = new Computer;
    $computer->model='Es una computadora demostrativa';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=14;
    $computer->save();
    $computer = Computer::find(1);
    return $computer->published_at;/** */

    //SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

$computer = Computer::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
/*return $computer->published_at->format('d-m-Y');/** */
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
return $computer->published_at->diffForHumans();

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP
});