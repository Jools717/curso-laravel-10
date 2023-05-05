<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Hola, esta es la página principal";
    //return view('welcome');
});

//Este código es para que la ruta sea estatica:
Route::get('/contacto', function () {
    return "Hola, esta es la página de contacto";
});


Route::get('/productos/información', function () {
    return "Esta es toda la información del producto";
});

//Este código es para que la ruta sea variable:

Route::get('/productos/{producto}', function ($producto) {
        
    return "Este es el producto: $producto" ;
        
});
    

//Este es el código si queremos una variable sea opcional:

// Route::get('/productos/{producto}/{categoria?}', function ($producto, $categoria = null) {
        
// if($categoria){
//     return "Este es el producto: $producto, de la categoría: $categoria";
// }else{
//     return "Este es el producto: $producto";
// }    

// });

    