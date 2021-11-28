<?php

namespace Tests\Http\Controllers;

use App\Models\User;
use Tests\RequestTestCase;

class LoginControllerTest extends RequestTestCase
{
    /**
     * User data array
     * @var array
     */
    public array $userData;

    public function setUp(): void
    {
        parent::setUp();

        $this->userData = [
            'name' => 'Test Testerson',
            'email' => 'test@gmail.com',
            'password' => 'password',
        ];
    }

    public function testLoginWithValidCredantials()
    {
        /** @var User $user */
        $user = $this->register($this->userData);
        $this->assertNotEmpty($user);

        $response = $this->postJson('/api/login', $this->userData);

        $response->assertOk();
        $response->assertJsonStructure([
            'data' => [
                'user',
                'token',
            ],
            'message'
        ]);
    }

    public function testLoginWithInvalidCredantials()
    {
        /** @var User $user */
        $user = $this->register($this->userData);
        $this->assertNotEmpty($user);

        $this->userData['password'] = 'wrong-password';
        $response = $this->postJson('/api/login', $this->userData);

        $response->assertUnauthorized();
    }
}
