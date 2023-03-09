<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Como nota al margen, esto tambien funciona
        
        $Usuario = new Usuario();
        $Usuario->Nombre = "Admon";
        $Usuario->Email = "admon@robotics.com";
        $Usuario->Password = "Adm@2022";
        $Usuario->Grupos = null;
        $Usuario->Rol = "Administrativo";
        $Usuario->save();

        $Usuario1 = new Usuario();
        $Usuario1->Nombre = "Tecmilenio";
        $Usuario1->Email = "tecmilenio@robotics.com";
        $Usuario1->Password = "Adm@2022";
        $Usuario1->Grupos = "1";
        $Usuario1->Rol = "Profesor";
        $Usuario1->save();

        $Usuario2 = new Usuario();
        $Usuario2->Nombre = "Estudiante";
        $Usuario2->Email = "student@robotics.com";
        $Usuario2->Password = "Adm@2022";
        $Usuario2->Grupos = "1";
        $Usuario2->Rol = "Estudiante";
        $Usuario2->save();
    }
}


