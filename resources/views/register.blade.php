@extends('layouts.master')

@section('content')
<div class="login-form">
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
        </div>
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>Email Address</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
        </div>
        @error('email')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>phone</label>
            <input class="au-input au-input--full" type="number" name="phone" placeholder="Phone Number">
        </div>
        @error('phone')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="">Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        @error('gender')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>Address</label>
            <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
        </div>
        @error('Address')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
        </div>
        @error('password')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>
        @error('password_confirmation')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

    </form>
    <div class="register-link">
        <p>
            Already have account?
            <a href="{{route('auth#loginPage')}}">Sign In</a>
        </p>
    </div>
</div>
@endsection
