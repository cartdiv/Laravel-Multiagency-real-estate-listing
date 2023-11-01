<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;


class PropertyTypeController extends Controller
{
    public function AllType()
    {
        $type = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('type'));
    }

    public function AddPropertyType()
    {
       return view('backend.type.add_type');
        # code...
    }

    public function CreatePropertyType(Request $request)
    {
        PropertyType::insert([
            'type_name'=>$request->type_name,
            'type_icon'=>$request->type_icon,
        ]);

       $notification = array(
            'message'=>'Property Type Inserted Successfully!',  //message to display on notification bar
            'alert-type' => 'success',  //alert type (success/error/warning)
        );

        return redirect()->route('all.type')->with($notification);
        # code...
    }

    

    public function EditPropertyType($id)
    {
        $edit_type = PropertyType::findOrFail($id);
       return view('backend.type.edit_type',compact('edit_type'));
        # code...
    }

    public function UpdatePropertyType(Request $request)
    {
        $updateproperty = $request->id;
        PropertyType::findOrFail($updateproperty)->update([

            'type_name'=>$request->type_name,
            'type_icon'=>$request->type_icon,
        ]);
        $notification = array(
            'message'=>'Property Type Updated Successfully!',  //message to display on notification bar
            'alert-type' => 'success',  //alert type (success/error/warning)
        );

        return redirect()->route('all.type')->with($notification);
        # code...
    }
    public function DeletePropertyType($id)
    {
        PropertyType::findOrFail($id)->delete();
        $notification = array(
            'message'=>'Property Type deleted Successfully!',  //message to display on notification bar
            'alert-type' => 'success',  //alert type (success/error/warning)
        );

        return redirect()->route('all.type')->with($notification);
        # code...
    }
}
