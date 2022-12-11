@extends('layouts.auth-master')

@section('content')
    <div class="bg-dark" style="width: 500px;height: auto;margin: auto;border-radius: 7px;">
        <div class="row-sm-10 d-flex justify-content-center">
            <div class="col-sm-10">
                <form method="post" action="{{ route('register.perform') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <img class="mb-1 mt-3" src="{{ asset('image/Capture.JPG') }}" alt="" width="72" height="72" style="border-radius: 50%;">

                    <h1 class="h3 mb-3 fw-normal">Register</h1>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required="required" autofocus>
                        <label for="floatingName">Name</label>
                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        <label for="floatingEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Username</label>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                    @include('auth.partials.copy')
                </form>
            </div>
        </div>
    </div>

@endsection
