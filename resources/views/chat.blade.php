@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4 col-lg-3">
            <div class="card">
                <div class="card-header"><b>Users</b></div>
                <div class="card-body" id="user_list">

                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6" id="chat_header"><b>Chat</b></div>

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
        <div class="col-sm-4 col-lg-3">
            <div class="card" style="height:255px; overflow-y: scroll;">
                <div class="card-header">
                    <input type="text" class="form-control" placeholder="Search User..." autocomplete="off" id="search_people" onkeyup="search_user('{{ Auth::id() }}', this.value);" />
                </div>
                <div class="card-body">
                    <div id="search_people_area" class="mt-3"></div>
                </div>
            </div>
            <br />
            <div class="card" style="height:255px; overflow-y: scroll;">
                <div class="card-header"><b>Notification</b></div>
                <div class="card-body">
                    <ul class="list-group" id="notification_area">

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
