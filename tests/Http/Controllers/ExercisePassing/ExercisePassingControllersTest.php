<?php

namespace Tests\Http\Controllers\ExercisePassing;

use App\Enums\PassingStatus;
use App\Models\Exercise;
use App\Models\ExercisePassing;
use Symfony\Component\Console\Output\ConsoleOutput;
use Tests\RegisteredTestCase;

class ExercisePassingControllersTest extends RegisteredTestCase
{
    public function testDraftPassing()
    {
        /** @var Exercise $exercise */
        $exercise = Exercise::query()->firstOrFail();
        $selections = $this->getCorrectSelections($exercise);

        $response = $this->postJson(
            route('api.exercise-passings.create'),
            [
                'status' => PassingStatus::Draft,
                'exercise_id' => $exercise->id,
                'choice_column' => $selections,
            ]
        );

        $response->assertCreated();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);

        /** @var ExercisePassing $passing */
        $passing = ExercisePassing::query()
            ->findOrFail(data_get($response, 'data.id'));

        $this->assertEquals(PassingStatus::Draft, $passing->status);
        $this->assertEquals(null, $passing->mark);
    }

    public function testUploadPassing()
    {
        /** @var Exercise $exercise */
        $exercise = Exercise::query()->firstOrFail();
        $selections = $this->getCorrectSelections($exercise);

        $response = $this->postJson(
            route('api.exercise-passings.create'),
            [
                'status' => PassingStatus::Uploaded,
                'exercise_id' => $exercise->id,
                'choice_column' => $selections,
            ]
        );

        $response->assertCreated();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);

        /** @var ExercisePassing $passing */
        $passing = ExercisePassing::query()
            ->findOrFail(data_get($response, 'data.id'));

        $this->assertEquals(PassingStatus::Graded, $passing->status);
        $this->assertEquals(100, $passing->mark);
    }

    public function testUploadDraftPassing()
    {
        /** @var Exercise $exercise */
        $exercise = Exercise::query()->firstOrFail();
        $selections = $this->getCorrectSelections($exercise);

        $response = $this->postJson(
            route('api.exercise-passings.create'),
            [
                'status' => PassingStatus::Draft,
                'exercise_id' => $exercise->id,
                'choice_column' => $selections,
            ]
        );

        $response->assertCreated();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);

        /** @var ExercisePassing $draft */
        $draft = ExercisePassing::query()
            ->findOrFail(data_get($response, 'data.id'));

        $this->assertEquals(PassingStatus::Draft, $draft->status);
        $this->assertEquals(null, $draft->mark);

        $response = $this->putJson(
            route('api.exercise-passings.edit', $draft->id),
            [
                'status' => PassingStatus::Uploaded,
                'choice_column' => $selections,
            ]
        );

        $response->assertOk();
        $response->assertJsonStructure([
            'data',
            'message'
        ]);

        /** @var ExercisePassing $edited */
        $edited = ExercisePassing::query()
            ->findOrFail(data_get($response, 'data.id'));

        $this->assertEquals(PassingStatus::Graded, $edited->status);
        $this->assertEquals(100, $edited->mark);
    }

    protected function getCorrectSelections(Exercise $exercise): array
    {
        foreach ($exercise->columns as $column) {
            foreach ($column->choiceColumns as $choiceColumn) {
                $selections[] = [
                    'order' => $choiceColumn->order,
                    'choice_id' => $choiceColumn->choice_id,
                    'column_id' => $choiceColumn->column_id,
                ];
            }
        }

        return $selections ?? [];
    }
}
