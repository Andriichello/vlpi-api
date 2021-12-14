<?php

namespace Tests\Http\Controllers\Exercise;

use Illuminate\Support\Facades\URL;
use Tests\RegisteredTestCase;

class IndexExerciseControllerTest extends RegisteredTestCase
{
    public function testIndexExercises()
    {
        $query = URL::route('api.exercises.index', [
            'append' => 'statistics,last_draft,last_uploaded,best_graded',
        ]);
        $response = $this->getJson($query);

        $response->assertOk();
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'statistics',
                    'last_draft',
                    'last_uploaded',
                    'best_graded',
                ]
            ],
        ]);
    }
}
