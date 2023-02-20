@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Teacher Details</h1>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $teachers->id }}</td>
                    <td>{{ $teachers->name }}</td>
                    <td>{{ $teachers->phone01 }}</td>
                    <td>{{ $teachers->email }}</td>
                    <td>{{ $teachers->address }}</td>
                    <td>{{ $teachers->gender }}</td>
                    <td><a href="/teachers/edit/{{ $teachers->id }}" class="btn btn-primary">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
