<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $surname
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property User $user
 *
 * @method static StudentFactory factory(int $count = null, array $state = [])
 */
class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'surname',
    ];

    // Relations

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Misc

    protected static function newFactory(): StudentFactory
    {
        return new StudentFactory;
    }
}
