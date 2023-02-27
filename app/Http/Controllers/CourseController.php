<?php

namespace App\Http\Controllers;

use App\Contracts\Services\CourseServiceInterface;

use App\Models\Course;
use Illuminate\Http\Request;
use  App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller

{
    private $courseService;
    public function __construct(CourseServiceInterface $courseService)
    {
        $this->courseService = $courseService;
    }
    public function index()

    {
        return view('courses.index');
    }

    public function showList()

    {
        $data = $this->courseService->getAllCourses();
        return view('courses.list', compact('data'));
    }

    public function create(Request $request)
    {
        $data = $this->courseService->getAllCourses();
        return view('courses.create', compact('data'));
    }


    public function store(CourseRequest $request)
    {
        $this->courseService->store($request);
        return redirect('/courses');
    }

    public function edit($id)
    {
        $data = $this->courseService->edit($id);
        return view('courses.edit')->with(['data' => $data[0]]);
    }


    public function update(CourseRequest $request, $id)
    {
        $this->courseService->update($request, $id);
        return redirect('/courses');
    }

    public function show($id)
    {
        $data = $this->courseService->show($id);
        return view('courses.show')->with(['data' => $data[0]]);
    }

    public function destroy($id)
    {
        $this->courseService->destory($id);
        return redirect('/courses');
    }
}
