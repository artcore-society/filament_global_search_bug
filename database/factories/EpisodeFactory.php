<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    protected $model = Episode::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'serie_id' => $this->faker->randomNumber(),
        ];
    }
}
