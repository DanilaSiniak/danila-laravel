<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormRequest;
use App\Models\Message;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class   ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application chat.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('chat');
    }

    public function messages(): Collection|array
    {
        return Message::query()
            ->with('user')
            ->get();
    }

    public function send(MessageFormRequest $messageFormRequest)
    {
        $message = $messageFormRequest->user()
            ->messages()
            ->create($messageFormRequest->validated());

        broadcast(new MessageSent($messageFormRequest->user(), $message));
        return $message;
    }
}
