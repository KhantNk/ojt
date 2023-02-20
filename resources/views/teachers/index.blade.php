@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h1 class="text-center">Teachers Lists</h1>
        <form>
            <div class="input-group justify-content-between">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control w-25"
                    placeholder="Search...">
                <button class="btn btn-primary" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </form>
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
               @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->phone01 }}</td>
                        <td>{{ $teacher->email }}</td>
                        {{-- <td><a href="/students/show/{{ $teacher->id }}" class="btn btn-primary">Detail</a></td> --}}
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
        {{ $teachers->links() }}
    </div>

