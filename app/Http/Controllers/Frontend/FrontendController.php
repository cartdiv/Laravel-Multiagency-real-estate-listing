<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Partner;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\AgentMessages;
use App\Models\BlogCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function FrontendIndex() {
        return view('frontend.index');
    }

    public function PropertyDetail($id, $slug)
    {
        $property = Property::findOrFail($id);
        
        $property_tag = $property->property_tags;
        $tags = explode(',', $property_tag);
        
        $property->incrementPopularity();
   
        $agent = Property::latest()->get();
        return view('frontend.page.property_detail', compact('property', 'agent', 'tags'));
        # code...

    }

    public function SendMessage(Request $request, $id)
    {
        $agent = Property::findOrFail($id);
        AgentMessages::insert([
            'agency_id' => $agent->agent_id,
            'frist_name' => $request->frist_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'messsage' => $request->messsage,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Message Sent Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification); 
        # code...
    }

    public function Property()
    {
        $properties = Property::where('status', 1)->orderBy('id', 'DESC')->get();
        $agents = Agent::orderBy('id', 'DESC')->limit(4)->get();
        return view('frontend.page.properties', compact('properties', 'agents'));
        # code...
    }

    public function Blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $blog_cat = BlogCategory::orderBy('id', 'DESC')->limit(5)->get();

        return view('frontend.page.blogs', compact('blogs', 'blog_cat'));

        # code...
    }

    public function BlogDetail($id, $slug)
    {
        $blogs = Blog::findOrFail($id);

        $blog_tags = $blogs->blog_tags;
        $tags = explode(',', $blog_tags);

        $blog_cat = BlogCategory::orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.page.blogs_details', compact('blogs', 'tags', 'blog_cat'));

        # code...
    }

    public function Agencys()
    {
        $agencys = User::where('status', 'active')->where('role', 'agent')->orderBy('id', 'DESC')->get();
        return view('frontend.page.all_agency', compact('agencys'));
        # code...
    }

    public function AgencyDetail($id)
    {
        $agencyDetail = User::findOrFail($id);
        return view('frontend.page.view_agency', compact('agencyDetail'));
        # code...
    }

    public function AgentDetail($id)
    {
        $agentDetail = Agent::findOrFail($id);
        return view('frontend.page.view_agent', compact('agentDetail'));
        # code...
    }

    public function AgentReg()
    {
        return view('agent.agent_register');
        # code...
    }

    public function StoreAgentReg(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' =>  Hash::make($request->password),
            'role' => 'agent',
            'status' => 'inactive',
            'created_at' => Carbon::now(),
        ]);
      
        
        # code...
        $nottification = array(
            'message' => 'You account as been created Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('agent.login.option')->with($nottification);
        # code...
    }
    //
}
