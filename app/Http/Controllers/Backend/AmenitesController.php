<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Illuminate\Http\Request;


class AmenitesController extends Controller
{
    public function AllAmenities()
    {
        $amenitie = Amenities::latest()->get();
        return view('backend.amenities.all_amenities', compact('amenitie'));
        # code...
    }

    public function AddAmenities()
    {
        return view('backend.amenities.add_amenities');
        # code...
    }

    public function StoreAmenities(Request $request)
    {
        Amenities::insert([
            'amenities_name' => $request->amenities_name,
        ]);

        $notification = array(
            'message' => 'Amenitie Created Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.amenities')->with($notification);
        # code...
    }


    public function EditAmenities($id)
    {
        $amenities = Amenities::findOrFail($id);
       return view('backend.amenities.edit_amenities',compact('amenities'));
        # code...
    }
    public function UpdateAmenities(Request $request)
    {
        $amenitie_id = $request->id;
        Amenities::findOrFail($amenitie_id)->update([
            'amenities_name' => $request->amenities_name,
        ]);

        $notification = array(
            'message' => 'Amenitie Updated Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.amenities')->with($notification);
        # code...
    }

    public function DeleteAmenities($id)
    {
        Amenities::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Amenitie Deleted Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->back()->with($notification);
        # code...
    }
    //
}
