<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 */
class UpdateStudentRequest extends FormRequest
{
    function rules(): array
    {
        return [
            'id' => 'required|numeric|exists:students',
            'name' => 'required|string|min:1',
            'surname' => 'required|string|min:1',
        ];
    }
}
