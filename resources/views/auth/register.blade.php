@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required placeholder="Enter your name">
                            <label for="name">{{ __('Name') }}</label>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-floating mb-3">
                            <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required placeholder="email">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required placeholder="{{ __('Password') }}">
                            <label for="password">{{ __('Password') }}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required placeholder="{{ __('Confirm Password') }}">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary text-white">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
