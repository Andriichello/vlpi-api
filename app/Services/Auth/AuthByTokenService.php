<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthByTokenService
{
    /**
     * @param string $token
     * @return User|null
     */
    public function authByRememberToken(string $token): ?User
    {
        /** @var User|null $user */
        $user = User::query()
            ->where('remember_token', $token)
            ->first();

        return empty($user) ? null : $user;
    }

    /**
     * @param string $token
     * @return User|null
     */
    public function authByToken(string $token): ?User
    {
        /** @var PersonalAccessToken|null $token */
        $token = PersonalAccessToken::query()
            ->where('tokenable_type', 'users')
            ->where('token', $token)
            ->first();

        if (empty($token)) {
            return null;
        }

        /** @var User|null $user */
        $user = User::query()
            ->find($token->tokenable_id);

        return $user;
    }
}
