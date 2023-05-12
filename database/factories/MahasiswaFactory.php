<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->randomNumber(8),
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'kelas' => $this->faker->randomElement(['6A', '6B', '6C', '6D', '6E']),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Mesin', 'Teknik Industri', 'Teknik Pangan', 'Teknik Planologi']),
            'no_handphone' => $this->faker->phoneNumber(),
            'tanggal_lahir' => $this->faker->date(),

            
        ];
    }
}
