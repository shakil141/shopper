<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'product_type' => $this->faker->name,
            'product_store' => $this->faker->name,
            'product_special_search' => $this->faker->name,
            'product_name' => $this->faker->name,
            'product_slug' => $this->faker->name,
            'product_category' => $this->faker->name,
            'product_sub_category' => $this->faker->name,
            'product_brand' => $this->faker->name,
            'product_purchase_price' => $this->faker->numberBetween(1000,100000),
            'product_sale_price' => $this->faker->numberBetween(1000,100000),
            'product_unit' => $this->faker->name,
            'product_tag' => $this->faker->word,
            'alert_quantity' => $this->faker->numberBetween(10,1000),
            'status' => $this->faker->numberBetween(0,1),
            'product_description' => $this->faker->paragraph(3),
            'seo_friendly_title' => $this->faker->name,
            'seo_friendly_description' => $this->faker->paragraph(3),
            

        ];
    }
}
