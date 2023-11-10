<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Category;
use App\Models\Place;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Image;

class AgencyPropertyController extends Controller
{
    public function AllAgencyProperty()
    {

        $agency_id = Auth::user()->id;
        $properties = Property::where('agent_id', $agency_id)->latest()->get();
        return view('agent.pages.property.all_property', compact('properties'));
        # code...
    }

    public function AddAgencyProperty()
    {
        $places = Place::orderBy('id', 'DESC')->get();
        $type = Category::orderBy('id', 'DESC')->get();
        $buildings = Building::orderBy('id', 'DESC')->get();
        return view('agent.pages.property.add_property', compact('places', 'type', 'buildings'));
        # code...
    }

    public function StoreAgencyProperty(Request $request)
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
            'status' => 0,
            'property_image' => $save_url,
            'agent_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Property created Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.agency.property')->with($notification); 
        # code...
    }

    function EditAgencyProperty($id)
    {
        $editData = Property::findOrFail($id);
        $places = Place::orderBy('id', 'DESC')->get();
        $type = Category::orderBy('id', 'DESC')->get();
        $buildings = Building::orderBy('id', 'DESC')->get();
        return view('agent.pages.property.edit_property', compact('editData', 'places', 'type', 'buildings'));

       
        # code...
    }

    public function UpdateAgencyProperty(Request $request)
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
                'property_image' => $save_url,
            ]);
        
           $notification = array(
                'message' => 'Property Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.agency.property')->with($notification); 
            
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
                ]);
            
               $notification = array(
                    'message' => 'Property Udated Successfully',
                    'alert-type' => 'success'
                );
            
                return redirect()->route('all.agency.property')->with($notification); 
            }

        # code...
    }

    public function DeleteAgencyProperty($id)
    {
        $image_delete = Property::findOrFail($id);
        $image = $image_delete->property_image;
        unlink($image);

        Property::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Property Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.agency.property')->with($notification);
        # code...
    }
    //
}
