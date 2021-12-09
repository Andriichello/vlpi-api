<?php

namespace App\Services\Auth;

use App\Models\User;

interface IAuthService
{
    /**
     * Authorize user by given data.
     *
     * @param array $data
     * @return User|null
     */
    public static function auth(array $data): ?User;
}
