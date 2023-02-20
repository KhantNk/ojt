@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="row col-md-6 col-md-offset-3 m-auto">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Teacher Registration Form</h1>
                </div>
                <div class="panel-body">
                    {{-- <form action="/students.store" method="POST"> --}}
                    <form action="/teachers/store" method="POST">
                        @csrf
                        <div class="form-group pb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>

                  <div class="form-group pb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" />
                            @error('email')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="email">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                               value="">
                            @error('password')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="phone01">Phone Number 01</label>
                            <input type="number" class="form-control" id="phone01" name="phone01"
                                value="{{ old('phone01') }}" />
                            @error('phone01')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="phone02">Phone Number 02</label>
                            <input type="number" class="form-control" id="phone02" name="phone02"
                                value="{{ old('phone02') }}" />
                            @error('phone02')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address') }}" />
                            @error('address')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="gender">Gender</label> <br>
                            <input type="radio" name="gender" value="m" />Male
                            <input type="radio" name="gender" value="f" />Female
                            <input type="radio" name="gender" value="o" />Other
                            @error('gender')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3" data-provide="datepicker">
                            <label for="join_date">Join Date</label>
                            <input type="date" class="form-control" id="join_date" name="join_date"
                                value="{{ old('join_date') }}" />
                            @error('join_date')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group pb-3">
                            <label for="is_left">Status</label> <br>
                            <input type="radio" name="is_left" value="1" />Left
                            <input type="radio" name="is_left" value="0" />Active
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
