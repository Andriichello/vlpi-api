<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Arr;

class AuthService implements IAuthService
{
    /**
     * @var AuthService
     */
    static protected AuthService $instance;

    /**
     * @var AuthByTokenService
     */
    protected AuthByTokenService $byTokenService;

    /**
     * @var AuthByCredentialsService
     */
    protected AuthByCredentialsService $byCredentialsService;

    /**
     * AuthService constructor.
     *
     * @param AuthByTokenService $byTokenService
     * @param AuthByCredentialsService $byCredentialsService
     */
    protected function __construct(
        AuthByTokenService $byTokenService,
        AuthByCredentialsService $byCredentialsService
    ) {
        $this->byTokenService = $byTokenService;
        $this->byCredentialsService = $byCredentialsService;
    }

    /**
     * @return static
     */
    public static function getInstance(): static
    {
        if (empty(self::$instance)) {
            self::$instance = new AuthService(
                app(AuthByTokenService::class),
                app(AuthByCredentialsService::class),
            );
        }

        return self::$instance;
    }

    /**
     * @param array $data
     *
     * @return User|null
     */
    public static function auth(array $data): ?User
    {
        $auth = self::getInstance();

        if (Arr::has($data, 'remember_token')) {
            return $auth->byTokenService->authByRememberToken($data['remember_token']);
        }

        if (Arr::has($data, 'token')) {
            return $auth->byTokenService->authByToken($data['token']);
        }

        if (Arr::has($data, ['email', 'password'])) {
            return $auth->byCredentialsService->authByCredentials(
                $data['email'],
                $data['password']
            );
        }

        return null;
    }
}
