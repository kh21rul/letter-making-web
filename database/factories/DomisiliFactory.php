<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domisili>
 */
class DomisiliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noSurat' => $this->faker->unique()->numberBetween(1, 100),
            'nama' => $this->faker->name,
            'tempatTglLahir' => $this->faker->city . ', ' . $this->faker->date('d-m-Y'),
            'kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'negara' => $this->faker->country,
            'pendidikan' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'pekerjaan' => $this->faker->jobTitle,
            'status_pernikahan' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Cerai Hidup', 'Cerai Mati']),
            'nik' => $this->faker->unique()->numberBetween(1, 100),
            'alamat' => $this->faker->address,
            'keterangan' => $this->faker->text(100),
            'ttd' => $this->faker->name,
        ];
    }
}
