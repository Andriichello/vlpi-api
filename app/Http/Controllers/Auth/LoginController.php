<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use function response;

class LoginController extends Controller
{
    /**
     * Login user.
     *
     * @group User managment
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
