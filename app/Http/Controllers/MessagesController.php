<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\MessagesModel;
use App\User;

class MessagesController extends Controller
{
    function chats()
    {
        $user = Sentinel::getUser();

        if($user)
        {
            $role = $user->roles[0]->slug;
            $patient = null;
            $patient_info = null;
            $medical_info = null;
            $chatUsersTo = MessagesModel::where("from", $user->id)->get()->unique("to")->pluck("to")->toArray();
            $chatUsersFrom = MessagesModel::where("to", $user->id)->get()->unique("from")->pluck("from")->toArray();

            $chatUsersIds = array_unique(array_merge($chatUsersTo,  $chatUsersFrom));

            $chatUsers = User::whereIn("id", $chatUsersIds)->get();

            return view('messages', compact('user', 'role', 'patient', 'patient_info', 'medical_info', "chatUsers"));
        }
        else
        {
            return redirect('login')->with('error','Please Login');
        }
    }

    function getChatUsers()
    {
        $user = Sentinel::getUser();
        $chatUsers = MessagesModel::where("from", $user->id)->get();
        dd($chatUsers);
        // dd($user->id);
    }

    function sendMessage(Request $request)
    {
        dd($request);
    }
}
