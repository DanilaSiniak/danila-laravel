@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-5 text-center">
            место для взаимодействия с другими участниками чата
        </div>
        <div class="col-5 text-right">
            <div class="justify-between border-b-2 border-gray-200">
                    <div class="flex flex-col leading-tight">
                        <div class="text-2xl items-center">
                            <span class="text-gray-700">{{ auth()->user()->name }}</span>
                        </div>

                        <span class="text-lg text-gray-600">{{ auth()->user()->email }}</span>
                </div>
            </div>

            <div id="app">
                <div class="space-y-4 p-3 overflow-y-auto scrollbar-track-blue h-screen">
                    <chat-messages :user="{{ auth()->user() }}"></chat-messages>
                </div>

                <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2">
                    <chat-form></chat-form>
                </div>
            </div>
        </div>
    </div>
@endsection
