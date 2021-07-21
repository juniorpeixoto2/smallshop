<?php

use App\Models\CategoriesModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('Categories List', function () {
    loginUser()
        ->postJson('/api/v1/categories')
        ->assertStatus(200);
});

it('Categories Store', function () {
    $categorie = CategoriesModel::factory()->raw();

    loginUser()
        ->postJson('/api/v1/categories/store', $categorie)
        ->assertJson(['messagem' => 'Categoria Cadastrada']);

    $this->assertDatabaseHas('categories', $categorie);
});

it('Categories Show', function () {
    $categorie = CategoriesModel::factory()->create();

    loginUser()
        ->post('/api/v1/categories/' . $categorie->id)
        ->assertSee([$categorie->name, $categorie->id]);
});

it('Categories Update', function () {
    $categorie = CategoriesModel::factory()->create();
    $updatedCategorie = ['name' => 'Updated Categorie'];

    loginUser()
        ->postJson('/api/v1/categories/update/' . $categorie->id, $updatedCategorie)
        ->assertJson(['messagem' => 'Categoria Alterada']);

    $this->assertDatabaseHas('categories', $updatedCategorie);
});
