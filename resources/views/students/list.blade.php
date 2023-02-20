@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Students Lists</h1>
        <a href="./students/create" class="btn btn-primary">Create Student</a>
        <table class="table table-bordered my-5 ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->email }}</td>
                        {{-- <td><a href="/students/show/{{ $student->id }}" class="btn btn-primary">Detail</a></td> --}}
                        <td class="d-flex justify-content-between"><a href="/students/show/{{ $student->id }}"
                                class="btn btn-primary">Detail</a>
                            <form action="/students/delete/{{ $student->id }}" method="POST">
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
    </body>

    </html>
