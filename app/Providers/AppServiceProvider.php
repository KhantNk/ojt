<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Services\CourseServiceInterface;
use App\Contracts\Dao\CourseDaoInterface;
use App\Contracts\Services\StudentServiceInterface;
use App\Contracts\Dao\StudentDaoInterface;
use App\Contracts\Services\TeacherServiceInterface;
use App\Contracts\Dao\TeacherDaoInterface;
use App\Dao\CourseDao;
use App\Dao\StudentDao;
use App\Dao\TeacherDao;
use App\Services\CourseService;
use App\Services\StudentService;
use App\Services\TeacherService;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CourseDaoInterface::class, courseDao::class);
        $this->app->bind(CourseServiceInterface::class, courseService::class);
        $this->app->bind(StudentDaoInterface::class, studentDao::class);
        $this->app->bind(StudentServiceInterface::class, studentService::class);
        $this->app->bind(TeacherDaoInterface::class, teacherDao::class);
        $this->app->bind(TeacherServiceInterface::class, teacherService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
