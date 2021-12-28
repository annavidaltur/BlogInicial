<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    // Name of the factory corresponding model
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(); 
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->sentence(),
            'categoria' => $this->faker->randomElement(['web', 'diseño', 'front-end', 'back-end'])
        ];
    }
}
