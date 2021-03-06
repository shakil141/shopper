<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'user_name' => $this->faker->userName,
            'phone_number' => $this->faker->phoneNumber,
            'user_email' => $this->faker->email,
            'password' => Hash::make(123456789),
            'confirm_password' => Hash::make(123456789),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
