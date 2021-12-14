<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Output\ConsoleOutput;

abstract class RequestTestCase extends TestCase
{
    use MakesHttpRequests;

    /**
     * @param array $userData
     * @return User|null
     */
    public function register(array $userData): ?User
    {
        $response = $this->postJson('/api/register', $userData);
        if ($response->isSuccessful()) {
            $userId = Arr::get($response, 'data.user.id');

            /** @var User $user */
            $user = User::query()
                ->find($userId);
        }

        return $user ?? null;
    }

    public function outputResponse(mixed $respone): void
    {
        (new ConsoleOutput())->writeln(
            json_encode($respone, JSON_PRETTY_PRINT),
        );
    }

}
