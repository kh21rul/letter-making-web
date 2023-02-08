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
            'kodeSurat' => $this->faker->randomNumber(3),
            'noSurat' => $this->faker->randomNumber(3),
            'nama' => $this->faker->name,
            'nik' => $this->faker->randomNumber(),
            'tempatTglLahir' => $this->faker->word,
            'pekerjaan' => $this->faker->word,
            'alamat' => $this->faker->text,
            'keterangan' => $this->faker->text,
            'tglSurat' => $this->faker->date(),
            'ttd' => $this->faker->word,
            'namaTtd' => $this->faker->word,
        ];
    }
}
