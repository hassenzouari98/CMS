@extends('layouts.app')

@section('content')

<!-- Login Section -->
<div class="columns">
    <div class="column is-4 is-offset-4 m-t-100">
        <div class="box">

            <!-- Page Title -->
            <h1 class="subtitle is-1 is-spaced">{{ __('Login') }}</h1>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <!-- Email -->
                <b-field label="{{ __('E-Mail Address') }}"
                        type="{{ $errors->has('email') ? ' is-danger' : '' }}"
                        message="{{ $errors->has('email') ? $errors->first('email') : '' }}">
                    <p class="control has-icons-left has-icons-right">
                        <b-input placeholder="{{ __('E-Mail Address') }}"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus>
                        </b-input>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </b-field>

                <!-- Password -->
                <b-field label="{{ __('Password') }}"
                         type="{{ $errors->has('password') ? ' is-danger' : '' }}"
                         message="{{ $errors->has('password') ? $errors->first('password') : '' }}">
                    <p class="control has-icons-left">
                        <b-input placeholder="{{ __('Password') }}"
                            type="password"
                            name="password"
                            minlength="8"
                            maxlength="24"
                            required
                            password-reveal>
                        </b-input>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </b-field>

                <!-- Remember Me -->
                <b-checkbox name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</b-checkbox>
            
                <!-- Login -->
                <div class="field">
                    <p class="control">
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">
                            {{ __('Login') }}
                        </button>
                    </p>
                </div>

            </form>
        </div>

        <!-- Forget Password Link -->
        <h6 class="subtitle is-6 has-text-centered">
            <a href="{{ route('password.request') }}" class="is-muted">{{ __('Forgot Your Password?') }}</a>
        </h6>
    </div>
</div>

@endsection
