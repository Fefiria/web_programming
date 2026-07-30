<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    Storage::fake('public');

    $response = $this->post('/register', [
        'name' => 'Test User',
        'npm' => '2529250014',
        'birth_date' => '2000-01-01',
        'phone_number' => '081234567890',
        'email' => 'test@example.com',
        'bio' => 'Test bio',
        'cv' => UploadedFile::fake()->create('cv.pdf', 100, 'application/pdf'),
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('membership.pending', absolute: false));
});
