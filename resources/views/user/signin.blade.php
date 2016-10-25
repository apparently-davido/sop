@extends('layouts.master')
@section('title')
    Sign In
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="form-signin" action="{{ route('user.signin') }}" method="post">

                    <h2 class="form-signin-heading">Sign In</h2>
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
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required=""
                               autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                               required="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                        {{ csrf_field() }}

                        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection