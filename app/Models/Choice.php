<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Choice.
 *
 * @property int $id
 * @property int $exercise_id
 * @property string $title
 * @property string|null $tooltip
 *
 * @property Exercise|null $exercise
 * @property ExerciseColumn|null $column
 */
class Choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'exercise_id',
        'title',
        'tooltip',
    ];

    protected $relations = [
        'column',
        'exercise',
    ];

    public function column(): HasOne
    {
        return $this->hasOne(ChoiceColumn::class);
    }

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
}
