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
  public function saveMessageToDB(Request $request) {
    $createdMessage = new Message;
    $createdMessage->content = $request->content;
    $createdMessage->offset = $request->offset;
    $createdMessage->save();
    return redirect('/views');
  }
}
