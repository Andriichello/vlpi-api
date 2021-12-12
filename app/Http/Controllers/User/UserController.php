<?php

namespace App\Http\Controllers\User;


use App\Http\Requests\User\EditProfile;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Throwable;

class UserController
{
    /**
     * Get logged user's profile.
     *
     * @authenticated
     * @group User profile
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function show(Request $request): JsonResponse
    {
        $query = QueryBuilder::for(User::class)
            ->allowedIncludes('role', 'roles', 'exercises', 'exercisePassings')
            ->allowedAppends('statistics');

        /** @var User|null $user */
        $user = $query->findOrFail($request->user()->id);

        return response()->json([
            'data' => $user,
            'message' => 'Success',
        ]);
    }

    /**
     * Edit logged user's profile.
     *
     * @authenticated
     * @group User profile
     * @param EditProfile $request
     *
     * @return JsonResponse
     * @throws Throwable
     */
    public function edit(EditProfile $request): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();
        $user->updateOrFail($request->validated());

        return response()->json([
            'data' => $user,
            'message' => 'Success',
        ]);
    }
}
