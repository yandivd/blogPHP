<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $curso  = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'Casi como django';
        $curso->category = 'Desarrollo Web';
        $curso->save();
        
        $curso  = new Curso();
        $curso->name = 'Django';
        $curso->description = 'El mejor';
        $curso->category = 'Desarrollo Web';
        $curso->save();
        
        $curso  = new Curso();
        $curso->name = 'Python';
        $curso->description = 'Lenguaje tixa';
        $curso->category = 'Desarrollo';
        $curso->save();
    }
}
