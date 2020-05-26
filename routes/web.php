<?php

use App\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
});

//Ruta de controlador DB
Route::get("categorias/index", "CategoriaController@index");
//Ruta para crear una nueva categoria
Route::get("categorias/create" , "CategoriaController@create");
//Ruta para guardar la nueva categoria en BD
Route::post("categorias/store" , "CategoriaController@store");
//Ruta para mostrar el formulario para actualizar(cambiar nombre)
Route::get("categorias/edit/{idcategoria}", "CategoriaController@edit");
//Ruta para guardar cambios de categoria
Route::post("categorias/update/{idcategoria}", "CategoriaController@update");

Route::get('paises', function() {

    $paises = [ "Colombia" => [
                                "capital" => "Bogota",
                                "moneda"  => "Peso",
                                "poblacion" => 55,
                                "ciudades" => [
                                                "Cali", 
                                                "Medellin", 
                                                "Barranquilla"
                                              ]
                              ] ,
                "Ecuador" => [
                                "capital" => "Quito",
                                "moneda"  => "Dolar",
                                "poblacion" => 10,
                                "ciudades" => [
                                                "Guayaquil", "Manta", "Pichicha"
                                              ]
                              ] ,
                "Brasil" => [
                                "capital" => "Brazilia",
                                "moneda"  => "Real",
                                "poblacion" => 220,
                                "ciudades" => [
                                                "Santos", "Sao paulo", "Bahia"
                                              ]
                            ]
              ];

//pasar  el arreglo de paises a una vista
return view("paises")->with("paises", $paises);


});


