<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;
use Spatie\QueryBuilder\QueryBuilder;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * @param QueryBuilder|Builder|Relation $builder
     * @param Request $request
     *
     * @return LengthAwarePaginator
     */
    public function paginate($builder, Request $request): LengthAwarePaginator
    {
        $paginator = $builder->paginate(
            $request->input('perPage', config('defaults.pagination.perPage'))
        );

        return $paginator;
    }
}
