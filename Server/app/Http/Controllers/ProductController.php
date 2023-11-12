<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index(Request $request){
        $product = Product::all();
        return ProductResource::collection($product);
    }

    public function create(Request $request){
        $request->validate([
            'name' => "required",
            'img_prod' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'category' => "required",
            'price' => "required",
            'status' => "required"
        ]);
        $name = $request->input('name');
        $extension = $request->file('img_prod')->getClientOriginalExtension();
        $imageName = time(). '.'. $extension;
        $request->img_prod->move(public_path('product'), $imageName);
        $category = $request->input('category');
        $price = $request->input('price');
        $status = $request->input('status');

        $res = Product::create([
            'name' => $name,
            'img_prod' => $imageName,
            'category' => $category,
            'price' => $price,
            'status' => $status
        ]);

        return $this->sendResponse(new ProductResource($res), "Product created successfully");

    }
    public function update(Request $request, $id){
        // $id = (int)$id;
        // dd($id);
        $product = Product::find($id);
        // dd($product);
        if(is_null($product)){
            return $this->sendError('data not found', $data, 404);
        }
        $request->validate([
            "name" => "required",
            "img_prod" => "required|image|mimes:jpeg,png,jpg|max:2048",
            "category" => "required",
            "price" => "required",
            "status" => "required"
        ]);

        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        if($request->hasFile('img_prod')){
            if(file_exists(public_path('product' . $product->img_prod))){
                unlink(public_path('product'. $product->img_prod));
            }
            $extension = $request->file('img_prod')->getClientOriginalExtension();
            $imageName = time(). '.'. $extension;
            $request->img_prod->move(public_path('product'), $imageName);
            $product->img_prod = $imageName;
        }
        $res = $product->save();
        return $this->sendResponse(new ProductResource($res), "Product updated successfully");
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return $this->sendResponse(new ProductResource($product),'product deleted successfully');
    }
}
