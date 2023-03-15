<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;

interface TeacherServiceInterface
{
    public function getAllTeachers();
    public function create($request);
    public function store($data);
    public function edit($id);
    public function update($request, $id);
    public function destory($id);
    public function findById($id);
    public function findByEmail($email);
}
