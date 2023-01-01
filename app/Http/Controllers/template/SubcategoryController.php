<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    //
    public function subcategorylist(){
        $subcategoryies=Subcategory::all();
        return view('template.pages.subcategory.list',compact('subcategoryies'));
    }

    public function subcategoryform(){
        return view('template.pages.subcategory.form');
    }

    public function subcategorystore(Request $request){
        $request->validate([
            'subcategory_name'=>'required',
        ]);
        subcategory::create([
            'subcategory_name'=>$request->subcategory_name,

        ]);
        return back();
    }

    public function subdestroy($id){
        subcategory::find($id)->delete();
        return back();           
    }
    public function subedit($id){
        $subcategoryies=Subcategory::find($id);
        return view('template.pages.subcategory.editform',compact('subcategoryies'));
    }

    public function subcategoryupdate(Request $request, $id){
        $subcategoryies=Subcategory::find($id);
        $subcategoryies->update([
            'subcategory_name'=>$request->subcategory_name,
        ]);
        return to_route('subcategory.list');
        
    }

}
