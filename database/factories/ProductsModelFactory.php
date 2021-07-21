<?php

namespace Database\Factories;

use App\Models\ProductsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsModelFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name' => 'Material Test',
            'ean' => rand(10000, 100000),
            'categorie_id' => 1,
            'material_id' => 1,
            'price' => 19.9,
            'size' => 'M',
            'quantity' => 20,
        ];
    }
}
