<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $estudiante = new Estudiante();
        $estudiante->name = "Yandi";
        $estudiante->edad = 24;
        $estudiante->feu = false;
        $estudiante->save();
    }
}
