<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Console\Migrations\StatusCommand;

class CategoryController extends Controller
{
    public function list()
    {
        $cats = Category::paginate(5);
        //dd($cats);
        return view('backend.pages.categories.list', compact('cats'));
    }

    public function create()
    {
        return view('backend.pages.categories.create');
    }

    public function store(REQUEST $request)
    {
        //  dd($request->all());
        $request->validate([
            "name"=>"required|unique:categories,name"
        ]);
         //dd($fileName);
        $fileName = null;
        if ($request->hasFile('image')) 
        {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
    //   dd($fileName);
        Category::create([
            //database colomn name=>input field name
            'name' => $request->name,
            'status' => $request->status,
            'image' => $fileName,
            'description' => $request->description
        ]);
        return redirect()->route('Categories');
    }

    public function deleteCategory(int $category_id)
    {
        $test = Category::find($category_id);
        if ($test) {
            $test->delete();
            return redirect()->back()->with('message', 'category deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'category not found.');
        }
    }

    public function viewCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('backend.pages.categories.view', compact('category'));
    }

    public function editCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('backend.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $category_id)
    {

        $category = Category::find($category_id);
        $fileName = $category->image;

        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        $category->update([

            'name' => $request->name,
            'status' => $request->status,
            'image' => $fileName,
            'description' => $request->description
        ]);
        return redirect()->route('Categories')->with('message', 'Update success.');
    }
}
