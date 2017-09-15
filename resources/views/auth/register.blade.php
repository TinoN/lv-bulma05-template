@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Register</h1>

        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="field">
                <label for="name" class="label">Name</label>
                <div class="control">

                    @if ($errors->has('name'))
                        <input id="name" type="text" class="input is-danger" name="name" value="{{ old('name') }}" required autofocus>
                        <p class="help is-danger">
                            {{ $errors->first('name') }}
                        </p>
                    @else
                        <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">E-Mail Address</label>
                <div class="control">

                    @if ($errors->has('email'))
                        <input id="email" type="email" class="input is-danger" name="email" value="{{ old('email') }}" required>
                        <div class="help is-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @else
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
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
                    <button type="submit" class="button is-primary">Register</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
