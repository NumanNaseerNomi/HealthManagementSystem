<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\MessagesModel;

class MessagesController extends Controller
{
    function chats()
    {
        // dd(MessagesModel::all());
        $user = Sentinel::getUser();
        // dd($user);

        if ($user)
        {
            $role = $user->roles[0]->slug;
            $patient = null;
            $patient_info = null;
            $medical_info = null;
            $chatUsers = MessagesModel::where("from", $user->id)->get()->unique('to');
            // dd($chatUsers);

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
