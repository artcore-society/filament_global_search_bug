<?php

namespace Database\Factories;

use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    protected $model = Serie::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
