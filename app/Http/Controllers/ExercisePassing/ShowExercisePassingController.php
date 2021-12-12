<?php

namespace App\Http\Controllers\ExercisePassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Show;
use App\Models\ExercisePassing;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

class ShowExercisePassingController extends Controller
{
    /**
     * Get the specified exercise passing.
     *
     * @authenticated
     * @group Exercise passings
     * @param Show $request
     * @param mixed $id
     *
     * @return JsonResponse
     */
    public function __invoke(Show $request, mixed $id): JsonResponse
    {
        $query = QueryBuilder::for(ExercisePassing::class)
            ->allowedIncludes('user', 'exercise', 'columnPassings');

        $passing = $query->findOrFail($id);
        return response()->json([
            'data' => $passing,
            'message' => 'Success'
        ]);
    }
}
