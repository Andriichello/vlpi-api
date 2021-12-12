<?php

namespace App\Models;

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
}
