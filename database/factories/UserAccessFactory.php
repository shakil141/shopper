<?php

namespace Database\Factories;

use App\Models\UserAccess;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAccessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAccess::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_email'=> $this->faker->email,
            'role_name'=> $this->faker->words(7,true)

        ];
    }
}
