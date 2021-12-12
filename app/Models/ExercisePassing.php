<?php

namespace App\Models;

use App\Enums\PassingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class ExercisePassing.
 *
 * @property int $id
 * @property int $user_id
 * @property int $exercise_id
 * @property string|null $status
 * @property int|null $mark
 * @property Collection $columns
 *
 * @property User|null $user
 * @property Exercise|null $exercise
 * @property ExerciseColumnPassing[]|Collection $columnPassings
 */
class ExercisePassing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercise_id',
        'status',
        'mark',
    ];

    protected $relations = [
        'user',
        'exercise',
        'columnPassings',
    ];

    protected $hidden = [
        'columnPassings',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    public function columnPassings(): HasMany
    {
        return $this->hasMany(ExerciseColumnPassing::class, 'passing_id');
    }

    public function setMarkAttribute(mixed $mark): void
    {
        $this->attributes['mark'] = (int)$mark;
    }

    public function getColumnsAttribute(): Collection
    {
        $columns = $this->columnPassings->groupBy('column_id')
            ->map(function ($columnPassings, $columnId) {
                $withCorrects = !$this->isDraft();
                $isAllCorrect = $withCorrects ? true : null;

                foreach ($columnPassings as $columnPassing) {
                    $columnPassing->is_correct = $withCorrects ?
                        $columnPassing->isCorrect() : null;

                    if ($columnPassing->is_correct === false) {
                        $isAllCorrect = false;
                    }
                }

                return [
                    'column_id' => $columnId,
                    'is_correct' => $isAllCorrect,
                    'passings' => $columnPassings,
                ];
            });

        return $columns->values();
    }

    public function isDraft(): bool
    {
        return $this->status === PassingStatus::Draft;
    }

    public function isUploaded(): bool
    {
        return $this->status === PassingStatus::Uploaded;
    }

    public function isGraded(): bool
    {
        return $this->status === PassingStatus::Graded;
    }

    public function grade(): void
    {
        if ($this->isDraft()) {
            return;
        }

        $corrects = $this->columnPassings
            ->sum(function (ExerciseColumnPassing $passing) {
                return (int)$passing->isCorrect();
            });

        $count = $this->exercise->columns()
            ->sum('max_choices');

        if ($count) {
            $this->mark = ((float)$corrects / $count) * 100;
            $this->status = PassingStatus::Graded;
            $this->update();
        }
    }
}
