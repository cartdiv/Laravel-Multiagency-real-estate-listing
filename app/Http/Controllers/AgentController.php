<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Image;


use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function AgentDashboard()
    {

        return view('agent.agentdashboard');
        # code...
    }

    public function AgencyLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        $nottification = array(
            'message' => 'Logout successfully',
            'alert-type' => 'success',
        );
        return redirect('agency/login')->with($nottification);
        # code...
    }


    public function AgentProfile()
    {
        $id = Auth::user()-> id;
        $admin_data = User::find($id);
        return view('agent.admin_profile', compact('admin_data'));
        # code...
    }
    public function EditAgentProfile()
    {
        $id = Auth::user()->id;
        $edit_data = User::find($id);
        return view('agent.admin_profile_edit', compact('edit_data'));
        # code...
    }

   

    public function UpdateAgentProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            
            @unlink(public_path('upload/agent_photo/'.$data->photo));

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/agent_photo'),$filename);
            $data['photo'] = $filename;
           }
           $data->save();
    
           $nottification = array(
                'message' => "Agent Profile Updated Successfully",
                'alert-type' => 'success'
           );
    
           return redirect()->route('agent.profile')->with($nottification);

        # code...
    }

    public function ChangeAgentPassword()
    {

        return view('agent.change_password');
        # code...
    }

    public function UpdateAgentPassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $users = user::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            

            $nottification = array(
                'message' => 'Agent Password updated Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('agent.dashboard')->with($nottification);
        }else{
            $nottification = array(
                'message' => 'Check your Old Password',
                'alert-type' => 'error',
            );
            return redirect()->route('agent.dashboard')->with($nottification);
        }
    }

    public function AgentLoginOption()
    {
      return view('agent.admin_dashboard_login');
      # code...
    }





    public function AllAgencyAgent()
    {
        $agency_id = Auth::user()->id;
        $agent_id = User::find($agency_id);
        $agent = Agent::where('agency_id', $agency_id)->latest()->get();
        // dd($agent);
        return view('agent.pages.agents.all_agent', compact('agent'));
 
        # code...
    }

    public function AddAgencyAgent()
    {
        return view('agent.pages.agents.add_agent');
        # code...
    }

    public function StoreAgencyAgent(Request $request)
    {

        $image = $request->file('agent_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(215,310)->save('upload/agency/agent/'.$name_gen);
        $save_url = 'upload/agency/agent/'.$name_gen;

        Agent::insert([
            'agency_id' => Auth::user()->id,
            'agent_name' => $request->agent_name,
            'agent_number' => $request->agent_number,
            'agent_email' => $request->agent_email,
            'agent_skype' => $request->agent_skype,
            'agent_title' => $request->agent_title,
            'agent_image' => $save_url,
            'agent_description' => $request->agent_description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,

        ]);

        $notification = array(
            'message' => 'Agent added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.agency.agent')->with($notification); 
        # code...
    }

    
    function EditAgencyAgent($id)
    {
        $editData = Agent::findOrFail($id);
        return view('agent.pages.agents.edit_agent', compact('editData'));
        # code...
    }

    public function UpdateAgencyAgent(Request $request)
    {
        $agent_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('agent_image')) {
    
            $image = $request->file('agent_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(215,310)->save('upload/agency/agent/'.$name_gen);
            $save_url = 'upload/agency/agent/'.$name_gen;
        
    
            if (file_exists($old_img)) {
                unlink($old_img);
             }
    
    
             Agent::findOrFail($agent_id)->update([
                'agent_name' => $request->agent_name,
                'agent_number' => $request->agent_number,
                'agent_email' => $request->agent_email,
                'agent_skype' => $request->agent_skype,
                'agent_title' => $request->agent_title,
                'agent_image' => $save_url,
                'agent_description' => $request->agent_description,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
            ]);
        
           $notification = array(
                'message' => 'Agent Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.agency.agent')->with($notification); 
            
            }else{
                Agent::findOrFail($agent_id)->update([
                    'agent_name' => $request->agent_name,
                    'agent_number' => $request->agent_number,
                    'agent_email' => $request->agent_email,
                    'agent_skype' => $request->agent_skype,
                    'agent_title' => $request->agent_title,
                    'agent_description' => $request->agent_description,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                ]);
            
               $notification = array(
                    'message' => 'Agent Udated Successfully',
                    'alert-type' => 'success'
                );
            
                return redirect()->route('all.agency.agent')->with($notification); 
        # code...
            }
    }


    public function DeleteAgencyAgent($id)
    {
        $deleteImage = Agent::findOrFail($id);
        unlink($deleteImage->agent_image);
        Agent::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Agent Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.agency.agent')->with($notification);
        # code...
    }
    //
}

