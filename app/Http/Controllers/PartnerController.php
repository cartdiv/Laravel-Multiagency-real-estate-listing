<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Image;

class PartnerController extends Controller
{
    public function AllPartner()
    {
        $partners = Partner::latest()->get();
        return view('backend.partner.all_partner',compact('partners'));
        # code...
    }

    public function AddPartner()
    {
        return view('backend.partner.add_partner');
        # code...
    }

    public function StorePartner(Request $request)
    {
        $image = $request->file('partner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(125,109)->save('upload/partner/'.$name_gen);
        $save_url = 'upload/partner/'.$name_gen;

        Partner::insert([
            'partner_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Partner Image Added Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.partner')->with($notification);
        # code...
    }

    public function EditPartner($id)
    {
        $edit_page = Partner::findOrFail($id);
        return view('backend.partner.edit_partner',compact('edit_page'));
        # code...
    }

    public function UpdatePartner(Request $request)
    {
        $partner_id = $request->id;
        $old_img = $request->old_image;
    
    
        $image = $request->file('partner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(125,109)->save('upload/partner/'.$name_gen);
        $save_url = 'upload/partner/'.$name_gen;
    

        if (file_exists($old_img)) {
            unlink($old_img);
         }


         Partner::findOrFail($partner_id)->update([
            'partner_image' => $save_url,
        ]);
    
       $notification = array(
            'message' => 'Partner Image Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.partner')->with($notification); 
        # code...
    }

    public function DeletePartner($id)
    {
        $delete_data = Partner::findOrFail($id);
        $image = $delete_data->partner_image;
        unlink($image);
        Partner::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Partner Image deleted',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.partner')->with($notification);
        # code...
    }
    //
}
