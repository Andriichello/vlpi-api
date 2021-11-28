<?php

namespace Tests\Http\Controllers;

use Tests\RequestTestCase;

class RegisterControllerTest extends RequestTestCase
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

    public function testRegister()
    {
        $response = $this->postJson('/api/register', $this->userData);

        $response->assertCreated();
        $response->assertJsonStructure([
            'data' => [
                'user',
                'token',
            ],
            'message'
        ]);
    }

}
