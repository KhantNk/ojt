@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="row col-md-6 col-md-offset-3 m-auto">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Course Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="/courses/store" method="POST">
                        @csrf
                        <div class="form-group pb-3">
                            <label for="course_id">Course ID</label>
                            <input type="number" class="form-control" id="course_id" name="course_id"
                                value="{{ old('course_id') }}" />
                            @error('course_id')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description') }}" />
                            @error('description')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="total_lessons">Total Lessons</label>
                            <input type="number" class="form-control" id="total_lessons" name="total_lessons"
                                value="{{ old('total_lessons') }}" />
                            @error('total_lessons')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3" data-provide="datepicker">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date"
                                value="{{ old('start_date') }}" />
                            @error('start_date')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="course_duration">Course Duration</label>
                            <input type="number" class="form-control" id="course_duration" name="course_duration"
                                value="{{ old('course_duration') }}" />
                            @error('course_duration')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group pb-3">
                            <label for="teacher_id">Teacher ID</label>
                            <input type="number" class="form-control" id="teacher_id" name="teacher_id"
                                value="{{ old('teacher_id') }}" />
                            @error('teacher_id')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <input name=submit type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
