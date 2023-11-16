<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AgentMessages;
use Illuminate\Http\Request;

class AgencyMessageController extends Controller
{
    public function AllAgencyMessage()
    {
        $user_id = Auth::user()->id;
        $messages = AgentMessages::where('agency_id', $user_id)->orderBy('id', 'DESC')->get();
        return view('agent.pages.messages.user_message', compact('messages'));
    }
    public function ViewdMessage($id)
    {
        $messages = AgentMessages::findOrFail($id);
        return view('agent.pages.messages.view_message', compact('messages'));
        # code...
    }
    //
}
