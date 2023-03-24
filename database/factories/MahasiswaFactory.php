<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Mahasiswa;   // <-- Add this line


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
            'nim' => $this->faker->numberBetween(2141720000, 2141729999),
            'nama' => $this->faker->name,
            'kelas_id' => $this->faker->numberBetween(1, 3),
            'jurusan' => "Teknologi Informasi",
            'no_handphone' => $this->faker->e164PhoneNumber,
            'email' => fake()->unique()->email(),
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
        ];
    }
}
