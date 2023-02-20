<?php

namespace App\Dao;

use App\Contracts\Dao\CourseDaoInterface;
use App\Models\Course;

class CourseDao implements CourseDaoInterface
{
    public function getAllCourses()
    {
        return Course::latest()->paginate(5);
    }
    /**
     * Register Course function
     *
     * @param $data
     * @return void
     */

    public function create($data)
    {
        Course::insert($data);
    }

    public function store($data)
    {
        Course::insert($data);
    }
    /**
     * Show Course Data function
     *
     * @param int $id
     * @return void
     */

    /**
     * Edit Course function
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        return Course::where('id', $id)->get();
    }

    /**
     * Update Course function
     *
     * @param $data
     * @param int $id
     * @return void
     */
    public function update($data, $id)
    {
        Course::where('id', $id)->update($data);
        return Course::where('id', $id)->get();
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
    }
	/**
	 * @param mixed $data
	 * @return mixed
	 */
	public function register($data) {
	}
}
