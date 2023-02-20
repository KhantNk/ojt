@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-3 m-auto">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Course Update Form</h1>
            </div>
            <div class="panel-body">

                <form action="/courses/update/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="course_id">Course ID</label>
                        <input type="text" class="form-control" id="course_id" name="course_id"
                            value="{{ $data->course_id }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $data->name }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $data->description }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="total_lessons">Total Lessons</label>
                        <input type="number" class="form-control" id="total_lessons" name="total_lessons"
                            value="{{ $data->total_lessons }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="start_date">Start Date</label>
                        <input type="text" class="form-control" id="start_date" name="start_date"
                            value="{{ $data->start_date }}" />
                    </div>
                    <div class="form-group pb-3" data-provide="datepicker">
                        <label for="course_duration">Course Duration</label>
                        <input type="number" class="form-control" id="course_duration" name="course_duration"
                            value="{{ $data->course_duration }}" />
                    </div>
                    <div class="form-group pb-3">
                        <label for="teacher_id">Teacher ID</label>
                        <input type="text" class="form-control" id="teacher_id" name="teacher_id"
                            value="{{ $data->teacher_id }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
