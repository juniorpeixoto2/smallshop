<?php

uses(Tests\TestCase::class);

it('Status', function () {
    $response = $this->getJson('/api/status', []);
    $response->assertStatus(200);
});
