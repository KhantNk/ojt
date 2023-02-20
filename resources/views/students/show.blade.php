@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Student Detail</h1>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->phone }}</td>
                    <td>{{ $students->email }}</td>
                    <td>{{ $students->address }}</td>
                    <td>{{ $students->gender }}</td>
                    <td>{{ $students->dob }}</td>
                    <td><a href="/students/edit/{{ $students->id }}" class="btn btn-primary">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
