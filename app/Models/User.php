<?php

namespace App\Models;

use App\Enums\PassingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use TCG\Voyager\Models\Role;

/**
 * Class User.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property Exercise[]|Collection $exercises
 * @property ExercisePassing[]|Collection $exercisePassings
 */
class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = [
        'role_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $relations = [
        'exercises',
        'exercisePassings',
        'role',
        'roles',
    ];

    public function setPasswordAttribute(string $password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function exercisePassings(): HasMany
    {
        return $this->hasMany(ExercisePassing::class);
    }

    public function getStatisticsAttribute(): array
    {
        $average_mark = $this->exercisePassings()
            ->where('status', PassingStatus::Graded)
            ->avg('mark');

        /** @var ExercisePassing[]|Collection $donePassings */
        $donePassings = $this->exercisePassings()
            ->where('exercise_passings.status', PassingStatus::Graded)
            ->join('exercises', function ($join) {
                $join->on('exercises.id', '<=', 'exercise_passings.exercise_id')
                    ->where('exercises.min_mark', '<=', 'exercise_passings.mark');
            })
            ->get('exercise_passings.*');

        $average_done_mark = $donePassings->avg('mark');

        $exercises_done = $donePassings->avg('mark');
        $exercises_left = Exercise::query()->count() - $exercises_done;

        return compact(
            'average_mark',
            'average_done_mark',
            'exercises_done',
            'exercises_left',
        );
    }
}
