<?php

namespace Modules\Company\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Company\Entities\Info::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->name(),
            'age' => rand(18, 70),
            'email' => fake()->unique()->safeEmail(),
            'job' => 'design',
            'user_id' => rand(1, 10),
        ];
    }
}

