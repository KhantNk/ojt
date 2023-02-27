<?php
namespace App\Services;

use App\Contracts\Dao\CourseDaoInterface;
use App\Contracts\Services\CourseServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class CourseService implements CourseServiceInterface
{
    private $courseDao;

    /**
     * Constructor
     *
     * @param CourseDaoInterface $courseDao
     */
    public function __construct(CourseDaoInterface $courseDao)
    {
        $this->courseDao = $courseDao;
    }

    public function getAllCourses()
    {
        return $this->courseDao->getAllCourses();
    }


    public function create($request)
    {
         $this->getData($request);
    }


    public function store($request)
    {
        $data = [
            'course_id' => $request->course_id,
            'name' => $request->name,
            'description' => $request->description,
            'total_lessons' => $request->total_lessons,
            'start_date' => $request->start_date,
            'course_duration' => $request->course_duration,
            'teacher_id'=> $request->teacher_id,
        ];

        $this->courseDao->store($data);
    }

    private function getData($request)
    {
        return [
            'course_id' => $request->course_id,
            'name' => $request->name,
            'description' => $request->description,
            'total_lessons' => $request->total_lessons,
            'start_date' => $request->start_date,
            'course_duration' => $request->course_duration,
            'teacher_id' => $request->teacher_id,
        ];
    }

    public function edit($id)
    {
        return $this->courseDao->edit($id);
    }

    public function show($id)
    {
        return $this->courseDao->show($id);
    }


    public function update($request, $id)
    {
        $data = $this->getUpdateData($request);
        return $this->courseDao->update($data, $id);
    }

    private function getUpdateData($request)
    {
        return [
            'course_id' => $request->course_id,
            'name' => $request->name,
            'description' => $request->description,
            'total_lessons' => $request->total_lessons,
            'start_date' => $request->start_date,
            'course_duration' => $request->course_duration,
            'teacher_id' => $request->teacher_id,
        ];
    }

    public function destory($id)
    {
        return $this->courseDao->delete($id);
    }

}
