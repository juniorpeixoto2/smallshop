<?php

namespace Database\Factories;

use App\Models\CategoriesModel;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesModelFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoriesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name' => 'Categoria Teste',
        ];
    }
}
