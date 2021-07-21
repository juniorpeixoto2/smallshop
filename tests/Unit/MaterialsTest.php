<?php

use App\Models\MaterialsModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('materials List', function () {
    loginUser()
        ->postJson('/api/v1/materials')
        ->assertStatus(200);
});

it('Materials Store', function () {
    $material = MaterialsModel::factory()->raw();

    loginUser()
        ->postJson('/api/v1/materials/store', $material)
        ->assertJson(['messagem' => 'Material Cadastrado']);

    $this->assertDatabaseHas('materials', $material);
});

it('Materials Show', function () {
    $material = MaterialsModel::factory()->create();

    loginUser()
        ->post('/api/v1/materials/' . $material->id)
        ->assertSee([$material->name, $material->id]);
});

it('Materials Update', function () {
    $material = MaterialsModel::factory()->create();
    $updated = ['name' => 'Updated Material'];

    loginUser()
        ->postJson('/api/v1/materials/update/' . $material->id, $updated)
        ->assertJson(['messagem' => 'Material Alterado']);

    $this->assertDatabaseHas('materials', $updated);
});
