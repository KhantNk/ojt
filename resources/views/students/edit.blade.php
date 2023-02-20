@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-3 m-auto">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>Student Update Form</h1>
            </div>
            <div class="panel-body">
                <form action="/students/update/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $data->name }}" />
                        @error('name')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $data->email }}" />
                        @error('email')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $data->phone }}" />
                        @error('phone')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $data->address }}" />
                        @error('address')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="gender">Gender</label> <br>
                        <input type="radio" name="gender" id="gender" value="m"
                            {{ $data->gender == 'm' ? 'checked' : '' }} />Male
                        <input type="radio" name="gender" id="gender"
                            value="f"{{ $data->gender == 'f' ? 'checked' : '' }} />Female
                        <input type="radio" name="gender" id="gender" value="o"
                            {{ $data->gender == 'o' ? 'checked' : '' }} />Other
                        @error('gender')
                            <div style="color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group pb-3" data-provide="datepicker">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob"
                            value="{{ $data->dob }}" />
                        @error('dob')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

