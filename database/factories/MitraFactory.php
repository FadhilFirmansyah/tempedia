<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitra>
 */
class MitraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "mitra" => $this->faker->word(),
            "nama" => $this->faker->name(),
            "alamat" => $this->faker->sentence(),
            "slug" => $this->faker->unique()->slug(),
            "deskripsi" => $this->faker->paragraph()
        ];
    }
}
