<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Posting;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     */
        protected $model = Posting::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'body'  => $this->faker->sentence(20),
            'created_at' => $this->faker->dateTimeBetween('-30 days', now()),
        ];
    }
}
