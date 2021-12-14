<?php

namespace Tests\Http\Controllers\Exercise;

use App\Models\User;
use Database\Seeders\ExercisePassingSeeder;
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

        $this->outputResponse($response);

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

    public function testShowExercises()
    {
        $query = URL::route('api.exercises.show', [
            'id' => 1,
            'include' => 'choices,columns,user',
        ]);
        $response = $this->getJson($query);

        $this->outputResponse($response);

        $response->assertOk();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);
    }
}
