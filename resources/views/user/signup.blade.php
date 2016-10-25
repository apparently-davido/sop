@extends('layouts.master')
@section('title')
    Sign Up
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="form-signin" action="{{ route('user.signup') }}" method="post">

                    <h2 class="form-signin-heading">Sign Up</h2>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="first_name" class="sr-only">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control"
                               placeholder="First Name" required=""
                               autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="sr-only">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name"
                               required=""
                               autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address"
                               required=""
                               autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password"
                               required="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-md btn-primary btn-block" type="submit">Sign up</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection