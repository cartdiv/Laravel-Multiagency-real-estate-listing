<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    //
    public function AdminDashboard()
    {
        return view('admin.index');
        # code...
    }

    public function AdminProfile()
    {
        $id = Auth::user()-> id;
        $admin_data = User::find($id);
        return view('admin.admin_profile', compact('admin_data'));
        # code...
    }
    public function EditProfile()
    {
        $id = Auth::user() -> id;
        $edit_data = User::find($id);
        return view('admin.admin_profile_edit', compact('edit_data'));
        # code...
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        $nottification = array(
            'message' => 'Logout successfully',
            'alert-type' => 'success',
        );
        return redirect('/admin/login')->with($nottification);
        # code...
    }

    public function UpdateAdminProfile(Request $request)
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
            
            @unlink(public_path('upload/admin_photo/'.$data->photo));

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_photo'),$filename);
            $data['photo'] = $filename;
           }
           $data->save();
    
           $nottification = array(
                'message' => "Admin Profile Updated Successfully",
                'alert-type' => 'success'
           );
    
           return redirect()->route('admin.profile')->with($nottification);

        # code...
    }

    public function ChangePassword()
    {

        return view('admin.change_password');
        # code...
    }

    public function UpdateAdminPassword(Request $request)
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
                'message' => 'Admin Password updated Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('admin.dashboard')->with($nottification);
        }else{
            $nottification = array(
                'message' => 'Check your Old Password',
                'alert-type' => 'error',
            );
            return redirect()->route('admin.dashboard')->with($nottification);
        }
    }

  public function AdminLoginOption()
  {
    return view('admin.admin_dashboard_login');
    # code...
  }

  public function AllAdmin()
  {
    $alladmin=User::where('role','admin')->get();
    return view('backend.pages.admin.all_admin',compact('alladmin'));
    # code...
  }

  public function AddAdmin()
  {
    $roles = Role::all();
    return view('backend.pages.admin.add_admin',compact('roles'));
    # code...
  }

  public function StoreAdmin(Request $request)
  {
    $user = new User();
    $user->name=$request->name;
    $user->username=$request->username;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->address=$request->address;
    $user->password= Hash::make($request->password);
    $user->role='admin';
    $user->status='active';
    $user->save();

    if($request->roles){
        $user->assignRole($request->roles);
    }
    $nottification = array(
        'message' => 'New Admin add Successfully',
        'alert-type' => 'success',
    );
    return redirect()->route('all.admin')->with($nottification);
    # code...
  }

  public function EditAdmin($id)
  {
    $user = User::findOrFail($id);
    $roles = Role::all();
    return view('backend.pages.admin.edit_admin',compact('user', 'roles'));

    # code...
  }

  public function UpdateAdmin(Request $request, $id)
  {

    $user = User::findOrFail($id);
    $user->name=$request->name;
    $user->username=$request->username;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->address=$request->address;
    $user->role='admin';
    $user->status='active';
    $user->save();

    $user->roles()->detach();
    if($request->roles){
        $user->assignRole($request->roles);
    }
    $notification = array(
        'message' => 'Admin Edited Successfully',
        'alert-type' => 'success',
    );
    return redirect()->route('all.admin')->with($notification);
    # code...
  }

  public function DeleteAdmin($id)
  {
    $user = User::findOrFail($id);
    if(!is_null($user)) {
        $user->delete();
    }
    $notification = array(
        'message' => 'Admin Delete Succesfully',
        'alert-type' => 'success',
    );
    return redirect()->back()->with($notification);
    # code...
  }

  //Agent listing and editing
  public function AllAgent()
  {
    $allagent = User::where('role', 'agent')->get();
    return view('backend.pages.agent.all_agent', compact('allagent'));
    # code...
  }

  public function AddAgent()
  {
    return view('backend.pages.agent.add_agent');
    # code...
  }

  public function StoreAgent(Request $request)
  {
    $user = new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->username=$request->username;
    $user->address=$request->address;
    $user->phone=$request->phone;
    $user->password= Hash::make($request->password);
    $user->role='agent';
    $user->status='active';
    $user->save();
    # code...
    $nottification = array(
        'message' => 'New Agent added Successfully',
        'alert-type' => 'success',
    );
    return redirect()->route('all.agent')->with($nottification);
  }

  public function EditAgent($id)
  {
    $editagent = User::findOrFail($id);
    return view('backend.pages.agent.edit_agent', compact('editagent'));
    # code...
  }
  
  public function UpdateAgent(Request $request)
  {
    $agent_id = $request->id;
    $user = User::findOrFail($agent_id);
    $user->name=$request->name;
    $user->username=$request->username;
    $user->email=$request->email;
    $user->address=$request->address;
    $user->phone=$request->phone;
    $user->role='agent';
    $user->status='active';
    $user->save();
    # code...
    $nottification = array(
        'message' => 'New Agent Update Successfully',
        'alert-type' => 'success',
    );
    return redirect()->route('all.agent')->with($nottification);
    # code...
  }

  public function DeleteAgent($id)
  {
    User::findOrFail($id)->delete();

    $nottification = array(
      'message' => 'Agent Deleted Successfully',
      'alert-type' => 'success',
  );
  return redirect()->route('all.agent')->with($nottification);
    # code...
  }

  public function InactiveAgent($id)
  {
    User::findOrFail($id)->update([
      'status'=>'inactive'
    ]);
    $nottification = array(
      'message' => 'Agent Inactive Successfully',
      'alert-type' => 'success',
  );
    return redirect()->route('all.agent')->with($nottification);
    # code...
  }

  public function ActiveAgent($id)
  {
    User::findOrFail($id)->update([
      'status'=>'active'
    ]);
    $nottification = array(
      'message' => 'Agent Active Successfully',
      'alert-type' => 'success',
  );
    return redirect()->route('all.agent')->with($nottification);
    # code...
  }

}
