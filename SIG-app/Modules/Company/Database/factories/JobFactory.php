<?php

namespace Modules\Company\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Company\Entities\Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->name(),
            'remuneration' => rand(1200, 5000),
            'type' => 'CLT',
            'user_id' => '1',
            'status' => 'Ativo',
        ];
    }
}

