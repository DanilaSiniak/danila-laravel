<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class SearchMessagesController extends Controller
{
    public function __invoke(Request $request)
    {
        $results = null;

        if ($query = $request->get('message')) {
            $results = Message::search($query)->get();
        }

        return view('searchMessage', [
            'results' => $results,
        ]);
    }
}
