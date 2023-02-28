<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Teacher;

use Illuminate\Http\Request;

use App\Contracts\Services\TeacherServiceInterface;

use  App\Http\Requests\TeacherRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
// use Log;
// use Session;

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
        $teacher = $this->teacherService->findById(session('AUTH_ID'));
        if (!$teacher) {
            return redirect('/login');
        } else {
            $data = $this->teacherService->getAllTeachers();
            return view('teachers.list', compact('data'));
        }
    }

    public function create(Request $request)
    {
        $data = $this->teacherService->getAllTeachers();
        return view('teachers.create', compact('data'));
    }

    public function store(TeacherRequest $request)
    {
        $this->teacherService->store($request);
        return redirect('/login');
    }

    public function edit($id)
    {
        $data = $this->teacherService->edit($id);
        return view('teachers.edit')->with(['data' => $data[0]]);
    }

    public function update(Request $request, $id)
    {
        $this->teacherService->update($request, $id);
        return redirect('/teachers');
    }

    public function show($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show', compact('teachers'));
    }
    public function showLoginForm()
    {
        if (session()->has('AUTH_ID')) {
            return redirect('/home');
        } else {
            return view('login');
        }
    }

    public function login(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $teacher = $this->teacherService->findByEmail($email);

        if (!$teacher) {
            return redirect('/login')->with('error', 'Invalid email or password.');
        }
        if (!Hash::check($password, $teacher->password)) {
            return redirect('/login')->with('error', 'Invalid email or password.');
        }
        session()->put('AUTH_ID', $teacher->id);

        return redirect('/home');
    }

    public function home()
    {
        $teacher = $this->teacherService->findById(session('AUTH_ID'));
        if (!$teacher) {
            return redirect('/login');
        } else {
            return view('home', ['teacher' => $teacher]);
        }
    }

    public function logout()
    {
        session()->forget('AUTH_ID');
        return redirect('/login');
    }

    public function destroy($id)
    {
        $this->teacherService->destory($id);
        return redirect('/teachers');
    }
}
