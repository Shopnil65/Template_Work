<?php

namespace App\Http\Controllers\template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    public function list(){
        $categoryies=Category::all();
       
        return view('template.pages.category.list',compact('categoryies'));
    }

    public function createForm(){
        return view('template.pages.category.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'category_name'=>'required',
        ]);
        Category::create([
            'category_name'=>$request->category_name
        ]);
        return back();
    }


        public function destroy($id){
            Category::find($id)->delete();
            return back();           
        }

       public function categoryedit($id){
        $categoryies=Category::find($id);
        return view('template.pages.category.editform',compact('categoryies'));
       }
       public function update(Request $request, $id){
        $categoryies=Category::find($id);
        $categoryies->update([
            'category_name'=>$request->category_name,
        ]);
        return to_route('categorylist');
        
    }
}
