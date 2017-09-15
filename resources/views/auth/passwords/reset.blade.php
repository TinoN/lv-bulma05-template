@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Reset Password</h1>

        @if (session('status'))
            <div class="message is-success">
                <div class="message-body">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field">
                <label for="email" class="label">E-Mail Address</label>
                <div class="control">

                    @if ($errors->has('email'))
                        <input id="email" type="email" class="input is-danger" name="email" value="{{ $email or old('email') }}" required autofocus>
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                    @else
                        <input id="email" type="email" class="input" name="email" value="{{ $email or old('email') }}" required autofocus>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">Password</label>

                <div class="control">
                    @if ($errors->has('password'))
                        <input id="password" type="password" class="input is-danger" name="password" required>
                         <p class="help is-danger">
                            {{ $errors->first('password') }}
                        </p>
                    @else
                        <input id="password" type="password" class="input" name="password" required>
                    @endif

                </div>
            </div>

            <div class="field">
                <label for="password-confirm" class="label">Confirm Password</label>
                <div class="control">
                    @if ($errors->has('password_confirmation'))
                        <input id="password-confirm" type="password" class="input is-danger" name="password_confirmation" required>
                        <p class="help is-danger">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                    @else
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                    @endif
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary">Reset Password</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
