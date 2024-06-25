<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminatu\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Message;

class MessageController extends Controller
{
   public function index():View
   {
    //メッセージテーブルのレコードを全件取得
    $messages=Message::all();

   //messageというキーで、ビューへ渡す
   return view ('message/index', ['messages' => $messages]);
  }

   public function store(Request $request): RedirectResponse
   {
    $message=new Message();
    $message->body=$request->body;
    $message->save();

    return redirect('/messages');
   }
}
