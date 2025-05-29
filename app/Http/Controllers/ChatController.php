<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

function sendMessage(Request $request)
{
    $user = Auth::user();
    $message = $request->message;

    // Fire the event (this will be broadcast to Pusher)
    event(new MessageSent($user, $message));

    // Optionally save to DB here

    return response()->json(['status' => 'Message Sent!']);
}
