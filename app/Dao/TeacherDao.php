<?php

namespace App\Dao;

use App\Contracts\Dao\TeacherDaoInterface;
use App\Models\Teacher;

class TeacherDao implements TeacherDaoInterface
{
    public function getAllTeachers()
    {
        return Teacher::latest()->paginate(5);
    }
    /**
     * Register Teacher function
     *
     * @param $data
     * @return void
     */

    public function create($data)
    {
        Teacher::insert($data);
    }
    public function store($data)
    {
        Teacher::insert($data);
    }
    /**
     * Show Teacher Data function
     *
     * @param int $id
     * @return void
     */

    /**
     * Edit Teacher function
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        return Teacher::where('id', $id)->get();
    }

    /**
     * Update Teacher function
     *
     * @param $data
     * @param int $id
     * @return void
     */
    public function update($data, $id)
    {
        Teacher::where('id', $id)->update($data);
        return Teacher::where('id', $id)->get();
    }

    public function findById($id)
    {
        return Teacher::find($id);
    }

    public function findByEmail($email)
    {
        return Teacher::where('email', '=', $email)->first();
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
    }
}
