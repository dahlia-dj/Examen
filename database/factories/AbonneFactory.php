<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonne>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" =>Str::random(10),
            "age" => rand(21,100),
            "profession" => Str::random(30),
            "rue" => Str::random(30),
            "code_postal" =>Str::random(10),
            "ville" => Str::random(30),
            "pays" => Str::random(20),
            "tel" => $this->faker->phoneNumber(),
            "email" =>$this->faker->email(),
            "id_motivation" => rand(1,40),
        ];
    }
}
