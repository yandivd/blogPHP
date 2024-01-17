<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Curso;
use  App\Models\User;

class CursoController extends Controller
{
    public function index(){
        $contador = 0;
        //obtener los cursos  cuya categoria es 'Desarrollo web' ordenados por id descendentemente
        $cursos = Curso::where('category','Desarrollo Web')->orderBy('id','desc')->get();

        //Obtener todos los usuarios
        $users = User::all();

        $primer_curso = Curso::where('category','Diseño Web')->first();

        //obtener un curso especifico
        $curso_per_id = Curso::find(5);

        //obtener solo el nombre de todos los cursos
        $cursos_solo_name = Curso::select('name as title','category')->orderBy('id','desc')->where('category','Diseño Web')->take(5)->get();

        $cursos_mayores = Curso::where('id','>','45')->orderBy('id','desc')->get();

        //cursos q contienen una palabra
        $cursos_contienen_palabra = Curso::where('name','like','% Manolo %')->get();

        //Recorrer todos los usuarios e incrementar un contador por cada uno de ellos
        for ($i = 0; $i < count($users); $i++){
            //Imprimir el usuario en cuestion
            // printf($users[$i]);
            //Incrementar el contador
            $contador++;
            //Imprimir el valor del contador
            // print($contador);
        }
        //Retornar el array de usuarios 
        return view('cursos.index');
    }

    public function create(){
        return "Aqui se crea un curso";
    }

    public function show($curso){
        return "detalles del curso $curso";
    }
}
