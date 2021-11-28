<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

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
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        /** @var User $user */
        $user = User::query()
            ->create(compact('name', 'email', 'password'));

        $token = $user->createToken($request->userAgent());

        return response()->json([
            'data' => [
                'token' => $token->plainTextToken,
                'user' => new UserResource($user)
            ],
            'message' => 'Success'
        ], 201);
    }
}
