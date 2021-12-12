<?php

namespace App\Http\Controllers\ExercisePassing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExercisePassing\EditExercisePassing;
use App\Models\ExerciseColumnPassing;
use App\Models\ExercisePassing;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Throwable;

class EditExercisePassingController extends Controller
{
    /**
     * Edit exercise passing.
     *
     * @authenticated
     * @group Exercise passings
     * @param EditExercisePassing $request
     * @param mixed $id
     *
     * @return JsonResponse
     * @throws Throwable
     */
    public function __invoke(EditExercisePassing $request, mixed $id): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();
        $data = $request->validated();

        /** @var ExercisePassing $passing */
        $passing = ExercisePassing::query()
            ->findOrFail($id);

        if ($passing->user_id !== $user->id) {
            throw new AuthorizationException(
                "You do not have permission to edit other user's exercise passing.",
            );
        }

        if (!$passing->isDraft()) {
            throw new AuthorizationException(
                "Could not update exercise passing if it's not it a draft state.",
            );
        }

        $this->fillColumnPassings($data['choice_column'], $passing);
        $passing = $passing->fresh();

        return response()->json([
            'data' => $passing,
            'message' => 'Updated',
        ], 200);
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

            $newChoiceIds = Arr::pluck($selections, 'choice_id');
            $passing->columnPassings()
                ->whereNotIn('choice_id', $newChoiceIds)
                ->delete();

            foreach ($selections as $selection) {
                ExerciseColumnPassing::query()
                    ->updateOrCreate([
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
