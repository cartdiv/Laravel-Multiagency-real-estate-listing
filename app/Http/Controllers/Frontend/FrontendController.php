<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Partner;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function FrontendIndex() {
        return view('frontend.index');
    }

    public function PropertyDetail($id, $slug)
    {
        $property = Property::findOrFail($id);
        
        $property->incrementPopularity();
               
        $agent = Property::latest()->get();
        return view('frontend.page.property_detail', compact('property', 'agent'));
        # code...
   

    

    


    }

    //
}
