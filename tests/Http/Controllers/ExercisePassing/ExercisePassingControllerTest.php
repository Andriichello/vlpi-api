<?php

namespace Tests\Http\Controllers\ExercisePassing;

use App\Enums\PassingStatus;
use App\Models\Exercise;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\RequestTestCase;

class ExercisePassingControllerTest extends RequestTestCase
{
    /**
     * User data array
     * @var array
     */
    public array $userData;

    public function setUp(): void
    {
        parent::setUp();

        $this->userData = [
            'name' => 'Test Testerson',
            'email' => 'test@gmail.com',
            'password' => 'password',
        ];

        /** @var User $user */
        $user = $this->register($this->userData);
        Sanctum::actingAs($user, ['*']);
    }

    public function testCreateSurveyPassing()
    {
        /** @var Exercise|null $exercise */
        $exercise = Exercise::query()->first();

        $selections = [];
        foreach ($exercise->columns as $column) {
            foreach ($column->choiceColumns as $choiceColumn) {
                $selections[] = [
                    'order' => $choiceColumn->order,
                    'choice_id' => $choiceColumn->choice_id,
                    'column_id' => $choiceColumn->column_id,
                ];
            }
        }

        $data = [
            'status' => PassingStatus::Uploaded,
            'exercise_id' => $exercise->id,
            'choice_column' => $selections,
        ];

        $response = $this->postJson('/api/exercise-passings', $data);

        $response->assertCreated();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);
    }
}
