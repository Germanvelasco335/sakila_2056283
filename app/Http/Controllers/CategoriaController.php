<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    //Accion:UN METODO DEL CONTROLLADOR, contienen el codigo a ejecutar
    //Nombre: puede ser cualquiera
    //recomendado el nombre en minuscula
    public function index(){    
        //seleccionar las categorias existentes
        $categorias = Categoria::paginate(5);
        //enviar la coleccion de categorias a una vista
        //y las vamos a mostrar alli
        return view("categorias.index")->with("categorias" , $categorias);
        
    }

    //mostrar el formulario de crear categoria
    public function create(){
        //echo "Formulario de Categoria";
        return view('categorias.new');
    } 

    //llegar los datos desde el formulario
    //guardar la categoria en BD
    public function store(){
        //validar datos
        //reglas de validacion para mis campos en el formulario
        $reglas = [
            "categoria" => ["required", "alpha", "min:4" , "unique:category,name"],
            
        ]; 

        //mensajes en español
        $mensajes = [
            "required" => "Campo Obligatorio",
            "alpha" => "Solo letras",
            "min" => "Solo categorias de :min caracteres",
            "unique" => "Categoria repetida"
        ];

        //aplicar la validacion
        //creando un objeto validador
        $validador = Validator::make($_POST, $reglas, $mensajes );

        //con los datos a validar y las reglas 
        //hacer comparacion de reglas 
        if($validador->fails()){
                //la validacion fallo?
                //redirigir al formulario con los mensajes de error
                //y tambien con los datos traidos desde el formulario
                return redirect("categorias/create")->withErrors($validador)->withInput();
        }else{
                //la validacion no falla?
                //Ejecucion del flujo normal del caso de uso
                //Crear una nueva categor
                $categoria = new Categoria();
                //asignar el nombre, desde formulario
                $categoria->name = $_POST["categoria"];
                //guardar la nueva categoria
                $categoria->save();
                //letrero de exito: por medio de un redireccionamiento
                //redireccionamos a rutas que tengamos en el web.php
                return redirect('categorias/create')->with("exito","Categoría registrada" );
        }
    }  

    //mostrar el formulario de actualizar
    public function edit($idcategoria){
        //seleccionar la categoria que tenga ese id
        $categoria = Categoria::find($idcategoria);
        return view('categorias.edit')-> with("categoria", $categoria);
    }

    //Guardar la categoria actualizada
    public function update(Request $r , $idcategoria){
        echo $_POST["id"];
    }
}