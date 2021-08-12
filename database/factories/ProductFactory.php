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

            'product_type' => $this->faker->randomElement(array ('In Stock Space','Pre Order')),
            'product_store' => $this->faker->randomElement(array ('Blue 40','Pre Order')),
            'product_special_search' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'product_name' => $this->faker->name,
            'product_slug' => $this->faker->word,
            'product_category' => $this->faker->randomElement(array ('Pants','Shirts','Panjavi','T-shirt','Lehenga','Sari')),
            'product_sub_category' => $this->faker->randomElement( array ('Pants','Shirts','Panjavi','T-shirt','Lehenga','Sari')),
            'product_brand' => $this->faker->randomElement(array ('Blue 40','Expert Items')),
            'product_purchase_price' => $this->faker->numberBetween(1000,100000),
            'product_sale_price' => $this->faker->numberBetween(1000,100000),
            'product_unit' => $this->faker->randomElement(array ('Color & Size','Color','Size','Pc(s)')),
            'product_tag' => $this->faker->word,
            'alert_quantity' => $this->faker->numberBetween(10,1000),
            'product_status' => $this->faker->numberBetween(0,1),
            'product_description' => $this->faker->paragraph,
            'seo_friendly_title' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'seo_friendly_description' => $this->faker->paragraphs,
            

        ];
    }
}
