<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\MessagesModel;
use App\User;

class MessagesController extends Controller
{
    function chats(Request $request)
    {
        $user = Sentinel::getUser();

        if($user->id == $request->id)
        {
            return redirect()->back();
        }
        else
        {
            $role = $user->roles[0]->slug;
            $patient = null;
            $patient_info = null;
            $medical_info = null;

            $chatUsersTo = MessagesModel::where("from", $user->id)->get()->unique("to")->pluck("to")->toArray();
            $chatUsersFrom = MessagesModel::where("to", $user->id)->get()->unique("from")->pluck("from")->toArray();
            $chatUsersIds = array_unique(array_merge($chatUsersTo,  $chatUsersFrom));

            $chatUsers = User::whereIn("id", $chatUsersIds)->get();

            if(empty($request->all()))
            {
                $messages = collect();
                $chatUser = collect();
                $chatUser->id = null;
            }
            else
            {
                $chatUser = User::where("id", $request->id)->first();

                if($chatUser)
                {
                    $messages = MessagesModel::where("from", $request->id)->orWhere("to", $request->id)->get();
                }
                else
                {
                    return redirect()->back();
                }
            }

            $messagesCount = MessagesModel::where("to", $user->id)->count();

            return view('messages', compact('user', 'role', 'patient', 'patient_info', 'medical_info', "chatUsers", "chatUser", "messages", "messagesCount"));
        }
    }

    function sendMessage(Request $request)
    {
        $request->validate(
            [
                '_token' => 'required',
                'to' => 'required',
                'message' => 'required'
            ]
        );

        $newMessage = new MessagesModel;
        $newMessage->from = Sentinel::getUser()->id;
        $newMessage->to = $request->to;
        $newMessage->body = $request->message;
        $newMessage->save();

        return redirect()->back();
    }
}
