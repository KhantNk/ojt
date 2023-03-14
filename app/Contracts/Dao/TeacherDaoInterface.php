<?php

namespace App\Contracts\Dao;

interface TeacherDaoInterface
{
    public function getAllTeachers();
    public function create($data);
    public function register($data);
    public function store($data);
    public function edit($id);
    public function update($data, $id);
    public function delete($id);
    public function findById($id);
    public function findByEmail($email);
}
