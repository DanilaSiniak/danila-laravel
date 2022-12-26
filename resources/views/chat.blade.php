@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4 col-lg-3">
            <div class="card" style="height:255px; overflow-y: scroll;">
                <div class="card-header">
                    <input type="search" class="form-control" placeholder="Search User..." autocomplete="off"/>
                </div>
                <div class="card-body">
                    <div id="search_people_area" class="mt-3"></div>
                </div>
            </div>
            <br />
        </div>
        <div class="col-sm-4 col-lg-6">
            <div class="card">
                <div class="card-header"><b>Chat</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="space-y-4 p-3 overflow-y-auto scrollbar-track-blue h-screen">
                            <chat-messages :user="{{ auth()->user() }}"></chat-messages>
                        </div>

                        <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2">
                            <chat-form></chat-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="col-sm-4 col-lg-3">--}}
{{--            <div class="card" style="height:255px; overflow-y: scroll;">--}}
{{--                <div class="card-header">--}}
{{--                    <form action="/search" method="get" class="space-y-2">--}}
{{--                        <input id="message" name="message" type="search" placeholder="Search user message..." class="form-control"></form>--}}
{{--                </div>--}}
{{--                <div class="ml-4">--}}
{{--                    @if($results)--}}
{{--                        <div class="space-y-4">--}}
{{--                            @if($results->count())--}}
{{--                                @foreach($results as $result)--}}
{{--                                    <div>--}}
{{--                                        <h1 class="text-lg font-semibold"> User name: {{ $result->user->name }}</h1>--}}
{{--                                        <h2 class="text-lg"> Message: {{$result->message}}</h2>--}}
{{--                                        <p> Time: {{ $result->created_at}}</p>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <p>No results found</p>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
