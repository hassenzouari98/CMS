@extends('layouts.app')

@section('content')

<!-- Login Section -->
<div class="columns">
    <div class="column is-4 is-offset-4 m-t-100">
        <div class="box">

            <!-- Page Title -->
            <h1 class="subtitle is-1 is-spaced">{{ __('Register') }}</h1>

            <!-- Login Form -->
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                <!-- Name -->
                <b-field label="{{ __('Name') }}"
                        type="{{ $errors->has('name') ? ' is-danger' : '' }}"
                        message="{{ $errors->has('name') ? $errors->first('name') : '' }}">
                    <p class="control has-icons-left">
                        <b-input placeholder="{{ __('Name') }}"
                            type="text"
                            name="name"
                            value="{{ old('name') }}" 
                            required 
                            autofocus>
                        </b-input>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user-alt"></i>
                        </span>
                    </p>
                </b-field>

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

                <!-- Password Section -->
                <div class="columns">
                    <div class="column">

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
                                    required>
                                </b-input>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </b-field>

                    </div>
                    <div class="column">

                        <!-- Confirm Password -->
                        <b-field label="{{ __('Confirm Password') }}">
                            <p class="control has-icons-left">
                                <b-input placeholder="{{ __('Password') }}"
                                    type="password"
                                    name="password_confirmation"
                                    id="password-confirm"
                                    minlength="8"
                                    maxlength="24"
                                    required>
                                </b-input>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </b-field>

                    </div>
                    
                </div>


                <!-- Register -->
                <div class="field">
                    <p class="control">
                        <button class="button is-primary is-outlined is-fullwidth">
                            {{ __('Register') }}
                        </button>
                    </p>
                </div>

            </form>
        </div>

        <!-- Already have account link -->
        <h6 class="subtitle is-6 has-text-centered">
            <a href="{{ route('login') }}" class="is-muted">{{ __('Already have an account?') }}</a>
        </h6>
    </div>
</div>

@endsection