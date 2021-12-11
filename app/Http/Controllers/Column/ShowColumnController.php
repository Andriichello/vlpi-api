<?php

namespace App\Http\Controllers\Column;

use App\Http\Controllers\Controller;
use App\Http\Requests\Show;
use App\Models\Choice;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

class ShowColumnController extends Controller
{
    /**
     * Display the specified column.
     *
     * @param Show $request
     * @param mixed $id
     *
     * @return JsonResponse
     */
    public function __invoke(Show $request, mixed $id): JsonResponse
    {
        $query = QueryBuilder::for(Choice::class)
            ->allowedIncludes('exercise', 'choices');

        $choice = $query->findOrFail($id);
        return response()->json([
            'data' => $choice,
            'message' => 'Success'
        ]);
    }
}
