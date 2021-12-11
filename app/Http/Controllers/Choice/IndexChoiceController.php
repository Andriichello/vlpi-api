<?php

namespace App\Http\Controllers\Choice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index;
use App\Models\Exercise;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexChoiceController extends Controller
{
    /**
     * Get a listing of choices.
     *
     * @authenticated
     * @group Choices
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
                'title',
            ])
            ->allowedSorts('title', 'created_at', 'updated_at');

        return $this->paginate($query, $request);
    }
}
