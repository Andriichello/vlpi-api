<?php

namespace Tests\Http\Controllers;

use App\Models\User;
use Tests\RequestTestCase;

class LogoutControllerTest extends RequestTestCase
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

    public function testLogout()
    {
        /** @var User $user */
        $user = $this->register($this->userData);
        $this->assertNotEmpty($user);

        $this->be($user);

        $response = $this->deleteJson('/api/logout');
        $response->assertNoContent();
    }

}
