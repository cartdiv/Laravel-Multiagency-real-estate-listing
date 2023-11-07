<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Image;

class PlaceController extends Controller
{

    public function AllPlace()
    {
        $allplace = Place::latest()->get();
        return view('backend.place.all_place', compact('allplace'));
        # code...
    }

    public function AddPlace()
    {
        return view('backend.place.add_place');
        # code...
    }

    public function StorePlace(Request $request)
    {
        $image = $request->file('place_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(270,290)->save('upload/place/'.$name_gen);
        $save_url = 'upload/place/'.$name_gen;

        Place::insert([
            'place_name' => $request->place_name,
            'place_slug' => strtolower(str_replace(' ', '-',$request->place_name)),
            'place_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Place Created Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.place')->with($notification);
        # code...
    }

    public function EditPlace($id)
    {
        $editData = Place::findOrFail($id);
        return view('backend.place.edit_place', compact('editData'));
        # code...
    }

    public function UpdatePlace(Request $request)
    {
        $place_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('place_image')) {
    
            $image = $request->file('place_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(270,290)->save('upload/place/'.$name_gen);
            $save_url = 'upload/place/'.$name_gen;
        
    
            if (file_exists($old_img)) {
                unlink($old_img);
             }
    
    
             Place::findOrFail($place_id)->update([
                'place_name' => $request->place_name,
                'place_slug' => strtolower(str_replace(' ', '-',$request->place_name)),
                'place_image' => $save_url, 
            ]);
        
           $notification = array(
                'message' => 'Place Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.place')->with($notification); 
            
            }else{
                Place::findOrFail($place_id)->update([
                    'place_name' => $request->place_name,
                    'place_slug' => strtolower(str_replace(' ', '-',$request->place_name)),
                ]);
            
               $notification = array(
                    'message' => 'Place Udated Successfully',
                    'alert-type' => 'success'
                );
            
                return redirect()->route('all.place')->with($notification); 
            }
    
        # code...
    }

    public function DeletePlace($id)
    {
        $image = Place::findOrFail($id);
        $imageDelete = $image->place_image;
        unlink($imageDelete);
        
        Place::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Place Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.place')->with($notification); 
        # code...
    }
    //
}
