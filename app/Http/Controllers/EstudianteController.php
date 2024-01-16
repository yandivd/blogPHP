<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        return "Index de los estudiantes";
    }

    public function create(){
        return "Se crea un estudiante";
    }

    public function show($id){
        return "Estudiante numero $id";
    }
}
