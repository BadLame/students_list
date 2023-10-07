<?php

namespace App\Traits;

use Illuminate\Support\Carbon;

trait DateTimeFmt
{
    function dateFmt(Carbon $date): string
    {
        $fmt = config('datetime.date_fmt', 'Y-m-d');
        return $date?->format($fmt) ?: '';
    }

    function datetimeFmt(Carbon $datetime): string
    {
        $fmt = config('datetime.datetime_fmt', 'Y-m-d H:i');
        return $datetime?->format($fmt) ?: '';
    }
}
