<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Curso::class;
    
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->randomElement(["Introduccion ","Caracteristicas ","Programacion "]) . $this->faker->randomElement(["de robots","de robotica","de automatizacion"]),
            'ClaveCurso' => $this->faker->unique()->regexify('Rob'.'[1-3]{1}[0-3]{1}[1-9]{1}'),
            'Kit' => $this->faker->randomElement(['Kit de inicio','Kit de Robotica educacional',"Kit5"])
        ];
    }
}


