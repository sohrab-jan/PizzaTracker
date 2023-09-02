<?php

namespace Database\Factories;

use App\Pizza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PizzaFactory extends Factory
{
    protected $model = Pizza::class;

    public function definition()
    {
        $toppingChoices = [
            'Extra Choice',
            'Black Olives',
            'Pepperoni',
            'Sausage',
            'Anchovies',
            'Jalapenos',
            'Onion',
            'Chicken',
            'Ground Beef',
            'Green Peppers',
        ];

        $toppings = [];

        for ($i = 1; $i <= rand(1, 4); $i++) {
            $Toppings[] = Arr::random($toppingChoices);
        }

        $toppings = array_unique($toppings);

        return [
            'id' => rand(11111, 99999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready']),
        ];
    }
}
