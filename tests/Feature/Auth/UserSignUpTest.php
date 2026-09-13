<?php

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    // Executa as seeds na base de testes a cada execução
    $this->seed();
});

test('should successfully register the user', function () {

    $team = \App\Models\Team::query()->first();

    $data = [
        "name" => "testing",
        "email" => "test@test.com",
        "username" => "test",
        "password" => "12345678",
        "team_id" => $team->id,
    ];

    $response = $this->post('/api/signup', $data);

    $response->assertStatus(201);
});
