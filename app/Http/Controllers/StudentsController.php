<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Contracts\View\View;

class StudentsController extends Controller
{
    const PER_PAGE = 15;

    function list(): View
    {
        $paginator = Student::query()->paginate(static::PER_PAGE);
        $students = StudentResource::collection($paginator);

        return view('student.students-list', [
            'paginator' => $paginator,
            'students' => $students,
        ]);
    }
}
