<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Console\Migrations\StatusCommand;

class CategoryController extends Controller
{
    public function list(){
        $cats=Category::paginate(5);

        //dd($cats);
        return view('backend.pages.categories.list', compact('cats'));
    }

    public function create(){
        return view('backend.pages.categories.create');

    }

    public function store(REQUEST $request){
      //  dd($request->all());

        Category::create([
            //database colomn name=>input field name

           'name'=>$request->name,
           'status'=>$request->status,
           'image'=>$request->image,
           'description'=>$request->description
        ]);

        return redirect()->back();
        
    }

    public function deleteCategory(int $category_id)
    {
           $test=Category::find($category_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','category deleted successfully.');
             }else{
                 return redirect()->back()->with('error','category not found.');
             }


//        Product::findOrFail($product_id)->delete();
//        return redirect()->back()->with('message','product deleted successfully.');
    }


    public function viewCategory($category_id)
    {
      $category=Category::find($category_id);
      return view('backend.pages.categories.view',compact('category'));
    }

    public function editCategory($category_id)
    {
        $category=Category::find($category_id);
        return view('backend.pages.categories.edit',compact('category'));
    }

    public function update(Request $request,$category_id)
    {

//        dd($request->all());
//        Product::find($product_id)->update([
//            'category_id' => $request->category_id,
//            'stock' => $request->product_stock,
//            'price' => $request->product_price,
//            'status' => $request->status,
//            'description' => $request->description
//        ]);

        $category=Category::find($category_id);
        $fileName=$category->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }


        $category->update([

            'name'=>$request->name,
            'status'=>$request->status,
            'image'=>$request->image,
            'description'=>$request->description
            
        ]);

        return redirect()->route('categories.list')->with('message','Update success.');

    }

}
