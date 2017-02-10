<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
  public function getMessage() {
    $messages = Message::all();
    return view('index', ['messages' => $messages]);
  }
}
