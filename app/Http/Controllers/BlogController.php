<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $allblog = Blog::orderBy('id', 'DESC')->get();
        return view('backend.blog.all_blog', compact('allblog'));
    }

    public function AddBlog()
    {
        $categories = BlogCategory::latest()->get();
        return view('backend.blog.add_blog',compact('categories'));
        # code...
    }

    public function StoreBlog(Request $request)
    {
        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,270)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'blog_name' => $request->blog_name,
            'blog_slug' => (strtolower(str_replace(' ', '-',$request->blog_name))),
            'category_id'=>$request->category_id,
            'blog_tags' => $request->blog_tags,
            'blog_description'=>$request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Created Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.blog')->with($notification); 
        # code...
    }

    public function EditBlog($id)
    {
        $editData = Blog::findOrFail($id);
        $categories = BlogCategory::latest()->get();
        return view('backend.blog.edit_blog', compact('editData','categories'));
        # code...
    }

    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('blog_image')) {
    
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,270)->save('upload/blog/'.$name_gen);
            $save_url = 'upload/blog/'.$name_gen;
        
    
            if (file_exists($old_img)) {
                unlink($old_img);
             }
    
    
             Blog::findOrFail($blog_id)->update([
                'blog_name' => $request->blog_name,
                'blog_slug' => (strtolower(str_replace(' ', '-',$request->blog_name))),
                'category_id'=>$request->category_id,
                'blog_tags' => $request->blog_tags,
                'blog_description'=>$request->blog_description,
                'blog_image' => $save_url,
            ]);
        
           $notification = array(
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('all.blog')->with($notification); 
            
            }else{
                Blog::findOrFail($blog_id)->update([
                    'blog_name' => $request->blog_name,
                    'blog_slug' => (strtolower(str_replace(' ', '-',$request->blog_name))),
                    'category_id'=>$request->category_id,
                    'blog_tags' => $request->blog_tags,
                    'blog_description'=>$request->blog_description,
                ]);
            
               $notification = array(
                    'message' => 'Blog Updated Successfully',
                    'alert-type' => 'success'
                );
            
                return redirect()->route('all.blog')->with($notification); 
            }
        # code...
    }

    public function DeleteBlog($id)
    {
        $deleteImage = Blog::findOrFail($id);
        $image = $deleteImage->blog_image;
        unlink($image);

        Blog::findOrFail($id)->delete();
        $notification = array([
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        ]);

        return redirect()->route('all.blog')->with($notification); 
        # code...
    }
    //
}
