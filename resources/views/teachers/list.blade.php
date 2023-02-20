@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h1 class="text-center">Teachers Lists</h1>
        <a href="./teachers/create" class="btn btn-primary">Create Teacher</a>
        <table class="table table-bordered my-5 ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->phone01 }}</td>
                        <td>{{ $teacher->email }}</td>
                        {{-- <td><a href="/teachers/show/{{ $teacher->id }}" class="btn btn-primary">Detail</a></td> --}}
                        <td class="d-flex justify-content-between"><a href="/teachers/show/{{ $teacher->id }}"
                                class="btn btn-primary">Detail</a>
                            <form action="/teachers/delete/{{ $teacher->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
