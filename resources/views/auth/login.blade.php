@extends('layouts.login_register_navbar')

@section('content')
    <div class="container black__bot__brdr">
        <div class="row col-sm-offset-2">
    
            <div class="col-sm-10 margin__auto">
                <div class="panel panel-default panel-custom">
                    <div class="panel-heading col-md-offset-2">
                        <h2 class="darkblue__font bold">
                            {{ __('Log in to Tweetier') }}
                        </h2>
                    </div>
                    <div class="panel-body ">
                            <div class="col-md-6 col-md-offset-2">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <input id="email" type="email" placeholder="Phone,email, or username" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
            
                                    <div class="form-group row">
                                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary col-sm-5 darkblue__btn ">
                                                {{ __('Log in') }}
                                            </button>
                                            <a class="btn btn-link col-sm-5 frgt__pswd__link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <div class="panel-footer darkblue__font">
                        <div class="row col-md-offset-2">
                            New to Twitter? <a href="{{ route('register')}}">Sign up now »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
