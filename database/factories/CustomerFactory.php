<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'First_name'=>$this->faker->name,
            'CNIC'=>$this->faker->randomDigit,
            'Product_Purchase'=>$this->faker->name,
            'Address'=>$this->faker->name,
            'employee_id'=>$this->faker->randomDigit
        ];
    }
}
