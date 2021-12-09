<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class Exercise.
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $description
 * @property string|null $type
 *
 * @property User|null $user
 * @property Choice[]|Collection $choices
 * @property ExerciseColumn[]|Collection $columns
 * @property ExercisePassing[]|Collection $passings
 *
 */
class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'type',
    ];

    protected $relations = [
        'user',
        'choices',
        'columns',
        'passings',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function choices(): HasMany
    {
        return $this->hasMany(Choice::class);
    }

    public function columns(): HasMany
    {
        return $this->hasMany(ExerciseColumn::class);
    }

    public function passings(): HasMany
    {
        return $this->hasMany(ExercisePassing::class);
    }
}
