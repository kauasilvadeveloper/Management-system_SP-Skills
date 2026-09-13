<?php

test('should successfully register the user', function () {

    $data = [
        "name" => "testing",
        "email" => "test@test.com",
        "username" => "test",
        "password" => "12345678",
        "team" => "Development",
    ];

    $response = $this->post('/api/signup', $data);

    $response->assertStatus(200);
});
