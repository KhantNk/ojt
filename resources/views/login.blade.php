@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success  alert-dismissible" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger  alert-dismissible" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="card shadow">
                        <div class="car-header bg-success pt-2">
                            <div class="card-title font-weight-bold text-white text-center"> User Login </div>
                        </div>
                        <div class="form-group p-3">
                            <label for="email"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter E-mail" value="{{ old('email') }}" />
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group p-3">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter Password" value="{{ old('password') }}" />
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>

                    <div class="d-inline-block py-3">
                        <button type="submit" class="btn btn-success"> Login </button>
                        <p class="float-right mt-2"> Don't have an account? <a href="{{ url('teachers/create') }}"
                                class="text-success"> Register </a> </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
