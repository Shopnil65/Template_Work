<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //
    public function productslist(){
        $products = Products::all();
        return view('template.pages.products.list',compact('products'));
    }
    public function productsform(){
        return view('template.pages.products.form');
    }
   public function productsstore(Request $request){
    Products::create([
        'product_name'=>$request->product_name,
        'product_warenty'=>$request->product_warenty,
        'stock_status'=>$request->stock_status,
    ]);
    return to_route('products.list');
}  
public function productsdestroy($id){
    Products::find($id)->delete();
    return back();
}
public function productsedit($id){
    $products = Products::find($id);
    return view('template.pages.products.editform',compact('products'));
}
public function productsupdate(Request $request,$id){
    $products=products::find($id);
    $products->update([
        'product_name'=>$request->product_name,
        'product_warenty'=>$request->product_warenty,
        'stock_status'=>$request->stock_status,
        
    ]);
    return to_route('products.list');
}
   
}

