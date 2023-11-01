<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function AllPermission()
    {
        $permission = Permission::all();
        return view('backend.pages.permission.all_permission', compact('permission'));
        # code...
    }

    public function AddPermission()
    {
        return view('backend.pages.permission.add_permission');
        # code...
    }

    public function StorePermission(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);
        $notification = array(
            'message' => 'Permission Created Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.permission')->with($notification);
        # code...
    }

    public function EditPermission($id)
    {
        $editpermission = Permission::findorfail($id);
        return view('backend.pages.permission.edit_permission', compact('editpermission'));
        # code...
    }

    public function UpdatePermission(Request $request)
    {
        $permission_id = $request->id;

        Permission::findOrFail($permission_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        
        $notification = array(
            'message' => 'Permission Update Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.permission')->with($notification);
        # code...
    }


    public function DeletePermission($id)
    {
        Permission::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Permission Deleted Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->back()->with($notification);

        # code...
    }

    public function ImportPermission()
    {
        return view('backend.pages.permission.import_permission');
        # code...
    }
    public function Export()
    {
        return Excel::download(new PermissionExport, 'permission.xlsx');
        # code...
    }

    public function Import(Request $request)
    {
        Excel::import(new PermissionImport, $request->file('import_file'));
        
        $notification = array(
            'message' => 'Permission Imported Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.permission')->with($notification);
        # code...
    }

    public function AllRoles()
    {
        $roles = Role::all();
        return view('backend.pages.roles.all_roles', compact('roles'));
        # code...
    }

    public function AddRoles()
    {
        return view('backend.pages.roles.add_roles');
        # code...
    }

    public function StoreRole(Request $request)
    {
        Role::create([
            "name" =>$request -> name ,
        ]);
        $notification = array(
            'message' => 'Permission Imported Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.roles')->with($notification);
        # code...
    }

    public function EditRoles($id)
    {
        $edit_roles = Role::findOrFail($id);
        return view('backend.pages.roles.edit_roles', compact('edit_roles'));
        # code...
    }
    
    public function DeleteRoles($id)
    {
        Role::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Role Deleted Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

        # code...
    }

    public function UpdatedRole(Request $request)
    {
        $role_id = $request->id;
        Role::findOrFail($role_id)->update([
            "name"=>$request->name,
        ]);
        $notification = array(
            'message' => 'Role Updated Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.roles')->with($notification);
        # code...
    }

    public function AddRolesPermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroup();
        return view('backend.pages.rolesetup.add_roles_permission', compact('roles', 'permissions', 'permission_groups'));
        # code...
    }
    public function StorePermissionRole(Request $request)
    {
        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        $notification = array(
            'message' => 'Role Permission Added Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.role.permission')->with($notification);
        # code...
    }

    public function AllRolesPermission()
    {
        $roles = Role::all();
        return view('backend.pages.rolesetup.all_roles_permission', compact('roles'));
        # code...
    }

    public function AdminEditRoles($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroup();
        return view('backend.pages.rolesetup.edit_roles_permission', compact('role', 'permissions', 'permission_groups'));
        
        # code...
    }

    public function AdminRolesUpdate(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.role.permission')->with($notification);
        # code...
    }

    public function AdminDeleteRoles($id)
    {
        $role = Role::findOrFail($id);
        if (!is_null($role)){
            $role->delete();
        }

        $notification = array(
            'message' => 'Role Permission Delete Succesfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        # code...
    }
    //
}
