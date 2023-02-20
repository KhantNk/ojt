<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

use Illuminate\Http\Request;

use App\Contracts\Services\TeacherServiceInterface;

use  App\Http\Requests\TeacherRequest;

use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    private $teacherService;
    public function __construct(TeacherServiceInterface $teacherService)
    {
        $this->teacherService = $teacherService;
    }
    public function index()

    {
        return view('teachers.index');
    }

    public function showList()

    {
        $data = $this->teacherService->getAllTeachers();
        return view('teachers.list', compact('data'));
    }

    public function create(Request $request)
    {
        $data = $this->teacherService->getAllTeachers();
        return view('teachers.create', compact('data'));
    }


    public function store(TeacherRequest $request)
    {
        $this->teacherService->store($request);
        return redirect('/teachers');
    }

    public function edit($id)
    {
        $data = $this->teacherService->edit($id);
        return view('teachers.edit')->with(['data' => $data[0]]);
    }


    public function update(TeacherRequest $request, $id)
    {
        $this->teacherService->update($request, $id);
        return redirect('/teachers');
    }

    public function show($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show', compact('teachers'));
    }

    public function destroy($id)
    {
        $this->teacherService->destory($id);
        return redirect('/teachers');
    }
}
