<?php

namespace App\Models;

use App\Traits\DateTimeFmt;
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
 * @property-read string $full_name
 * @property-read string $created_at_fmt
 * @property-read string $updated_at_fmt
 *
 * @property User $user
 *
 * @method static StudentFactory factory(int $count = null, array $state = [])
 */
class Student extends Model
{
    use HasFactory, DateTimeFmt;

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

    // Casts

    function getFullNameAttribute(): string
    {
        return "$this->name $this->surname";
    }

    function getCreatedAtFmtAttribute(): string
    {
        return $this->datetimeFmt($this->created_at);
    }

    function getUpdatedAtFmtAttribute(): string
    {
        return $this->datetimeFmt($this->updated_at);
    }

    // Misc

    protected static function newFactory(): StudentFactory
    {
        return new StudentFactory;
    }
}
