<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function AllBuilding()
    {
        $buildings = Building::latest()->get();
        return view('backend.building.all_building', compact('buildings'));
        # code...
    }

    public function AddBuilding()
    {
        return view('backend.building.add_building');
        # code...
    }

    public function StoreBuilding(Request $request)
    {
        Building::insert([
            'building_name' => $request->building_name,
        ]);
        $notification=array(
            'message' => ' Buidling name as been added sucessfully ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.building')->with($notification);
        # code...
    }

    public function EditBuilding($id)
    {
        $building = Building::findOrFail($id);
        return view('backend.building.edit_building', compact('building'));
        # code...
    }

    public function UpdateBuilding(Request $request)
    {
        $building_id = $request->id;
        Building::findOrFail($building_id)->update([
            'building_name' => $request->building_name,
        ]);
        $notification=array(
            'message' => ' Buidling name Updated sucessfully ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.building')->with($notification);
        # code...
    }

    public function DeleteBuilding($id)
    {
        Building::findOrFail($id)->delete();
        $notification=array(
            'message' => ' Buidling name Deleted sucessfully ',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.building')->with($notification);
       
        # code...
    }
    //
}
