<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ExerciseInfo.
 *
 * @property int $id
 * @property int $exercise_id
 * @property string $title
 * @property string|null $description
 *
 * @property Exercise|null $exercise
 */
class ExerciseInfo extends Model
{
    use HasFactory;

    protected $table = 'exercise_info';

    protected $fillable = [
        'exercise_id',
        'title',
        'description',
    ];

    protected $relations = [
        'exercise',
    ];

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
}
