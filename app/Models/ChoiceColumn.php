<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class ChoiceColumn.
 *
 * @property int $id
 * @property int $choice_id
 * @property int $column_id
 * @property int|null $order
 *
 * @property Choice|null $choice
 * @property ExerciseColumn|null $column
 *
 */
class ChoiceColumn extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'choice_id',
        'column_id',
        'order',
    ];

    protected $relations = [
        'choice',
        'column',
    ];

    public function choice(): BelongsTo
    {
        return $this->belongsTo(Choice::class);
    }

    public function column(): BelongsTo
    {
        return $this->belongsTo(ExerciseColumn::class);
    }
}
