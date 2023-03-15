<?php

namespace App\Services;

use App\Contracts\Dao\StudentDaoInterface;
use App\Contracts\Services\StudentServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StudentService implements StudentServiceInterface
{
    private $studentDao;

    public function __construct(StudentDaoInterface $studentDao)
    {
        $this->studentDao = $studentDao;
    }

    public function getAllStudents()
    {
        return $this->studentDao->getAllStudents();
    }


    public function create($request)
    {
        $this->getData($request);
    }


    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ];

        $this->studentDao->store($data);
    }

    private function getData($request)
    {
        return [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' =>  $request->gender,
            'address' => $request->address,
            'dob' => $request->dob,
        ];
    }

    public function edit($id)
    {
        return $this->studentDao->edit($id);
    }


    public function update($request, $id)
    {
        $data = $this->getUpdateData($request);
        return $this->studentDao->update($data, $id);
    }

    private function getUpdateData($request)
    {
        return [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' =>  $request->gender,
            'address' => $request->address,
            'dob' => $request->dob,
        ];
    }

    public function destory($id)
    {
        return $this->studentDao->delete($id);
    }
}
