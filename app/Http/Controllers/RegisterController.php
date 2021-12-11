<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param RegisterRequest $request
     *
     * @return JsonResponse
     */
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $user = $this->createUser($request->validated());
        $token = $user->createToken($request->userAgent());

        return response()->json([
            'data' => [
                'token' => $token->plainTextToken,
                'user' => new UserResource($user)
            ],
            'message' => 'Success'
        ], 201);
    }

    /**
     * @param array $attributes
     *
     * @return User
     */
    protected function createUser(array $attributes): User
    {
        /** @var User $user */
        $user = User::query()->create($attributes);
        $user->setRememberToken(Str::random(10));
        $user->save();

        return $user;
    }
}
