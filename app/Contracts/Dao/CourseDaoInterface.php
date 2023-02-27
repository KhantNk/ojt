<?php

namespace App\Contracts\Dao;

interface CourseDaoInterface
{
    public function getAllCourses();
    public function create($data);
    public function register($data);
    public function store($data);
    public function edit($id);
    public function show ($id);
    public function update($data, $id);
    public function delete($id);
}
