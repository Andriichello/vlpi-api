<?php

namespace App\Http\Controllers\ExerciseColumnPassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index;
use App\Models\ExerciseColumnPassing;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexExerciseColumnPassingController extends Controller
{
    /**
     * Get a listing of exercise column passings.
     *
     * @authenticated
     * @group Column passing
     * @param Index $request
     *
     * @return LengthAwarePaginator
     */
    public function __invoke(Index $request): LengthAwarePaginator
    {
        $query = QueryBuilder::for(ExerciseColumnPassing::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('choice_id'),
                AllowedFilter::exact('passing_id'),
                AllowedFilter::exact('order'),
            ])
            ->allowedSorts('order', 'created_at', 'updated_at');

        return $this->paginate($query, $request);
    }
}
