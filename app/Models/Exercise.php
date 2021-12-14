<?php

namespace App\Models;

use App\Enums\PassingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

/**
 * Class Exercise.
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $description
 * @property string|null $type
 * @property int|null $min_mark
 *
 * @property array|null $statistics
 * @property ExercisePassing|null $last_draft
 * @property ExercisePassing|null $last_uploaded
 * @property ExercisePassing|null $best_graded
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
        'min_mark',
    ];

    protected $relations = [
        'user',
        'choices',
        'columns',
        'passings',
        'choiceColumns',
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

    public function getStatisticsAttribute(): ?array
    {
        /** @var User $user */
        $user = Auth::user();
        if (empty($user)) {
            return null;
        }

        $best_mark = $this->passings()
            ->where('user_id', $user->id)
            ->where('status', PassingStatus::Graded)
            ->max('mark');

        $has_passed = $best_mark === null ? null
            : $this->min_mark <= $best_mark;

        return compact('best_mark', 'has_passed',);
    }

    public function getLastDraftAttribute(): ?ExercisePassing
    {
        /** @var User $user */
        $user = Auth::user();
        if (empty($user)) {
            return null;
        }

        /** @var ExercisePassing $passing */
        $passing = $this->passings()
            ->where('user_id', $user->id)
            ->where('status', PassingStatus::Draft)
            ->latest()
            ->first();

        if ($passing) {
            $passing->append('columns');
        }

        return $passing;
    }

    public function getLastUploadedAttribute(): ?ExercisePassing
    {
        /** @var User $user */
        $user = Auth::user();
        if (empty($user)) {
            return null;
        }

        /** @var ExercisePassing $passing */
        $passing = $this->passings()
            ->where('user_id', $user->id)
            ->where('status', PassingStatus::Uploaded)
            ->latest()
            ->first();

        if ($passing) {
            $passing->append('columns');
        }

        return $passing;
    }

    public function getBestGradedAttribute(): ?ExercisePassing
    {
        /** @var User $user */
        $user = Auth::user();
        if (empty($user)) {
            return null;
        }

        /** @var ExercisePassing $passing */
        $passing = $this->passings()
            ->where('user_id', $user->id)
            ->where('status', PassingStatus::Graded)
            ->orderBy('mark', 'desc')
            ->first();

        if ($passing) {
            $passing->append('columns');
        }

        return $passing;
    }
}
