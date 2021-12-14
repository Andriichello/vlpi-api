<?php

namespace App\Http\Controllers\ExercisePassing;

use App\Enums\PassingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExercisePassing\CreateExercisePassing;
use App\Models\ExerciseColumnPassing;
use App\Models\ExercisePassing;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class CreateExercisePassingController extends Controller
{
    /**
     * Create exercise passings.
     *
     * @authenticated
     * @group Exercise passings
     * @param CreateExercisePassing $request
     *
     * @return JsonResponse
     * @throws Throwable
     */
    public function __invoke(CreateExercisePassing $request): JsonResponse
    {
        $data = $request->validated();

        /** @var ExercisePassing $passing */
        $passing = ExercisePassing::query()
            ->create([
                'user_id' => $request->user()->id,
                'exercise_id' => $data['exercise_id'],
                'status' => $data['status']
            ]);
        $this->fillColumnPassings($data['choice_column'], $passing);

        $passing = $passing->fresh();
        if ($passing->status === PassingStatus::Graded) {
            $passing->append('columns');
        }

        return response()->json([
            'data' => $passing,
            'message' => 'Created',
        ], 201);
    }

    /**
     * @param array $selections
     * @param ExercisePassing $passing
     *
     * @return void
     * @throws Throwable
     */
    protected function fillColumnPassings(array $selections, ExercisePassing $passing): void
    {
        try {
            DB::beginTransaction();

            foreach ($selections as $selection) {
                ExerciseColumnPassing::query()
                    ->create([
                        'passing_id' => $passing->id,
                        'order' => $selection['order'],
                        'choice_id' => $selection['choice_id'],
                        'column_id' => $selection['column_id'],
                    ]);
            }

            // auto calculate and update mark
            $passing->grade();

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
