<?php

namespace App\Http\Resources;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    function toArray(Request $request): array
    {
        /** @var Student $student */
        $student = $this->resource;

        return [
            'id' => $student->id,
            'name' => $student->name,
            'surname' => $student->surname,
            'updated_at_timestamp' => $student->updated_at->timestamp,
            'created_at_timestamp' => $student->created_at->timestamp,
            'updated_at' => $student->updated_at_fmt,
            'created_at' => $student->created_at_fmt,
        ];
    }
}
