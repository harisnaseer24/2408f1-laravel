<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Products extends Controller
{
   public function index () {
    $products = Product::all();
    return view('products.index',compact('products'));    
}
//showing form
 public function createProduct () {
  
    return view('products.create');    
}
// data insertion in database
 public function addProduct (Request $request) {
  
  $request->validate([
        "title"=>"required",
        "description"=> "required",
        "price"=> "required",
        "stock"=> "required",
        "image"=> "required|image|mimes:png,jpg,jpeg| max:10000",
       ]);
  $imagename = time().".".$request->image->extension();//34534535435435435.jpg

       $request->image->move(public_path("/product_uploads"), $imagename);

       $product = new Product;
       $product->title = $request->title;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->stock = $request->stock;
       $product->image = $imagename;
       $product->save();
       return back()->withSuccess("Product added Successfully..!");
}


// delete product
   public function deleteProduct ($id) {
    $product = Product::find($id);
    $product->delete();
    return back()->withSuccess("Product Deleted Successfully..!");    
}

// edit product (show data in form)
   public function editProduct ($id) {
    $product = Product::find($id);
    return view('products.edit',compact('product'));
   
}

//update product
 public function updateProduct (Request $request) {
  $request->validate([
        "title"=>"required",
        "description"=> "required",
        "price"=> "required",
        "stock"=> "required",
        "image"=> "required|image|mimes:png,jpg,jpeg| max:10000",
       ]);

  $imagename = time().".".$request->image->extension();//34534535435435435.jpg
       $request->image->move(public_path("/product_uploads"), $imagename);
       $product = Product::find($request->id);
       $product->title = $request->title;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->stock = $request->stock;
       $product->image = $imagename;
       $product->save();
       return view("products.index")->withSuccess("Product updated Successfully..!");
}
    public function searchProduct(Request $request){
        $search = $request->input('query');
        $products = Product::where('title','like','%'. $search.'%')->orWhere('description','like','%'. $search .'%')->get();
        return view("products.index",compact('products'));

    }

}