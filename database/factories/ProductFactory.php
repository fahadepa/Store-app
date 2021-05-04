<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
            'Product_name'=>$this->faker->name,
            'Product_id'=>$this->faker->randomDigit,
            'Purchase_date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Expire_date'=>$this->faker->creditCardExpirationDate,
        ];
    }
}
