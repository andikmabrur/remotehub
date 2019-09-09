@extends('layouts.app-template')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col s12 m6">
          <div class="login-form">
            <div class="form-body">
              <h3>Login</h3>
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp"
                     name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"
                     name="password" required autocomplete="current-password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <input type="checkbox" class="form-check-input" >
                  <label class="form-check-label" for="remember">Remember me</label>
                </div>
                
                <button type="submit" class="btn log-btn">Login</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                Or
                <a class="btn btn-link" href="{{ route('register') }}" style="color: red;">Register New Account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
