<?php

namespace App\Http\Controllers;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{

    public function AllBlogCategory()
    {
        $allCategory = BlogCategory::orderBy('id', 'DESC')->get();
        return view('backend.blogcategory.all_blogcategory', compact('allCategory'));
        # code...
    }

    public function AddBlogCategory()
    {
        return view('backend.blogcategory.add_blogcategory');
        # code...
    }

    public function StoreBlogCategory(Request $request)
    {
        BlogCategory::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
        ]);

        $notification = array([
            'message' => 'Blog Category Inserted Successfully!',
            'alert-type' => 'success'
        ]);

        return redirect()->route('all.blog.category')->with($notification);
        # code...
    }

    public function EditBlogCategory($id)
    {
        $editData = BlogCategory::findOrFail($id);
        return view('backend.blogcategory.edit_blogcategory', compact('editData'));
        # code...
    }

    public function UpdateBlogCategory(Request $request)
    {
        $category_id = $request->id;
        BlogCategory::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name))
            ]);
            $notification = array([
                'message' => 'Blog Category Updated Successfully!',
                'alert-type' => 'success'
                ]);
                return redirect()->route('all.blog.category')->with($notification);
        # code...
    }

    public function DeleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();
        $notification = array([
            'message' => 'Blog Category Deleted Successfully!',
            'alert-type' => 'success'
            ]);
            
            return redirect()->route('all.blog.category')->with($notification);
        # code...
    }
    //
}
