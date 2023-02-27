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

    public function showLoginForm()
    {
        return view('login');
    }

    public function  login(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $check = Teacher::where('email', '=', $email)->first();
        if (!$check) {
            return redirect('login')
                ->with('error', 'Wrong Email');
        }
        if (!Hash::check($password, $check->password)) {
            return redirect('login')
                ->with('error', 'Wrong Password');
        }
        Session::put('id', $check->id);
        Session::put('name', $check->name);
        Log::info(Session::get('id'));
        log::info(Session::get('name'));
        return redirect('/teachers/home');
    }

    public function dashboard()
    {
        return view('home');
    }

    public function logout()
    {
        Session::forget('id');
        Session::forget('name');
        return redirect('/login');
    }


    public function destroy($id)
    {
        $this->teacherService->destory($id);
        return redirect('/teachers');
    }
}
