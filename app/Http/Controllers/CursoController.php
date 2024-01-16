<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Index page";
    }

    public function create(){
        return "Aqui se crea un curso";
    }

    public function show($curso){
        return "detalles del curso $curso";
    }
}
