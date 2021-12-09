<?php

namespace Tests\Services;

use App\Models\User;
use App\Services\Auth\AuthService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Tests\RequestTestCase;

class AuthServiceTest extends RequestTestCase
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

    public function testAuthByCredentials()
    {
        $registered = $this->register($this->userData);

        /** @var User|null $user */
        $user = AuthService::auth(
            Arr::only($this->userData, ['email', 'password'])
        );

        $this->assertNotEmpty($user);
        $this->assertSame($user->id, $registered->id);
    }

    public function testAuthByRememberToken()
    {
        $registered = $this->register($this->userData);

        /** @var User|null $user */
        $user = AuthService::auth([
            'remember_token' => $registered->getRememberToken(),
        ]);

        $this->assertNotEmpty($user);
        $this->assertSame($user->id, $registered->id);
    }
}
