@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-3 m-auto">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>Teacher Update Form</h1>

                <form action="/teachers/update/{{ $data->id }}" method="POST">
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
                        <label for="phone01">Phone Number 01</label>
                        <input type="text" class="form-control" id="phone01" name="phone01"
                            value="{{ $data->phone01 }}" />
                        @error('phone01')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone02">Phone Number 02</label>
                        <input type="number" class="form-control" id="phone02" name="phone02"
                            value="{{ $data->phone02 }}" />
                        @error('phone02')
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
                        <label for="join_date">Join Date</label>
                        <input type="date" class="form-control" id="join_date" name="join_date"
                            value="{{ $data->join_date }}" />
                        @error('join_date')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="is_left">Status</label> <br>
                        <input type="radio" name="is_left" id="is_left" value="1"
                            {{ $data->is_left == '1' ? 'checked' : '' }} />Left
                        <input type="radio" name="is_left" id="is_left"
                            value="0"{{ $data->is_left == '0' ? 'checked' : '' }} />Active
                        @error('is_left')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name=submit type="submit" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</div>

