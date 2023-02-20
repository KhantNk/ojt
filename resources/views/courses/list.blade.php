@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Course Lists</h1>
        <a href="./courses/create" class="btn btn-primary">Create Course</a>
        <table class="table table-bordered my-5 ">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Total Lessons</th>
                    <th>Start Date</th>
                    <th>Course Duration</th>
                    <th>Teacher ID</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $course)
                    <tr>
                        {{-- <td>{{ $courses->firstItem()+$loop->index }}</td> --}}
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->total_lessons }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->course_duration }}</td>
                        <td>{{ $course->teacher_id }}</td>
                        {{-- <td><a href="/courses/show/{{ $course->id }}" class="btn btn-primary">Detail</a></td> --}}
                        <td class="d-flex justify-content-between"><a href="/courses/show/{{ $course->id }}"
                                class="btn btn-primary">Detail</a>
                            <form action="/courses/delete/{{ $course->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $data->links() !!}
    </div>
