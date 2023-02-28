<?php

namespace App\Services;

use App\Contracts\Dao\TeacherDaoInterface;
use App\Contracts\Services\TeacherServiceInterface;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use TheSeer\Tokenizer\Exception;

class TeacherService implements TeacherServiceInterface
{
    private $teacherDao;

    /**
     * Constructor
     *
     * @param TeacherDaoInterface $teacherDao
     */
    public function __construct(TeacherDaoInterface $teacherDao)
    {
        $this->teacherDao = $teacherDao;
    }

    public function getAllTeachers()
    {
        return $this->teacherDao->getAllTeachers();
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
            'phone01' => $request->phone01,
            'phone02' => $request->phone02,
            'address' => $request->address,
            'gender' => $request->gender,
            'join_date' => $request->join_date,
            'is_left' => $request->is_left,
        ];

        $this->teacherDao->store($data);
    }

    private function getData($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone01' => $request->phone01,
            'phone02' => $request->phone02,
            'address' => $request->address,
            'gender' => $request->gender,
            'join_date' => $request->join_date,
            'is_left' => $request->is_left,
        ];
    }

    public function edit($id)
    {
        return $this->teacherDao->edit($id);
    }


    public function update($request, $id)
    {
        $data = $this->getUpdateData($request);
        return $this->teacherDao->update($data, $id);
    }

    private function getUpdateData($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone01' => $request->phone01,
            'phone02' => $request->phone02,
            'address' => $request->address,
            'gender' => $request->gender,
            'join_date' => $request->join_date,
            'is_left' => $request->is_left,
        ];
    }

    public function findById($id)
    {
        return $this->teacherDao->findById($id);
    }

    public function findByEmail($email)
    {
        return $this->teacherDao->findByEmail($email);
    }


    public function destory($id)
    {
        return $this->teacherDao->delete($id);
    }
}
