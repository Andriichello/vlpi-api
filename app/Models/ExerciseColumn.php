<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ramsey\Collection\Collection;

/**
 * Class ExerciseColumn.
 *
 * @property int $id
 * @property int $exercise_id
 * @property string $title
 * @property int $max_choices
 *
 * @property Exercise|null $exercise
 * @property ChoiceColumn[]|Collection $choiceColumns
 * @property ExerciseColumnPassing[]|Collection $passings
 */
class ExerciseColumn extends Model
{
    use HasFactory;

    protected $fillable = [
        'exercise_id',
        'title',
        'max_choices',
    ];

    protected $relations = [
        'exercise',
        'choiceColumns',
        'passings',
    ];

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    public function choiceColumns(): HasMany
    {
        return $this->hasMany(ChoiceColumn::class, 'column_id');
    }

    public function passings(): HasMany
    {
        return $this->hasMany(ExerciseColumnPassing::class);
    }
}
