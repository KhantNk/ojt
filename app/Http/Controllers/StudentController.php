<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Contracts\Services\StudentServiceInterface;

use Illuminate\Http\Request;

use  App\Http\Requests\StudentRequest;

use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    private $studentService;
    public function __construct(StudentServiceInterface $studentService)
    {
        $this->studentService = $studentService;
    }
    public function index()

    {
        return view('students.index');
    }

    public function showList()

    {
        $data = $this->studentService->getAllStudents();
        return view('students.list', compact('data'));
    }

    public function create(Request $request)
    {
        $data = $this->studentService->getAllStudents();
        return view('students.create', compact('data'));
    }


    public function store(StudentRequest $request)
    {
        $this->studentService->store($request);
        return redirect('/students');
    }

    public function edit($id)
    {
        $data = $this->studentService->edit($id);
        return view('students.edit')->with(['data' => $data[0]]);
    }

    public function update(StudentRequest $request, $id)
    {
        $this->studentService->update($request, $id);
        return redirect('/students');
    }

    public function show($id)
    {
        $students = Student::find($id);
        return view('students.show', compact('students'));
    }

    public function destroy($id)
    {
        $this->studentService->destory($id);
        return redirect('/students');
    }
}
