<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ExerciseColumnPassing.
 *
 * @property int $id
 * @property int $choice_id
 * @property int $column_id
 * @property int $passing_id
 * @property int $order
 *
 * @property Choice|null $choice
 * @property ExerciseColumn|null $column
 * @property ExercisePassing|null $passing
 */
class ExerciseColumnPassing extends Model
{
    use HasFactory;

    protected $fillable = [
        'choice_id',
        'column_id',
        'passing_id',
        'order',
    ];

    protected $relations = [
        'choice',
        'column',
        'passing',
    ];

    public function choice(): BelongsTo
    {
        return $this->belongsTo(Choice::class);
    }

    public function column(): BelongsTo
    {
        return $this->belongsTo(ExerciseColumn::class);
    }

    public function passing(): BelongsTo
    {
        return $this->belongsTo(ExercisePassing::class);
    }
}
