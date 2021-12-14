<?php

namespace App\Http\Controllers\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index;
use App\Models\Exercise;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexExerciseController extends Controller
{
    /**
     * Get a listing of exercises.
     *
     * @authenticated
     * @group Exercises
     * @param Index $request
     *
     * @return LengthAwarePaginator
     */
    public function __invoke(Index $request): LengthAwarePaginator
    {
        $query = QueryBuilder::for(Exercise::class)
            ->allowedAppends('statistics', 'last_draft', 'last_uploaded', 'best_graded')
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('user_id'),
                AllowedFilter::exact('type'),
                'title',
            ])
            ->allowedSorts('created_at', 'updated_at');

        return $this->paginate($query, $request);
    }
}
