<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function AllTestimonial()
    {
        $testimonial = Testimonial::latest()->get();
        return view('backend.testimonial.all_testimonial', compact('testimonial'));
        # code...
    }

    public function AddTestimonial()
    {
        return view('backend.testimonial.add_testimonial');

        # code...
    }

    public function CreateTestimonial(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,380)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;
    
        Testimonial::insert([
            'name' => $request->name,
            'rate' => $request->rate,
            'testimonial_text' => $request->testimonial_text,
            'image' => $save_url, 
        ]);
    
       $notification = array(
            'message' => 'Testimonial Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.testimonial')->with($notification); 
    
        
        # code...
    }

    public function EditTestimonial($id)
    {
        $editData = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit_testimonial', compact('editData'));
        # code...
    }
    
    public function UpdateTestimonial(Request $request)
    {
        $testimonial_id = $request->id;
        $old_img = $request->old_image;
    
        if ($request->file('image')) {
    
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,380)->save('upload/slider/'.$name_gen);
        $save_url = 'upload/slider/'.$name_gen;
    

        if (file_exists($old_img)) {
            unlink($old_img);
         }


         Testimonial::findOrFail($testimonial_id)->update([
            'name' => $request->name,
            'rate' => $request->rate,
            'testimonial_text' => $request->testimonial_text,
            'image' => $save_url, 
        ]);
    
       $notification = array(
            'message' => 'Testimonial Udated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.testimonial')->with($notification); 
        
        }else{
            Testimonial::findOrFail($testimonial_id)->update([
                'name' => $request->name,
                'rate' => $request->rate,
                'testimonial_text' => $request->testimonial_text,
            ]);
        
           $notification = array(
                'message' => 'Testimonial Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.testimonial')->with($notification); 
        }

        # code...
    }


    public function DeleteTestimonial($id)
    {
        $image = Testimonial::findOrFail($id);
        $imageDelete = $image->image;
        unlink($imageDelete);

        Testimonial::findOrFail($id)->delete();
        $notification = array(
            'message' => ' Testimonial as been deleted succesfully ',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


        
        # code...
    }
    //
}
