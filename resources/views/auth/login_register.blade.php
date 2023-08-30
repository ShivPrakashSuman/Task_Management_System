@extends('layouts.app')

@section('content')
<style>
    .class{
        background: transparent;
        border: none;
        font-size: 20px;
        float: right;
        margin: -5px 0px;
    }
</style>
@include('includes.toastr') <!-- toastr Show  -->
<div class="container">
    <div class="row justify-content-center">
        <div>
            @if(Session::has('error'))
                <div class="alert alert-danger text-center">
                    {{Session('error')}} 
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="section">
                <div class="container">
                    <div class="row full-height justify-content-center">
                        <div class="col-12 text-center align-self-center py-2">
                            <h3 class="text-dark"><b>Employee Task</b></h3>
                            <h4 class="text-secondary">Management System</h4>
                            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                                <label for="reg-log"></label>
                                <div class="card-3d-wrap mx-auto">
                                
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <form method="POST" action="{{ route('login.store') }}">
                                                    @csrf
                                                    <div class="section text-center">
                                                        <h4 class="mb-4 pb-3">Log In</h4>
                                                        <div class="form-group">
                                                            <input placeholder="Your Email" id="email" type="email" name="email" 
                                                            class="form-control form-style @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus >
                                                            <i class="fa fa-envelope input-icon" aria-hidden="true"></i>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input placeholder="Your Password" id="password" type="password" name="password"
                                                            class="form-control form-style @error('password') is-invalid @enderror"  autocomplete="current-password">
                                                            <i class="fa fa-lock input-icon " aria-hidden="true"></i>
                                                        </div>
                                                        <button type="submit" class="btn mt-4">{{ __('Login') }}</button>
                                                        @if (Route::has('password.request'))
                                                        <p class="mb-0 mt-4 text-center">
                                                            <a href="{{ route('password.request') }}" class="link"> {{ __('Forgot Your Password?') }}</a>
                                                        </p>
                                                        @endif     
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="card-back">
                                            <div class="center-wrap">
                                                <div class="section text-center">
                                                    <h4 class="mb-4 pb-3">Sign Up</h4>
                                                    <form method="POST" action="{{ route('register.store') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" name="name" placeholder=" Full Name" id="name" value="{{ old('name') }}"
                                                            class="form-style form-control @error('name') is-invalid @enderror"  autocomplete="name" autofocus>
                                                            <i class="fa fa-user input-icon"></i>
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input id="username" type="text" placeholder=" User Name"name="username" value="{{ old('username') }}"
                                                            class="form-style form-control @error('username') is-invalid @enderror" autocomplete="username">
                                                            <i class="fa fa-user-circle input-icon" aria-hidden="true"></i>
                                                            @error('username')
                                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" 
                                                            class="form-style form-control @error('email') is-invalid @enderror" autocomplete="email">
                                                            <i class="fa fa-envelope input-icon" aria-hidden="true"></i>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input id="password" type="password" placeholder="Password" name="password"
                                                            class="form-style form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                                                            <i class="fa fa-lock input-icon " aria-hidden="true"></i>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <button type="submit" class="btn mt-4">{{ __('Register') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
