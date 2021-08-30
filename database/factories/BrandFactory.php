<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_name' => $this->faker->company,
            'contact_person' => $this->faker->name,
            'contact_no' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->city,
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
