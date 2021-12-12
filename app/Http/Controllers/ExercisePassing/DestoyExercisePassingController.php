<?php

namespace App\Http\Controllers\ExercisePassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Destroy;
use App\Models\ExercisePassing;
use App\Models\User;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class DestoyExercisePassingController extends Controller
{
    /**
     * Delete exercise passing.
     *
     * @authenticated
     * @group Exercise passings
     * @param Destroy $request
     * @param mixed $id
     *
     * @return JsonResponse
     * @throws Throwable
     */
    public function __invoke(Destroy $request, mixed $id): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();

        /** @var ExercisePassing $passing */
        $passing = ExercisePassing::query()
            ->findOrFail($id);

        if ($passing->user_id !== $user->id) {
            throw new AuthorizationException(
                "You do not have permission to delete other user's exercise passing.",
            );
        }

        if (!$passing->isDraft()) {
            throw new AuthorizationException(
                "Could not delete exercise passing if it's not it a draft state.",
            );
        }

        try {

            DB::beginTransaction();

            $passing->columnPassings()
                ->delete();

            $passing->deleteOrFail();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return response()->json([
            'message' => 'Deleted',
        ]);
    }
}
