@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title">DASHBOARD</h1>

            @if (session('status'))
                <div class="message is-success">
                    <div class="message-body">
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <p class="subtitle">
                You are logged in.
            </p>

        </div>
    </section>
@endsection

