<body class="profile-background">
@extends('layouts.app')

@section('content')
<div class="home-banner2">
    <div class="home-banner-filp">
        <form class="padding-login" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group row">        
                <div class="col-md-10">
                    <input id="email" type="email" class="form-control1{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder=" email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-10">
                    <input id="password" type="password" class="form-control1{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder=" password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-10">
                <div class="form-control2">
                    <div class="float-login">
                    <button type="submit" class="submit-button">
                        {{ __('Login') }}
                    </button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
</body>