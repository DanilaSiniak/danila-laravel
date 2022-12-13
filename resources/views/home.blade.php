@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Dashboard </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b> {{ __('You are logged in!') }} </b><br>
                        {{ __('You can start shopping') }} <br>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-3" onclick="window.location='plans'">Shopping</button>
            <button type="button" class="btn btn-primary mt-3" onclick="window.location='chat'">Chat</button>
        </div>
    </div>
</div>
@endsection
