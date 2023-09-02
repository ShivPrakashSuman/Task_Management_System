@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert"> {{ session('status') }}</div>
    @endif
    <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-2">
            <h3 class="text-dark"><b>Employee Task</b></h3>
            <h4 class="text-secondary">Management System</h4>
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                <div class="card-3d-wrap mx-auto" style="width: 600px; height: 350px;">
                    <!-- Reset page  -->
                    <div class="card-3d-wrapper">
                        <div class="card-front">
                            <div class="center-wrap">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">{{ __('Reset Password') }}</h4>
                                        <div class="form-group">
                                            <input placeholder="Your Email"  id="email" type="email"  name="email" value="{{ old('email') }}"
                                            class="form-control form-style @error('email') is-invalid @enderror" autocomplete="email" autofocus >
                                            <i class="fa fa-envelope input-icon" aria-hidden="true"></i>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn mt-4"> {{ __('Send Password Reset Link') }}</button>  
                                        <p class="mb-0 mt-4 text-center">
                                            <a href="{{ route('login_register') }}" class="link"> {{ __('Login Page !') }}</a> 
                                        </p> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
