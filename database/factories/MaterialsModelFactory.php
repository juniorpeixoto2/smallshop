<?php

namespace Database\Factories;

use App\Models\MaterialsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialsModelFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaterialsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name' => 'Material Test',
        ];
    }
}
