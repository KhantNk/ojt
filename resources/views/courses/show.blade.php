@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Course Detail</h1>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Total Lessons</th>
                    <th>Start Date</th>
                    <th>Course Duration</th>
                    <th>Teacher Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $courses->course_id }}</td>
                    <td>{{ $courses->name }}</td>
                    <td>{{ $courses->description }}</td>
                    <td>{{ $courses->total_lessons }}</td>
                    <td>{{ $courses->start_date }}</td>
                    <td>{{ $courses->course_duration }}</td>
                    <td>{{ $courses->teacher->name }}</td>
                    <td><a href="/courses/edit/{{ $courses->id }}" class="btn btn-primary">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
