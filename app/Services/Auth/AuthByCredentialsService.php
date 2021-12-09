<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthByCredentialsService
{
    /**
     * @param string $email
     * @param string $password
     *
     * @return User|null
     */
    public function authByCredentials(string $email, string $password): ?User
    {
        /** @var User|null $user */
        $user = User::query()
            ->where('email', $email)
            ->first();

        if (empty($user)) {
            return null;
        }

        return Hash::check($password, $user->password) ? $user : null;
    }
}
