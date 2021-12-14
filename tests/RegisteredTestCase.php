<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Support\Arr;
use Laravel\Sanctum\Sanctum;

abstract class RegisteredTestCase extends RequestTestCase
{
    protected User $user;

    protected array $userData;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userData = [
            'name' => 'Test Testerson',
            'email' => 'test@gmail.com',
            'password' => 'password',
        ];

        /** @var User $user */
        $this->user = $this->register($this->userData);
        Sanctum::actingAs($this->user, ['*']);
    }
}
