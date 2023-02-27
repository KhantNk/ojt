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
                    <td>{{ $data->course_id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->total_lessons }}</td>
                    <td>{{ $data->start_date }}</td>
                    <td>{{ $data->course_duration }}</td>
                    <td>{{ $data->teacher->name }}</td>
                    <td><a href="/courses/edit/{{ $data->id }}" class="btn btn-primary">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
