<?php

namespace App\Http\Controllers\Column;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index;
use App\Models\Exercise;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexColumnController extends Controller
{
    /**
     * Get a listing of columns.
     *
     * @authenticated
     * @group Columns
     * @param Index $request
     *
     * @return LengthAwarePaginator
     */
    public function __invoke(Index $request): LengthAwarePaginator
    {
        $query = QueryBuilder::for(Exercise::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('exercise_id'),
                AllowedFilter::exact('max_choices'),
                'title',
            ])
            ->allowedSorts('max_choices', 'created_at', 'updated_at');

        return $this->paginate($query, $request);
    }
}
