@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!', ) }} <br>
                    Hello, {{auth()->user()->name}}
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-3 mr-3" onclick="window.location='plans'">Shopping</button>
            <button type="button" class="btn btn-primary mt-3" onclick="window.location='chat'">Chat</button>
        </div>
    </div>
</div>
@endsection
