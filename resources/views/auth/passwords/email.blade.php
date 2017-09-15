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

        <form method="POST" action="{{ route('password.email') }}">
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

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection
