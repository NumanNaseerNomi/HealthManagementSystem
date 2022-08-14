<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class MessagesController extends Controller
{
    function chats()
    {
        $user = Sentinel::getUser();

        if ($user)
        {
            $role = $user->roles[0]->slug;
            $patient = null;
            $patient_info = null;
            $medical_info = null;
            return view('messages', compact('user', 'role', 'patient', 'patient_info', 'medical_info'));
        }
        else
        {
            return redirect('login')->with('error','Please Login');
        }
    }
}
