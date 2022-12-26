@extends('layouts.app')
@section('content')
    <div class="col-sm-4 col-lg-3">
        <div class="card" style="height:255px; overflow-y: scroll;">
            <div class="card-header">
                <form action="/search" method="get" class="space-y-2">
                    <input id="message" name="message" type="search" placeholder="Search user message..." class="form-control"></form>
            </div>
            <div class="ml-4">
            @if($results)
                <div class="space-y-4">
                    @if($results->count())
                        @foreach($results as $result)
                            <div>
                                <h1 class="text-lg font-semibold"> User name: {{ $result->user->name }}</h1>
                                <h2 class="text-lg"> Message: {{$result->message}}</h2>
                                <p> Time: {{ $result->created_at}}</p>
                            </div>
                        @endforeach
                    @else
                        <p>No results found</p>
                    @endif
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection
