@extends('layouts.app')

@section('content')

<!-- Login Section -->
<div class="columns">
    <div class="column is-4 is-offset-4 m-t-100">
        @if (session('status'))
            <div class="notification is-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="box">

            <!-- Page Title -->
            <h1 class="subtitle is-1 is-spaced">{{ __('Reset Password') }}</h1>

            <!-- Login Form -->
            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
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
                
                <!-- Reset Password -->
                <div class="field">
                    <p class="control">
                        <button class="button is-primary is-outlined is-fullwidth">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </p>
                </div>

            </form>
        </div>

        <!-- Go to login link -->
        <h6 class="subtitle is-6 has-text-centered">
            <a href="{{ route('login') }}" class="is-muted"><i class="fas fa-caret-left"></i> {{ __('Back to login') }}</a>
        </h6>
    </div>
</div>

@endsection