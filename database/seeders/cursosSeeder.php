<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Esto tambien funciona, hace lo mismo que dice el manual de laravel
        $curso = new Curso();
        $curso->Nombre = "Introduccion a robotica";
        $curso->claveCurso = "Rob101";
        $curso->Kit = "Kit de inicio";
        $curso->save();

        $curso2 = new Curso();
        $curso2->Nombre = "Introduccion a automatizacion";
        $curso2->claveCurso = "Rob102";
        $curso2->Kit = "Kit de inicio";
        $curso2->save();

        $curso3 = new Curso();
        $curso3->Nombre = "Programacion para robots";
        $curso3->claveCurso = "Rob103";
        $curso3->Kit = "Kit de Robotica educacional";
        $curso3->save();

        $curso4 = new Curso();
        $curso4->Nombre = "Caracteristicas de un robot";
        $curso4->claveCurso = "Rob104";
        $curso4->Kit = "Kit5";
        $curso4->save();
    }
}

