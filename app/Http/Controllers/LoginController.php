<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param LoginRequest $request
     *
     * @return JsonResponse
     * @throws AuthenticationException
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $user = $this->getUser($request);
        $token = $user->createToken($request->userAgent());

        return response()->json([
            'data' => [
                'token' => $token->plainTextToken,
                'user' => new UserResource($user),
            ],
            'message' => 'Success',
        ]);
    }

    /**
     * @param LoginRequest $request
     *
     * @return User
     * @throws AuthenticationException
     */
    protected function getUser(LoginRequest $request): User
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            throw new AuthenticationException('Invalid email or passowrd');
        }

        return $request->user();
    }
}
