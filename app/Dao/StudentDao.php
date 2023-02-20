<?php

namespace App\Dao;

use App\Contracts\Dao\StudentDaoInterface;
use App\Models\Student;

class StudentDao implements StudentDaoInterface
{
    public function getAllStudents()
    {
        return Student::latest()->paginate(5);
    }
    /**
     * Register Student function
     *
     * @param $data
     * @return void
     */

    public function create($data)
    {
        Student::insert($data);
    }

    public function store($data)
    {
        Student::insert($data);
    }
    /**
     * Show Student Data function
     *
     * @param int $id
     * @return void
     */

    /**
     * Edit Student function
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        return Student::where('id', $id)->get();
    }

    /**
     * Update Student function
     *
     * @param $data
     * @param int $id
     * @return void
     */
    public function update($data, $id)
    {
        Student::where('id', $id)->update($data);
        return Student::where('id', $id)->get();
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
    }
	/**
	 * @param mixed $data
	 * @return mixed
	 */
	public function register($data) {
	}
}
