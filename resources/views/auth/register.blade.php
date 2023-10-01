@extends('layouts.login_register_navbar')

@section('content')
    <div class="container black__bot__brdr">
        <div class="row col-sm-offset-3">

                <div class="col-sm-8 margin__auto h-50">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="panel panel-default panel-custom">
                            <div class="panel-heading col-md-offset-1">
                                <button type="submit" class="btn btn-primary col-sm-offset-10 darkblue__btn ">
                                    {{ __('Sign up') }}
                                </button>
                                <h3 class="darkblue__font bold">
                                    {{ __('Create Your Account') }}
                                </h3>
                            </div>
                            <div class="panel-body ">
                                <div class="col-md-10 col-md-offset-1">
                
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                            <p>What's your name?</p>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
        
                                    <div class="form-group row">            
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                            <p>What's your email?</p>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <h3 class="darkblue__font bold">
                                        You'll need a password
                                    </h3>
                                    <h6>
                                        Make sure it's 6 characters or more.
                                    </h6>

                                    <div class="form-group row">                
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
        
    
                                    <div class="form-group row">                
                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
