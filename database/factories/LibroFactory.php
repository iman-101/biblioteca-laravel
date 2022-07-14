<?php

namespace Database\Factories;
use  App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'isbn'=>fake()->unique()->numerify('#################'),
            'titulo'=>fake()->sentence(10),
            'editorial'=>fake()->sentence(),
            'idioma'=>fake()->randomElement(['Espagnol','Itali','English']),
            'autor'=>fake()->name(),
            'edadrecomendada'=>fake()->numerify('##'),
            'ediciones'=>fake()->numerify('##'),
            
        ];

//         $faker->numerify('###-###-####');
// // "766-620-7004"

// $faker->numerify('##########');
// // "3579786681"
// $this->faker->bothify('?###??##') // 1efr38qa
    }
}
