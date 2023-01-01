<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //  index 
    public function index(){
        // $categories = Category::latest()->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('category.index', compact('categories'));
    }

    //  create
    public function create(){
        return view('category.create');
    }

    //  store
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories',
            'discount' => 'required',
        ],[
            'name.required' => 'Category name is required',
            'name.unique' => 'Category name is already exists',
            'discount.required' => 'Category discount is required',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->discount = $request->discount;
        $category->status = 1;
        $category->save();

        $notification = [
            'message'=> 'Category Save Successfully!',
            'alert-type'=> 'success',
        ];
        return redirect()->route('category.index');
    }

    //  delete
    public function destroy($id){
        Category::find($id)->delete();   
        return redirect()->back();
    }
}
