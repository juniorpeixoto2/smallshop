<?php

use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\MaterialsModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('products List', function () {
    loginUser()
        ->postJson('/api/v1/products')
        ->assertStatus(200);
});

it('Products Store', function () {
    CategoriesModel::factory()->create();
    MaterialsModel::factory()->create();
    $product = ProductsModel::factory()->raw();

    loginUser()
        ->postJson('/api/v1/products/store', $product)
        ->assertJson(['messagem' => 'Produto Cadastrado']);

    $this->assertDatabaseHas('products', $product);
});

it('Products Show', function () {
    CategoriesModel::factory()->create();
    MaterialsModel::factory()->create();
    $product = ProductsModel::factory()->create();

    loginUser()
        ->post('/api/v1/products/' . $product->id)
        ->assertSee([$product->name, $product->id]);
});

it('Products Update', function () {
    CategoriesModel::factory()->create();
    MaterialsModel::factory()->create();
    $product = productsModel::factory()->create();
    $updated = ['name' => 'Updated Product'];

    loginUser()
        ->postJson('/api/v1/products/update/' . $product->id, $updated)
        ->assertJson(['messagem' => 'Produto Alterado']);

    $this->assertDatabaseHas('products', $updated);
});
