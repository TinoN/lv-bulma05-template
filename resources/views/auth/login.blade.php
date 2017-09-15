@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Login</h1>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="field">
                <label for="email" class="label">E-Mail Address</label>
                <div class="control">

                    @if ($errors->has('email'))
                        <input id="email" type="email" class="input is-danger" name="email" value="{{ old('email') }}" required autofocus>
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                    @else
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
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
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                    <a class="button is-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
