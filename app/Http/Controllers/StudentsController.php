<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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

    function showEdit(Student $student): View
    {
        $student = new StudentResource($student);
        return view('student.student-edit', ['student' => $student]);
    }

    function update(UpdateStudentRequest $request, Student $student): RedirectResponse
    {
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->save();

        return redirect()->route('students.list');
    }
}
