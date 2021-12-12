<?php

namespace App\Http\Controllers\ExerciseColumnPassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Show;
use App\Models\ExerciseColumnPassing;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

class ShowExerciseColumnPassingController extends Controller
{
    /**
     * Get the specified exercise column passing.
     *
     * @authenticated
     * @group Column passing
     * @param Show $request
     * @param mixed $id
     *
     * @return JsonResponse
     */
    public function __invoke(Show $request, mixed $id): JsonResponse
    {
        $query = QueryBuilder::for(ExerciseColumnPassing::class)
            ->allowedIncludes('choice', 'column', 'passing');

        $passing = $query->findOrFail($id);
        return response()->json([
            'data' => $passing,
            'message' => 'Success'
        ]);
    }
}
