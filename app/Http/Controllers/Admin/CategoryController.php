<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller

{
    public function AllCategory()
    {
        $categorie = Category::latest()->get();
        return view('backend.category.all_category', compact('categorie'));
        # code...
    }

    public function AddCategory()
    {
        return view('backend.category.add_category');
        # code...
    }

    public function StoreCategory(Request $request)
    {

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name))
        ]);
        
        $notification = array(
            'message' => 'Category Created Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.category')->with($notification);
        # code...
    }

    public function EditCategory($id)
    {
        $editData = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('editData'));
        # code...
    }

    public function UpdateCategory(Request $request)
    {
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name))
        ]);

        $notification = array(
            'message' => 'Category Updated Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.category')->with($notification);
        # code...
    }

    public function DeleteCategory($id)
    {

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Succesfully',
            'alert-type' => 'success',
         );

         return redirect()->route('all.category')->with($notification);
        # code...
    }
    //
}
