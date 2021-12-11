<?php

namespace App\Http\Controllers\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Show;
use App\Models\Exercise;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

class ShowExerciseController extends Controller
{
    /**
     * Display the specified exercise.
     *
     * @param Show $request
     * @param mixed $id
     *
     * @return JsonResponse
     */
    public function __invoke(Show $request, mixed $id): JsonResponse
    {
        $query = QueryBuilder::for(Exercise::class)
            ->allowedIncludes('user', 'choices', 'columns');

        $exercise = $query->findOrFail($id);
        return response()->json([
            'data' => $exercise,
            'message' => 'Success'
        ]);
    }
}
