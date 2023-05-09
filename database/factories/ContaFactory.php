<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conta>
 */
class ContaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => fake()->name(),
            'valor' => random_int(10, 500),
            'competencia' => now(),
            'emissao' => now(),
            'vencimento' => now(),
            'obs' => fake()->text()
        ];
    }
}
