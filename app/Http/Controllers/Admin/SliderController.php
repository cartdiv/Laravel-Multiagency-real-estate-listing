<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function AllSlider() {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('backend.slider.all_slider', compact('sliders'));
    }

    public function AddSlider()
    {
        return view('backend.slider.add_slider');
        # code...
    }
    public function CreateSlider(Request $request)
    {
        $image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(906,950)->save('upload/slider/'.$name_gen);
        $save_url = 'upload/slider/'.$name_gen;
    
        Slider::insert([
            'slider_header' => $request->slider_header,
            'slider_title' => $request->slider_title,
            'slider_content' => $request->slider_content,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'slider_image' => $save_url, 
        ]);
    
       $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.slider')->with($notification); 
    
        
        # code...
    }

    public function EditSlider($id)
    {
        $edit_slider = Slider::findOrFail($id);
        return view('backend.slider.edit_slider', compact('edit_slider'));
        # code...
    }

    public function UpdateSlider(Request $request)
    {

        $slider_id = $request->id;
        $old_img = $request->old_image;
    
        if ($request->file('slider_image')) {
    
        $image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(906,950)->save('upload/slider/'.$name_gen);
        $save_url = 'upload/slider/'.$name_gen;
    

        if (file_exists($old_img)) {
            unlink($old_img);
         }


        Slider::findOrFail($slider_id)->update([
            'slider_header' => $request->slider_header,
            'slider_title' => $request->slider_title,
            'slider_content' => $request->slider_content,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'slider_image' => $save_url, 
        ]);
    
       $notification = array(
            'message' => 'Slider Udated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.slider')->with($notification); 
        
        }else{
            Slider::findOrFail($slider_id)->update([
                'slider_header' => $request->slider_header,
                'slider_title' => $request->slider_title,
                'slider_content' => $request->slider_content,
                'button_text' => $request->button_text,
                'button_url' => $request->button_url,
            ]);
        
           $notification = array(
                'message' => 'Slider Udated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.slider')->with($notification); 
        }
        # code...
    }

    public function DeleteSlider($id)
    {
        $slider = Slider::findOrFail($id);
        $img = $slider->slider_image;
        unlink($img ); 
    
        Slider::findOrFail($id)->delete();
    
        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification); 
        # code...
    }
    //
}
