<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\Building;
use App\Models\Category;
use App\Models\Place;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
Use Image;

class PropertyController extends Controller
{
    public function AllProperty()
    {
        $properties = Property::orderBy('id', 'DESC')->get();
        return view('backend.property.all_property', compact('properties'));
        # code...
    }

    public function AddProperty()
    {
        $agencies = User::where('role', 'agent')->where('status', 'active')->orderBy('id', 'DESC')->get();
        $places = Place::orderBy('id', 'DESC')->get();
        $type = Category::orderBy('id', 'DESC')->get();
        $buildings = Building::orderBy('id', 'DESC')->get();
        $amenity = Amenities::orderBy('id', 'DESC')->get();
        return view('backend.property.add_property', compact('agencies', 'places', 'type', 'buildings', 'amenity'));
        # code...
    }

    public function StoreProduct(Request $request)
    {
        $image = $request->file('property_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(906,950)->save('upload/product/'.$name_gen);
        $save_url = 'upload/product/'.$name_gen;

        Property::insert([
            'category_id' => $request->category_id,
            'place_id' => $request->place_id,
            'amenity' => $request->amenity,
            'property_price' => $request->property_price,
            'property_name' => $request->property_name,
            'property_description' => $request->property_description,
            'property_address' => $request->property_address,
            'property_tags' => $request->property_tags,
            'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
            'property_size' => $request->property_size,
            'property_bedroom' => $request->property_bedroom,
            'property_bathroom' => $request->property_bathroom,
            'property_garage' => $request->property_garage,
            'status' => 1,
            'property_image' => $save_url,
            'agent_id' => $request->agent_id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Property created Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.property')->with($notification); 
        # code...
    }

    public function EditProperty($id)
    {
        $editData = Property::findOrFail($id);
        $agencies = User::where('role', 'agent')->where('status', 'active')->orderBy('id', 'DESC')->get();
        $places = Place::orderBy('id', 'DESC')->get();
        $type = Category::orderBy('id', 'DESC')->get();
        $buildings = Building::orderBy('id', 'DESC')->get();
        $amenity = Amenities::orderBy('id', 'DESC')->get();
        return view('backend.property.edit_property', compact('editData','agencies', 'places', 'type', 'buildings', 'amenity'));
        # code...
    }

    public function UpdateProperty(Request $request)
    {
        $property_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('property_image')) {
    
            $image = $request->file('property_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(906,950)->save('upload/product/'.$name_gen);
            $save_url = 'upload/product/'.$name_gen;
        
    
            if (file_exists($old_img)) {
                unlink($old_img);
             }
    
    
             Property::findOrFail($property_id)->update([
                'category_id' => $request->category_id,
                'place_id' => $request->place_id,
                'amenity' => $request->amenity,
                'property_price' => $request->property_price,
                'property_name' => $request->property_name,
                'property_description' => $request->property_description,
                'property_address' => $request->property_address,
                'property_tags' => $request->property_tags,
                'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
                'property_size' => $request->property_size,
                'property_bedroom' => $request->property_bedroom,
                'property_bathroom' => $request->property_bathroom,
                'property_garage' => $request->property_garage,
                'status' => 1,
                'property_image' => $save_url,
                'agent_id' => $request->agent_id,
            ]);
        
           $notification = array(
                'message' => 'Property Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.property')->with($notification); 
            
            }else{
                Property::findOrFail($property_id)->update([
                    'category_id' => $request->category_id,
                    'place_id' => $request->place_id,
                    'amenity' => $request->amenity,
                    'property_price' => $request->property_price,
                    'property_name' => $request->property_name,
                    'property_description' => $request->property_description,
                    'property_address' => $request->property_address,
                    'property_tags' => $request->property_tags,
                    'property_slug' => strtolower(str_replace(' ', '-', $request->property_name)),
                    'property_size' => $request->property_size,
                    'property_bedroom' => $request->property_bedroom,
                    'property_bathroom' => $request->property_bathroom,
                    'property_garage' => $request->property_garage,
                    'status' => 1,
                    'agent_id' => $request->agent_id,
                ]);
            
               $notification = array(
                    'message' => 'Property Udated Successfully',
                    'alert-type' => 'success'
                );
            
                return redirect()->route('all.property')->with($notification); 
            }

        # code...
    }

    public function DeleteProperty($id)
    {
        $image_delete = Property::findOrFail($id);
        $image = $image_delete->property_image;
        unlink($image);

        Property::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Property Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.property')->with($notification);
        # code...
    }

    public function InactiveProperty($id)
    {
        Property::findOrFail($id)->update([
            'status' => 0,
        ]);
        $notification = array(
            'message' => 'Property Status Changed to inactive',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.property')->with($notification);
        # code...
    }

    public function ActiveProperty($id)
    {
        Property::findOrFail($id)->update([
            'status' => 1,
        ]);
        $notification = array(
            'message' => 'Property Status Changed to Active',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.property')->with($notification);
        # code...
    }
    //
}
