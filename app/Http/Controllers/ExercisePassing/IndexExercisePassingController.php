<?php

namespace App\Http\Controllers\ExercisePassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index;
use App\Models\ExercisePassing;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexExercisePassingController extends Controller
{
    /**
     * Get a listing of exercise passings.
     *
     * @authenticated
     * @group Exercise passings
     * @param Index $request
     *
     * @return LengthAwarePaginator
     */
    public function __invoke(Index $request): LengthAwarePaginator
    {
        $query = QueryBuilder::for(ExercisePassing::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('exercise_id'),
                AllowedFilter::exact('status'),
                AllowedFilter::exact('mark'),
            ])
            ->allowedSorts('mark', 'created_at', 'updated_at');

        return $this->paginate($query, $request);
    }
}
